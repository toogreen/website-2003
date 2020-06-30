<?
/*
        Copyright (C) 2000-2002 Liquid Bytes (R), Germany. All rights reserved.
        http://www.liquidbytes.net/
 
        This file is part of the liquidbytes.net Adaptive Website Framework (AWF)
        The author is Michael Mayer (michael@liquidbytes.net)
        Last update: 26.06.2002
*/

if($profile['editor'] !=  '1') {
        echo transform($document['body'], $document['datatype']['body']);
        }
else {
        create_editor_input('Plain','body','area_input');
        }
?>
