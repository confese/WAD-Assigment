<?php
function findMaxMin(...$numbers) {
    if (count($numbers) === 0) {
        $max = 0;
        $min = 0;
    } else {
        $max = $numbers[0];
        $min = $numbers[0];

        foreach ($numbers as $num) {
            if ($num > $max) {
                $max = $num;
            }
            if ($num < $min) {
                $min = $num;
            }
        }
    }

    echo "<div style='border: 2px solid black; width: fit-content; padding: 10px; font-family: Arial; margin: 10px 0;'>";
    echo "Max is $max<br>";
    echo "Min is $min";
    echo "</div>";
}

findMaxMin(9, 4, 2, 1, 5, 6, 3, 8, 7);       
findMaxMin(84.3, 100, 40.2);                
findMaxMin();                               
?>
