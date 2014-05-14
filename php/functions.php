<?php


function dblog($msg) {
    echo $msg . " " . date("d:m - H:i:s") . "<br><br>";;
}

function connect()
{
    $db_host = "localhost";
    $db_user = "webmaster";
    $db_pass = "123pass";
    $db_database = "duoplanet_web";

    mysql_connect($db_host, $db_user, $db_pass);
    mysql_select_db($db_database);
}

function isChecked($postname) {

    if (isset($_POST[$postname])) {
        return true;
    } else {
        return false;
    }
}

function checkLogin()
{
    if (isset($_COOKIE['ID_my_site'])) //if there is, it logs you in and directes you to the members page

    {
        $username = $_COOKIE['ID_my_site'];

        $password = $_COOKIE['Key_my_site'];

        $check = mysql_query("SELECT password FROM users WHERE username = '$username'") or die(mysql_error());

        while ($info = mysql_fetch_array($check)) {

            if ($password != $info['password']) {
                return false;
            } else {
                return true;


            }

        }

    }
    mysql_close();
}