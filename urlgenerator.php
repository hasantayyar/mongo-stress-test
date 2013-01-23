<?php
$maxTry = 100;
$f = fopen('./urls.txt','w');
foreach(range(0,$maxTry) as $i)	{
	$line = "http://localhost/set.php?value=".md5(rand(1,100))."\n";
	echo $line;
	fwrite($f,$line);
}
fclose($f);
