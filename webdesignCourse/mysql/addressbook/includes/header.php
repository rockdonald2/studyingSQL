<!DOCTYPE html>

<style>
    body {
        font-family: 'Roboto', serif !important;
    }
</style>

<html>

    <head>
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0">
        <title>Client Address Book</title>

        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
            rel="stylesheet">

        <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
    </head>


    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-sm-5">
            <a class="navbar-brand"
                href="<?php if (@$_SESSION['loggedInUser']) { echo 'clients.php'; } else { echo 'index.php'; } ?>"><span class="text-muted">CLIENT</span><strong>MANAGER</strong></a>
            <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse"
                id="navbarSupportedContent">

                <?php

                    if (@$_SESSION['loggedInUser']) {

                ?>

                <ul class="nav navbar-nav">
                    <li><a href="clients.php"
                            class="text-light mr-sm-2">My clients</a></li>
                    <li><a href="add.php"
                            class="text-light">Add client</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right ml-auto">
                    <p class="navbar-text m-0 p-0 mt-sm-2 mr-sm-2">Aloha, <?php echo $_SESSION['loggedInUser'] ?>!</p>
                    <li><a href="logout.php"
                            class="btn btn-outline-success">Log out</a></li>
                </ul>

                <?php

                } else {

                ?>

                <ul class="nav navbar-nav navbar-right ml-auto">
                    <li><a href="index.php"
                            class="btn btn-outline-success">Login</a></li>
                </ul>

                <?php

                }

                ?>
            </div>
        </nav>

        <div class="container">