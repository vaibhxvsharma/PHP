<?php
	function findLargestNumber($arr)
	{
		if(count($arr) == 0)
		{
			return null;
		}
	$largest = $arr[0];

	for($i = 1; $i < count($arr); $i++)
	{
		if($arr[$i]>$largest)
		{
			$largest = $arr[$i];
		}
	}
	return $largest;
	}
$array = [3,5,1,8,4];
$largestNumber = findLargestNumber($array);
echo"Largest Number is: " .$largestNumber;

echo "<br>";
echo "This program is executed by Vaibhav(2220100288)";?>
