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
//echo "$array <br>";
$x=0;
$y=1;
echo "The top 10 films are: <br> ";
while ($x<10)
{
	$z=$top[$x]["title"]["label"];
	echo "$y $z <br>"; 
$x++;
$y++;
}
echo "------------------------------------- <br>" ;
$a=0;
while ($a<=$array)
{
	$k=$top[$a]["title"]["label"];
if (strstr($k,"Gravity"))
	{ 
	echo "The ranking of the movie “Gravity” is : " ;
	echo "$a <br>";
	} 
$a++;
}
echo "------------------------------------- <br>" ;	
$h=0;
while ($h<=$array)
{
	$p=$top[$h]["title"]["label"];
	if (strstr($p,"The LEGO Movie"))
	{ 
	$p=$top[$h]["im:artist"]["label"];
	echo "The director of “The LEGO Movie” is : " ;
	echo "$p <br>";
	} 

$h++;
}
echo "------------------------------------- <br>" ;
$v=0;
$w=0;
while ($v<=$array)
{
	$m=$top[$v]["im:releaseDate"]["attributes"]["label"];
	
	$f=substr($m, -4);
	if ($f<2000)
	{ 
	$w++;
	} 
	
$v++;
}
echo "The films were released before 2000 are : " ;
	echo "$w <br>";	
echo "------------------------------------- <br>" ;
$ll=0;
$ff=1;
while ($ll<=$array)
 {
	while ($ff<=$array)
 	{
	$n=$top[$ll]["im:releaseDate"]["attributes"]["label"];
	$oldest_film=substr($n, -4);
	$KK=$top[$ff]["im:releaseDate"]["attributes"]["label"];
	$oldest_film2=substr($KK, -4);
	if ($oldest_film<$oldest_film2)
	{
	$ff++;
	}
	else { $oldest_film = $oldest_film2; }
	}
$ll++;
echo "$oldest_film <br>";
}
 
?>  
</body>
</html>
