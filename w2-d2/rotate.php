<?php

$rotate = array (1,2,3);
	count($rotate);
$switch = 1;

	for ($i=0; $i < count($rotate) - 1; $i++){
		$rotate[$i] = $rotate[$i +1];
}
$rotate[$i] = $switch;
print_r ($rotate);
	
	for ($i =0; $i <count($rotate); $i++){
		$rotate[$i] = $rotate[$i] + 5;
}
print_r ($rotate);
?>
