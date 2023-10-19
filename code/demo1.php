<!-- <?php
$number = 10;
$fact = 1;
for($i = 1;$i <= $number ; $i++){
    $fact = $fact * $i ;
}
echo $fact;
?> -->

<?php
$num = 5;
$a = 1;
$b = 2;
$c;

for ($i = 1; $i <= $num; $i++){
    $c = $a + $b;
    echo $c;
    echo " , ";
    $a = $b;
    $b = $c;
}


?>
