<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conv</title>
</head>
<body>
    <?php
include "../config/db.php";

$result = $conn->query("SELECT CONV(15,10,2) AS result");
$row = $result->fetch_assoc();

echo "<h3>CONV</h3>";
echo $row['result'];
?>
</body>
</html>
