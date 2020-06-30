<?php
/* $Id: footer.inc.php,v 1.16 2002/06/19 17:19:47 rabus Exp $ */


// In this file you may add PHP or HTML statements that will be used to define
// the footer for phpMyAdmin pages.

/**
 * Close MySql non-persistent connections
 */
if (isset($GLOBALS['dbh']) && $GLOBALS['dbh']) {
    @mysql_close($GLOBALS['dbh']);
}
if (isset($GLOBALS['userlink']) && $GLOBALS['userlink']) {
    @mysql_close($GLOBALS['userlink']);
}
?>

</body>

</html>
<?php

/**
 * Sends bufferized data
 */
if (isset($GLOBALS['cfg']['OBGzip']) && $GLOBALS['cfg']['OBGzip']
    && isset($GLOBALS['ob_mode']) && $GLOBALS['ob_mode']) {
     PMA_outBufferPost($GLOBALS['ob_mode']);
}
?>
