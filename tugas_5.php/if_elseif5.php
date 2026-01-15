<?php
$nilai = 80;

if ($nilai >= 85) {
    $grade = "A";
} elseif ($nilai >= 75) {
    $grade = "B";
} elseif ($nilai >= 65) {
    $grade = "C";
} else {
    $grade = "D";
}

echo "Nilai Anda: $nilai <br>";
echo "Grade: $grade";
?>