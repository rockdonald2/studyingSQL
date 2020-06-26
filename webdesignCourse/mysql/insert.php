<?php

    include('connection.php');
    
    /* $query = "INSERT INTO users(id, username, password, email, signup_date, biography) 
            VALUES (NULL, 'jacksonsmith', 'abc13', 'jack@eson.com', CURRENT_TIMESTAMP, 'Hello, I am Jackson!')"; */

    /* INSERT INTO users(id, username, password, email, signup_date, biography) 
        VALUES (NULL, 'jacksonsmith', 'abc13', 'jack@eson.com', CURRENT_TIMESTAMP, 'Hello, I am Jackson!');
    */

    $nameError = $emailError = $passwordError = "";
    $username =  $email = $password = "";

    if( isset( $_POST["add"]) ) {

        function validateFormData( $formData ) {
            $formData = trim( stripslashes( htmlspecialchars( $formData )));
            return $formData;
        }

        if ( !$_POST["username"] ) {
            $nameError = "Please enter your name <br>";
        } else {
            $username = validateFormData( $_POST["username"] );
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

        if ( $username && $email && $password ) {
            $query = "INSERT INTO users(id, username, password, email, signup_date, biography) 
            VALUES (NULL, '$username', '$password', '$email', CURRENT_TIMESTAMP, NULL)";

            if ( mysqli_query( $conn, $query ) ) {
                echo "<div class='alert alert-success'>New record in database!</div>";
            } else {
                echo "<div class='alert alert-danger'>Insertion failed" . $query . "<br>" . mysqli_error($conn) . "</div>";
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
		<title>MySQL</title>

		<link rel="stylesheet"
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
			integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
			crossorigin="anonymous">
	</head>


	<body>

		<div class="container">

			<h1>MySQL Insert</h1>

            <p class="text-danger">* Required fields</p>

            <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post">
            
                <small class="text-danger">* <?php echo $nameError; ?></small>
                <input type="text" name="username" id="username" placeholder="Username"><br><br>

                <small class="text-danger">* <?php echo $emailError; ?></small>
                <input type="email" name="email" id="email" placeholder="Email"><br><br>

                <small class="text-danger">* <?php echo $passwordError; ?></small>
                <input type="password" name="password" id="password" placeholder="Password"><br><br>


                <input type="submit" name="add" value="Add entry" class="btn btn-success">

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