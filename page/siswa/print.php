<?php
// Require composer autoload
$url = "C:/xampp/htdocs/ekantin";
require_once $url . '/vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();

// Write some HTML code:
$mpdf->WriteHTML('Hello World');

// Output a PDF file directly to the browser
$mpdf->Output();
