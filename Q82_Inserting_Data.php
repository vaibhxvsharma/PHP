<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vaibhav";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "INSERT INTO students
    (Stud_ID, Stud_Name, Stud_Email, Stud_Contact)
    VALUES
    (03, 'Vaibhav', 'vaibhav_s@gmail.com', '9810547856');";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    echo"<br>This code is executed by Vaibhav Sharma,2220100288";    
?>
