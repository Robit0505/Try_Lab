<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DOM-based XSS Level 2</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery for convenience -->
    <style>
        /* Your custom styles */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
        }

        button {
            margin-top: 10px;
            padding: 8px 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>DOM-based XSS Level 2</h1>
        <div id="usernameDisplay">
            <?php
            // Process the submitted username
            $username = isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '';
            echo 'Welcome, ' . $username . '!';
            ?>
        </div>
        <form id="inputForm" method="post">
            <label for="username">Enter your username:</label>
            <input type="text" id="username" name="username">
            <button type="submit">Submit</button>
        </form>
    </div>
    
    <script>
        // Your JavaScript code
        $(document).ready(function() {
            $('#inputForm').submit(function(event) {
                event.preventDefault();
                var username = $('#username').val(); // Ambil nilai dari input username
                // Escape username to prevent XSS
                var safeUsername = filterXSS(username);
                $('#usernameDisplay').html('Welcome, ' + safeUsername + '!'); // Manipulasi DOM untuk menampilkan pesan
            });

            // Function to filter XSS payload
            function filterXSS(text) {
                // Basic XSS filter
                return text.replace(/<script.*?>|<\/script>/gi, '');
            }
        });
    </script>
</body>
</html>
