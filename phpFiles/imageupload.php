<!DOCTYPE html>

<?php

?>

<html>

    <head>
        <title>Image upload</title>
    </head>

    <form action="imageupload.php" method="post" enctype="multipart/form-data">
    
        <label for="input">Image file</label>
        <input type="file" name="input">

        <input type="submit" name="upload" value="Upload file">

    </form>

    <body>

        <?php
            if (isset($_POST['upload'])) {
                $image = $_FILES['input']['name'];
                $image_tmp = $_FILES['input']['tmp_name'];

                move_uploaded_file($image_tmp, "images/$image");
                print "<img src='images/$image'>";
            }
        ?>

    </body>

</html>