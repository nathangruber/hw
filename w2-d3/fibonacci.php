<?php
$num = 9;
 
 
function fibonacci($num){
 
    if($num==0){
 
       return 0;
 
}	
	else if($num==1){
 
       return 1;
 
}     
	else{
 
        return (fibonacci($num-1) + fibonacci($num-2));
} 
 
}
 

 
	for ($i=0;$i<$num;$i++){
 
    echo fibonacci($i);  //call function
    echo "\n";
}
?>
