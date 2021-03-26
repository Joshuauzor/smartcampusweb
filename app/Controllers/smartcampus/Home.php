<?php namespace App\Controllers\smartcampus;

use App\Models\User_model;
use CodeIgniter\Controller;
use App\Libraries\Smartcampusapi;

// import configurations
use Config\Services;
use Config\Database;

// import model
// use App\Models\UsersModel;
// use App\Models\MasterModel;
// use App\Models\RequestModel;

class Home extends Controller
{

    public function __construct()
    {
        helper(['form','url','date']);
        $this->Smartcampusapi = new Smartcampusapi();
        if(!session()->admin){
            return redirect()->to('logout');
        }
    }

    public function index()
	{
        if(!session()->admin){
            return redirect()->to('admin/logout');
        }
        $data['title'] = 'Dashboard | Smart Campus';
        $session = session();
        $email = \Config\Services::email();        
        #call api
        $apidata = $session->admin; 
        $response = $this->Smartcampusapi->getUser($apidata);
        $body = $response->getBody();
        # get data in decoded format
        if (strpos($response->getHeader('content-type'), 'application/json') !== false)
        {
            $responseBody = json_decode($body);
            // var_dump($responseBody->user); die;
        }
        $data['uri'] = $this->request->uri->getSegment(1);
        $data['user'] = $responseBody->user;
        #call endpoint
        $getSchools = $this->Smartcampusapi->getSchools($apidata);
        # get data in decoded format
        $fmtSchools = json_decode($getSchools->getBody());
        #count schools
        $data['countSchools'] = $fmtSchools->data->count;
        echo view('smartcampus/dashboard', $data);
    }
}