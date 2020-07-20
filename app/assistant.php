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
use App\Console\Kernel as ConsoleKernel;

/**
 * autoload dependencies
 */
require dirname(__DIR__) . '/vendor/autoload.php';

/**
 * load http kernel
 */
$kernel = (php_sapi_name() == 'cli') ? new ConsoleKernel : new Kernel;

/**
 * bind kernel and load modules
 */
$kernel->boot();
