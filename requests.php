<!DOCTYPE html>
<html ng-app="IndexApp" lang="en">
<head>
  <title>Property Manager</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/site.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script src="js/index.js"></script>

</head>
<body>
    <nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
        </button>
            <a class="navbar-brand" href="#"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="profile.html">Profile</a></li>
                <li><a href="requests.html">Requests</a></li>
                <li><a href="calendar.html">Calendar</a></li>
                <li><a href="inbox.html">Messages</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">
                        <img class="img-circle" id="profile-thumb" src="http://forums.foxitsoftware.com/core/images/default/default_avatar_large.png"/>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    </nav>

    <form>

      <div id="dateContainer">
          <label>Desired Maintenance Date</label>
          <br>
            <input class="datepicker" placeholder="Pick Date"> 
            <script type="text/javascript">
              $( document ).ready(function() {
                $(".datepicker").datepicker({ dateFormat: "yy-mm-dd" });
              });
            </script>
      </div>
      <br>
      <div class="form-group">
        <label>Description of Issue</label>
        <br>
        <textarea id="description" rows="3" cols="60" placeholder="Garbage disposal not working."></textarea>
      </div>

      <input type="submit" class="btn btn-primary" value="Submit Request">

    </form>
    

  </body>
</html>