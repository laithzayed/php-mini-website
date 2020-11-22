<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
    <!-- JS  -->
    <script src="js/main.js"></script>

    <title>Chess || For smartest</title>
</head>
<body>
    


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
<header>
<div id="divimg">
        <img id="myimage" src= "images/chess-1.jpg">  
    </div>
</header>

<section>
<div class="jumbotron" id="jumbo">
  <h1 class="display-4">We All Love Chess</h1>
  <p class="lead">This is a simple hero chess platform, Sign in or Register to meet all of our palyers</p>
  <hr class="my-4">

      <div><button class="btn btn-dark my-2 my-md-0" type="submit" id="btn-3" onclick="window.location.href='login.php'">sign in Now!</button></div>
</div>

<div class="jumbotron" id="jumbo">
  <h1 class="display-4">Stay Tuned!</h1>
  <p class="lead">Start it Now!! , This is a simple hero chess platform, Sign in or Register to meet all of our palyers</p>
  <hr class="my-4">

      <div><button class="btn btn-dark my-2 my-md-0" type="submit" id="btn-4" onclick="window.location.href='register.php'">Register Now!</button></div>
</div>
</section>


<footer>
        <div id="final">
            <img src="images/join2.jpg" style="height: 20em; width: 100%;">
          </div>
</footer>

<?php
session_start();
if(empty($_SESSION['multi'])){
$_SESSION["multi"]=array( 
  
           
    array( 'username' => 'admin',
    'password' => '123456',
     'role' => 'admin'
    ),

    array( 'username' => 'laith1',
    'password' => '123456',
     'role' => 'user'
    ),

    array( 'username' => 'laith2',
    'password' => '123456',
     'role' => 'user'
    ),

    array( 'username' => 'laith3',
    'password' => '123456',
     'role' => 'user'
    ),

    array( 'username' => 'laith4',
    'password' => '123456',
     'role' => 'user'
    ),
);
}
// Note for Me: You need to store it in index page to use it later on if you start your session from here

// print_r($_SESSION["multi"]);
?>



<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>





</body>
</html>
