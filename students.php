<!DOCTYPE html>
<html>
<head>
    <title>Student Names</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        pre {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Student Names</h2>
        <?php
        // Array to store student names
        $students = ["prajith"=>"12", "safal"=>"34", "githu"=>"54", "Faizal"=>"10", "messi"=>"65", "neymar"=>"20"];

        // Display original array using print_r
        echo "<h3>Original array of students:</h3>";
        echo "<pre>";
        print_r($students);
        echo "</pre>";

        // Sorting in ascending order using asort
        asort($students);
        echo "<h3>Array sorted in ascending order using asort:</h3>";
        echo "<pre>";
        print_r($students);
        echo "</pre>";

        // Sorting in descending order using arsort
        arsort($students);
        echo "<h3>Array sorted in descending order using arsort:</h3>";
        echo "<pre>";
        print_r($students);
        echo "</pre>";
        ?>
    </div>
</body>
</html>

