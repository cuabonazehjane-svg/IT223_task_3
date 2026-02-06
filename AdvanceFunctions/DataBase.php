<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Base</title>
</head>
<body>
    <?php
include "../config/db.php";

$result = $conn->query("SELECT DATABASE() AS result");
$row = $result->fetch_assoc();

echo "<h3>DATABASE</h3>";
echo $row['result'];
?>
</body>
</html>
