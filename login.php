<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	echo $username, "____", $password;
	
	$count =0;
	if (($username=="user")&& ($password=="user")){
		$count=1;
	}
	
	if($count ==0){
		echo 'User not found or Password is Wrong';		
	}
	else if($count>1){
		echo 'There is something wrong with database';
	}
	else{
		session_start();
		$_SESSION['username']=$username;
		header('Location: index.php');
	}	
?>
