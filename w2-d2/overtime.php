<?php
$Hours = 45;
$Rates = 10;
$Pay = calculatePay($Hours,$Rates);


	
function calculatePay($Hours, $Rates) {
	$overtimeRate = $Rates *1.5;
	if ($Hours <= 40) {
		return ($Hours * $Rates); }
	else {$overtimeHours = $Hours-40;
		return ($overtimeHours * $overtimeRate) + (40*$Rates);
}
}



	echo $Pay;

