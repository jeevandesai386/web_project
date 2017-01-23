<?php 
session_start();
?>
<!DOCTYPE html>
<html lang=''>
<head>
    <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Software</title>
	<link href="css/a.css" rel="stylesheet" type="text/css">
<style>

#footer
{
	background-color: white;
	color: black;
	clear: both;
	text-align: center;
	padding: 5px;
}

.dropbtn {
    
    
    padding: 1px;
    font-size: 1px;
    
}

.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 130px;
    }

.dropdown-content a {
    color: black;
    padding: 6px 6px;
    text-decoration: none;
    display: block;
}

.dropdown:hover .dropdown-content {
    display: block;
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
<a href="index.php"><img src="images/logout.png" align="right" width="62" height="40"></a>
	<div id="txt" align="right" width=20></div>
	<div id="header">
		<table border="0">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/head1.png" height="125" width="600">
		</table>
	</div>	

<div id='cssmenu'>
<ul>

   <li><a href='home.php' id="modal" name="modal"><span><img src="images/home2.png" width="17" height="17"></span></a></li>
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
   <li class='active has-sub'><a href='#'><span>Softwares</span></a>
   <li class='active has-sub'><a href='feed1.php'><span>RSS</span></a></li>
   <li class='active has-sub'><a href='download1.php'><span>Papers</span></a></li>
   <li class='active has-sub'><a href='video.php'><span>Videos</span></a></li>
   <li class='active has-sub'><a href='contact.php'><span>Contact Us</span></a>
   <li><a href='aboutus.php'><span>About Us</span></a></li>
</ul>
</div>
<br>
<center><font color="White" size="10" face="verdana">Softwares</font></center>

<img src="images/java.png" height="200" width="200" style="float:left">
<font size="5" color="white">
<p><br><br>Java is a general-purpose computer programming language that is concurrent, class-based, object-oriented,[13] and specifically designed to have as few implementation dependencies as possible. It is intended to let application developers "write once, run anywhere" 
<br>
<div class="dropdown">
  <button class="dropbtn" style="background-color: transparent;border-color: transparent;"><a href="#"><img src="images/down.png" alt="" height="45" width="130"/></a></button>
  <div class="dropdown-content" style="font-size: 70%">
    <a href="softwares/jdk-7u5-windows-i586.exe">Windows</a>
    <a href="softwares/jdk-8u71-linux-x64.tar.gz">Linux</a>
  </div>
</div>
<br>
<br>
<center><img src="images/line2.png" height="6" width="1200"></center>
<img src="images/sublime.png" height="200" width="200" style="float:left">
<font size="5" color="white">
<p><br><br>Sublime Text is a sophisticated text editor for code, markup and prose.
You'll love the slick user interface, extraordinary features and amazing performance.
<br>
<div class="dropdown">
  <button class="dropbtn" style="background-color: transparent;border-color: transparent;"><a href="#"><img src="images/down.png" alt="" height="45" width="130"/></a></button>
  <div class="dropdown-content" style="font-size: 70%">
    <a href="softwares/Sublime Text Build 3103 x64 Setup.exe">Windows</a>
    <a href="softwares/Sublime Text 2.0.2 x64.tar.bz2">Linux</a>
  </div>
</div>
<br>
<br>
<center><img src="images/line2.png" height="4" width="1200"></center>
<img src="images/netbeans.png" height="200" width="200" style="float:left">
<font size="5" color="white">
<p><br><br>NetBeans IDE is a free, open source, integrated development environment (IDE) that enables you to develop desktop, mobile and web applications. The IDE supports application development in various languages, including Java, HTML5, PHP and C++.
<br>
<div class="dropdown">
  <button class="dropbtn" style="background-color: transparent;border-color: transparent;"><a href="#"><img src="images/down.png" alt="" height="45" width="130"/></a></button>
  <div class="dropdown-content" style="font-size: 70%">
    <a href="softwares/netbeans-8.1-windows.exe">Windows</a>
    <a href="softwares/netbeans-7.1.1-ml-linux.sh">Linux</a>
  </div>
</div>
<br>
<br>
<center><img src="images/line2.png" height="4" width="1200"></center>
<img src="images/eclipse.png" height="200" width="200" style="float:left">
<font size="5" color="white">
<p><br><br>Eclipse is an integrated development environment (IDE) used in computer programming. It contains a base workspace and an extensible plug-in system for customizing the environment
<br>
<div class="dropdown">
  <button class="dropbtn" style="background-color: transparent;border-color: transparent;"><a href="#"><img src="images/down.png" alt="" height="45" width="130"/></a></button>
  <div class="dropdown-content" style="font-size: 70%">
    <a href="softwares/eclipse.rar">Windows</a>
    <a href="software/eclipse.rar">Linux</a>
  </div>
</div>
<br>
<br>
<center><img src="images/line2.png" height="4" width="1200"></center>
<img src="images/php.png" height="200" width="200" style="float:left">
<font size="5" color="white">
<p><br><br>PHP(Personal Home Page) is a server-side scripting language designed for web development but also used as a general-purpose programming language.
<br>
<div class="dropdown">
  <button class="dropbtn" style="background-color: transparent;border-color: transparent;"><a href="#"><img src="images/down.png" alt="" height="45" width="130"/></a></button>
  <div class="dropdown-content" style="font-size: 70%">
    <a href="softwares/php-7.0.5-Win32-VC14-x64.zip">Windows</a>
    <a href="softwares/php-7.0.5.tar.bz2">Linux</a>
  </div>
</div>
<br>
<br>

<center><img src="images/line2.png" height="4" width="1200"></center>
</p>
</font>
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
        <a href="contact.php">Contact</a>
      </p>

      <p class="footer-company-name"><font color="white"> Pesit &copy; 2016</p></font>

    </footer>
</body>
</html> 