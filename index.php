<h2>ND nr.1</h2>

<?php
$name = 'Laimonas';
$surname = 'Masionis';
$birthYear = 1986;
$currentYear = 2021;
$age = $currentYear - $birthYear;
echo "Aš esu $name $surname. Man yra $age metai.";
?>

<h2>ND nr.2</h2>

<?php
$first = rand(0, 4);
echo "Pirmo kinatamojo reikšmė: $first";
echo '<br>';
$second = rand(0, 4);
echo "Antro kinatamojo reikšmė: $second";
echo '<br>';
$result;
if ($first >= $second && $second !== 0) {
    $result = $first / $second;
} else if ($second >= $first && $first !== 0) {
    $result = $second / $first;
} else {
    $result = 'Dalyba iš 0 negalima!';
}
echo "Tarpinis rezultatas: $result";
echo '<br>';
echo '<br>';
if ($result === 'Dalyba iš 0 negalima!') {
    echo 'Dalyba iš 0 negalima!';
} else if ($result !== 0) {
    echo round($result, 2);
}
?>

<h2>ND nr.3</h2>

<?php

$firstA = rand(0, 25);
echo "Pirmo kintamojo reikšmė: $firstA";
echo '<br>';
$secondA = rand(0, 25);
echo "Antro kintamojo reikšmė: $secondA";
echo '<br>';
$thirdA = rand(0, 25);
echo "Trečio kintamojo reikšmė: $thirdA";
echo '<br>';
echo '<br>';
if (($firstA >= $secondA && $thirdA >= $firstA) || ($firstA >= $thirdA && $secondA >= $firstA)) {
    echo "Vidurinė reikšmė yra: $firstA";
} else if (($secondA >= $firstA && $thirdA >= $secondA) || ($secondA >= $thirdA && $firstA >= $secondA)) {
    echo "Vidurinė reikšmė yra: $secondA";
} else if (($thirdA >= $firstA && $secondA >= $thirdA) || ($thirdA >= $secondA && $firstA >= $thirdA)) {
    echo "Vidurinė reikšmė yra: $thirdA";
}
?>

<h2>ND nr.4</h2>

<?php

$sideA = rand(1, 10);
echo "Pirmosios kraštinės ilgis: $sideA";
echo '<br>';
$sideB = rand(1, 10);
echo "Antrosios kraštinės ilgis: $sideB";
echo '<br>';
$sideC = rand(1, 10);
echo "Trečiosios kraštinės ilgis: $sideC";
echo '<br>';
echo '<br>';
if (($sideA < ($sideB + $sideC)) && ($sideB < ($sideA + $sideC)) && ($sideC < ($sideA + $sideB))) {
    echo 'Galima sudaryti trikampį!';
} else {
    echo 'Trikampio sudaryti negalima!';
}
?>

<h2>ND nr.5</h2>

<?php

$firstB = rand(0, 2);
echo "Pirmo kintamojo reikšmė: $firstB";
echo '<br>';
$secondB = rand(0, 2);
echo "Antro kintamojo reikšmė: $secondB";
echo '<br>';
$thirdB = rand(0, 2);
echo "Trečio kintamojo reikšmė: $thirdB";
echo '<br>';
$fourthB = rand(0, 2);
echo "Ketvirto kintamojo reikšmė: $fourthB";
echo '<br>';
$zeros = 0;
$ones = 0;
$twos = 0;
if ($firstB === 0) {
    $zeros++;
}
if ($secondB === 0) {
    $zeros++;
}
if ($thirdB === 0) {
    $zeros++;
}
if ($fourthB === 0) {
    $zeros++;
}
if ($firstB === 1) {
    $ones++;
}
if ($secondB === 1) {
    $ones++;
}
if ($thirdB === 1) {
    $ones++;
}
if ($fourthB === 1) {
    $ones++;
}
if ($firstB === 2) {
    $twos++;
}
if ($secondB === 2) {
    $twos++;
}
if ($thirdB === 2) {
    $twos++;
}
if ($fourthB === 2) {
    $twos++;
}
echo '<br>';
echo "Tiek '0-ių' sugeneravo formulė: $zeros";
echo '<br>';
echo "Tiek '1-tų' sugeneravo formulė: $ones";
echo '<br>';
echo "Tiek '2-tų' sugeneravo formulė: $twos";
?>

