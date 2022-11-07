<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    
</body>
</html>


<?php
class Animal
{
    public $weight = 40;
    public $height = 50;
    private $color = 'red';

    public function getColor(){
        return $this->color;
    }

    function move()
    {
        echo "Thanks master for taking me out😍 <br>";
    }

    function eat()
    {
        echo 'I ❤ food😋  <br>';
    }
}

class Dog extends Animal
{
    function bark(){
        echo "woof woof 🐶";
    }

}

$animal = new Animal();
$animal->eat();



$dog = new Dog();
$dog -> bark();

echo '<br>'.$dog->getColor();

?>