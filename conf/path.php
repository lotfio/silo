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
    "root"      => dirname(__DIR__) . DIRECTORY_SEPARATOR,

    /**
    * + ----------------------------------
    * | base path
    * + ----------------------------------
    **/
    "app"      => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR,

    /**
    * + ----------------------------------
    * | base path
    * + ----------------------------------
    **/
    "pub"      => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'pub' . DIRECTORY_SEPARATOR,

    /**
    * + ----------------------------------
    * | routes path
    * + ----------------------------------
    **/
    "routes"    => dirname(__DIR__) . "/app/extras/routes/",

    /**
    * + ----------------------------------
    * | views path
    * + ----------------------------------
    **/
    "views"    => dirname(__DIR__) . "/app/extras/views/",

     /**
    * + ----------------------------------
    * | assets path
    * + ----------------------------------
    **/
    "assets"    => dirname(__DIR__) . "/app/extras/assets/",

    /**
    * + ----------------------------------
    * | routes cache path
    * + ----------------------------------
    **/
    "cache"     => dirname(__DIR__) . '/app/dump/cache/routes/'
);