<?php
$name = $_POST["name"];
$x1 = (int)$_POST["x"];
$y1 = (int)$_POST["y"];

echo "Вітаємо, $name!";
grafick($x1,$y1);


function grafick($a,$b)
{
	$z = pow($a,2)+(15*$a)-7;
	if ($z == $b){
		echo "<p>Точка з координатами ($a, $b) належить графіку функції.";
	} else {
		echo "<p>Точка з координатами ($a, $b) не належить графіку функції.";
		}
 	
 }
 echo "<p><a href='index.html'>Повернутись на головну</a>"; 
?>
