<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFNULL</title>
</head>
<body>
    <?php
include "../config/db.php";

$result = $conn->query("SELECT IFNULL(NULL, 'W3Schools.com') AS result");
$row = $result->fetch_assoc();

echo "<h3>IFNULL</h3>";
echo $row['result'];
?>
</body>
</html>
