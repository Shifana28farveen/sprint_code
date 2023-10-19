<!-- <?php
$file = fopen("loop.php", "r");
while(!feof($file)){
    $line = fgets($file);
    echo $line;
}
fclose($file);
?> -->
<!-- <?php
$content = fread($file, filesize("loop.txt"));
?> -->


<?php

// File name
$filename = 'loop.php';

// Open the file for writing
$file = fopen($filename, 'w');

// Check if the file is opened successfully
if ($file) {
    // Write content to the file
    fwrite($file, "Hello, World!\nThis is a sample file handling in PHP.");

    // Close the file
    fclose($file);

    echo "File '$filename' has been created and written to successfully.<br>";

    // Open the file for reading
    $file = fopen($filename, 'r');

    // Check if the file is opened successfully
    if ($file) {
        // Read and display the content
        echo "File Content:\n";
        while (!feof($file)) {
            echo fgets($file);
        }

        // Close the file
        fclose($file);

        echo "File '$filename' has been read successfully.<br>";

        // Delete the file
        if (unlink($filename)) {
            echo "File '$filename' has been deleted.<br>";
        } else {
            echo "Error deleting the file.<br>";
        }
    } else {
        echo "Error opening the file for reading.<br>";
    }
} else {
    echo "Error opening the file for writing.<br>";
}

?>
