<!-- <?php
function printDiamond($rows) {
    for ($i = 1; $i <= $rows; $i += 2) {
        $spaces = str_repeat(" ", ($rows - $i) / 2);
        $stars = str_repeat("*", $i);
        echo $spaces . $stars . $spaces . "\n";
    }

    for ($i = $rows - 2; $i >= 1; $i -= 2) {
        $spaces = str_repeat(" ", ($rows - $i) / 2);
        $stars = str_repeat("*", $i);
        echo $spaces . $stars . $spaces . "\n";
    }
}

// Input the number of rows for the diamond pattern
$num_rows = (int)readline("Enter the number of rows for the diamond pattern: ");

// Call the function to print the diamond pattern
printDiamond($num_rows);

?> -->

<!-- <?php

function isLeapYear($year) {
    // Leap years are divisible by 4
    // But if a year is divisible by 100, it is not a leap year
    // However, if it is divisible by 400, it is still a leap year
    return ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
}

$yearToCheck = 2023;

if (isLeapYear($yearToCheck)) {
    echo $yearToCheck . ' is a leap year.';
} else {
    echo $yearToCheck . ' is not a leap year.';
}

?> -->

<!-- 
<?php
 

function printStarPattern($rows) {
    for ($i = 1; $i <= $rows; $i++) {
        // Print spaces before the stars
        for ($j = $rows - $i; $j > 0; $j--) {
            echo " ";
        }

        // Print stars
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
        }

        // Move to the next line after each row
        echo "\n";
    }
}

// Input the number of rows for the star pattern
$numRows = (int)readline("Enter the number of rows for the star pattern: ");

// Call the function to print the star pattern
printStarPattern($numRows);
?> -->

<?php

function number($value){
 if ($value>0){
 echo"$value is positive";
 }
     elseif($value<0){
        echo"$value is negative ";
  
     }
     else{
     echo" $value is zero";
     }
    }
    $value=0;
    number($value);
    ?>


