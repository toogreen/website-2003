<?php
/*
#!/usr/bin/php -q

        Copyright (C) 2000-2002 Liquid Bytes (R), Germany. All rights reserved.
        http://www.liquidbytes.net/

        This file is part of the liquidbytes.net Adaptive Website Framework (AWF)
        The author is Michael Mayer (michael@liquidbytes.net)
        Last update: 13.06.2002
*/

$filename = 'navigation.cache';

$_cache_time = 2592000;

if(file_exists($filename) && time() - filemtime($filename) < $_cache_time && $_cache_time != 0) {
        $admin_modules = unserialize(trim(join('', file($filename))));
        }
else {
	$dir = @opendir(".");
	while(($file = readdir($dir)) !== false) {
	$path_parts = pathinfo($file);
	if(is_file($file) && $path_parts['extension'] == 'php') {
		$meta = get_meta_tags($file);
		if(isset($meta['title'])) {
			$admin_modules[$meta['sort_order']]['filename'] = $file;
			$admin_modules[$meta['sort_order']]['title'] = $meta['title'];
			$admin_modules[$meta['sort_order']]['description'] = $meta['description'];
			}
		}
	}
	closedir($dir);

	ksort($admin_modules);
		
	reset($admin_modules);
		
	$fp = fopen ($filename, "w");
	fwrite($fp,serialize($admin_modules));
	fclose($fp);
	}

$pre = '';

while(list($key, $value) = each($admin_modules)) {
	if($value['filename'] == basename($_SERVER['PHP_SELF'])) $value['title'] = '<b>'.$value['title'].'</b>';
	echo($pre.'<a href="'.$value['filename'].'"><span title="'.$value['description'].'">'.$value['title']."</span></a>\n");
	$pre = ' | ';
	}


?>
