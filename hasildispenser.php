<?php
require_once 'class_dispenser.php';

$beli1 = new Dispenser('Marjan', 250, 1000);
$beli1->isi(500);
$beli1->transaksi(5000);
$beli1->cetak();
?>
