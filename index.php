<?php
/* Call this file 'hello-world.php' */
require 'vendor/autoload.php';//__DIR__ . '/vendor/autoload.php';
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\NetworkPrintConnector;
$connector = new NetworkPrintConnector("192.168.10.25", 9100);
$printer = new Printer($connector);
try {
    $printer -> text("Hello World!\n");
} finally {
    $printer -> close();
}