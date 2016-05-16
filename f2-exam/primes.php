<?php

function isAPrimeNumber($num){
	
	//loop that goes from 1 to the num
	for($j=2;$j<$num;$j++){
    	$result_of_div = $num / $j;
    	$remainder = $num % $j;
		//if the remainder is 0 then this $num is not a prime number,returns false 
	if($remainder==0){
		return false;
		}
	}
		return true;
}

		$aofprimenumbers = array();

		$count = 1;

	while(sizeof($aofprimenumbers)<101){
	
	if(isAPrimeNumber($count)){
		$aofprimenumbers[]=$count;
	}
		$count++;
}

print_r($aofprimenumbers);


?>