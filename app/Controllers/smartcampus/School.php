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

class School extends Controller
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
        $data['title'] = 'School | Smart Campus';
        $session = session();
        $email = \Config\Services::email();        
        #call api
        $apidata = $session->admin; 
        // var_dump($session->admin['Authorization']); die;
        $response = $this->Smartcampusapi->getUser($apidata);
        $body = $response->getBody();
        # get data in decoded format
        if (strpos($response->getHeader('content-type'), 'application/json') !== false)
        {
            $responseBody = json_decode($body);
        }
        $data['uri'] = $this->request->uri->getSegment(1);
        $data['user'] = $responseBody->user;
        #call endpoint
        $getSchools = $this->Smartcampusapi->getSchools($apidata);
        # get data in decoded format
        $fmtSchools = json_decode($getSchools->getBody());
        #count schools
        $data['countSchools'] = $fmtSchools->data->count;
        #get array of schools
        $data['allSchools'] =  $fmtSchools->data->rows;

        echo view('smartcampus/school', $data);
    }

    #addschool
    public function addschool(){
        // var_dump($this->request->getVar()); die;
        if(!session()->admin){
            return redirect()->to('logout');
        }
        $data['title'] = 'Login | Smart Campus';
        $session = session();
        $email = \Config\Services::email();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'school' => 'required|min_length[5]',
                'aka' => 'required',
                'city' => 'required',
            ];

            if($this->validate($rules)){
                $userdata = [
                    'school' => $this->request->getVar('school'),
                    'aka' => $this->request->getVar('aka'),
                    'city' => $this->request->getVar('city'),
                    'Authorization' => $session->admin['Authorization']
                ];
                $response = $this->Smartcampusapi->createschool($userdata);
                $body = $response->getBody();
                # get data in decoded format
                if (strpos($response->getHeader('content-type'), 'application/json') !== false)
                {
                    $responseBody = json_decode($body);
                }
                if($responseBody->status == 'error'){
                    $session->setFlashdata('error', $responseBody->message);
                    return redirect()->to(base_url('school'));
                }
                else if($responseBody->status == 'success'){
                    #session data 
                    $session->setFlashdata('success', $responseBody->message);
                    return redirect()->to(base_url('school'));
                }
            }
            else{
                $data['validation'] = $this->validator;
                return redirect()->to(base_url('school'));
            }
        }
    }

    #delete school

    public function deleteSchool(){
        // var_dump($this->request->getVar()); die;
        if(!session()->admin){
            return redirect()->to('logout');
        }
        $session = session();
        if($this->request->getMethod() == 'post'){
            $rules = [
                'school_id' => 'required',
            ];

            if($this->validate($rules)){
                $userdata = [
                    'school_id' => $this->request->getVar('school_id'),
                    'Authorization' => $session->admin['Authorization']
                ];
                $response = $this->Smartcampusapi->deleteSchool($userdata);
                $body = $response->getBody();
                # get data in decoded format
                if (strpos($response->getHeader('content-type'), 'application/json') !== false)
                {
                    $responseBody = json_decode($body);
                }
                if($responseBody->status == 'error'){
                    $session->setFlashdata('error', $responseBody->message);
                    return redirect()->to(base_url('school'));
                }
                else if($responseBody->status == 'success'){
                    #session data 
                    $session->setFlashdata('success', $responseBody->message);
                    return redirect()->to(base_url('school'));
                }
            }
            else{
                $data['validation'] = $this->validator;
                return redirect()->to(base_url('school'));
            }
        }
    }

    #edit school

    public function editSchool(){
        // var_dump($this->request->getVar()); die;
        if(!session()->admin){
            return redirect()->to('logout');
        }
        $session = session();
        if($this->request->getMethod() == 'post'){
            $rules = [
                'school_id' => 'required',
            ];

            if($this->validate($rules)){
                $userdata = [
                    'school_id' => $this->request->getVar('school_id'),
                    'school' => $this->request->getVar('school'),
                    'aka' => $this->request->getVar('aka'),
                    'city' => $this->request->getVar('city'),
                    'Authorization' => $session->admin['Authorization']
                ];
                $response = $this->Smartcampusapi->editSchool($userdata);
                $body = $response->getBody();
                # get data in decoded format
                if (strpos($response->getHeader('content-type'), 'application/json') !== false)
                {
                    $responseBody = json_decode($body);
                }
                if($responseBody->status == 'error'){
                    $session->setFlashdata('error', $responseBody->message);
                    return redirect()->to(base_url('school'));
                }
                else if($responseBody->status == 'success'){
                    #session data 
                    $session->setFlashdata('success', $responseBody->message);
                    return redirect()->to(base_url('school'));
                }
            }
            else{
                $data['validation'] = $this->validator;
                return redirect()->to(base_url('school'));
            }
        }
    }
}