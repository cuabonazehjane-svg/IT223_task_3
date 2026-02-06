<!DOCTYPE html>
<html>
<head>
    <title>SQL Functions Demo</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid black; padding: 8px; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

<h2>SQL Functions Demonstration</h2>

<table>
    <tr>
        <th>SQL Function</th>
        <th>Description</th>
        <th>Example Code</th>
        <th>Example Output</th>
    </tr>

    <tr>
        <td>COUNT()</td>
        <td>Counts total records</td>
        <td>SELECT COUNT(*) FROM employees;</td>
        <td><a href="count.php" target="_blank">View Output</a></td>
    </tr>

    <tr>
        <td>SUM()</td>
        <td>Adds salary values</td>
        <td>SELECT SUM(salary) FROM employees;</td>
        <td><a href="sum.php" target="_blank">View Output</a></td>
    </tr>

    <tr>
        <td>AVG()</td>
        <td>Gets average salary</td>
        <td>SELECT AVG(salary) FROM employees;</td>
        <td><a href="avg.php" target="_blank">View Output</a></td>
    </tr>

    <tr>
        <td>MAX()</td>
        <td>Highest salary</td>
        <td>SELECT MAX(salary) FROM employees;</td>
        <td><a href="max.php" target="_blank">View Output</a></td>
    </tr>

    <tr>
        <td>MIN()</td>
        <td>Lowest salary</td>
        <td>SELECT MIN(salary) FROM employees;</td>
        <td><a href="min.php" target="_blank">View Output</a></td>
    </tr>

    <tr>
        <td>UPPER()</td>
        <td>Converts name to uppercase</td>
        <td>SELECT UPPER(name) FROM employees;</td>
        <td><a href="upper.php" target="_blank">View Output</a></td>
    </tr>

    <tr>
        <td>LOWER()</td>
        <td>Converts department to lowercase</td>
        <td>SELECT LOWER(department) FROM employees;</td>
        <td><a href="lower.php" target="_blank">View Output</a></td>
    </tr>

    <tr>
        <td>LENGTH()</td>
        <td>Counts characters in name</td>
        <td>SELECT name, LENGTH(name) FROM employees;</td>
        <td><a href="length.php" target="_blank">View Output</a></td>
    </tr>

    <tr>
        <td>NOW()</td>
        <td>Shows current date and time</td>
        <td>SELECT NOW();</td>
        <td><a href="now.php" target="_blank">View Output</a></td>
    </tr>

</table>

</body>
</html>
