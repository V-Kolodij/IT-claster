<h4>Введіть елементи масиву порядково, розділяючи пробілом: </h4>
<form action="#" method="post">
	<textarea name="mass" cols="50" rows="10"></textarea>
	<p><input type="submit" name="inp" value="Send"></p>
</form>


<?php
$s=$_POST["mass"];
//print_r($s);
$qwert=explode("\n", $s); //розбили на масив порядково через новий рядок
//print_r($qwert);
foreach ($qwert as $key => &$value) {
	$mass[]=explode(" ", $value);
}
/*echo "<pre>";
print_r($sdf);
echo "</pre>";*/
foreach ($mass as $key => $value) {
	foreach ($value as $k => $val) {
		$summ_gor+=$mass[$key][$k];
		$summ_vert+=$mass[$k][$key];
	}
	$diagon_summ+=$mass[$key][$key];
	$terra[]=$summ_gor;
	$terra[]=$summ_vert;
	$summ_gor=0;
	$summ_vert=0;
}
$terra[]=$diagon_summ;

//print_r($terra);
$diagon_summ2=0;
$f=count($mass)-1;
for ($i=0,$j=$f;$i<count($mass),$j>=0;$i++,$j--){
	$diagon_summ2+=$mass[$i][$j];
}
//echo $diagon_summ2;
$terra[]=$diagon_summ2;
$d=0;
print_r($terra);
foreach ($terra as $value) {
	$d+=$value;
}
echo $d."<br>";
$c=count($terra);
echo $c."<br>";
foreach ($terra as $value) {
	if ($d/$c!==$value){	
	echo "На жаль, це не 'Магічний квадрат'"
	exit();
    }
}
echo "Вітаю! Ця матриця є 'Магічним квадратом'!";
?>