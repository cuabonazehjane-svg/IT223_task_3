<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binary</title>
</head>
<body>
    <?php
include "../config/db.php";

$result = $conn->query("SELECT BINARY 'W3Schools.com' AS result");
$row = $result->fetch_assoc();

echo "<h3>BINARY</h3>";
echo $row['result'];
?>
</body>
</html>
