<?php
$a = (int)$_GET["a"];
$b = (int)$_GET["b"];
$c = (int)$_GET["c"];
$name = $_GET["name"];
 //Умова існування трикутника (a+b>c) and (a+c>b) and (c+b>a)
if ($a+$b>$c && $a+$c>$b && $c+$b>$a){
	echo "<p>Вітаю $name! Трикутник зі сторонами $a, $b, $c може існувати";
}else{
	echo "<p> $name, на жаль трикутника зі сторонами $a, $b, $c - не існує!";
}

?>