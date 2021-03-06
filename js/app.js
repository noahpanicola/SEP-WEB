var User = function () {

    this.login = function (userEmail, userPassword, redirectURL) {
        $.post(
            { 
            url: "/map/mapping.php?method=login",
            dataType: 'json',
            data: {
                    email: userEmail,
                    password: userPassword
            },
            success: function(data){

                    //debug
                    console.log(data);

                    if(data.hasOwnProperty('email')) {

                        //set the user and data values
                        this.user = data;
                        this.isAuthenticated = true;

                        //redirect the user to the correct window if one is provided
                        if(redirectURL != null) {
                            window.location.href = redirectURL;
                        } 
                        
                        //return the authenticated user
                        return this.user;

                    } else {

                        //the authentication failed
                        console.log("User was denied.");
                        window.location.href = "login.html?access=denied";
                        return null;
                    }
            },
            error: function (error) {
                    console.log(error);
                    console.log("The user was not authenticated.")
                    return null;
            }
            });
    }

    this.authenticate = function (redirectURL, postback) {
        var user = $.get(
            { 
                url: "/map/mapping.php?method=getuserbysession",
                dataType: 'json',
                success: function(data, req){
                    if(data.hasOwnProperty('email')) {

                        //redirect the user to the correct window if one is provided
                        if(redirectURL != null) {
                            window.location.href = redirectURL;
                        }

                        console.log(data);
                        postback(data);
                        return data;

                    } else {
                        //the authentication failed
                        console.log("User was denied.");
                        window.location.href = "login.html?access=denied";
                    }
                },
                error: function (error) {
                    console.log(error);
                    console.log("The user was not authenticated.")
                }
            });
            return user;
    }

    this.logout = function (postback) {
        $.get({
            url: "/map/mapping.php?method=logout",
            dataType: 'json',
            success: function (data) {
                postback(data);
            },
            error: function (data) {
                console.log("error");
            }
        });
    }

}

var Inbox = function () {

    this.open = function(msg_id, postback) {
        $.get({
            url: "/map/mapping.php?method=openemail&mid=" + msg_id,
            dataType: 'json',
            success: function (data) {
                postback(data);
            },
            error: function (data) {
                console.log("error");
            }
        });
    }

    this.getSent = function (postback) {
        $.get({
            url: "/map/mapping.php?method=getsentmessages",
            dataType: 'json',
            success: function (data) {
                postback(data);
            },
            error: function (data) {
                console.log(data);
            }
        });
    }

    this.getReceived = function (postback) {
        $.get({
            url: "/map/mapping.php?method=getreceivedmessages",
            dataType: 'json',
            success: function (data) {
                postback(data);
            },
            error: function (data) {
                console.log(data);
            }
        });
    }

    this.send = function (email, h, b, postback) {
        $.post({ 
            url: "/map/mapping.php?method=sendmessage",
            dataType: 'application/json',
            data: {
                body: b,
                header: h,
                remail: email
            },
            success: function(data) {
                postback(dataresponseText);
            },
            error: function (data) {
                postback(data.responseText);
            }
        });
    }

}

var Property = function () {
    
    this.getPropertyBySession = function (postback) {
        $.get({
            url: "/map/mapping.php?method=getmyproperties",
            dataType: 'json',
            success: function (data) {
                postback(data);
            },
            error: function (data) {
                console.log(data);
            }
        });

        this.createProperty = function (street, city, state, zip, postback) {
            $.post({ 
                url: "/map/mapping.php?method=createproperty",
                dataType: 'application/json',
                data: {
                    street: street,
                    city: city,
                    state: state,
                    zip: zip
                },
                success: function(data) {
                    postback(dataresponseText);
                },
                error: function (data) {
                    postback(data.responseText);
                }
            });
        }
    }
    
}
