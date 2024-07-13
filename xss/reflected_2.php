<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reflected XSS Level 2</title>
</head>
<body>
    <h1>Reflected XSS Level 2</h1>
    <form action="" method="GET">
        <label for="input">Input:</label>
        <input type="text" id="input" name="input">
        <button type="submit">Submit</button>
    </form>
    <div>
        <?php
        if (isset($_GET['input'])) {
            // Filter input to allow only alphanumeric characters
            $filtered_input = preg_replace('/[^a-zA-Z0-9\s]/', '', $_GET['input']);
            $input = htmlspecialchars($filtered_input, ENT_QUOTES, 'UTF-8'); // Escape input to prevent XSS
            echo "<p id='result'>$input</p>";
        }
        ?>
    </div>
    <h2>Source Code</h2>
    <?php highlight_string(file_get_contents(basename(__FILE__))); ?>
</body>
</html>
