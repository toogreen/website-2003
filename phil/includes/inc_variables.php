<?php
$_GET ['cat'];
				if ($cat==1)  { 
					include("updates/limit_p1.html"); 
					$namesection="Editorial";
					}
				if ($cat==2)  { 
					include("updates/limit_p2.html"); 
					$namesection="Reporting";
				}
				if ($cat==3)  { 
					include("updates/limit_p3.html"); 
					$namesection="Travel";
				}
				if ($cat==4)  { 
					include("updates/limit_p4.html"); 
					$namesection="People";
				}
?>