<?php 
session_start();
?>
<!DOCTYPE html>
<html lang=''>
<head>
    <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
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
      <a href="#one" style="text-decoration: none; color: #ffc04c; " ><li>-Introduction</li></a>  
      <div id="br"><br></div><a href="#two" style="text-decoration: none; color: #ffc04c"><li>-Environment Setup</li></a>  
      <div id="br"><br></div><a href="#three" style="text-decoration: none; color: #ffc04c"><li>-Syntax Overview</li></a>  
      <div id="br"><br></div><a href="#four" style="text-decoration: none; color: #ffc04c"><li>-PHP Syntax</li></a>  
      <div id="br"><br></div><a href="#five" style="text-decoration: none; color: #ffc04c"><li>-Connection</li></a>  
      <div id="br"><br></div><a href="#six" style="text-decoration: none; color: #ffc04c"><li>-Create Database</li></a>  
      <div id="br"><br></div><a href="#seven" style="text-decoration: none; color: #ffc04c"><li>-Drop MySQL Database</li></a>  
      <div id="br"><br></div><a href="#eight" style="text-decoration: none; color: #ffc04c"><li>-Selecting MySQL Database</li></a>
      <div id="br"><br></div><a href="#nine" style="text-decoration: none; color: #ffc04c"><li>-MySQL Data Types</li></a> 
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
<a href="files/php.pdf" id="modal" name="modal"><span><img src="images/pdf.png" align="right" width="180" height="80"></span></a>
<div style="background-color:white; border-radius: 15px; width: 800px; margin-right: auto; margin-left: auto; color:black; padding:70px; " >
<center><img src="images/php.png" width="250" height="250">
<h1><u>OVERVIEW OF MySQL</u></h1></center>

