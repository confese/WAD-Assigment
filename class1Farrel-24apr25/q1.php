<?php
$data = [
    ["name" => "John", "id" => "001", "score" => 100],
    ["name" => "Jane", "id" => "002", "score" => 84.3],
    ["name" => "Bob", "id" => "003", "score" => 70.3],
    ["name" => "Smith", "id" => "004", "score" => 60],
    ["name" => "Tom", "id" => "005", "score" => 90.5],
    ["name" => "Jack", "id" => "006", "score" => 68.9],
];

function getGrade($score) {
    if ($score >= 90) return 'A';
    if ($score >= 80) return 'A-';
    if ($score >= 70) return 'B';
    if ($score >= 60) return 'C';
    return 'D';
}

$totalScore = 0;
$count = count($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Scores</title>
    <style>
        .output-box {
            border: 2px solid black;
            padding: 15px;
            width: fit-content;
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {
            border: 1px solid black;
            padding: 6px 10px;
            text-align: center;
        }
        .average {
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="output-box">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Score</th>
                <th>Grade</th>
            </tr>
            <?php
            foreach ($data as $student) {
                $grade = getGrade($student["score"]);
                echo "<tr>
                        <td>{$student['id']}</td>
                        <td>{$student['name']}</td>
                        <td>{$student['score']}</td>
                        <td>{$grade}</td>
                      </tr>";
                $totalScore += $student["score"];
            }

            $average = $totalScore / $count;
            ?>
        </table>
        <div class="average">Average: <?php echo number_format($average, 2); ?></div>
    </div>
</body>
</html>
