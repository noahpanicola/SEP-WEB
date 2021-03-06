<?php

include "./curl.php";

function login($email, $pass, $base_url) {
    
    //check to see if the GET variables are set
    if(isset($email) && isset($pass)) {

        // set post variables
        $data = array
        (
            'email' => $email,
            'password' => $pass
        );
        
        // setup request
        $curl = new Curl;
        $curl->setPostArr($data);

        // log the user in
        $curl->LOGIN($base_url . "/auth/login");
        
        //check to see if they are logged in and return the response
        echo $curl->GET($base_url . "/auth/session/user");

    } else {
        echo    "Please specify a user and password <br />"
                . "Example: http://localhost:8888/map/mapping.php?method=login&email=noahpanicola@gmail.com&password=test";
    }
}

function getPropertyByID($property_id, $base_url) {
    
    //check for correct parameters
    if(isset($property_id)) {

        //make a GET curl request
        $curl = new Curl;
        echo $curl->GET($base_url . "/property/" . $property_id);  // Ex: http://localhost:8080/property/1
    } else {
        echo "Incorrect Paramaters";
    }
}

function getUserByID($id, $base_url){
    
    //check if the id is supplied
    if(isset($id)){

        //make a curl request
        $curl = new Curl;
        echo $curl->GET($base_url . "/user/" . $id);    // Ex: http://localhost:8080/user/1

    } else {
        echo "Incorrect Paramaters";
    }
}

function getUserBySession($base_url) {

    //make a curl request to get the user object stored in the session
    $curl = new Curl;
    echo $curl->GET($base_url . "/auth/session/user");    // Ex: http://localhost:8080/auth/session/user
}

function logout($base_url) {
    //make a curl request to logout the user stored in the session
    $curl = new Curl;
    echo $curl->GET($base_url . "/auth/logout");
}

function getSentMessages($base_url) {
    $curl = new Curl;
    echo $curl->GET($base_url . "/auth/session/inbox/sent");
}

function getReceivedMessages($base_url) {
    $curl = new Curl;
    echo $curl->GET($base_url . "/auth/session/inbox/received");
}

function getMyProperties($base_url){
    $curl = new Curl;
    echo $curl->GET($base_url . "/auth/session/property");
}

function getUserByEmail ($email, $base_url) {
    $curl = new Curl;
    echo $curl->GET($base_url . "/user?email=" . $email);
}

function sendMessage ($remail, $header, $body, $base_url) {
    if(isset($remail) && isset($header) && isset($body)) {
        // set post variables
        $data = array
        (
            'receiver_email' => $remail,
            'header' => $header,
            'body' => $body
        );

        //setup request
        $curl = new Curl;
        $curl->setPostArr($data);

        // send the message
        echo $curl->POST($base_url . "/message");

    } else {
        echo "incorrect parameters";
    }
}

function createProperty ($street, $city, $state, $zip, $base_url) {
    if(isset($street) && isset($city) && isset($state) && isset($zip)) {

        $data = array
        (
            'street_address' => $street,
            'city' => $city,
            'state' => $state,
            'zip' => $zip
        );

        //setup request
        $curl = new Curl;
        $curl->setPostArr($data);

        // send the message
        echo $curl->POST($base_url . "/property");

    } else {
        echo "incorrect parameters";
    }
}

function openEmail($msg_id, $base_url){
    $curl = new Curl;
    echo $curl->GET($base_url . "/usermessage/open/" . $msg_id);
}

?>