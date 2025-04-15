
<?php
$filename = "introduction.txt";
$content = "My name is Vaibhav Sharma. I am a web developer specializing in PHP, Python, and MySQL.";

// Create and write to the file
$file = fopen($filename, "w");
fwrite($file, $content);
fclose($file);

echo "File '$filename' has been created successfully!<br><br>";

// Open the file and read using fgets() and feof()
$file = fopen($filename, "r");
echo "Content of '$filename':<br>";
while (!feof($file)) { // Loop until end of file
    echo fgets($file) . "<br>"; // Read and display line by line
}
fclose($file);

echo "<br>This code is executed by Vaibhav Sharma,2220100288";
?>
