<?php
phpinfo();
echo "<h1>LEMP Stack Working!</h1>";
try {
    $pdo = new PDO(
        "mysql:host=" . getenv('DB_HOST') . ";dbname=" . getenv('DB_NAME'),
        getenv('DB_USER'),
        getenv('DB_PASSWORD')
    );
    echo "<p>Database connection: OK</p>";
} catch (PDOException $e) {
    echo "<p>Database connection: FAILED</p>";
}
?>
