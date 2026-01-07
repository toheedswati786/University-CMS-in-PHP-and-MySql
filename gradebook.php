<?php
include 'db_connect.php';

$student_id = 1;

// Get subject and grades (we show only CS323 for clean look)
$query = "SELECT s.code, s.name, g.*
          FROM subjects s
          JOIN grades g ON s.id = g.subject_id
          WHERE g.student_id = $student_id
          LIMIT 1";  // Only one subject for beautiful demo
$result = mysqli_query($conn, $query);
$grade = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

    <a href="dashboard.php" class="back-link">← Back to Dashboard</a>

    <div class="card">
        <div class="subject-header">
            <?php echo $grade['code'] . " - " . $grade['name']; ?>
        </div>

        <table>
            <tr>
                <th>Assessment Type</th>
                <th>Weight</th>
                <th>Obtained</th>
            </tr>
            <tr>
                <td class="assessment">Mid Term</td>
                <td class="weight high">30.0%</td>
                <td class="obtained"><?php echo number_format($grade['mid_term'], 2); ?></td>
            </tr>
            <tr>
                <td class="assessment">Assignment</td>
                <td class="weight low">10.0%</td>
                <td class="obtained"><?php echo number_format($grade['assignment'], 2); ?></td>
            </tr>
            <tr>
                <td class="assessment">Quiz</td>
                <td class="weight low">10.0%</td>
                <td class="obtained"><?php echo number_format($grade['quiz'], 2); ?></td>
            </tr>
            <tr>
                <td class="assessment">Final</td>
                <td class="weight high">50.0%</td>
                <td class="obtained"><?php echo number_format($grade['final_exam'], 2); ?></td>
            </tr>
        </table>
    </div>

</div>
</body>
</html>