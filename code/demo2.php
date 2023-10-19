<?php
$number =14;

 if($number <=1){
   $isprime = false;   
 }else{
   $isprime = true;
 }

 for ( $i = 2; $i*$i<= $number; $i++){
      if($number % $i == 0){
       $isprime = false;
       break;
	echo " the number is prime number";
}
 else{
    echo "the number is not prime";
 }
	
}
?>