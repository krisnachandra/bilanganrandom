<?php
for ($i = 0; $i < 5; $i++) {
        $number = rand(1, 20) * 5;        
        
        if ($number <= 60) echo "{$number} => Kurang";
        elseif ($number > 60 && $number <= 70) echo "{$number} => Cukup";
        elseif ($number > 70 && $number <= 80) echo "{$number} => Baik";
        elseif ($number > 80) echo "{$number} => Luar Biasa";
        
        echo "<br>";
    }

    ?>