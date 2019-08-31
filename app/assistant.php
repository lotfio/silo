<?php

use App\Http\Kernel;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

/**
 * load http kernel
 */
$httpKernel = new Kernel;

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
