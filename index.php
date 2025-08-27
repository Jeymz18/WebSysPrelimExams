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
   
    <!-- dito ako mag iinput ng mga number o scores para sa quiz, assignment, exam -->
    <div class="calculator">
        <form method="POST">
            <input type="number" name="Quiz" placeholder="Quiz Score" required>
            <input type="number" name="Assignment" placeholder="Assignment Score" required>
            <input type="number" name="Exam" placeholder="Exam Score" required>
            <button type="submit">Calculate</button>
        </form>
       
        <?php
            if ($_POST) {
                //ito dito napupunta ang values na ininput ko sa quiz,exam.....
                $Quiz = $_POST['Quiz'];
                $Assignment = $_POST['Assignment'];
                $Exam = $_POST['Exam'];
                
                //ito yung computaion ng grading system
                $Average = ($Quiz * 0.30) + ($Assignment * 0.30) + ($Exam * 0.40);

                //dito naman malalaman kung ano ang makukuhang ko grade letter base diyan sa magaging average
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

                //eto na ang magiging output at dito ipapakita ang result ng average at kung ano ang letter grade mo
                echo "<div class='result'>Final Grade: " . number_format($Average, 1) . "<br>Letter Grade: $letterGrade</div>";
            }
        ?>
    </div>
</body>
</html>