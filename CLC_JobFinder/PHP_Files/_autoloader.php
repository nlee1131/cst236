<?php
/**
 * Created by PhpStorm.
 * User: natelee
 * Date: 9/20/17
 * Time: 8:12 AM
 */
spl_autoload_register(function ($class_name) {
    require_once '../Classes/' . $class_name . '.php';
});