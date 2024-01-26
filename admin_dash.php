<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        nav {
            background-color: green;
            padding: 14px 0px;
        }

        ul li {
            display: inline;
        }

        ul li a {
            text-decoration: none;
            color: white;
            padding: 0px 28px;
            font-family: 'Courier New', Courier, monospace;
            font-weight: bold;
            font-size: large;
        }
    </style>
</head>

<body>
    <div>
        <!-- Navigation -->
        <nav>
            <ul>
                <li><a href="admin_dash.php?id=users">Manage Users</a></li>
                <li><a href="admin_dash.php?id=store">Manage Products</a></li>
                <li><a href="admin_dash.php?id=logout">Logout</a></li>
            </ul>
        </nav>

        <!-- Main Section -->
        <main>
            <div>
                <?php
                if (isset($_GET['id'])) {
                    $selected_option = $_GET['id'];

                    switch ($selected_option) {
                        case 'users':
                            include_once 'users.php';
                            break;
                        case 'roles':
                            echo "Roles";
                            break;
                        case 'store':
                            include_once 'store.php';
                            break;
                        case 'logout':
                            echo "Logout";
                            session_destroy();
                            header('Location: login.php');
                            break;
                        default:
                            echo "404 - Page not found";
                            break;
                    }
                }
                ?>
            </div>
        </main>
    </div>
</body>

</html>