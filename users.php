<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            width: 100%;
        }

        tr,
        td,
        th {
            border: 1px solid black;
        }

        .style-btn {
            background-color: papayawhip;
            color: white;
            font-weight: bold;
            background-color: #00b371;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div>
        <?php include_once('nav.php'); ?>
    </div>
    <br>
    <div>
        <button class="style-btn">Add user</button>
    </div>
    <br>


    <?php
    include_once 'db-connect.php';

    $sql = "SELECT * FROM users";

    $result = $database_connection->query($sql);

    echo "<table> 
    <tr>

        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th colspan=2>Action</th>
    </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row['id'] . " </td>
        <td>" . $row['username'] . "</td>
        <td>" . $row['email'] . "</td>
        <td>
        <button class='style-btn'> Edit </button>
          </td>
         <td>
         <button class='style-btn'> Delete  </button>
          </td>
     
    </tr>";
    }

    echo "</table>";
    ?>
</body>

</html>