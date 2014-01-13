<?php
$evensum = 0;
$a = array(1,2);
$i=2;
while (true) {
	$a[$i] = $a[$i-1]+$a[$i-2];
	if($a[$i]>4000000){
		unset($a[$i]);
		break;
	}
	$i++;
}
foreach ($a as $ak) {
	//echo $ak.PHP_EOL;
	echo $ak % 2 === 0 ? $ak.PHP_EOL : '';
	$evensum = $ak % 2 === 0 ? $evensum+$ak : $evensum;
}
echo $evensum;
?>