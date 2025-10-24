<?php
// Minimal PHP "Hello World" page for testing the environment.
// Can be run with: php -S localhost:8000 (for browser) or php index.php (CLI)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PHP Hello World</title>
    <style>
        body {
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
            padding: 2rem;
        }

        .meta {
            color: #555;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
    <h1>Hello, World — PHP is working!</h1>
    <p class="meta">Current time: <?php echo htmlspecialchars(date('Y-m-d H:i:s')); ?></p>
    <p class="meta">PHP version: <?php echo htmlspecialchars(PHP_VERSION); ?></p>
    <p>Quick test output from PHP (CLI-friendly):</p>
    <pre><?php echo "Hello from PHP CLI output\n"; ?></pre>
</body>

</html>