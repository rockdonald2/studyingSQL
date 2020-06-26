<!DOCTYPE html>

<?php

    $expire = time() + 60*60*24*30;
    setcookie("user", "www.website.com", $expire)
?>

<html>

    <head>
        <title>Cookies</title>
    </head>

    <body>

        <?php
            //echo $_COOKIE["user"];
            print_r ($_COOKIE);
        ?>

    </body>

</html>