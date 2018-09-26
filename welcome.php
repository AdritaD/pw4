<?php 
session_start();
if (session_status() == PHP_SESSION_NONE) {
    header( "Location:login.html" ) ;
    exit();
}

else
{

		echo ($_SESSION["name"].' '.'you have successfully logged in ' );
		echo '<br>';
		echo '<br>';


if(isset($_SESSION['views']))
{
  $_SESSION['views'] = $_SESSION['views']+1;
}
else
{
$_SESSION['views'] =1;
}

echo ('You have viewed this page'.' '.$_SESSION['views'].' '.'times');

echo '<br>';
}





?>

 </style>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
</br>



<!DOCTYPE html>
<html>
<body>

<a href="welcome.php">Reload Page</a>
   
</br>
</br>

 <a href="logout.php">Logout</a>


 <footer>
    <p>PHP &copy; 2018</p>
  </footer>



</body>
</html>





