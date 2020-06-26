<!DOCTYPE html>

<?php

?>

<html>

    <head>
        <title>Filters</title>
    </head>

    <body>

        <form action="filters.php" method="post">
            <label for="text-input">Text input</label>
            <input type="email" id="text" name="text-input">

            <input type="submit" value="Submit text">
        </form>

        <?php
            //filters are used for validating the data or checking the data

            if (isset($_POST['text-input'])) {
                $email = $_POST['text-input'];

                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    print $email;
                }
            }
        ?>

    </body>

</html>