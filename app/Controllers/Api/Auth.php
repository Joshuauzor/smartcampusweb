<?php namespace App\Librai;

use App\Models\User_model;
use CodeIgniter\Controller;
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
        $options = [
            'baseURI' => 'http://example.com/api/v1/',
            'timeout'  => 5
        ];
        $client = \Config\Services::curlrequest($options);
    }

    public function login($data)
	{
        // $data['title'] = 'Dashboard | Smart Campus';
        // $session = session();
        // $email = \Config\Services::email();
        // echo view('admin/dashboard', $data);
        $client = \Config\Services::curlrequest();

        $response = $client->request('POST', 'login', $data);
        

    }
}