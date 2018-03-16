
<ol>
<?php 
$name = $_POST['name'];
for ($i=1; $i<=30; $i++){?>
	<li><?php echo "$name<br>";
}?></li>
<hr>
</ol>
<p>Виведем 10 разів через while:</p>
<?php $a = 1;
while ($a <= 10) {
	echo "$name<br>";
	echo "<hr>";
	$a++;
}
?>
<p>Виведем 5 разів через for as while:</p>
<?php
$s=1;
for (;$s<=5;){
	echo "$name<br>";
	$s++;
}
echo "<hr>";
?>
<p>Вивід через do - while:</p>
<?php
$d=1;
do{
	echo "$name<br>";
	echo "<hr>";
	$d++;
} while ($d==3);

/*
$f = 0;
while ($f <= 7) {
  if($f%2!=0) {$f++; continue;
  }
  echo $f;
  $f++;
}*/
echo "<p><a href='index.html'>Повернутись на головну</a>";
?>