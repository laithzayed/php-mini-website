<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">

    <title>Form with PHP</title>
</head>
<body >
    

<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand" href="index.php">~ Chess || For Smartest ~ </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" id="lista">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">(HomePage) There's No Place Like { 127.0.0.1 }   <span class="sr-only">(current)</span></a>
      </li>
        </ul>
    <div id="button-all">
    <a href='login.php'><button class="btn btn-dark my-2 my-md-0" type="submit" id="btn-1" >sign in </button></a>
    <a href='register.php'><button class="btn btn-dark my-2 my-md-0" type="submit" id="btn-2" >Register</button></a>
</div>
  </div>
</nav>

<div class="jumbotron jumbotron-fluid style="margin:50px; font-size:24px;">
  <div>
  <h4>Welcome Dashboard</h4>


    <?php
    session_start();

$_SESSION["multi"] = $_POST["username"] ;
  
        


    ?>



</div>
</div>





<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>