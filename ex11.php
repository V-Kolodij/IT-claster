
<?php
$z = (int)$_POST['z'];
for ($i=1,$j=1; $i<100; $i++){
	if ($i%$z==0){
	echo $i."<br>";
	$j++;
	}	
}
echo "Tаких чисел  - $j";
echo "<p><a href='index.html'>Повернутись на головну</a>";
?>


<?php/*
$z = 2;
$i=1;$j=1;
while (($i<100) and ($i%$z==0)){
	echo $i."<br>";
	$j++;
	$i++;	
}
echo "таких чисел $j";*/
?>
