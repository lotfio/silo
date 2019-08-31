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
    * | base path
    * + ----------------------------------
    **/
    "path"      => dirname(__DIR__) . DIRECTORY_SEPARATOR,
    
    /**
    * + ----------------------------------
    * | controllers namespace
    * + ----------------------------------
    **/
    "namespace" => "App\\Http\\Controllers\\",

    /**
    * + ----------------------------------
    * | routes path
    * + ----------------------------------
    **/
    "routes"    => dirname(__DIR__) . "/app/extras/routes/",

    /**
    * + ----------------------------------
    * | routes cache path
    * + ----------------------------------
    **/
    "cache"     => dirname(__DIR__) . '/app/dump/cache/routes/'
);