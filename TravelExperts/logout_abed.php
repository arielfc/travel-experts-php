<?php 
	include_once 'session.php';
	$_SESSION['username'] = NULL;
	header("Location: index.php");
?>