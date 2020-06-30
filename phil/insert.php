<?
$username="root";
$password="";
$database="phil_test1";

mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$query = "INSERT INTO articles VALUES ('$cat','$intro','$full','$link')";
mysql_query($query);

mysql_close();
?>