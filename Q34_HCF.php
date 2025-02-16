<?php
$num1 = 56; // Replace with the first number
$num2 = 98; // Replace with the second number

while ($num2 != 0) {
    $temp = $num2;
    $num2 = $num1 % $num2;
    $num1 = $temp;
}

echo "The HCF is: " . $num1;
echo "<br>";
echo "This program is executed by Vaibhav(2220100288)";?>
