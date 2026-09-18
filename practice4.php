<!DOCTYPE html> 
<html>
<head>
    <title>Practice 4: Multiplication Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 40px;
        }
        table {
            border-collapse: collapse;
            margin: 30px auto;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: lightblue;
        }
        input {
            padding: 8px; }
        button {
            padding: 8px 15px; }
    </style>
</head>
<body>

    <h1>Multiplication Table Generator</h1>
    <form method="GET">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" min="1" required>
        <button type="submit"> Make Table
        </button>
    </form>
    
<?php

if (isset($_GET["number"])) {

    $number = intval($_GET["number"]);
    echo "<h2>Multiplication Table</h2>";
    echo "<table>";
    echo "<tr>";

    echo "<th>×</th>";

    for ($column = 1; $column <= $number; $column++) {

        echo "<th>$column</th>";

    }

    echo "</tr>";

    for ($row = 1; $row <= $number; $row++) {

        echo "<tr>";

        echo "<th>$row</th>";

        for ($column = 1; $column <= $number; $column++) {

            $result = $row * $column;

            echo "<td>$result</td>";

        }

        echo "</tr>";

    }
    echo "</table>";

}

?>

</body>
</html>