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
 * load api routes
 */
$httpKernel->loadApiRoutes();

/**
 * Aven router
 *
 * load web routes
 */
$httpKernel->loadWebRoutes();

/**
 * bind kernel and load
 */
$httpKernel->bind();
