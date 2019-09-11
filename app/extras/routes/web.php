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

use Aven\Facades\Aven;


Aven::get("/", "IndexController@welcome");
Aven::get("/index", "IndexController@index");