<?php

	include('connection.php');

	$query = "SELECT * FROM users";
	$result = mysqli_query($conn, $query);

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

			<h1>MySQL connection</h1>

			<?php

				if (mysqli_num_rows($result) > 0) {
					// we have data

					echo "<table class='table-bordered'><tr><th>ID</th><th>Username</th><th>Email</th></tr>";

					while($row = mysqli_fetch_assoc($result)) {
						echo "<tr><td>" . $row["id"] . "</td><td>" . $row["username"] . "</td><td>" . $row["email"] . "</td></tr>";
					}

					echo "</table>";

				} else {
					echo "No results!";
				}


				mysqli_close($conn);

			?>

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