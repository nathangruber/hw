<?php
$num = 9;
 
/* Recursive function for fibonacci series. */
 
function fibonacci($num){
 
    if($num==0){
 
       return 0;
 
    }else if($num==1){
 
       return 1;
 
    }  else {
 
        return (fibonacci($num-1) + fibonacci($num-2));
    } 
 
}
 
/* Call Function. */
 
for ($i=0;$i<$num;$i++){
 
    echo fibonacci($i);
    echo "\n";
}
?>
