<?php 
    // clear all session variables

    session_unset();

    
    // destroy session

    session_destroy();

    echo "You've been logged out";


?>