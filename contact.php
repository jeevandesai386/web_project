<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contact</title>
        <meta http-equiv="Content-Type" content="text/html; 
              charset=iso-8859-1">
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
  <?php
echo "<div align='right'>";
echo "<font size='4' color='white'>"; 
echo "<table>";
 echo '@'.$_SESSION['username']; 
 echo "</table>"; 
echo "</font>";
echo "</div>";
?>
<a href="index.html"><img src="images/logout.png" align="right" width="62" height="40"></a>
    <div id="txt" align="right" width=20></div>
    <div id="header">
        <table border="0">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/head1.png" height="125" width="600">
        </table>
    </div>  
    <br>
     <div id='cssmenu'>
<ul>

   <li><a href='home.php'><span><img src="images/home2.png" width="17" height="17"></span></a></li>
   <li class='active has-sub'><a href='#'><span>Tutorial</span></a>
   <ul>
         <li class='has-sub'><a href='c.php'><span>C</span></a>
            
         </li>
         <li class='has-sub'><a href='c++.php'><span>C++</span></a>
            
         </li>
         <li class='has-sub'><a href='java1.php'><span>Java</span></a>
            
         </li>
         <li class='has-sub'><a href='php.php'><span>Php</span></a>
            
         </li>
         <li class='has-sub'><a href='mysql.php'><span>Mysql</span></a>
          
      </ul>
   </li>
   <li class='active has-sub'><a href='software.php'><span>Softwares</span></a>
   <li class='active has-sub'><a href='feed1.php'><span>RSS</span></a></li>
   <li class='active has-sub'><a href='download1.php'><span>Papers</span></a></li>
   <li class='active has-sub'><a href='video.php'><span>Videos</span></a></li>
   <li class='active has-sub'><a href='#'><span>Contact Us</span></a>
   <li><a href='aboutus.php'><span>About Us</span></a></li>
</ul>
</div>
      <br>
      <br>
      <br>
      </table>
      </div>
     <center><font size="5" face="verdona" color="orange"><p>

     NAME : JEEVAN DESAI
      <br>
          USN  : 1PE15MCA73
      <br>
      CONTACT  : 8904521938
         <br>
         E-MAIL : jeevan.v.desai386@gmail.com
         <br>
         <br>
         NAME : SIDDESHI C.R
         <br>
         USN  : 1PE14MCA26
         <br>
         CONTACT : 9844741182
         <br>
         E-MAIL : crs.siddu1993@gmail.com
         </font>
         </center>
         

        <footer class="footer-basic-centered">
      <p class="footer-links">
        <a href="home.php">Home</a>
        ·
        <a href="feed1.php">Rss</a>
        ·
        <a href="software.php">Software</a>
        ·
        <a href="aboutus.php">About</a>
        ·
        <a href="#">Contact</a>
      </p>

      <p class="footer-company-name"><font color="white"> Pesit &copy; 2016</p></font>

    </footer>
    </body>
</html>