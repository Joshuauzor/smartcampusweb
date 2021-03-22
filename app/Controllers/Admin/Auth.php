<?php namespace App\Controllers\Admin;

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

class Auth extends Controller
{

    public $sca;
    public function __construct()
    {
        helper(['form','url','date']);
        $this->Smartcampusapi = new Smartcampusapi();
    }


    // public function index()
	// {
    //     // $data['title'] = 'Login | Smart Campus';
    //     $session = session();
    //     $email = \Config\Services::email();

    //     // call lib
    //     // $data = 'hello';
    //     $userdata = [
    //         'email' => 'Joshuauzor10@gmail.com',
    //         'name' => 'Joshua Dev',
    //         'reg_no' => '18/CSC/177',
    //         'password' => 'hashedPass',
    //         'confirm_pass' => 'hashedPass',
    //         'gender' => 'male',
    //         'role' => '1',
    //         'status'=> '1',
    //         'school_id' => 1,
    //         'level_id' => 1,
    //         'semester_id' => 1,

    //     ];
    //     $response = $this->Smartcampusapi->login($userdata);
    //     return $response;
    // }

    // public function index()
	// {
    //     $data['title'] = 'Login | Smart Campus';
    //     $session = session();
    //     $email = \Config\Services::email();

    //     if($this->request->getMethod() == 'post'){
    //         $rules = [
    //             'email' => [
    //                 'rules' =>  'required|min_length[5]|valid_email|trim',
    //                 'errors' => [
    //                     'valid_email' => 'Please Enter A Valid Email',
    //                     'required' => 'Email is required',
    //                     'min_length' => 'Email is too short'
    //                 ]
    //             ], 
    //             'password' => 'required|min_length[5]',
                
    //         ];

    //         if($this->validate($rules)){
    //             // use throttler
    //             $User_Model = new User_model();

    //             $user = $User_Model->getMail($this->request->getVar('email'));
    //             if($user){
    //                 $verifyPass = password_verify($this->request->getVar('password'), $user->password);
    //                 if($verifyPass){
    //                     if($user->status == 'active'){
    //                         if($user->role == 'super_admin'){
    //                             // set session
    //                             return redirect()->to(base_url('dashboard'));
    
    //                         }
    //                         else if($user->role == 'admin'){
    //                             return redirect()->to(base_url('dashboard'));
    //                         }
    //                     }
    //                     else{
    //                         // activate
    //                         $session->setFlashdata('error', 'Please check your mail to activate your account or Contact Admin');
    //                         return redirect()->to(current_url());
    //                     }
    //                 }
    //                 else{
    //                     $session->setFlashdata('error', 'Incorrect Email and/or Password');
    //                     return redirect()->to(current_url());
    //                 }
    //             }
    //             else{
    //                 $session->setFlashdata('error', 'Incorrect Email and/or Password');
    //                 return redirect()->to(current_url());
    //             }
    //             // else throttler
    //         }
    //         else{
    //             $data['validation'] = $this->validator;
    //         }
    //     }

    //     echo view('admin/login', $data);
    // }

    public function index()
	{
        $data['title'] = 'Login | Smart Campus';
        $session = session();
        $email = \Config\Services::email();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'email' => [
                    'rules' =>  'required|min_length[5]|valid_email|trim',
                    'errors' => [
                        'valid_email' => 'Please Enter A Valid Email',
                        'required' => 'Email is required',
                        'min_length' => 'Email is too short'
                    ]
                ], 
                'password' => 'required|min_length[5]',
                
            ];

            if($this->validate($rules)){
                $userdata = [
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                ];
                $response = $this->Smartcampusapi->login($userdata);
                $body = $response->getBody();
                # get data in decoded format
                if (strpos($response->getHeader('content-type'), 'application/json') !== false)
                {
                    $responseBody = json_decode($body);
                }
                // var_dump($responseBody->token); die;

                if($responseBody->status == 'error'){
                    $session->setFlashdata('error', $responseBody->message);
                    return redirect()->to(base_url());
                }
                else if($responseBody->status == 'success'){
                    #session data 
                    $sessionData = [
                        'id' => $responseBody->data->id,
                        'uuid' =>  $responseBody->data->uuid,
                        'Authorization' => $responseBody->token
                    ];
                    // var_dump($sessionData); die;
                    $session->set('admin', $sessionData);
                    $session->setFlashdata('success', $responseBody->message);
                    return redirect()->to(base_url('dashboard'));
                }
            }
            else{
                $data['validation'] = $this->validator;
            }
        }

        echo view('admin/login', $data);
    }

    public function register(){
        $data['title'] = 'Register | Smart Campus';
        $session = session();
        $email = \Config\Services::email();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'email' => [
                    'rules' =>  'required|min_length[5]|valid_email|trim|is_unique[tbl_users.email]',
                    'errors' => [
                        'valid_email' => 'Please Enter A Valid Email',
                        'required' => 'Email is required',
                        'min_length' => 'Email is too short',
                        'is_unique' => 'Email already exist!'
                    ]
                ], 
                'password' => 'required|min_length[5]',
                'name' => 'required|min_length[3]}trim',
                'regToken' => [
                    'rules' => 'required|min_length[5]|trim',
                    'errors' => [
                        'required' => 'Registration Token is required',
                        'min_length' => 'Length is too short'
                    ]
                ]
            ];

            if($this->validate($rules)){
                // check reg token
                $User_Model = new User_model();
                // $checkToken = $User_Model->getToken($this->request->getVar('regToken'));
                // if($checkToken){
                //     $checkMail = $User_Model->getMail($checkToken->email)
                // }
                // else{
                    
                // }
                $uniid = md5(str_shuffle('djsjoshuauzorchidovk39481habf91'));
                $hashedPass = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);

                $userdata = [
                    'email' => $_POST['email'],
                    'uniid' => $uniid,
                    'name' => $_POST['name'],
                    'reg_token' => $_POST['regToken'],
                    'password' => $hashedPass
                ];

                $User_Model->insert($userdata);
                $session->setFlashdata('success', 'Account created successfully. Please check your mail to activate your account within an hour.');
                // generate uniid and send mail

            }
            else{
                $data['validation'] = $this->validator;
            }

        }
        echo view('admin/register', $data);
    }

    #------------------------ logout -------------------------------------
    public function logout(){
        $session = session();
        $session->destroy('admin');
        return redirect()->to(base_url('admin/login'));
    }
}