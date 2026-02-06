<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
include "../config/db.php";

$result = $conn->query("SELECT CAST('2017-08-29' AS DATE) AS result");
$row = $result->fetch_assoc();

echo "<h3>CAST</h3>";
echo $row['result'];
?>
</body>
</html>
