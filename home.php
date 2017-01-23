<?php 
session_start();
?>
<!DOCTYPE html>
<html lang=''>
<head>
    <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>STUDENT HUB</title>
	<link href="css/a.css" rel="stylesheet" type="text/css">
   <link href="css/bootstrap.css" rel="stylesheet">
<style>

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

  padding: 40px;
  margin-top: 30px;
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

</style>
<script type="text/javascript">

function f()
{
var r=new Array(4);
r[0]="images/s1.jpg";
r[1]="images/s5.jpg";
r[2]="images/s4.jpg";
r[3]="images/s6.jpg";
r[4]="images/s3.png";
r[5]="images/s2.png";

var i_div=document.getElementById("my_img");
var rand_int=Math.floor(Math.random()*4);
i_div.innerHTML='<img src=" '+r[rand_int]+'" alt="random image" height="400" width="1330" align="center"/>';
}
window.setInterval("f()",2050);
</script>
 <script type="text/javascript">
        $(function () {
            $('#modal').click(function () {
                alert('Do You Wish To logout?');
                location.href="index.html";
    
                return false;
            });
        });
    </script>
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
<a href="index.html" id="modal" name="modal"><span><img src="images/logout.png" align="right" width="62" height="40"></span></a>
	<div id="txt" align="right" width=20></div>
	<div id="header">
		<table border="0">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/head1.png" height="125" width="600">
		</table>
	</div>	

	<div id='cssmenu'>
<ul>

   <li><a href='#' id="modal" name="modal"><span><img src="images/home2.png" width="17" height="17"></span></a></li>
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
   <li class='active has-sub'><a href='contact.php'><span>Contact Us</span></a>
   <li><a href='aboutus.php'><span>About Us</span></a></li>
</ul>
</div>

<p id="demo">
</p>
<div id="my_img">
	<img src="images/s1.jpg" alt="" align="center" height="400" width="1330"/>
</div><br>
<pre style="font-size: 130%;">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="display:inline-block;"><li>Learning</li></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="display:inline-block; width: YOURWIDTH;"><li>Training</li></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="display:inline-block; width: YOURWIDTH;"><li>Implementing</li></span>
</pre>
	</div>
<p align="center"><font size="5" color="White" face="verdana">"Student Hub is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors"</font></p>
<div class="container thumbs">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="images/rss.jpg" alt="" class="img-responsive">
          <div class="caption">
            <h3 class="">An easy way for you to keep up with news and information that's important to you, and helps you avoid the conventional methods of browsing or searching for information on websites.</h3>
            <p>.</p>
            <div class="btn-toolbar text-center">
              <a href="feed1.php" role="button" class="btn btn-primary pull-right">Check Out</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="images/exam.jpg" alt="" class="img-responsive">
          <div class="caption">
            <h3 class="">Provides a easy way to get previous year question papers at your finger tips.</h3>
            <p></p>
            <div class="btn-toolbar text-center">
              <a href="download1.php" role="button" class="btn btn-primary pull-right">Check Out</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="images/learning.jpg" alt="" class="img-responsive">
          <div class="caption">
            <h3 class="">Learn Computer Programming in simple and easy steps using this beginner's tutorial starting from basic concepts of computers and lanuages such as C, C++, Java etc.</h3>
            <p>.</p>
            <div class="btn-toolbar text-center">
              <a href="java1.php" role="button" class="btn btn-primary pull-right">Check Out</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer-basic-centered">
      <p class="footer-links">
        <a href="#">Home</a>
        ·
        <a href="feed1.php">Rss</a>
        ·
        <a href="software.php">Software</a>
        ·
        <a href="aboutus.php">About</a>
        ·
        <a href="contact.php">Contact</a>
      </p>

      <p class="footer-company-name"><font color="white"> Pesit &copy; 2016</p></font>

    </footer>
</body>
</html>