<!DOCTYPE html>
<html>
<body>
<h1>List of films</h1>
<meta charset = "utf-8">
<?php
$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"]; # list of films
$array=count ($top);
$i=0;
$j=1;
while ($i<=$array)
 {
	while ($j<=$array)
 	{
	$n=$top[$i]["im:releaseDate"]["attributes"]["label"];
	$oldest_film=substr($n, -4);
	$KK=$top[$j]["im:releaseDate"]["attributes"]["label"];
	$oldest_film2=substr($KK, -4);
	$j++;
	}
$i++;
}
echo "$oldest_film <br>";
?>  
</body>
</html>
