<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "himaadri";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// STEP 1: Drop existing primary key (if any)
$conn->query("ALTER TABLE students DROP PRIMARY KEY");

// STEP 2: Modify Stud_ID to be PRIMARY KEY and AUTO_INCREMENT
$conn->query("ALTER TABLE students MODIFY Stud_ID INT NOT NULL AUTO_INCREMENT, ADD PRIMARY KEY (Stud_ID)");

// STEP 3: Drop UNIQUE constraint on Stud_Email (if it exists)
$conn->query("ALTER TABLE students DROP INDEX Stud_Email");

// STEP 4: Add UNIQUE constraint on Stud_Email
$conn->query("ALTER TABLE students ADD UNIQUE KEY Stud_Email (Stud_Email)");

// STEP 5: Insert data (without providing Stud_ID)
$sql = "INSERT INTO students (Stud_Name, Stud_Email)
        VALUES ('New Student', 'newstudent@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New student inserted successfully.<br>";
} else {
    echo "Error inserting student: " . $conn->error . "<br>";
}

$conn->close();
echo "This code is executed by Vaibhav Sharma,2220100288";

?>
