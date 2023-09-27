<?php
require_once "../app/config/config.php";
require_once "../app/helpers/helper.php";

spl_autoload_register(function($class){
    require "../app/libs/". $class . ".php";
});