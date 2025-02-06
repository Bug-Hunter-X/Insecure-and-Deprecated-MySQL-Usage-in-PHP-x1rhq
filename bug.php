This code uses the `mysql_*` functions, which are deprecated and insecure.  They are prone to SQL injection vulnerabilities. The code is also missing error handling, making debugging difficult and the application vulnerable to unexpected behavior.

```php
$conn = mysql_connect('localhost', 'user', 'password');
if (!$conn) {
die('Could not connect: ' . mysql_error());
}
mysql_select_db('database', $conn);
$sql = "SELECT * FROM users WHERE username = '" . $_GET['username'] . "'";
$result = mysql_query($sql, $conn);
if (!$result) {
die('Invalid query: ' . mysql_error());
}
while ($row = mysql_fetch_assoc($result)) {
  echo "Username: " . $row['username'] . "<br>";
}
mysql_close($conn);
```