<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "connect.php"; // Assuming this file contains your PDO connection setup

    // Make sure $conn is defined and initialized with a PDO connection object
    if (!isset($conn)) {
        // Replace the following line with your actual PDO connection setup
        $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    }

    // Sanitize user inputs
    $userName = htmlspecialchars($_POST['userName'], ENT_QUOTES, 'UTF-8');

    $pwd = $_POST['pwd'];

    // Hash the password before storing
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    try {
        // Prepare SQL and bind parameters
        $stmt = $conn->prepare("INSERT INTO Register (userName, pwd) VALUES (:userName, :pwd)");
        $stmt->bindParam(':userName', $userName);
        $stmt->bindParam(':pwd', $hashedPwd);

        // Execute the statement
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Unable to create record";
        }
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 , shringk-to-fit-no">
    <title>Sign-up page</title>
    <!-- bootsrap connect -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Sign up page</h1>
    <div class="container mt-5">
        <form method="POST">
            <div class="mb-3">
                <label for="userName" class="form-label">User Name</label>
                <input type="text" class="form-control" id="userName" name="userName" placeholder="User Name">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="pwd" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
</body>

</html>