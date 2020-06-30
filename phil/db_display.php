<?
$username="root";
$password="";
$database="phil_test1";
// Connection a MySQL
$link = mysql_connect(localhost,$username,$password);
if (!$link) {
   die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';

//Sélection de la base de données
@mysql_select_db($database) or die( "Unable to select database");

//Sélection de tous les champs de la table "contact"
$query="SELECT * FROM contacts";
$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();

echo "<b><center>Database Output</center></b><br><br>";

$i=0;
while ($i < $num) {

$first=mysql_result($result,$i,"first");
$last=mysql_result($result,$i,"last");
$phone=mysql_result($result,$i,"phone");
$mobile=mysql_result($result,$i,"mobile");
$fax=mysql_result($result,$i,"fax");
$email=mysql_result($result,$i,"email");
$web=mysql_result($result,$i,"web");

echo "<b>$first $last</b><br>Phone: $phone<br>Mobile: $mobile<br>Fax: $fax<br>E-mail: $email<br>Web: $web<br><hr><br>";

++$i;
}

?>
