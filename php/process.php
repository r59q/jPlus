<?php
if ($_GET['action'] == "logout") {

    $past = time() - 100;

    setcookie('ID_my_site', "", $past, '/');

    setcookie('SID_my_site', "", $past, '/');

    setcookie('Key_my_site', "", $past, '/');

//this makes the time in the past to destroy the cookie
}
