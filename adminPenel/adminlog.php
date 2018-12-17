<?php

$host="localhost";
$username="root";
$password="";
$db="crud";

mysql_connect($host,$username,$password);
mysql_select_db($logform);

if(isset($_POST['username'])){
  $username=$_POST['username'];
  $password=$_POST['password'];

$sql="select * from loginform where username='".$username."' AND password='".$password."' limit 1 ";


$result=mysql_query($sql);
if(mysql_num_rows($result)==1){
  echo "you have login";
  exit();
}
else{
  echo "incorrect";
  exit();
}


}





?>


<!DOCTYPE html>
<html>
<head>
  <title>SignUp Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="wrap">
     <form action="#" method="POST">
         <h2> Admin Login</h2>
      
          <input type="text" name="username" placeholder="Username" required>
         
          <input type="Password" name="password" placeholder="Password" required>
          <br>
          <br>
          <input type="submit" value="LOGIN">

    </form>
  </div>
</body>
</html>
