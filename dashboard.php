<?php
include 'db_connect.php';

// Your student ID (change if you add more students)
$student_id = 1;

// Get student details
$query = "SELECT * FROM students WHERE id = $student_id";
$result = mysqli_query($conn, $query);
$student = mysqli_fetch_assoc($result);

// Get enrolled courses
$courses_query = "SELECT s.code, s.name 
                  FROM subjects s 
                  JOIN grades g ON s.id = g.subject_id 
                  WHERE g.student_id = $student_id 
                  ORDER BY s.code";
$courses_result = mysqli_query($conn, $courses_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Abdullah Khursheed</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

    <div class="card profile-section">
        <img src="https://ui-avatars.com/api/?name=Abdullah+Khursheed&size=200&background=3498db&color=fff&bold=true" class="profile-img">
        <h1><?php echo $student['name']; ?></h1>
        <h2>Roll No: <?php echo $student['roll_no']; ?></h2>
        <div class="cgpa-box">CGPA: <?php echo $student['cgpa']; ?> / 4.00</div>
    </div>

    <div class="card">
        <a href="gradebook.php" class="btn">View Grade Book</a>
        <a href="index.html" class="btn btn-secondary">Logout</a>
    </div>

    <div class="card">
        <h2 style="text-align:left; margin-bottom:20px;">Enrolled Courses</h2>
        <div class="courses-grid">
            <?php while($course = mysqli_fetch_assoc($courses_result)): ?>
            <div class="course-card">
                <div class="course-code"><?php echo $course['code']; ?></div>
                <div class="course-name"><?php echo $course['name']; ?></div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>

</div>
</body>
</html>