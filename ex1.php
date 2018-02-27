<?php
$x1=(int)$_GET["x1"];
$y1=(int)$_GET["y1"];
$x2=(int)$_GET["x2"];
$y2=(int)$_GET["y2"]; 
$s = sqrt(pow(($x1-$x2), 2) + pow(($y1-$y2), 2));
echo "<p>Відстань між точками дорівнює: ".$s."</p>";
?>