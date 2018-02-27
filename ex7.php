<?php
$num = (int)$_POST["day"];

switch ($num) {
	case 1:
		echo "Це Понеділок";
		break;
	case 2:
		echo "Це Вівторок";
		break;
	case 3:
		echo "Це Середа";
		break;
	case 4:
		echo "Це Четвер";
		break;
	case 5:
		echo "Це П'ятниця";
		break;
	case 6:
		echo "Це Субота";
		break;
	case 7:
		echo "Це Неділя";
		break;
}


?>