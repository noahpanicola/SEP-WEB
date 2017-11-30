<?php

include "./utilities.php";

$BASE_URL = 'http://localhost:8080';

/* 
    API MAPPING FOR FRONT END/WEB
*/

if(isset($_GET['method'])) {

    /*  GET A USER BY ID 

        METHOD:     GET
        BASE URL:   ?method=getuserbyid
        PARAMS:     &id=<user_id>
    */
    if(strtolower($_GET['method']) == "getuserbyid"){ getUserByID($_GET['id'], $BASE_URL); }


    /*  LOGIN A USER

        BASE URL:   ?method=login 
        METHOD:     POST
        PAYLOAD:    {
                        "email": "test@gmail.com",
                        "password": "test" 
                    }
    */
    if(strtolower($_GET['method']) == "login") { login($_POST['email'], $_POST['password'], $BASE_URL); }


    /*  GET PROPERTY BY ID

        METHOD:     GET
        BASE URL:   ?method=getpropertybyid
        PARAMS:     &pid=<property_id>

    */
    if(strtolower($_GET['method']) == "getpropertybyid") { getPropertyByID($_GET['pid'], $BASE_URL); }


    /*  GET USER BY SESSION

        METHOD:     GET
        BASE URL:   ?method=getuserbysession

    */
    if(strtolower($_GET['method']) == "getuserbysession") { getUserBySession($BASE_URL); }


    /*  LOGOUT USER
        
        METHOD:     GET
        BASE URL:   ?method=logout
    */
    if(strtolower($_GET['method']) == "logout") { logout($BASE_URL); }

    /*  GET SENT MESSAGES BY SESSION

        METHOD: GET
        BASE_URL: ?method=getsentmessages
    */
    if(strtolower($_GET['method']) == "getsentmessages") { getSentMessages($BASE_URL); }

    /*  GET RECEIVED MESSAGES BY SESSION

        METHOD: GET
        BASE_URL: ?method=getreceivedmessages
    */
    if(strtolower($_GET['method']) == "getreceivedmessages") { getReceivedMessages($BASE_URL); }

    /*  GET PROPERTIES BY SESSION

        METHOD: GET
        BASE_URL: ?method=getmyproperties
    */
    if(strtolower($_GET['method']) == "getmyproperties") { getMyProperties($BASE_URL); }

} else { echo "Method Not Supplied <br />"; }

?>