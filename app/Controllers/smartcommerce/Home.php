<?php namespace App\Controllers\smartcommerce;

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
        $data['title'] = 'Commerce | Smart Campus';
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
        $data['user'] = $responseBody->user;
        $data['uri'] =$this->request->uri->getSegment(1);
        // var_dump($this->request->uri->getSegment(1)); die;
        echo view('smartcommerce/dashboard', $data);
    }
}