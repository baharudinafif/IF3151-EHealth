<!DOCTYPE html>
<?php
	session_start();
?>
<html> 
	<head>
		<link rel="stylesheet" type="type/css" href="css/style.css">
		<title>E-Health</title>
	</head>	
	<body>
		<div class="TopPage">
			<ul align="right">
				<?php
       			if (!isset($_SESSION['username'])){
					echo '<li><a id="but1" href="#login_form" type="button">Log In</a></li>
						<li><button id="but1" href="" type="button">Sign Up</button></li>';
					}else{
					echo '<li><a id="but1" href="logout.php" type="button">Log Out</a></li>
						<li><button id="but1" href="" type="button">Profile</button></li>';
					}
				?>								
			</ul>			
		</div>
		<div class="MenuBar">			
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="buatpesan.php">Konsultasi</a></li>
				<li><a href="#" >Reservasi Check-Up</a></li>
				<li><a href="kalender.php" >Reminder</a></li>
				<li><a href="daftarkoneksi.php">Koneksi</a></li>
			</ul>			
		</div>

        <a href="#x" class="overlay" id="login_form" ></a>
			<div class="popup">
		        <h2>Welcome Guest!</h2>
		        <p>Please enter your login and password here</p>
		        <form name="login" action="login.php" method="post">
			        
			            Username : <input type="text" name="username"><br>
			            Password : <input type="password" name="password"><br>
			            <div id="err_login"></div><br>
			        	<input type="submit" value="Log In"/>
			    </form>
		        <a class="close" href="#close"></a>
		    </div>
