<!DOCTYPE html>
<html>
<body>
<h1>my first php pages</h1>
<?php
$x = 5;
$y = 10;
function mytext() {
global $x,$y;
$y = $x + $y;
}
mytext();
echo $y;
$color = "red";
$text = "hi!I am adora";
echo "$text";
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
echo "<p>variable x outside funtion is : $text</p>";
$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);
?>  
</body>
</html>
