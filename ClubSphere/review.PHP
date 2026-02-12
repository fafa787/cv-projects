<?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Connect to database
    $conn = new mysqli("localhost", "root", "", "universityclubsdb");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // 2. Get form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $student_id = $_POST['student_id'];
    $major = $_POST['major'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // 3. Insert into database
    $sql = "INSERT INTO student (ID, Fname, Lname, Major, Email, PhoneNum) 
    VALUES ('$student_id', '$first_name', '$last_name', '$major', '$email', '$phone')";


    if ($conn->query($sql) === TRUE) {
        $success = "Registration successful!";
    } else {
        $error = "Error: " . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Register Student</title>
    <link rel="stylesheet" type="text/css" href="WebStyle.css">
</head>
<body>

<div class="Reg">
    <p class="log">Register</p>

    <?php if (isset($success)) echo "<p style='color:green;'>$success</p>"; ?>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

    <form method="POST" action="">
        <label class="infoLabel">First name</label><br>
        <input class="info" name="first_name" type="text" required><br>

        <label class="infoLabel">Last name</label><br>
        <input class="info" name="last_name" type="text" required><br>

        <label class="infoLabel">Student ID</label><br>
        <input class="info" name="student_id" type="text" required><br>

        <label class="infoLabel">Major</label><br>
        <input class="info" name="major" type="text"><br>

        <label class="infoLabel">Phone Number</label><br>
        <input class="info" name="phone" type="text"><br>

        <label class="infoLabel">Email</label><br>
        <input class="info" name="email" type="email"><br>

        <input class="RegButton" type="submit" value="Register">
    </form>
</div>

</body>
</html>
