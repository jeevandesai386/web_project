<?php 
session_start();
?>
<!DOCTYPE html>
<html lang=''>
<head>
    <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>C</title>
	<link href="css/a.css" rel="stylesheet" type="text/css">
   <link href="http://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet" />
<style>

#footer
{
	background-color: white;
	color: black;
	clear: both;
	text-align: center;
	padding: 5px;
}
 p
 {
   font-family: "Trebuchet MS", Helvetica, sans-serif;
 }

ul
{
  font-family: "Trebuchet MS", Helvetica, sans-serif;
}

#br
{
   line-height: 3px;
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
<a href="index.html"><img src="images/logout.png" align="right" width="62" height="40"></a>
	<div id="txt" align="right" width=20></div>
	<div id="header">
		<table border="0">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/head1.png" height="125" width="600">
		</table>
	</div>
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
            
         </li>
      </ul>
   </li>
   <li class='active has-sub'><a href='software.php'><span>Softwares</span></a></li>
   <li class='active has-sub'><a href='feed1.php'><span>RSS</span></a></li>
   <li class='active has-sub'><a href='download1.php'><span>Papers</span></a></li>
   <li class='active has-sub'><a href='video.php'><span>Videos</span></a></li>
   <li class='active has-sub'><a href='contact.php'><span>Contact Us</span></a></li>
   <li class='active has-sub'><a href='aboutus.html'><span>About Us</span></a></li>
</ul>
</div>
<hr>
<div data-role="page" id="one">
<div id="nav100">
   <div id="ul"><ul>
      <a href="#one" style="text-decoration: none; color: #ffc04c; " ><li>-Overview</li></a>  
      <div id="br"><br></div><a href="#two" style="text-decoration: none; color: #ffc04c"><li>-Environment Setup</li></a>  
      <div id="br"><br></div><a href="#three" style="text-decoration: none; color: #ffc04c"><li>-Basic Syntax</li></a>  
      <div id="br"><br></div><a href="#four" style="text-decoration: none; color: #ffc04c"><li>-Objects & Classes</li></a>  
      <div id="br"><br></div><a href="#five" style="text-decoration: none; color: #ffc04c"><li>-Basic Datatypes</li></a>  
      <div id="br"><br></div><a href="#six" style="text-decoration: none; color: #ffc04c"><li>-Variables Types</li></a>  
      <div id="br"><br></div><a href="#seven" style="text-decoration: none; color: #ffc04c"><li>-Modifier Types</li></a>  
      <div id="br"><br></div><a href="#eight" style="text-decoration: none; color: #ffc04c"><li>-Basic Operators</li></a>
      <div id="br"><br></div><a href="#nine" style="text-decoration: none; color: #ffc04c"><li>-Loop Control</li></a> 
      <div id="br"><br></div><a href="#ten" style="text-decoration: none; color: #ffc04c"><li>-Decision Making</li></a> 
      <div id="br"><br></div><a href="#eleven" style="text-decoration: none; color: #ffc04c"><li>-Numbers</li></a> 
      <div id="br"><br></div><a href="#twelve" style="text-decoration: none; color: #ffc04c"><li>-Characters</li></a> 
      <div id="br"><br></div><a href="#thirteen" style="text-decoration: none; color: #ffc04c"><li>-Strings</li></a>   
      <div id="br"><br></div><a href="#fourteen" style="text-decoration: none; color: #ffc04c"><li>-Arrays</li></a> 
      <div id="br"><br></div><a href="#fifteen" style="text-decoration: none; color: #ffc04c"><li>-Date & time</li></a> 
      <div id="br"><br></div><a href="#sixteen" style="text-decoration: none; color: #ffc04c"><li>-Regular Expressions</li></a> 
      <div id="br"><br></div><a href="#seventeen" style="text-decoration: none; color: #ffc04c"><li>-Methods</li></a> 
      <div id="br"><br></div><a href="#eighteen" style="text-decoration: none; color: #ffc04c"><li>-Files and I/O</li></a> 
      <div id="br"><br></div><a href="#nineteen" style="text-decoration: none; color: #ffc04c"><li>-Exceptions</li></a> 
      <div id="br"><br></div><a href="#twenty" style="text-decoration: none; color: #ffc04c"><li>-Inner class</li></a> 
   </ul>
   </div>
   </p>
</div>
<a href="files/c.pdf" id="modal" name="modal"><span><img src="images/pdf.png" align="right" width="180" height="80"></span></a>
<div style="background-color:white; border-radius: 15px; width: 800px; margin-right: auto; margin-left: auto; color:black; padding:70px; " >
<center><img src="images/c.png" width="450" height="250">
<h1><u>Overview</u></h1></center>

<p>C is a general-purpose, high-level language that was originally developed by Dennis M. Ritchie to develop the UNIX operating system at Bell Labs. C was originally first implemented on the DEC PDP-11 computer in 1972.</p>
<p>In 1978, Brian Kernighan and Dennis Ritchie produced the first publicly available description of C, now known as the K&amp;R standard.</p>
<p>The UNIX operating system, the C compiler, and essentially all UNIX application programs have been written in C. C has now become a widely used professional language for various reasons &minus;</p>
<ul class="list">
<li>Easy to learn</li>
<li>Structured language</li>
<li>It produces efficient programs</li>
<li>It can handle low-level activities</li>
<li>It can be compiled on a variety of computer platforms</li>
</ul>
<h2>Facts about C</h2>
<ul class="list">
<li>C was invented to write an operating system called UNIX.</li>
<li>C is a successor of B language which was introduced around the early 1970s.</li>
<li>The language was formalized in 1988 by the American National Standard Institute (ANSI).</li>
<li>The UNIX OS was totally written in C.</li>
<li>Today C is the most widely used and popular System Programming Language.</li>
<li>Most of the state-of-the-art software have been implemented using C.</li>
<li>Today's most popular Linux OS and RDBMS MySQL have been written in C.</li>
</ul>
<h2>Why use C?</h2>
<p>C was initially used for system development work, particularly the programs that make-up the operating system. C was adopted as a system development language because it produces code that runs nearly as fast as the code written in assembly language. Some examples of the use of C might be &minus;</p>
<ul class="list">
<li>Operating Systems</li>
<li>Language Compilers</li>
<li>Assemblers</li>
<li>Text Editors</li>
<li>Print Spoolers</li>
<li>Network Drivers</li>
<li>Modern Programs</li>
<li>Databases</li>
<li>Language Interpreters</li>
<li>Utilities</li>
</ul>
<h2>C Programs</h2>
<p>A C program can vary from 3 lines to millions of lines and it should be written into one or more text files with extension <b>".c"</b>; for example, <i>hello.c</i>. You can use <b>"vi"</b>, <b>"vim"</b> or any other text editor to write your C program into a file.</p>
<p>This tutorial assumes that you know how to edit a text file and how to write source code inside a program file.</p>
</div>
</div>

<br>
<center><img src="images/line2.png" width="700" height="10"></center>
<br>
<!-- page two-->
<div data-role="page" id="two">
<div style="background-color:white; width: 800px; margin-right: auto; margin-left: auto; color:black; padding:70px; " >

<center><h1><u>Environment Setup</u></h1></center>

<blockquote>
<h2>Try it Option Online</h2>
<p>We have set up the C Programming environment on-line, so that you can compile and execute all the available examples on line. It gives you confidence in what you are reading and enables you to verify the programs with different options. Feel free to modify any example and execute it on-line.</p>
<p>Try the following example using our on-line compiler available at <a href="http://www.tutorialspoint.com/codingground.htm">CodingGround.</a></p>
<pre class="prettyprint notranslate tryit">
#include &lt;stdio.h&gt;

int main() {

   /* my first program in C */
   printf("Hello, World! \n");
   
   return 0;
}
</pre>
<p>For most of the examples given in this tutorial, you will find a <b>Try it</b> option in our website code sections at the top right corner that will take you to the online compiler. So just make use of it and enjoy your learning.</p>
</blockquote>
<h2>Local Environment Setup</h2>
<p>If you want to set up your environment for C programming language, you need the following two software tools available on your computer, (a) Text Editor and (b) The C Compiler.</p>
<h2>Text Editor</h2>
<p>This will be used to type your program. Examples of few a editors include Windows Notepad, OS Edit command, Brief, Epsilon, EMACS, and vim or vi.</p>
<p>The name and version of text editors can vary on different operating systems. For example, Notepad will be used on Windows, and vim or vi can be used on windows as well as on Linux or UNIX.</p>
<p>The files you create with your editor are called the source files and they contain the program source codes. The source files for C programs are typically named with the extension "<b>.c</b>".</p>
<p>Before starting your programming, make sure you have one text editor in place and you have enough experience to write a computer program, save it in a file, compile it and finally execute it.</p>
<h2>The C Compiler</h2>
<p>The source code written in source file is the human readable source for your program. It needs to be "compiled", into machine language so that your CPU can actually execute the program as per the instructions given.</p>
<p>The compiler compiles the source codes into final executable programs. The most frequently used and free available compiler is the GNU C/C++ compiler, otherwise you can have compilers either from HP or Solaris if you have the respective operating systems.</p>
<p>The following section explains how to install GNU C/C++ compiler on various OS. We keep mentioning C/C++ together because GNU gcc compiler works for both C and C++ programming languages.</p>
<h2>Installation on UNIX/Linux</h2>
<p>If you are using <b>Linux or UNIX</b>, then check whether GCC is installed on your system by entering the following command from the command line &minus;</p>
<pre class="result notranslate">
$ gcc -v
</pre>
<p>If you have GNU compiler installed on your machine, then it should print a message as follows &minus;</p>
<pre class="result notranslate">
Using built-in specs.
Target: i386-redhat-linux
Configured with: ../configure --prefix=/usr .......
Thread model: posix
gcc version 4.1.2 20080704 (Red Hat 4.1.2-46)
</pre>
<p>If GCC is not installed, then you will have to install it yourself using the detailed instructions available at <a href="http://gcc.gnu.org/install/" rel="nofollow" target="_blank">http://gcc.gnu.org/install/</a></p>
<p>This tutorial has been written based on Linux and all the given examples have been compiled on the Cent OS flavor of the Linux system.</p>
<h2>Installation on Mac OS</h2>
<p>If you use Mac OS X, the easiest way to obtain GCC is to download the Xcode development environment from Apple's web site and follow the simple installation instructions. Once you have Xcode setup, you will be able to use GNU compiler for C/C++.</p>
<p>Xcode is currently available at <a href="http://developer.apple.com/technologies/tools/" rel="nofollow" target="_blank">developer.apple.com/technologies/tools/</a>.</p>
<h2>Installation on Windows</h2>
<p>To install GCC on Windows, you need to install MinGW. To install MinGW, go to the MinGW homepage, <a href="http://www.mingw.org" rel="nofollow" target="_blank"> www.mingw.org</a>, and follow the link to the MinGW download page. Download the latest version of the MinGW installation program, which should be named MinGW-&lt;version&gt;.exe.</p>
<p>While installing Min GW, at a minimum, you must install gcc-core, gcc-g++, binutils, and the MinGW runtime, but you may wish to install more.</p>
<p>Add the bin subdirectory of your MinGW installation to your <b>PATH</b> environment variable, so that you can specify these tools on the command line by their simple names.</p>
<p>After the installation is complete, you will be able to run gcc, g++, ar, ranlib, dlltool, and several other GNU tools from the Windows command line.</p>
<hr />
</div>
</div>

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