
<?php

    $file = fopen("welcome.txt", "r") or exit("Unable to open file!");
    //Output a line of the file until the end is reached
    while(!feof($file))
    {
        echo fgets($file). "<br>";
    }
    fclose($file);
    echo"This code is executed by Vaibhav Sharma,2220100288";
?>
