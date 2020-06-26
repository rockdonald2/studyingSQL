<?php

    include('../connection.php');
    $emailError = $passwordError = "";
    $email = $password = "";
    $loginError = "";

    if( isset( $_POST["login"]) ) {

        function validateFormData( $formData ) {
            $formData = trim( stripslashes( htmlspecialchars( $formData )));
            return $formData;
        }

        if ( !$_POST["email"] ) {
            $emailError = "Please enter your email <br>";
        } else {
            $email = validateFormData( $_POST["email"] );
        }

        if ( !$_POST["password"] ) {
            $passwordError = "Please enter your password <br>";
        } else {
            $password = validateFormData( $_POST["password"] );
        }

        if ($email && $password) {
            $query = "SELECT email, password FROM users WHERE email='$email'";

            $result = mysqli_query($conn, $query);

            if ( mysqli_num_rows($result) > 0 ) {
                // store basic user data in variables

                while ( $row = mysqli_fetch_assoc($result) ) {
                    $email = $row['email'];
                    $hashedPwd = $row['password']; 
                }

                if (password_verify($password, $hashedPwd)) {
                    // correct login details

                    session_start();

                    // store data in session variables

                    $_SESSION['loggedInEmail'] = $email;

                    header("Location: profile.php");
                    
                } else {
                    $loginError = "<div class='alert alert-danger'>Wrong username / password combination.</div>";
                }
            } else {
                $loginError = "<div class='alert alert-danger'>No such user in our database. <a class='close' data-dismiss='alert'?>&times;</a></div>";
            }
        }

    }

    mysqli_close($conn);

?>

<!DOCTYPE html>

<html>

	<head>
		<meta name="viewport"
			content="width=device-width, initial-scale=1.0">
		<title>Login page</title>

		<link rel="stylesheet"
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
			integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
			crossorigin="anonymous">
	</head>


	<body>

		<div class="container">

			<h1>Login page</h1>
            <p class="lead">Use this form to log in to your account</p>

            <?php echo $loginError ?>

            <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post">
                <div class="form-group">
                    <small class="text-danger">* <?php echo $emailError; ?></small>
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <small class="text-danger">* <?php echo $passwordError; ?></small>
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                </div>
                <input type="submit" value="Log in" class="btn btn-primary" name="login">
            </form>
			

		</div>


		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
			integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
			crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
			integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
			crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
			integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
			crossorigin="anonymous"></script>
	</body>

</html>