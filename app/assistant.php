<?php

use App\Kernel\Http;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$httpKernel = new Http;

/**
 * Ouch error handler
 *
 * enable error handler
 */
$httpKernel->enableErrorHandler();

/**
 * OoFile file helper
 *
 * load config
 */
$httpKernel->loadConfig();

/**
 * Aven router
 *
 * load routes
 */
$httpKernel->loadWebRoutes();
