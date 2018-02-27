<?php
$name = $_POST["name"];
$litr = (int)$_POST["milk"]; //к-ть проданого молока в літрах
$vartist = 6; //вартість 1 літра молока
if (0 < $litr && $litr < 1000){
	$zp = $litr*$vartist*0.2;
	echo "<p>Зарплатня $name становить $zp гривень";
}elseif (1000 <= $litr && $litr <= 2000) {
	$zp = $litr*$vartist*0.25;
	echo "<p>Зарплатня $name становить $zp гривень";
}elseif ($litr > 2000) {
	$zp = $litr*$vartist*0.3;
	echo "Зарплатня $name становить $zp гривень";
}else{
	echo "<p>$name не продав жодного літра, і зарплату не отримає.";
}

?>