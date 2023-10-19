<!-- <?php
function Shifana($name) {
    echo "Hello, $name!";
}
Shifana("pavithra");
?> -->

<!-- <?php
function add($num1, $num2) {
    return $num1 + $num2;
}
$result = add(3, 5);
    echo $result;
?> -->

<!-- <?php
function sightspectrum($name = "Guest") {
    echo "Hello, $name!";
}
sightspectrum(); 
sightspectrum("John");  
?> -->


<!-- <?php
$globalVar = 10;

function localVar() {
    $localVar = 5;
    echo $localVar;
}

localVar(); 
echo $globalVar;  
?> -->

<!-- <?php
$globalVar = 10;

function accessGlobalVar() {
    global $globalVar;
    echo $globalVar;
}

accessGlobalVar();  
?> -->


<!-- <?php
function performOperation($operation, $a, $b) {
    return $operation($a, $b);
}

$result = performOperation(function($x, $y) {
    return $x * $y;
}, 2, 3);

echo $result;  
?> -->

<?php
function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

echo factorial(5); 
?>