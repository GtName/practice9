<?php 
session_start();
$login = 'admin';
$password = '1111';
echo 'em';
if(isset($_POST['submit'])) {
if($_POST['login'] == $login && $_POST['password'] == $password) {
	$_SESSION['auth'] = true;
	echo 'succes';
}
else {
	$_SESSION['auth'] = false;
	echo 'failure';
}
header('location: restricted.php');


}


?>