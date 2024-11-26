<?php

 
require_once('function.php');
dbconnect();
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	if (attempt($_POST['username'], $_POST['password'])) {
		redirect('index.php');

	 echo '<script>' .'alert("Login Successful!")'.';'.'</script>';
	}
	else {
		redirect('signin.php?error=' . urlencode('Wrong username or password'));
	}
}

?>