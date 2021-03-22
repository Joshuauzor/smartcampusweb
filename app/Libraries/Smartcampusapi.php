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
    public function getUser($data)
	{
        // $response = $this->client->request('GET', 'getUser', ['auth' => $data]);
        // var_dump('Bearer '. $data['Authorization']); die;
        $response = $this->client->request('GET', '/dashboard/getUser', [
        'query' => $data,
        'headers' => [
            'Authorization' => 'Bearer '. $data['Authorization']
        ]
    ]);

    //     'headers' => [
    //         'User-Agent' => 'testing/1.0',
    //         'Accept'     => 'application/json',
    //         'X-Foo'      => ['Bar', 'Baz']
    // ]

        return $response;       
    }
}