<?php
function isArmstrong($num) {
    $sum = 0;
    $temp = $num;
    while ($temp != 0) {
        $digit = $temp % 10;
        $sum += $digit * $digit * $digit;
        $temp = (int)($temp / 10);
    }
    return ($sum == $num);
}

$number = 153;
echo isArmstrong($number) ? "$number is an Armstrong number." : "$number is not an Armstrong number.";
echo "<br>";
echo "This program is executed by Vaibhav(2220100288)";

?>

