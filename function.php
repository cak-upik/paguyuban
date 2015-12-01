<?php

function formatIDR($angka) {
    $money = "Rp " . number_format($angka, 0, ',', '.');
    return $money;
}
