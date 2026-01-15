<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue; // Lompat ke angka berikutnya ($i = 6)
    }
    echo "Angka: $i <br>";
}
?>