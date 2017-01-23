<?php 
session_start();
?>
<!DOCTYPE html>
<html lang=''>
<head>
    <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MySQL</title>
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
      <a href="#one" style="text-decoration: none; color: #ffc04c; " ><li>-Introduction</li></a>  
      <div id="br"><br></div><a href="#two" style="text-decoration: none; color: #ffc04c"><li>-Installation</li></a>  
      <div id="br"><br></div><a href="#three" style="text-decoration: none; color: #ffc04c"><li>-Administration</li></a>  
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
<a href="files/mysql.pdf" id="modal" name="modal"><span><img src="images/pdf.png" align="right" width="180" height="80"></span></a>
<div style="background-color:white; border-radius: 15px; width: 800px; margin-right: auto; margin-left: auto; color:black; padding:70px; " >
<center><img src="images/mysql.png" width="250" height="250">
<h1><u>OVERVIEW OF MySQL</u></h1></center>
<h2>What is Database?</h2>
<p>A database is a separate application that stores a collection of data. Each database has one or more distinct APIs for creating, accessing, managing, searching and replicating the data it holds.</p>
<p>Other kinds of data stores can be used, such as files on the file system or large hash tables in memory but data fetching and writing would not be so fast and easy with those types of systems.</p>
<p>So nowadays, we use relational database management systems (RDBMS) to store and manage huge volume of data. This is called relational database because all the data is stored into different tables and relations are established using primary keys or other keys known as foreign keys.</p>
<p>A <b>Relational  DataBase Management System (RDBMS)</b> is a software that:</p>
<ul class="list">
<li><p>Enables you to implement a database with tables, columns and indexes.</p></li>
<li><p>Guarantees the Referential Integrity between rows of various tables.</p></li>
<li><p>Updates the indexes automatically.</p></li>
<li><p>Interprets an SQL query and combines information from various tables.</p></li>
</ul>
<h2>RDBMS Terminology:</h2>
<p>Before we proceed to explain MySQL database system, let's revise few definitions related to database.</p>
<ul class="list">
<li><p><b>Database:</b> A database is a collection of tables, with related data.</p></li>
<li><p><b>Table:</b> A table is a matrix with data. A table in a database looks like a simple spreadsheet.</p></li>
<li><p><b>Column:</b> One column (data element) contains data of one and the same kind, for example the column postcode.</p></li>
<li><p><b>Row:</b> A row (= tuple, entry or record) is a group of related data, for example the data of one subscription.</p></li>
<li><p><b>Redundancy:</b> Storing data twice, redundantly to make the system faster.</p></li>
<li><p><b>Primary Key:</b> A primary key is unique. A key value can not occur twice in one table. With a key, you can find at most one row. </p></li>
<li><p><b>Foreign Key:</b> A  foreign key is the linking pin between two tables.</p></li>
<li><p><b>Compound Key:</b> A compound key (composite key) is a key that consists of multiple columns, because one column is not sufficiently unique.</p></li>
<li><p><b>Index:</b> An index in a database resembles an index at the back of a book.</p></li>
<li><p><b>Referential Integrity:</b> Referential Integrity makes sure that a foreign key value always points to an existing row.</p></li>
</ul>
<h2>MySQL Database:</h2>
<p>MySQL is a fast, easy-to-use RDBMS being used for many small and big businesses. MySQL is developed, marketed, and supported by MySQL AB, which is a Swedish company. MySQL is becoming so popular because of many good reasons:</p>
<ul class="list">
<li><p>MySQL is released under an open-source license. So you have nothing to pay to use it.</p></li>
<li><p>MySQL is  a very powerful program in its own right. It handles a large subset of the functionality of the most expensive and powerful database packages.</p></li>
<li><p>MySQL uses a standard form of the well-known SQL data language.</p></li>
<li><p>MySQL works on many operating systems and with many languages including PHP, PERL, C, C++, JAVA, etc.</p></li>
<li><p>MySQL works very quickly and works well even with large data sets.</p></li>
<li><p>MySQL is very friendly to PHP, the most appreciated language for web development.</p></li>
<li><p>MySQL supports large databases, up to 50 million rows or more in a table. The default file size limit for a table is 4GB, but you can increase this (if your operating system can handle it) to a theoretical limit of 8 million terabytes (TB).</p></li>
<li><p>MySQL is customizable. The open-source GPL license allows programmers to modify the MySQL software to fit their own specific environments.</p></li>
</ul>
<h2>Before You  Begin:</h2>
<p>Before you begin this tutorial, you should have a basic knowledge of the information covered in our PHP and HTML tutorials.</p>
<p>This tutorial focuses heavily on using MySQL in a PHP environment. Many examples given in this tutorial will be useful for PHP Programmers.</p>
</div>
</div>

<br>
<center><img src="images/line2.png" width="700" height="10"></center>
<br>
<!-- page two-->
<div data-role="page" id="two">
<div style="background-color:white; width: 800px; margin-right: auto; margin-left: auto; color:black; padding:70px; " >

<center><h1><u>MySQL INSTALLATION</u></h1></center>

