<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection ID</title>
</head>
<body>
    <?php
include "../config/db.php";

$result = $conn->query("SELECT CONNECTION_ID() AS result");
$row = $result->fetch_assoc();

echo "<h3>CONNECTION_ID</h3>";
echo $row['result'];
?>
</body>
</html>
