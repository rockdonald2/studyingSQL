<?php

    session_start();

    if (!$_SESSION['loggedInUser']) {
        header('Location: index.php');
    }

    include('includes/connection.php');

    $query = "SELECT * FROM clients";
    $result = mysqli_query($conn, $query);

    if (isset($_GET['alert'])) {
        if ($_GET['alert'] == 'success') {
            $alertMessage = "<div class='alert alert-success'>New client added! <a class='close' data-dismiss='alert'>&times;</a></div>";
        }

        else if ($_GET['alert'] == 'updatesuccess') {
            $alertMessage = "<div class='alert alert-success'>Client successfully updated! <a class='close' data-dismiss='alert'>&times;</a></div>";
        }

        else if ($_GET['alert'] == 'deleted') {
            $alertMessage = "<div class='alert alert-success'>Client deleted! <a class='close' data-dismiss='alert'>&times;</a></div>";
        }
    }

    mysqli_close($conn);

    include('includes/header.php');

?>

<h1>Client Address Book</h1>

<?php echo @$alertMessage ?>

<table class="table table-striped table-bordered table-light">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Company</th>
            <th scope="col">Notes</th>
            <th scope="col">Edit</th>
        </tr>
    </thead>

    

    <tbody>

        <?php

            
            if (mysqli_num_rows($result) > 0) {

                while ( $row = mysqli_fetch_assoc($result) ) {
                    echo "<tr>";

                    echo "<td scope='row'>" . $row['name'] . "</td>" . 
                    "<td>" . $row['email'] . "</td>" . 
                    "<td>" .  $row['phone'] . "</td>" . 
                    "<td>" . $row['address'] . "</td>" .
                    "<td>" . $row['company'] . "</td>" .
                    "<td>" . $row['notes'] . "</td>" .
                    '<td><a href="edit.php?id=' . $row['id'] . '" class="text-danger">Edit</a></td>';

                    echo "</tr>";
                }
            } else {
                echo "<div class='alert alert-warning'>You have no clients!</div>";
            }

        ?>

        <tr>
            <td colspan="7" class="text-center"><a href="add.php" class="btn btn-success">+ Add client</a></td>
        </tr>
    </tbody>
</table>

<?php

    include('includes/footer.php');

?>