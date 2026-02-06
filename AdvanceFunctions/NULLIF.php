<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NULLIF</title>
</head>
<body>
    <?php
include "../config/db.php";

$result = $conn->query("SELECT NULLIF(25,25) AS result");
$row = $result->fetch_assoc();

echo "<h3>NULLIF</h3>";
var_dump($row['result']);
?>
</body>
</html>
