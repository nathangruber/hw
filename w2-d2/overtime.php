<?php

function calculatePay($Hours, $Rates){
	$overtimeRate = $Rates *1.5;
	
	if ($Hours <= 40){
		return ($hours*$rates); 
}	
	else {$overtimeHours = $Hours-40;
		return ($overtimeHours*$overtimeRate) + (40*$Rates);
}
}
$Hours = 45;
$Rates = 10;
$Pay = calculatePay($Hours,$Rates);



	echo $Pay;

