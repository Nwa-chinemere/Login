<?php
$correct_username="owolabi";
$correct_age="15";
$correct_location="lomé";

$login_message="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $submitted_username = $_POST["username"];
    $submitted_age = $_POST["age"];
    $submitted_locatino = $_POST["location"];
    
    if ($submitted_username === $correct_username && $submitted_age === $correct_age && $submitted_location === $correct_location){
        $login_message = "<h1>welcome" . $submitted_username . i can see you are . $submitted_age years old . and you live in $submitted_location . "</h1><p>login successful</p>";
    }
    else {
        $login_message = "<h1>login failed</h1><p>incorrect credentials</p>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page title</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
    <form method"POST" action="">
        <label>username</label>
        <input type="text" id="username" placeholder="username" name="username" required>
        <label>age</label>
        <input type="tel" id="age" placeholder="age" name="age" required>
        <label>location</label>
        <input type="text" id="location" placeholder="location" name="location" required>
        <button>Sign in</button>
    </form>
</body>
</html>
