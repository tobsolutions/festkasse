<?php
/* Call this file 'hello-world.php' */
require __DIR__ . '/vendor/autoload.php';
use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\Printer;
//$connector = new FilePrintConnector("php://stdout");
$connector = new NetworkPrintConnector("192.168.1.25", 9100);
$printer = new Printer($connector);
$printer -> text("Hello World!\n");
$printer -> cut();
$printer -> close();