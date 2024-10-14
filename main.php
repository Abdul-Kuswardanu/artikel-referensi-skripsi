<?php
$db = new SQLite3('database.db');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Referensi untuk Skripsi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <header>
        <h1>ReferensiSkripsi</h1>
        <nav class="pilihan">
            <a href="#">Home</a>
            <a href="#">Referensi</a>
            <a href="#">Jurnal Ilmiah</a>
            <a href="#">Skripsi</a>
            <a href="#">Forum</a>
        </nav>
    </header>

    <section class="content"><br>
    <div class="references">
        <?php 
        // Execute the query
        $results = $db->query("SELECT * FROM skripsi");

        // Check if the query execution was successful
        if (!$results) {
            echo "Error executing query: " . $db->lastErrorMsg();
        } else {
            // Check if there are any rows returned
            if ($row = $results->fetchArray(SQLITE3_ASSOC)) {
                // Loop through the results
                do {
        ?>
                    <div class="reference">
                        <h3><?php echo htmlspecialchars($row['title']); ?></h3>
                        <p><?php echo htmlspecialchars($row['content']); ?></p>
                        <div class="reference-actions">
                            <a href="#">Download File</a> | 
                            <a href="#">Link</a> | 
                            <a href="#">Email</a>
                        </div>
                    </div>
        <?php 
                } while ($row = $results->fetchArray(SQLITE3_ASSOC));
            } else {
                // If no rows were returned, display a message
                echo "No references found.";
            }
        }
        ?>
    </div>
    </section>


    <section class="submission">
        <h3>Submit a New Skripsi</h3>
        <form method="POST" action="index.php">
            <input type="text" name="title" placeholder="Title" required>
            <textarea name="content" placeholder="Content" required></textarea>
            <button type="submit" name="submit">Submit</button><br><br>
        </form>
    </section>

    <footer>
        <div>
            <input type="email" placeholder="Email" name="email">
            <button>Submit</button>
        </div>
        <p>Created by me</p>
        <p>Contact Person: <a href="mailto:">Email</a> | <a href="#">WhatsApp</a></p>
    </footer>
</div>
</body>