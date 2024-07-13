<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS Challenge</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
            <span class="brand-text">XSS Challenge</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="resource.php">Resource</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1>XSS Challenge</h1>
        <p class="subtitle">Choose your challenge and prove your XSS skills.</p>
        <div class="card-container">
            <div class="card baby_xss1">
                <a href="xss/reflected_1.php">
                    <div class="card-body">
                        <h5 class="card-title">Reflected XSS Level 1</h5>
                        <p class="card-text">Learn the basics of Cross Site Scripting (XSS) with simple examples.</p>
                    </div>
                </a>
            </div>
            <div class="card baby_xss2">
                <a href="xss/stored_1.php">
                    <div class="card-body">
                        <h5 class="card-title">Stored XSS Level 1</h5>
                        <p class="card-text">Continue learning XSS with slightly more complex scenarios.</p>
                    </div>
                </a>
            </div>
            <div class="card baby_xss3">
                <a href="xss/dom_based_1.php">
                    <div class="card-body">
                        <h5 class="card-title">DOM-Based XSS Level 1</h5>
                        <p class="card-text">Advanced XSS examples to further your understanding.</p>
                    </div>
                </a>
            </div>
            <div class="card calculator">
                <a href="xss/reflected_2.php">
                    <div class="card-body">
                        <h5 class="card-title">Reflected XSS Level 2</h5>
                        <p class="card-text">Explore vulnerabilities related to calculator functionalities.</p>
                    </div>
                </a>
            </div>
            <div class="card csp">
                <a href="xss/stored_2.php">
                    <div class="card-body">
                        <h5 class="card-title">Stored XSS Level 2</h5>
                        <p class="card-text">Learn about CSP and how to secure your web applications.</p>
                    </div>
                </a>
            </div>
            <div class="card no_parentheses">
                <a href="xss/dom_based_2.php">
                    <div class="card-body">
                        <h5 class="card-title">DOM-Based XSS Level 2</h5>
                        <p class="card-text">Find vulnerabilities while avoiding the use of parentheses.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
