<?php
    require_once __DIR__ . "/../Models/config.php";
    require_once __DIR__ . "/../Controller/customersController.php";
?>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <title> Customers </title>
    </head>
    <body>
        <header class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
            <ul class=" navbar-nav ">
                <li class="nav-item">
                    <a href="../index.html" class="nav-link">Home </a>
                </li>
                <li class="nav-item">
                    <a href="gamelist.php" class="nav-link"> Game list</a>
                </li>
                <li class="nav-item">
                    <a href="customers.php" class="navbar-brand"> Customers</a>
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
                <th>Name</th>
                <th>Gender</th>
                <th>Date of birth</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Registration date</th>
                <th>Customer status</th>
                <th>Loyalty points</th>
                <th>Newsletter status</th>
                <th>Notes</th>
                <th>Created at</th>
                <th>Last updated at</th>
            </tr>
            <?php
                while ($row = $customerresult->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>". $row["first_name"] . " " . $row["last_name"] . "</td>";
                    echo "<td>" . $row["gender"] . "</td>";
                    echo "<td>" . $row["date_of_birth"] . "</td>";
                    echo "<td>" . $row["email"] . "<br>" . $row["phone"] . "</td>";
                    echo "<td>" . $row["street"] . " " . $row["house_number"] . "<br>" . $row["postal_code"] . " " . $row["city"] . "<br>" . $row["country"] . "</td>";
                    echo "<td>" . $row["registration_date"] . "</td>";
                    echo "<td>" . $row["customer_status"] . "</td>";
                    echo "<td>" . $row["loyalty_points"] . "</td>";
                    echo "<td>" . $row["newsletter_subscribed"] . "</td>";
                    echo "<td>" . $row["notes"] . "</td>";
                    echo "<td>" . $row["created_at"] . "</td>";
                    echo "<td>" . $row["updated_at"] . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>