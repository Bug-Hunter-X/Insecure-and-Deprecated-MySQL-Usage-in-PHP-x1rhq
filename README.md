# Insecure and Deprecated MySQL Usage in PHP

This repository demonstrates a common but critical error in PHP: the use of deprecated `mysql_*` functions for database interaction.  These functions are highly vulnerable to SQL injection attacks and lack proper error handling.

The `bug.php` file shows the insecure code. The `bugSolution.php` file provides a secure and improved version using prepared statements and PDO.

**Vulnerabilities:**

* **SQL Injection:** The original code is directly embedding user input into the SQL query, leaving it open to SQL injection attacks.
* **Lack of Error Handling:**  The code does not handle potential errors effectively, leading to unexpected behavior and making debugging difficult.
* **Deprecated Functions:** The `mysql_*` functions are deprecated and no longer supported in modern PHP versions.  

**Solution:**

The solution uses PDO (PHP Data Objects) with parameterized queries to prevent SQL injection.  It also includes robust error handling for improved stability and debugging.

This example highlights the importance of using secure and up-to-date coding practices to protect applications from common vulnerabilities.