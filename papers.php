<?php 
session_start();
?>
<html>
    <head>
        <title>Papers</title>
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
<a href="index.php"><img src="images/logout.png" align="right" width="62" height="40"></a>
    <div id="txt" align="right" width=20></div>
    <div id="header">
        <table border="0">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/head1.png" height="125" width="600">
        </table>
    </div>  

    <div id='cssmenu'>
<ul>

   <li><a href='index.php' id="modal" name="modal"><span><img src="images/home2.png" width="17" height="17"></span></a></li>
   <li class='active has-sub'><a href='#'><span>Tutorial</span></a>
   <ul>
         <li class='has-sub'><a href='c.php'><span>C</span></a>
            
         </li>
         <li class='has-sub'><a href='c++.php'><span>C++</span></a>
            
         </li>
         <li class='has-sub'><a href='java1.html'><span>Java</span></a>
            
         </li>
         <li class='has-sub'><a href='php.php'><span>Php</span></a>
            
         </li>
         <li class='has-sub'><a href='mysql.php'><span>Mysql</span></a>
          
      </ul>
   </li>
   <li class='active has-sub'><a href='software.php'><span>Softwares</span></a>
   <li class='active has-sub'><a href='feed1.php'><span>RSS</span></a></li>
   <li class='active has-sub'><a href='papers.php'><span>Papers</span></a></li>
   <li class='active has-sub'><a href='contact.html'><span>Contact Us</span></a>
   <li><a href='aboutus.html'><span>About Us</span></a></li>
</ul>
</div>
<center>
        <?php
        $con = mysql_connect('localhost', 'root', '') or die(mysql_error());
        $db = mysql_select_db('hub', $con);
        $query = "SELECT id, name FROM upload";
        $result = mysql_query($query) or die('Error, query failed');
        if (mysql_num_rows($result) == 0) {
            echo "Database is empty <br>";
        } else {
          echo "<br>";
            while (list($id, $name) = mysql_fetch_array($result)) {
                ?>
                <a href="papers.php?id=<?php echo urlencode($id); ?>"
                   ><?php echo urlencode($name); ?></a> <br>
                <?php
            }
        }
        mysql_close();
        ?>
        </center>
        <footer class="footer-basic-centered">
      <p class="footer-links">
        <a href="index.php">Home</a>
        ·
        <a href="login.php">Rss</a>
        ·
        <a href="login.php">Software</a>
        ·
        <a href="about.html">About</a>
        ·
        <a href="contact.html">Contact</a>
      </p>

      <p class="footer-company-name"><font color="white"> Pesit &copy; 2016</p></font>

    </footer>
    </body>
</html>
           <?php
           if (isset($_GET['id'])) {
               $con = mysql_connect('localhost', 'root', '') or die(mysql_error());
               $db = mysql_select_db('hub', $con);
               $id = $_GET['id'];
               $query = "SELECT name, type, size, content " .
                       "FROM upload WHERE id = '$id'";
               $result = mysql_query($query) or die('Error, query failed');
               list($name, $type, $size, $content) = mysql_fetch_array($result);
               header("Content-length: $size");
               header("Content-type: $type");
               header("Content-Disposition: attachment; filename=$name");
               ob_clean();
               flush();
               echo $content;
               mysql_close();
               exit;
           }
           ?>
           <footer class="footer-basic-centered">
      <p class="footer-links">
        <a href="home.php">Home</a>
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