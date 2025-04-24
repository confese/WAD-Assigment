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

$male = $female = $CIT = $CIS = 0;
$maleNames = [];
$femaleNames = [];

foreach ($data as $entry) {
    list($name, $gender, $program) = explode(";", $entry);
    
    if ($gender === "Male") {
        $male++;
        $maleNames[] = $name;
    } else {
        $female++;
        $femaleNames[] = $name;
    }

    if ($program === "CIT") $CIT++;
    else $CIS++;
}

echo "Male: $male<br>";
echo "Female: $female<br>";
echo "CIT: $CIT<br>";
echo "CIS: $CIS<br>";
echo "Male students: " . implode(", ", $maleNames) . "<br>";
echo "Female students: " . implode(", ", $femaleNames);
?>
