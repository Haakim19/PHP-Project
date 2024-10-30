<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <!-- <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group button {
            padding: 10px 15px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 50px;
        }

        .form-group button:hover {
            background-color: #0056b3;
        }
    </style> -->
</head>

<body>
    <div class="form-container">
        <form action="submit.php" method="post">
            <div class="form-group">
                <label for="id">ID </label>
                <input type="text" id="id" name="id" required placeholder="ID">
            </div>
            <div class="form-group">
                <label for="id">FIIRST NAME</label>
                <input type="text" id="first_name" name="first_name" required placeholder="First Name">
            </div>
            <div class="form-group">
                <label for="id">AGE</label>

                <input type="number" id="age" name="age" required placeholder="Age">
            </div>
            <div class="form-group">
                <label for="id">CITY</label>

                <input type="text" id="city" name="city" required placeholder="City">
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>