<!DOCTYPE html>

<?php

?>

<html>

    <head>
        <title>File handling</title>
    </head>

    <body>

        <?php
            $file = fopen("zsolt.txt", "w");
            $text = "zsolt";

            fwrite($file, $text);
            fclose($file);
        ?>

    </body>

</html>