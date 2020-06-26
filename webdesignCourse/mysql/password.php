<?php

    include('connection.php');
    

    mysqli_close($conn);

?>

<!DOCTYPE html>

<html>

	<head>
		<meta name="viewport"
			content="width=device-width, initial-scale=1.0">
		<title>MySQL</title>

		<link rel="stylesheet"
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
			integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
			crossorigin="anonymous">
	</head>


	<body>

		<div class="container">

			<h1 class="card-header">MySQL Password hashing</h1>

			<?php

            /* $password = password_hash("mypassword", PASSWORD_DEFAULT);
            echo $password;

            $hashedPassword = '$2y$10$mc3yK3S/xSRkNpxVR3dsnuPDE.P.q2d.3UTmELhF8G1BrpIcHwDwG';

            if ( password_verify("mypassword", $hashedPassword)) {
                echo "Correct password";
            } else {
                echo "Incorrect password";
            } */

                $hashedPassword = password_hash("mypassword", PASSWORD_DEFAULT);

                if (isset($_POST['login'])) {
                    if ( password_verify($_POST['pwd'], $hashedPassword)) {
                        echo "Correct password";
                    } else {
                        echo "Incorrect password";
                    }
                }

			?>


            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form-group">
            
                <label for="pwd">* Password</label>
                <input type="password" name="pwd" id="pwd" placeholder="Password">

                <input type="submit" name="login" value="Login" class="btn btn-dark">

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