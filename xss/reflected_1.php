<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reflected XSS Level 1 </title>
</head>
<body>
    <h1>Reflected XSS Level 1</h1>
    <form action="" method="GET">
        <label for="input">Input:</label>
        <input type="text" id="input" name="input">
        <button type="submit">Submit</button>
    </form>
    <div>
        <?php
        if (isset($_GET['input'])) {
            $input = htmlspecialchars($_GET['input']);
            echo "<p>Hasil: $input</p>";
        }
        ?>
    </div>
    <h2>Source Code</h2>
    <?php highlight_string(file_get_contents(basename(__FILE__))); ?>
</body>
</html>
