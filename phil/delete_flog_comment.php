<?
include("includes/inc_editvar.php");
include("includes/connect_db.php");

$query="DELETE FROM flog_comments WHERE fc_id='$fc_id'";
mysql_query($query);
echo "Record deleted";
mysql_close();
?>
<br><br>
<A href="flog.php?id=<? echo $flog_id;?>&edit=<? echo $editvar; ?>">Reload</A>