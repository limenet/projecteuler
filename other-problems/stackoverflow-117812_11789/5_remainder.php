<?php
$num = 24;
$denom = 7;
echo $num%$denom; //cheap
echo PHP_EOL;
echo $num-$denom*floor($num/$denom);//rounding
echo PHP_EOL;
//looping
$result = 0;
$i = 1;
while ($result < $num) {	
	$i++;
	$result = $i*$denom;
}
echo $denom-($result-$num);
?>