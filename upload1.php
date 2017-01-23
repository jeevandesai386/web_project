<?php 
session_start();
?>
<html>
    <head>
    <title>File Upload</title>
        <link href="css/a.css" rel="stylesheet" type="text/css">

<style>
body
{
  background: url(images/li.jpg)no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  }
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

    .echo
  {
    color: white;
  }  
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
   <li><a href='#'><span><img src="images/home2.png" width="17" height="17"></span></a></li>
   <li class='active has-sub'><a href='profile.php'><span>Registered users</span></a></li>
   <li class='active has-sub'><a href='upload1.php'><span>Upload File</span></a>
   <li class='active has-sub'><a href='contact.php'><span>Contact Us</span></a>
   <li><a href='aboutus.php'><span>About Us</span></a></li>
</ul>
</div>
</li>
</li>
</ul>
</div><br><br><br><br>
        <center><form method="post" enctype="multipart/form-data">
            <table width="350" border="0" cellpadding="1"
                   cellspacing="1" class="box">
                <tr>
                    <td style="color:white;font-size: 30;">Please Select A File</td></tr>
                <tr>
                    <td>
                    <p style="font-size: 15;color: white;">NOTE: Please upload a file within 10MB.</p>
                        <input type="hidden" name="MAX_FILE_SIZE"
                               value="16000000">
                        <input name="userfile" type="file" id="userfile"> 
                    </td>
                    <td width="80">
                    
<input type="image" name="upload" class="box" id="upload" value="Upload" src="images/upload.png" style="border: 0;" style="width: 0;"  alt="Submit Form" height="80" width="120" /></td>
                </tr>
            </table>
        </form>
        </center>
        <br>
        <?php
if (isset($_POST['upload']) && $_FILES['userfile']['size'] > 0) {
    $fileName = $_FILES['userfile']['name'];
    $tmpName = $_FILES['userfile']['tmp_name'];
    $fileSize = $_FILES['userfile']['size'];
    $fileType = $_FILES['userfile']['type'];
    $fileType = (get_magic_quotes_gpc() == 0 ? mysql_real_escape_string(
                            $_FILES['userfile']['type']) : mysql_real_escape_string(
                            stripslashes($_FILES['userfile'])));
    $fp = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);
    if (!get_magic_quotes_gpc()) {
        $fileName = addslashes($fileName);
    }
    $con = mysql_connect('localhost', 'root', '') or die(mysql_error());
    $db = mysql_select_db('hub', $con);
    if ($db) {
        $query = "INSERT INTO upload (name, size, type, content ) " .
                "VALUES ('$fileName', '$fileSize', '$fileType', '$content')";
        mysql_query($query) or die('Error, query failed');
        mysql_close();
        echo "<center>";
        echo"<font color=white>";
        echo "<br>File $fileName uploaded<br>";
        echo "</font>";
        echo "</center>";
    } else {
        echo "file upload failed";
    }
}
?>
        <br>
        <footer class="footer-basic-centered">
      <p class="footer-links">
        <a href="index.html">Home</a>
        ·
        <a href="#">Rss</a>
        ·
        <a href="#">Software</a>
        ·
        <a href="aboutus.php">About</a>
        ·
        <a href="contact.php">Contact</a>
      </p>

      <p class="footer-company-name"><font color="white"> Pesit &copy; 2016</p></font>

    </footer>
    </body>
</html>