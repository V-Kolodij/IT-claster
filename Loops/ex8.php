<ol>
<?php 
$name = $_POST['name'];
for ($i=0; $i<=30; $i++)?>
	<li><?php echo "$name<br>";?></li>
</ol>
<?php $a = 0;
while ($a <= 10) {
	echo "$name<br>";
	echo "<hr>";
	$a++;
}
$s=1;
for (;$s<=5;){
	echo "$name<br>";
	$s++;
}
echo "<hr>";

$d=1;
do{
	echo "$name<br>";
	echo "<hr>";
	$d++;
} while ($d==3);


$f = 0;
while ($f <= 7) {
  if($f%2!=0) {$f++; continue;
  }
  echo $f;
  $f++;
}
?>