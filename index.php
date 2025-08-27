<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .calculator { border: 2px solid #ccc; padding: 20px; width: 300px; }
        input, select, button { margin: 5px; padding: 5px; }
        .result { font-weight: bold; color: #333; }
    </style>
</head>
<body>
    <h1>Simple Calculator</h1>
   
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
               
                if (is_numeric($Quiz) && is_numeric($Assignment) && is_numeric($Exam) &&
                    min($Quiz, $Assignment, $Exam) >= 0 && 
                    max($Quiz, $Assignment, $Exam) <= 100) {
                    
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

                    echo "Final Grade: " . number_format($Average, 1) . " (Letter Grade: $letterGrade)";
                }
            }
        ?>
    </div>
</body>
</html>