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

return array(

    /**
    * + ----------------------------------
    * | site_url
    * + ----------------------------------
    **/
    "url"     =>  ($_SERVER['REQUEST_SCHEME'] ?? _env('APP_SCHEME', 'http')) . '://' . ($_SERVER['HTTP_HOST'] ?? _env('APP_HOST', 'localhost')) . '/',

    /**
    * + ----------------------------------
    * | site scheme
    * + ----------------------------------
    **/
    "scheme"  => $_SERVER['REQUEST_SCHEME'] ?? _env('APP_SCHEME', 'http'),

    /**
    * + ----------------------------------
    * | site host
    * + ----------------------------------
    **/
    "host"    => $_SERVER['HTTP_HOST'] ?? _env('APP_HOST', 'localhost'),

     /**
    * + ----------------------------------
    * | site port
    * + ----------------------------------
    **/
    "port"    => $_SERVER['HTTP_PORT'] ?? _env('APP_PORT', '80'),
);