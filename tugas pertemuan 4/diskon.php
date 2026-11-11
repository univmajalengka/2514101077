<?php

function hitungDiskon($totalBelanja)
{
    $diskon = 0;

    if ($totalBelanja >= 100000) {
        $diskon = $totalBelanja * 0.10;
    } elseif ($totalBelanja >= 50000) {
        $diskon = $totalBelanja * 0.05;
    }

    return $diskon;
}

$totalBelanja = 120000;

$diskon = hitungDiskon($totalBelanja);
$totalBayar = $totalBelanja - $diskon;

echo "Total Belanja : Rp. " . $totalBelanja . PHP_EOL;
echo "Diskon : Rp. " . $diskon . PHP_EOL;
echo "Total Bayar : Rp. " . $totalBayar . PHP_EOL;

?>
