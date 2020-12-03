<?php 
session_start();
if($_SESSION['auth']) {
	echo 'hi';
}
else {
	echo 'You are not authorized!';
	echo '<p><a href = "login.php">log in</a></p>';
}




?>
