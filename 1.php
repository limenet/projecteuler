<?php
function gauss($n){
	return ($n*($n+1))/2;
}
echo 3*gauss(333)+5*gauss(199)-15*gauss(66);
?>