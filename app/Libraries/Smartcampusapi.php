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
}