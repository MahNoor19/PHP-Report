<?php

$a = 100;
$b = 200;
$c = $a + $b;
echo $c;

$squareOf10 = 10 ** 2;
echo $squareOf10;

// Arithmetic Operators
$x = 10;
$y = 5;
$addition = $x + $y; // 15
$subtraction = $x - $y; // 5
$multiplication = $x * $y; // 50
$division = $x / $y; // 2
$modulus = $x % $y; // 0

// Assignment operators
$a = 10;
$a += 5; // Equivalent to: $a = $a + 5;
echo "Assignment operator:\n";
echo "Value of a: $a\n\n";

// Comparison operators
$var1 = 10;
$var2 = 5;

echo "Comparison operators:\n";
echo "Equal: ", var_export($var1 == $var2, true), "\n"; // false
echo "Greater than: ", var_export($var1 > $var2, true), "\n"; // true
echo "Less than: ", var_export($var1 < $var2, true), "\n"; // false
echo "Not equal: ", var_export($var1 != $var2, true), "\n\n"; // true

// Increment/Decrement operators
$b = 5;
$b++; // Increment
echo "Increment operator:\n";
echo "Value of b after increment: $b\n";
$b--; // Decrement
echo "Value of b after decrement: $b\n\n";

// Logical operators
$condition1 = true;
$condition2 = false;

echo "Logical operators:\n";
echo "AND: ", var_export($condition1 && $condition2, true), "\n"; // false
echo "OR: ", var_export($condition1 || $condition2, true), "\n"; // true
echo "NOT: ", var_export(!$condition1, true), "\n\n"; // false

// String operators
$string1 = "Hello ";
$string2 = "World";
$concatenatedString = $string1 . $string2;
echo "String operators:\n";
echo "Concatenated string: $concatenatedString\n\n";

// Array operators
$array1 = [1, 2, 3];
$array2 = [3, 4, 5];
$union = $array1 + $array2; // Merges arrays without duplicates
echo "Array operators:\n";
print_r($union);
echo "\n";

// Conditional assignment operators
$num = 10;
$message = ($num > 5) ? "Greater than 5" : "Less than or equal to 5";
echo "Conditional assignment operator:\n";
echo "Message: $message\n";

?>