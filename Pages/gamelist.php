<?php
require_once "config.php";
?>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <title> Games </title>
    </head>
    <body>
        <header class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
            <ul class=" navbar-nav ">
                <li class="nav-item">
                    <a href="../index.html" class="nav-link">Home </a>
                </li>
                <li class="nav-item">
                    <a href="gamelist.php" class="navbar-brand"> Game list</a>
                </li>
                <li class="nav-item">
                    <a href="customers.php" class="nav-link"> Customers</a>
                </li>
                <li class="nav-item">
                    <a href="employee.php" class="nav-link"> Employees</a>
                </li>
                <li class="nav-item">
                    <a href="suppliers.php" class="nav-link"> Suppliers</a>
                </li>
                <li class="nav-item">
                    <a href="transactions.php" class="nav-link"> Transactions</a>
                </li>
            </ul>
        </header>
        <table class="table table-bordered">
            <tr>
                <th>Title</th>
                <th>Game type</th>
                <th>Release date</th>
                <th>Genre</th>
                <th>Platform</th>
                <th>Rating</th>
                <th>Rawg rating</th>
                <th>Created at</th>
                <th>Last updated at</th>
            </tr>
            <?php
                while ($row = $gameresult->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . $row["title"] . "</td>";
                    echo "<td>" . $row["description"] . "</td>";
                    echo "<td>" . $row["released_at"] . "</td>";
                    echo "<td>" . $row["genre_name"] . "</td>";
                    echo "<td>" . $row["platform_name"] . "</td>";
                    echo "<td>" . $row["personal_rating"] . "</td>";
                    echo "<td>" . $row["rawg_rating"] . "</td>";
                    echo "<td>" . $row["created_at"] . "</td>";
                    echo "<td>" . $row["updated_at"] . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>