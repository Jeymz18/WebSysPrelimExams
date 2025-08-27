<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; text-align: center; }
        .calculator { border: 2px solid #ccc; padding: 20px; width: 300px; margin: auto; }
        input, button { margin: 5px; padding: 5px; width: 90%; }
        .result { font-weight: bold; color: #333; margin-top: 15px; }
    </style>
</head>
<body>
    <h1>GradeCalculator</h1>
   
    <div class="calculator">
        <form method="POST">
            <input type="number" name="Quiz" placeholder="Quiz Score" required>
            <input type="number" name="Assignment" placeholder="Assignment Score" required>
            <input type="number" name="Exam" placeholder="Exam Score" required>
            <button type="submit">Calculate</button>
        </form>
       
        <?php
            if ($_POST) {
                $Quiz = $_POST['Quiz'];
                $Assignment = $_POST['Assignment'];
                $Exam = $_POST['Exam'];

                $Average = ($Quiz * 0.30) + ($Assignment * 0.30) + ($Exam * 0.40);

                if ($Average >= 90) {
                    $letterGrade = "A";
                } elseif ($Average >= 80) {
                    $letterGrade = "B";
                } elseif ($Average >= 70) {
                    $letterGrade = "C";
                } elseif ($Average >= 60) {
                    $letterGrade = "D";
                } else {
                    $letterGrade = "F";
                }

                echo "<div class='result'>Final Grade: " . number_format($Average, 1) . "<br>Letter Grade: $letterGrade</div>";
            }
        ?>
    </div>
</body>
</html>