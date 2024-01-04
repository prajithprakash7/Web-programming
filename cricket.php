<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Cricket Players</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
$indianPlayers = array(
    "Rohith Sharma",
    "Virat Koli",
    "Shugman Gill",
    "KL Rahul",
    "Suryakumar",
    "Shikhar Dhawan",
    "Hardik Pandya",
    "Rishabh Pant",
    "Mohammed Shami",
    "Jasprit Bumrah"
);
?>

<h2>Indian Cricket Players</h2>

<table>
    <tr>
        <th>Player Name</th>
    </tr>

    <?php
    foreach ($indianPlayers as $player) {
        echo "<tr><td>$player</td></tr>";
    }
    ?>
</table>

</body>
</html>

