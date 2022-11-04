<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Class</title>
</head>
<body>

</body>
</html>

<?php

class Car {
    public $speed = 10;
    public $gear = 5;
    public $model = 'Tesla';
    public $color; 

    //constructor
    function __construct($color){
        $this->color = $color;
    }
    
    //method
    function move(){
        echo "Yahoo! i am moving with speed $this->speed km/hr";
    }
}



$car = new Car('blue');
echo $car->color;

?>