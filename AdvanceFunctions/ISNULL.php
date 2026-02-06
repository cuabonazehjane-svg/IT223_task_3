<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISNULL</title>
</head>
<body>
    <?php
include "../config/db.php";

$result = $conn->query("SELECT ISNULL(NULL) AS result");
$row = $result->fetch_assoc();

echo "<h3>ISNULL</h3>";
echo $row['result'];
?>
</body>
</html>
