<?php
/*
        Copyright (C) 2000-2002 Liquid Bytes (R), Germany. All rights reserved.
        http://www.liquidbytes.net/
 
        This file is part of the liquidbytes.net Adaptive Website Framework (AWF)
        The author is Michael Mayer (michael@liquidbytes.net)
        Last update: 23.06.2002
*/

	include("inc/functions.inc");
	include("inc/licence.key");
	include("inc/sessions.inc");
	include("inc/caching.inc");
	include("inc/config.inc");
	include(INC_PATH.INIT_INC);
	include(INC_PATH.DESIGN_INC);

?>
<?php include(BASE_PATH.INC_PATH."html_head.inc"); ?>
<body bgcolor="<?=$design['bgcolor']?>" marginheight="<?=$design['bodymarginheight']?>" marginwidth="<?=$design['bodymarginwidth']?>" topmargin="<?=$design['bodytopmargin']?>" bottommargin="<?=$design['bodybottommargin']?>" rightmargin="<?=$design['bodyrightmargin']?>" leftmargin="<?=$design['bodyleftmargin']?>" link="<?=$design['linkcolor']?>" vlink="<?=$design['vlinkcolor']?>" text="<?=$design['textcolor']?>"> 
<?php
	include(BASE_PATH.INC_PATH.CONTENT_INC);
?>
</body>
</html>
<?php
	include(BASE_PATH.INC_PATH.SHUTDOWN_INC);

?>



