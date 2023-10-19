<!-- <?php
$a = 5;
$b = '5.1';

if ($a == $b) {
    echo "Equal: Values are equal.<br>";
} else {
    echo "Equal: Values are not equal.<br>";
}

if ($a === $b) {
    echo "Identical: Values and types are identical.<br>";
} else {
    echo "Identical: Values and types are not identical.<br>";
}
?> -->
 
 <!-- <?php
$x = 10;
$y = '10';

if ($x != $y) {
    echo "Not Equal: Values are not equal.<br>";
} else {
    echo "Not Equal: Values are equal.<br>";
}

if ($x !== $y) {
    echo "Not Identical: Values and types are not identical.<br>";
} else {
    echo "Not Identical: Values and types are identical.<br>";
}
?> -->

<!-- //Greater Than and Less Than Comparison:

<?php
echo "<br>";
$p = 15;
$q = 10;

if ($p >= $q) {
    echo "Greater Than: p is greater than q.<br>";
}

if ($p <= $q) {
    echo "Less Than: p is less than q.<br>";
}
?> -->

<!-- <?php
echo "<br>";
$age = 25;

if ($age >= 18 && $age <= 35) {
    echo "Age is between 18 and 35.<br>";
} else {
    echo "Age is not between 18 and 35.<br>";
}
?> -->

<!-- <?php
echo "<br">
$temperature = 25;
$timeOfDay = "morning";

if ($temperature > 20 && $timeOfDay == "morning") {
    echo "It's a warm morning.<br>";
} else {
    echo "It's not a warm morning.<br>";
}
?> -->

<!-- <?php
$day = "Saturday";

if ($day == "Saturday" || $day == "Sunday") {
    echo "It's the weekend!\n";
} else {
    echo "It's a weekday.\n";
}
?> -->

<!-- <?php
$isRaining = false;

if (!$isRaining) {
    echo "It's not raining. Enjoy your day!\n";
} else {
    echo "Grab an umbrella!\n";
}
?> -->

<!-- <?php
$age = 22;
$isStudent = true;

if ($age >= 18 && $isStudent) {
    echo "You are an adult student.\n";
} elseif ($age >= 18 && !$isStudent) {
    echo "You are an adult.\n";
} else {
    echo "You are not yet an adult.\n";
}
?> -->


<?php
$score = 85;
$hasPassedAssignment = true;
$hasPassedExam = true;

if (($score >= 70 && $hasPassedAssignment) || $hasPassedExam) {
    echo "Congratulations! You have passed.\n";
} else {
    echo "Sorry, you did not pass.\n";
}
?>











