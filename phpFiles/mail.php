<!DOCTYPE html>

<?php

?>

<html>

    <head>
        <title>Email</title>
    </head>

    <body>

        <?php
            $to = "rockdonald2@gmail.com";
            $subject = "Test";
            $msg = "msg";
            $sender = "rockdonald2@gmail.com";

            mail($to, $subject, $msg, $sender);
        ?>

    </body>

</html>