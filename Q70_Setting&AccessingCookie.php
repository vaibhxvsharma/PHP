
<?php

    // Setting a cookie
    setcookie("username", "Vaibhav@004", time()+30*24*60*60);
    
    // Verifying whether a cookie is set or not
    if(isset($_COOKIE["username"])){
        echo "Hi " . $_COOKIE["username"] . "<br>";
    } else{
        echo "Welcome Guest!<br>";
    
    }
    
    print_r($_COOKIE);
    echo"<br>This code is executed by Vaibhav Sharma,2220100288";

?>
