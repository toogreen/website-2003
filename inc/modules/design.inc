<?php
/*
        Copyright (C) 2000-2002 Liquid Bytes (R), Germany. All rights reserved.
        http://www.liquidbytes.net/
 
        This file is part of the liquidbytes.net Adaptive Website Framework (AWF)
        The author is Michael Mayer (michael@liquidbytes.net)
        Last update: 23.06.2002
*/

global $design;
global $self;

$handle = opendir(BASE_PATH.INC_PATH.DESIGN_PATH); 
while (false!==($file = readdir($handle))) { 
    if ($file != "." && $file != ".." && '.inc' == substr($file, -4)) { 
	$tok = strtok ($file,".");
	if($tok == $design['name']) {
	        $class = 'selectedNav';
                }
        else {
        	$class = 'normalNav';
                }
	echo '<a href="'.$self."docinput[design]=$tok".'" class="'.$class.'">'.$tok.'</a><br />'; 
    } 
}
closedir($handle);
?>
