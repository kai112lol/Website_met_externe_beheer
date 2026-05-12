<html>
    <head>
        <title>voeg klant toe</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <h1>voeg nieuwe klant toe</h1>
        <form method="post" action="../Pages/customers.php?action=store">
            <?php include __DIR__ . "/../Models/config.php"; 
            include __DIR__ . "/customersForm.php"; ?>
        <button type="submit" class="btn btn-primary">voeg klant toe</button>
    </form>
    </body>
</html>