<head>

    <meta charset="utf-8">

</head>

<?php
include '../../functions.php';
echo "Downloader funktioner<br>";
connect();
echo "Forbundet til databasen<br>";
if (checkLogin()) {
    die("you are already logged in");
}
echo "er ikke logged ind<br>";

$username = $_POST['username'];

$sql = "SELECT username FROM users WHERE username = '$username'";

if (mysql_num_rows(mysql_query($sql)) != 0) {
    die('Username is already taken');
}
echo "Brugernavn er tilgængelig<br>";
if (isChecked('nyhed')) {

    echo "nyheder er checked<br>";
    $sql = "INSERT INTO users (username, password, mail, steamid, newsletter)
VALUES
('$_POST[username]','$_POST[password]','$_POST[email]', '$_POST[steamid]', true)";
} else {
    echo "nyheder er ikke checked<br>";
    $sql = "INSERT INTO users (username, password, mail, steamid, newsletter)
VALUES
('$_POST[username]','$_POST[password]','$_POST[email]', '$_POST[steamid]', false)";
}
connect();
echo "opretter ny forbindelse til MySQL database";
if (!mysql_query($sql)) {
    die('MySQL query error:') . mysql_error();
}
echo "Sender data til databasen<br>";
mysql_close();
echo "Lukker fobindelse til MySQL serveren<br>";
$hour = time() + 3600;

setcookie('ID_my_site', $_POST['username'], $hour, '/');

setcookie('SID_my_site', $_POST['steamid'], $hour, '/');

setcookie('Key_my_site', $_POST['password'], $hour, '/');
echo "Du er nu logget ind<br>";
echo "ser du alt dette? Kontakt en administrator omgående, da siden er gået i stykker.";