<h2>Downloading MySQL:</h2>
<p>All downloads for MySQL are located at <a href="software.php" target="_blank">MySQL Downloads</a>. Pick the version number for <i>MySQL Community Server</i> you want and, as exactly as possible, the platform you want.</p>
<h2>Installing MySQL on Linux/UNIX</h2>
<p>The recommended way to install MySQL on a Linux system is via RPM. MySQL AB makes the following RPMs available for download on its web site:</p>
<ul class="list">
<li><p><b>MySQL - </b> The MySQL database server, which manages databases and tables, controls user access, and processes SQL queries.</p></li>
<li><p><b>MySQL-client -</b> MySQL client programs, which make it possible to connect to and interact with the server.</p></li>
<li><p><b>MySQL-devel -</b> Libraries and header files that come in handy when compiling other programs that use MySQL.</p></li>
<li><p><b>MySQL-shared - </b> Shared libraries for the MySQL client.</p></li>
<li><p><b>MySQL-bench  - </b> Benchmark and performance testing tools for the MySQL database server.</p></li>
</ul>
<p>The MySQL RPMs listed here are all built on a SuSE Linux system, but they'll usually work on other Linux variants with no difficulty.</p>
<p>Now, follow the following steps to proceed for installation:</p>
<ul class="list">
<li><p>Login to the system using <b>root</b> user.</p></li>
<li><p>Switch to the directory containing the RPMs:</p></li>
<li><p>Install the MySQL database server by executing the following command. Remember to replace the filename in italics with the file name of your RPM.</p>
<pre class="prettyprint notranslate">
[root@host]# rpm -i <i>MySQL-5.0.9-0.i386.rpm</i>
</pre>
<p>Above command takes care of installing MySQL server, creating a user of MySQL, creating necessary configuration and starting MySQL server automatically.</p>
<p>You can find all the MySQL related binaries in /usr/bin and /usr/sbin. All the tables and databases will be created in /var/lib/mysql directory.</p>
</li>
<li><p>This is optional but recommended step to install the remaining RPMs in the same manner:</p>
<pre class="prettyprint notranslate">
[root@host]# rpm -i MySQL-client-5.0.9-0.i386.rpm
[root@host]# rpm -i MySQL-devel-5.0.9-0.i386.rpm
[root@host]# rpm -i MySQL-shared-5.0.9-0.i386.rpm
[root@host]# rpm -i MySQL-bench-5.0.9-0.i386.rpm
</pre>
</li>
</ul>
<h2>Installing MySQL on Windows:</h2>
<p>Default installation on any version of Windows is now much easier than it used to be, as MySQL now comes neatly packaged with an installer. Simply download the installer package, unzip it anywhere, and run setup.exe.</p>
<p>Default installer setup.exe will walk you through the trivial process and by default will install everything under C:\mysql.</p>
<p>Test the server by firing it up from the command prompt the first time. Go to the location of the mysqld server which is probably C:\mysql\bin, and type:</p>
<pre class="prettyprint notranslate">
mysqld.exe --console
</pre>
<p><b>NOTE:</b> If you are on NT, then you will have to use mysqld-nt.exe instead of mysqld.exe</p>
<p>If all went well, you will see some messages about startup and InnoDB. If not, you may have a permissions issue. Make sure that the directory that holds your data is accessible to whatever user (probably mysql) the database processes run under.</p>
<p>MySQL will not add itself to the start menu, and there is no particularly nice GUI way to stop the server either. Therefore, if you tend to start the server by double clicking the mysqld executable, you should remember to halt the process by hand by using mysqladmin, Task List, Task Manager, or other Windows-specific means.</p>
<h2>Verifying MySQL Installation:</h2>
<p>After MySQL has been successfully installed, the base tables have been initialized, and the server has been started, you can verify that all is working as it should via some simple tests.</p>
<h2>Use the mysqladmin Utility to Obtain Server Status:</h2>
<p>Use <b>mysqladmin</b> binary to check server version. This binary would be available in /usr/bin on linux and in C:\mysql\bin on windows.</p>
<pre class="prettyprint notranslate">
[root@host]# mysqladmin --version
</pre>
<p>It will produce the following result on Linux. It may vary depending on your installation:</p>
<pre class="prettyprint notranslate">
mysqladmin  Ver 8.23 Distrib 5.0.9-0, for redhat-linux-gnu on i386
</pre>
<p>If you do not get such message, then there may be some problem in your installation and you would need some help to fix it.</p>
<h2>Execute simple SQL commands using MySQL Client:</h2>
<p>You can connect to your MySQL server by using MySQL client using <b>mysql</b> command. At this moment, you do not need to give any password as by default it will be set to blank.</p>
<p>So just use following command</p>
<pre class="prettyprint notranslate">
[root@host]# mysql
</pre>
<p>It should be rewarded with a mysql&gt; prompt. Now, you are connected to the MySQL server and you can execute all the SQL command at mysql&gt; prompt as follows:</p>
<pre class="prettyprint notranslate">
mysql&gt; SHOW DATABASES;
+----------+
| Database |
+----------+
| mysql    |
| test     |
+----------+
2 rows in set (0.13 sec)
</pre>
<h2>Post-installation Steps:</h2>
<p>MySQL ships with a blank password for the root MySQL user. As soon as you have successfully installed the database and client, you need to set a root password as follows:</p>
<pre class="prettyprint notranslate">
[root@host]# mysqladmin -u root password "new_password";
</pre>
<p>Now to make a connection to your MySQL server, you would have to use the following command:</p>
<pre class="prettyprint notranslate">
[root@host]# mysql -u root -p
Enter password:*******
</pre>
<p>UNIX users will also want to put your MySQL directory in your PATH, so you won't have to keep typing out the full path every time you want to use the command-line client. For bash, it would be something like:</p>
<pre class="prettyprint notranslate">
export PATH=$PATH:/usr/bin:/usr/sbin
</pre>
<h2>Running MySQL at boot time:</h2>
<p>If you want to run MySQL server at boot time, then make sure you have following entry in /etc/rc.local file.</p>
<pre class="prettyprint notranslate">
/etc/init.d/mysqld start
</pre>
<p>Also,you should have mysqld binary in /etc/init.d/ directory.</p>
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