<!DOCTYPE html>
<?php

include 'php/functions.php';

?>
<html lang="da">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">

    <title>DuoPlanet.com</title>

    <meta name="generator" content="Bootply">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/temp.css" rel="stylesheet">


    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="http://www.bootply.com/bootstrap/img/favicon.ico">

<body>

<!-- Header -->
<?php include 'php/modules/navbar/navbar.php'; ?>

<!-- /Header -->
<div class="container">
    <div class="masthead">

        <div class="jumbotron">

            <h1>Velkommen til<span class="blue"> DuoPlanet! </span></h1>

            <p class="lead">Opret en bruger i dag og oplev en ny verden.</p>

            <form class="form form-vertical" method="post" action="php/modules/user/register.php">

                <div class="controls">


                    <p><input type="text" id="username" name="username" oninput="validate_username()"
                              class="form-control" placeholder="Brugernavn"></p>

                    <input type="password" id="password" name="password" oninput="validate_password()"
                           class="form-control" placeholder="Kodeord">

                    <p><input type="password" id="password_re" name="password_re" oninput="validate_password_re()"
                              class="form-control" placeholder="Gentag kodeord"></p>

                    <p><input type="email" id="email" name="email" oninput="validate_email()" class="form-control"
                              placeholder="Email Addresse""></p>

                    <p><input type="text" id="steamid" name="steamid" oninput="validate_steamid()" class="form-control"
                              placeholder="Steam ID"></p>


                    <label><input type="checkbox" name="nyhed" value="remember-me"> Få nyheder og opdateringer</label>


                    <p>
                        <button class="btn btn-lg btn-primary" onclick="dasd()" role="button">Tilmed mig!</button>
                    </p>

                </div>

        </div>


        </form>

    </div>

</div>


<script>

    // Making the .startswith method
    if (typeof String.prototype.startsWith != 'function') {
        String.prototype.startsWith = function (str) {
            return this.indexOf(str) == 0;
        };
    }

    function validate_username() {
        var ready = "no"
        var text = document.getElementById("username")

        if (text.value.length > 3) {
            // green
            text.style.backgroundColor = "#00FF00";
            var ready = "yes"
        }
        else {
            //red
            text.style.backgroundColor = "#FF0000";
            var ready = "no"
        }

    }


    // Checking user password
    function validate_password() {
        var ready = "yes"
        var before = document.getElementById("username")
        var text = document.getElementById("password");
        var lentext = text.value.length;

        if (before.value.length < 3) {
            // yellow
            before.style.backgroundColor = "#FBDB0C";
        }
        if (lentext < 6) {
            //red
            text.style.backgroundColor = "#FF0000";
            var ready = "no"
        }
        else {
            //green
            text.style.backgroundColor = "#00FF00";
            var ready = "yes"
        }
    }

    // Validating if it's a match
    function validate_password_re() {
        var ready = "no"
        var text = document.getElementById("password");
        var text_re = document.getElementById("password_re");
        if (text_re.value == text.value) {
            //green
            text_re.style.backgroundColor = "#00FF00";
            var ready = "yes"

        } else {
            //red
            text_re.style.backgroundColor = "#FF0000";
            var ready = "no"

        }
        if (text.value.length < 6) {
            // red
            text.style.backgroundColor = "#FF0000";
            var ready = "no"
        }
    }

    function validate_email() {
        var ready = "no"
        var text = document.getElementById("email")
        var email = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (text.value.match(email) > 3) {
            // green
            text.style.backgroundColor = "#00FF00";
            var ready = "yes"
        }
        else {
            //red
            text.style.backgroundColor = "#FF0000";
            var ready = "no"
        }

    }

    function validate_steamid() {
        var ready = "no"
        var text = document.getElementById("steamid");
        var checker = /^STEAM_[0-5]:[01]:\d+$/;
        if (text.value.match(checker)) {
            //green
            text.style.backgroundColor = "#00FF00";
            var ready = "yes"


        } else {
            //red
            text.style.backgroundColor = "#FF0000";
            var ready = "no"
        }


    }


</script>

</body>


</html>
