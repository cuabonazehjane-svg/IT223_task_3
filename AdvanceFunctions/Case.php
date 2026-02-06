<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case</title>
</head>
<body>
    <?php
include "../config/db.php";

$sql = "
SELECT OrderID, Quantity,
CASE
    WHEN Quantity > 30 THEN 'Greater than 30'
    WHEN Quantity = 30 THEN 'Equal to 30'
    ELSE 'Under 30'
END AS Result
FROM AdvanceFunctionsTwo
";

$result = $conn->query($sql);

echo "<h3>CASE</h3>";
while ($row = $result->fetch_assoc()) {
    echo "Order {$row['OrderID']} - {$row['Result']}<br>";
}
?>
</body>
</html>
