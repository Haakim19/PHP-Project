<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "connect.php";
    $userName = $_POST['userName'];
    $pwd = $_POST['pwd'];

    $stmt = $conn->prepare("INSERT INTO users (userName, pwd) VALUES (:userName, :pwd)");
    $stmt->bindParam(':userName', $userName);
    $stmt->bindParam(':pwd', $pwd);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Unable to create record";
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