<h2>ND nr.6</h2>

<?php

$randomNumber = rand(1, 6);
echo "<h{$randomNumber}>{$randomNumber}</h{$randomNumber}>";
?>

<h2>ND nr.7</h2>

<?php

$randomFirst = rand(-10, 10);
echo "Pirmo kintamojo reikšmė: $randomFirst";
echo '<br>';
$randomSecond = rand(-10, 10);
echo "Pirmo kintamojo reikšmė: $randomSecond";
echo '<br>';
$randomThird = rand(-10, 10);
echo "Pirmo kintamojo reikšmė: $randomThird";
echo '<br>';
if ($randomFirst < 0) {
    echo "<h4 style='color:green;'>{$randomFirst}</h4>";
}
if ($randomSecond < 0) {
    echo "<h4 style='color:green;'>{$randomSecond}</h4>";
}
if ($randomThird < 0) {
    echo "<h4 style='color:green;'>{$randomThird}</h4>";
}
if ($randomFirst === 0) {
    echo "<h4 style='color:red;'>{$randomFirst}</h4>";
}
if ($randomSecond === 0) {
    echo "<h4 style='color:red;'>{$randomSecond}</h4>";
}
if ($randomThird === 0) {
    echo "<h4 style='color:red;'>{$randomThird}</h4>";
}
if ($randomFirst > 0) {
    echo "<h4 style='color:blue;'>{$randomFirst}</h4>";
}
if ($randomSecond > 0) {
    echo "<h4 style='color:blue;'>{$randomSecond}</h4>";
}
if ($randomThird > 0) {
    echo "<h4 style='color:blue;'>{$randomThird}</h4>";
}
?>

<h2>ND nr.8</h2>

<?php

$zvakiuKiekis = rand(5, 3000);
$zvakiuKaina = $zvakiuKiekis;
$sumaSu3ProcNuolaida = $zvakiuKaina * 0.97;
$sumaSu4ProcNuolaida = $zvakiuKaina * 0.96;
$vienosZvakesKainaSu3ProcNuolaida = $sumaSu3ProcNuolaida / $zvakiuKiekis;
$vienosZvakesKainaSu4ProcNuolaida = $sumaSu4ProcNuolaida / $zvakiuKiekis;

if ($zvakiuKaina <= 1000) {
    echo "Parduota $zvakiuKiekis žvakių už $zvakiuKaina Eur. Vienos žvakės kaina yra 1 Eur.";
}
if (($zvakiuKaina > 1000) && ($zvakiuKaina <= 2000)) {
    echo 'Parduota ' . $zvakiuKiekis . ' žvakių už ' . $sumaSu3ProcNuolaida . " Eur. Vienos žvakės kaina {$vienosZvakesKainaSu3ProcNuolaida} Eur.";
}
if ($zvakiuKaina > 2000) {
    echo 'Parduota ' . $zvakiuKiekis . ' žvakių už ' . $sumaSu4ProcNuolaida . " Eur. Vienos žvakės kaina {$vienosZvakesKainaSu4ProcNuolaida} Eur.";
}
?>

<h2>ND nr.9</h2>

<?php

$random1 = rand(0, 100);
echo $random1;
echo '<br>';
$random2 = rand(0, 100);
echo $random2;
echo '<br>';
$random3 = rand(0, 100);
echo $random3;
echo '<br>';
$averige = round((($random1 + $random2 + $random3) / 3));
echo 'Trijų kintamųjų vidurkis yra: ' . $averige;
echo '<br>';
$sum = 0;
$amountOfNumbers = 0; // tam, kad žinotume narių skaičių iš kurio dalinsime skaičiuojant vidurkį
if ($random1 >= 10 && $random1 <= 90) {
    $sum += $random1;
    $amountOfNumbers++;
}
if ($random2 >= 10 && $random2 <= 90) {
    $sum += $random2;
    $amountOfNumbers++;
}
if ($random3 >= 10 && $random3 <= 90) {
    $sum += $random3;
    $amountOfNumbers++;
}
echo 'Narių suma: ' . $sum;
echo '<br>';
echo 'Narių skaičius: ' . $amountOfNumbers;
echo '<br>';
$averige2 = round($sum / $amountOfNumbers);
echo 'Kintamųjų vidurkis atmetus reikšmes iki 10 ir virš 90 yra: ' . $averige2;
?>

