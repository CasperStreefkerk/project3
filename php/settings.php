<?php
//Define custom constants to use with project
define("DATA_PATH", dirname(__FILE__) . "/data/");
define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "project3");

//Custom error handler, so every error will throw a custom ErrorException
set_error_handler(function ($severity, $message, $file, $line) {
    throw new ErrorException($message, $severity, $severity, $file, $line);
});