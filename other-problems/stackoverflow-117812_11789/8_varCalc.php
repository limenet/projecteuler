<?php
$a = 1;
$b = 7;
$c = 3;
$d = 14;

echo $a+$b+$c-$d;//cheap
echo PHP_EOL;
$string = 'a + b+c -d';
$result = 0;
$operator = NULL;
for ($i=0; $i < strlen($string); $i++) {
	$s = substr($string, $i, 1);
	switch ($s) {
		case ' ':
			break;
		case 'a';
		case 'b';
		case 'c';
		case 'd';
			if($i === 0){
				$result = $$s;
			}
			if($operator !== NULL){
				switch ($operator) {
					case '+':
						$result = $result+$$s;
						break;
					case '-':
						$result = $result-$$s;
						break;
				}
			}
			$operator = NULL;
			break;
		case '+':
		case '-':
			$operator = $s;
			break;
		default:
			# code...
			break;
	}
}
echo $result;
?>