<h2>ND nr.10</h2>

<?php

$hoursNotFormatted = rand(0, 23);
echo "Valandos: $hoursNotFormatted";
echo '<br>';
$minutesNotFormatted = rand(0, 59);
echo "Minutės: $minutesNotFormatted";
echo '<br>';
$secondsNotFormatted = rand(0, 59);
echo "Sekundės: $secondsNotFormatted";
echo '<br>';
$hours = $hoursNotFormatted;
$minutes = $minutesNotFormatted;
$seconds = $secondsNotFormatted;
if ($hoursNotFormatted < 10) {
    $hours = sprintf("%02d", $hoursNotFormatted);
}
if ($minutesNotFormatted < 10) {
    $minutes = sprintf("%02d", $minutesNotFormatted);
}
if ($secondsNotFormatted < 10) {
    $seconds = sprintf("%02d", $secondsNotFormatted);
}

echo 'Pradinis laikas:';
echo $hours . ':' . $minutes . ':' . $seconds;
$extraRandomSeconds = rand(0, 300);
echo '<br>';
echo 'Pridedamas laikas: ' . $extraRandomSeconds . ' s.';
// antro laikrodzio montavimas
$hours2 = $hours;
$minutes2 = $minutes;
$seconds2 = $seconds;
echo '<br>';

if (($extraRandomSeconds + $seconds) < 60) {
    $seconds2 = $extraRandomSeconds + $seconds;
}
if ((($extraRandomSeconds + $seconds) >= 60) && (($extraRandomSeconds + $seconds) < 120)) {
    $minutes2++;
    $seconds2 +=  $extraRandomSeconds - 60;
    if ($minutes2 >= 60) {
        $hours2++;
        $minutes2 = $minutes2 - 60;
        if ($hours2 > 23) {
            $hours2 = 0;
        }
    }
}
if ((($extraRandomSeconds + $seconds) >= 120) && (($extraRandomSeconds + $seconds) < 180)) {
    $minutes2 += 2;
    $seconds2 +=  $extraRandomSeconds - 120;
    if ($minutes2 >= 60) {
        $hours2++;
        $minutes2 = $minutes2 - 60;
        if ($hours2 > 23) {
            $hours2 = 0;
        }
    }
}
if ((($extraRandomSeconds + $seconds) >= 180) && (($extraRandomSeconds + $seconds) < 240)) {
    $minutes2 += 3;
    $seconds2 +=  $extraRandomSeconds - 180;
    if ($minutes2 >= 60) {
        $hours2++;
        $minutes2 = $minutes2 - 60;
        if ($hours2 > 23) {
            $hours2 = 0;
        }
    }
}
if ((($extraRandomSeconds + $seconds) >= 240) && (($extraRandomSeconds + $seconds) < 300)) {
    $minutes2 += 4;
    $seconds2 +=  $extraRandomSeconds - 240;
    if ($minutes2 >= 60) {
        $hours2++;
        $minutes2 = $minutes2 - 60;
        if ($hours2 > 23) {
            $hours2 = 0;
        }
    }
}
if ($extraRandomSeconds === 300) {
    $minutes2 += 5;
    if ($minutes2 >= 60) {
        $hours2++;
        $minutes2 = $minutes2 - 60;
        if ($hours2 > 23) {
            $hours2 = 0;
        }
    }
}
$hours2Formatted = $hours2;
$minutes2Formatted = $minutes2;
$seconds2Formatted = $seconds2;
if ($hours2 < 10) {
    $hours2Formatted = sprintf("%02d", $hours2);
}
if ($minutes2 < 10) {
    $minutes2Formatted = sprintf("%02d", $minutes2);
}
if ($seconds2 < 10) {
    $seconds2Formatted = sprintf("%02d", $seconds2);
}



