<?php
    require_once "../Models/config.php";
?>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <title> Transactions </title>
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
                    <a href="customers.php" class="nav-link"> Customers</a>
                </li>
                <li class="nav-item">
                    <a href="employee.php" class="nav-link"> Employees</a>
                </li>
                <li class="nav-item">
                    <a href="suppliers.php" class="nav-link"> Suppliers</a>
                </li>
                <li class="nav-item">
                    <a href="transactions.php" class="navbar-brand"> Transactions</a>
                </li>
            </ul>
        </header>
        <table class="table table-bordered">
            <tr>
                <th>Customer</th>
                <th>Supplier</th>
                <th>Game</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Tax</th>
                <th>Transaction</th>
                <th>Payment method</th>
                <th>Payment status</th>
                <th>Order status</th>
                <th>Shipping address</th>
                <th>Billing address</th>
                <th>Reference notes</th>
                <th>Notes</th>
                <th>Created at</th>
                <th>Last updated at</th>
            </tr>
            <?php
                while ($row = $transactionresult->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>". $row["customer_name"] ."</td>";
                    echo "<td>". $row["supplier_name"] ."</td>";
                    echo "<td>". $row["game_title"] ."</td>";
                    echo "<td>" . $row["quantity"] . "</td>";
                    echo "<td>" . "€" . $row["unit_price"] . "</td>";
                    echo "<td>" . "€" . $row["discount_percent"] . "</td>";
                    echo "<td>" . "€" . $row["tax_percent"] . "</td>";
                    echo "<td>". $row["transaction_type"] ."<br>" . $row["transaction_date"] . "</td>";
                    echo "<td>" . $row["payment_method"] . "</td>";
                    echo "<td>" . $row["payment_status"] . "</td>";
                    echo "<td>" . $row["order_status"] . "</td>";
                    echo "<td>" . $row["shipping_address"] . "</td>";
                    echo "<td>" . $row["billing_address"] . "</td>";
                    echo "<td>" . $row["reference_note"] . "</td>";
                    echo "<td>" . $row["notes"] . "</td>";
                    echo "<td>" . $row["created_at"] . "</td>";
                    echo "<td>" . $row["updated_at"] . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>