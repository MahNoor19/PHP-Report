<?php
// while loop 
$i = 1;
while ($i < 6) {
  echo $i;
  $i++;
}

// Do-while loop 
$i = 1;

do {
  echo $i;
  $i++;
} while ($i < 6);

// For loop 
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  }

//For each loop
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
}

// Break in for loop 
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      break;
    }
    echo "The number is: $x <br>";
  }

//   Continue in for loop
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x <br>";
  }
?>