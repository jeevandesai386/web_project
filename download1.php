<?php 
session_start();
?>
<!DOCTYPE html>
<html lang=''>
<head>
    <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Papers</title>
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

</style>

</head>
    <body>
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
  <div id="header">
    <table border="0">
      <center><img src="images/head1.png" height="125" width="600"></center>
    </table>
  </div>  
   <br>
   <div id='cssmenu'>
<ul>
   <li><a href='home.php'><span><img src="images/home2.png" width="17" height="17"></span></a></li>
   <li><a href='software.php'>Software</a></li>
   <li><a href='feed1.php'>RSS</a></li>
   <li><a href='contact.php'>Contact</a></li>
   <li><a href='aboutus.php'>About Us</a></li>
</ul>
</div>
<br>
    <div style="background-color:white; border-radius: 15px; width: 800px; margin-right: auto; margin-left: auto; color:black; padding:70px; ">
        <?php
        $con = mysql_connect('localhost', 'root', '') or die(mysql_error());
        $db = mysql_select_db('hub', $con);
        $query = "SELECT id, name FROM upload";
        $result = mysql_query($query) or die('Error, query failed');
        if (mysql_num_rows($result) == 0) {
            echo "Database is empty <br>";
        } else {
            while (list($id, $name) = mysql_fetch_array($result)) {
                ?>
                <br><img src="images/download1.png" height="100" width="90"></a><a href="download1.php?id=<?php echo urlencode($id); ?>"
                   ><font size="5"><?php echo urlencode($name); ?></font><img src="images/line2.png" height="4" width="800"> <br>

                <?php
            }
        }
        mysql_close();
        ?>

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