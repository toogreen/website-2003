<?
/*
        Copyright (C) 2000-2002 liquidbytes.net
        http://www.liquidbytes.net/
 
        This file is part of the liquidbytes.net Adaptive Website Framework (AFW)
        The author is Michael Mayer (michael@liquidbytes.net)
        Last update: 23.06.2002
*/

global $db_table_prefix;
global $flavour;
global $self;

$qresult = sql_query ("SELECT id, name, lang FROM ".$db_table_prefix."flavours WHERE published=1 ORDER BY name");
if ($qresult) {
        while ($row = sql_fetch_row($qresult)) {
			if($row[0] == $flavour) {
				$class = 'selectedNav';
				}
			else {
				$class = 'normalNav';
				}
			echo ('<a href="'.$self.'docinput[flavour]='.$row[0].'&docinput[lang]='.$row[2].'" class="'.$class.'">'.$row[1]."</a><br />\n");
			}  
		}
        sql_free_result($qresult);

?> 
