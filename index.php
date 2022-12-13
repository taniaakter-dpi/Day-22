<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
//single-line comment
/* multiple-line comment
*/
$color="red";
echo $color ."<br>";

$txt="text";
echo"This is $txt <br>";
//variable concat
$txt2="This is text two,";
echo"This is text one," .$txt2 ."This is text three <br>";

//variable addition
$x=5;
$y=10;
echo $x+$y ."<br>";
//array
$cars=array("BMW","VOLVO","TOYATA")."<br>";
var_dump($cars) ;
 
//class
class car {
     public $model = "MERCEDES BENSE";
     public $color = "YELLOW";

     public function getCarInformation(){
         return "model : " . $this->model . "color : " .$this->color;
     }
}
$car1 = new car();
echo $car1->getCarInformation() ."<br>";

//constant
define("dbName","database1");
echo dbName;

?>

</body>
</html>