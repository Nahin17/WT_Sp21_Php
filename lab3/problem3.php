<?php

$length = 17;
$width = 18;

if($length == $width)
{
     print " This shape is square ";
}	 

else 
{
	$area= $length * $width ;
	print " Area is : $area ";    //concat men 
	$perimeter = 2* ($length + $width);
	print " <br> Perimeter is : $perimeter" ;
}
?>