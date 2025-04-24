<?php
$data = [
    "John;Male;CIT",
    "Jane;Female;CIT",
    "Jack;Male;CIS",
    "Claudia;Female;CIT",
    "Vera;Female;CIS",
    "Fransisca;Female;CIT",
    "Smith;Male;CIS",
    "Lyana;Female;CIT",
];

$maleCount = 0;
$femaleCount = 0;
$citCount = 0;
$cisCount = 0;
$maleNames = [];
$femaleNames = [];

foreach ($data as $entry) {
    list($name, $gender, $program) = explode(';', $entry);

    if (strtolower($gender) === 'male') {
        $maleCount++;
        $maleNames[] = $name;
    } elseif (strtolower($gender) === 'female') {
        $femaleCount++;
        $femaleNames[] = $name;
    }

    if (strtolower($program) === 'cit') {
        $citCount++;
    } elseif (strtolower($program) === 'cis') {
        $cisCount++;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Stats</title>
    <style>
        .output-box {
            border: 2px solid black;
            padding: 15px;
            width: fit-content;
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="output-box">
        <?php
        echo "Male: $maleCount<br>";
        echo "Female: $femaleCount<br>";
        echo "CIT: $citCount<br>";
        echo "CIS: $cisCount<br>";
        echo "Male students: " . implode(', ', $maleNames) . "<br>";
        echo "Female students: " . implode(', ', $femaleNames) . "<br>";
        ?>
    </div>
</body>
</html>
