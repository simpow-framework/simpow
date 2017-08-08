<?php

use SimPow\SimPow;

if (!file_exists(__DIR__ . '/vendor/autoload.php')) {
    throw new \Exception('Vendors are not installed, please install them with composer');
}

require_once __DIR__ . '/vendor/autoload.php';

$simPow = new SimPow();

try {
    $simPow->run();
} catch (\Exception $exception) {
    throw $exception;
}