<?php

$con = mysqli_connect('localhost','root','','affairs')
 or die('Error connecting to MySQL server.');
 
 	$name= $_POST['name'];
    $email= $_POST['email'];
    $mobile= $_POST['mobile'];
    $password=md5 ($_POST['password']);
    $confirm_password=md5($_POST['confirm_password']);

 
 $sql= "INSERT INTO data(name,email,mobile,password,confirm_password) VALUES('$name','$email','$mobile',' $password','$confirm_password')";
 if($password == $confirm_password){
 	if(mysqli_query($con,$sql)){
		echo "submit";
		 header("refresh:2; url=loginfrm.html");
		 
	 }
	 else{
		 echo "not inserted into the table";
	 }
 	}
 	else{
	 echo "don't match password and confirm_password";
	 header("refresh:1; url=userReg.html");
}
?>