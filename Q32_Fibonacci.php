<?php
$n = 10; // Replace with the number of terms
$a = 0;
$b = 1;

echo "Fibonacci series up to $n terms: $a $b ";

for ($i = 2; $i < $n; $i++) {
    $c = $a + $b;
    echo "$c ";
    $a = $b;
    $b = $c;
}

echo "<br>";
echo "This program is executed by Vaibhav(2220100288)";?>
