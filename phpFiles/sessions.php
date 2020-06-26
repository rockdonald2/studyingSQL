<!DOCTYPE html>

<?php
    session_start();
?>

<html>

    <head>
        <title>Sessions</title>
    </head>

    <body>

        <form action="sessions.php"
            method="post">
            <label for="text-input">Enter your text</label>
            <input type="text"
                id="text"
                name="text-input">

            <input type="submit"
                value="Submit your text">

        </form>

        <?php
            $user_text = $_POST['text-input'];
            $_SESSION['text-input'] = $user_text;
            print "<b>Welcome to my website</b>" . $_SESSION['text-input'];
        ?>

    </body>

</html>