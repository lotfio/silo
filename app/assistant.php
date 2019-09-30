<?php

/**
 * @author    <contact@lotfio.net>
 * @package   Silo PHP framework
 * @version   1.0.0
 * @license   MIT
 * @category  Framework
 * @copyright 2019 Lotfio Lakehal
 *
 */

use App\Http\Kernel;

/**
 * autoload dependencies
 */
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

/**
 * load http kernel
 */
$httpKernel = new Kernel;

/**
 * bind kernel and load modules
 */
$httpKernel->bind();
