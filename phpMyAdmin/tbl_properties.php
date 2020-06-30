<?php
/* $Id: tbl_properties.php,v 1.180 2002/09/27 15:15:05 loic1 Exp $ */


/**
 * Runs common work
 */
require('./tbl_properties_common.php');
$err_url   = 'tbl_properties.php' . $err_url;
$url_query .= '&amp;goto=tbl_properties.php&amp;back=tbl_properties.php';

/**
 * Top menu
 */
require('./tbl_properties_table_info.php');

?>
<ul>

<!-- TABLE WORK -->
<?php
/**
 * Query box, bookmark, insert data from textfile
 */
$goto = 'tbl_properties.php';
require('./tbl_query_box.php');

?>
</ul>

<?php

/**
 * Displays the footer
 */
echo "\n";
require('./footer.inc.php');
?>
