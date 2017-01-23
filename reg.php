</div><!DOCTYPE html>
<html>
<head>
<a href="login.php"><img src="images/login.png" alt="" style="float:right;" height="28" width="80"/></a>
<br>
<title>Registration</title>
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

#footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
   padding:5px;	 	 
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
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/head1.png" height="125" width="600">
      <br>
      <br>
      <br>
      <strong><center><font size="15" color="#E5E4E2" face="verdana">Registration Form</font></center></strong>
    </table>
    <br>
    <br>
<center>
<div id="login-form">
<form action="reg.php" method="POST">
<table align="center" width="30%" border="0">
<input type="text" name="username"  placeholder="Enter User Name" required />
<br>
<br>
<input type="text" name="email"  placeholder="Enter Email" required/>
<br>
<br>
<input type="password" name="password" placeholder="Enter Password" required/>
<br>
<br>
<input type="text" name="contact" placeholder="Enter Contact no." required/>
<br>
<br>
<?php
// if form submitted
// process form input
if (isset($_POST['submit'])) {
// attempt connection to MySQL database
$mysqli = new mysqli("localhost", "root", "", "hub");
if ($mysqli === false) {
die("ERROR: Could not connect to database. " . mysqli_connect_error());
}
// open message block
echo '<div id="message">';
// retrieve and check input values
$inputError = false;

if (empty($_POST['username'])) {
echo 'ERROR: Please enter a valid username';
$inputError = true;
} else {
$username = $mysqli->escape_string($_POST['username']);
}

if ($inputError != true && empty($_POST['email'])) {
echo 'ERROR: Please enter a correct email';
$inputError = true;
} else {
$email = $mysqli->escape_string($_POST['email']);
}

if ($inputError != true && empty($_POST['password'])) {
echo 'ERROR: Please enter a correct password';
$inputError = true;
} else {
$password = $mysqli->escape_string($_POST['password']);
}

if ($inputError != true && empty($_POST['contact'])) {
echo 'ERROR: Please enter a contact no.';
$inputError = true;
} else {
$contact = $mysqli->escape_string($_POST['contact']);
}
// add values to database using INSERT query
if ($inputError != true) {
$sql = "INSERT INTO student (username, email, password, contact)
VALUES ('$username', '$email', '$password', '$contact')";
if ($mysqli->query($sql) === true) {
   echo 'Registration Successful';
   echo '<br>';
   echo 'Login to Continue';
} else {
echo "ERROR: Could not execute query" . $mysqli->error;
}
}
?>
<br>

<?php
// close message block
echo '</div>';
// close connection
$mysqli->close();
}
?>
<br>
<button type="submit" name="submit" style="background-color:transparent; border-color:transparent;"> 
  <img src="images/submit1.png" height="40"/>
</button>
<br>
</form>
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
