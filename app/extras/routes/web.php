<?php

use Aven\Facades\Aven;


Aven::get("/", "IndexController@welcome");
Aven::get("/index", "IndexController@index");