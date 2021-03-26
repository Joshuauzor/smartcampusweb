<?php namespace App\Libraries;


class Smartcampusapi
{

    public function __construct()
    {
        $options = [
            'baseURI' => 'http://localhost:3000/',
            'timeout'  => 5
        ];
        $this->client = \Config\Services::curlrequest($options);
    }

    #----------------- Login API -------------------------------------------
    public function login($data)
	{
        $response = $this->client->request('POST', 'login', ['form_params' => $data]);
        return $response;       
    }

    #----------------- Get Single User API -------------------------------------------
    public function getUser($data){
        // $response = $this->client->request('GET', 'getUser', ['auth' => $data]);
        // var_dump('Bearer '. $data['Authorization']); die;
        $response = $this->client->request('GET', '/dashboard/getUser', [
            'query' => $data,
            'headers' => [
                'Authorization' => 'Bearer '. $data['Authorization']
            ]
        ]);
        return $response;       
    }

    #----------------- post create school API -------------------------------------------
    public function createschool($data){
        
        $response = $this->client->request('post', '/school/create', [
            'form_params' => $data,
            'headers' => [
                'Authorization' => 'Bearer '. $data['Authorization']
            ]
        ]);
        return $response;       
    }

    #----------------- get all school and count API -------------------------------------------
    public function getSchools($data){
        
        $response = $this->client->request('get', 'school/getAll', [
            'headers' => [
                'Authorization' => 'Bearer '. $data['Authorization']
            ]
        ]);
        return $response;       
    }

    #----------------- Delete  school -------------------------------------------
    public function deleteSchool($data){      
        $response = $this->client->request('delete', 'school/deleteSchool', [
            'form_params' => $data,
            'headers' => [
                'Authorization' => 'Bearer '. $data['Authorization']
            ]
        ]);
        return $response;       
    }

    #----------------- Edit  school -------------------------------------------
    public function editSchool($data){      
        $response = $this->client->request('put', 'school/editSchool', [
            'form_params' => $data,
            'headers' => [
                'Authorization' => 'Bearer '. $data['Authorization']
            ]
        ]);
        return $response;       
    }
}