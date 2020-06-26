<?php 

    if ( isset($_COOKIE[session_name()])) {

        // empty the cookie
        setcookie( session_name(), '', time() - 86400, '/' );

    }

    session_unset();

    echo "You've been logged out! <br>";

    echo "<p><a href='login.php' class='btn btn-secondary btn-sm'>Log back in</a></p>";

?>