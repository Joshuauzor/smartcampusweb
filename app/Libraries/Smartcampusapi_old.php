<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Nws_api {

    public function __construct()
    {
        $this->CI =& get_instance();
    }

    public function get_beneficiaries($courses){
        $rate = (float)json_decode(file_get_contents('https://market.tailorgang.io/wp-content/currency_.json'))->rates->NGN;
        $array = array();
        $commission =  get_settings('instructor_revenue');
        for ($i=0; $i < count($courses); $i++) {
            // var_dump($courses[$i]);die;
            $course = $this->CI->db->get_where('course', array('id'=> $courses[$i]))->row();
            $instructorAmount = ($course->price * intval($commission)) / 100;
            $appAmount = $course->price - $instructorAmount;
            $instructorArray = array(
                'type'=> 'user',
                'user' => $course->client_id,
                'amount' => strval($instructorAmount * $rate),
            );
            $appArray = array(
                'type'=> 'application',
                'user' => APPLICATION_ID,
                'amount' => strval($appAmount * $rate),
            );
            array_push($array, $instructorArray, $appArray);
        }
        // var_dump($array);die;
        return $array;
    }


    public function reset_password($data, $token){
        $response = $this->curl('https://nws-users.nugitech.com' . '/users/reset/password', 'post', json_encode($data), $token);
        return $response;
    }

    public function login($data){
        $data['application'] = APPLICATION_ID;
        $response = $this->curl('https://nws-auth.nugitech.com' . '/auth/login', 'post', json_encode($data));
        return $response;
    }

    public function create_wallet($data, $token){
        $response = $this->curl('https://nws-paymentservice.nugitech.com/payments/create_wallet', 'post', json_encode($data), $token);
        return $response;
    }


    public function upload_video($data){
        $data['application'] = APPLICATION_ID;
        $response = $this->curl('https://v2.nugi-appservice-auth247.info/classes/uploadvideo', 'post', json_encode($data));
        return $response;
    }


    public function update_user($data, $token){
        $response = $this->curl('https://nws-users.nugitech.com' . '/users/', 'put', json_encode($data), $token);
        // var_dump($response); die;
        return $response;
    }

    public function purchase($data, $token){
        $data['application'] = APPLICATION_ID;
        // echo json_encode($token); die;
        $response = $this->curl('https://nws-paymentservice.nugitech.com' . '/payments/purchase', 'post', json_encode($data), $token);
        return $response;
    }

    public function get_wallet($token){
        $response = $this->curl('https://nws-users.nugitech.com' . '/users/wallet/update', 'get', null, $token);
        return $response;
    }

    public function get_user($id){
        $response = $this->curl('https://nws-users.nugitech.com' . '/'.$id, 'get', null, null);
        return $response;
    }

    public function forgetpassword($data, $token){
        $data['application'] = APPLICATION_ID;
        $response = $this->curl('https://nws-auth.nugitech.com' . '/auth/forgotpassword', 'post', json_encode($data), null, 'json');
        return $response;
    }


    public function updatepassword($data, $token){
        $data['application'] = APPLICATION_ID;
        $response = $this->curl('https://nws-auth.nugitech.com' . '/auth/forgotpassword/update', 'post', json_encode($data), null, 'json');
        // var_dump($response);die;
        return $response;
    }

    public function verifyotp($data){
        $data['application'] = APPLICATION_ID;
        $response = $this->curl('https://nws-auth.nugitech.com' . '/auth/forgotpassword/validate', 'post', json_encode($data), null, 'json');
        return $response;
    }

    // -------------------
    public function register($data){
        $data['application'] = APPLICATION_ID;
        // $data['currency'] = 'NGN'; 
        $url = 'https://nws-auth.nugitech.com' . '/auth/update/signup';
        $response = $this->curl($url, 'post', json_encode($data));
        return $response;
    }

    // -----------------Send User Mail to NWS for authentication ---------------------------------

    public function register_user_email($data){
        $data['application'] = APPLICATION_ID;
        // $data['currency'] = 'NGN';
        $url = 'https://nws-auth.nugitech.com' . '/auth/signup';
        $response = $this->curl($url, 'post', json_encode($data));
        return $response;
    }


     // -----------------Send User Mail and OTP to NWS for authentication ---------------------------------

     public function validate_user_otp($data){
        $data['application'] = APPLICATION_ID;
        // $data['currency'] = 'NGN';
        $url = 'https://nws-auth.nugitech.com' . '/auth/update/validate-otp';
        $response = $this->curl($url, 'put', json_encode($data));
        return $response;
    }

    // ------------------------------------------------------------------

    public function curl($url, $method, $data = null, $access_token = NULL, $contentType = 'json'){
//        $access_token = $this->session->user_token;
//        if($access_token == NULL) {
//            return NULL; 
//        }
//2        var_dump($access_token);die;
        $curl = curl_init($url);
        $authorization = " ";
        if($access_token != NULL){
            $authorization = "Authorization: Bearer ".$access_token;
        }
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/'.$contentType , $authorization ));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt ($curl, CURLOPT_FOLLOWLOCATION, 0);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);


        if (strtolower($method) == 'put' || strtolower($method) == 'post') {
            $post = $data;
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, mb_strtoupper($method));
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
        }
        $json_response = curl_exec($curl);
        $response = curl_getinfo( $curl );

        curl_close($curl);

        // var_dump($json_response);die;
        // echo '<pre>'; print_r($json_response);  

        return json_decode($json_response);
    }

  function curl_upload($url, $data, $access_token){
    $_FILES = $data;
    if (is_uploaded_file($_FILES['pictureURL']['tmp_name'])){
      //$curl = curl_init($url);

        $ch = curl_init();

        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_PUT, true); //PUT REQUEST
        curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer '.$access_token, // authorization for bluemix iam
            'Content-Type: multipart/form-data', //application/pdf or image/jpg
        ));

        $image_or_file = fopen($_FILES['pictureURL']['tmp_name'], "rb");

        curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
        curl_setopt($ch, CURLOPT_INFILE, $image_or_file);
        curl_setopt($ch, CURLOPT_INFILESIZE, $_FILES['pictureURL']['size']);

        curl_setopt(
            $ch,
            CURLOPT_POSTFIELDS,
            array(
              'pictureURL' =>
                  '@'            . $_FILES['pictureURL']['tmp_name']
                  . ';filename=' . $_FILES['pictureURL']['name']
                  . ';type='     . $_FILES['pictureURL']['type'],
              'firstname' => 'Adie',
              'lastname' => 'Godswill'
        ));

        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,16);
        curl_setopt($ch,CURLOPT_TIMEOUT, 20);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true); // enable tracking

        $response = curl_exec($ch);
        $headerSent = curl_getinfo($ch ); // request headers from response (check if something wrong)

        curl_close ($ch);
        fclose($image_or_file);

        return $response;
    }else{
        //File did not upload, do something ...
        //echo "file did not upload!";
    }
  }
}
