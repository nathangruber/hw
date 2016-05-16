<?php

class Array_changer{
	public $noombers;
	
	
	function __construct($a,$b,$c,$d,$e,$f,$g,$h,$i,$j){
		
		$this->noombers = array($a,$b,$c,$d,$e,$f,$g,$h,$i,$j);
		
		
	}
	
	public function reverseArray(){
		for($x=9;$x>=0;$x--){
			//value is holding the position of the array
			$value = $this->noombers[$x];
			$aux_array[$x] = $value;
			
		}
		
		//At the end override the aux_array to noombers
		$this->noombers = $aux_array;
		
		//print result
		print_r($this->noombers);
	} 
	
	
	
	public function addFive(){
		for($x=0;$x<=9;$x++){
			//aux var to store the value of that position
			$value_of_x_position = $this->noombers[$x];
			//aux var to store the value + 5
			$value_of_x_position_plus_5 = $value_of_x_position + 5;
			//override array in that position with new value
			$this->noombers[$x] = $value_of_x_position_plus_5;
		}
		print_r($this->noombers);
		
	}
	
	public function subtractFive(){
		for($x=0;$x<=9;$x++){
			$value_of_x_position = $this->noombers[$x];
			$value_of_x_position_minus_5 = $value_of_x_position - 5;
			$this->noombers[$x] = $value_of_x_position_minus_5;
		}
		print_r($this->noombers);
	}
	public function sumArray(){
		
		$total = 0;
		for($x=0;$x<=9;$x++){
			//access the array position and store the value in an aux var
			$auxvar = $this->noombers[$x];
			//add to total the value of auxvar
			$total = $total + $auxvar;
		}
		print($total);
		print('\n');
	}
	

}



//create an instance of the class
$myInstance = new Array_changer(0,1,2,3,4,5,6,7,8,9);

//Call
$myInstance->reverseArray();
$myInstance->addFive();
$myInstance->subtractFive();
$myInstance->sumArray();
