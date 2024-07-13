<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stored XSS Level 2</title>
</head>
<body>
    <h1>Stored XSS Level 2</h1>
    <form action="" method="POST">
        <label for="input">Input:</label>
        <input type="text" id="input" name="input">
        <button type="submit">Submit</button>
    </form>
    <?php
    // Simpan data yang diinputkan jika ada
    if (isset($_POST['input'])) {
        // Clean input dengan filter lebih ketat
        $clean_input = filter_var($_POST['input'], FILTER_SANITIZE_STRING);
        
        // Buka file untuk menambahkan data
        $file = fopen("stored_xss_data2.txt", "a");
        fwrite($file, $clean_input . "\n");
        fclose($file);
        echo "<p>Data telah disimpan: " . htmlspecialchars($clean_input) . "</p>";
    }

    // Tampilkan semua data yang sudah disimpan
    echo "<h2>Data yang sudah disimpan:</h2>";
    $stored_xss_data = file("stored_xss_data2.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if ($stored_xss_data) {
        echo "<ul>";
        foreach ($stored_xss_data as $data) {
            echo "<li>" . htmlspecialchars($data) . "</li>";
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
