<html>
<body>
<?php
$length = 20;
$width  = 8;
if($length==$width) 
{
	echo "The shape is a square.";
}
else 
{
    $area = $length * $width;
    echo "Area of a rectangle is: ".$area; 
    $perimeter = 2 * ($length + $width); 
    echo "<br>Perimeter of a rectangle is: ".$perimeter;
}
?>
</body>