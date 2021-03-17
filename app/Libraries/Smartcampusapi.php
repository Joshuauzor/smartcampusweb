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

    public function login($data)
	{
        // $data['title'] = 'Dashboard | Smart Campus';
        // $session = session();
        // $email = \Config\Services::email();
        // echo view('admin/dashboard', $data);
        // return 'HELLO People';

        
        // $client = \Config\Services::curlrequest();
        // $response = $this->client->request('GET', 'login'); 
        

        $response = $this->client->request('POST', 'register', [
            'form_params' => [
                'foo' => 'bar',
                'baz' => ['hi', 'there']
        ]]);


        return $response;
        
    }
}