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
    
<div class="w-100 nav-bar-2">
<nav class="w-100 navbar navbar-expand-lg navbar-light bg-info">
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
</div>

<?php 
session_start() ;
$nameErr = $phoneErr = $confirmErr = $error= $passERR = "";
$name = $phone = $repass = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["username"]);
  }
  if (empty($_POST['phone'])) {
    $phoneErr= "phone is required";
  } else {
    $phone = test_input($_POST["phone"]);
  }
  if (empty($_POST["password"])) {
    $passERR = "password is required";
  } else {
    $pass= test_input($_POST['password']);
  }
  if (empty($_POST["cpassword"])) {
    $confirmErr = "repassowrd required";
  }else{
    $repass = test_input($_POST["re-password"]);
  }
if(($_POST["re-password"])!=($_POST["password"])){
    $confirmErr = "password not matching";
} else{
 if (!empty($name)&&!empty($pass)){
   $new = array('username'=>$name,'password'=>$pass,'role'=>"user");
  array_push($_SESSION["multi"], $new);
  
 }


}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;}
?>

    <form method='post' action="" style="margin-top:50px" class="container">
  <div class="form-group">
  <label for="username">Username:</label>
    <input type="text" name="username" class="form-control" id="username">
    <span class="error">* <?php echo $nameErr;?></span>
   </div>
  <div class="form-group">
    <label for="phone">Phone number:</label>
    <input type="text" name="phone" class="form-control" id="phone">
    <span class="error">* <?php echo $phoneErr;?></span>
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="text" name="password" class="form-control" id="password">
    <span class="error">* <?php echo$passERR;?></span>
  </div>
  <div class="form-group">
    <label for="phone">Confirm Password:</label>
    <input type="text" name="re-password" class="form-control" id="re-password">
    <span class="error">* <?php echo $confirmErr ;?></span>
  </div>
  <button type="submit" value="submit" class="btn btn-primary">Register</button>
</form>

 
<div class="container">
<?php


// $multi = array (
        
//         'laith' => array('password' => '123456', 'role' => 'admin'),
//         'ahmed' => array('password' => '123456', 'role' => 'user'),
//         'omar' =>  array('password' => '123456', 'role' => 'user'),
//         'rami' =>  array('password' => '123456', 'role' => 'user'),
//         'deyaa' => array('password' => '123456', 'role' => 'user'),
                                    
//             );


            $multi = array (
        
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

                    
                    echo "<pre>";
                    echo "<br>";
                    echo "<ul><li> I Left the array just to use data and can view the future added date easily.";
                    echo "<br>";
                    print_r($_SESSION["multi"]);
                    echo "<br>";
                   


            // $name = array();
            // $age = array();
            // $add = array();
            
            //   $name= array("lujain", "laith", "hamzeh");
            //   $age= array("27","26","26");
            //   $address = array("amman","amman","irbid");
            // // Printing all the keys and values one by one
            // foreach ($multi as $key => $value){
            //     $name[] = $value[0];
            //     $age[] = $value[1];
            //     $add[] = $value[2];
            // }

            $testName="LaithZayed";
            $testPass="123456";

            if (isset($_POST["username"]) && isset($_POST["password"])){
                foreach ($multi as $key => $value){
                  if ($_POST["username"] == $multi[$key]["username"] && $_POST["password"] == $multi[$key]["password"] && $multi[$key]["role"] == "admin"){
                    header("location: admin.php");
                  }else if ($_POST["username"] == $multi[$key]["username"] && $_POST["password"] == $multi[$key]["password"] && $multi[$key]["role"] == "user"){
                    header("location: user.php");
                  }
                }




            }
              die;

// if($_SERVER["REQUEST_METHOD"]=="POST"){
//     $name = valdiation($_POST["name"]);
//     $name = valdiation($_POST["name"]);
//     $name = valdiation($_POST["name"]);

// }

// if($name ==$multi["admin"][0]){
//     echo "Welcome Here";
// }else{
//     echo "You're not user";
// }

// if($name ==$multi["admin"][0]){
//     echo "Welcome Here";
// }else{
//     echo "You're not user";
// }

// if($name ==$multi["admin"][0]){
//     echo "Welcome Here";
// }else{
//     echo "You're not user";
// }






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
