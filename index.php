<?php
// require 'vendor/autoload.php';
// $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
// $genrate = $generator->getBarcode('', $generator::TYPE_CODE_128);
// // echo 

// echo $genrate;

require 'vendor/autoload.php';
use Zend\Barcode\Barcode;

$barcodeData ="hello";
$barcodeType = 'code128';
$options = ['text' => $barcodeData , 'factor'=> 1];
$barcode = \Zend\Barcode\Barcode::factory($barcodeType, 'image', $options)->render();
header('Content-Type: image/png');
echo $barcode;
?>

