<!-- <?php 
$a =125;
$b =(string)$a;
$c = (int)$b[0]+ (int)$b[1];
    echo "$c<br>";
$d =  $c+ (int)$b [2];
    echo "$d<br>";
$value = (int)$b[2];
    echo "$value";
$result = $d / $value;
    echo "$result";   
?> -->

<!-- <?php
$a = 125;
$a1 = (int) $a;
$b = (int)$a(0) +(int)$a(1);
    echo "$b";
$c = (int)$b + (int)$a (2);
    echo "$c";

$value = $a % 10;
    echo "$value";

$result = $c / $value ;
    echo "$result";
?> -->

//comparison operator

<?php
$a = 5;
$b = '5';

if ($a == $b) {
    echo "Equal: Values are equal.\n";
} else {
    echo "Equal: Values are not equal.\n";
}

if ($a === $b) {
    echo "Identical: Values and types are identical.\n";
} else {
    echo "Identical: Values and types are not identical.\n";
}
?>





 
