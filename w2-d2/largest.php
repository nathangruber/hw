<?php 
function largest_numbers($array_of_numbers){
   $largest_value = -1;
   
	for($x = 0; $x < count($array_of_numbers);$x++){
	
	if($largest_value < $array_of_numbers[$x]){
	($largest_value = $array_of_numbers[$x]);
	} 
    }
	return($largest_value);

}
echo largest_numbers(array( 0,1,2));


?>

