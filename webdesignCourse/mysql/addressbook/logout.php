<?php

    if ( isset($_COOKIE[ session_name() ]) ) {
        setcookie( session_name(), '', time() - 86400, '/');
    }

    session_unset();

    include('includes/header.php');
    
?>

<h1>Logged out</h1>
<p class="lead">You've been logged out.</p>

<?php

    include('includes/footer.php');

?>