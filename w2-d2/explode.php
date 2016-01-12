<?php
function myExplode($delim,$myString){ //declaring my function- my method/user declared
	$retval =array (" "); //code that needs to be executed
	$currWord = " ";  //variable is to remember the current word//currentindex++ is the cursor moving from space to space.

	for($currentindex = 0; $currentindex < strlen($myString); $currentindex++){
	//executing my code - currentindex is my pointer to where i am in the string//then evaluates the loop seeing if it is true, so the loop continues, if not the loop stops and moves on//currentindex++ is the increment counter-telling it to add one after every loop.

	if($myString[$currentindex]==" "){//if evaluates wether the chatacter is a space or not
	 array_push($retval,$currWord);// saving the word-gets pushed into an array
	 $currWord=" ";//emptying 
	}	        
	//the "if" executes the code if the condition is true//so myString compares to a space then it will run// array_push is a function it pushes the variables// 

	 else {
	$currWord = $currWord.$myString[$currentindex];//builds the word one character at a time
	}
	}
	//else will tell if the code is untrue and stops the loop

	array_push($retval,$currWord);//pushing the variables onto the end
	return $retval;} //return immediately ends the whole function

print_r ( myExplode(" ", "the car has a top speed of 100"));


?>

