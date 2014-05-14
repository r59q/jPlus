<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-toggle"></span>
            </button>
            <a class="navbar-brand" href="./Nocheat_files/Nocheat.htm">DuoPlanet</a>
        </div>
        <div class="navbar-collapse collapse">
            <?php
            connect();
            if (checkLogin()) { ?>
                <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i
                            class="glyphicon glyphicon-user"></i> <?php echo $_COOKIE['ID_my_site'] ?> <span
                            class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="./Nocheat_files/Nocheat.htm">My Profile</a></li>
                    </ul>
                </li>
                <li><a onclick="javascript:location.href='php/process.php?action=logout'"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
                </ul><?php }?>
        </div>
    </div>
    <!-- /container -->
</div>