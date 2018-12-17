<!DOCTYPE html>
<html lang="en">
<head>
<title>International Affairs</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

nav {
  float: left;
  width: 20%;
  min-height: 710px; 
  background: #ccc;
  padding: 20px;
}
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 80%;
  background-color: #f1f1f1;
  min-height: 300px; 
}

section:after {
  content: "";
  display: table;
  clear: both;
}


footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}


@media (max-width: 400px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>


<header>
  <h2>International Affairs</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="">Home</a></li>
      <li><a href="User-Panel//userReg.html">Registration</a></li>
      <li><a href="User-panel//loginfrm.html">Login</a></li>
      <li><a href="#">About</a></li>
    </ul>
  </nav>
  
  <article>
    <h1>Information</h1>
   <div>
     <?php
include 'header.php';
$student_list = $student_obj->student_list();
?>
<div class="container " > 
    <div class="row content">
        
        <h3>Program List</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Program</th>
                    <th>Email</th>
                    <th>Contact</th>

                   
                </tr>
            </thead>
            <tbody>
<?php
if ($student_list->num_rows > 0) {
  while ($row = $student_list->fetch_assoc()) {
     ?>
             <tr>
                <td><?php echo $row["student_name"] ?></td>
                <td><?php echo $row["email_address"] ?></td>
                <td><?php echo $row["contact"] ?></td>
             
                
            </tr>
    <?php
    }
}
?>
           </tbody>
        </table>

    </div>
</div>
   </div>

      
  </article>
</section>

<footer>
  <p><a href="#">Contact</a></p>
</footer>

</body>
</html>
