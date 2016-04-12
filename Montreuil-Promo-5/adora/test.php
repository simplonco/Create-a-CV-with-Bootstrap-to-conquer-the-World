<!DOCTYPE html>
<html>
<body>
<h1>Dictionary</h1>
<?php
$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$array = explode("\n", $string);
$array_count=count($array);
echo "$array_count <br>";

$chart_15 = 0;
foreach ($array as $word) {
if (strlen($word) == 15) { 
	$chart_15 = $chart_15 +1;
	}
 }
echo "$chart_15 <br>";
$words_u = 0;
foreach ($array as $word) {
if (strpos($word,"ù") !==false) { 
	$words_u = $words_u +1;
	}
 }
echo "$words_u <br>";
$words_q = 0;
foreach ($array as $word) {
if (substr($word,-1)== "q") { 
	$words_q = $words_q +1;
	}
 }
echo "$words_q <br>";
?>  
</body>
</html>
