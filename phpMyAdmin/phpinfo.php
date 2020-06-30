<?php
/* $Id: phpinfo.php,v 1.8 2002/06/14 11:59:47 lem9 Exp $ */


/**
 * Gets core libraries and defines some variables
 */
require('./libraries/grab_globals.lib.php');
require('./libraries/common.lib.php');


/**
 * Displays PHP information
 */
$is_superuser = @PMA_mysql_query('USE mysql', $userlink);
if ($is_superuser || $cfg['ShowPhpInfo']) {
    phpinfo();
}
?>
