 <?php

$host = "mysql";
$username = "botvn2017";
$password = "manhnghia2018";    
$dbname = "botvndb";
$connection = ($GLOBALS["___BMN_2312"] = mysqli_connect($host, $username, $password));
if (!$connection)
  {
  die('Could not connect: ' . mysqli_error($GLOBALS["___BMN_2312"]));
  }
mysqli_select_db($GLOBALS["___BMN_2312"], $dbname) or die(mysqli_error($GLOBALS["___BMN_2312"]));
mysqli_query($GLOBALS["___BMN_2312"], "SET NAMES utf8");




?> 