echo 'Naujas laikas:';
echo $hours2Formatted . ':' . $minutes2Formatted . ':' . $seconds2Formatted;
echo '<br>';
?>

<h2>ND nr.11</h2>

<?php

$random01 = rand(1000, 9999);
$random02 = rand(1000, 9999);
$random03 = rand(1000, 9999);
$random04 = rand(1000, 9999);
$random05 = rand(1000, 9999);
$random06 = rand(1000, 9999);
echo 'pirmas: ' . $random01 . ' antras: ' . $random02 . ' trecias: ' . $random03 . ' ketvirtas: ' . $random04 . ' penktas: ' . $random05 . ' sestas: ' . $random06;
echo '<br>';

$biggestNumber = 0;
$a50 = 0;
$a40 = 0;
$a30 = 0;
$a20 = 0;

if ($random01 > $random02) {
    $biggestNumber = $random01;
} else {
    $biggestNumber = $random02;
}
if ($random03 > $biggestNumber) {
    $biggestNumber = $random03;
}
if ($random04 > $biggestNumber) {
    $biggestNumber = $random04;
}
if ($random05 > $biggestNumber) {
    $biggestNumber = $random05;
}
if ($random06 > $biggestNumber) {
    $biggestNumber = $random06;
}

if ($random01 < $random02) {
    $smallestNumber = $random01;
} else {
    $smallestNumber = $random02;
}
if ($random03 < $smallestNumber) {
    $smallestNumber = $random03;
}
if ($random04 < $smallestNumber) {
    $smallestNumber = $random04;
}
if ($random05 < $smallestNumber) {
    $smallestNumber = $random05;
}
if ($random06 < $smallestNumber) {
    $smallestNumber = $random06;
}

if ($random01 < $biggestNumber) {
    $a50 = $random01;
}
if ($random02 < $biggestNumber && $random02 > $a50) {
    $a50 = $random02;
}
if ($random03 < $biggestNumber && $random03 > $a50) {
    $a50 = $random03;
}
if ($random04 < $biggestNumber && $random04 > $a50) {
    $a50 = $random04;
}
if ($random05 < $biggestNumber && $random05 > $a50) {
    $a50 = $random05;
}
if ($random06 < $biggestNumber && $random06 > $a50) {
    $a50 = $random06;
}

if ($random01 < $a50) {
    $a40 = $random01;
}
if ($random02 > $a40 && $random02 < $a50) {
    $a40 = $random02;
}
if ($random03 > $a40 && $random03 < $a50) {
    $a40 = $random03;
}
if ($random04 > $a40 && $random04 < $a50) {
    $a40 = $random04;
}
if ($random05 > $a40 && $random05 < $a50) {
    $a40 = $random05;
}
if ($random06 > $a40 && $random06 < $a50) {
    $a40 = $random06;
}

if ($random01 > $smallestNumber) {
    $a20 = $random01;
}   
if ($random02 > $smallestNumber && $random02 < $a20) {
    $a20 = $random02;
}
if ($random03 > $smallestNumber && $random03 < $a20) {
    $a20 = $random03;
} 
if ($random04 > $smallestNumber && $random04 < $a20) {
    $a20 = $random04;
}
if ($random05 > $smallestNumber && $random05 < $a20) {
    $a20 = $random05;
}
if ($random06 > $smallestNumber && $random06 < $a20) {
    $a20 = $random06;
}

if ($random01 > $a20) {
    $a30 = $random01;
}   
if ($random02 > $a20 && $random02 < $a30) {
    $a30 = $random02;
}
if ($random03 > $a20 && $random03 < $a30) {
    $a30 = $random03;
} 
if ($random04 > $a20 && $random04 < $a30) {
    $a30 = $random04;
}
if ($random05 > $a20 && $random05 < $a30) {
    $a30 = $random05;
}
if ($random06 > $a20 && $random06 < $a30) {
    $a30 = $random06;
}

echo $biggestNumber;
echo '<br>';
echo $a50;
echo '<br>';
echo $a40;
echo '<br>';
echo $a30;
echo '<br>';
echo $a20;
// echo '<br>';
// echo $a10;
echo '<br>';
echo $smallestNumber;