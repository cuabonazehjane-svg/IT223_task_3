<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last Insert ID</title>
</head>
<body>
    <?php
include "../config/db.php";

$conn->query("INSERT INTO advancefunctions (str_value) VALUES ('Test')");
$result = $conn->query("SELECT LAST_INSERT_ID() AS result");
$row = $result->fetch_assoc();

echo "<h3>LAST_INSERT_ID</h3>";
echo $row['result'];
?>
</body>
</html>
