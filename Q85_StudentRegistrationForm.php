<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = htmlspecialchars(trim($_POST["name"]));
    $class = htmlspecialchars(trim($_POST["class"]));
    $semester = htmlspecialchars(trim($_POST["semester"]));
    $gender = isset($_POST["gender"]) ? htmlspecialchars($_POST["gender"]) : '';
    $mobile = htmlspecialchars(trim($_POST["mobile"]));

    // Validation
    if (empty($name) || empty($class) || empty($semester) || empty($gender) || empty($mobile)) {
        $error = "All fields are required!";
    } elseif (!preg_match("/^[0-9]{10}$/", $mobile)) {
        $error = "Invalid mobile number! It must be 10 digits.";
    } else {
        // Save data
        $userData = "$name | $class | $semester | $gender | $mobile\n";
        file_put_contents("users.txt", $userData, FILE_APPEND);
        $success = "Registration successful!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Registration</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      padding: 30px;
    }
    form {
      background: white;
      padding: 25px;
      max-width: 450px;
      margin: auto;
      border-radius: 10px;
      box-shadow: 0 0 10px #aaa;
    }
    input[type="text"],
    input[type="number"] {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    .radio-group {
      margin: 8px 0;
    }
    .radio-group label {
      margin-right: 15px;
    }
    input[type="submit"] {
      background-color: #28a745;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      width: 100%;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #218838;
    }
    .message {
      text-align: center;
      margin-bottom: 15px;
      padding: 10px;
      border-radius: 5px;
    }
    .success {
      background-color: #d4edda;
      color: #155724;
    }
    .error {
      background-color: #f8d7da;
      color: #721c24;
    }
  </style>
</head>
<body>

<h2 style="text-align:center;">Student Registration</h2>

<?php
if (isset($success)) {
    echo "<div class='message success'>$success</div>";
} elseif (isset($error)) {
    echo "<div class='message error'>$error</div>";
}
?>

<form method="POST" action="">
  <label for="name">Name:</label>
  <input type="text" name="name" required>

  <label for="class">Class:</label>
  <input type="text" name="class" required>

  <label for="semester">Semester:</label>
  <input type="text" name="semester" required>

  <label>Gender:</label>
  <div class="radio-group">
    <label><input type="radio" name="gender" value="Male" required> Male</label>
    <label><input type="radio" name="gender" value="Female"> Female</label>
  </div>

  <label for="mobile">Mobile Number:</label>
  <input type="text" name="mobile" required>

  <input type="submit" value="Register">
</form>
<br><br>
<h4> This code is executed by Vaibhav Sharma,2220100288 </h4>
</body>
</html>