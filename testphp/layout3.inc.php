<?php 
$menu = "menu2.php"; 
$entete = "entete2.php";
?>
<body bgcolor = "white" topmargin=0 leftmargin=0 marginwidth=0
marginheight=0>
<table>
<tr>
<!-- entete -->
<td><?php include($entete); ?></td>
</tr>
<tr>
<td>

<!-- milieu -->
<table width=800>
<tr>
<td valign=top><?php include($menu); ?></td>
</tr>
<tr>
<td valign=top><?php include($main); ?></td>
</tr>
</table>

<!-- bas de page -->
</td>
</tr>
<tr>
<td><?php include($bottom); ?></td>
</tr>
</table>
</body>