<?php
    include __DIR__ . "/../Pages/config.php";
?>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title> Add Game </title>
</head>
<body>
        <div class="mb-3">
            <label class="form-label">Title:</label>
            <input type="text" name="title" placeholder="Enter game title" required>
        </div>
        <br>
        <div class="mb-3">
            <label class="form-label">Description:</label>
            <input class="form-control" type="text" name="description" placeholder="Enter game description" required>
        </div>
        <br>
        <div class="mb-3">
            <label class="form-label">Release Date:</label>
            <input type="date" name="released_at" required>
        </div>
        <br>
        <label class="form-label">Personal Rating: <span id="value">5.0</span></label>
        <br>
        <input type="range" id="rating" name="rating" min="1.0" max="10.0" step="0.1" value="5.0" required oninput="valueDisplay.textContent = this.value"/>
        <script>
            const valueDisplay = document.getElementById("value");
        </script>
        <br>
        <div class="mb-3">
            <label class="form-label">Genre:</label>
            <br>
            <?php
                $stmt = $conn->prepare("SELECT genre_id, name FROM genres");
                $stmt->execute();
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "
                        <label>
                            <input type='checkbox' name='genres[]' value='{$row['genre_id']}' >
                            {$row['name']}
                        </label>
                    ";
                }
            ?>
        </div>
        <br>
        <div class="mb-3">
            <label class="form-label">Platform:</label>
            <br>
                <?php
                    $stmt = $conn->prepare("SELECT platform_id, name FROM platforms");
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "
                            <label>
                                <input type='checkbox' name='platforms[]' value='{$row['platform_id']}' >
                                {$row['name']}
                            </label>
                        ";
                    }
                ?>
        </div>
        <br>
</body>