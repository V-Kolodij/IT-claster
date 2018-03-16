<?php
$mass=array();
for ($i=0;$i<10;$i++){
	for($j=0;$j<10;$j++){
		$arr[$j] = rand(1,20);
	}
$mass[$i]=$arr;
}
?>
<h4>Таблиця з двомірного масиву:</h4>
<table border="1px" cellspacing="2" cellpadding="5">
<th bgcolor="grey">O
	<?php //виводимо верхні індекси
	for ($i=1;$i<=10;$i++){
	?>
<th bgcolor="yellow"><?php echo $i;} ?></th>
</th>
<?php //виводимо масиви в рядки
foreach ($mass as $key => $value) {?>
<tr>
<td bgcolor="yellow"><?php echo "<strong>".($key+1)."</strong>"; ?></td>
<?php
	
	foreach ($value as $val) {
?>
<td bgcolor="#FFDAB9"><?php echo $val;}?></td>
<?php } ?>
</tr>
</table>

<p>Сума елементів кожного рядка:</p>
<?php
foreach ($mass as $key => $value) {
	foreach ($value as $i) {
		$summ+=$i;
	}
	echo "Сума ".($key+1)." рядка = $summ<br>";
	$summ=0;
}
?>
<p>Сума елементів по діагоналі:</p>
<?php
$diagon_summ=0;
for ($i=0;$i<10;$i++){
	$diagon_summ+=$mass[$i][$i];
}
echo "Сума чисел по діагоналі = $diagon_summ";
?>

<p>Найбільша Сума рядка:</p>
<?php
$maxim=array();
foreach ($mass as $key => $value) {
	foreach ($value as $i) {
		$summ+=$i;
		
	}
	$maxim[]=$summ; //зберігаєм суму в масив і потім її обнуляєм
	$summ=0;
}
//print_r($maxim);
$max=$maxim[0];
	foreach ($maxim as $k => $value) {
		if ($value>$max){
			$max=$value;
			$z=$k;
		}

}
echo "Найбільша сума в рядку ".($z+1);	

?>
<p>Перевернем масив:</p>
<?php
//for ($i=0;$i<10;$i++){
//	for($j=0;$j<10;$j++){
//		$mass[$j][$i]=$mass[$i][$j];
//	}
//} хрєнь получилась бо вже бере нові значення на початку ,  треба напевно використати новий масив
$qwert=array();
foreach ($mass as $key => $value) {
	foreach ($value as $k => $val) {
		$qwert[$k][$key]=$mass[$key][$k];
	}
}
// і виведем масив
?>
<table border="1px" cellspacing="2" cellpadding="5">
<?php	
foreach ($qwert as $key => $value) {?>
<tr><?php
	foreach ($value as $val) {?>
	<td><?php
		echo $val;
	}?>
	</td>
<?php } 
?></tr>
</table>

<p>Просумуємо числа в стовпчику і визначимо номер стовпчика де сума найбільша:</p>
<?php 
$summ_stovp=0;
$sdf=array();
foreach ($mass as $key => $value) {
	foreach ($value as $k => $val) {
		$summ_stovp+=$mass[$k][$key];
	}
	echo "Сума ".($key+1)." стовпчика = $summ_stovp<br>";
	$sdf[$key]=$summ_stovp;
	$summ_stovp=0;
}
$g=$sdf[0];
foreach ($sdf as $k => $value) {
		if ($value>$g){
			$g=$value;
			$z=$k;
		}

}
echo "Найбільша сума в стовпчику ".($z+1);	

?>
