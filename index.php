<?php


use Endroid\QrCode\QrCode;


header('Content-Type: image/png');
require 'vendor/autoload.php';

$qr = new QrCode();
$qr->setSize(300);


$qr
    ->setWriterByName('png')
    ->setMargin('10')
    ->setText('http://google.ci')
    ->setEncoding('UTF-8')
    ->setValidateResult(false);

echo $qr->writeString();
?>
