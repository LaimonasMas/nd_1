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










