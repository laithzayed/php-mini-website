<?php
// Start the session
session_start();

// Set session variables
$_SESSION["multi"];


?>


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
<div class="container">  
<?php 

$nameErr = $phoneErr = $confirmErr = $error= $passERR = "";
$name = $phone = $repass = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["username"]);
  }
  if (empty($_POST["password"])) {
    $passERR = "password is required";
  } else {
    $pass= test_input($_POST['password']);
  }
 
} else{
 if (!empty($name)&&!empty($pass)){
   $new = array('username'=>$name,'password'=>$pass,'role'=>"user");
  array_push($_SESSION["multi"], $new);
  
 }


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;}
?>

    <form method='post' action="" style="margin-top:50px" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class="form-group">
  <label for="username">Username:</label>
    <input type="text" name="username" class="form-control" id="username1" >
    <span class="error">* <?php echo $nameErr;?></span>
   </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="text" name="password" class="form-control" id="password1" >
    <span class="error">* <?php echo  $passERR;?></span>
  </div>
  <button type="submit" value="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<div class="container">
<?php

         $multi = $_SESSION["multi"];

            if (isset($_POST["username"]) && isset($_POST["password"])){
                foreach ($_SESSION["multi"] as $key => $value){
                  if ($_POST["username"] ==  $_SESSION["multi"][$key]["username"] && $_POST["password"] == $_SESSION["multi"][$key]["password"] && $_SESSION["multi"][$key]["role"] == "admin"){
                    header("location: admin.php");
                  }else if ($_POST["username"] == $_SESSION["multi"][$key]["username"] && $_POST["password"] == $_SESSION["multi"][$key]["password"] && $_SESSION["multi"][$key]["role"] == "user"){
                    header("location: user.php");
                  }
                }




            }

            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<ul><li> I Left the array just to use data and can view the future added date easily.";
            echo "<br>";
            echo '<pre>';
            print_r($_SESSION["multi"]);
         die;


session_start();

// Storing session data
$_SESSION["isLogged"] = "1";

header('Location:' . '../home.php');

exit();


?>
</div>

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
