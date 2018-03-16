<?php
$worker=array('user1'=>'Петро','user2'=>'Іван','user3'=>'Вася','user4'=>'Дмитро','user5'=>'Діана','user6'=>'Інга');
foreach ($worker as $value) {
	echo $value."<br>";
}
foreach ($worker as $key => $value) {
	echo "$key: $value<br>";
}

?>
<ol>
<?php	
foreach ($worker as $key => $value) {?>
<li><?php echo "$key: $value<br>";}?></li>
</ol>

<table border="1px">
	<tr>
	<th>Ключ</th>
	<th>Значення</th>
	</tr>
<?php
foreach ($worker as $key => $value) {?>
	<tr><td><?php echo $key;?> </td>
		<td><?php echo $value;}?> </td>
	</tr>	
</table>