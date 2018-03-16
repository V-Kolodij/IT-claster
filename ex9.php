<?php
$a = $_POST['a'];
if (is_numeric($a)){
	$faktorial = 1;
	for ($i=1; $i<=$a; $i++){
		$faktorial*=$i;
	}
echo "Факторіал числа $a! = $faktorial";
echo "<p><a href='index.html'>Повернутись на головну</a>";
}else{
echo "Щось пішло не так. <a href='ex9.html'>Спробуй ще раз</a>";
}
?>