<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIN</title>
</head>
<body>
    <?php
include "../config/db.php";

$result = $conn->query("SELECT BIN(15) AS result");
$row = $result->fetch_assoc();

echo "<h3>BIN()</h3>";
echo $row['result'];
?>
</body>
</html>
