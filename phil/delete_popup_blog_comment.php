<?
include("includes/inc_editvar.php");
include("includes/connect_db.php");

$query="DELETE FROM blog_comments WHERE id='$id'";
mysql_query($query);
echo "Record deleted";
mysql_close();
?>
<br><br>
<A href="popup_blog_comments.php?blog_id=<?echo $blog_id;?>&edit=<? echo $editvar; ?>">Reload</A>