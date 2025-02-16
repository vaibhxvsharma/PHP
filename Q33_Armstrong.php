<?php
$number = 153; // Replace with any number
$temp = $number;
$sum = 0;
$numDigits = strlen((string)$number);

while ($temp > 0) {
    $digit = $temp % 10;
    $sum += pow($digit, $numDigits);
    $temp = intval($temp / 10);
}

if ($sum == $number) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}

echo "<br>";
echo "This program is executed by Vaibhav(2220100288)";
?>
