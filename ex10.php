
<?php/*
$n=$_POST['n'];
for ($i=1; $i<=$n; $i++){
	for ($j=1; $j<=$i; $j++)
		echo $i." ";
echo "<br>";	
}
*/
?>


<?php
$n=$_POST['n'];
if (is_numeric($n)){
	for ($i=1; $i<=$n; $i++){
		for ($j=1; $j<=$i; $j++)
			echo $i." ";
	echo "<br>";	
	}	
echo "<p><a href='index.html'>Повернутись на головну</a>";
}else{
echo "Щось пішло не так. <a href='ex10.html'>Спробуй ще раз</a>";
}
?>