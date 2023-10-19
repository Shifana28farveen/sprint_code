<!-- <?php
$age = 20;

if ($age >= 22) {
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}
?> -->


<!-- <?php
$grade = 75;

if ($grade >= 80) {
    echo "Excellent!";
} elseif ($grade >= 70) {
    echo "Good job!";
} else {
    echo "Keep working hard.";
}
?> -->


<?php
$day = "Monday";

switch ($day) {
    case "Monday":
        echo "It's the beginning of the week.";
        break;
    case "Friday":
        echo "It's almost the weekend!";
        break;
    default:
        echo "It's a regular day.";
}
?>
