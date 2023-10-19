
<!-- <?php
$numericArray = array(1, 2, 3, 4, 5);
echo $numericArray[0]; 
?> -->

<!-- <?php
$assocArray = array(
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
);
echo $assocArray['name'];
?> -->

<!-- <?php
$multiArray = array(
    array('apple', 'orange', 'banana'),
    array('carrot', 'broccoli', 'pepper')
);
echo $multiArray[0][1]; 
?>  -->

<!-- <?php
$numbers = array(3, 7, 1, 8, 2);
sort($numbers); 
echo "<br>";
$numbers[] = 5;
print_r($numbers);
?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>

    <h2>Simple Form</h2>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $name = $_POST["name"];
        $email = $_POST["email"];

        // Display submitted data
        echo "<p>Submitted Data:</p>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <input type="submit" value="Submit">
    </form>

</body>
</html>

 
