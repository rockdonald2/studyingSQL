<?php

    session_start();

    include('includes/functions.php');

    $loginError = "";

    // if login form is submitted
    if ( isset($_POST['login']) ) {

        // create variables
        // wrap data with validate function
        $formEmail = validateFormData($_POST['email']);
        $formPass = validateFormData($_POST['password']);

        // connect to db
        include('includes/connection.php');

        // create the query
        $query = "SELECT name, password FROM users WHERE email='$formEmail'";

        // store the result
        $result = mysqli_query($conn, $query);

        // verify if result is returned
        if (mysqli_num_rows($result) > 0) {

            // store basic user data in variables
            while ($row = mysqli_fetch_assoc($result)) {
                $name = $row['name'];
                $hashedPass = $row['password'];
            }

            // verify the hash password with the submitted one
            if (password_verify($formPass, $hashedPass)) {
                // correct login
                // store data in session variable
                $_SESSION['loggedInUser'] = $name;

                header('Location: clients.php');
            } else {
                // error message

                $loginError = "<div class='alert alert-danger'>Wrong email address / password.</div>";
            }

        } else {
            $loginError = "<div class='alert alert-danger'>No such users.<a class='close' data-dismiss='alert'>&times;</a></div>";
        }

        mysqli_close($conn);
    }

    include('includes/header.php');

?>

<h1>Client Address Book</h1>
<p class="lead">Log in to your account.</p>

<?php echo $loginError; ?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="form-inline" method="post">

    <div class="form-group mr-sm-2">
        <label for="login-email" class="sr-only">Email</label>
        <input type="text" name="email" id="login-email" class="form-control" placeholder="Email">
    </div>
    <div class="form-group mr-sm-2">
        <label for="login-password" class="sr-only">Password</label>
        <input type="password" id="login-password" class="form-control" name="password" class="form-control" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary" name="login">Login</button>

</form>

<?php

    include('includes/footer.php');

?>