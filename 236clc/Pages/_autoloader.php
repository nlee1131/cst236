<?php
spl_autoload_register(function ($class_name) {
    require_once '../Services/' . $class_name . '.php';
});
?>