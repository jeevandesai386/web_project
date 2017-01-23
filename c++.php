<?php 
session_start();
?>
<!DOCTYPE html>
<html lang=''>
<head>
    <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>C++</title>
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
   <li class='active has-sub'><a href='aboutus.php'><span>About Us</span></a></li>
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
<a href="files/c++.pdf" id="modal" name="modal"><span><img src="images/pdf.png" align="right" width="180" height="80"></span></a>
<div style="background-color:white; border-radius: 15px; width: 800px; margin-right: auto; margin-left: auto; color:black; padding:70px; " >
<center><img src="images/c++.png" width="250" height="250">
<h1><u>Overview</u></h1></center>

<p>C++ is a statically typed, compiled, general-purpose, case-sensitive, free-form programming language that supports procedural, object-oriented, and generic programming.</p>
<p>C++ is regarded as a <b>middle-level</b> language, as it comprises a combination of both high-level and low-level language features.</p>
<p>C++ was developed by Bjarne Stroustrup starting in 1979 at Bell Labs in Murray Hill, New Jersey, as an enhancement to the C language and originally named C with Classes but later it was renamed C++ in 1983.</p>
<p>C++ is a superset of C, and that virtually any legal C program is a legal C++ program.</p>
<p><b>Note:</b> A programming language is said to use static typing when type checking is performed during compile-time as opposed to run-time.</p>
<h2>Object-Oriented Programming</h2>
<p>C++ fully supports object-oriented programming, including the four pillars of object-oriented development:</p>
<ul class="list">
<li><p>Encapsulation</p></li>
<li><p>Data hiding</p></li>
<li><p>Inheritance</p></li>
<li><p>Polymorphism</p></li>
</ul>
<h2>Standard Libraries</h2>
<p>Standard C++ consists of three important parts:</p>
<ul class="list">
<li><p>The core language giving all the building blocks including variables, data types and literals, etc.</p></li>
<li><p>The C++ Standard Library giving a rich set of functions manipulating files, strings, etc.</p></li>
<li><p>The Standard Template Library (STL) giving a rich set of methods manipulating data structures, etc.</p></li>
</ul>
<h2>The ANSI Standard</h2>
<p>The ANSI standard is an attempt to ensure that C++ is portable -- that code you write for Microsoft's compiler will compile without errors, using a compiler on a Mac, UNIX, a Windows box, or an Alpha.</p>
<p>The ANSI standard has been stable for a while, and all the major C++ compiler manufacturers support the ANSI standard.</p>
<h2>Learning C++</h2>
<p>The most important thing to do when learning C++ is to focus on concepts and not get lost in language technical details.</p>
<p>The purpose of learning a programming language is to become a better programmer; that is, to become more effective at designing and implementing new systems and at maintaining old ones.</p>
<p>C++ supports a variety of programming styles. You can write in the style of Fortran, C, Smalltalk, etc., in any language. Each style can achieve its aims effectively while maintaining runtime and space efficiency.</p>
<h2>Use of C++</h2>
<p>C++ is used by hundreds of thousands of programmers in essentially every application domain.</p>
<p>C++ is being highly used to write device drivers and other softwares that rely on direct manipulation of hardware under realtime constraints.</p>
<p>C++ is widely used for teaching and research because it is clean enough for successful teaching of basic concepts.</p>
<p>Anyone who has used either an Apple Macintosh or a PC running Windows has indirectly used C++ because the primary user interfaces of these systems are written in C++.</p>
<hr />
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
<p>You really do not need to set up your own environment to start learning C++ programming language. Reason is very simple, we already have set up C++ Programming environment online, so that you can compile and execute all the available examples online at the same time when you are doing your theory work. This gives you confidence in what you are reading and to check the result with different options. Feel free to modify any example and execute it online.</p>
<p>Try the following example using <b>Try it</b> option available at the top right corner of the below sample code box:</p>
<pre class="prettyprint notranslate tryit">
#include &lt;iostream&gt;
using namespace std;

int main()
{
   cout &lt;&lt; "Hello World";
   return 0;
}
</pre>
<p>For most of the examples given in this tutorial, you will find <b>Try it</b> option, so just make use of it and enjoy your learning.</p>
</blockquote>
<h2>Local Environment Setup</h2>
<p>If you are still willing to set up your environment for C++, you need following two softwares available on your computer.</p>
<h2>Text Editor:</h2>
<p>This will be used to type your program. Examples of few editors include Windows Notepad, OS Edit command, Brief, Epsilon, EMACS, and vim or vi.</p>
<p>Name and version of text editor can vary on different operating systems. For example, Notepad will be used on Windows and vim or vi can be used on windows  as well as Linux, or UNIX.</p>
<p>The files you create with your editor are called source files and for C++ they typically are named with the extension .cpp, .cp, or .c.</p>
<p>Before starting your programming, make sure you have one text editor in place and you have enough experience to type your C++ program.</p>
<h2>C++ Compiler:</h2> 
<p>This is actual C++ compiler, which will be used to compile your source code into final executable program.</p>
<p>Most C++ compilers don't care what extension you give your source code, but if you don't specify otherwise, many will use .cpp by default</p>
<p>Most frequently used and free available compiler is GNU C/C++ compiler, otherwise you can have compilers either from HP or Solaris if you have respective Operating Systems.</p>
<h2>Installing GNU C/C++ Compiler:</h2>
<h2>UNIX/Linux Installation:</h2>
<p>If you are using <b>Linux or UNIX</b> then check whether GCC is installed on your system by entering the following command from the command line:</p>
<pre class="prettyprint notranslate">
$ g++ -v
</pre>
<p>If you have installed GCC, then it should print a message such as the following:</p>
<pre class="prettyprint notranslate">
Using built-in specs.
Target: i386-redhat-linux
Configured with: ../configure --prefix=/usr .......
Thread model: posix
gcc version 4.1.2 20080704 (Red Hat 4.1.2-46)
</pre>
<p>If GCC is not installed, then you will have to install it yourself using the detailed instructions available at <a href="http://gcc.gnu.org/install/" target="_blank">http://gcc.gnu.org/install/</a></p>
<h2>Mac OS X Installation:</h2>
<p>If you use Mac OS X, the easiest way to obtain GCC is to download the Xcode development environment from Apple's web site and follow the simple installation instructions.</p>
<p>Xcode is currently available at <a href="http://developer.apple.com/technologies/tools/" target="_blank">developer.apple.com/technologies/tools/</a>.</p>
<h2>Windows Installation:</h2>
<p>To install GCC at Windows you need to install MinGW. To install MinGW, go to the MinGW homepage, <a href="http://www.mingw.org" target="_blank">www.mingw.org</a>, and follow the link to the MinGW download page. Download the latest version of the MinGW installation program which should be named MinGW-&lt;version&gt;.exe.</p>
<p>While installing MinWG, at a minimum, you must install gcc-core, gcc-g++, binutils, and the MinGW runtime, but you may wish to install more.</p>
<p>Add the bin subdirectory of your MinGW installation to your <b>PATH</b> environment variable so that you can specify these tools on the command line by their simple names.</p>
<p>When the installation is complete, you will be able to run gcc, g++, ar, ranlib, dlltool, and several other GNU tools from the Windows command line.</p>
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