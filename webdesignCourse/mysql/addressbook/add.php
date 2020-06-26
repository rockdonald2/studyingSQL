<?php

    session_start();

    if (@!$_SESSION['loggedInUser']) {
        header('Location: index.php');
    }

    include("includes/connection.php");
    include("includes/functions.php");

    $nameError = $emailError = "";

    if ( isset($_POST['add']) ) {
        $clientName = $clientEmail = $clientPhone = $clientAddress = $clientCompany = $clientNotes = "";

        if ( !$_POST['clientName'] ) {
            $nameError = "Please enter a name <br>";
        } else {
            $clientName = validateFormData($_POST['clientName']);
        }

        if ( !$_POST['clientEmail'] ) {
            $emailError = "Please enter an email address <br>";
        } else {
            $clientEmail = validateFormData($_POST['clientEmail']);
        }

        $clientPhone = validateFormData($_POST['clientPhone']);
        $clientCompany = validateFormData($_POST['clientCompany']);
        $clientAddress = validateFormData($_POST['clientAddress']);
        $clientNotes = validateFormData($_POST['clientNotes']);

        if ( $clientName && $clientEmail ) {
            $query = "INSERT INTO clients (id, name, email, phone, address, company, notes, date_added) VALUES (NULL, '$clientName', '$clientEmail', '$clientPhone', '$clientAddress','$clientCompany', '$clientNotes', CURRENT_TIMESTAMP)";

            $result = mysqli_query($conn, $query);

            if ( $result ) {
                header("Location: clients.php?alert=success");
            } else {
                echo "Error:" . $query . "<br>" . mysqli_error($conn);
            }
        }

    }

    mysqli_close($conn);

    include("includes/header.php");

?>

<h1>Add client</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="row">
    <div class="form-group col-sm-6">
        <small class="text-danger"><?php echo $nameError; ?></small>
        <label for="client-name">Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control input-lg" id="client-name" name="clientName" value="">
    </div>
    <div class="form-group col-sm-6">
        <small class="text-danger"><?php echo $emailError; ?></small>
        <label for="client-email">Email <span class="text-danger">*</span></label>
        <input type="email" class="form-control input-lg" id="client-email" name="clientEmail" value="">
    </div>
    <div class="form-group col-sm-6">
        <label for="client-phone">Phone</label>
        <input type="text" class="form-control input-lg" id="client-phone" name="clientPhone" value="">
    </div>
    <div class="form-group col-sm-6">
        <label for="client-address">Address</label>
        <input type="text" class="form-control input-lg" id="client-address" name="clientAddress" value="">
    </div>
    <div class="form-group col-sm-6">
        <label for="client-company">Company</label>
        <input type="text" class="form-control input-lg" id="client-company" name="clientCompany" value="">
    </div>
    <div class="form-group col-sm-6">
        <label for="client-notes">Notes</label>
        <textarea class="form-control input-lg" id="client-notes" name="clientNotes" value=""></textarea>
    </div>
    <div class="col-sm-12">
        <a href="clients.php" type="button" class="btn btn-lg btn-warning">Cancel</a>
        <button type="submit" class="btn btn-lg btn-success float-right" name="add">Add client</button>
    </div>
</form>

<?php

    include('includes/footer.php');

?>