<?php
//Require needed files
require_once "settings.php";
require_once "classes/Database/Database.php";
require_once "classes/Database/DatabaseSelector.php";
require_once "classes/Website/Session.php";
require_once "classes/Website/Users.php";




try {

    $db = new \Project\Database\DatabaseSelector(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    session_start();
    $session = new \Project\Website\Session($_SESSION);
    $user = new \Project\Website\Users();

    //Check global message. If exists, create variable to show & delete so it will only appear once
    if ($session->keyExists("message")) {
        $message = $session->get("message");
        $session->delete("message");
    }


    require_once "ini/ini-index.php";
    require_once "ini/ini-register.php";
    require_once "ini/ini-eventcreate.php";
    require_once "ini/ini-events.php";









} catch (Exception $e) {


    //Set error & empty students array if we have any error

    $error = "Oops, try to fix your error please: " . $e->getMessage() . " on line " . $e->getLine() . " of " . $e->getFile();
}

