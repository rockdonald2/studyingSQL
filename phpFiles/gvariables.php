<!DOCTYPE html>

<html>

    <head>
        <title>Global variable</title>
    </head>

    <body>

    <form action="" method="get" style="display: flex; flex-direction: column; text-align: center; width: 100%; height: 100vh; justify-content: center; align-items: center;">
        <input type="text" id="text" name="text-input">
        <label for="text-input">Input your text</label> 

        <input type="submit" value="Submit your text">
    </form>
    
    <?php
        // global variable is a variable which can give you data from anywhere from browser
        /* $_GET[];
        $_POST[];
        $_SERVER[];
        $_FILES[];
        $_SESSION[];
        $_REQUEST[]; */

        /* print $_GET['text-input']; */
        /* print $_POST['text-input']; */
        print $_SERVER['REMOTE_ADDR'];

        /* with post and get methods you can get data from the form; with the server method you can get user ip address;
            with files method you can take files from the user; with session you can get the session of user(cookies mainly); */
    ?>

    </body>

</html>