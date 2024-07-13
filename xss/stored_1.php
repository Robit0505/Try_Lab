<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stored XSS Level 1</title>
</head>
<body>
    <h1>Stored XSS Level 1</h1>
    <form action="" method="POST">
        <label for="input">Input:</label>
        <input type="text" id="input" name="input">
        <button type="submit">Submit</button>
    </form>
    <?php
    // Simpan data yang diinputkan jika ada
    if (isset($_POST['input'])) {
        // Buka file untuk menambahkan data
        $file = fopen("stored_xss_data1.txt", "a");
        fwrite($file, $_POST['input'] . "\n");
        fclose($file);
        echo "<p>Data telah disimpan: " . $_POST['input'] . "</p>"; // Tanpa htmlspecialchars()
    }

    // Tampilkan semua data yang sudah disimpan
    echo "<h2>Data yang sudah disimpan:</h2>";
    $stored_xss_data = file("stored_xss_data1.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if ($stored_xss_data) {
        echo "<ul>";
        foreach ($stored_xss_data as $data) {
            echo "<li>" . $data . "</li>"; // Tanpa htmlspecialchars()
        }
        echo "</ul>";
    } else {
        echo "<p>Tidak ada data yang tersimpan.</p>";
    }
    ?>
    <h2>Source Code</h2>
    <?php highlight_string(file_get_contents(basename(__FILE__))); ?>
</body>
</html>
