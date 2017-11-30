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
        $curl->POST($base_url . "/auth/login");
        
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

function sendMessage ($receiver_id, $header, $body, $base_url) {
    // set post variables
    $data = array
    (
        'receiver_id' => $receiver_id,
        'header' => $header,
        'body' => $body
    );
    
    // setup request
    $curl = new Curl;
    $curl->setPostArr($data);

    // send the message
    echo $curl->POST($base_url . "/message");
}

?>