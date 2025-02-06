This improved code uses PDO (PHP Data Objects) for database interaction, preventing SQL injection and providing better error handling.

```php
<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=database', 'user', 'password');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username');
  $stmt->execute(['username' => $_GET['username']]);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  foreach ($result as $row) {
    echo "Username: " . $row['username'] . "<br>";
  }
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>
```