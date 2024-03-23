<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <!-- Data Type  -->
    $x = 5;
    var_dump($x);

    <!-- String -->
    $x = "Hello world!";

    echo "<br>";
    $y = 'Hello world!';
    var_dump($y);
    var_dump($x);

    <!-- Integer -->
    $x = 5985;
    var_dump($x);

    <!-- Float -->
    $x = 10.365;
    var_dump($x);

    <!-- Boolean -->
    $x = true;
    var_dump($x);

    <!-- Array -->
    $cars = array("Volvo","BMW","Toyota");
    var_dump($cars);

    <!-- Object  -->
    class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
    }
    public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
    }
    }

    $myCar = new Car("red", "Volvo");
    var_dump($myCar);

    <!-- Null Value  -->
    $x = "Hello world!";
    $x = null;
    var_dump($x);

    <!-- change datatype  -->
    $x = 5;
    $x = (string) $x;
    var_dump($x);
</body>
</html>