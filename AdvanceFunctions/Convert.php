<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert</title>
</head>
<body>
    <?php
include "../config/db.php";

$result = $conn->query("SELECT CONVERT('2017-08-29', DATE) AS result");
$row = $result->fetch_assoc();

echo "<h3>CONVERT</h3>";
echo $row['result'];
?>
</body>
</html>
