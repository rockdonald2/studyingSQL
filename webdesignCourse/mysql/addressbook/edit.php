<?php

    session_start();

    if (@!$_SESSION['loggedInUser']) {
        header('Location: index.php');
    }

    $clientID = @$_GET['id'];

    include("includes/connection.php");
    include("includes/functions.php");

    $query = "SELECT * FROM clients WHERE id='$clientID'";
    $result = mysqli_query($conn, $query);

    $emailError = $nameError = "";

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $clientName = $row['name'];
            $clientEmail = $row['email'];
            $clientPhone = $row['phone'];
            $clientAddress = $row['address'];
            $clientCompany = $row['company'];
            $clientNotes = $row['notes'];
        }
    } else {
        $alertMessage = "<div class='alert alert-warning'>Nothing to see here! <a href='clients.php'>Head back</a></div>";
    }

    if (isset($_POST['update'])) {
        $clientName = validateFormData($_POST['clientName']);
        $clientEmail = validateFormData($_POST['clientEmail']);
        $clientPhone = validateFormData($_POST['clientPhone']);
        $clientCompany = validateFormData($_POST['clientCompany']);
        $clientAddress = validateFormData($_POST['clientAddress']);
        $clientNotes = validateFormData($_POST['clientNotes']);

        $query = "UPDATE clients SET name='$clientName', email='$clientEmail', phone='$clientPhone', address='$clientAddress', company='$clientCompany', notes='$clientNotes' WHERE id='$clientID'";

        $result = mysqli_query($conn, $query);

        if ($result) {
            header('Location: clients.php?alert=updatesuccess');
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }

    if (isset($_POST['delete'])) {
        $alertMessage = "<div class='alert alert-danger'>
            <p>Are you sure want to delete this client? No take backs!</p>
            <form action='" . htmlspecialchars($_SERVER['PHP_SELF']) . "?id=$clientID' method='post'>
                <input type='submit' class='btn btn-danger btn-sm' name='confirm-delete' value='Yes, delete!'>
                <a type='button' class='btn btn-default btn-sm' data-dismiss='alert'>Oops, no thanks!</a>
            </form>
        </div>";
    }

    if (isset($_POST['confirm-delete'])) {
        $query = "DELETE FROM clients WHERE id='$clientID'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            header('Location: clients.php?alert=deleted');
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }

    include("includes/header.php");

?>

<h1>Edit client</h1>

<?php echo @$alertMessage ?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?id=<?php echo $clientID; ?>" method="post" class="row">
    <div class="form-group col-sm-6">
        <small class="text-danger"><?php echo $nameError; ?></small>
        <label for="client-name">Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control input-lg" id="client-name" name="clientName" value="<?php echo $clientName ?>">
    </div>
    <div class="form-group col-sm-6">
        <small class="text-danger"><?php echo $emailError; ?></small>
        <label for="client-email">Email <span class="text-danger">*</span></label>
        <input type="email" class="form-control input-lg" id="client-email" name="clientEmail" value="<?php echo $clientEmail ?>">
    </div>
    <div class="form-group col-sm-6">
        <label for="client-phone">Phone</label>
        <input type="text" class="form-control input-lg" id="client-phone" name="clientPhone" value="<?php echo $clientPhone ?>">
    </div>
    <div class="form-group col-sm-6">
        <label for="client-address">Address</label>
        <input type="text" class="form-control input-lg" id="client-address" name="clientAddress" value="<?php echo $clientAddress ?>">
    </div>
    <div class="form-group col-sm-6">
        <label for="client-company">Company</label>
        <input type="text" class="form-control input-lg" id="client-company" name="clientCompany" value="<?php echo $clientCompany ?>">
    </div>
    <div class="form-group col-sm-6">
        <label for="client-notes">Notes</label>
        <textarea class="form-control input-lg" id="client-notes" name="clientNotes" value="<?php echo $clientNotes ?>"></textarea>
    </div>
    <div class="col-sm-12 border-top pt-sm-4">
        <button type="submit" class="btn btn-lg btn-danger float-left" name="delete">Delete client</button>
        <button type="submit" class="btn btn-lg btn-success float-right" name="update">Update client</button>
        <a href="clients.php" type="button" class="btn btn-lg btn-warning float-right mr-sm-2">Cancel</a>
    </div>
</form>

<?php

    include('includes/footer.php');

?>