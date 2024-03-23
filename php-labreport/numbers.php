<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    $a = 5;
    $b = 5.34;
    $c = "25";

    <!-- Integer -->
    $x = 5985;
    var_dump(is_int($x));

    $x = 59.85;
    var_dump(is_int($x));

    <!-- Float -->
    $x = 10.365;
    var_dump(is_float($x));
</body>

</html>