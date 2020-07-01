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
    "driver"    => _env("DB_DRIVER"),

    /**
    * + ----------------------------------
    * | database port
    * + ----------------------------------
    **/
    "port"      => _env("DB_PORT"),

    /**
    * + ----------------------------------
    * | database host
    * + ----------------------------------
    **/
    "host"      => _env("DB_ HOST"),

    /**
    * + ----------------------------------
    * | database name
    * + ----------------------------------
    **/
    "name"      => _env("DB_NAME"),

    /**
    * + ----------------------------------
    * | database user
    * + ----------------------------------
    **/
    "user"      => _env("DB_USER"),

    /**
    * + ----------------------------------
    * | database password
    * + ----------------------------------
    **/
    "pass"      => _env("DB_PASS"),
);