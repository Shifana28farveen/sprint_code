<!-- <?php
$number = 42;
echo "Integer: " . $number;
echo "<br>";
$a = 55.2;
echo "Float: " . $a;
?> -->

<!-- <?php
$name = "John";
echo "String: " . $name;
echo "<br>";
$names = "shifana  Farveen";
echo $names;
?> -->


<!-- <?php
$isTrue = true;
echo "Boolean: " . ($isTrue ? "true" : "false");
?>  -->

<!-- //array
<?php
echo "<br>";
$cars = array("Volvo", "BMW", "Toyota"); 
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?> -->

<?php
class Person {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
}

$person = new Person("Alice");
echo "Object: " . $person->name;
?>







