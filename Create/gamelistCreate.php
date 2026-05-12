<html>
    <head>
        <title>Create Game</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <h1>voeg nieuwe game toe</h1>
        <form method="post" action="../Pages/gamelist.php?action=storegame">
            <?php include __DIR__ . "/../Models/config.php"; 
            include __DIR__ . "/gamelistForm.php"; ?>
        <button type="submit" class="btn btn-primary">Add Game</button>
    </form>
    </body>
</html>