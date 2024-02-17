<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: palegoldenrod;
        }

        ul li {
            display: inline;
            align-content: center;

        }

        ul li a {
            padding: 0 30px;
            color: white;
            text-decoration: none;
            font-family: 'Courier New', Courier, monospace;
            font-weight: bold;
            font-size: large;
        }

        nav {
            background-color: #00b371;
            padding: 14px;
            height: 40px;
            width: 100%;

        }

        .user-btn {
          display: inline;
          position: relative;
         margin: 20px;
         margin: 20px;
        color: white;
        font-weight: bold;
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="store.php">Store</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">signup</a></li>
            <li><a href="admin_dash.php?id=logout">Logout</a></li>
            <div class="user-btn">
                <ul>
                    <li>Hello, User </li>

                </ul>
            </div>


        </ul>

    </nav>

</body>

</html>