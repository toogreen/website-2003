<?php
/*
        Copyright (C) 2000-2001 Liquid Bytes (R), Germany. All rights reserved.
        http://www.liquidbytes.net/
 
        This file is part of the liquidbytes.net Adaptive Website Framework (AWF)
        The author is Michael Mayer (michael@liquidbytes.net)
        Last update: 25.05.2002
*/

if(!isset($_GET['url']) || $_GET['url'] == '') { 
	echo 'Sorry, this is a redirection script. You can\'t expect any useful output.';
	exit(); 
	}

include('inc/database.inc');

mysql_query("UPDATE ".$db_table_prefix."redirect SET views=views+1 WHERE 
referer='".addslashes($_GET['referer'])."' AND url='".addslashes($_GET['url'])."'"); 
if(mysql_affected_rows() < 1) {
	mysql_query("INSERT INTO ".$db_table_prefix."redirect SET views=1, referer='".addslashes($_GET['referer'])."',
	url='".addslashes($_GET['url'])."'");
	if(mysql_affected_rows() < 1) {
		mysql_query("CREATE TABLE ".$db_table_prefix."redirect (id int not null auto_increment, 
		url text not null, referer text not null, views int default 1, primary key(id))");
		mysql_query("INSERT INTO ".$db_table_prefix."redirect SET views=1,
			referer='".addslashes($_GET['referer'])."', url='".addslashes($_GET['url'])."'");
		}
	}
header("Location: ".$_GET['url']); // Redirect browser to $url

mysql_close();

exit();

?>
