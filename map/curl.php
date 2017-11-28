<?php

class Curl {

    public $postArr = array();
    public $info = '';

    public function GET($url){
        // create curl resource 
        $ch = curl_init(); 
    
        // set url 
        curl_setopt($ch, CURLOPT_URL, $url); 
    
        // set cookies from the file
        curl_setopt($ch, CURLOPT_COOKIEFILE, './cookie.txt');

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 

        // close curl resource to free up system resources 
        curl_close($ch);

        //return the response
        return $output;
    }

    public function POST($url){
        // create curl resource 
        $ch = curl_init(); 
        
        // set url 
        curl_setopt($ch, CURLOPT_URL, $url);

        //add headers to the request
        $headers = array("Content-Type: application/x-www-form-urlencoded");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // Set to TLS 1.0 (CURL_SSLVERSION_TLSv1_0)
        curl_setopt($ch, CURLOPT_SSLVERSION, 4);
        
        //populate post request
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($this->postArr));

        //create a container for the cookies
        curl_setopt($ch, CURLOPT_COOKIEJAR, './cookie.txt');

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 
        $this->info = curl_getinfo($ch);

        // close curl resource to free up system resources 
        curl_close($ch);

        //return the response
        return $output;
    }

    public function PUT(){

    }

    public function addToPostArr($key, $value){
        $this->postArr[$key] = $value;
    }

    public function setPostArr($arr){
        $this->postArr = $arr;
    }

    public function getPostArr(){
        return $this->postArr;
    }

    public function getInfo(){
        return $this->info;
    }
}

?>