<?php
define("NL","<br><br>");
$alfa=[1,2,3,4, 'ola', 34.56, true];
var_dump($alfa);
echo NL;
$bravo = array(3,4,5,6);
print_r($bravo);

$charlie =[2,3,4,5,6];
echo NL;
foreach($charlie as $pass)echo $pass . ":";
echo NL;
$charlie[]=1000;
foreach($charlie as $pass)echo $pass . ":";
echo NL;
$charlie[2]='cota';
foreach($charlie as $pass)echo $pass . ":";
echo NL;
unset($charlie[2]);
foreach($charlie as $pass)echo $pass . ":";
?>