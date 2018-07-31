<?php

require __DIR__ . '/src/Autoload.php';

$autoload = new MarcosPaulo\Autoload;

$autoload->register();
$autoload->addNamespace('MarcosPaulo','src');