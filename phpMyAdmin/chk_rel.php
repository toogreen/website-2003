<?php
/* $Id: chk_rel.php,v 1.2 2002/07/17 16:18:37 lem9 Exp $ */


/**
 * Gets some core libraries
 */
require('./libraries/grab_globals.lib.php');
require('./libraries/common.lib.php');
require('./db_details_common.php');
require('./libraries/relation.lib.php');


/**
 * Gets the relation settings
 */
$cfgRelation = PMA_getRelationsParam(TRUE);


/**
 * Displays the footer
 */
echo "\n";
require('./footer.inc.php');
?>
