<?php

include('header.php');
//
////Simple logout
//$session->delete("id");
//$session->message("notice", "You are logged out, bye bye!");
//header("Location: index.php");
//exit;

    session_destroy();
    header('location: index.php');



