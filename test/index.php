<?php
// // Include Composer's autoloader
require_once 'vendor/autoload.php';

use Zend\Barcode\Barcode;

// // Set the barcode options
// $barcodeOptions = [
//     'text' => '123456789',
//     'barHeight' => 50, // Set the height of the barcode
//     'factor' => 2, // Set the factor for the width of the barcode bars
// ];

// // Set the barcode renderer options
// $rendererOptions = [
//     'imageType' => 'jpg', // Set the image type
// ];

// // Generate the barcode image
// $barcodeImage = Barcode::factory('code39', 'image', $barcodeOptions, $rendererOptions)->draw();

// // Output the barcode image
// header('Content-Type: image/png');
// echo $barcodeImage;

$value = '1234546789';                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
$barcodeOptions = array('text' => $value);
$rendererOptions = array();

ob_end_clean();
    \Zend\Barcode\Barcode::factory(
    'code39', 'image', $barcodeOptions, $rendererOptions
    )->render();
