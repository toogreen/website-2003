<?php
/*
        Copyright (C) 2000-2002 Liquid Bytes (R), Germany. All rights reserved.
        http://www.liquidbytes.net/

        This file is part of the liquidbytes.net Adaptive Website Framework (AWF)
        The author is Michael Mayer (michael@liquidbytes.net)
        Last update: 23.06.2002
*/

echo '<?xml version="1.0" encoding="'.CHARSET.'"?>';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3c.org/TR/xhtml1/DTD/transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$page_title?></title>
	<meta name="format" value="text/xhtml" />
	<meta name="robots" value="index,follow" />
	<meta name="security" value="public" />
	<meta name="charset" value="<?=CHARSET?>" />
	<meta name="generator" value="adaptive website framework" />
	<meta name="description" content="<?=$meta_description?>" />
	<meta name="author" content="<?=$meta_author?>" />
	<meta name="keywords" content="<?=$meta_keywords?>" /><? 
	if(defined('URL_REWRITE') && URL_REWRITE == 1) { ?>

	<base href="<?=get_base_url()?>" />
<? }
	include(BASE_PATH.INC_PATH."popup.inc");
	include(BASE_PATH.INC_PATH."css.inc");
	?>

</head>
