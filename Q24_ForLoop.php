<?php

    /* example 1 */
    echo "First Way \t";
    for ($i = 1; $i <= 10; $i++)
    {
        echo $i;
    	echo "\t";
    }
    
    /* example 2 */
    echo "<br>Another Way\t";
    for ($i = 1; ; $i++)
    {
        if ($i > 10)
        {
            break;
        }
        echo $i;
    	echo "\t";
    }

echo "<br>";
echo "This program is executed by Vaibhav(2220100288)";
?>