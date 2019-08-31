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
    * | database driver
    * + ----------------------------------
    **/
    "driver"    => env("DB_DRIVER"),

    /**
    * + ----------------------------------
    * | database port
    * + ----------------------------------
    **/
    "port"      => env("DB_PORT"),

    /**
    * + ----------------------------------
    * | database host
    * + ----------------------------------
    **/
    "host"      => env("DB_ HOST"),

    /**
    * + ----------------------------------
    * | database name
    * + ----------------------------------
    **/
    "name"      => env("DB_NAME"),

    /**
    * + ----------------------------------
    * | database user
    * + ----------------------------------
    **/
    "user"      => env("DB_USER"),

    /**
    * + ----------------------------------
    * | database password
    * + ----------------------------------
    **/
    "pass"      => env("DB_PASS"),
);