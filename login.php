<!DOCTYPE html>
<html>
<head>
<br>
<title>Login</title>
<link href="css/a.css" rel="stylesheet" type="text/css">

<style>

input{
 border:10px solid white;
 width: 350px;
 border-radius:5px;
 }

div#message {
text-align:center;
margin-left:auto;
margin-right:auto;
width:40%;
border: solid 2px green
}


#back {
    background-color:white;
   padding:5px;    
}

div#message {
text-align:center;
margin-left:auto;
margin-right:auto;
width:40%;
border: solid 2px green
}

#footer
{
  background-color: white;
  color: black;
  clear: both;
  text-align: center;
  padding: 5px;
}
.footer-basic-centered{
  background-image:url('../images/footer.png');
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  box-sizing: border-box;
  width: 100%;
  text-align: center;
  font: normal 18px sans-serif;

  padding: 20px;
  margin-top: 5px;
}

.footer-basic-centered .footer-links{
  list-style: none;
  font-weight: bold;
  color:  #ffffff;
  padding: 20px 0 15px;
  margin: 0;
}

.footer-basic-centered .footer-links a{
  display:inline-block;
  text-decoration: none;
  color: inherit;
}
input,
input::-webkit-input-placeholder {
    font-size: 15px;
    line-height: 1;
}
</style>


</head>
<body onload="startTime()">

  <div id="txt" align="right" width=20></div>
  <div id="header">
    <table border="0">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/head1.png" height="125" width="600" style="position:right;">
      <br>
      <br>
      <br>
      <br>
      <strong><center><font size="5" color="#E5E4E2" face="verdana">Login to Explore..</font></center></strong>
    </table>
    </div>
    <br>
<br><br>
<br>
<center>
<div id="login-form">
<form action="login.php" method="POST">
<table align="center" width="30%" border="0">
<input type="text" name="username" placeholder="Enter User Name" required />
<br>
<br>
<input type="password" name="password" placeholder="Enter Password" required/>
<br>

<?php 
session_start();
  if (empty($_POST['username'])  || empty($_POST['password'])) {
    
  }
  else
  {
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    
    $mysqli = new mysqli("localhost", "root","", "hub");
    
    $query = "select * from student where username='$username' AND  password='$password'";
    $res = $mysqli->query($query);

    if ($res-> num_rows == 1) {

      $_SESSION['username']=$username; 
      header("Location:home.php?id=$username");
    }
    else {
    echo "<div align='center'>";
    echo "<font size='3' color='#ff4d4d'>"; 
    echo "<table>";
    echo "Sorry Username or Password is Invalid";
    echo "</table>"; 
echo "</font>";
echo "</div>";
  }
  mysqli_close($mysqli); 
}

?>
<br>
<input type="image" src="images/submit1.png" style="border: 0;" style="width: 0;"  alt="Submit Form" />
<br>
<br>
</form>
<a href="reg.php"><img src="images/reg.png" alt="" style="float:center;" height="40" width="150"/></a>
</div>
</center>
<footer class="footer-basic-centered">
      <p class="footer-links">
        <a href="index.html">Home</a>
        ·
        <a href="#">Rss</a>
        ·
        <a href="#">Software</a>
        ·
        <a href="aboutus.html">About</a>
        ·
        <a href="contact.html">Contact</a>
      </p>

      <p class="footer-company-name"><font color="white"> Pesit &copy; 2016</p></font>

    </footer>
</body>
</html>
2712