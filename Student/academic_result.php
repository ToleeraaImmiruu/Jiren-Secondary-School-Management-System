<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Result</title>
    <link rel="stylesheet" href="./css/academic_result.css">
</head>
<body>

<?php
include 'header.php';
include('../Common/databases/db_connection.php');
include('../Common/databases/mark_db_connection.php');



if (!isset($_SESSION['username'])) {
    die("Error: No username found in session.");
}

$username = $_SESSION['username'];

echo "<div class='academic'>";

// Fetch student data
$sql_student = "SELECT fullname, student_id, grade FROM student WHERE username='$username'";
$result_student = mysqli_query($con, $sql_student);

if (!$result_student || mysqli_num_rows($result_student) == 0) {
    die("Error: Student data not found.");
}

$data_student = mysqli_fetch_assoc($result_student);
$student_name = $data_student['fullname'];
$id = $data_student['student_id'];
$grade = $data_student['grade'];

// Fetch grade and class
$sql_grade = "SELECT grade, class FROM student WHERE username='$username'";
$result_grade = mysqli_query($con, $sql_grade);

if (!$result_grade || mysqli_num_rows($result_grade) == 0) {
    die("Error: Grade data not found.");
}

$data_grade = mysqli_fetch_assoc($result_grade);
$student_grade = $data_grade['grade'];
$student_class = $data_grade['class'];

// Fetch subjects
$sql_subjects = "SELECT subject_name, subject_code FROM subject WHERE grade='$student_grade'";
$result_subjects = mysqli_query($con, $sql_subjects);

echo "<div class='subject_list'><h1 class='title'>SUBJECT LIST</h1>";
echo "<table border='2' class='subjects'>
<tr>
<th>Subject Code</th>
<th>Subject Name</th>
</tr>";

while ($data = mysqli_fetch_assoc($result_subjects)) {
    echo "<tr><td>{$data['subject_code']}</td><td>{$data['subject_name']}</td></tr>";
}
echo "</table></div>";

// Fetch marks data
$tablesQuery = "SHOW TABLES LIKE 'mark%'";
$tablesResult = mysqli_query($con_mark, $tablesQuery);

if ($tablesResult && mysqli_num_rows($tablesResult) > 0) {
    echo "<div class='marks'>";
    echo "<h1 class='title'>MARK LIST</h1>";

    while ($tableRow = mysqli_fetch_array($tablesResult)) {
        $tableName = $tableRow[0];
        $extractedPart = substr(strrchr($tableName, "_"), 1);

        // Get max marks table
        $max_table = "max_" . $extractedPart;
        $sql_max = "SELECT * FROM `$max_table`";
        $result_max = mysqli_query($con_mark, $sql_max);

        $sql_marks = "SELECT * FROM `$tableName` WHERE student_id='$id'";
        $result_marks = mysqli_query($con_mark, $sql_marks);

        if (!$result_marks || mysqli_num_rows($result_marks) == 0) {
            continue; // Skip if no marks found
        }

        $sub_code_data = mysqli_fetch_array($result_marks);
        $subject_code = $sub_code_data[2] ?? '';

        $sql_sub_name = "SELECT subject_name FROM subject WHERE subject_code='$subject_code'";
        $result_sub_name = mysqli_query($con, $sql_sub_name);

        $data_subject = mysqli_fetch_assoc($result_sub_name);
        $subject_name = $data_subject['subject_name'] ?? 'Unknown Subject';

        echo "<table border='1' class='mark'>";
        
        // Generate table headers from $result_max
        if ($result_max && mysqli_num_rows($result_max) > 0) {
            echo "<tr><th>Subject Name</th><th>Subject Code</th>";
            while ($data_max = mysqli_fetch_array($result_max, MYSQLI_ASSOC)) {
                foreach ($data_max as $column_name => $value) {
                    echo "<th>{$value}</th>";
                }
            }
            echo "</tr>";
        }

        // Generate marks table rows
        mysqli_data_seek($result_marks, 0);
        while ($row = mysqli_fetch_assoc($result_marks)) {
            echo "<tr><td>$subject_name</td><td>$subject_code</td>";
            $columnIndex = 0;
            foreach ($row as $data) {
                if ($columnIndex > 2) { 
                    echo "<td>{$data}</td>";
                }
                $columnIndex++;
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    echo "</div>";
}
echo "</div>";

include 'footer.php';
?>

</body>
</html>
