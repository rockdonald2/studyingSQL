<!DOCTYPE html>

<html>

    <head>
        <title>Get-Post</title>
    </head>

    <body>

        <form action="get-post.php"
            method="post">
            <label for="text-input">Enter your text</label>
            <input type="text"
                id="text"
                name="text-input">

            <input type="submit"
                value="Submit your text">

        </form>

        <?php
            //using get method will provide a long URL for your data & it's not secure
            // using post method will provide you the normal URL for your data & it's secure because it's hidden, transfer the data without creating long URL
        ?>

    </body>

</html>