<?php
session_start();
$name = $email = $password = "";
   $_SESSION["name"] = $_POST["name"];
   $_SESSION["email"] = $_POST["email"];
   $_SESSION["password"] = $_POST["password"];



if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["password"]) ) {
    header( "Location:login.html" ) ;
    exit();
  } 
else {
    
    if (empty($_POST["name"])) {
    header( "Location:login.html" ) ;
    exit();
  } 
  
    if (empty($_POST["email"])) {
    header( "Location:login.html" ) ;
    exit();
  } else {

  $email = test_input($_POST["email"]);
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      header( "Location:login.html" ) ;
      exit();
    }
  }

    if (empty($_POST["password"])) {
    header( "Location:login.html" ) ;
    exit();
  } else {
   
  $password = test_input($_POST["password"]);
    // check if password is well-formed
    if (!preg_match("/^(?=^.{6,}$)(?=.*[A-Z])(?=.*[0-9])(?=.*[a-z]).*$/", $password)) {
      header( "Location:login.html" ) ;
      exit();
    }
   

   else
   {
   	header( "Location:welcome.php" ) ;
      exit();
   }
  }


  }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<!DOCTYPE html>
<html>
<body>



 <footer>
    <p>PHP &copy; 2018</p>
  </footer>



</body>
</html>