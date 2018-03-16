<?php
$name = $_POST["name"];

$t = (int)date("G"); // Отримуєм годину на даний момент
if (6 <= $t && $t <= 12){
	echo "<p>Доброго ранку, $name!";
}elseif (12 < $t && $t <= 17) {
	echo "<p>Доброго дня, $name!";
}elseif (17 < $t && $t <= 23) {
	echo "<p>Доброго вечора, $name!";
}else{
	echo "<p>Доброї ночі, $name!";
}
echo "<a href='index.html'>Повернутись на головну</a>";
?>