<?php
	$email	=($_POST["email"]);
	$password =md5($_POST["password"]);


	$db=mysqli_connect("localhost","root","") or die("Error connecting to MySQL Server");

	mysqli_select_db($db,"affairs");
	
	$sql = mysqli_query($db, "SELECT * FROM data WHERE username = '".$email."' and password = '".$password."'");
	$row = mysqli_fetch_array($sql);
	
	if(empty($_POST["email"] && $_POST["password"])){
		echo "Enter the username and password";
	}
				
		else{
			 if ($row['email']==$email && $row['password']==$password) {
			
				 echo "Incorrect Username or Password";
				 header("refresh:1; url=loginfrm.html");

				
				} else {
					
				echo "Welcome to the website";
				header("url=index.html");
				
			}
		}

	
?>