<p>PHP started out as a small open source project that evolved as more and more people found out how useful it was. Rasmus Lerdorf unleashed the first version of PHP way back in 1994.</p>
<ul class="list">
<li><p>PHP is a recursive acronym for "PHP: Hypertext Preprocessor".</p></li>
<li><p>PHP is a server side scripting language that is embedded in HTML. It is used to manage dynamic content, databases, session tracking, even build entire e-commerce sites.</p></li>
<li><p>It is integrated with a number of popular databases, including MySQL, PostgreSQL, Oracle, Sybase, Informix, and Microsoft SQL Server.</p></li>
<li><p>PHP is pleasingly zippy in its execution, especially when compiled as an Apache module on the Unix side. The MySQL server, once started, executes even very complex queries with huge result sets in record-setting time.</p></li>
<li><p>PHP supports a large number of major protocols such as POP3, IMAP, and LDAP. PHP4 added support for Java and distributed object architectures (COM and CORBA), making n-tier development a possibility for the first time.</p></li>
<li><p>PHP is forgiving: PHP language tries to be as forgiving as possible.</p></li>
<li><p>PHP Syntax is C-Like.</p></li>
</ul>
<h2>Common uses of PHP</h2>
<ul class="list">
<li><p>PHP performs system functions, i.e. from files on a system it can create, open, read, write, and close them.</p></li>
<li><p>PHP can handle forms, i.e. gather data from files, save data to a file, thru email you can send data, return data to the user.</p></li>
<li><p>You add, delete, modify elements within your database thru PHP.</p></li>
<li><p>Access cookies variables and set cookies.</p></li>
<li><p>Using PHP, you can restrict users to access some pages of your website.</p></li>
<li><p>It can encrypt data.</p></li>
</ul>
<h2>Characteristics of PHP</h2>
<p>Five important characteristics make PHP's practical nature possible &minus;</p>
<ul class="list">
<li>Simplicity</li>
<li>Efficiency</li>
<li>Security</li>
<li>Flexibility</li>
<li>Familiarity</li>
</ul>
<h2>"Hello World" Script in PHP</h2>
<p>To get a feel for PHP, first start with simple PHP scripts. Since "Hello, World!" is an essential example, first we will create a friendly little "Hello, World!" script.</p>
<p>As mentioned earlier, PHP is embedded in HTML.  That means that in amongst your normal HTML (or XHTML if you're cutting-edge) you'll have PHP statements like this &minus;</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   
   &lt;head&gt;
      &lt;title&gt;Hello World&lt;/title&gt;
   &lt;/head&gt;
   
   &lt;body&gt;
      &lt;?php echo "Hello, World!";?&gt;
   &lt;/body&gt;

&lt;/html&gt;
</pre>
<p>It will produce following result &minus;</p>
<pre class="result notranslate">
Hello, World!
</pre>
<p>If you examine the HTML output of the above example, you'll notice that the PHP code is not present in the file sent from the server to your Web browser. All of the PHP present in the Web page is processed and stripped from the page; the only thing returned to the client from the Web server is pure HTML output.</p>
<p>All PHP code must be included inside one of the three special markup tags ate are recognised by the PHP Parser.</p>
<pre class="prettyprint notranslate">
&lt;?php PHP code goes here ?&gt;

&lt;?    PHP code goes here ?&gt;

&lt;script language="php"&gt; PHP code goes here &lt;/script&gt;
</pre>
<p>A most common tag is the &lt;?php...?&gt; and we will also use the same tag in our tutorial.</p>
<p>From the next chapter we will start with  PHP Environment Setup on your machine and then we will dig out almost all concepts related to PHP to make you comfortable with the PHP language.</p>
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
<p>We have set up the PHP Programming environment on-line, so that you can compile and execute all the available examples on line. It gives you confidence in what you are reading and enables you to verify the programs with different options. Feel free to modify any example and execute it on-line.</p>
<p>Try the following example using our on-line compiler available at <a href="http://www.tutorialspoint.com/codingground.htm" target="_blank" > CodingGround.</a></p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   &lt;head&gt;
      &lt;title&gt;Online PHP Script Execution&lt;/title&gt;
   &lt;/head&gt;
   
   &lt;body&gt;
   
      &lt;?php
         echo "&lt;h1&gt;Hello, PHP!&lt;/h1&gt;";
      ?&gt;
   
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<p>For most of the examples given in this tutorial, you will find a <b>Try it</b> option in our website code sections at the top right corner that will take you to the online compiler. So just make use of it and enjoy your learning.</p> 
</blockquote>
<p>In order to develop and run PHP Web pages three vital components need to be installed on your computer system.</p>
<ul class="list">
<li><p><b>Web Server</b> &minus; PHP will work with virtually all Web Server software, including Microsoft's Internet Information Server (IIS) but then most often used is freely available Apache Server. Download Apache for free here &minus; <a rel="nofollow" href="http://httpd.apache.org/download.cgi" target="_blank">http://httpd.apache.org/download.cgi</a></p></li>
<li><p><b>Database</b> &minus; PHP will work with virtually all database software, including Oracle and Sybase but most commonly used is freely available MySQL database. Download MySQL for free here &minus; <a rel="nofollow" target="_blank" href="http://www.mysql.com/downloads/">http://www.mysql.com/downloads/</a></p></li>
<li><p><b>PHP Parser</b> &minus; In order to process PHP script instructions a parser must be installed to generate HTML output that can be sent to the Web Browser. This tutorial will guide you how to install PHP parser on your computer.</p></li>
</ul>
<h2>PHP Parser Installation</h2>
<p>Before you proceed it is important to make sure that you have proper environment setup on your machine to develop your web programs using PHP.</p>
<p>Type the following address into your browser's address box.</p>
<pre class="result notranslate">
http://127.0.0.1/info.php
</pre>
<p>If this displays a page showing your PHP installation related information then it means you have PHP and Webserver installed properly. Otherwise you have to follow given procedure to install PHP on your computer.</p>
<p>This section will guide you to install and configure PHP over the following four platforms &minus;</p>
<ul class="list">
<li><p><a href="/php/php_installation_linux.htm">PHP Installation on Linux or Unix with Apache</a></p></li>
<li><p><a href="/php/php_installation_mac.htm">PHP Installation on Mac OS X with Apache</a></p></li>
<li><p><a href="/php/php_installation_windows_iis.htm">PHP Installation on Windows NT/2000/XP with  IIS</a></p></li>
<li><p><a href="/php/php_installation_windows_apache.htm">PHP Installation on Windows NT/2000/XP with  Apache</a></p></li>
</ul>
<h3>Apache Configuration</h3>
<p>If you are using Apache as a Web Server then this section will guide you to edit Apache Configuration Files.</p>
<p>Just Check it here &minus; <a href="/php/php_apache_configuration.htm">PHP  Configuration in Apache Server</a></p>
<h3>PHP.INI File Configuration</h3>
<p>The PHP configuration file, php.ini, is the final and most immediate way to affect PHP's functionality.</p>
<p>Just Check it here &minus; <a href="/php/php_ini_configuration.htm">PHP.INI File Configuration</a></p>
<h3>Windows IIS Configuration</h3>
<p>To configure IIS on your Windows machine you can refer your IIS Reference Manual shipped along with IIS.</p>
<hr />
</div>
</div>

<br>
<center><img src="images/line2.png" width="700" height="10"></center>
<br>
<!-- page two-->
<div data-role="page" id="two">
<div style="background-color:white; width: 800px; margin-right: auto; margin-left: auto; color:black; padding:70px; " >

<p>This chapter will give you an idea of very basic syntax of PHP and very important to make your PHP foundation strong.</p>
<h2>Escaping to PHP</h2>
<p>The PHP parsing engine needs a way to differentiate PHP code from other elements in the page. The mechanism for doing so is known as 'escaping to PHP'. There are four ways to do this &minus;</p>
<h3>Canonical PHP tags</h3>
<p>The most universally effective PHP tag style is &minus;</p>
<pre class="result notranslate">
&lt;?php...?&gt;
</pre>
<p>If you use this style, you can be positive that your tags will always be correctly interpreted.</p>
<h3>Short-open (SGML-style) tags</h3>
<p>Short or short-open tags look like this &minus;</p>
<pre class="result notranslate">
&lt;?...?&gt;
</pre>
<p>Short tags are, as one might expect, the shortest option You must do one of two things to enable PHP to recognize the tags &minus;</p>
<ul class="list">
<li><p>Choose the --enable-short-tags configuration option when you're building PHP.</p></li>
<li><p>Set the short_open_tag setting in your php.ini file to on. This option must be disabled to parse XML with PHP because the same syntax is used for XML tags.</p></li>
</ul>
<h3>ASP-style tags</h3>
<p>ASP-style tags mimic the tags used by Active Server Pages to delineate code blocks. ASP-style tags look like this &minus;</p>
<pre class="result notranslate">
&lt;%...%&gt;
</pre>
<p>To use ASP-style tags, you will need to set the configuration option in your php.ini file.</p>
<h3>HTML script tags</h3>
<p>HTML script tags look like this &minus;</p>
<pre class="prettyprint notranslate">
&lt;script language="PHP"&gt;...&lt;/script&gt;
</pre>
<h2>Commenting PHP Code</h2>
<p>A <i>comment</i> is the portion of a program that exists only for the human reader and stripped out before displaying the programs result. There are two commenting formats in PHP &minus;</p>
<p><b>Single-line comments</b> &minus; They are generally used for short explanations or notes relevant to the local code. Here are the examples of single line comments.</p>
<pre class="prettyprint notranslate">
&lt;?
   # This is a comment, and
   # This is the second line of the comment
   
   // This is a comment too. Each style comments only
   print "An example with single line comments";
?&gt;
</pre>
<p><b>Multi-lines printing</b> &minus; Here are the examples to print multiple lines in a single print statement &minus;</p>
<pre class="prettyprint notranslate">
&lt;?
   # First Example
   print &lt;&lt;&lt;END
   This uses the "here document" syntax to output
   multiple lines with $variable interpolation. Note
   that the here document terminator must appear on a
   line with just a semicolon no extra whitespace!
   END;
   
   # Second Example
   print "This spans
   multiple lines. The newlines will be
   output as well";
?&gt;
</pre>
<p><b>Multi-lines comments</b> &minus; They are generally used to provide pseudocode algorithms and more detailed explanations when necessary. The multiline style of commenting is the same as in C. Here are the example of multi lines comments.</p>
<pre class="prettyprint notranslate">
&lt;?
   /* This is a comment with multiline
      Author : Mohammad Mohtashim
      Purpose: Multiline Comments Demo
      Subject: PHP
   */
   
   print "An example with multi line comments";
?&gt;
</pre>
<h2>PHP is whitespace insensitive</h2>
<p>Whitespace is the stuff you type that is typically invisible on the screen, including spaces, tabs, and carriage returns (end-of-line characters).</p>
<p>PHP whitespace insensitive means that it almost never matters how many whitespace characters you have in a row.one whitespace character is the same as many such characters.</p>
<p>For example, each of the following PHP statements that assigns the sum of 2 + 2 to the variable $four is equivalent &minus;</p>
<pre class="prettyprint notranslate">
$four = 2 + 2; // single spaces
$four &lt;tab&gt;=&lt;tab2&lt;tab&gt;+&lt;tab&gt;2 ; // spaces and tabs
$four =
2+
2; // multiple lines
</pre>
<h2>PHP is case sensitive</h2>
<p>Yeah it is true that PHP is a case sensitive language. Try out following example &minus;</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   &lt;body&gt;
      
      &lt;?php
         $capital = 67;
         print("Variable capital is $capital&lt;br&gt;");
         print("Variable CaPiTaL is $CaPiTaL&lt;br&gt;");
      ?&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<p>This will produce the following result &minus;</p>
<pre class="result notranslate">
Variable capital is 67
Variable CaPiTaL is
</pre>
<h2>Statements are expressions terminated by semicolons</h2>
<p>A <i>statement</i> in PHP is any expression that is followed by a semicolon (;).Any sequence of valid PHP statements that is enclosed by the PHP tags is a valid PHP program. Here is a typical statement in PHP, which in this case assigns a string of characters to a variable called $greeting &minus;</p>
<pre class="result notranslate">
$greeting = "Welcome to PHP!";
</pre>
<h2>Expressions are combinations of tokens</h2>
<p>The smallest building blocks of PHP are the indivisible tokens, such as numbers (3.14159), strings (.two.), variables ($two), constants (TRUE), and the special words that make up the syntax of PHP itself like if, else, while, for and so forth</p>
<h2>Braces make blocks</h2>
<p>Although statements cannot be combined like expressions, you can always put a sequence of statements anywhere a statement can go by enclosing them in a set of curly braces.</p>
<p>Here both statements are equivalent &minus;</p>
<pre class="prettyprint notranslate">
if (3 == 2 + 1)
   print("Good - I haven't totally lost my mind.&lt;br&gt;");
   
if (3 == 2 + 1) {
   print("Good - I haven't totally");
   print("lost my mind.&lt;br&gt;");
}
</pre>
<h2>Running PHP Script from Command Prompt</h2>
<p>Yes you can run your PHP script on your command prompt. Assuming you have following content in test.php file</p>
<pre class="prettyprint notranslate tryit">
&lt;?php
   echo "Hello PHP!!!!!";
?&gt;
</pre>
<p>Now run this script as command prompt as follows &minus;</p>
<pre class="result notranslate">
$ php test.php
</pre>
<p>It will produce the following result &minus;</p>
<pre class="result notranslate">
Hello PHP!!!!!
</pre>
<p>Hope now you have basic knowledge of PHP Syntax.</p>
<hr />
</div>
</div>

<br>
<center><img src="images/line2.png" width="700" height="10"></center>
<br>
<!-- page three-->
<div data-role="page" id="three">
<div style="background-color:white; width: 800px; margin-right: auto; margin-left: auto; color:black; padding:70px; " >
<center><h1><u>Syntax Overview</u></h1></center>
  <p>This chapter will give you an idea of very basic syntax of PHP and very important to make your PHP foundation strong.</p>
<h2>Escaping to PHP</h2>
<p>The PHP parsing engine needs a way to differentiate PHP code from other elements in the page. The mechanism for doing so is known as 'escaping to PHP'. There are four ways to do this &minus;</p>
<h3>Canonical PHP tags</h3>
<p>The most universally effective PHP tag style is &minus;</p>
<pre class="result notranslate">
&lt;?php...?&gt;
</pre>
<p>If you use this style, you can be positive that your tags will always be correctly interpreted.</p>
<h3>Short-open (SGML-style) tags</h3>
<p>Short or short-open tags look like this &minus;</p>
<pre class="result notranslate">
&lt;?...?&gt;
</pre>
<p>Short tags are, as one might expect, the shortest option You must do one of two things to enable PHP to recognize the tags &minus;</p>
<ul class="list">
<li><p>Choose the --enable-short-tags configuration option when you're building PHP.</p></li>
<li><p>Set the short_open_tag setting in your php.ini file to on. This option must be disabled to parse XML with PHP because the same syntax is used for XML tags.</p></li>
</ul>
<h3>ASP-style tags</h3>
<p>ASP-style tags mimic the tags used by Active Server Pages to delineate code blocks. ASP-style tags look like this &minus;</p>
<pre class="result notranslate">
&lt;%...%&gt;
</pre>
<p>To use ASP-style tags, you will need to set the configuration option in your php.ini file.</p>
<h3>HTML script tags</h3>
<p>HTML script tags look like this &minus;</p>
<pre class="prettyprint notranslate">
&lt;script language="PHP"&gt;...&lt;/script&gt;
</pre>
<h2>Commenting PHP Code</h2>
<p>A <i>comment</i> is the portion of a program that exists only for the human reader and stripped out before displaying the programs result. There are two commenting formats in PHP &minus;</p>
<p><b>Single-line comments</b> &minus; They are generally used for short explanations or notes relevant to the local code. Here are the examples of single line comments.</p>
<pre class="prettyprint notranslate">
&lt;?
   # This is a comment, and
   # This is the second line of the comment
   
   // This is a comment too. Each style comments only
   print "An example with single line comments";
?&gt;
</pre>
<p><b>Multi-lines printing</b> &minus; Here are the examples to print multiple lines in a single print statement &minus;</p>
<pre class="prettyprint notranslate">
&lt;?
   # First Example
   print &lt;&lt;&lt;END
   This uses the "here document" syntax to output
   multiple lines with $variable interpolation. Note
   that the here document terminator must appear on a
   line with just a semicolon no extra whitespace!
   END;
   
   # Second Example
   print "This spans
   multiple lines. The newlines will be
   output as well";
?&gt;
</pre>
<p><b>Multi-lines comments</b> &minus; They are generally used to provide pseudocode algorithms and more detailed explanations when necessary. The multiline style of commenting is the same as in C. Here are the example of multi lines comments.</p>
<pre class="prettyprint notranslate">
&lt;?
   /* This is a comment with multiline
      Author : Mohammad Mohtashim
      Purpose: Multiline Comments Demo
      Subject: PHP
   */
   
   print "An example with multi line comments";
?&gt;
</pre>
<h2>PHP is whitespace insensitive</h2>
<p>Whitespace is the stuff you type that is typically invisible on the screen, including spaces, tabs, and carriage returns (end-of-line characters).</p>
<p>PHP whitespace insensitive means that it almost never matters how many whitespace characters you have in a row.one whitespace character is the same as many such characters.</p>
<p>For example, each of the following PHP statements that assigns the sum of 2 + 2 to the variable $four is equivalent &minus;</p>
<pre class="prettyprint notranslate">
$four = 2 + 2; // single spaces
$four &lt;tab&gt;=&lt;tab2&lt;tab&gt;+&lt;tab&gt;2 ; // spaces and tabs
$four =
2+
2; // multiple lines
</pre>
<h2>PHP is case sensitive</h2>
<p>Yeah it is true that PHP is a case sensitive language. Try out following example &minus;</p>
<pre class="prettyprint notranslate tryit">
&lt;html&gt;
   &lt;body&gt;
      
      &lt;?php
         $capital = 67;
         print("Variable capital is $capital&lt;br&gt;");
         print("Variable CaPiTaL is $CaPiTaL&lt;br&gt;");
      ?&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<p>This will produce the following result &minus;</p>
<pre class="result notranslate">
Variable capital is 67
Variable CaPiTaL is
</pre>
<h2>Statements are expressions terminated by semicolons</h2>
<p>A <i>statement</i> in PHP is any expression that is followed by a semicolon (;).Any sequence of valid PHP statements that is enclosed by the PHP tags is a valid PHP program. Here is a typical statement in PHP, which in this case assigns a string of characters to a variable called $greeting &minus;</p>
<pre class="result notranslate">
$greeting = "Welcome to PHP!";
</pre>
<h2>Expressions are combinations of tokens</h2>
<p>The smallest building blocks of PHP are the indivisible tokens, such as numbers (3.14159), strings (.two.), variables ($two), constants (TRUE), and the special words that make up the syntax of PHP itself like if, else, while, for and so forth</p>
<h2>Braces make blocks</h2>
<p>Although statements cannot be combined like expressions, you can always put a sequence of statements anywhere a statement can go by enclosing them in a set of curly braces.</p>
<p>Here both statements are equivalent &minus;</p>
<pre class="prettyprint notranslate">
if (3 == 2 + 1)
   print("Good - I haven't totally lost my mind.&lt;br&gt;");
   
if (3 == 2 + 1) {
   print("Good - I haven't totally");
   print("lost my mind.&lt;br&gt;");
}
</pre>
<h2>Running PHP Script from Command Prompt</h2>
<p>Yes you can run your PHP script on your command prompt. Assuming you have following content in test.php file</p>
<pre class="prettyprint notranslate tryit">
&lt;?php
   echo "Hello PHP!!!!!";
?&gt;
</pre>
<p>Now run this script as command prompt as follows &minus;</p>
<pre class="result notranslate">
$ php test.php
</pre>
<p>It will produce the following result &minus;</p>
<pre class="result notranslate">
Hello PHP!!!!!
</pre>
<p>Hope now you have basic knowledge of PHP Syntax.</p>
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