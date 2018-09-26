<?php
session_start();
session_unset();
session_destroy();
 echo"<script> window.location.href = 'login.html' ; </script>";
 exit();
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Php</title>
</head>
<body>

	<footer>
		<p>PHP &copy; 2018</p>
	</footer>

</body>
</html>

