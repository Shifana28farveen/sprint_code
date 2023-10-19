<?php
$file = fopen("loop.txt", "r");
fwrite($file, "Hello, World!<br>");
fclose($file);
?>

<!--  <?php
$file = fopen("file.text", "r");
fseek ($file, 10);
$data = fread($file, 20);
echo $data;
fclose($file);
?> -->


<!-- <?php
$file = fopen("file.txt", "r");
while(!feof($file)){
        $line = fgets($file);
        if($line != false){
                echo $line;
        }
        
}
fclose($file);
?> -->

<!-- <?php
if (file_exists("file.txt","r")){
    echo "the file exists.";
    if (is_file("file.txt")){
            echo "It is a regular file.";
    }
    echo "File size:" . filesize("file.txt")."bytes";

}else{
    echo "the file does not exist.";
}

?> -->

<!-- <?php
$dir = opendir("my_directory");
while (($file = readdir($dir)) !== false){
    echo "found file: $file<br";
}
closedir($dir)
?> --> -->


