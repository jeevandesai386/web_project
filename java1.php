<?php 
session_start();
?>
<!DOCTYPE html>
<html lang=''>
<head>
    <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JAVA</title>
	<link href="css/a.css" rel="stylesheet" type="text/css">
   <link href="http://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet" />
<style>
#tfheader{
    background-color:#141414;
  }
  #tfnewsearch{
    float:right;
    padding:14px;
  }
  .tftextinput{
    margin: 0;
    padding: 5px 15px;
    font-family: Arial, Helvetica, sans-serif;
    font-size:14px;
    border:1px solid #0076a3; border-right:0px;
    border-top-left-radius: 5px 5px;
    border-bottom-left-radius: 5px 5px;
  }
  .tfbutton {
    margin: 0;
    padding: 5px 15px;
    font-family: Arial, Helvetica, sans-serif;
    font-size:14px;
    outline: none;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    color: #ffffff;
    border: solid 1px #0076a3; border-right:0px;
    background: #0095cd;
    background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
    background: -moz-linear-gradient(top,  #00adee,  #0078a5);
    border-top-right-radius: 5px 5px;
    border-bottom-right-radius: 5px 5px;
  }
  .tfbutton:hover {
    text-decoration: none;
    background: #007ead;
    background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
    background: -moz-linear-gradient(top,  #0095cc,  #00678e);
  }
  /* Fixes submit button height problem in Firefox */
  .tfbutton::-moz-focus-inner {
    border: 0;
  }
  .tfclear{
    clear:both;
  }
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
   <li class='active has-sub'><a href='conact.php'><span>Contact Us</span></a></li>
   <li class='active has-sub'><a href='aboutus.php'><span>About Us</span></a></li>
   <li class='active has-sub'><span><div id="tfheader">
    <form id="tfnewsearch" method="get" action="http://www.google.com" target="_blank">
            <input type="text" class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
    </form>
  <div class="tfclear"></div>
  </div></span></a></li>
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
<a href="files/java.pdf" id="modal" name="modal"><span><img src="images/pdf.png" align="right" width="180" height="80"></span></a>
<div style="background-color:white; border-radius: 15px; width: 800px; margin-right: auto; margin-left: auto; color:black; padding:70px; " >
<center><img src="images/java.png" width="250" height="250">
<h1><u>OVERVIEW OF JAVA</u></h1></center>
<p>Java programming language was originally developed by Sun Microsystems which was initiated by James Gosling and released in 1995 as core component of Sun Microsystems' Java platform (Java 1.0 [J2SE]).</p>
<p>The latest release of the Java Standard Edition is Java SE 8. With the advancement of Java and its widespread popularity, multiple configurations were built to suite various types of platforms. Ex: J2EE for Enterprise Applications, J2ME for Mobile Applications.</p>
<p>The new J2 versions were renamed as Java SE, Java EE and Java ME respectively. Java is guaranteed to be <b>Write Once, Run Anywhere.</b></p>
<p>Java is:</p>
<ul class="list">
<li><p><b>Object Oriented:</b> In Java, everything is an Object. Java can be easily extended since it is based on the Object model.</p></li>
<li><p><b>Platform independent:</b> Unlike many other programming languages including C and C++, when Java is compiled, it is not compiled into platform specific machine, rather into platform independent byte code. This byte code is distributed over the web and interpreted by virtual Machine (JVM) on whichever platform it is being run.</p></li>
<li><p><b>Simple:</b> Java is designed to be easy to learn. If you understand the basic concept of OOP Java would be easy to master.</p></li>
<li><p><b>Secure:</b> With Java's secure feature it enables to develop virus-free, tamper-free systems. Authentication techniques are based on public-key encryption.</p></li>
<li><p><b>Architectural-neutral: </b>Java compiler generates an architecture-neutral object file format which makes the compiled code to be executable on many processors, with the presence of Java runtime system.</p></li>
<li><p><b>Portable:</b> Being architectural-neutral and having no implementation dependent aspects of the specification makes Java portable. Compiler in Java is written in ANSI C with a clean portability boundary which is a POSIX subset.</p></li>
<li><p><b>Robust:</b> Java makes an effort to eliminate error prone situations by emphasizing mainly on compile time error checking and runtime checking.</p></li>
<li><p><b>Multithreaded:</b> With Java's multithreaded feature it is possible to write programs that can do many tasks simultaneously. This design feature allows developers to construct smoothly running interactive applications.</p></li>
<li><p><b>Interpreted:</b> Java byte code is translated on the fly to native machine instructions and is not stored anywhere. The development process is more rapid and analytical since the linking is an incremental and light weight process. </p></li>
<li><p><b>High Performance:</b> With the use of Just-In-Time compilers, Java enables high performance.</p></li>
<li><p><b>Distributed:</b> Java is designed for the distributed environment of the internet.</p></li>
<li><p><b>Dynamic:</b> Java is considered to be more dynamic than C or C++ since it is designed to adapt to an evolving environment. Java programs can carry extensive amount of run-time information that can be used to verify and resolve accesses to objects on run-time.</p></li>
</ul>
<h2>History of Java:</h2>
<p>James Gosling initiated the Java language project in June 1991 for use in one of his many set-top box projects. The language, initially called Oak after an oak tree that stood outside Gosling's office, also went by the name Green and ended up later being renamed as Java, from a list of random words.</p>
<p>Sun released the first public implementation as Java 1.0 in 1995. It promised <b>Write Once, Run Anywhere</b>(WORA), providing no-cost run-times on popular platforms. </p>
<p>On 13 November 2006, Sun released much of Java as free and open source software under the terms of the GNU General Public License (GPL).</p>
<p>On 8 May 2007, Sun finished the process, making all of Java's core code free and open-source, aside from a small portion of code to which Sun did not hold the copyright.</p>
<h2>Tools you will need:</h2>
<p>For performing the examples discussed in this tutorial, you will need a Pentium 200-MHz computer with a minimum of 64 MB of RAM (128 MB of RAM recommended).</p>
<p>You also will need the following softwares:</p>
<ul class="list">
<li><p>Linux 7.1 or Windows xp/7/8 operating system.</p></li>
<li><p>Java JDK 8 </p></li>
<li><p>Microsoft Notepad or any other text editor</p></li>
</ul>
<hr>
</div> 
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
<h3>Try it Option Online</h3>
<p>You really do not need to set up your own environment to start learning Java programming language. Reason is very simple, we already have setup Java Programming environment online, so that you can compile and execute all the available examples online at the same time when you are doing your theory work. This gives you confidence in what you are reading and to check the result with different options. Feel free to modify any example and execute it online.</p>
<p>Try following example using <b>Try it</b> option available at the top right corner of the below sample code box:</p>
<textarea rows="8" cols="90" readonly style="resize: none; background-color: #FDEEF4">
public class MyFirstJavaProgram 
{
    public static void main(String []args) 
    {
       System.out.println("Hello World");
    }
} 
</textarea>
<p>For most of the examples given in this tutorial, you will find <b>Try it</b> option, so just make use of it and enjoy your learning.</p>
</blockquote>
<h2>Local Environment Setup</h2>
<p>If you are still willing to set up your environment for Java programming language, then this section guides you on how to download and set up Java on your machine. Please follow the following steps to set up the environment.</p>
<p>Java SE is freely available from the link <a href="software.html" target="_blank"><h3>Download Java</h3></a>. So you download a version based on your operating system.</p>
<p>Follow the instructions to download java and run the <b>.exe</b> to install Java on your machine. Once you installed Java on your machine, you would need to set environment variables to point to correct installation directories:</p>
<h2>Setting up the path for windows:</h2>
<p>Assuming you have installed Java in <i>c:\Program Files\java\jdk</i> directory:</p>
<ul class="list">
<li><p>Right-click on 'My Computer' and select 'Properties'.</p></li>
<li><p>Click on the 'Environment variables' button under the 'Advanced' tab.</p></li>
<li><p>Now, alter the 'Path' variable so that it also contains the path to the Java executable. Example, if the path is currently set to 'C:\WINDOWS\SYSTEM32', then change your path to read 'C:\WINDOWS\SYSTEM32;c:\Program Files\java\jdk\bin'.</p></li>
</ul>
<h2>Setting up the path for Linux, UNIX, Solaris, FreeBSD:</h2>
<p>Environment variable PATH should be set to point to where the Java binaries have been installed. Refer to your shell documentation if you have trouble doing this.</p>
<p>Example, if you use <i>bash</i> as your shell, then you would add the following line to the end of your '.bashrc: export PATH=/path/to/java:$PATH'</p>
<h2>Popular Java Editors:</h2>
<p>To write your Java programs, you will need a text editor. There are even more sophisticated IDEs available in the market. But for now, you can consider one of the following:</p>
<ul class="list">
<li><p><b>Notepad:</b> On Windows machine you can use any simple text editor like Notepad (Recommended for this tutorial), TextPad.</p></li>
<li><p><b>Netbeans:</b> is a Java IDE that is open-source and free which can be downloaded from <a href="http://www.netbeans.org/index.html" target="_blank">http://www.netbeans.org/index.html</a>.</p></li>
<li><p><b>Eclipse:</b> is also a Java IDE developed by the eclipse open-source community and can be downloaded from <a href="http://www.eclipse.org/" target="_blank">http://www.eclipse.org/</a>.</p></li>
</ul>
</li>
</li>
</ul>
<hr>
</div>
</div>
<br>
<center><img src="images/line2.png" width="700" height="10"></center>
<br>
<!--page three-->
<div data-role="page" id="three">
<div style="background-color:white; border-radius: 15px; width: 800px; margin-right: auto; margin-left: auto; color:black; padding:70px; " >
<center><h1><u>BASIC SYNTAX</u></h1></center>

<p>When we consider a Java program it can be defined as a collection of objects that communicate via invoking each other's methods. Let us now briefly look into what do class, object, methods and instance variables mean.</p>
<ul class="list">
<li><p><b>Object -</b> Objects have states and behaviours. Example: A dog has states - colour, name, breed as well as behaviours -wagging, barking, eating. An object is an instance of a class. </p></li>
<li><p><b>Class -</b> A class can be defined as a template/ blue print that describes the behaviours/states that object of its type support.</p></li>
<li><p><b>Methods -</b> A method is basically a behaviour. A class can contain many methods. It is in methods where the logics are written, data is manipulated and all the actions are executed.</p></li>
<li><p><b>Instance Variables -</b> Each object has its unique set of instance variables. An object's state is created by the values assigned to these instance variables.</p></li>
</ul>
<h2>First Java Program:</h2>
<p>Let us look at a simple code that would print the words <i>Hello World</i>.</p>
<textarea rows="8" cols="90" readonly style="resize: none; background-color: #FDEEF4">
public class MyFirstJavaProgram {

   /* This is my first java program.  
    * This will print 'Hello World' as the output
    */
  
    public static void main(String []args) {
       System.out.println("Hello World"); // prints Hello World
    }
} 
</textarea>
<p>Let's look at how to save the file, compile and run the program. Please follow the steps given below:</p>
<ul class="list">
<li><p>Open notepad and add the code as above.</p></li>
<li><p>Save the file as: MyFirstJavaProgram.java.</p></li>
<li><p>Open a command prompt window and go to the directory where you saved the   class. Assume it's C:\.</p></li>
<li><p>Type ' javac MyFirstJavaProgram.java' and press enter to compile your code. If there are no errors in your code, the command prompt will take you to the next line (Assumption : The path variable is set).</p></li>
<li><p>Now, type ' java MyFirstJavaProgram ' to run your program.</p></li>  
<li><p>You will be able to see ' Hello World ' printed on the window.</p></li>
</ul>
<pre class="result notranslate">
C:\&gt; javac MyFirstJavaProgram.java
C:\&gt; java MyFirstJavaProgram 
Hello World
</pre>
<h2>Basic Syntax:</h2>
<p>About Java programs, it is very important to keep in mind the following points.</p>
<ul class="list">
<li><p><b>Case Sensitivity - </b> Java is case sensitive, which means identifier <b>Hello</b> and <b>hello</b> would have different meaning in Java.</p></li>
<li><p><b>Class Names - </b> For all class names the first letter should be in Upper Case. <br /><br /> If several words are used to form a name of the class, each inner word's first letter should be in Upper Case.<br /><br /> Example <i>class MyFirstJavaClass </i></p></li>
<li><p><b>Method Names - </b> All method names should start with a Lower Case letter.  <br /><br /> If several words are  used to form the name of the method, then each inner word's first letter should be in Upper Case.<br /><br /> Example <i>public void myMethodName()</i></p></li>
<li><p><b>Program File Name - </b> Name of the program file should exactly match the class name.  <br /><br /> When saving the file, you should save it using the class name (Remember Java is case sensitive) and append '.java' to the end of the name (if the file name and the class name do not match your program will not compile).<br /><br /> Example: Assume 'MyFirstJavaProgram' is the class  name. Then the file should be saved as <i>'MyFirstJavaProgram.java'</i></p></li>
<li><p><b>public static void main(String args[]) -</b> Java program processing starts from the main() method which is a mandatory part of every Java program.</p></li>
</ul>
<h2>Java Identifiers:</h2>
<p>All Java components require names. Names used for classes, variables and methods are called identifiers.</p>
<p>In Java, there are several points to remember about identifiers. They are as follows:</p>
<ul class="list">
<li><p>All identifiers should begin with a letter (A to Z or a to z), currency character ($) or an underscore (_).</p></li>
<li><p>After the first character identifiers can have any combination of characters.</p></li>
<li><p>A key word cannot be used as an identifier.</p></li>
<li><p>Most importantly identifiers are case sensitive.</p></li>
<li><p>Examples of legal identifiers: age, $salary, _value,  __1_value</p></li>
<li><p>Examples of illegal identifiers: 123abc, -salary</p></li>
</ul>
<h2>Java Modifiers:</h2>
<p>Like other languages, it is possible to modify classes, methods, etc., by using modifiers. There are two categories of modifiers:</p>
<ul class="list">
<li><p><b>Access Modifiers: </b> default, public , protected, private</p></li>
<li><p><b>Non-access Modifiers: </b> final, abstract, strictfp</p></li>
</ul>
<p>We will be looking into more details about modifiers in the next section.</p>
<h2>Java Variables:</h2>
<p>We would see following type of variables in Java:</p>
<ul class="list">
<li>Local Variables</li>
<li>Class Variables (Static Variables)</li>
<li>Instance Variables (Non-static variables)</li>
</ul>
<h2>Java Arrays:</h2>
<p>Arrays are objects that store multiple variables of the same type. However, an array itself is an object on the heap. We will look into how to declare, construct and initialize in the upcoming chapters.</p>
<h2>Java Enums:</h2>
<p>Enums were introduced in java 5.0. Enums restrict a variable to have one of only a few predefined values. The values in this enumerated list are called enums.</p>
<p>With the use of enums it is possible to reduce the number of bugs in your code. </p>
<p>For example, if we consider an application for a fresh juice shop, it would be possible to restrict the glass size to small, medium and large. This would make sure that it would not allow anyone to order any size other than the small, medium or large.</p>
<h2>Example:</h2>
<textarea rows="8" cols="90" readonly style="resize: none; background-color: #FDEEF4">
class FreshJuice {

   enum FreshJuiceSize{ SMALL, MEDIUM, LARGE }
   FreshJuiceSize size;
}

public class FreshJuiceTest {

   public static void main(String args[]){
      FreshJuice juice = new FreshJuice();
      juice.size = FreshJuice.FreshJuiceSize.MEDIUM ;
      System.out.println("Size: " + juice.size);
   }
}
</textarea>
<p>Above example will produce the following result:</p>
<pre class="prettyprint notranslate">
Size: MEDIUM
</pre>
<p><b>Note:</b> enums can be declared as their own or inside a class. Methods, variables, constructors can be defined inside enums as well.</p>
<h2>Java Keywords:</h2>
<p>The following list shows the reserved words in Java. These reserved words may not be used as constant or variable or any other identifier names.</p>
<table class="table table-bordered">
<tr>
<td>abstract</td>
<td>assert</td>
<td>boolean</td>
<td>break</td>
</tr>
<tr>
<td>byte</td>
<td>case</td>
<td>catch</td>
<td>char</td>
</tr>
<tr>
<td>class</td>
<td>const</td>
<td>continue</td>
<td>default</td>
</tr>
<tr>
<td>do</td>
<td>double</td>
<td>else</td>
<td>enum</td>
</tr>
<tr>
<td>extends</td>
<td>final</td>
<td>finally</td>
<td>float</td>
</tr>
<tr>
<td>for</td>
<td>goto</td>
<td>if</td>
<td>implements</td>
</tr>
<tr>
<td>import</td>
<td>instanceof</td>
<td>int</td>
<td>interface</td>
</tr>
<tr>
<td>long</td>
<td>native</td>
<td>new</td>
<td>package</td>
</tr>
<tr>
<td>private</td>
<td>protected</td>
<td>public</td>
<td>return</td>
</tr>
<tr>
<td>short</td>
<td>static</td>
<td>strictfp</td>
<td>super</td>
</tr>
<tr>
<td>switch</td>
<td>synchronized</td>
<td>this</td>
<td>throw</td>
</tr>
<tr>
<td>throws</td>
<td>transient</td>
<td>try</td>
<td>void</td>
</tr>
<tr>
<td>volatile</td>
<td>while</td>
<td></td>
<td></td>
</tr>
</table>
<h2>Comments in Java</h2>
<p>Java supports single-line and multi-line comments very similar to c and c++. All characters available inside any comment are ignored by Java compiler.</p>
<textarea rows="8" cols="90" readonly style="resize: none; background-color: #FDEEF4">
public class MyFirstJavaProgram{

   /* This is my first java program.
    * This will print 'Hello World' as the output
    * This is an example of multi-line comments.
    */

    public static void main(String []args){
       // This is an example of single line comment
       /* This is also an example of single line comment. */
       System.out.println("Hello World"); 
    }
} 
</textarea>
<h2>Using Blank Lines:</h2>
<p>A line containing only white space, possibly with a comment, is known as a blank line, and Java totally ignores it.</p>
<h2>Inheritance:</h2>
<p>In Java, classes can be derived from classes.  Basically if you need to create a new class and here is already a class that has some of the code you require, then it is possible to derive your new class from the already existing code. </p>
<p>This concept allows you to reuse the fields and methods of the existing class without having to rewrite the code in a new class. In this scenario the existing class is called the superclass and the derived class is called the subclass.</p>
<h2>Interfaces:</h2>
<p>In Java language, an interface can be defined as a contract between objects on how to communicate with each other. Interfaces play a vital role when it comes to the concept of inheritance.</p>
<p>An interface defines the methods, a deriving class(subclass) should use. But the implementation of the methods is totally up to the subclass.</p>
</div>
</div>
</li>
</li>
</ul>
</div>
<br>
<center><img src="images/line2.png" width="700" height="10"></center>
<br>
<!--page four-->
<div data-role="page" id="four">
<div style="background-color:white; border-radius: 15px; width: 800px; margin-right: auto; margin-left: auto; color:black; padding:70px; " >
<center><h1><u>OBJECT & CLASSES</u></h1></center>

<p>Java is an Object-Oriented Language. As a language that has the Object Oriented feature, Java supports the following fundamental concepts:</p>
<ul class="list">
<li>Polymorphism</li>
<li>Inheritance</li>
<li>Encapsulation</li>
<li>Abstraction</li>
<li>Classes</li>
<li>Objects</li>
<li>Instance</li>
<li>Method</li>
<li>Message Parsing</li>
</ul>
<p>In this chapter, we will look into the concepts Classes and Objects.</p>
<ul class="list">
<li><p><b>Object -</b> Objects have states and behaviors. Example: A dog has states - color, name, breed as well as behaviors -wagging, barking, eating. An object is an instance of a class. </p></li>
<li><p><b>Class -</b> A class can be defined as a template/blue print that describes the behaviors/states that object of its type support.</p></li>
</ul>
<h2>Objects in Java:</h2>
<p>Let us now look deep into what are objects. If we consider the real-world we can find many objects around us, Cars, Dogs, Humans, etc. All these objects have a state and behavior.</p>
<p>If we consider a dog, then its state is - name, breed, color, and the behavior is - barking, wagging, running</p>
<p>If you compare the software object with a real world object, they have very similar characteristics.</p>
<p>Software objects also have a state and behavior. A software object's state is stored in fields and behavior is shown via methods.</p>
<p>So in software development, methods operate on the internal state of an object and the object-to-object communication is done via methods.</p>
<h2>Classes in Java:</h2>
<p>A class is a blue print from which individual objects are created.</p>
<p>A sample of a class is given below:</p>
<textarea rows="8" cols="90" readonly style="resize: none; background-color: #FDEEF4">

public class Dog{
   String breed;
   int ageC
   String color;

   void barking(){
   }
   
   void hungry(){
   }
   
   void sleeping(){
   }
}
</textarea>
<p>A class can contain any of the following variable types.</p>
<ul class="list">
<li><p><b>Local variables: </b>Variables defined inside methods, constructors or blocks are called local variables. The variable will be declared and initialized within the method and the variable will be destroyed when the method has completed.</p></li>
<li><p><b>Instance variables: </b>Instance variables are variables within a class but outside any method. These variables are initialized when the class is instantiated. Instance variables can be accessed from inside any method, constructor or blocks of that particular class.</p></li>
<li><p><b>Class variables: </b>Class variables are variables declared with in a class, outside any method, with the static keyword.</p></li>
</ul>
<p>A class can have any number of methods to access the value of various kinds of methods. In the above example, barking(), hungry() and sleeping() are methods.</p>
<p>Below mentioned are some of the important topics that need to be discussed when looking into classes of the Java Language.</p>
<h2>Constructors:</h2>
<p>When discussing about classes, one of the most important sub topic would be constructors. Every class has a constructor. If we do not explicitly write a constructor for a class the Java compiler builds a default constructor for that class.</p>
<p>Each time a new object is created, at least one constructor will be invoked. The main rule of constructors is that they should have the same name as the class. A class can have more than one constructor.</p>
<p>Example of a constructor is given below:</p>
<textarea rows="8" cols="90" readonly style="resize: none; background-color: #FDEEF4">
public class Puppy{
   public Puppy(){
   }

   public Puppy(String name){
      // This constructor has one parameter, <i>name</i>.
   }
}
</textarea>


<p></p>
<p>Java also supports <a href="/java/java_using_singleton.htm">Singleton Classes</a> where you would be able to create only one instance of a class.</p>
<p><b>Note: </b>We have two different types of constructors we are going to discuss constructors in detail in coming chapters.</p>
<h2>Creating an Object:</h2>
<p>As mentioned previously, a class provides the blueprints for objects. So basically an object is created from a class. In Java, the new key word is used to create new objects. </p>
<p>There are three steps when creating an object from a class:</p>
<ul class="list">
<li><p><b>Declaration: </b>A variable declaration with a variable name with an object type.</p></li>
<li><p><b>Instantiation: </b>The 'new' key word is used to create the object.</p></li>
<li><p><b>Initialization: </b>The 'new' keyword is followed by a call to a constructor. This call initializes the new object.</p></li>
</ul>
<p>Example of creating an object is given below:</p>
<pre class="prettyprint notranslate tryit">
public class Puppy{

   public Puppy(String name){
      // This constructor has one parameter, <i>name</i>.
      System.out.println("Passed Name is :" + name ); 
   }
   
   public static void main(String []args){
      // Following statement would create an object myPuppy
      Puppy myPuppy = new Puppy( "tommy" );
   }
}
</pre>
<p>If we compile and run the above program, then it would produce the following result:</p>
<pre class="prettyprint notranslate">
Passed Name is :tommy
</pre>
<h2>Accessing Instance Variables and Methods:</h2>
<p>Instance variables and methods are accessed via created objects. To access an instance variable the fully qualified path should be as follows:</p>
<pre class="prettyprint notranslate">
/* First create an object */
ObjectReference = new Constructor();

/* Now call a variable as follows */
ObjectReference.variableName;

/* Now you can call a class method as follows */
ObjectReference.MethodName();
</pre>
<h2>Example:</h2>
<p>This example explains how to access instance variables and methods of a class:</p>
<pre class="prettyprint notranslate tryit">
public class Puppy{
   
   int puppyAge;

   public Puppy(String name){
      // This constructor has one parameter, <i>name</i>.
      System.out.println("Name chosen is :" + name ); 
   }
   
   public void setAge( int age ){
       puppyAge = age;
   }

   public int getAge( ){
       System.out.println("Puppy's age is :" + puppyAge ); 
       return puppyAge;
   }
   
   public static void main(String []args){
      /* Object creation */
      Puppy myPuppy = new Puppy( "tommy" );

      /* Call class method to set puppy's age */
      myPuppy.setAge( 2 );

      /* Call another class method to get puppy's age */
      myPuppy.getAge( );

      /* You can access instance variable as follows as well */
      System.out.println("Variable Value :" + myPuppy.puppyAge ); 
   }
}
</pre>
<p>If we compile and run the above program, then it would produce the following result:</p>
<pre class="prettyprint notranslate">
Name chosen is :tommy
Puppy's age is :2
Variable Value :2
</pre>
<h2>Source file declaration rules:</h2>
<p>As the last part of this section let's now look into the source file declaration rules. These rules are essential when declaring classes, <i>import</i> statements and <i>package</i> statements in a source file.</p>
<ul class="list">
<li><p>There can be only one public class per source file.</p></li>
<li><p>A source file can have multiple non public classes.</p></li>
<li><p>The public class name should be the name of the source file as well which should be appended by <b>.java</b> at the end. For example: the class name is <i>public class Employee{}</i> then the source file should be as Employee.java.</p></li>
<li><p>If the class is defined inside a package, then the package statement should be the first statement in the source file.</p></li>
<li><p>If import statements are present then they must be written between the package statement and the class declaration. If there are no package statements then the import statement should be the first line in the source file. </p></li>
<li><p>Import and package statements will imply to all the classes present in the source file. It is not possible to declare different import and/or package statements to different classes in the source file.</p></li>
</ul>
<p>Classes have several access levels and there are different types of classes; abstract classes, final classes, etc. we will be explaining about all these in the access modifiers chapter.</p>
<p>Apart from the above mentioned types of classes, Java also has some special classes called Inner classes and Anonymous classes.</p>
<h2>Java Package:</h2>
<p>In simple, it is a way of categorizing the classes and interfaces. When developing applications in Java,  hundreds of classes and interfaces will be written, therefore categorizing these classes is a must as well as makes life much easier.</p>
<h2>Import statements:</h2>
<p>In Java if a fully qualified name, which includes the package and the class name, is given then the compiler can easily locate the source code or classes. Import statement is a way of giving the proper location for the compiler to find that particular class.</p>
<p>For example, the following line would ask compiler to load all the classes available in directory java_installation/java/io :</p>
<pre class="prettyprint notranslate">
import java.io.*;
</pre>
<h2>A Simple Case Study</h2>
<p>For our case study, we will be creating two classes. They are Employee and EmployeeTest.</p>
<p>First open notepad and add the following code. Remember this is the Employee class and the class is a public class. Now, save this source file with the name Employee.java.</p>
<p>The Employee class has four instance variables name, age, designation and salary. The class has one explicitly defined constructor, which takes a parameter.</p>
<pre class="prettyprint notranslate" id="employee">
import java.io.*;

public class Employee{

   String name;
   int age;
   String designation;
   double salary;
  
   // This is the constructor of the class Employee
   public Employee(String name){
      this.name = name;
   }
   // Assign the age of the Employee  to the variable age.
   public void empAge(int empAge){
      age =  empAge;
   }
   /* Assign the designation to the variable designation.*/
   public void empDesignation(String empDesig){
      designation = empDesig;
   }
   /* Assign the salary to the variable salary.*/
   public void empSalary(double empSalary){
      salary = empSalary;
   }
   /* Print the Employee details */
   public void printEmployee(){
      System.out.println("Name:"+ name );
      System.out.println("Age:" + age );
      System.out.println("Designation:" + designation );
      System.out.println("Salary:" + salary);
   }
}
</pre>
<p>As mentioned previously in this tutorial, processing starts from the main method. Therefore in-order for us to run this Employee class there should be main method and objects should be created. We will be creating a separate class for these tasks.</p>
<p>Given below is the <i>EmployeeTest</i> class, which creates two instances of the class Employee and invokes the methods for each object to assign values for each variable.</p>
<p>Save the following code in EmployeeTest.java file</p>
<pre class="prettyprint notranslate tryit" title="employee">
import java.io.*;

public class EmployeeTest{

   public static void main(String args[]){
      /* Create two objects using constructor */
      Employee empOne = new Employee("James Smith");
      Employee empTwo = new Employee("Mary Anne");

      // Invoking methods for each object created
      empOne.empAge(26);
      empOne.empDesignation("Senior Software Engineer");
      empOne.empSalary(1000);
      empOne.printEmployee();

      empTwo.empAge(21);
      empTwo.empDesignation("Software Engineer");
      empTwo.empSalary(500);
      empTwo.printEmployee();
   }
}
</pre>
<p>Now, compile both the classes and then run <i>EmployeeTest</i> to see the result as follows:</p>
<pre class="prettyprint notranslate">
C:\&gt; javac Employee.java
C:\&gt; javac EmployeeTest.java
C:\&gt; java EmployeeTest
Name:James Smith
Age:26
Designation:Senior Software Engineer
Salary:1000.0
Name:Mary Anne
Age:21
Designation:Software Engineer
Salary:500.0
</pre>
</div>
</div>

<br>
<center><img src="images/line2.png" width="700" height="10"></center>
<br>
<!--page five-->
<div data-role="page" id="five">
<div style="background-color:white; border-radius: 15px; width: 800px; margin-right: auto; margin-left: auto; color:black; padding:70px; " >
<center><h1><u>BASIC DATATYPES</u></h1></center>

<p>Variables are nothing but reserved memory locations to store values. This means that when you create a variable you reserve some space in memory.</p>
<p>Based on the data type of a variable, the operating system allocates memory and decides what can be stored in the reserved memory. Therefore, by assigning different data types to variables, you can store integers, decimals, or characters in these variables.</p>
<p>There are two data types available in Java:</p>
<ul class="list">
<li><p>Primitive Data Types</p></li>
<li><p>Reference/Object Data Types</p></li>
</ul>
<h2>Primitive Data Types:</h2>
<p>There are eight primitive data types supported by Java. Primitive data types are predefined by the language and named by a keyword. Let us now look into detail about the eight primitive data types.</p>
<h2>byte:</h2>
<ul class="list">
<li><p>Byte data type is an 8-bit signed two's complement integer.</p></li>
<li><p>Minimum value is -128 (-2^7)</p></li>
<li><p>Maximum value is 127 (inclusive)(2^7 -1)</p></li>
<li><p>Default value is 0</p></li>
<li><p>Byte data type is used to save space in large arrays, mainly in place of integers, since a byte is four times smaller than an int.</p></li>
<li><p>Example:  byte a = 100 , byte b = -50</p></li>
</ul>
<h2>short:</h2>
<ul class="list">
<li><p>Short data type is a 16-bit signed two's complement integer. </p></li>
<li><p>Minimum value is -32,768 (-2^15)</p></li>
<li><p>Maximum value is 32,767 (inclusive) (2^15 -1)</p></li>
<li><p>Short data type can also be used to save memory as byte data type. A short is 2 times smaller than an int</p></li>
<li><p>Default value is 0.</p></li>
<li><p>Example: short  s = 10000, short r = -20000</p></li>
</ul>
<h2>int:</h2>
<ul class="list">
<li><p>Int data type is a 32-bit signed two's complement integer.</p></li>
<li><p>Minimum value is - 2,147,483,648.(-2^31)</p></li>
<li><p>Maximum value is 2,147,483,647(inclusive).(2^31 -1)</p></li>
<li><p>Int is generally used as the default data type for integral values unless there is a concern about memory.</p></li>
<li><p>The default value is 0.</p></li>
<li><p>Example: int a = 100000, int b = -200000</p></li>
</ul>
<h2>long:</h2>
<ul class="list">
<li><p>Long data type is a 64-bit signed two's complement integer. </p></li>
<li><p>Minimum value is -9,223,372,036,854,775,808.(-2^63)</p></li>
<li><p>Maximum value is 9,223,372,036,854,775,807 (inclusive). (2^63 -1)</p></li>
<li><p>This type is used when a wider range than int is needed.</p></li>
<li><p>Default value is 0L.</p></li>
<li><p>Example: long a = 100000L, long b = -200000L</p></li>
</ul>
<h2>float:</h2>
<ul class="list">
<li><p>Float data type is a single-precision 32-bit IEEE 754 floating point. </p></li>
<li><p>Float is mainly used to save memory in large arrays of floating point numbers.</p></li>
<li><p>Default value is 0.0f.</p></li>
<li><p>Float data type is never used for precise values such as currency. </p></li>
<li><p>Example: float f1 = 234.5f</p></li>
</ul>
<h2>double:</h2>
<ul class="list">
<li><p>double data type is a double-precision 64-bit IEEE 754 floating point.</p></li> 
<li><p>This data type is generally used as the default data type for decimal values, generally the default choice. </p></li>
<li><p>Double data type should never be used for precise values such as currency.</p></li>
<li><p>Default value is 0.0d.</p></li>
<li><p>Example: double d1 = 123.4</p></li>
</ul>
<h2>boolean:</h2>
<ul class="list">
<li><p>boolean data type represents one bit of information.</p></li>
<li><p>There are only two possible values: true and false.</p></li>
<li><p>This data type is used for simple flags that track true/false conditions.</p></li>
<li><p>Default value is false.</p></li>
<li><p>Example: boolean one = true</p></li>
</ul>
<h2>char:</h2>
<ul class="list">
<li><p>char data type is a single 16-bit Unicode character. </p></li>
<li><p>Minimum value is '\u0000' (or 0).</p></li>
<li><p>Maximum value is  '\uffff' (or 65,535 inclusive).</p></li>
<li><p>Char data type is used to store any character.</p></li> 
<li><p>Example: char letterA ='A'</p></li>
</ul>
<h2>Reference Data Types:</h2>
<ul class="list">
<li><p>Reference variables are created using defined constructors of the classes. They are used to access objects. These variables are declared to be of a specific type that cannot be changed. For example, Employee, Puppy etc.</p></li> 
<li><p>Class objects, and various type of array variables come under reference data type.</p></li>
<li><p>Default value of any reference variable is null.</p></li> 
<li><p>A reference variable can be used to refer to any object of the declared type or any compatible type.</p></li> 
<li><p>Example: Animal animal = new Animal("giraffe");</p></li> 
</ul>
<h2>Java Literals:</h2>
<p>A literal is a source code representation of a fixed value. They are represented directly in the code without any computation.</p>
<p>Literals can be assigned to any primitive type variable. For example:</p>
<pre class="prettyprint notranslate">
byte a = 68;
char a = 'A'
</pre>
<p>byte, int, long, and short can be expressed in decimal(base 10), hexadecimal(base 16) or octal(base 8) number systems as well.</p>
<p>Prefix 0 is used to indicate octal and prefix 0x indicates hexadecimal when using these number systems for literals. For example:</p>
<pre class="prettyprint notranslate">
int decimal = 100;
int octal = 0144;
int hexa =  0x64;
</pre>
<p>String literals in Java are specified like they are in most other languages by enclosing a sequence of characters between a pair of double quotes. Examples of string literals are:</p>
<pre class="prettyprint notranslate">
"Hello World"
"two\nlines"
"\"This is in quotes\""
</pre>
<p>String and char types of literals can contain any Unicode characters. For example:</p>
<pre class="prettyprint notranslate">
char a = '\u0001';
String a = "\u0001";
</pre>
<p>Java language supports few special escape sequences for String and char literals as well. They are:</p>
<table class="table table-bordered">
<tr>
<th>Notation</th>
<th>Character represented</th>
</tr>
<tr>
<td>\n</td>
<td>Newline (0x0a)</td>
</tr>
<tr>
<td>\r</td>
<td>Carriage return (0x0d)</td>
</tr>
<tr>
<td>\f</td>
<td>Formfeed (0x0c)</td>
</tr>
<tr>
<td>\b</td>
<td>Backspace (0x08)</td>
</tr>
<tr>
<td>\s</td>
<td>Space (0x20)</td>
</tr>
<tr>
<td>\t</td>
<td>tab</td>
</tr>
<tr>
<td>\" </td>
<td>Double quote</td>
</tr>
<tr>
<td>\'</td>
<td>Single quote</td>
</tr>
<tr>
<td>\\</td>
<td>backslash</td>
</tr>
<tr>
<td>\ddd</td>
<td>Octal character (ddd)</td>
</tr>
<tr>
<td>\uxxxx</td>
<td>Hexadecimal UNICODE character (xxxx)</td>
</tr>
</table>
</div>
</div>

<br>
<center><img src="images/line2.png" width="700" height="10"></center>
<br>
<!--page six-->
<div data-role="page" id="six">
<div style="background-color:white; border-radius: 15px; width: 800px; margin-right: auto; margin-left: auto; color:black; padding:70px; " >
<center><h1><u>VARIABLE TYPES</u></h1></center>

<p>A variable provides us with named storage that our programs can manipulate. Each variable in Java has a specific type, which determines the size and layout of the variable's memory; the range of values that can be stored within that memory; and the set of operations that can be applied to the variable.</p>
<p>You must declare all variables before they can be used. The basic form of a variable declaration is shown here:</p>
<pre class="prettyprint notranslate">
data type variable [ = value][, variable [= value] ...] ;
</pre>
<p>Here <i>data type</i> is one of Java's datatypes and <i>variable</i> is the name of the variable. To declare more than one variable of the specified type, you can use a comma-separated list.</p>
<p>Following are valid examples of variable declaration and initialization in Java:</p>
<pre class="prettyprint notranslate">
int a, b, c;         // Declares three ints, a, b, and c.
int a = 10, b = 10;  // Example of initialization
byte B = 22;         // initializes a byte type variable B.
double pi = 3.14159; // declares and assigns a value of PI.
char a = 'a';        // the char variable a iis initialized with value 'a'
</pre>
<p>This chapter will explain various variable types available in Java Language. There are three kinds of variables in Java:</p>
<ul class="list">
<li><p>Local variables </p></li>
<li><p>Instance variables </p></li>
<li><p>Class/static variables</p></li>
</ul>
<h2>Local variables:</h2>
<ul class="list">
<li><p>Local variables are declared in methods, constructors, or blocks.</p></li>
<li><p>Local variables are created when the method, constructor or block is entered and the variable will be destroyed once it exits the method, constructor or block.</p></li>
<li><p>Access modifiers cannot be used for local variables.</p></li>
<li><p>Local variables are visible only within the declared method, constructor or block.</p></li>
<li><p>Local variables are implemented at stack level internally.</p></li>
<li><p>There is no default value for local variables so local variables should be declared and an initial value should be assigned before the first use.</p></li>
</ul>
<h2>Example:</h2>
<p>Here, <i>age</i> is a local variable. This is defined inside <i>pupAge()</i> method and its scope is limited to this method only.</p>
<pre class="prettyprint notranslate tryit">
public class Test{ 
   public void pupAge(){
      int age = 0;
      age = age + 7;
      System.out.println("Puppy age is : " + age);
   }
   
   public static void main(String args[]){
      Test test = new Test();
      test.pupAge();
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
Puppy age is: 7
</pre>
<h2>Example:</h2>
<p>Following example uses <i>age</i> without initializing it, so it would give an error at the time of compilation.</p>
<pre class="prettyprint notranslate tryit">
public class Test{ 
   public void pupAge(){
      int age;
      age = age + 7;
      System.out.println("Puppy age is : " + age);
   }
   
   public static void main(String args[]){
      Test test = new Test();
      test.pupAge();
   }
}
</pre>
<p>This would produce the following error while compiling it:</p>
<pre class="prettyprint notranslate">
Test.java:4:variable number might not have been initialized
age = age + 7;
         ^
1 error
</pre>
<h2>Instance variables:</h2>
<ul class="list">
<li><p>Instance variables are declared in a class, but outside a method, constructor or any block.</p></li>
<li><p>When a space is allocated for an object in the heap, a slot for each instance variable value is created.</p></li>
<li><p>Instance variables are created when an object is created with the use of the keyword 'new' and destroyed when the object is destroyed.</p></li>
<li><p>Instance variables hold values that must be referenced by more than one method, constructor or block, or essential parts of an object's state that must be present throughout the class.</p></li>
<li><p>Instance variables can be declared in class level before or after use.</p></li>
<li><p>Access modifiers can be given for instance variables.</p></li>
<li><p>The instance variables are visible for all methods, constructors and block in the class. Normally, it is recommended to make these variables private (access level). However visibility for subclasses can be given for these variables with the use of access modifiers.</p></li>
<li><p>Instance variables have default values. For numbers the default value is 0, for Booleans it is false and for object references it is null. Values can be assigned during the declaration or within the constructor.</p></li>
<li><p>Instance variables can be accessed directly by calling the variable name inside the class. However within static methods and different class ( when instance variables are given accessibility) should be called using the fully qualified name . <i>ObjectReference.VariableName</i>.</p></li>
</ul>
<h2>Example:</h2>
<pre class="prettyprint notranslate tryit">
import java.io.*;

public class Employee{
   // this instance variable is visible for any child class.
   public String name;
   
   // salary  variable is visible in Employee class only.
   private double salary;
   
   // The name variable is assigned in the constructor. 
   public Employee (String empName){
      name = empName;
   }

   // The salary variable is assigned a value.
   public void setSalary(double empSal){
      salary = empSal;
   }
   
   // This method prints the employee details.
   public void printEmp(){
      System.out.println("name  : " + name );
      System.out.println("salary :" + salary);
   }

   public static void main(String args[]){
      Employee empOne = new Employee("Ransika");
      empOne.setSalary(1000);
      empOne.printEmp();
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
name  : Ransika
salary :1000.0
</pre>
<h2>Class/static variables:</h2>
<ul class="list">
<li><p>Class variables also known as static variables are declared with the <i>static</i> keyword in a class, but outside a method, constructor or a block. </p></li>
<li><p>There would only be one copy of each class variable per class, regardless of how many objects are created from it.</p></li>
<li><p>Static variables are rarely used other than being declared as constants. Constants are variables that are declared as public/private, final and static. Constant variables never change from their initial value.</p></li>
<li><p>Static variables are stored in static memory. It is rare to use static variables other than declared final and used as either public or private constants.</p></li>
<li><p>Static variables are created when the program starts and destroyed when the program stops.</p></li>
<li><p>Visibility is similar to instance variables. However, most static variables are declared public since they must be available for users of the class.</p></li>
<li><p>Default values are same as instance variables. For numbers, the default value is 0; for Booleans, it is false; and for object references, it is null. Values can be assigned during the declaration or within the constructor. Additionally values can be assigned in special static initializer blocks.</p></li>
<li><p>Static variables can be accessed by calling with the class name <i>ClassName.VariableName</i>.</p></li>
<li><p>When declaring class variables as public static final, then variables names (constants) are all in upper case. If the static variables are not public and final the naming syntax is the same as instance and local variables.</p></li>
</ul>
<h2>Example:</h2>
<pre class="prettyprint notranslate tryit">
import java.io.*;

public class Employee{
   // salary  variable is a private static variable
   private static double salary;

   // DEPARTMENT is a constant
   public static final String DEPARTMENT = "Development ";

   public static void main(String args[]){
      salary = 1000;
      System.out.println(DEPARTMENT + "average salary:" + salary);
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
Development average salary:1000
</pre>
<p><b>Note:</b> If the variables are access from an outside class the constant should be accessed as Employee.DEPARTMENT</p>
</div>
</div>

<br>
<center><img src="images/line2.png" width="700" height="10"></center>
<br>
<!--page seven-->
<div data-role="page" id="seven">
<div style="background-color:white; border-radius: 15px; width: 800px; margin-right: auto; margin-left: auto; color:black; padding:70px; " >
<center><h1><u>MODIFIER TYPES</u></h1></center>

<p>To use a modifier, you include its keyword in the definition of a class, method, or variable. The modifier precedes the rest of the statement, as in the following examples (Italic ones) &minus;</p>
<pre class="prettyprint notranslate">
<i>public</i> class className {
   // ...
}
<i>private</i> boolean myFlag;
<i>static final</i> double weeks = 9.5;
<i>protected static final</i> int BOXWIDTH = 42;
<i>public static</i> void main(String[] arguments) {
   // body of method
}
</pre>
<h2>Access Control Modifiers:</h2>
<p>Java provides a number of access modifiers to set access levels for classes, variables, methods and constructors. The four access levels are:</p>
<ul class="list">
<li><p>Visible to the package, the default. No modifiers are needed.</p></li>
<li><p>Visible to the class only (private).</p></li>
<li><p>Visible to the world (public).</p></li>
<li><p>Visible to the package and all subclasses (protected).</p></li>
</ul>
<h2>Non Access Modifiers:</h2>
<p>Java provides a number of non-access modifiers to achieve many other functionality.</p> 
<ul class="list">
<li><p>The <i>static</i> modifier for creating class methods and variables</p></li>
<li><p>The <i>final</i> modifier for finalizing the implementations of classes, methods, and variables.</p></li>
<li><p>The <i>abstract</i> modifier for creating abstract classes and methods.</p></li>
<li><p>The <i>synchronized</i> and <i>volatile</i> modifiers, which are used for threads.</p></li>
</ul>
</div>
</div>

<br>
<center><img src="images/line2.png" width="700" height="10"></center>
<br>
<!--page eight-->
<div data-role="page" id="eight">
<div style="background-color:white; border-radius: 15px; width: 800px; margin-right: auto; margin-left: auto; color:black; padding:70px; " >
<center><h1><u>BASIC OPERATORS</u></h1></center>

<p>Java provides a rich set of operators to manipulate variables. We can divide all the Java operators into the following groups:</p>
<ul class="list">
<li><p>Arithmetic Operators</p></li>
<li><p>Relational Operators</p></li>
<li><p>Bitwise Operators</p></li>
<li><p>Logical Operators</p></li>
<li><p>Assignment Operators</p></li>
<li><p>Misc Operators</p></li>
</ul>
<h2>The Arithmetic Operators:</h2>
<p>Arithmetic operators are used in mathematical expressions in the same way that they are used in algebra. The following table lists the arithmetic operators:</p>
<p>Assume integer variable A holds 10 and variable B holds 20, then:</p>
<p><a href="/java/java_arithmatic_operators_examples.htm">Show Examples</a></p>
<table class="table table-bordered">
<tbody><tr>
<th>SR.NO</th>
<th>Operator and Example</th>

</tr>
<tr>
<td>1</td>
<td><b>+ ( Addition )</b>
<p>Adds values on either side of the operator</p>
<p><b>Example:</b> A + B will give 30</p>
</td></tr>

<tr>
<td>2</td>
<td><b>- ( Subtraction ) </b>
<p> Subtracts right hand operand from left hand operand</p>
<p><b>Example:</b> A - B will give -10</p>
</td>
</tr>

<tr>
<td>3</td>
<td><b>* ( Multiplication )</b>
<p>Multiplies values on either side of the operator</p>
<p><b>Example:</b> A * B will give 200</p></td>
</tr>
<tr>

<td>4</td>
<td><b>/ (Division)</b>
<p>Divides left hand operand by right hand operand</p>
<p><b>Example:</b> B / A will give 2</p></td>
</tr>

<tr>
<td>5</td>
<td><b>% (Modulus)</b>
<p>Divides left hand operand by right hand operand and returns remainder</p>
<p><b>Example:</b> B % A will give 0</p></td>
</tr>

<tr>
<td>6</td>
<td><b>++ (Increment)</b>
<p>Increases the value of operand by 1</p>
<b>Example:</b> B++ gives 21</td>
</tr>

<tr>
<td>7</td>
<td><b>-- ( Decrement )</b>
<p> Decreases the value of operand by 1</p>
<b>Example:</b> B-- gives 19</td>
</tr>

</tbody>
</table>
<h2>The Relational Operators:</h2>
<p>There are following relational operators supported by Java language</p>
<p>Assume variable A holds 10 and variable B holds 20, then:</p>
<p><a href="/java/java_relational_operators_examples.htm">Show Examples</a></p>
<table class="table table-bordered">
<tr>
<th>SR.NO</th>
<th>Operator and Description</th>
</tr>
<tr>
<td>1</td>
<td><b>== (equal to) </b> <p>Checks if the values of two operands are equal or not, if yes then condition becomes true.</p>
<b>Example:</b> (A == B) is not true. </td>
</tr>
<tr>
<td>2</td>
<td><b>!= (not equal to)</b><p> Checks if the values of two operands are equal or not, if values are not equal then condition becomes true.<p>
<b>Example:</b> (A != B) is true.</td>
</tr>
<tr>
<td>3</td>
<td><b>&gt; (greater than)</b>
<p>Checks if the value of left  operand is greater than the value of right operand, if yes then condition becomes true.</p>
<b>Example:</b> (A &gt; B) is not true. </td>
</tr>
<tr>
<td>4</td>
<td><b>&lt; (less than)</b> 
<p>Checks if the value of left  operand is less than the value of right operand, if yes then condition becomes true.</p>
<b>Example:</b> (A &lt; B) is true. </td>
</tr>
<tr>
<td>5</td>
<td><b>&gt;= (greater than or equal to)</b>
<p> Checks if the value of left  operand is greater than or equal to the value of right operand, if yes then condition becomes true.</p>
<b>Example</b> (A &gt;= B) is not true. </td>
</tr>
<tr>
<td>6</td>
<td><b>&lt;= (less than or equal to)</b> 
<p>Checks if the value of left  operand is less than or equal to the value of right operand, if yes then condition becomes true.</p>
<b>example</b>(A &lt;= B) is true. </td>
</tr>
</table>
<h2>The Bitwise Operators:</h2>
<p>Java defines several bitwise operators, which can be applied to the integer types, long, int, short, char, and byte.</p>
<p>Bitwise operator works on bits and performs bit-by-bit operation. Assume if a = 60; and b = 13; now in binary format they will be as follows:</p>
<p>a = 0011 1100</p>
<p>b = 0000 1101</p>
<p>-----------------</p>
<p>a&amp;b = 0000 1100</p>
<p>a|b = 0011 1101</p>
<p>a^b = 0011 0001</p>
<p>~a&nbsp; = 1100 0011</p>
<p>The following table lists the bitwise operators:</p>
<p>Assume integer variable A holds 60 and variable B holds 13 then:</p>
<p><a href="/java/java_bitwise_operators_examples.htm">Show Examples</a></p>
<table class="table table-bordered">
<tr>
<th>SR.NO</th>
<th>Operator and Description</th>
</tr>
<tr>
<td>1</td>
<td><b>&amp; (bitwise and)</b> 
<p>Binary AND Operator copies a bit to the result if it exists in both operands.</p>
<b>Example:</b> (A &amp; B) will give 12 which is 0000 1100</td>
</tr>
<tr>
<td>2</td>
<td><b>| (bitwise or)</b> 
<p>Binary OR Operator copies a bit if it exists in either operand.</p>
<b>Example:</b> (A | B) will give 61 which is 0011 1101</td>
</tr>
<tr>
<td>3</td>
<td><b>^ (bitwise XOR) </b>
<p>Binary XOR Operator copies the bit if it is set in one operand but not both.</p>
<b>Example:</b> (A ^ B) will give 49 which is 0011 0001</td>
</tr>
<tr>
<td>4</td>
<td><b>~ (bitwise compliment) </b>
<p>Binary Ones Complement Operator is unary and has the effect of 'flipping' bits.</p>
<b>Example:</b> (~A ) will give -61 which is 1100 0011 in 2's complement form due to a signed binary number.</td>
</tr>
<tr>
<td>5</td>
<td><b>&lt;&lt; (left shift)</b>
<p> Binary Left Shift Operator. The left operands value is moved left by the number of bits specified by the right operand</p>
<b>Example:</b> A &lt;&lt; 2 will give 240 which is 1111 0000</td>
</tr>
<tr>
<td>6</td>
<td><b>&gt;&gt; (right shift)</b>
<p> Binary Right Shift Operator. The left operands value is moved right by the number of bits specified by the right operand.</p> 
<b>Example:</b> A &gt;&gt; 2 will give 15 which is 1111</td>
</tr>
<tr>
<td>7</td>
<td><b>&gt;&gt;&gt; (zero fill right shift)</b>
<p>Shift right zero fill operator. The left operands value is moved right by the number of bits specified by the right operand and shifted values are filled up with zeros.</p>
<b>Example:</b> A &gt;&gt;&gt;2 will give 15 which is 0000 1111</td>
</tr>
</table>
<h2>The Logical Operators:</h2>
<p>The following table lists the logical operators:</p>
<p>Assume Boolean variables A holds true and variable B holds false, then:</p>
<p><a href="/java/java_logical_operators_examples.htm">Show Examples</a></p>
<table class="table table-bordered">
<tr>
<th>Operator</th><th>Description</th>
</tr>
<tr>
<td>1</td>
<td><b>&amp;&amp; (logical and)</b> 
<p>Called Logical AND  operator. If both the operands are non-zero, then the condition becomes true.</p>
<b>Example</b> (A &amp;&amp; B) is false. </td>
</tr>
<tr>
<td>2</td>
<td><b>|| (logical or)</b>
<p>Called Logical OR Operator. If any of the two operands are non-zero, then the condition becomes true.</p>
<b>Example</b> (A || B) is true.</td>
</tr>
<tr>
<td>3</td>
<td><b>! (logical not)</b>
<p>Called Logical NOT Operator.  Use to reverses the logical state of its operand. If a condition is true then Logical NOT operator will make false.</p>
<b>Example</b> !(A &amp;&amp; B) is true. </td>
</tr>
</table>
<h2>The Assignment Operators:</h2>
<p>There are following assignment operators supported by Java language:</p>
<p><a href="/java/java_assignment_operators_examples.htm">Show Examples</a></p>
<table class="table table-bordered">
<tr>
<th>SR.NO</th>
<th>Operator and Description</th>
</tr>
<tr>
<td>1</td>
<td><b>= </b>
<p>Simple assignment operator, Assigns values from right side operands to left side operand.</p>
<b>Example:</b> C = A + B will assign value of A + B into C</td>
</tr>
<tr>
<td>2</td>
<td><b>+=</b>
<p>Add AND assignment operator, It adds right operand to the left operand and assign the result to left operand.</p>
<b>Example:</b> C += A is equivalent to C = C + A</td>
</tr>
<tr>
<td>3</td>
<td><b>-=</b>
<p>Subtract AND assignment operator, It subtracts right operand from the left operand and assign the result to left operand.</p>
<b>Example:</b>C -= A is equivalent to C = C - A</td>
</tr>
<tr>
<td>4</td>
<td><b>*=</b>
<p>Multiply AND assignment operator, It multiplies right operand with the left operand and assign the result to left operand.</p>
<b>Example:</b> C *= A is equivalent to C = C * A</td>
</tr>
<tr>
<td>5</td>
<td><b>/=</b>
<p>Divide AND assignment operator, It divides left operand with the right operand and assign the result to left operand</p>
<b>Example</b>C /= A is equivalent to C = C / A</td>
</tr>
<tr>
<td>6</td>
<td><b>%=</b>
<p>Modulus AND assignment operator, It takes modulus using two operands and assign the result to  left operand.</p>
<b>Example:</b> C %= A is equivalent to C = C % A</td>
</tr>
<tr>
<td>7</td>
<td><b>&lt;&lt;=</b>
<p>Left shift AND assignment operator.</p> 
<b>Example</b>C &lt;&lt;= 2 is same as  C = C &lt;&lt; 2</td>
</tr>
<tr>
<td>8</td>
<td><b>&gt;&gt;=</b>
<p>Right shift AND assignment operator</p>
<b>Example</b> C &gt;&gt;= 2 is same as  C = C &gt;&gt; 2</td>
</tr>
<tr>
<td>9</td>
<td><b>&amp;=</b>
<p>Bitwise AND assignment operator.</p>
<b>Example:</b> C &amp;= 2 is same as  C = C &amp; 2</td>
</tr>
<tr>
<td>10</td>
<td><b>^=</b>
<p>bitwise exclusive OR and assignment operator.</p>
<b>Example:</b> C ^= 2 is same as  C = C ^ 2</td>
</tr>
<tr>
<td>11</td>
<td><b>|=</b>
<p>bitwise inclusive OR and assignment operator.</p>
<b>Example:</b> C |= 2 is same as  C = C | 2</td>
</tr>
</table>
<h2>Miscellaneous Operators</h2>
<p>There are few other operators supported by Java Language.</p>
<h2>Conditional Operator ( ? : )</h2>
<p>Conditional operator is also known as the ternary operator. This operator consists of three operands and is used to evaluate Boolean expressions. The goal of the operator is to decide which value should be assigned to the variable. The operator is written as:</p>
<pre class="prettyprint notranslate">
variable x = (expression) ? value if true : value if false
</pre>
<p>Following is the example:</p>
<pre class="prettyprint notranslate tryit">
public class Test {

   public static void main(String args[]){
      int a, b;
      a = 10;
      b = (a == 1) ? 20: 30;
      System.out.println( "Value of b is : " +  b );

      b = (a == 10) ? 20: 30;
      System.out.println( "Value of b is : " + b );
   }
}
</pre>
<p>This would produce the following result &minus;</p>
<pre class="result notranslate">
Value of b is : 30
Value of b is : 20
</pre>
<h2>instance of Operator:</h2>
<p>This operator is used only for object reference variables. The operator checks whether the object is of a particular type (class type or interface type).  instanceof operator is written as:</p>
<pre class="prettyprint notranslate">
( Object reference variable ) instanceof  (class/interface type)
</pre>
<p>If the object referred by the variable on the left side of the operator passes the IS-A check for the class/interface type on the right side, then the result will be true. Following is the example:</p>
<pre class="prettyprint notranslate tryit">
public class Test {

   public static void main(String args[]){
      String name = "James";
      // following will return true since name is type of String
      boolean result = name instanceof String;  
      System.out.println( result );
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
true
</pre>
<p>This operator will still return true if the object being compared is the assignment compatible with the type on the right. Following is one more example:</p>
<pre class="prettyprint notranslate tryit">
class Vehicle {}

public class Car extends Vehicle {
   public static void main(String args[]){
      Vehicle a = new Car();
      boolean result =  a instanceof Car;
      System.out.println( result );
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
true
</pre>
<h2>Precedence of Java Operators:</h2>
<p>Operator precedence determines the grouping of terms in an expression. This affects how an expression is evaluated. Certain operators have higher precedence than others; for example, the multiplication operator has higher precedence than the addition operator:</p>
<p>For example, x = 7 + 3 * 2; here  x is assigned 13, not 20 because operator * has higher precedence than +, so it first gets multiplied with 3*2 and then adds into 7.</p>
<p>Here, operators with the highest precedence appear at the top of the table, those with the lowest appear at the bottom. Within an expression, higher precedence operators will be evaluated first.</p>
<table class="table table-bordered">
<tr>
<th>Category&nbsp;</th> 
<th>Operator&nbsp;</th>
<th style="width:20%;">Associativity&nbsp;</th> 
</tr> 
<tr> 
<td>Postfix&nbsp;</td>
<td>() [] . (dot operator)</td> 
<td>Left toright&nbsp;</td> 
</tr> 
<tr> 
<td>Unary&nbsp;</td> 
<td>++ - - !  ~ </td> 
<td>Right to left&nbsp;</td>
</tr> 
<tr> 
<td>Multiplicative &nbsp;</td> 
<td>*  /  %&nbsp;</td>
<td>Left to right&nbsp;</td> 
</tr> 
<tr> 
<td>Additive &nbsp;</td>
<td>+  -&nbsp;</td> 
<td>Left to right&nbsp;</td> 
</tr>
<tr> 
<td>Shift &nbsp;</td> 
<td>&gt;&gt; &gt;&gt;&gt; &lt;&lt; &nbsp;</td> 
<td>Left to right&nbsp;</td> 
</tr> 
<tr> 
<td>Relational &nbsp;</td>
<td>&gt; &gt;=  &lt; &lt;= &nbsp;</td> 
<td>Left to right&nbsp;</td> 
</tr>
<tr> <td>Equality &nbsp;</td> 
<td>==  !=&nbsp;</td> 
<td>Left to right&nbsp;</td> 
</tr> 
<tr> 
<td>Bitwise AND&nbsp;</td>
<td>&amp;&nbsp;</td> 
<td>Left to right&nbsp;</td> 
</tr> 
<tr> 
<td>Bitwise XOR&nbsp;</td> 
<td>^&nbsp;</td> 
<td>Left to right&nbsp;</td>
</tr> 
<tr> 
<td>Bitwise OR&nbsp;</td> 
<td>|&nbsp;</td> 
<td>Left to right&nbsp;</td> 
</tr> 
<tr> 
<td>Logical AND&nbsp;</td>
<td>&amp;&amp;&nbsp;</td> 
<td>Left to right&nbsp;</td> 
</tr> 
<tr>
<td>Logical OR&nbsp;</td> 
<td>||&nbsp;</td> 
<td>Left to right&nbsp;</td> 
</tr> 
<tr> 
<td>Conditional&nbsp;</td>
<td>?:&nbsp;</td> 
<td>Right to left&nbsp;</td> 
</tr> 
<tr>
<td>Assignment&nbsp;</td> 
<td>=  +=  -=  *=  /=  %= &gt;&gt;=  &lt;&lt;=  &amp;=  ^=   |=&nbsp;</td> 
<td>Right to left&nbsp;</td>
</tr> 
</table>
</p>
</p>
</td>
</tr>
</table>
</div>
</div>

<br>
<center><img src="images/line2.png" width="700" height="10"></center>
<br>
<!--page nine-->
<div data-role="page" id="nine">
<div style="background-color:white; border-radius: 15px; width: 800px; margin-right: auto; margin-left: auto; color:black; padding:70px; " >
<center><h1><u>LOOP CONTROL</u></h1></center>

<p>
There may be a situation when you need to execute a block of code several number of times. In general, statements are executed sequentially: The first statement in a function is executed first, followed by the second, and so on.</p>

<p>Programming languages provide various control structures that allow for more complicated execution paths.</p>

<p>A <b>loop</b> statement allows us to execute a statement or group of statements multiple times and following is the general form of a loop statement in most of the programming languages:</p>
<img src="images/loop_architecture.jpg" alt="Java Tutorial" /> 
<p>Java programming language provides the following types of loop to handle looping requirements. Click the following links to check their detail.</p>
<table class="table table-bordered">
<tr>
<th style="width:30%">Loop Type</th>
<th>Description</th>
</tr>
<tr>
<td><p><a href="/java/java_while_loop.htm" title="while loop in java">while loop</a></p></td>
<td>Repeats a statement or group of statements while a given condition is true. It tests the condition before executing the loop body.</td>
</tr>
<tr>
<td><p><a href="/java/java_for_loop.htm" title="for loop in java">for loop</a></p></td>
<td>Execute a sequence of statements multiple times and abbreviates the code that manages the loop variable.</td>
</tr>
<tr>
<td><p><a href="/java/java_do_while_loop.htm" title="do...while loop in java">do...while loop</a></p></td>
<td>Like a while statement, except that it tests the condition at the end of the loop body</td>
</tr>
</table>

<h2>Loop Control Statements:</h2>
<p>Loop control statements change execution from its normal sequence. When execution leaves a scope, all automatic objects that were created in that scope are destroyed.</p>
<p>Java supports the following control statements. Click the following links to check their detail.</p>
<table class="table table-bordered">
<tr>
<th style="width:30%">Control Statement</th>
<th>Description</th>
</tr>
<tr>
<td><p><a href="/java/java_break_statement.htm" title="break statement in java">break statement</a></p></td>
<td>Terminates the <b>loop</b> or <b>switch</b> statement and transfers execution to the statement immediately following the loop or switch.</td>
</tr>
<tr>
<td><p><a href="/java/java_continue_statement.htm" title="continue statement in java">continue statement</a></p></td>
<td>Causes the loop to skip the remainder of its body and immediately retest its condition prior to reiterating.</td>
</tr>
</table>

<h2>Enhanced for loop in Java:</h2>
<p>As of Java 5, the enhanced for loop was introduced. This is mainly used to traverse collection of elements including arrays.</p>
<h2>Syntax:</h2>
<p>The syntax of enhanced for loop is:</p>
<pre class="prettyprint notranslate">
for(declaration : expression)
{
   //Statements
}
</pre>
<ul class="list">
<li><p><b>Declaration:</b> The newly declared block variable, which is of a type compatible with the elements of the array you are accessing. The variable will be available within the for block and its value would be the same as the current array element.</p></li>
<li><p><b>Expression:</b> This evaluates to the array you need to loop through. The expression can be an array variable or method call that returns an array.</p></li>
</ul>
<h2>Example:</h2>
<pre class="prettyprint notranslate tryit">
public class Test {

   public static void main(String args[]){
      int [] numbers = {10, 20, 30, 40, 50};

      for(int x : numbers ){
         System.out.print( x );
         System.out.print(",");
      }
      System.out.print("\n");
      String [] names ={"James", "Larry", "Tom", "Lacy"};
      for( String name : names ) {
         System.out.print( name );
         System.out.print(",");
      }
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="result notranslate">
10,20,30,40,50,
James,Larry,Tom,Lacy,
</pre>
</div>
</div>

<br>
<center><img src="images/line2.png" width="700" height="10"></center>
<br>
<!--page ten-->
<div data-role="page" id="ten">
<div style="background-color:white; border-radius: 15px; width: 800px; margin-right: auto; margin-left: auto; color:black; padding:70px; " >
<center><h1><u>DECISION MAKING</u></h1></center>

<p>Decision making structures have one or more conditions to be evaluated or tested by the program, along with a statement or statements that are to be executed if the condition is determined to be true, and optionally, other statements to be executed if the condition is determined to be false.</p>

<p>Following is the general form of a typical decision making structure found in most of the programming languages:</p>
<img src="images/decision_making.jpg" alt="Java Tutorial" />
<p>Java programming language provides following types of decision making statements. Click the following links to check their detail.</p>

<table class="table table-bordered">
<tr>
<th style="width:35%">Statement</th>
<th>Description</th>
</tr>
<tr>
<td><p><a href="/java/if_statement_in_java.htm" title="if statement in java">if statement</a></p></td>
<td>An <b>if statement</b> consists of a boolean expression followed by one or more statements.</td>
</tr>
<tr>
<td><p><a href="/java/if_else_statement_in_java.htm" title="if...else statement in java">if...else statement</a></p></td>
<td>An <b>if statement</b> can be followed by an optional <b>else statement</b>, which executes when the boolean expression is false.</td>
</tr>
<tr>
<td><p><a href="/java/nested_if_statements_in_java.htm" title="nested if statements in java">nested if statements</a></p></td>
<td>You can use one <b>if</b> or <b>else if</b> statement inside another <b>if</b> or <b>else if</b> statement(s).</td>
</tr>
<tr>
<td><p><a href="/java/switch_statement_in_java.htm" title="switch statement in java">switch statement</a></p></td>
<td>A <b>switch</b> statement allows a variable to be tested for equality against a list of values.</td>
</tr>
</table>
<h2>The ? : Operator:</h2>
<p>We have covered <b>conditional operator ? :</b> in previous chapter which can be used to replace <b>if...else</b> statements. It has the following general form:</p>
<pre class="prettyprint notranslate">
Exp1 ? Exp2 : Exp3;
</pre>
<p>Where Exp1, Exp2, and Exp3 are expressions. Notice the use and placement of the colon.</p>
<p>To determine the value of whole expression, initially exp1 is evaluated </p>
<ul class="list">
<li>If the value of exp1 is true, then the value of Exp2 will be the value of the whole expression. </li>
<li>If the value of exp1 is false, then Exp3 is evaluated and its value becomes the value of the entire expression.</li></ul></p>
</div>
</div>

<br>
<center><img src="images/line2.png" width="700" height="10"></center>
<br>
<!--page eleven-->
<div data-role="page" id="eleven">
<div style="background-color:white; border-radius: 15px; width: 800px; margin-right: auto; margin-left: auto; color:black; padding:70px; " >
<center><h1><u>NUMBERS</u></h1></center>


<p>Normally, when we work with Numbers, we use primitive data  types  such as  byte, int, long, double, etc.</p>
<h2>Example:</h2>
<pre class="prettyprint notranslate">
int i = 5000;
float gpa = 13.65;
byte mask = 0xaf;
</pre>
<p>However, in development, we come across situations where we need to use objects instead of primitive data types. In-order to achieve this Java provides <b>wrapper classes</b> </p> 
<p>All the wrapper classes (Integer, Long, Byte, Double, Float, Short) are subclasses of the abstract class Number.<p>
<img src="/java/images/number_classes.jpg" alt="Number Subclasses" />
<p>The object of the wrapper class contains or wraps its respective primitive data type. converting primitive data types into object is called boxing, and this is taken care by the compiler. therefore while using a wrapper class you just need to pass the value of the primitive data type to the constructor of the Wrapper class.
</p>
<p>And  the Wrapper object will be converted back to a primitive data type, and this process is called un boxing. The <b>Number</b> class is part of the java.lang package.</p>
<p>Here is an example of boxing and unboxing:</p>
<pre class="prettyprint notranslate tryit">
public class Test{

   public static void main(String args[]){
      Integer x = 5; // boxes int to an Integer object
      x =  x + 10;   // unboxes the Integer to a int
      System.out.println(x); 
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
15
</pre>
<p>When x is assigned integer value, the compiler boxes the integer because x is integer object. Later, x is unboxed so that they can be added as integer.</p>
<h2>Number Methods:</h2>
<p>Here is the list of the instance methods that all the subclasses of the Number class implement:</p>
<table class="table table-bordered">
<tr>
<th>SN</th>
<th>Methods with Description</th>
</tr>
<tr>
<td>1</td>
<td><p><a href="/java/number_xxxvalue.htm">xxxValue()</a></p>
<p>Converts the value of <i>this</i> Number object to the xxx data type and returned it.</p>
</td>
</tr>
<tr>
<td>2</td>
<td><p><a href="/java/number_compareto.htm">compareTo()</a></p>
<p>Compares <i>this</i> Number object to the argument.</p>
</td>
</tr>
<tr>
<td>3</td>
<td><p><a href="/java/number_equals.htm">equals()</a></p>
<p>Determines whether <i>this</i> number object is equal to the argument.</p>
</td>
</tr>
<tr>
<td>4</td>
<td><p><a href="/java/number_valueof.htm">valueOf()</a></p>
<p>Returns an Integer object holding the value of the specified primitive.</p>
</td>
</tr>
<tr>
<td>5</td>
<td><p><a href="/java/number_tostring.htm">toString()</a></p>
<p>Returns a String object representing the value of specified int or Integer.</p>
</td>
</tr>
<tr>
<td>6</td>
<td><p><a href="/java/number_parseint.htm">parseInt()</a></p>
<p>This method is used to get the primitive data type of a certain String.</p>
</td>
</tr>
<tr>
<td>7</td>
<td><p><a href="/java/number_abs.htm">abs()</a></p>
<p>Returns the absolute value of the argument.</p>
</td>
</tr>
<tr>
<td>8</td>
<td><p><a href="/java/number_ceil.htm">ceil()</a></p>
<p>Returns the smallest integer that is greater than or equal to the argument. Returned as a double.</p>
</td>
</tr>
<tr>
<td>9</td>
<td><p><a href="/java/number_floor.htm">floor()</a></p>
<p>Returns the largest integer that is less than or equal to the argument. Returned as a double.</p>
</td>
</tr>
<tr>
<td>10</td>
<td><p><a href="/java/number_rint.htm">rint()</a></p>
<p>Returns the integer that is closest in value to the argument. Returned as a double.</p>
</td>
</tr>
<tr>
<td>11</td>
<td><p><a href="/java/number_round.htm">round()</a></p>
<p>Returns the closest long or int, as indicated by the method's return type, to the argument.</p>
</td>
</tr>
<tr>
<td>12</td>
<td><p><a href="/java/number_min.htm">min()</a></p>
<p>Returns the smaller of the two arguments.</p>
</td>
</tr>
<tr>
<td>13</td>
<td><p><a href="/java/number_max.htm">max()</a></p>
<p>Returns the larger of the two arguments.</p>
</td>
</tr>
<tr>
<td>14</td>
<td><p><a href="/java/number_exp.htm">exp()</a></p>
<p>Returns the base of the natural logarithms, e, to the power of the argument.</p>
</td>
</tr>
<tr>
<td>15</td>
<td><p><a href="/java/number_log.htm">log()</a></p>
<p>Returns the natural logarithm of the argument.</p>
</td>
</tr>
<tr>
<td>16</td>
<td><p><a href="/java/number_pow.htm">pow()</a></p>
<p>Returns the value of the first argument raised to the power of the second argument.</p>
</td>
</tr>
<tr>
<td>17</td>
<td><p><a href="/java/number_sqrt.htm">sqrt()</a></p>
<p>Returns the square root of the argument.</p>
</td>
</tr>
<tr>
<td>18</td>
<td><p><a href="/java/number_sin.htm">sin()</a></p>
<p>Returns the sine of the specified double value.</p>
</td>
</tr>
<tr>
<td>19</td>
<td><p><a href="/java/number_cos.htm">cos()</a></p>
<p>Returns the cosine of the specified double value.</p>
</td>
</tr>
<tr>
<td>20</td>
<td><p><a href="/java/number_tan.htm">tan()</a></p>
<p>Returns the tangent of the specified double value.</p>
</td>
</tr>
<tr>
<td>21</td>
<td><p><a href="/java/number_asin.htm">asin()</a></p>
<p>Returns the arcsine of the specified double value.</p>
</td>
</tr>
<tr>
<td>22</td>
<td><p><a href="/java/number_acos.htm">acos()</a></p>
<p>Returns the arccosine of the specified double value.</p>
</td>
</tr>
<tr>
<td>23</td>
<td><p><a href="/java/number_atan.htm">atan()</a></p>
<p>Returns the arctangent of the specified double value.</p>
</td>
</tr>
<tr>
<td>24</td>
<td><p><a href="/java/number_atan2.htm">atan2()</a></p>
<p>Converts rectangular coordinates (x, y) to polar coordinate (r, theta) and returns theta.</p>
</td>
</tr>
<tr>
<td>25</td>
<td><p><a href="/java/number_todegrees.htm">toDegrees()</a></p>
<p>Converts the argument to degrees</p>
</td>
</tr>
<tr>
<td>26</td>
<td><p><a href="/java/number_toradians.htm">toRadians()</a></p>
<p>Converts the argument to radians.</p>
</td>
</tr>
<tr>
<td>27</td>
<td><p><a href="/java/number_random.htm">random()</a></p>
<p>Returns a random number.</p>
</td>
</tr>
</table>
</p>
</p>
</div>
</div>

<br>
<center><img src="images/line2.png" width="700" height="10"></center>
<br>
<!--page twelve-->
<div data-role="page" id="twelve">
<div style="background-color:white; border-radius: 15px; width: 800px; margin-right: auto; margin-left: auto; color:black; padding:70px; " >
<center><h1><u>CHARACTERS</u></h1></center>


<p>Normally, when we work with characters, we use primitive data  types char.</p>
<h2>Example:</h2>
<pre class="prettyprint notranslate">
char ch = 'a';

// Unicode for uppercase Greek omega character
char uniChar = '\u039A'; 

// an array of chars
char[] charArray ={ 'a', 'b', 'c', 'd', 'e' }; 
</pre>
<p>However in development, we come across situations where we need to use objects instead of primitive data types. In order to achieve this, Java provides wrapper class <b>Character</b> for  primitive data type char.</p>
<p>The Character class offers a number of useful class (i.e., static) methods for manipulating characters. You can create a Character object with the Character constructor:</p>
<pre class="prettyprint notranslate">
Character ch = new Character('a');
</pre>
<p>The Java compiler will also create a Character object for you under some circumstances. For example, if you pass a primitive char into a method that expects an object, the compiler automatically converts the char to a Character for you. This feature is called autoboxing or unboxing, if the conversion goes the other way.</p>
<h2>Example:</h2>
<pre class="prettyprint notranslate">
// Here following primitive char 'a'
// is boxed into the Character object ch
Character ch = 'a';

// Here primitive 'x' is boxed for method test,
// return is unboxed to char 'c'
char c = test('x');
</pre>
<h2>Escape Sequences:</h2>
<p>A character preceded by a backslash (\) is an escape sequence and has special meaning to the compiler.</p>
<p>The newline character (\n) has been used frequently in this tutorial in System.out.println() statements to advance to the next line after the string is printed.</p>
<p>Following table shows the Java escape sequences:</p>
<table class="table table-bordered">
<tr>
<th>Escape Sequence</th><th>Description</th></tr>
<tr>
<td>\t</td>
<td>Inserts a tab in the text at this point. </td>
</tr>
<tr>
<td>\b</td>
<td>Inserts a backspace in the text at this point. </td>
</tr>
<tr>
<td>\n</td>
<td>Inserts a newline in the text at this point. </td>
</tr>
<tr>
<td>\r</td>
<td>Inserts a carriage return in the text at this point.</td>
</tr>
<tr>
<td>\f</td>
<td>Inserts a form feed in the text at this point. </td>
</tr>
<tr>
<td>\'</td>
<td>Inserts a single quote character in the text at this point.</td>
</tr>
<tr>
<td>\"</td>
<td>Inserts a double quote character in the text at this point. </td>
</tr>
<tr>
<td>\\</td>
<td>Inserts a backslash character in the text at this point.</td>
</tr>
</table>
<p>When an escape sequence is encountered in a print statement, the compiler interprets it accordingly.</p>
<h2>Example:</h2>
<p>If you want to put quotes within quotes you must use the escape sequence, \", on the interior quotes:</p>
<pre class="prettyprint notranslate tryit">
public class Test {

   public static void main(String args[]) {
      System.out.println("She said \"Hello!\" to me.");
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
She said "Hello!" to me.
</pre>
<h2>Character Methods:</h2>
<p>Here is the list of the important instance methods that all the subclasses of the Character class implement:</p>
<table class="table table-bordered">
<tr>
<th>SN</th>
<th>Methods with Description</th>
</tr>
<tr>
<td>1</td>
<td><a href="/java/character_isletter.htm">isLetter()</a>
<p>Determines whether the specified char value is a letter.</p></td>
</tr>
<tr>
<td>2</td>
<td><a href="/java/character_isdigit.htm">isDigit()</a>
<p>Determines whether the specified char value is a digit.</p></td>
</tr>
<tr>
<td>3</td>
<td><a href="/java/character_iswhitespace.htm">isWhitespace()</a>
<p>Determines whether the specified char value is white space.</p></td>
</tr>
<tr>
<td>4</td>
<td><a href="/java/character_isuppercase.htm">isUpperCase()</a>
<p>Determines whether the specified char value is uppercase.</p></td>
</tr>
<tr>
<td>5</td>
<td><a href="/java/character_islowercase.htm">isLowerCase()</a>
<p>Determines whether the specified char value is lowercase.</p></td>
</tr>
<tr>
<td>6</td>
<td><a href="/java/character_touppercase.htm">toUpperCase()</a>
<p>Returns the uppercase form of the specified char value.</p></td>
</tr>
<tr>
<td>7</td>
<td><a href="/java/character_tolowercase.htm">toLowerCase()</a>
<p>Returns the lowercase form of the specified char value.</p></td>
</tr>
<tr>
<td>8</td>
<td><a href="/java/character_tostring.htm">toString()</a>
<p>Returns a String object representing the specified character valuethat is, a one-character string.</p></td>
</tr>
</table>
<p>For a complete list of methods, please refer to the java.lang.Character API specification.</p>
</div>
</div>

<br>
<center><img src="images/line2.png" width="700" height="10"></center>
<br>
<!--page thirteen-->
<div data-role="page" id="thirteen">
<div style="background-color:white; border-radius: 15px; width: 800px; margin-right: auto; margin-left: auto; color:black; padding:70px; " >
<center><h1><u>STRINGS</u></h1></center>


<p>Strings, which are widely used in Java programming, are a sequence of characters. In the Java programming language, strings are objects.</p>
<p>The Java platform provides the String class to create and manipulate strings.</p>
<h2>Creating Strings:</h2>
<p>The most direct way to create a string is to write:</p>
<pre class="prettyprint notranslate">
String greeting = "Hello world!";
</pre>
<p>Whenever it encounters a string literal in your code, the compiler creates a String object with its value in this case, "Hello world!'.</p>
<p>As with any other object, you can create String objects by using the new keyword and a constructor. The String class has eleven constructors that allow you to provide the initial value of the string using different sources, such as an array of characters.</p>
<pre class="prettyprint notranslate tryit">
public class StringDemo{

   public static void main(String args[]){
      char[] helloArray = { 'h', 'e', 'l', 'l', 'o', '.'};
      String helloString = new String(helloArray);  
      System.out.println( helloString );
   }
}
</pre>
<p>This would produce the following result:</p> 
<pre class="prettyprint notranslate">
hello.
</pre>
<p><b>Note:</b> The String class is immutable, so that once it is created a String object cannot be changed. If there is a necessity to make a lot of modifications to Strings of characters, then you should use <a href="/java/java_string_buffer.htm">String Buffer &amp; String Builder</a> Classes.</p>
<h2>String Length:</h2>
<p>Methods used to obtain information about an object are known as accessor methods. One accessor method that you can use with strings is the length() method, which returns the number of characters contained in the string object.</p>
<p>Below given program is an example of <b>length()</b> , method String class.</p>
<pre class="prettyprint notranslate tryit">
public class StringDemo {

   public static void main(String args[]) {
      String palindrome = "Dot saw I was Tod";
      int len = palindrome.length();
      System.out.println( "String Length is : " + len );
   }
}
</pre>
<p>This would produce the following result:</p> 
<pre class="prettyprint notranslate">
String Length is : 17
</pre>
<h2>Concatenating Strings:</h2>
<p>The String class includes a method for concatenating two strings:</p>
<pre class="prettyprint notranslate">
string1.concat(string2);
</pre>
<p>This returns a new string that is string1 with string2 added to it at the end. You can also use the concat() method with string literals, as in:</p>
<pre class="prettyprint notranslate">
"My name is ".concat("Zara");
</pre>
<p>Strings are more commonly concatenated with the + operator, as in:</p>
<pre class="prettyprint notranslate">
"Hello," + " world" + "!"
</pre>
<p>which results in:</p>
<pre class="prettyprint notranslate">
"Hello, world!"
</pre>
<p>Let us look at the following example:</p>
<pre class="prettyprint notranslate tryit">
public class StringDemo {

   public static void main(String args[]) {
      String string1 = "saw I was ";
      System.out.println("Dot " + string1 + "Tod");
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
Dot saw I was Tod
</pre>
<h2>Creating Format Strings:</h2>
<p>You have printf() and format() methods to print output with formatted numbers. The String class has an equivalent class method, format(), that returns a String object rather than a PrintStream object.</p>
<p>Using String's static format() method allows you to create a formatted string that you can reuse, as opposed to a one-time print statement. For example, instead of:</p>
<pre class="prettyprint notranslate">
System.out.printf("The value of the float variable is " +
                  "%f, while the value of the integer " +
                  "variable is %d, and the string " +
                  "is %s", floatVar, intVar, stringVar);
</pre>
<p>you can write:</p>
<pre class="prettyprint notranslate">
String fs;
fs = String.format("The value of the float variable is " +
                   "%f, while the value of the integer " +
                   "variable is %d, and the string " +
                   "is %s", floatVar, intVar, stringVar);
System.out.println(fs);
</pre>
<h2>String Methods:</h2>
<p>Here is the list of methods supported by String class:</p>
<table class="table table-bordered">
<tr>
<th>SN</th>
<th>Methods with Description</th>
</tr>
<tr>
<td>1</td>
<td><p><a href="/java/java_string_charat.htm">char  charAt(int index)</a> </p>
<p>Returns the character at the specified index.</p>
</td>
</tr>
<tr>
<td>2</td>
<td><p><a href="/java/java_string_compareto.htm">int compareTo(Object o)</a></p>
<p>Compares this String to another Object.</p>
</td>
</tr>
<tr>
<td>3</td>
<td><p><a href="/java/java_string_compareto.htm">int compareTo(String anotherString)</a></p>
<p>Compares two strings lexicographically.</p>
</td>
</tr>
<tr>
<td>4</td>
<td><p><a href="/java/java_string_comparetoignorecase.htm">int compareToIgnoreCase(String str)</a></p> 
<p>Compares two strings lexicographically, ignoring case differences.</p>
</td>
</tr>
<tr>
<td>5</td>
<td><p><a href="/java/java_string_concat.htm">String concat(String str)</a></p>
<p>Concatenates the specified string to the end of this string.</p>
</td>
</tr>
<tr>
<td>6</td>
<td><p><a href="/java/java_string_contentequals.htm">boolean contentEquals(StringBuffer sb)</a></p>
<p>Returns true if and only if this String represents the same sequence of characters as the specified StringBuffer.</p>
</td>
</tr>
<tr>
<td>7</td>
<td><p><a href="/java/java_string_copyvalueof.htm">static String copyValueOf(char[] data)</a></p>
<p>Returns a String that represents the character sequence in the array specified.</p>
</td>
</tr>
<tr>
<td>8</td>
<td><p><a href="/java/java_string_copyvalueof.htm">static String copyValueOf(char[] data, int offset, int count)</a></p>
<p>Returns a String that represents the character sequence in the array specified.</p>
</td>
</tr>
<tr>
<td>9</td>
<td><p><a href="/java/java_string_endswith.htm">boolean endsWith(String suffix)</a></p> 
<p>Tests if this string ends with the specified suffix.</p>
</td>
</tr>
<tr>
<td>10</td>
<td><p><a href="/java/java_string_equals.htm">boolean equals(Object anObject)</a></p>
<p>Compares this string to the specified object.</p>
</td>
</tr>
<tr>
<td>11</td>
<td><p><a href="/java/java_string_equalsignorecase.htm">boolean equalsIgnoreCase(String anotherString)</a></p>
<p>Compares this String to another String, ignoring case considerations.</p>
</td>
</tr>
<tr>
<td>12</td>
<td><p><a href="/java/java_string_getbytes.htm">byte getBytes()</a></p> 
<p>Encodes this String into a sequence of bytes using the platform's default charset, storing the result into a new byte array.</p>
</td>
</tr>
<tr>
<td>13</td>
<td><p><a href="/java/java_string_getbytes.htm">byte[] getBytes(String charsetName</a></p>
<p>Encodes this String into a sequence of bytes using the named charset, storing the result into a new byte array.</p>
</td>
</tr>
<tr>
<td>14</td>
<td><p><a href="/java/java_string_getchars.htm">void getChars(int srcBegin, int srcEnd, char[] dst, int dstBegin)</a></p>
<p>Copies characters from this string into the destination character array.</p>
</td>
</tr>
<tr>
<td>15</td>
<td><p><a href="/java/java_string_hashcode.htm">int hashCode()</a></p>
<p>  Returns a hash code for this string.</p>
</td>
</tr>
<tr>
<td>16</td>
<td><p><a href="/java/java_string_indexof.htm">int indexOf(int ch)</a></p>
<p>Returns the index within this string of the first occurrence of the specified character.</p>
</td>
</tr>
<tr>
<td>17</td>
<td><p><a href="/java/java_string_indexof.htm">int indexOf(int ch, int fromIndex)</a></p> 
<p> Returns the index within this string of the first occurrence of the specified character, starting the search at the specified index.</p>
</td>
</tr>
<tr>
<td>18</td>
<td><p><a href="/java/java_string_indexof.htm">int indexOf(String str)</a></p>
<p>Returns the index within this string of the first occurrence of the specified substring.</p>
</td>
</tr>
<tr>
<td>19</td>
<td><p><a href="/java/java_string_indexof.htm">int indexOf(String str, int fromIndex)</a></p>
<p>Returns the index within this string of the first occurrence of the specified substring, starting at the specified index</p>
</td>
</tr>
<tr>
<td>20</td>
<td><p><a href="/java/java_string_intern.htm">String intern()</a></p>
<p>Returns a canonical representation for the string object.</p>
</td>
</tr>
<tr>
<td>21</td>
<td><p><a href="/java/java_string_lastindexof.htm">int lastIndexOf(int ch)</a> </p>
<p> Returns the index within this string of the last occurrence of the specified character.</p>
</td>
</tr>
<tr>
<td>22</td>
<td><p><a href="/java/java_string_lastindexof.htm">int lastIndexOf(int ch, int fromIndex)</a> </p>
<p>Returns the index within this string of the last occurrence of the specified character, searching backward starting at the specified index.</p>
</td>
</tr>
<tr>
<td>23</td>
<td><p><a href="/java/java_string_lastindexof.htm">int lastIndexOf(String str)</a></p>
<p>Returns the index within this string of the rightmost occurrence of the specified substring.</p>
</td>
</tr>
<tr>
<td>24</td>
<td><p><a href="/java/java_string_lastindexof.htm">int lastIndexOf(String str, int fromIndex)</a></p> 
<p>Returns the index within this string of the last occurrence of the specified substring, searching backward starting at the specified index.</p>
</td>
</tr>
<tr>
<td>25</td>
<td><p><a href="/java/java_string_length.htm">int length()</a></p>
<p>Returns the length of this string.</p>
</td
></tr>
<tr>
<td>26</td>
<td><p><a href="/java/java_string_matches.htm">boolean matches(String regex)</a></p>
<p>Tells whether or not this string matches the given regular expression.</p>
</td>
</tr>
<tr>
<td>27</td>
<td><p><a href="/java/java_string_regionmatches.htm">boolean regionMatches(boolean ignoreCase, int toffset, String other, int ooffset, int len) </a></p>
<p>Tests if two string regions are equal.</p>
</td>
</tr>
<tr>
<td>28</td>
<td><p><a href="/java/java_string_regionmatches.htm">boolean regionMatches(int toffset, String other, int ooffset, int len)</a></p>
<p>Tests if two string regions are equal</p>
</td>
</tr>
<tr>
<td>29</td>
<td><p><a href="/java/java_string_replace.htm">String replace(char oldChar, char newChar)</a></p>
<p>Returns a new string resulting from replacing all occurrences of oldChar in this string with newChar.</p>
</td>
</tr>
<tr>
<td>30</td>
<td><p><a href="/java/java_string_replaceall.htm">String replaceAll(String regex, String replacement</a></p>
<p>Replaces each substring of this string that matches the given regular expression with the given replacement.</p>
</td>
</tr>
<tr>
<td>31</td>
<td><p><a href="/java/java_string_replacefirst.htm">String replaceFirst(String regex, String replacement)</a></p> 
<p>Replaces the first substring of this string that matches the given regular expression with the given replacement.</p>
</td>
</tr>
<tr>
<td>32</td>
<td><p><a href="/java/java_string_split.htm">String[] split(String regex)</a></p>
<p>Splits this string around matches of the given regular expression.</p>
</td>
</tr>
<tr>
<td>33</td>
<td><p><a href="/java/java_string_split.htm">String[] split(String regex, int limit)</a></p>
<p>Splits this string around matches of the given regular expression.</p>
</td>
</tr>
<tr>
<td>34</td>
<td><p><a href="/java/java_string_startswith.htm">boolean startsWith(String prefix)</a></p>
<p> Tests if this string starts with the specified prefix.</p>
</td>
</tr>
<tr>
<td>35</td>
<td><p><a href="/java/java_string_startswith.htm">boolean startsWith(String prefix, int toffset)</a></p>
<p> Tests if this string starts with the specified prefix beginning a specified index.</p>
</td>
</tr>
<tr>
<td>36</td>
<td><p><a href="/java/java_string_subsequence.htm">CharSequence subSequence(int beginIndex, int endIndex)</a></p>
<p> Returns a new character sequence that is a subsequence of this sequence.</p>
</td>
</tr>
<tr>
<td>37</td>
<td><p><a href="/java/java_string_substring.htm">String substring(int beginIndex)</a></p>
<p> Returns a new string that is a substring of this string.</p>
</td>
</tr>
<tr>
<td>38</td>
<td><p><a href="/java/java_string_substring.htm">String substring(int beginIndex, int endIndex)</a></p>
<p> Returns a new string that is a substring of this string.</p>
</td>
</tr>
<tr>
<td>39</td>
<td><p><a href="/java/java_string_tochararray.htm">char[] toCharArray()</a></p> 
<p>Converts this string to a new character array.</p>
</td>
</tr>
<tr>
<td>40</td>
<td><p><a href="/java/java_string_tolowercase.htm">String toLowerCase()</a></p>
<p>Converts all of the characters in this String to lower case using the rules of the default locale.</p>
</td>
</tr>
<tr>
<td>41</td>
<td><p><a href="/java/java_string_tolowercase.htm">String toLowerCase(Locale locale)</a></p>
<p>Converts all of the characters in this String to lower case using the rules of the given Locale.</p>
</td>
</tr>
<tr>
<td>42</td>
<td><p><a href="/java/java_string_tostring.htm">String toString()</a></p>
<p>This object (which is already a string!) is itself returned.</p>
</td>
</tr>
<tr>
<td>43</td>
<td><p><a href="/java/java_string_touppercase.htm">String toUpperCase()</a></p> 
<p>Converts all of the characters in this String to upper case using the rules of the default locale.</p>
</td>
</tr>
<tr>
<td>44</td>
<td><p><a href="/java/java_string_touppercase.htm">String toUpperCase(Locale locale)</a></p> 
<p>Converts all of the characters in this String to upper case using the rules of the given Locale.</p>
</td>
</tr>
<tr>
<td>45</td>
<td><p><a href="/java/java_string_trim.htm">String trim()</a></p> 
<p>Returns a copy of the string, with leading and trailing whitespace omitted.</p>
</td>
</tr>
<tr>
<td>46</td>
<td><p><a href="/java/java_string_valueof.htm">static String valueOf(primitive data type x)</a></p>
<p>Returns the string representation of the passed data type argument.</p>
</td>
</tr>
</table>
</div>
</div>

<br>
<center><img src="images/line2.png" width="700" height="10"></center>
<br>
<!--page fourteen-->
<div data-role="page" id="fourteen">
<div style="background-color:white; border-radius: 15px; width: 800px; margin-right: auto; margin-left: auto; color:black; padding:70px; " >
<center><h1><u>ARRAYS</u></h1></center>


<p>Java provides a data structure, the <b>array</b>, which stores a fixed-size sequential collection of elements of the same type. An array is used to store a collection of data, but it is often more useful to think of an array as a collection of variables of the same type.</p>
<p>Instead of declaring individual variables, such as number0, number1, ..., and number99, you declare one array variable such as numbers and use numbers[0], numbers[1], and ..., numbers[99] to represent individual variables.</p>
<p>This tutorial introduces how to declare array variables, create arrays, and process arrays using indexed variables.</p>
<h2>Declaring Array Variables:</h2>
<p>To use an array in a program, you must declare a variable to reference the array, and you must specify the type of array the variable can reference. Here is the syntax for declaring an array variable:</p>
<pre class="prettyprint notranslate">
dataType[] arrayRefVar;   // preferred way.

or

dataType arrayRefVar[];  //  works but not preferred way.
</pre>
<p><b>Note:</b> The style <b>dataType[] arrayRefVar</b> is preferred. The style <b>dataType arrayRefVar[]</b> comes from the C/C++ language and was adopted in Java to accommodate C/C++ programmers.</p>
<h2>Example:</h2>
<p>The following code snippets are examples of this syntax:</p>
<pre class="prettyprint notranslate">
double[] myList;         // preferred way.

or

double myList[];         //  works but not preferred way.
</pre>
<h2>Creating Arrays:</h2>
<p>You can create an array by using the new operator with the following syntax:</p>
<pre class="prettyprint notranslate">
arrayRefVar = new dataType[arraySize];
</pre>
<p>The above statement does two things: </p>
<ul class="list">
<li><p>It creates an array using new dataType[arraySize]; </p></li>
<li><p>It assigns the reference of the newly created array to the variable arrayRefVar.</p></li>
</ul>
<p>Declaring an array variable, creating an array, and assigning the reference of the array to the variable can be combined in one statement, as shown below:</p>
<pre class="prettyprint notranslate">
dataType[] arrayRefVar = new dataType[arraySize];
</pre>
<p>Alternatively you can create arrays as follows:</p>
<pre class="prettyprint notranslate">
dataType[] arrayRefVar = {value0, value1, ..., valuek};
</pre>
<p>The array elements are accessed through the <b>index</b>. Array indices are 0-based; that is, they start from 0 to <b>arrayRefVar.length-1</b>.</p> 
<h2>Example:</h2>
<p>Following statement declares an array variable, myList, creates an array of 10 elements of double type and assigns its reference to myList:</p>
<pre class="prettyprint notranslate">
double[] myList = new double[10];
</pre>
<p>Following picture represents array myList. Here, myList holds ten double values and the indices are from 0 to 9.</p>
<center>
<img src="/java/images/java_array.jpg" alt="Java Array" />
</center>
<h2>Processing Arrays:</h2>
<p>When processing array elements, we often use either for loop or foreach loop because all of the elements in an array are of the same type and the size of the array is known.</p>
<h2>Example:</h2>
<p>Here is a complete example of showing how to create, initialize and process arrays:</p>
<pre class="prettyprint notranslate tryit">
public class TestArray {

   public static void main(String[] args) {
      double[] myList = {1.9, 2.9, 3.4, 3.5};

      // Print all the array elements
      for (int i = 0; i &lt; myList.length; i++) {
         System.out.println(myList[i] + " ");
      }
      // Summing all elements
      double total = 0;
      for (int i = 0; i &lt; myList.length; i++) {
         total += myList[i];
      }
      System.out.println("Total is " + total);
      // Finding the largest element
      double max = myList[0];
      for (int i = 1; i &lt; myList.length; i++) {
         if (myList[i] &gt; max) max = myList[i];
      }
      System.out.println("Max is " + max);
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
1.9
2.9
3.4
3.5
Total is 11.7
Max is 3.5
</pre>
<h2>The foreach Loops:</h2>
<p>JDK 1.5 introduced a new for loop known as foreach loop or enhanced for loop, which enables you to traverse the complete array sequentially without using an index variable. </p>
<h2>Example:</h2>
<p>The following code displays all the elements in the array myList:</p>
<pre class="prettyprint notranslate tryit">
public class TestArray {

   public static void main(String[] args) {
      double[] myList = {1.9, 2.9, 3.4, 3.5};

      // Print all the array elements
      for (double element: myList) {
         System.out.println(element);
      }
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
1.9
2.9
3.4
3.5
</pre>
<h2>Passing Arrays to Methods:</h2>
<p>Just as you can pass primitive type values to methods, you can also pass arrays to methods. For example, the following method displays the elements in an int array:</p>
<pre class="prettyprint notranslate">
public static void printArray(int[] array) {
  for (int i = 0; i &lt; array.length; i++) {
    System.out.print(array[i] + " ");
  }
}
</pre>
<p>You can invoke it by passing an array. For example, the following statement invokes the printArray method to display 3, 1, 2, 6, 4, and 2:</p>
<pre class="prettyprint notranslate">
printArray(new int[]{3, 1, 2, 6, 4, 2});
</pre>
<h2>Returning an Array from a Method:</h2>
<p>A method may also return an array. For example, the method shown below returns an array that is the reversal of another array:</p>
<pre class="prettyprint notranslate">
public static int[] reverse(int[] list) {
  int[] result = new int[list.length];

  for (int i = 0, j = result.length - 1; i &lt; list.length; i++, j--) {
    result[j] = list[i];
  }
  return result;
}
</pre>
<h2>The Arrays Class:</h2>
<p>The java.util.Arrays class contains various static methods for sorting and searching arrays, comparing arrays, and filling array elements. These methods are overloaded for all primitive types.</p>
<table class="table table-bordered">
<tr>
<th>SN</th>
<th>Methods with Description</th>
</tr>
<tr>
<td>1</td>
<td><b>public static int binarySearch(Object[] a, Object key)</b>
<p>Searches the specified array of Object ( Byte, Int , double, etc.) for the specified value using the binary search algorithm. The array must be sorted prior to making this call. This returns index of the search key, if it is contained in the list; otherwise, (-(insertion point + 1).</p>
</td>
</tr>
<tr>
<td>2</td>
<td><b>public static boolean equals(long[] a, long[] a2)</b>
<p>Returns true if the two specified arrays of longs are equal to one another. Two arrays are considered equal if both arrays contain the same number of elements, and all corresponding pairs of elements in the two arrays are equal. This returns true if the two arrays are equal. Same method could be used by all other primitive data types (Byte, short, Int, etc.)</p>
</td>
</tr>
<tr>
<td>3</td>
<td><b>public static void fill(int[] a, int val)</b>
<p>Assigns the specified int value to each element of the specified array of ints. Same method could be used by all other primitive data types (Byte, short, Int etc.)</p>
</td>
</tr>
<tr>
<td>4</td>
<td><b>public static void sort(Object[] a)</b>
<p>Sorts the specified array of objects into ascending order, according to the natural ordering of its elements. Same method could be used by all other primitive data types ( Byte, short, Int, etc.)</p>
</td>
</tr>
</table>
</div>
</div>

<br>
<center><img src="images/line2.png" width="700" height="10"></center>
<br>
<!--page fifteen-->
<div data-role="page" id="fifteen">
<div style="background-color:white; border-radius: 15px; width: 800px; margin-right: auto; margin-left: auto; color:black; padding:70px; " >
<center><h1><u>DATE & TIME</u></h1></center>


<p>Java provides the <b>Date</b> class available in <b>java.util</b> package, this class encapsulates the current date and time.</p>
<p>The Date class supports two constructors as shown below.</p>

<table class="table table-bordered">
<tr>
<th>SR.NO</th>
<th>Constructor and Description</th>
</tr>
<tr>
<td>1</td>
<td><b>Date( )</b>
<p>This constructor initializes the object with the current date and time.</p>
</td>
</tr>
<tr>
<td>2</td>
<td><b>Date(long millisec)</b>
<p>This constructor accepts an argument that equals the number of milliseconds that have elapsed since midnight, January 1, 1970</p>
</td>
</tr>
<tr>
</table>

<p>Below given are the methods of the date class.</p>
<table class="table table-bordered">
<tr>
<th>SN</th>
<th>Methods with Description</th>
</tr>
<tr>
<td>1</td>
<td><b>boolean after(Date date)</b>
<p>Returns true if the invoking Date object contains a date that is later than the one specified by date, otherwise, it returns false.</p>
</td>
</tr>
<tr>
<td>2</td>
<td><b>boolean before(Date date)</b>
<p>Returns true if the invoking Date object contains a date that is earlier than the one specified by date, otherwise, it returns false.</p>
</td>
</tr>
<tr>
<td>3</td>
<td><b>Object clone( )</b>
<p>Duplicates the invoking Date object.</p>
</td>
</tr>
<tr>
<td>4</td>
<td><b>int compareTo(Date date)</b>
<p>Compares the value of the invoking object with that of date. Returns 0 if the values are equal. Returns a negative value if the invoking object is earlier than date. Returns a positive value if the invoking object is later than date.</p>
</td>
</tr>
<tr>
<td>5</td>
<td><b>int compareTo(Object obj)</b>
<p>Operates identically to compareTo(Date) if obj is of class Date. Otherwise, it throws a ClassCastException.</p>
</td>
</tr>
<tr>
<td>6</td>
<td><b>boolean equals(Object date)</b>
<p>Returns true if the invoking Date object contains the same time and date as the one specified by date, otherwise, it returns false.</p>
</td>
</tr>
<tr>
<td>7</td>
<td><b>long getTime( )</b>
<p>Returns the number of milliseconds that have elapsed since January 1, 1970.</p>
</td>
</tr>
<tr>
<td>8</td>
<td><b>int hashCode( )</b>
<p>Returns a hash code for the invoking object.</p>
</td>
</tr>
<tr>
<td>9</td>
<td><b>void setTime(long time)</b>
<p>Sets the time and date as specified by time, which represents an elapsed time in milliseconds from midnight, January 1, 1970</p>
</td>
</tr>
<tr>
<td>10</td>
<td><b>String toString( )</b>
<p>Converts the invoking Date object into a string and returns the result.</p>
</td>
</tr>
</table>
<h2>Getting Current Date &amp; Time</h2>
<p>This is very easy to get current date and time in Java. You can use a simple Date object with <i>toString() </i> method to print current date and time as follows:</p>
<pre class="prettyprint notranslate tryit">
import java.util.Date;
  
public class DateDemo {
   public static void main(String args[]) {
       // Instantiate a Date object
       Date date = new Date();
        
       // display time and date using toString()
       System.out.println(date.toString());
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
on May 04 09:51:52 CDT 2009
</pre>
<h2>Date Comparison:</h2>
<p>There are following three ways to compare two dates:</p>
<ul class="list">
<li><p>You can use getTime( ) to obtain the number of milliseconds that have elapsed since midnight, January 1, 1970, for both objects and then compare these two values.</p></li>
<li><p>You can use the methods before( ), after( ), and equals( ). Because the 12th of the month comes before the 18th, for example, new Date(99, 2, 12).before(new Date (99, 2, 18)) returns true.</p></li>
<li><p>You can use the compareTo( ) method, which is defined by the Comparable interface and implemented by Date.</p></li>
</ul>
<h2>Date Formatting using SimpleDateFormat:</h2>
<p>SimpleDateFormat is a concrete class for formatting and parsing dates in a locale-sensitive manner. SimpleDateFormat allows you to start by choosing any user-defined patterns for date-time formatting. For example:</p>
<pre class="prettyprint notranslate tryit">
import java.util.*;
import java.text.*;

public class DateDemo {
   public static void main(String args[]) {

      Date dNow = new Date( );
      SimpleDateFormat ft = 
      new SimpleDateFormat ("E yyyy.MM.dd 'at' hh:mm:ss a zzz");

      System.out.println("Current Date: " + ft.format(dNow));
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
Current Date: Sun 2004.07.18 at 04:14:09 PM PDT
</pre>
<h2>Simple DateFormat format codes:</h2>
<p>To specify the time format, use a time pattern string. In this pattern, all ASCII letters are reserved as pattern letters, which are defined as the following:</p>
<table class="table table-bordered">
<tr>
<th>Character</th>
<th>Description</th>
<th>Example</th>
</tr>
<tr>
<td>G</td>
<td>Era designator</td>
<td>AD</td>
</tr>
<tr>
<td>y</td>
<td>Year in four digits</td>
<td>2001</td>
</tr>
<tr>
<td>M</td>
<td>Month in year</td>
<td>July or 07</td>
</tr>
<tr>
<td>d</td>
<td>Day in month</td>
<td>10</td>
</tr>
<tr>
<td>h</td>
<td>Hour in A.M./P.M. (1~12)</td>
<td>12</td>
</tr>
<tr>
<td>H</td>
<td>Hour in day (0~23)</td>
<td>22</td>
</tr>
<tr>
<td>m</td>
<td>Minute in hour</td>
<td>30</td>
</tr>
<tr>
<td>s</td>
<td>Second in minute</td>
<td>55</td>
</tr>
<tr>
<td>S</td>
<td>Millisecond</td>
<td>234</td>
</tr>
<tr>
<td>E</td>
<td>Day in week</td>
<td>Tuesday</td>
</tr>
<tr>
<td>D</td>
<td>Day in year</td>
<td>360</td>
</tr>
<tr>
<td>F</td>
<td>Day of week in month</td>
<td>2 (second Wed. in July)</td>
</tr>
<tr>
<td>w</td>
<td>Week in year</td>
<td>40</td>
</tr>
<tr>
<td>W</td>
<td>Week in month</td>
<td>1</td>
</tr>
<tr>
<td>a</td>
<td>A.M./P.M. marker</td>
<td>PM</td>
</tr>
<tr>
<td>k</td>
<td>Hour in day (1~24)</td>
<td>24</td>
</tr>
<tr>
<td>K</td>
<td>Hour in A.M./P.M. (0~11)</td>
<td>10</td>
</tr>
<tr>
<td>z</td>
<td>Time zone</td>
<td>Eastern Standard Time</td>
</tr>
<tr>
<td>'</td>
<td>Escape for text</td>
<td>Delimiter</td>
</tr>
<tr>
<td>"</td>
<td>Single quote</td>
<td>`</td>
</tr>
</table>
<h2>Date Formatting using printf:</h2>
<p>Date and time formatting can be done very easily using <b>printf</b> method. You use a two-letter format, starting with <b>t</b> and ending in one of the letters of the table given below. For example:</p>
<pre class="prettyprint notranslate tryit">
import java.util.Date;

public class DateDemo {

  public static void main(String args[]) {
     // Instantiate a Date object
     Date date = new Date();

     // display time and date using toString()
     String str = String.format("Current Date/Time : %tc", date );

     System.out.printf(str);
  }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
Current Date/Time : Sat Dec 15 16:37:57 MST 2012
</pre>
<p>It would be a bit silly if you had to supply the date multiple times to format each part. For that reason, a format string can indicate the index of the argument to be formatted.</p>
<p>The index must immediately follow the % and it must be terminated by a $. For example:</p>
<pre class="prettyprint notranslate tryit">
import java.util.Date;
  
public class DateDemo {

   public static void main(String args[]) {
       // Instantiate a Date object
       Date date = new Date();
        
       // display time and date using toString()
       System.out.printf("%1$s %2$tB %2$td, %2$tY", 
                         "Due date:", date);
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
Due date: February 09, 2004
</pre>
<p>Alternatively, you can use the &lt; flag. It indicates that the same argument as in the preceding format specification should be used again. For example:</p>
<pre class="prettyprint notranslate tryit">
import java.util.Date;
  
public class DateDemo {

   public static void main(String args[]) {
       // Instantiate a Date object
       Date date = new Date();
        
       // display formatted date
       System.out.printf("%s %tB %&lt;te, %&lt;tY", 
                         "Due date:", date);
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
Due date: February 09, 2004
</pre>
<h2>Date and Time Conversion Characters:</h2>
<table class="table table-bordered">
<tr>
<th>Character</th>
<th>Description</th>
<th>Example</th>
</tr>
<tr>
<td>c</td>
<td>Complete date and time</td>
<td>Mon May 04 09:51:52 CDT 2009</td>
</tr>
<tr>
<td>F</td>
<td>ISO 8601 date</td>
<td>2004-02-09</td>
</tr>
<tr>
<td>D</td>
<td>U.S. formatted date (month/day/year)</td>
<td>02/09/2004</td>
</tr>
<tr>
<td>T</td>
<td>24-hour time</td>
<td>18:05:19</td>
</tr>
<tr>
<td>r</td>
<td>12-hour time</td>
<td>06:05:19 pm</td>
</tr>
<tr>
<td>R</td>
<td>24-hour time, no seconds</td>
<td>18:05</td>
</tr>
<tr>
<td>Y</td>
<td>Four-digit year (with leading zeroes)</td>
<td>2004</td>
</tr>
<tr>
<td>y</td>
<td>Last two digits of the year (with leading zeroes)</td>
<td>04</td>
</tr>
<tr>
<td>C</td>
<td>First two digits of the year (with leading zeroes)</td>
<td>20</td>
</tr>
<tr>
<td>B</td>
<td>Full month name</td>
<td>February</td>
</tr>
<tr>
<td>b</td>
<td>Abbreviated month name</td>
<td>Feb</td>
</tr>
<tr>
<td>m</td>
<td>Two-digit month (with leading zeroes)</td>
<td>02</td>
</tr>
<tr>
<td>d</td>
<td>Two-digit day (with leading zeroes)</td>
<td>03</td>
</tr>
<tr>
<td>e</td>
<td>Two-digit day (without leading zeroes)</td>
<td>9</td>
</tr>
<tr>
<td>A</td>
<td>Full weekday name</td>
<td>Monday</td>
</tr>
<tr>
<td>a</td>
<td>Abbreviated weekday name</td>
<td>Mon</td>
</tr>
<tr>
<td>j</td>
<td>Three-digit day of year (with leading zeroes)</td>
<td>069</td>
</tr>
<tr>
<td>H</td>
<td>Two-digit hour (with leading zeroes), between 00 and 23</td>
<td>18</td>
</tr>
<tr>
<td>k</td>
<td>Two-digit hour (without leading zeroes), between 0 and 23</td>
<td>18</td>
</tr>
<tr>
<td>I</td>
<td>Two-digit hour (with leading zeroes), between 01 and 12</td>
<td>06</td>
</tr>
<tr>
<td>l</td>
<td>Two-digit hour (without leading zeroes), between 1 and 12</td>
<td>6</td>
</tr>
<tr>
<td>M</td>
<td>Two-digit minutes (with leading zeroes)</td>
<td>05</td>
</tr>
<tr>
<td>S</td>
<td>Two-digit seconds (with leading zeroes)</td>
<td>19</td>
</tr>
<tr>
<td>L</td>
<td>Three-digit milliseconds (with leading zeroes)</td>
<td>047</td>
</tr>
<tr>
<td>N</td>
<td>Nine-digit nanoseconds (with leading zeroes)</td>
<td>047000000</td>
</tr>
<tr>
<td>P</td>
<td>Uppercase morning or afternoon marker</td>
<td>PM</td>
</tr>
<tr>
<td>p</td>
<td>Lowercase morning or afternoon marker</td>
<td>pm</td>
</tr>
<tr>
<td>z</td>
<td>RFC 822 numeric offset from GMT</td>
<td>-0800</td>
</tr>
<tr>
<td>Z</td>
<td>Time zone</td>
<td>PST</td>
</tr>
<tr>
<td>s</td>
<td>Seconds since 1970-01-01 00:00:00 GMT</td>
<td>1078884319</td>
</tr>
<tr>
<td>Q</td>
<td>Milliseconds since 1970-01-01 00:00:00 GMT</td>
<td>1078884319047</td>
</tr>
</table>
<p>There are other useful classes related to Date and time. For more details, you can refer to Java Standard documentation.</p>
<h2>Parsing Strings into Dates:</h2>
<p>The SimpleDateFormat  class has some additional methods, notably parse( ) , which tries to parse a string according to the format stored in the given SimpleDateFormat object. For example:</p>
<pre class="prettyprint notranslate tryit">
import java.util.*;
import java.text.*;
  
public class DateDemo {

   public static void main(String args[]) {
      SimpleDateFormat ft = new SimpleDateFormat ("yyyy-MM-dd"); 

      String input = args.length == 0 ? "1818-11-11" : args[0]; 

      System.out.print(input + " Parses as "); 

      Date t; 

      try { 
          t = ft.parse(input); 
          System.out.println(t); 
      } catch (ParseException e) { 
          System.out.println("Unparseable using " + ft); 
      }
   }
}
</pre>
<p>A sample run of the above program would produce the following result:</p>
<pre class="prettyprint notranslate">
$ java DateDemo
1818-11-11 Parses as Wed Nov 11 00:00:00 GMT 1818
$ java DateDemo 2007-12-01
2007-12-01 Parses as Sat Dec 01 00:00:00 GMT 2007
</pre>
<h2>Sleeping for a While:</h2>
<p>You can sleep for any period of time from one millisecond up to the lifetime of your computer. For example, following program would sleep for 10 seconds:</p>
<pre class="prettyprint notranslate tryit">
import java.util.*;
  
public class SleepDemo {
   public static void main(String args[]) {
      try { 
         System.out.println(new Date( ) + "\n"); 
         Thread.sleep(5*60*10); 
         System.out.println(new Date( ) + "\n"); 
      } catch (Exception e) { 
          System.out.println("Got an exception!"); 
      }
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
Sun May 03 18:04:41 GMT 2009

Sun May 03 18:04:51 GMT 2009
</pre>
<h2>Measuring Elapsed Time:</h2>
<p>Sometimes, you may need to measure point in time in milliseconds. So let's re-write above example once again:</p>
<pre class="prettyprint notranslate tryit">
import java.util.*;
  
public class DiffDemo {

   public static void main(String args[]) {
      try {
         long start = System.currentTimeMillis( );
         System.out.println(new Date( ) + "\n");
         Thread.sleep(5*60*10);
         System.out.println(new Date( ) + "\n");
         long end = System.currentTimeMillis( );
         long diff = end - start;
         System.out.println("Difference is : " + diff);
      } catch (Exception e) {
         System.out.println("Got an exception!");
      }
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
Sun May 03 18:16:51 GMT 2009

Sun May 03 18:16:57 GMT 2009

Difference is : 5993
</pre>
<h2>GregorianCalendar Class:</h2>
<p>GregorianCalendar is a concrete implementation of a Calendar class that implements the normal Gregorian calendar with which you are familiar. I did not discuss Calendar class in this tutorial, you can look standard Java documentation for this.</p>
<p>The <b>getInstance( )</b> method of Calendar returns a GregorianCalendar initialized with the current date and time in the default locale and time zone. GregorianCalendar defines two fields: AD and BC. These represent the two eras defined by the Gregorian calendar.</p>
<p>There are also several constructors for GregorianCalendar objects:</p>
<table class="table table-bordered">
<tr>
<th>SN</th>
<th>Constructor with Description</th>
</tr>
<tr>
<td>1</td>
<td><b>GregorianCalendar()</b>
<p>Constructs a default GregorianCalendar using the current time in the default time zone with the default locale.</p>
</td>
</tr>
<tr>
<td>2</td>
<td><b>GregorianCalendar(int year, int month, int date)</b>
<p>Constructs a GregorianCalendar with the given date set in the default time zone with the default locale.</p>
</td>
</tr>
<tr>
<td>3</td>
<td><b>GregorianCalendar(int year, int month, int date, int hour, int minute)</b>
<p>Constructs a GregorianCalendar with the given date and time set for the default time zone with the default locale.</p>
</td>
</tr>
<tr>
<td>4</td>
<td><b>GregorianCalendar(int year, int month, int date, int hour, int minute, int second)</b>
<p>Constructs a GregorianCalendar with the given date and time set for the default time zone with the default locale.</p>
</td>
</tr>
<tr>
<td>5</td>
<td><b>GregorianCalendar(Locale aLocale)</b>
<p>Constructs a GregorianCalendar based on the current time in the default time zone with the given locale.</p>
</td>
</tr>
<tr>
<td>6</td>
<td><b>GregorianCalendar(TimeZone zone)</b>
<p>Constructs a GregorianCalendar based on the current time in the given time zone with the default locale.</p>
</td>
</tr>
<tr>
<td>7</td>
<td><b>GregorianCalendar(TimeZone zone, Locale aLocale)</b>
<p>Constructs a GregorianCalendar based on the current time in the given time zone with the given locale.</p>
</td>
</tr>
</table>
<p>Here is the list of few useful support methods provided by GregorianCalendar class:</p>
<table class="table table-bordered">
<tr>
<th>SN</th>
<th>Methods with Description</th>
</tr>
<tr>
<td>1</td>
<td><b>void add(int field, int amount)</b>
<p>Adds the specified (signed) amount of time to the given time field, based on the calendar's rules.</p>
</td>
</tr>
<tr>
<td>2</td>
<td><b>protected  void computeFields()</b>
<p>Converts UTC as milliseconds to time field values.</p>
</td>
</tr>
<tr>
<td>3</td>
<td><b>protected  void computeTime()</b>
<p>Overrides Calendar Converts time field values to UTC as milliseconds.</p>
</td>
</tr>
<tr>
<td>4</td>
<td><b>boolean equals(Object obj)</b>
<p>Compares this GregorianCalendar to an object reference.</p>
</td>
</tr>
<tr>
<td>5</td>
<td><b>int get(int field)</b>
<p>Gets the value for a given time field.</p>
</td>
</tr>
<tr>
<td>6</td>
<td><b>int getActualMaximum(int field)</b>
<p>Return the maximum value that this field could have, given the current date.</p>
</td>
</tr>
<tr>
<td>7</td>
<td><b>int getActualMinimum(int field)</b>
<p>Return the minimum value that this field could have, given the current date.</p>
</td>
</tr>
<tr>
<td>8</td>
<td><b>int getGreatestMinimum(int field)</b>
<p>Returns highest minimum value for the given field if varies.</p>
</td>
</tr>
<tr>
<td>9</td>
<td><b>Date getGregorianChange()</b>
<p>Gets the Gregorian Calendar change date.</p>
</td>
</tr>
<tr>
<td>10</td>
<td><b>int getLeastMaximum(int field)</b>
<p>Returns lowest maximum value for the given field if varies.</p>
</td>
</tr>
<tr>
<td>11</td>
<td><b>int getMaximum(int field)</b>
<p>Returns maximum value for the given field.</p>
</td>
</tr>
<tr>
<td>12</td>
<td><b>Date getTime()</b>
<p>Gets this Calendar's current time.</p>
</td>
</tr>
<tr>
<td>13</td>
<td><b>long getTimeInMillis()</b>
<p>Gets this Calendar's current time as a long.</p>
</td>
</tr>
<tr>
<td>14</td>
<td><b>TimeZone getTimeZone()</b>
<p>Gets the time zone.</p>
</td>
</tr>
<tr>
<td>15</td>
<td><b>int getMinimum(int field)</b>
<p>Returns minimum value for the given field.</p>
</td>
</tr>
<tr>
<td>16</td>
<td><b>int hashCode()</b>
<p>Override hashCode.</p>
</td>
</tr>
<tr>
<td>17</td>
<td><b>boolean isLeapYear(int year)</b>
<p>Determines if the given year is a leap year.</p>
</td>
</tr>
<tr>
<td>18</td>
<td><b>void roll(int field, boolean up) </b>
<p>Adds or subtracts (up/down) a single unit of time on the given time field without changing larger fields.</p>
</td>
</tr>
<tr>
<td>19</td>
<td><b>void set(int field, int value)</b>
<p> Sets the time field with the given value.</p>
</td>
</tr>
<tr>
<td>20</td>
<td><b>void set(int year, int month, int date)</b>
<p>Sets the values for the fields year, month, and date.</p>
</td>
</tr>
<tr>
<td>21</td>
<td><b>void set(int year, int month, int date, int hour, int minute)</b>
<p> Sets the values for the fields year, month, date, hour, and minute.</p>
</td>
</tr>
<tr>
<td>22</td>
<td><b>void set(int year, int month, int date, int hour, int minute, int second)</b>
<p>  Sets the values for the fields year, month, date, hour, minute, and second.</p>
</td>
</tr>
<tr>
<td>23</td>
<td><b>void setGregorianChange(Date date) </b>
<p>Sets the GregorianCalendar change date.</p>
</td>
</tr>
<tr>
<td>24</td>
<td><b>void setTime(Date date)</b>
<p> Sets this Calendar's current time with the given Date.</p>
</td>
</tr>
<tr>
<td>25</td>
<td><b>void setTimeInMillis(long millis)</b>
<p> Sets this Calendar's current time from the given long value.</p>
</td>
</tr>
<tr>
<td>26</td>
<td><b>void setTimeZone(TimeZone value)</b>
<p>Sets the time zone with the given time zone value.</p>
</td>
</tr>
<tr>
<td>27</td>
<td><b>String toString()</b>
<p> Return a string representation of this calendar.</p>
</td>
</tr>
</table>
<h2>Example:</h2>
<pre class="prettyprint notranslate tryit">
import java.util.*;
  
public class GregorianCalendarDemo {

   public static void main(String args[]) {
      String months[] = {
      "Jan", "Feb", "Mar", "Apr",
      "May", "Jun", "Jul", "Aug",
      "Sep", "Oct", "Nov", "Dec"};
      
      int year;
      // Create a Gregorian calendar initialized
      // with the current date and time in the
      // default locale and timezone.
      GregorianCalendar gcalendar = new GregorianCalendar();
      // Display current time and date information.
      System.out.print("Date: ");
      System.out.print(months[gcalendar.get(Calendar.MONTH)]);
      System.out.print(" " + gcalendar.get(Calendar.DATE) + " ");
      System.out.println(year = gcalendar.get(Calendar.YEAR));
      System.out.print("Time: ");
      System.out.print(gcalendar.get(Calendar.HOUR) + ":");
      System.out.print(gcalendar.get(Calendar.MINUTE) + ":");
      System.out.println(gcalendar.get(Calendar.SECOND));
      
      // Test if the current year is a leap year
      if(gcalendar.isLeapYear(year)) {
         System.out.println("The current year is a leap year");
      }
      else {
         System.out.println("The current year is not a leap year");
      }
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
Date: Apr 22 2009
Time: 11:25:27
The current year is not a leap year
</pre>
<p>For a complete list of constant available in Calendar class, you can refer to standard Java documentation.</p>
</tr>
</table>
</div>
</div>

<br>
<center><img src="images/line2.png" width="700" height="10"></center>
<br>
<!--page sixteen-->
<div data-role="page" id="sixteen">
<div style="background-color:white; border-radius: 15px; width: 800px; margin-right: auto; margin-left: auto; color:black; padding:70px; " >
<center><h1><u>REGULAR EXPRESSIONS</u></h1></center>


<p>Java provides the java.util.regex package for pattern matching with regular expressions. Java regular expressions are very similar to the Perl programming language and very easy to learn.</p>
<p>A regular expression is a special sequence of characters that helps you match or find other strings or sets of strings, using a specialized syntax held in a pattern. They can be used to search, edit, or manipulate text and data. </p>
<p>The java.util.regex package primarily consists of the following three classes:</p>
<ul class="list">
<li><p><b>Pattern Class:</b> A Pattern object is a compiled representation of a regular expression. The Pattern class provides no public constructors. To create a pattern, you must first invoke one of its public static <b>compile()</b> methods, which will then return a Pattern object. These methods accept a regular expression as the first argument.</p></li>
<li><p><b>Matcher Class:</b> A Matcher object is the engine that interprets the pattern and performs match operations against an input string. Like the Pattern class, Matcher defines no public constructors. You obtain a Matcher object by invoking the <b>matcher()</b> method on a Pattern object.</p></li>
<li><p><b>PatternSyntaxException:</b> A PatternSyntaxException object is an unchecked exception that indicates a syntax error in a regular expression pattern.</p></li>
</ul>
<h2>Capturing Groups:</h2>
<p>Capturing groups are a way to treat multiple characters as a single unit. They are created by placing the characters to be grouped inside a set of parentheses. For example, the regular expression (dog) creates a single group containing the letters "d", "o", and "g".</p>
<p>Capturing groups are numbered by counting their opening parentheses from left to right. In the expression ((A)(B(C))), for example, there are four such groups:</p>
<ul class="list">
<li><p>((A)(B(C)))</p></li>
<li><p>(A)</p></li>
<li><p>(B(C))</p></li>
<li><p>(C)</p></li>
</ul>
<p>To find out how many groups are present in the expression, call the groupCount method on a matcher object. The groupCount method returns an int showing the number of capturing groups present in the matcher's pattern.</p>
<p>There is also a special group, group 0, which always represents the entire expression. This group is not included in the total reported by groupCount.</p>
<h2>Example:</h2>
<p>Following example illustrates how to find a digit string from the given alphanumeric string:</p>
<pre class="prettyprint notranslate tryit">
import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class RegexMatches
{
    public static void main( String args[] ){

      // String to be scanned to find the pattern.
      String line = "This order was placed for QT3000! OK?";
      String pattern = "(.*)(\\d+)(.*)";

      // Create a Pattern object
      Pattern r = Pattern.compile(pattern);

      // Now create matcher object.
      Matcher m = r.matcher(line);
      if (m.find( )) {
         System.out.println("Found value: " + m.group(0) );
         System.out.println("Found value: " + m.group(1) );
         System.out.println("Found value: " + m.group(2) );
      } else {
         System.out.println("NO MATCH");
      }
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
Found value: This order was placed for QT3000! OK?
Found value: This order was placed for QT300
Found value: 0
</pre>
<h2>Regular Expression Syntax:</h2>
<p>Here is the table listing down all the regular expression metacharacter syntax available in Java:</p>
<table class="table table-bordered">
<tr>
<th>Subexpression</th><th>Matches</th></tr>
<tr>
<td>^</td>
<td>Matches beginning of line.</td>
</tr>
<tr>
<td>$</td>
<td>Matches end of line.</td>
</tr>
<tr>
<td>.</td>
<td>Matches any single character except newline. Using m option allows it to match
newline as well.</td>
</tr>
<tr>
<td>[...]</td>
<td>Matches any single character in brackets.</td>
</tr>
<tr>
<td>[^...]</td>
<td>Matches any single character not in brackets</td>
</tr>
<tr>
<td>\A</td>
<td>Beginning of entire string</td>
</tr>
<tr>
<td>\z</td>
<td>End of entire string</td>
</tr>
<tr>
<td>\Z</td>
<td>End of entire string except allowable final line terminator.</td>
</tr>
<tr>
<td>re*</td>
<td>Matches 0 or more occurrences of preceding expression.</td>
</tr>
<tr>
<td>re+</td>
<td>Matches 1 or more of the previous thing</td>
</tr>
<tr>
<td>re?</td>
<td>Matches 0 or 1 occurrence of preceding expression.</td>
</tr>
<tr>
<td>re{ n}</td>
<td>Matches exactly n number of occurrences of preceding expression.</td>
</tr>
<tr>
<td>re{ n,}</td>
<td>Matches n or more occurrences of preceding expression.</td>
</tr>
<tr>
<td>re{ n, m}</td>
<td>Matches at least n and at most m occurrences of preceding expression.</td>
</tr>
<tr>
<td>a| b</td>
<td>Matches either a or b.</td>
</tr>
<tr>
<td>(re)</td>
<td>Groups regular expressions and remembers matched text.</td>
</tr>
<tr>
<td>(?: re)</td>
<td>Groups regular expressions without remembering matched text.</td>
</tr>
<tr>
<td>(?&gt; re)</td>
<td>Matches independent pattern without backtracking.</td>
</tr>
<tr>
<td>\w</td>
<td>Matches word characters.</td>
</tr>
<tr>
<td>\W</td>
<td>Matches nonword characters.</td>
</tr>
<tr>
<td>\s</td>
<td>Matches whitespace. Equivalent to [\t\n\r\f].</td>
</tr>
<tr>
<td>\S</td>
<td>Matches nonwhitespace.</td>
</tr>
<tr>
<td>\d</td>
<td>Matches digits. Equivalent to [0-9].</td>
</tr>
<tr>
<td>\D</td>
<td>Matches nondigits.</td>
</tr>
<tr>
<td>\A</td>
<td>Matches beginning of string.</td>
</tr>
<tr>
<td>\Z</td>
<td>Matches end of string. If a newline exists, it matches just before newline.</td>
</tr>
<tr>
<td>\z</td>
<td>Matches end of string.</td>
</tr>
<tr>
<td>\G</td>
<td>Matches point where last match finished.</td>
</tr>
<tr>
<td>\n</td>
<td>Back-reference to capture group number "n"</td>
</tr>
<tr>
<td>\b</td>
<td>Matches word boundaries when outside brackets. Matches backspace (0x08) when inside brackets.</td>
</tr>
<tr>
<td>\B</td>
<td>Matches nonword boundaries.</td>
</tr>
<tr>
<td>\n, \t, etc.</td>
<td>Matches newlines, carriage returns, tabs, etc.</td>
</tr>
<tr>
<td>\Q</td>
<td>Escape (quote) all characters up to \E</td>
</tr>
<tr>
<td>\E</td>
<td>Ends quoting begun with \Q</td>
</tr>
</table>
<h2>Methods of the Matcher Class:</h2>
<p>Here is a list of useful instance methods:</p>
<h2>Index Methods:</h2>
<p>Index methods provide useful index values that show precisely where the match was found in the input string:</p>
<table class="table table-bordered">
<tr>
<th>SN</th><th>Methods with Description</th>
</tr>
<tr>
<td>1</td>
<td><b>public int start() </b>
<p>Returns the start index of the previous match.</p>
</td>
</tr>
<tr>
<td>2</td>
<td><b>public int start(int group)</b>
<p>Returns the start index of the subsequence captured by the given group during the previous match operation.</p>
</td>
</tr>
<tr>
<td>3</td>
<td><b>public int end()</b>
<p>Returns the offset after the last character matched.</p>
</td>
</tr>
<tr>
<td>4</td>
<td><b>public int end(int group)</b>
<p>Returns the offset after the last character of the subsequence captured by the given group during the previous match operation.</td>
</tr>
</table>
<h2>Study Methods:</h2>
<p>Study methods review the input string and return a Boolean indicating whether or not the pattern is found:</p>
<table class="table table-bordered">
<tr>
<th>SN</th><th>Methods with Description</th>
</tr>
<tr>
<td>1</td>
<td><b>public boolean lookingAt() </b>
<p>Attempts to match the input sequence, starting at the beginning of the region, against the pattern.</p>
</td>
</tr>
<tr>
<td>2</td>
<td><b>public boolean find() </b>
<p>Attempts to find the next subsequence of the input sequence that matches the pattern.</p>
</td>
</tr>
<tr>
<td>3</td>
<td><b>public boolean find(int start)</b>
<p>Resets this matcher and then attempts to find the next subsequence of the input sequence that matches the pattern, starting at the specified index.</p>
</td>
</tr>
<tr>
<td>4</td>
<td><b>public boolean matches() </b>
<p>Attempts to match the entire region against the pattern.</p>
</td>
</tr>
</table>
<h2>Replacement Methods:</h2>
<p>Replacement methods are useful methods for replacing text in an input string:</p>
<table class="table table-bordered">
<tr>
<th>SN</th><th>Methods with Description</th>
</tr>
<tr>
<td>1</td>
<td><b>public Matcher appendReplacement(StringBuffer sb, String replacement)</b>
<p>Implements a non-terminal append-and-replace step.</p>
</td>
</tr>
<tr>
<td>2</td>
<td><b>public StringBuffer appendTail(StringBuffer sb)</b>
<p>Implements a terminal append-and-replace step.</p>
</td>
</tr>
<tr>
<td>3</td>
<td><b>public String replaceAll(String replacement) </b>
<p>Replaces every subsequence of the input sequence that matches the pattern with the given replacement string.</p>
</td>
</tr>
<tr>
<td>4</td>
<td><b>public String replaceFirst(String replacement)</b>
<p>Replaces the first subsequence of the input sequence that matches the pattern with the given replacement string.</p>
</td>
</tr>
<tr>
<td>5</td>
<td><b>public static String quoteReplacement(String s)</b>
<p>Returns a literal replacement String for the specified String. This method produces a String that will work as a literal replacement s in the appendReplacement method of the Matcher class.</p>
</td>
</tr>
</table>
<h2>The <i>start</i> and <i>end</i> Methods:</h2>
<p>Following is the example that counts the number of times the word "cat" appears in the input string:</p>
<pre class="prettyprint notranslate tryit">
import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class RegexMatches
{
    private static final String REGEX = "\\bcat\\b";
    private static final String INPUT =
                                    "cat cat cat cattie cat";

    public static void main( String args[] ){
       Pattern p = Pattern.compile(REGEX);
       Matcher m = p.matcher(INPUT); // get a matcher object
       int count = 0;

       while(m.find()) {
         count++;
         System.out.println("Match number "+count);
         System.out.println("start(): "+m.start());
         System.out.println("end(): "+m.end());
      }
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
atch number 1
start(): 0
end(): 3
atch number 2
start(): 4
end(): 7
atch number 3
start(): 8
end(): 11
atch number 4
start(): 19
end(): 22
</pre>
<p>You can see that this example uses word boundaries to ensure that the letters "c" "a" "t" are not merely a substring in a longer word. It also gives some useful information about where in the input string the match has occurred.</p>
<p>The start method returns the start index of the subsequence captured by the given group during the previous match operation, and end returns the index of the last character matched, plus one.</p>
<h2>The <i>matches</i> and <i>lookingAt</i> Methods:</h2>
<p>The matches and lookingAt methods both attempt to match an input sequence against a pattern. The difference, however, is that matches requires the entire input sequence to be matched, while lookingAt does not.</p>
<p>Both methods always start at the beginning of the input string. Here is the example explaining the functionality:</p>
<pre class="prettyprint notranslate tryit">
import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class RegexMatches
{
    private static final String REGEX = "foo";
    private static final String INPUT = "fooooooooooooooooo";
    private static Pattern pattern;
    private static Matcher matcher;

    public static void main( String args[] ){
       pattern = Pattern.compile(REGEX);
       matcher = pattern.matcher(INPUT);

       System.out.println("Current REGEX is: "+REGEX);
       System.out.println("Current INPUT is: "+INPUT);

       System.out.println("lookingAt(): "+matcher.lookingAt());
       System.out.println("matches(): "+matcher.matches());
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
Current REGEX is: foo
Current INPUT is: fooooooooooooooooo
lookingAt(): true
matches(): false
</pre>
<h2>The <i>replaceFirst</i> and <i>replaceAll</i> Methods:</h2>
<p>The replaceFirst and replaceAll methods replace text that matches a given regular expression. As their names indicate, replaceFirst replaces the first occurrence, and replaceAll replaces all occurrences.</p>
<p>Here is the example explaining the functionality:</p>
<pre class="prettyprint notranslate tryit">
import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class RegexMatches
{
    private static String REGEX = "dog";
    private static String INPUT = "The dog says meow. " +
                                    "All dogs say meow.";
    private static String REPLACE = "cat";

    public static void main(String[] args) {
       Pattern p = Pattern.compile(REGEX);
       // get a matcher object
       Matcher m = p.matcher(INPUT); 
       INPUT = m.replaceAll(REPLACE);
       System.out.println(INPUT);
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
The cat says meow. All cats say meow.
</pre>
<h2>The <i>appendReplacement</i> and <i>appendTail</i> Methods:</h2>
<p>The Matcher class also provides appendReplacement and appendTail methods for text replacement. </p>
<p>Here is the example explaining the functionality:</p>
<pre class="prettyprint notranslate tryit">
import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class RegexMatches
{
   private static String REGEX = "a*b";
   private static String INPUT = "aabfooaabfooabfoob";
   private static String REPLACE = "-";
   public static void main(String[] args) {
      Pattern p = Pattern.compile(REGEX);
      // get a matcher object
      Matcher m = p.matcher(INPUT);
      StringBuffer sb = new StringBuffer();
      while(m.find()){
         m.appendReplacement(sb,REPLACE);
      }
      m.appendTail(sb);
      System.out.println(sb.toString());
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
-foo-foo-foo-
</pre>
<h2>PatternSyntaxException Class Methods:</h2>
<p>A PatternSyntaxException is an unchecked exception that indicates a syntax error in a regular expression pattern. The PatternSyntaxException class provides the following methods to help you determine what went wrong:</p>
<table class="table table-bordered">
<tr>
<th>SN</th>
<th>Methods with Description</th>
</tr>
<tr>
<td>1</td>
<td><b>public String getDescription()</b>
<p>Retrieves the description of the error.</p>
</td>
</tr>
<tr>
<td>2</td>
<td><b>public int getIndex() </b>
<p>Retrieves the error index.</p>
</td>
</tr>
<tr>
<td>3</td>
<td><b>public String getPattern()</b>
<p>Retrieves the erroneous regular expression pattern.</p>
</td>
</tr>
<tr>
<td>4</td>
<td><b>public String getMessage()</b>
<p>Returns a multi-line string containing the description of the syntax error and its index, the erroneous regular expression pattern, and a visual indication of the error index within the pattern.</p>
</td>
</tr>
</table>
</p>
</td>
</tr>
</table>
</div>
</div>

<br>
<center><img src="images/line2.png" width="700" height="10"></center>
<br>
<!--page seventeen-->
<div data-role="page" id="seventeen">
<div style="background-color:white; border-radius: 15px; width: 800px; margin-right: auto; margin-left: auto; color:black; padding:70px; " >
<center><h1><u>METHODS</u></h1></center>


<p>A Java method is a collection of statements that are grouped together to perform an operation. When you call the System.out.<b>println()</b> method, for example, the system actually executes several statements in order to display a message on the console.</p>
<p>Now you will learn how to create your own methods with or without return values, invoke a method with or without parameters, and apply method abstraction in the program design.</p>
<h2>Creating Method:</h2>
<p>Considering the following example to explain the syntax of a method:</p>
<pre class="prettyprint notranslate">
public static int methodName(int a, int b) {
  // body
}
</pre>
<p>Here, 
<ul class="list">
<li><p><b>public static</b> : modifier.</p></li>
<li><p><b>int</b>: return type</p></li>
<li><p><b>methodName</b>: name of the method </p></li>
<li><p><b>a, b</b>: formal parameters</p></li>
<li><p><b>int a, int b</b>: list of parameters</p></li>
</ul>

<p>Method definition consists of a method header and a method body. The same is shown below:
<pre class="prettyprint notranslate">
modifier returnType nameOfMethod (Parameter List) {
 // method body
}
</pre>
<p>The syntax shown above includes:</p>
<ul class="list">
<li><p><b>modifier:</b> It defines the access type of the method and it is optional to use.</p></li>
<li><p><b>returnType:</b> Method may return a value.
<li><p><b>nameOfMethod:</b> This is the method name. The method signature consists of the method name and the parameter list.</p></li>
<li><p><b>Parameter List:</b> The list of parameters, it is the type, order, and number of parameters of a method. These are optional, method may contain zero parameters.</p></li>
<li><p><b>method body:</b> The method body defines what the method does with statements.</p></li>
</ul>
<h2>Example:</h2>
<p>Here is the source code of the above defined  method called max(). This method takes two parameters num1 and num2 and returns the maximum between the two:</p> 
<pre class="prettyprint notranslate">
/** the snippet returns the minimum between two numbers */
public static int minFunction(int n1, int n2) {
   int min;
   if (n1 &gt; n2)
      min = n2;
   else
      min = n1;

   return min; 
}
</pre>
<h2>Method Calling:</h2>
<p>For using a method, it should be called. There are two ways in which a method is called i.e. method returns a value or returning nothing (no return value).</p>
<p>The process of method calling is simple. When a program invokes a method, the program control gets transferred to the called method. This called method then returns control to the caller in two conditions, when:
<ul class="list">
<li><p>return statement is executed.</p></li>
<li><p>reaches the method ending closing brace.</p></li>
</ul>
<p>The methods returning void is considered as call to a statement. Lets consider an example:</p>
<pre class="prettyprint notranslate">
System.out.println("This is tutorialspoint.com!");
</pre>
<p>The method returning value can be understood by the following example:</p>
<pre class="prettyprint notranslate">
int result = sum(6, 9);
</pre>
<h2>Example:</h2>
<p>Following is the example to demonstrate how to define a method and how to call it:</p>
<pre class="prettyprint notranslate tryit">
public class ExampleMinNumber{
   
   public static void main(String[] args) {
      int a = 11;
      int b = 6;
      int c = minFunction(a, b);
      System.out.println("Minimum Value = " + c);
   }

   /** returns the minimum of two numbers */
   public static int minFunction(int n1, int n2) {
      int min;
      if (n1 &gt; n2)
         min = n2;
      else
         min = n1;

      return min; 
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
inimum value = 6
</pre>
<h2>The void Keyword:</h2>
<p>The void keyword allows us to create methods which do not return a value. Here, in the following example we're considering a void method <i>methodRankPoints</i>. This method is a void method which does not return any value. Call to a void method must be a statement i.e. <i>methodRankPoints(255.7);</i>. It is a Java statement which ends with a semicolon as shown below.</p>
<h2>Example:</h2>
<pre class="prettyprint notranslate tryit">
public class ExampleVoid {

   public static void main(String[] args) {
      methodRankPoints(255.7);
   }

   public static void methodRankPoints(double points) {
      if (points &gt;= 202.5) {
         System.out.println("Rank:A1");
      }
      else if (points &gt;= 122.4) {
         System.out.println("Rank:A2");
      }
      else {
         System.out.println("Rank:A3");
      }
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
Rank:A1
</pre>
<h2>Passing Parameters by Value:</h2>
<p> While working under calling process, arguments is to be passed. These should be in the same order as their respective parameters in the method specification. Parameters can be passed by value or by reference.</p>
<p>Passing Parameters by Value means calling a method with a parameter. Through this the argument value is passed to the parameter.</p>
<h2>Example:</h2>
<p>The following program shows an example of passing parameter by value. The values of the arguments remains the same even after the method invocation.</p>
<pre class="prettyprint notranslate tryit">
public class swappingExample {

   public static void main(String[] args) {
      int a = 30;
      int b = 45;

      System.out.println("Before swapping, a = " +
                          a + " and b = " + b);

      // Invoke the swap method
      swapFunction(a, b);
      System.out.println("\n**Now, Before and After swapping values will be same here**:");
      System.out.println("After swapping, a = " +
                         a + " and b is " + b);
   }

   public static void swapFunction(int a, int b) {
   
      System.out.println("Before swapping(Inside), a = " + a
                           + " b = " + b);
      // Swap n1 with n2
      int c = a;
      a = b;
      b = c;

      System.out.println("After swapping(Inside), a = " + a
                           + " b = " + b);
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
Before swapping, a = 30 and b = 45
Before swapping(Inside), a = 30 b = 45
After swapping(Inside), a = 45 b = 30

**Now, Before and After swapping values will be same here**:
After swapping, a = 30 and b is 45
</pre>

<h2>Method Overloading:</h2>
<p>When a class has two or more methods by same name but different parameters, it is known as method overloading. It is different from overriding. In overriding a method has same method name, type, number of parameters etc.</p>
<p>Lets consider the example shown before for finding minimum numbers of integer type. If, lets say we want to find minimum number of double type. Then the concept of Overloading will be introduced to create two or more methods with the same name but different parameters.<p>
<p></p>
<p>The below example explains the same:</p>
<pre class="prettyprint notranslate tryit">
public class ExampleOverloading{

   public static void main(String[] args) {
      int a = 11;
      int b = 6;
      double c = 7.3;
      double d = 9.4;
      int result1 = minFunction(a, b);
      // same function name with different parameters
      double result2 = minFunction(c, d);
      System.out.println("Minimum Value = " + result1);
      System.out.println("Minimum Value = " + result2);
   }

  // for integer
   public static int minFunction(int n1, int n2) {
      int min;
      if (n1 &gt; n2)
         min = n2;
      else
         min = n1;

      return min; 
   }
   // for double
   public static double minFunction(double n1, double n2) {
     double min;
      if (n1 &gt; n2)
         min = n2;
      else
         min = n1;

      return min; 
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
inimum Value = 6
inimum Value = 7.3
</pre>
<p>Overloading methods makes program readable. Here, two methods are given same name but with different parameters. The minimum number from integer and double types is the result.</p>

















<h2>Using Command-Line Arguments:</h2>
<p>Sometimes you will want to pass information into a program when you run it. This is accomplished by passing command-line arguments to main( ).</p>
<p>A command-line argument is the information that directly follows the program's name on the command line when it is executed. To access the command-line arguments inside a Java program is quite easy.they are stored as strings in the String array passed to main( ).</p>
<h2>Example:</h2>
<p>The following program displays all of the command-line arguments that it is called with:</p>
<pre class="prettyprint notranslate">
public class CommandLine {

   public static void main(String args[]){ 
      for(int i=0; i&lt;args.length; i++){
         System.out.println("args[" + i + "]: " +
                                           args[i]);
      }
   }
}
</pre>
<p>Try executing this program as shown here:</p>
<pre class="prettyprint notranslate">
$java CommandLine this is a command line 200 -100
</pre>
<p>This would produce the following result:</p>
<pre class="result notranslate">
args[0]: this
args[1]: is
args[2]: a
args[3]: command
args[4]: line
args[5]: 200
args[6]: -100
</pre>
<h2>The Constructors:</h2>
<p>A constructor initializes an object when it is created. It has the same name as its class and is syntactically similar to a method. However, constructors have no explicit return type.</p>
<p>Typically, you will use a constructor to give initial values to the instance variables defined by the class, or to perform any other startup procedures required to create a fully formed object.</p>
<p>All classes have constructors, whether you define one or not, because Java automatically provides a default constructor that initializes all member variables to zero. However, once you define your own constructor, the default constructor is no longer used.</p>
<h2>Example:</h2>
<p>Here is a simple example that uses a constructor without parameters:</p>
<pre class="prettyprint notranslate" id="cons1">
// A simple constructor.
class MyClass {
   int x;
   
   // Following is the constructor
   MyClass() {
      x = 10;
   }
}
</pre>
<p>You would call constructor to initialize objects as follows:</p>
<pre class="prettyprint notranslate tryit" title="cons1">
public class ConsDemo {

   public static void main(String args[]) {
      MyClass t1 = new MyClass();
      MyClass t2 = new MyClass();
      System.out.println(t1.x + " " + t2.x);
   }
}
</pre>
<h3>parametarized constructor</h3>
<p>Most often, you will need a constructor that accepts one or more parameters. Parameters are added to a constructor in the same way that they are added to a method, just declare them inside the parentheses after the constructor's name.</p>
<h2>Example:</h2>
<p>Here is a simple example that uses a constructor with parameter:</p>
<pre class="prettyprint notranslate" id="cons2">
// A simple constructor.
class MyClass {
   int x;
   
   // Following is the constructor
   MyClass(int i ) {
      x = i;
   }
}
</pre>
<p>You would call constructor to initialize objects as follows:</p>
<pre class="prettyprint notranslate tryit" title="cons2">
public class ConsDemo {

   public static void main(String args[]) {
      MyClass t1 = new MyClass( 10 );
      MyClass t2 = new MyClass( 20 );
      System.out.println(t1.x + " " + t2.x);
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
10 20
</pre>

<h2>The this keyword</h2>
<p><b>this</b> is a keyword in Java which is used as a reference to the object of the current class, with in an instance method or a constructor. Using <i>this</i> you can refer the members of a class such as constructors, variables and methods.</p>
<p><b>Note</b>The keyword <i>this</i> is used only within instance methods or constructors</p>
<img src="/java/images/this.jpg" alt="Java Tutorial" />
<p>&nbsp;</p>
In general the keyword <i>this</i> is used to :
<ul class="list">
<li><p>Differentiate the instance variables from local variables if they have same names, within a constructor or a method.</p></li></ul>
<pre class="prettyprint notranslate">
class Student{

   int age;   
   Student(int age){
   this.age=age;  
   }

}
</pre>
<ul class="list">
<li><p>Call  one type of constructor( parametrized constructor or default ) from other in a class. It is known as explicit constructor invocation .</p></li></ul>
<pre class="prettyprint notranslate">
class Student{

   int age
   Student(){
   this(20);
   }
   
   Student(int age){
   this.age=age;  
   }

}
</pre>
</ul>

<h2>Example</h2>
<p>Here is an example that uses <i>this</i> keyword to access the members of a class. Copy and paste the below given program in a file with name This_Example.java</p>
<pre class="prettyprint notranslate tryit">
public class This_Example {
  
   //Instance variable num
   int num=10;
  
   This_Example(){
      System.out.println("This is an example program on keyword this ");  
   }

   This_Example(int num){
      //Invoking the default constructor
      this();
      
      //Assigning the local variable <i>num</i> to the instance variable <i>num</i>
      this.num=num;    
   }
   
   public void greet(){
      System.out.println("Hi Welcome to Tutorialspoint");
   }
      
   public void print(){
      //Local variable num
      int num=20;
      
      //Printing the instance variable
      System.out.println("value of local variable num is : "+num);
      
      //Printing the local variable
      System.out.println("value of instance variable num is : "+this.num);
      
      //Invoking the greet method of a class
      this.greet();     
   }
   
   public static void main(String[] args){
      //Instantiating the class
      This_Example obj1=new This_Example();
      
      //Invoking the print method
      obj1.print();
    
      //Passing a new value to the num variable through parametrized constructor
      This_Example obj2=new This_Example(30);
      
      //Invoking the print method again
      obj2.print(); 
   }

}

</pre>
This would produce the following result:
<pre class="result notranslate">
This is an example program on keyword this 
value of local variable num is : 20
value of instance variable num is : 10
Hi Welcome to Tutorialspoint
This is an example program on keyword this 
value of local variable num is : 20
value of instance variable num is : 30
Hi Welcome to Tutorialspoint
</pre> 


<h2>Variable Arguments(var-args):</h2>
<p>JDK 1.5 enables you to pass a variable number of arguments of the same type to a method. The parameter in the method is declared as follows:</p>
<pre class="prettyprint notranslate">
typeName... parameterName
</pre>
<p>In the method declaration, you specify the type followed by an ellipsis (...) Only one variable-length parameter may be specified in a method, and this parameter must be the last parameter. Any regular parameters must precede it.</p>
<h2>Example:</h2>
<pre class="prettyprint notranslate tryit">
public class VarargsDemo {

   public static void main(String args[]) {
      // Call method with variable args  
    printMax(34, 3, 3, 2, 56.5);
      printMax(new double[]{1, 2, 3});
   }

   public static void printMax( double... numbers) {
   if (numbers.length == 0) {
      System.out.println("No argument passed");
      return;
   }

   double result = numbers[0];

   for (int i = 1; i &lt;  numbers.length; i++)
      if (numbers[i] &gt;  result)
      result = numbers[i];
      System.out.println("The max value is " + result);
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
The max value is 56.5
The max value is 3.0
</pre>
<h2>The finalize( ) Method:</h2>
<p>It is possible to define a method that will be called just before an object's final destruction by the garbage collector. This method is called <b>finalize( )</b>, and it can be used to ensure that an object terminates cleanly.</p>
<p>For example, you might use finalize( ) to make sure that an open file owned by that object is closed.</p>
<p>To add a finalizer to a class, you simply define the finalize( ) method. The Java runtime calls that method whenever it is about to recycle an object of that class.</p>
<p>Inside the finalize( ) method, you will specify those actions that must be performed before an object is destroyed.</p>
<p>The finalize( ) method has this general form:</p>
<pre class="prettyprint notranslate">
protected void finalize( )
{
   // finalization code here
}
</pre>
<p>Here, the keyword protected is a specifier that prevents access to finalize( ) by code defined outside its class.</p>
<p>This means that you cannot know when or even if finalize( ) will be executed. For example, if your program ends before garbage collection occurs, finalize( ) will not execute.</p>
</p>
</p>
</p>
</p>
</li>
</ul>
</p>
</p>
</div>
</div>

<br>
<center><img src="images/line2.png" width="700" height="10"></center>
<br>
<!--page eighteen-->
<div data-role="page" id="eighteen">
<div style="background-color:white; border-radius: 15px; width: 800px; margin-right: auto; margin-left: auto; color:black; padding:70px; " >
<center><h1><u>FILES & I/O</u></h1></center>


<p>The java.io package contains nearly every class you might ever need to perform input and output (I/O) in Java. All these streams represent an input source and an output destination. The stream in the java.io package supports many data  such as primitives, Object, localized characters, etc.</p>

<h2>Stream</h2>
<p>A stream can be defined as a sequence of data. there are two kinds of Streams<ul class="list">
<li><p><b>InPutStream:</b> The InputStream is used to read data from a source.</p></li>
<li><p><b>OutPutStream:</b> the OutputStream is used for writing data to a destination.</p></li>
</ul>
<p>&nbsp;</p>
<img src="/java/images/streams.png" alt="Java I/O Streams" />
</center>
<p>&nbsp;</p>
<p>Java provides strong but flexible support for I/O related to Files and networks but this tutorial covers very basic functionality related to streams and I/O. We would see most commonly used example one by one:</p>
<h2>Byte Streams</h2>
<p>Java byte streams are used to perform input and output of 8-bit bytes. Though there are many classes  related to byte streams but the most frequently used classes are , <b>FileInputStream</b> and <b>FileOutputStream</b>. Following is an example which makes use of these two classes to copy an input file into an output file:</p>
<pre class="prettyprint notranslate">
import java.io.*;

public class CopyFile {
   public static void main(String args[]) throws IOException
   {
      FileInputStream in = null;
      FileOutputStream out = null;

      try {
         in = new FileInputStream("input.txt");
         out = new FileOutputStream("output.txt");
         
         int c;
         while ((c = in.read()) != -1) {
            out.write(c);
         }
      }finally {
         if (in != null) {
            in.close();
         }
         if (out != null) {
            out.close();
         }
      }
   }
}
</pre>
<p>Now let's have a file <b>input.txt</b> with the following content:</p>
<pre class="prettyprint notranslate">
This is test for copy file.
</pre>
<p>As a next step, compile above program and execute it, which will result in creating output.txt file with the same content as we have in input.txt. So let's put above code in CopyFile.java file and do the following:</p>
<pre class="prettyprint notranslate">
$javac CopyFile.java
$java CopyFile
</pre>
<h2>Character Streams</h2>
<p>Java <b>Byte</b> streams  are used to perform input and output of 8-bit bytes, where as Java <b>Character</b> streams are used to perform input and output for 16-bit unicode. Though there are many classes  related to character streams but the most frequently used classes are , <b>FileReader </b> and <b>FileWriter.</b>. Though internally FileReader uses FileInputStream and FileWriter uses FileOutputStream but here major difference is that FileReader reads two bytes at a time and  FileWriter writes two bytes at a time.</p>

<p>We can re-write above example which makes use of these two classes to copy an input file (having unicode characters) into an output file:</p>
<pre class="prettyprint notranslate">
import java.io.*;

public class CopyFile {
   public static void main(String args[]) throws IOException
   {
      FileReader in = null;
      FileWriter out = null;

      try {
         in = new FileReader("input.txt");
         out = new FileWriter("output.txt");
         
         int c;
         while ((c = in.read()) != -1) {
            out.write(c);
         }
      }finally {
         if (in != null) {
            in.close();
         }
         if (out != null) {
            out.close();
         }
      }
   }
}
</pre>
<p>Now let's have a file <b>input.txt</b> with the following content:</p>
<pre class="prettyprint notranslate">
This is test for copy file.
</pre>
<p>As a next step, compile above program and execute it, which will result in creating output.txt file with the same content as we have in input.txt. So let's put above code in CopyFile.java file and do the following:</p>
<pre class="prettyprint notranslate">
$javac CopyFile.java
$java CopyFile
</pre>
<h2>Standard Streams</h2>
<p>All the programming languages provide support for standard I/O where user's program can take input from a keyboard and then produce output on the computer screen. If you are aware if C or C++ programming languages, then you must be aware of three standard  devices STDIN, STDOUT and STDERR. Similar way Java provides following three standard streams </p>
<ul class="list">
<li><p><b>Standard Input:</b> This is used to feed the data to user's program and usually a keyboard is used as standard input stream and represented as <b>System.in</b>.</p></li>
<li><p><b>Standard Output:</b> This is used to output the data produced by the user's program and usually a computer screen is used to standard output stream and represented as <b>System.out</b>.</p></li>
<li><p><b>Standard Error:</b> This is used to output the error data produced by the user's program and usually a computer screen is used to standard error stream and represented as <b>System.err</b>.</p></li>
</ul>
<p>Following is a simple program which creates <b>InputStreamReader</b> to read standard input stream until the user types a "q":</p>
<pre class="prettyprint notranslate tryit">
import java.io.*;

public class ReadConsole {
   public static void main(String args[]) throws IOException
   {
      InputStreamReader cin = null;

      try {
         cin = new InputStreamReader(System.in);
         System.out.println("Enter characters, 'q' to quit.");
         char c;
         do {
            c = (char) cin.read();
            System.out.print(c);
         } while(c != 'q');
      }finally {
         if (cin != null) {
            cin.close();
         }
      }
   }
}
</pre>
<p>Let's keep above code in ReadConsole.java file and try to compile and execute it as below. This program continues reading and outputting same character until we press 'q':</p>
<pre class="prettyprint notranslate">
$javac ReadConsole.java
$java ReadConsole
Enter characters, 'q' to quit.
1
1
e
e
q
q
</pre>
<h2>Reading and Writing Files:</h2>
<p>As described earlier, A stream can be defined as a sequence of data. The <b>InputStream</b> is used to read data from a source and the <b>OutputStream</b> is used for writing data to a destination.</p>
<p>Here is a hierarchy of classes to deal with Input and Output streams.</p>

<center>
<img src="/java/images/file_io.jpg" alt="Java I/O Streams" />
</center>
<p>The two important streams are <b>FileInputStream</b> and <b>FileOutputStream</b>, which would be discussed in this tutorial:</p>
<h2>FileInputStream:</h2>
<p>This stream is used for reading data from the files. Objects can be created using the keyword new and there are several types of constructors available.</p>
<p>Following constructor takes a file name as a string to create an input stream object to read the file.:</p>
<pre class="prettyprint notranslate">
InputStream f = new FileInputStream("C:/java/hello");
</pre>
<p>Following constructor takes a file object to create an input stream object to read the file. First we create a file object using File() method as follows:</p>
<pre class="prettyprint notranslate">
File f = new File("C:/java/hello");
InputStream f = new FileInputStream(f);
</pre>
<p>Once you have <i>InputStream</i> object in hand, then there is a list of helper methods which can be used to read to stream or to do other operations on the stream.</p>
<table class="table table-bordered">
<tr>
<th>SN</th>
<th>Methods with Description</th>
</tr>
<tr>
<td>1</td>
<td><b>public void close() throws IOException{}</b>
<p>This method closes the file output stream. Releases any system resources associated with the file. Throws an IOException.</p>
</td>
</tr>
<tr>
<td>2</td>
<td><b>protected void finalize()throws IOException {}</b>
<p>This method cleans up the connection to the file. Ensures that the close method of this file output stream is called when there are no more references to this stream. Throws an IOException.</p>
</td>
</tr>
<tr>
<td>3</td>
<td><b>public int read(int r)throws IOException{}</b>
<p>This method reads the specified byte of data from the InputStream. Returns an int.
Returns the next byte of data and -1 will be returned if it's end of file.</p> 
</td>
</tr>
<tr>
<td>4</td>
<td><b>public int read(byte[] r) throws IOException{}</b>
<p>This method reads r.length bytes from the input stream into an array. Returns the total number of bytes read. If end of file -1 will be returned.</p>
</td>
</tr>
<tr>
<td>5</td>
<td><b>public int available() throws IOException{}</b>
<p>Gives the number of bytes that can be read from this file input stream. Returns an int.</p>
</td>
</tr>
</table>
<p>There are other important input streams available, for more detail you can refer to the following links:</p>
<ul class="list">
<li><p><a href="/java/java_bytearrayinputstream.htm" title="ByteArrayInputStream">ByteArrayInputStream</a></p></li>
<li><p><a href="/java/java_datainputstream.htm" title="DataInputStream">DataInputStream</a></p></li>
</ul>
<h2>FileOutputStream:</h2>
<p>FileOutputStream is used to create a file and write data into it. The stream would create a file, if it doesn't already exist, before opening it for output.</p>
<p>Here are two constructors which can be used to create a FileOutputStream object.</p>
<p>Following constructor takes a file name as a string to create an input stream object to write the file:</p>
<pre class="prettyprint notranslate">
OutputStream f = new FileOutputStream("C:/java/hello") 
</pre>
<p>Following constructor takes a file object to create an output stream object to write the file. First, we create a file object using File() method as follows:</p>
<pre class="prettyprint notranslate">
File f = new File("C:/java/hello");
OutputStream f = new FileOutputStream(f);
</pre>
<p>Once you have <i>OutputStream</i> object in hand, then there is a list of helper methods, which can be used to write to stream or to do other operations on the stream.</p>
<table class="table table-bordered">
<tr>
<th>SN</th>
<th>Methods with Description</th>
</tr>
<tr>
<td>1</td>
<td><b>public void close() throws IOException{}</b>
<p>This method closes the file output stream. Releases any system resources associated with the file. Throws an IOException</p>
</td>
</tr>
<tr>
<td>2</td>
<td><b>protected void finalize()throws IOException {}</b>
<p>This method cleans up the connection to the file. Ensures that the close method of this file output stream is called when there are no more references to this stream. Throws an IOException.</p>
</td>
</tr>
<tr>
<td>3</td>
<td><b>public void write(int w)throws IOException{}</b>
<p>This methods writes the specified byte to the output stream.</p>
</td>
</tr>
<tr>
<td>4</td>
<td><b>public void write(byte[] w)</b>
<p>Writes w.length bytes from the mentioned byte array to the OutputStream.</p>
</td>
</tr>
</table>
<p>There are other important output streams available, for more detail you can refer to the following links:</p>
<ul class="list">
<li><p><a href="/java/java_bytearrayoutputstream.htm" title="ByteArrayOutputStream">ByteArrayOutputStream</a></p></li>
<li><p><a href="/java/java_dataoutputstream.htm" title="DataOutputStream">DataOutputStream</a></p></li>
</ul>
<h2>Example:</h2>
<p>Following is the example to demonstrate InputStream and OutputStream:</p>
<pre class="prettyprint notranslate">
import java.io.*;

public class fileStreamTest{

   public static void main(String args[]){
   
   try{
      byte bWrite [] = {11,21,3,40,5};
      OutputStream os = new FileOutputStream("test.txt");
      for(int x=0; x &lt; bWrite.length ; x++){
         os.write( bWrite[x] ); // writes the bytes
      }
      os.close();
     
      InputStream is = new FileInputStream("test.txt");
      int size = is.available();

      for(int i=0; i&lt; size; i++){
         System.out.print((char)is.read() + "  ");
      }
      is.close();
   }catch(IOException e){
      System.out.print("Exception");
   }  
   }
}
</pre>
<p>The above code would create file test.txt and would write given numbers in binary format. Same would be output on the stdout screen.</p>
<h2>File Navigation and I/O:</h2>
<p>There are several other classes that we would be going through to get to know the basics of File Navigation and I/O.</p>
<ul class="list">
<li><p><a href="/java/java_file_class.htm" title="File Class">File Class</a></p></li>
<li><p><a href="/java/java_filereader_class.htm" title="FileReader  Class">FileReader  Class</a></p></li>
<li><p><a href="/java/java_filewriter_class.htm" title="FileWriter  Class">FileWriter  Class</a></p></li>
</ul>
<h2>Directories in Java:</h2>
<p>A directory is a File which can contains a list of other files and directories. You use <b>File</b> object to create directories, to list down files available in a directory. For complete detail check a list of all the methods which you can call on File object and what are related to directories.</p>
<h2>Creating Directories:</h2>
<p>There are two useful <b>File</b> utility methods, which can be used to create directories:</p>
<ul class="list">
<li><p>The <b>mkdir( )</b> method creates a directory, returning true on success and false on failure. Failure indicates that the path specified in the File object already exists, or that the directory cannot be created because the entire path does not exist yet.</p></li>
<li><p>The <b>mkdirs()</b> method creates both a directory and all the parents of the directory.</p></li>
</ul>
<p>Following example creates "/tmp/user/java/bin" directory:</p>
<pre class="prettyprint notranslate">
import java.io.File;

public class CreateDir {
   public static void main(String args[]) {
      String dirname = "/tmp/user/java/bin";
      File d = new File(dirname);
      // Create directory now.
      d.mkdirs();
  }
}
</pre>
<p>Compile and execute above code to create "/tmp/user/java/bin".</p>
<p><b>Note:</b> Java  automatically takes care of path separators on UNIX and Windows as per conventions. If you use a forward slash (/) on a Windows version of Java, the path will still resolve correctly.</p>
<h2>Listing Directories:</h2>
<p>You can use <b>list( )</b> method provided by <b>File</b> object to list down all the files and directories available in a directory as follows:</p>
<pre class="prettyprint notranslate">
import java.io.File;

public class ReadDir {
   public static void main(String[] args) {
      
      File file = null;
      String[] paths;
            
      try{      
         // create new file object
         file = new File("/tmp");
                                 
         // array of files and directory
         paths = file.list();
            
         // for each name in the path array
         for(String path:paths)
         {
            // prints filename and directory name
            System.out.println(path);
         }
      }catch(Exception e){
         // if any error occurs
         e.printStackTrace();
      }
   }
}
</pre>
<p>This would produce following result based on the directories and files available in your <b>/tmp</b> directory:</p>
<pre class="prettyprint notranslate">
test1.txt
test2.txt
ReadDir.java
ReadDir.class
</pre>
</p>
</div>
</div>

<br>
<center><img src="images/line2.png" width="700" height="10"></center>
<br>
<!--page nineteen-->
<div data-role="page" id="nineteen">
<div style="background-color:white; border-radius: 15px; width: 800px; margin-right: auto; margin-left: auto; color:black; padding:70px; " >
<center><h1><u>EXCEPTIONS</u></h1></center>


<p>An exception (or exceptional event) is a problem that arises during the <b>execution</b> of a program. When an Exception occurs the normal flow of the program is disrupted and the program/Application terminates abnormally, which is not recommended, therefore these exceptions are to be handled.</p>
<p> An exception can occur for many different reasons, below given are some scenarios where exception occurs.</p>
<ul class="list">
<li><p>A user has entered invalid data.</p></li>
<li><p>A file that needs to be opened cannot be found.</p></li>
<li><p>A network connection has been lost in the middle of communications or the JVM has run out of memory.</p></li>
</ul>
<p>Some of these exceptions are caused by user error, others by programmer error, and others by physical resources that have failed in some manner.</p>
<p>Based on these we have three categories of Exceptions  you need to understand them to know how exception handling works in Java, </p>
<ul class="list">
<li><p><b>Checked exceptions:</b> A checked exception is an exception that occurs at the compile time, these are also called as compile time exceptions. These exceptions cannot simply be ignored at the time of compilation, the Programmer should take care of (handle) these exceptions.<p>
</p> For example, if you use <b>FileReader</b> class in your program to read data from a file, if the file specified in its constructor doesn't exist, then an <i>FileNotFoundException </i>occurs, and compiler prompts the programmer to handle the exception.</p></li></ul>
<pre class="prettyprint notranslate">
import java.io.File;
import java.io.FileReader;

public class FilenotFound_Demo {

   public static void main(String args[]){    
      File file=new File("E://file.txt");
      FileReader fr = new FileReader(file); 
   }
   
}
</pre>
If you try to compile the above program you will get exceptions as shown below. 
<p>&nbsp;</p>

<pre class="prettyprint notranslate">
C:\>javac FilenotFound_Demo.java
FilenotFound_Demo.java:8: error: unreported exception FileNotFoundException; must be caught or declared to be thrown
      FileReader fr = new FileReader(file);
                      ^
1 error
</pre>
<p><b>Note:</b> Since the methods <b>read()</b> and <b>close()</b> of FileReader class throws IOException, you can observe that compiler notifies to handle IOException, along with FileNotFoundException.</p>

<ul class="list">
<li><p><b>Unchecked exceptions:</b> An Unchecked  exception is an exception that occurs at the time of execution, these are also called as Runtime Exceptions, these include programming bugs, such as logic errors or improper use of an API. runtime exceptions are ignored at the time of compilation.</p>
<p>For example, if you have declared an array of size 5 in your program, and trying to call the 6th element of the array then an <i>ArrayIndexOutOfBoundsExceptionexception</i> occurs.</p></li>
</ul>
<pre class="prettyprint notranslate">
public class Unchecked_Demo {
   
   public static void main(String args[]){
      int num[]={1,2,3,4};
      System.out.println(num[5]);
   }

}
</pre>
<p>If you compile and execute the above program you will get exception as shown below.</p>
<pre class="prettyprint notranslate">
Exception in thread "main" java.lang.ArrayIndexOutOfBoundsException: 5
  at Exceptions.Unchecked_Demo.main(Unchecked_Demo.java:8)
</pre>

<ul class="list">
<li><p><b>Errors:</b> These are not exceptions at all, but problems that arise beyond the control of the user or the programmer. Errors are typically ignored in your code because you can rarely do anything about an error. For example, if a stack overflow occurs, an error will arise. They are also ignored at the time of compilation.</p></li>
</ul>
<h2>Exception Hierarchy:</h2>
<p>All exception classes are subtypes of the java.lang.Exception class. The exception class is a subclass of the Throwable class. Other than the exception class there is another subclass called Error which is derived from the Throwable class.</p>
<p>Errors are abnormal conditions that happen in case of severe failures, these are not handled by the java programs. Errors are generated to indicate errors generated by the runtime environment. Example : JVM is out of Memory. Normally programs cannot recover from errors.</p>
<p>The Exception class has two main subclasses: IOException class and RuntimeException Class.</p>
<center>
<img src="/java/images/exceptions1.jpg" alt="Java Exceptions" />
</center>
<p>Here is a list of most common checked and unchecked <a href="/java/java_builtin_exceptions.htm">Java's Built-in Exceptions</a>.</p>
<h2>Exceptions Methods:</h2>
<p>Following is the list of important medthods available in the Throwable class.</p>
<table class="table table-bordered">
<tr>
<th>SN</th>
<th>Methods with Description</th>
</tr>
<tr>
<td>1</td>
<td><b>public String getMessage()</b>
<p>Returns a detailed message about the exception that has occurred. This message is initialized in the Throwable
constructor.</p>
</td>
</tr>
<tr>
<td>2</td>
<td><b>public Throwable getCause()</b>
<p>Returns the cause of the exception as represented by a Throwable object.</p>
</td>
</tr>
<tr>
<td>3</td>
<td><b>public String toString()</b>
<p>Returns the name of the class concatenated with the result of getMessage()</p>
</td>
</tr>
<tr>
<td>4</td>
<td><b>public void printStackTrace()</b>
<p>Prints the result of toString() along with the stack trace to System.err, the error output stream.</p>
</td>
</tr>
<tr>
<td>5</td>
<td><b>public StackTraceElement [] getStackTrace()</b>
<p>Returns an array containing each element on the stack trace. The element at index 0 represents
the top of the call stack, and the last element in the array represents the method at the bottom of the call stack.</p>
</td>
</tr>
<tr>
<td>6</td>
<td><b>public Throwable fillInStackTrace()</b>
<p>Fills the stack trace of this Throwable object with the current stack trace, adding to any previous information in the stack trace.</p>
</td>
</tr>
</table>
<h2>Catching Exceptions:</h2>
<p>A method catches an exception using a combination of the <b>try</b> and <b>catch</b> keywords. A try/catch block is placed around the code that might generate an exception. Code within a try/catch block is referred to as protected code, and the syntax for using try/catch looks like the following:</p>
<pre class="prettyprint notranslate">
try
{
   //Protected code
}catch(ExceptionName e1)
{
   //Catch block
}
</pre>
<p>The code which is prone to exceptions is placed in the try block, when an exception occurs, that exception occurred is handled by catch block associated with it. Every try block should be immediately followed either by a catch block or finally block. </p>
<p>A catch statement involves declaring the type of exception you are trying to catch. If an exception occurs in protected code, the catch block (or blocks) that follows the try is checked. If the type of exception that occurred is listed in a catch block, the exception is passed to the catch block much as an argument is passed into a method parameter.</p>
<h2>Example:</h2>
<p>The following is an array is declared with 2 elements. Then the code tries to access the 3rd element of the array which throws an exception.</p>
<pre class="prettyprint notranslate tryit">
// File Name : ExcepTest.java
import java.io.*;
public class ExcepTest{

   public static void main(String args[]){
      try{
         int a[] = new int[2];
         System.out.println("Access element three :" + a[3]);
      }catch(ArrayIndexOutOfBoundsException e){
         System.out.println("Exception thrown  :" + e);
      }
      System.out.println("Out of the block");
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
Exception thrown  :java.lang.ArrayIndexOutOfBoundsException: 3
Out of the block
</pre>
<h2>Multiple catch Blocks:</h2>
<p>A try block can be followed by multiple catch blocks. The syntax for multiple catch blocks looks like the following:</p>
<pre class="prettyprint notranslate">
try
{
   //Protected code
}catch(ExceptionType1 e1)
{
   //Catch block
}catch(ExceptionType2 e2)
{
   //Catch block
}catch(ExceptionType3 e3)
{
   //Catch block
}
</pre>
<p>The previous statements demonstrate three catch blocks, but you can have any number of them after a single try. If an exception occurs in the protected code, the exception is thrown to the first catch block in the list. If the data type of the exception thrown matches ExceptionType1, it gets caught there. If not, the exception passes down to the second catch statement. This continues until the exception either is caught or falls through all catches, in which case the current method stops execution and the exception is thrown down to the previous method on the call stack.</p>
<h2>Example:</h2>
<p>Here is code segment showing how to use multiple try/catch statements.</p>
<pre class="prettyprint notranslate">
try
{
   file = new FileInputStream(fileName);
   x = (byte) file.read();
}catch(IOException i)
{
   i.printStackTrace();
   return -1;
}catch(FileNotFoundException f) //Not valid!
{
   f.printStackTrace();
   return -1;
}
</pre>

<h2>Catching multiple type of exceptions</h2>
<p>Since Java 7 you can handle more than one exceptions using a single catch block, this feature simplifies the code. Below given is the syntax of writing  </p>
<pre class="prettyprint notranslate">
catch (IOException|FileNotFoundException ex) {
   logger.log(ex);
   throw ex;
</pre>
<h2>The throws/throw Keywords:</h2>
<p>If a method does not handle a checked exception, the method must declare it using the <b>throws </b> keyword. The throws keyword appears at the end of a method's signature.</p>
<p>You can throw an exception, either a newly instantiated one or an exception that you just caught, by using the <b>throw</b> keyword.</p>
</p> Try to understand the difference between throws and throw keywords, <i>throws</i> is used to postpone the handling of a checked exception and <i>throw</i> is used to invoke an exception explicitly.</p>
<p>The following method declares that it throws a RemoteException:</p>
<pre class="prettyprint notranslate">
import java.io.*;
public class className
{
   public void deposit(double amount) throws RemoteException
   {
      // Method implementation
      throw new RemoteException();
   }
   //Remainder of class definition
}
</pre>
<p>A method can declare that it throws more than one exception, in which case the exceptions are declared in a list separated by commas. For example, the following method declares that it throws a RemoteException and an InsufficientFundsException:</p>
<pre class="prettyprint notranslate">
import java.io.*;
public class className
{
   public void withdraw(double amount) throws RemoteException,
                              InsufficientFundsException
   {
       // Method implementation
   }
   //Remainder of class definition
}
</pre>
<h2>The finally block</h2>
<p>The finally block follows a try block or a catch block. A finally block of code always executes, irrespective of occurrence of an Exception.</p>
<p>Using a finally block allows you to run any cleanup-type statements that you want to execute, no matter what happens in the protected code.</p>
<p>A finally block appears at the end of the catch blocks and has the following syntax:</p>
<pre class="prettyprint notranslate">
try
{
   //Protected code
}catch(ExceptionType1 e1)
{
   //Catch block
}catch(ExceptionType2 e2)
{
   //Catch block
}catch(ExceptionType3 e3)
{
   //Catch block
}finally
{
   //The finally block always executes.
}
</pre>
<h2>Example:</h2>
<pre class="prettyprint notranslate tryit">
public class ExcepTest{

   public static void main(String args[]){
      int a[] = new int[2];
      try{
         System.out.println("Access element three :" + a[3]);
      }catch(ArrayIndexOutOfBoundsException e){
         System.out.println("Exception thrown  :" + e);
      }
      finally{
         a[0] = 6;
         System.out.println("First element value: " +a[0]);
         System.out.println("The finally statement is executed");
      }
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="prettyprint notranslate">
Exception thrown  :java.lang.ArrayIndexOutOfBoundsException: 3
First element value: 6
The finally statement is executed
</pre>
<p>Note the following:</p>
<ul class="list">
<li><p>A catch clause cannot exist without a try statement. </p></li>
<li><p>It is not compulsory to have finally clauses when ever a try/catch block is present. </p></li>
<li><p>The try block cannot be present without either catch clause or finally clause.</p></li>
<li><p>Any code cannot be present in between the try, catch, finally blocks. </p></li>
</ul>

<h2>The try-with-resources</h2>
<p>Generally when we use any resources like streams, connections etc.. we have to close them explicitly using finally block. In the program given below we are reading data from a file using <b>FileReader</b> and we are closing it using finally block.</p>
<pre class="prettyprint notranslate">
import java.io.File;
import java.io.FileReader;
import java.io.IOException;

public class ReadData_Demo {

   public static void main(String args[]){
      FileReader fr=null;   
      try{
         File file=new File("file.txt");
         fr = new FileReader(file);  char [] a = new char[50];
         fr.read(a); // reads the content to the array
         for(char c : a)
         System.out.print(c); //prints the characters one by one
      }catch(IOException e){
          e.printStackTrace();
       }
       finally{ 
          try{
              fr.close();
          }catch(IOException ex){   
               ex.printStackTrace();
           }
       }
    }

}
</pre>
<p><b>try-with-resources</b>, also referred as <b>automatic resource management</b>. is a new exception handling mechanism that was introduced in Java7, which automatically closes the resources used within the try catch block.</p>

<p>To use this statement you simply need to declare the required resources within the parenthesis, the created resource will be closed automatically at the end of the block, below given is the syntax of try-with-resources statement. </p>
<pre class ="prettyprint notranslate">
try(FileReader fr=new FileReader("file path"))
   {
   //use the resource
   }catch(){
      //body of catch 
    }
   }
</pre>
<p>Below given is the program that reads the data in a file using try-with-resources statement.</p>
<pre class ="prettyprint notranslate">
import java.io.FileReader;
import java.io.IOException;

public class Try_withDemo {

   public static void main(String args[]){
          
      try(FileReader fr=new FileReader("E://file.txt")){
         char [] a = new char[50];
         fr.read(a); // reads the contentto the array
         for(char c : a)
         System.out.print(c); //prints the characters one by one
      }catch(IOException e){
          e.printStackTrace();
       }   
   }
}
</pre>
<p>Following points are to be kept in mind while working with try-with resources statement.</p>
<ul class="list">
<li><p>To use a class with try-with-resources statement it should implement <b>AutoCloseable</b> interface and the <b>close()</b> method of it gets invoked automatically at runtime. </p></li>
<li><p>You can declare more than one class in try-with-resources statement.</p></li>
<li><p>while you declare multiple classes in the try block of try-with-resources statement these classes are closed in reverse order.</p></li>
<li><p>Except the deceleration of resources within the parenthesis every thing is same as normal try/catch block of a try block.</p></li>
<li><p>The resource declared in try gets instantiated just before the start of the try-block.</p></li>
<li><p>The resource declared at the try block is implicitly declared as final. </p></li>
</ul>

<h2>User-defined Exceptions:</h2>
<p>You can create your own exceptions in Java. Keep the following points in mind when writing your own exception classes:</p>
<ul class="list">
<li><p>All exceptions must be a child of Throwable.</p></li>
<li><p>If you want to write a checked exception that is automatically enforced by the Handle or Declare Rule, you need to extend the Exception class.</p></li>
<li><p>If you want to write a runtime exception, you need to extend the RuntimeException class.</p></li>
</ul>
<p>We can define our own Exception class as below:</p>
<pre class="prettyprint notranslate">
class MyException extends Exception{
}
</pre>
<p>You just need to extend the predefined  <b>Exception</b> class to create your own Exception. These are considered to be checked exceptions. The following <b>InsufficientFundsException</b> class is a user-defined exception that extends the Exception class, making it a checked exception. An exception class is like any other class, containing useful fields and methods.</p>
<h2>Example:</h2>
<pre class="prettyprint notranslate" id="exception">
// File Name InsufficientFundsException.java
import java.io.*;

public class InsufficientFundsException extends Exception
{
   private double amount;
   public InsufficientFundsException(double amount)
   {
      this.amount = amount;
   } 
   public double getAmount()
   {
      return amount;
   }
}
</pre>
<p>To demonstrate using our user-defined exception, the following CheckingAccount class contains a withdraw() method that throws an InsufficientFundsException.</p>
<pre class="prettyprint notranslate" id="account">
// File Name CheckingAccount.java
import java.io.*;

public class CheckingAccount
{
   private double balance;
   private int number;
   
   public CheckingAccount(int number)
   {
      this.number = number;
   }
   
   public void deposit(double amount)
   {
      balance += amount;
   }
   
   public void withdraw(double amount) throws InsufficientFundsException
   {
      if(amount &lt;= balance)
      {
         balance -= amount;
      }
      else
      {
         double needs = amount - balance;
         throw new InsufficientFundsException(needs);
      }
   }
   
   public double getBalance()
   {
      return balance;
   }
   
   public int getNumber()
   {
      return number;
   }
}
</pre>
<p>The following BankDemo program demonstrates invoking the deposit() and withdraw() methods of CheckingAccount.</p>
<pre class="prettyprint notranslate tryit" title="exception, account">
// File Name BankDemo.java
public class BankDemo
{
   public static void main(String [] args)
   {
      CheckingAccount c = new CheckingAccount(101);
      System.out.println("Depositing $500...");
      c.deposit(500.00);
      
      try
      {
         System.out.println("\nWithdrawing $100...");
         c.withdraw(100.00);
         System.out.println("\nWithdrawing $600...");
         c.withdraw(600.00);
      }catch(InsufficientFundsException e)
      {
         System.out.println("Sorry, but you are short $" + e.getAmount());
         e.printStackTrace();
      }
    }
}
</pre>
<p>Compile all the above three files and run BankDemo, this would produce the following result:</p>
<pre class="result notranslate">
Depositing $500...

Withdrawing $100...

Withdrawing $600...
Sorry, but you are short $200.0
InsufficientFundsException
        at CheckingAccount.withdraw(CheckingAccount.java:25)
        at BankDemo.main(BankDemo.java:13)
</pre>
<h2>Common Exceptions:</h2>
<p>In Java, it is possible to define two catergories of Exceptions and Errors.</p>
<ul class="list">
<li><p><b>JVM Exceptions:</b> - These are exceptions/errors that are exclusively or logically thrown by the JVM.  Examples : NullPointerException, ArrayIndexOutOfBoundsException, ClassCastException,</p></li>
<li><p><b>Programmatic exceptions:</b> - These exceptions are thrown explicitly by the application or the API programmers Examples: IllegalArgumentException, IllegalStateException.</p></li>
</ul>
</div>
</div>

<br>
<center><img src="images/line2.png" width="700" height="10"></center>
<br>
<!--page twenty-->
<div data-role="page" id="twenty">
<div style="background-color:white; border-radius: 15px; width: 800px; margin-right: auto; margin-left: auto; color:black; padding:70px; " >
<center><h1><u>INNER CLASS</u></h1></center>


<h2>Nested Classes</h2>
<p>In Java, just like methods, variables of a class too can have another class as its member. Writing a class within another is allowed in Java. The class written within is called the <b>nested class</b>, and the class that holds the inner class is called the <b>outer class</b>.</p>
<h2>Syntax</h2>
<p>The syntax to write a nested class is given below. Here the class <b>Outer_Demo</b> is the outer class and the class <b>Inner_Demo</b> is the nested class.</p>

<pre class="prettyprint notranslate">
class Outer_Demo{
   class Nested_Demo{   
   }   
}
</pre>
<p>Nested classes are divided into two types: </p>
<ul class="list">
<li><p><b>Non-static nested classes: </b>These are the non-static members of a class. </p></li>
<li><p><b>Static nested classes: </b>These are the static members of a class.</p></li>
</ul>
<img alt="tutorialspoint" src="images/inner_classes.jpg">
<p>&nbsp;</p>
<h2>Inner Classes (Non-static Nested Classes)</h2>
<p>Inner classes are a security mechanism in Java. We know a class cannot be associated with the access modifier <b>private</b>, but if we have the class as a member of other class, then the inner class can be made private. And this is also used to access the private members of a class. </p>
<p>Inner classes are of three types depending on how and where you define them. They are:</p>
<ul class=list>
<li>Inner Class</li>
<li>Method-local Inner Classlass</li>
<li>Anonymous Inner Class</li>
</ul>

<h2>Inner Class</h2>
<p>Creating an inner class is quite simple. You just need to write a class within a class. Unlike a class, an inner class can be private and once you declare an inner class private, it cannot be accessed from an object outside the class.</p>

<p>Given below is the program to create an inner class and access it. In the given example, we make the inner class private and access the class through a method.</p>

<pre class="prettyprint notranslate">
class Outer_Demo{
   int num;
   //inner class
   private class Inner_Demo{
      public void print(){     
         System.out.println("This is an inner class");
      }
   }
   //Accessing he inner class from the method within
   void display_Inner(){
      Inner_Demo inner = new Inner_Demo();
      inner.print();
   }
}
   
public class My_class{
   public static void main(String args[]){
      //Instantiating the outer class 
      Outer_Demo outer = new Outer_Demo();
      //Accessing the display_Inner() method.
      outer.display_Inner();
   }

}
</pre>
<p>Here you can observe that <b>Outer_Demo</b> is the outer class, <b>Inner_Demo</b> is the inner class, <b>display_Inner()</b> is the method inside which we are instantiating the inner class, and this method is invoked from the <b>main</b> method.</p>

<p>If you compile and execute the above program, you will get the following result.</p>
<pre class="result notranslate">
This is an inner class.
</pre>

<h3>Accessing the Private Members</h3>
<p>As mentioned earlier, inner classes are also used to access the private members of a class. Suppose a class is having private members to access them. Write an inner class in it, return the private members from a method within the inner class, say, <b>getValue()</b>, and finally from another class (from which you want to access the private members) call the getValue() method of the inner class.<p> 

<p>To instantiate the inner class, initially you have to instantiate the outer class. Thereafter, using the object of the outer class, you can instantiate the inner class as shown below.</p>
<pre class="prettyprint notranslate">
Outer_Demo outer=new Outer_Demo();
Outer_Demo.Inner_Demo inner=outer.new Inner_Demo();
</pre>

<p>The following program shows how to access the private members of a class using inner class.</p>
<pre class="prettyprint notranslate">
class Outer_Demo {
   //private variable of the outer class
   private int num= 175;  
   //inner class   
   public class Inner_Demo{
      public int getNum(){
         System.out.println("This is the getnum method of the inner class");
         return num;
      }
   }
}

public class My_class2{
   public static void main(String args[]){
      //Instantiating the outer class
      Outer_Demo outer=new Outer_Demo();
      //Instantiating the inner class
      Outer_Demo.Inner_Demo inner=outer.new Inner_Demo();
      System.out.println(inner.getNum());
   }
}
</pre>
<p>If you compile and execute the above program, you will get the following result.
<pre class="result notranslate">
The value of num in the class Test is: 175
</pre>

<h2>Method-local Inner Class</h2>
<p>In Java, we can write a class within a method and this will be a local type. Like local variables, the scope of the inner class is restricted within the method.</p> 

<p>A method-local inner class can be instantiated only within the method where the inner class is defined. The following program shows how to use a method-local inner class.</p>
<pre class = "prettyprint notranslate">
public class Outerclass{
   
   //instance method of the outer class 
   void my_Method(){
      int num = 23;
   
      //method-local inner class
      class MethodInner_Demo{
         public void print(){
            System.out.println("This is method inner class "+num);     
         }   
      }//end of inner class
     
      //Accessing the inner class
      MethodInner_Demo inner = new MethodInner_Demo();
      inner.print();
   }
   
   public static void main(String args[]){
      Outerclass outer = new Outerclass();
      outer.my_Method();         
   }
}
</pre>
<p>If you compile and execute the above program, you will get the following result.</p>
<pre class="result notranslate">
This is method inner class 23
</pre>

<h2>Anonymous Inner Class</h2>
<p>An inner class declared without a class name is known as an <b>anonymous inner class</b>. In case of anonymous inner classes, we declare and instantiate them at the same time. Generally they are used whenever you need to override the method of a class or an interface. The syntax of an anonymous inner class is as follows:</p>
<pre  class="prettyprint notranslate">
AnonymousInner an_inner = new AnonymousInner(){
   public void my_method(){
   ........
   ........
   }      
};
</pre>
<p>The following program shows how to override the method of a class using anonymous inner class.</p>
<pre  class="prettyprint notranslate">
abstract class AnonymousInner{
   public abstract void mymethod();
}

public class Outer_class {
   public static void main(String args[]){
      AnonymousInner inner = new AnonymousInner(){
         public void mymethod(){
            System.out.println("This is an example of anonymous inner class");        
         }      
      };
      inner.mymethod(); 
   }
}
</pre>
<p>If you compile and execute the above program, you will get the following result.</p>
<pre class="result notranslate">
This is an example of anonymous inner class
</pre>

<p>In the same way, you can override the methods of the concrete class as well as the interface using an anonymous inner class.</p> 
<h3>Anonymous Inner Class as Argument</h3>
<p>Generally if a method accepts an object of an interface, an abstract class, or a concrete class, then we can implement the interface, extend the abstract class, and pass the object to the method. If it is a class, then we can directly pass it to the method.</p>

<p>But in all the three cases, you can pass an anonymous inner class to the method. Here is the syntax of passing an anonymous inner class as a method argument:</p>
<pre class="prettyprint notranslate">
obj.my_Method(new My_Class(){
   public void Do(){
   .....
   .....
   }
});
</pre>
<p>The following program shows how to pass an anonymous inner class as a method argument.</p>
<pre class="prettyprint notranslate">
//interface
interface Message{
   String greet();  
}

public class My_class {
   //method which accepts the object of interface Message
   public void displayMessage(Message m){
      System.out.println(m.greet() +", This is an example of anonymous inner calss as an argument");     
   }

   public static void main(String args[]){
      //Instantiating the class
      My_class obj = new My_class();
    
      //Passing an anonymous inner class as an argument
      obj.displayMessage(new Message(){
         public String greet(){
            return "Hello";        
         }
      });
   }
}
</pre>
<p>If you compile and execute the above program, it gives you the following result.</p>
<pre class="result notranslate">
Hello This is an example of anonymous inner class as an argument
</pre>
<h2>Static Nested Class</h2>
<p>A static inner class is a nested class which is a static member of the outer class. It can be accessed without instantiating the outer class, using other static members. Just like static members, a static nested class does not have access to the instance variables and methods of the outer class. The syntax of static nested class is as follows:</p>
<pre class="prettyprint notranslate">
class MyOuter {
   static class Nested_Demo{
   }
}
</pre>
<p>Instantiating a static nested class is a bit different from instantiating an inner class. The following program shows how to use a static nested class.</p>
<pre class="prettyprint notranslate">
public class Outer{
   static class Nested_Demo{
      public void my_method(){
         System.out.println("This is my nested class");
      }
   }
   
   public static void main(String args[]){
      Outer.Nested_Demo nested = new Outer.Nested_Demo();  
      nested.my_method();
   }
   
}
</pre>
<p>If you compile and execute the above program, you will get the following result.</p>
<pre class="result notranslate">
This is my nested class
</pre>
</p>
</p>
</p>
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