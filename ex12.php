<h4>Створимо масив з 10 елементів:</h4>
<?php
$mass = array();
for ($i=0; $i<10; $i++){
	$mass[$i]=rand(10,230);
}
print_r($mass);

?>
<h4>Знайдемо суму всіх елементів масиву:</h4>
<?php
$summ=0;
for ($i=0;$i<10;$i++){
	$summ+=$mass[$i];
}
echo "Cума всіх елементів $summ<br>";
?>

<h4>Знайдем найбільше значення цього масиву:</h4>
<?php
$max=$mass[0];
for ($i=0; $i<10; $i++){
	if ($mass[$i]>$max){
		$max=$mass[$i];
	}

}
echo "Найбільше значення: $max";
?>
<h4>Знайдем найменше значення цього масиву:</h4>
<?php
$min=$mass[0];
for ($i=0; $i<10; $i++){
	if ($mass[$i]<$min){
		$min=$mass[$i];
	}
}
echo "Найменше значення: $min";
?>
<h4>Поміняєм місцями найбільше і найменше значення</h4>
<?php
$max=$mass[0];
$min=$mass[0];
for ($i=0,$j=0; $i<10,$j<10; $i++,$j++){
	if ($mass[$i]>$max){
		$max=$mass[$i];
	}	
	if ($mass[$j]<$min){
		$min=$mass[$j];
	}
}
foreach ($mass as &$val) {
	if ($val == $max){
		$val = $min;
	}
	elseif ($val == $min){		// конструкція if не працює...
		$val = $max;
	}
}
print_r($mass);
?>

<h4>Поміняєм місцями перший і останній елемент масиву</h4>
<?php
$k=$mass[0];
$mass[0]=$mass[9];
$mass[9]=$k;
print_r($mass);
?>

<h4>Визначимо кількість елементів масиву, які більші за своїх сусідів</h4>
<?php
$k=0;
for ($i=0; $i<10; $i++){
	if ($mass[$i]>$mass[$i-1] && $mass[$i]>$mass[$i+1] ){
		echo $mass[$i]."<br>";
		$k+=1;
	}
}
echo "Таких елементів $k<br>";
?>
<h4>Непарні елементи замінимо нулями:</h4>
<?php
foreach ($mass as &$value) {
	if ($value%2!=0){
		$value=0;
	}
}
print_r($mass);
?>

<h4>Визначити, скільки елементів масиву потрібно додати, щоб сума була більшою за число 700</h4>
<?php
$massiv = array();
for ($i=0; $i<10; $i++){
	$massiv[$i]=rand(10,230);
}?>
<p>Новий масив :</p>
<?php
print_r($massiv);
echo"<br>";
$z=0;
$summ=0;
foreach ($massiv as $value) {
	$summ+=$value;
	$z+=1;
	if ($summ>700){
		echo "Треба додати $z елементів<br>";
		break;
	}
}
if ($summ<700){
	echo "Сума всіх елементів менше 700 ";
}
?>
