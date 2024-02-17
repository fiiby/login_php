<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up page</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* width: 100%; */
            background-color: palegoldenrod;
            ;

        }

        h1 {
            color: papayawhip;
        }

        .signup-form {
            max-width: 300px;
            width: 100%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

            background-color: #00b371;
        }

        .form-input {
            margin-bottom: 20px;
        }

        .username,
        .email,
        .password {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .signup-btn {
            background-color: papayawhip;
            color: black;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .signup-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="container">

        <form class="signup-form" action="signup.php" method="POST">

            <h1>Sign-up</h1>
            <div class="form-input">
                <input type="text" class="username" name="username" placeholder=" Enter username">
            </div>
            <br />
            <div class="form-input">
                <input type="email" class="email" name="e-mail" placeholder="Enter email">
            </div>
            <br />
            <div class="form-input">
                <input type="password" class="password" name="password" placeholder="Enter password">
            </div>
            <div>
                <input type="submit" name="signup" class="signup-btn" value="Signup">
            </div>
        </form>
    </div>

    <?php
    if (isset($_POST['signup'])) {
        echo "Test here";
        $username = $_POST['username'];
        $email = $_POST['e-mail'];
        $password = $_POST['password'];

        // connect to db:
        include_once 'db-connect.php';

        // SQL query
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

        // Execute the query
        if ($database_connection->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $database_connection->error;
        }
        // Close the database connection
        $database_connection->close();
    }
    ?>
</body>

</html>