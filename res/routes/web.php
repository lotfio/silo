<?php

/**
 * @author    <contact@lotfio.net>
 * @package   Silo PHP framework
 * @version   1.0.0
 * @license   MIT
 * @category  Framework
 * @copyright 2019 Lotfio Lakehal
 */

$silo->namespace('App\Http\Controllers', function($silo){
    $silo->get('/', 'IndexController@index');
});