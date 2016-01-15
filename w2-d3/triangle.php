<?php

class ShapeMaker{     

	//var $height;
	//var $length
	var $size = 1;
	var $stars = array(); //created variable assign array/ member variable cause inside class
	
	function __construct($size){  // add function, create for loop,
		for($i=0; $i < $size;$i++){ // i is the starting point, i is < than the parameter passed in from the function
									// i is the increment- adding 1
			$arr1 = array();		//creating variable assign it empty array
		

			for($t=0; $t < $size;$t++){ //nested for loop 
				array_push($arr1, "*"); // array_push is adding the string to the array
			}							// "." adding elements


		array_push($this->stars, $arr1); // array_push is adding an array to an array
		$this -> size=$size;		//variable created, meaing size is a member variable to this class, assigning the parameter size to the member variable $size
		}
		
	}


	function triangle(){
		$rowLimit = 1;         				// creating var assign it 1
		for($i=0;$i<$this->size;$i++){      //using this for loop to build triangle, rows
			for($t=0;$t<$rowLimit;$t++){	// building columns
			echo $this->stars[$i][$t]; 		//calling var $this->stars [][] are the points, where it starts
				
		}
		echo "\n";    //creates next line
		$rowLimit++;   //var is increasing the columns by 1
		}
		}     
	
		
	
	 function upsidedowntriangle(){
		 $rowLimit1 = 1;
	 	for($i=4;$i<$this->size;$i++){
	 		for($t=4;$t<$rowLimit1;$t++){
	 			echo $this->stars[$i][$t];
	 	}
		echo "\n";
		$rowLimit1++;
		}
		}
	}


$maker = new ShapeMaker(4);

//print_r ($maker->stars);// using maker var cause outside of class, oppose to using $this which is inside
$maker->triangle(); //calling the function, creating it is only declaring it
$maker->upsidedowntriangle(); 


?>













