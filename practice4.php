<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EECS 348 Lab Practice Four</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 700px;
            margin: 40px auto;
            padding: 20px;
        }
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #333;
            padding: 6px 10px;
            text-align: center;
        }
        th {
            background-color: #e6f0fa;
        }
    </style>
</head>
<body>

    <h1>EECS 348 Lab Practice Four</h1>
    <p>Enter a number to generate its multiplication table (1 to that number).</p>

    <form method="get" action="practice4.php">
        <label for="n">Number: </label>
        <input type="text" name="n" id="n" value="<?php echo isset($_GET['n']) ? htmlspecialchars($_GET['n']) : ''; ?>">
        <button type="submit">Generate Table</button>
    </form>

    <?php
    if (isset($_GET['n']) && is_numeric($_GET['n']) && $_GET['n'] > 0) {
        $num = intval($_GET['n']);

        echo "<table>";
        echo "<tr><th>&times;</th>";
        for ($col = 1; $col <= $num; $col++) {
            echo "<th>" . $col . "</th>";
        }
        echo "</tr>";

        for ($row = 1; $row <= $num; $row++) {
            echo "<tr><th>" . $row . "</th>";
            for ($col = 1; $col <= $num; $col++) {
                echo "<td>" . ($row * $col) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } elseif (isset($_GET['n'])) {
        echo "<p>Please enter a valid positive number.</p>";
    }
    ?>

</body>
</html>
