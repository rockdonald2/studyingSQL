<!DOCTYPE html>

<html>

    <head>
        <title>Special commands</title>
    </head>

    <body>
    
    <?php
        // random number
        print mt_rand();
        $invoce = mt_rand();
        // displaying time and date
        print date("dD/mM/Y - h:m:s");

        // md5 php command is used for encrypting
        $change = md5($invoce);
        print $change;
    ?>

    </body>

</html>