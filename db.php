<?php
$db = new SQLite3('database.db');
if (!$db) {
     echo $db->lastErrorMsg();
} else {
    // echo "Table created or already exists.";
}

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $db->exec("INSERT INTO skripsi (title, content) VALUES ('$title', '$content')");
}

$query = "CREATE TABLE IF NOT EXISTS skripsi (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL,
    content TEXT NOT NULL
)";

$query = "CREATE TABLE IF NOT EXISTS emails (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    email TEXT NOT NULL UNIQUE
)";
$db->exec($query);

$result = $db->exec($query);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $stmt = $db->prepare('INSERT INTO emails (email) VALUES (:email)');
        $stmt->bindValue(':email', $email, SQLITE3_TEXT);

        try {
            $stmt->execute();
            echo "Email berhasil disimpan!";
        } catch (Exception $e) {
            echo "Error: Email sudah ada atau ada kesalahan lainnya.";
        }
    } else {
        echo "Format email tidak valid!";
    }
}

if ($result) {
    echo "Table 'skripsi' created successfully. 
            Klik <a href='main.php'>Disini</a>
    ";
} else {
    echo "Failed to create table 'skripsi'.<br>";
}

// $insertQuery = "INSERT INTO skripsi (title, content) 
// VALUES ('Sample Title', 'Sample Content for the Skripsi.'),
//         ('Judul 1', 'Ini konten skripsi'),
//         ('Judul 2', 'Ini konten jurnal'),
//         ('Judul 3', 'Ini konten jurnal ilmiah'),
//          ('Judul 4', 'Ini konten artikel ilmiah'),
//         ('Judul 5', 'Ini konten jurnal internasional'),
//         ('Judul 6', 'Ini konten penjelasan referensi skripsi')
// ";


// if ($db->exec($insertQuery)) {
//     echo "Sample data inserted successfully.";
// } else {
//     echo "Failed to insert sample data.";
// }

$results = $db->query("SELECT * FROM skripsi");

// $db->exec("INSERT INTO skripsi (title, content) VALUES ('Sample Title', 'Sample Content for the Skripsi.');");

// echo "Data inserted successfully!";
?>