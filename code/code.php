
<?php
$num=5;
$fact=1;
for($i=1;$i<=$num;$i++){
    $fact=$fact*$i;
}
echo"the factorial number is $fact";
?>

<?php
namespace MyNamespace;
class MyClass{
}
$obj = new MyNamespace\\MyClass();
?>


<?php
function my_autoloader($class){
    $file = __DIR__ . '/' . str.replace('\\','/'. $class) . '.php';
    if (file.exists($file)){
        require $file;
    }
}
spl_autoload_register("my_autoloader");
?>


<?php
MyNamespace/MyClass.php
$obj = new MyNamespace\MyClass();
?>
 
<?php
throw new Exception("This is an example exception");
?>

<?php
try{

}catch (Exception $e){
    echo "Caught exception:" . $e->getMessage();
}finally{

}
?>


 <?php
 class CustomException extends Exception{

 }
 ?>





