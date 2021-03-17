<?php namespace App\Controllers\Admin;

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
        helper(['form','url','date']);
    }

    public function index()
	{
        $data['title'] = 'Dashboard | Smart Campus';
        $session = session();
        $email = \Config\Services::email();
        echo view('admin/dashboard', $data);
    }
}