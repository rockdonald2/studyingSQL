<!DOCTYPE html>

<html>

    <head>
        <meta http-equiv="Content-Type"
            content="text/html;charset=UTF-8">
        <meta http-equiv="X-UA-Compatible"
            content="ie=edge">
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"
            href="bootstrap/css/bootstrap.min.css">
        <title>PHP</title>
    </head>

    <body>
        <?php
            // print, or with var_dump()
            /* echo("<h1>Hello world</h1>"); */

            /* comment */
            # comment
            // comment


            // var
            $name = "Zsolt";
            /* echo("Hello " . $name . "<br>"); */

            // const
            define("TITLE", "PHP"); 

            //arrays
        ?>

        <div class="container-fluid bg-light text-dark">
            <h1><?php echo TITLE; ?></h1>

            <?php 
                $user = array("Lukacs Zsolt", "lzsolt", 32, "male", "Mexico");

                var_dump($user);

                $associativeUser = array(
                    "username" => "lzsolt",
                    "fullname" => "Lukacs Zsolt",
                    "age" => 32,
                    "gender" => "male",
                    "country" => "Mexico"
                );

                var_dump($associativeUser);
                echo($associativeUser["username"]);

                $multidimensionalUser = array(

                    "user1" => array("username" => "lzsolt",
                    "fullname" => "Lukacs Zsolt",
                    "age" => 32,
                    "gender" => "male",
                    "country" => "Mexico"),

                    "user2" => array("username" => "lzsolt",
                    "fullname" => "Lukacs Zsolt",
                    "age" => 32,
                    "gender" => "male",
                    "country" => "Mexico"),

                    "user3" => array("username" => "lzsolt",
                    "fullname" => "Lukacs Zsolt",
                    "age" => 32,
                    "gender" => "male",
                    "country" => "Mexico")

                );

                var_dump($multidimensionalUser);
                echo($multidimensionalUser["user1"]["username"]);
            ?>
        </div>

        <?php 
            define("SECONDTITLE", "Honest Click Bait Headlines");

            include("functions.php");
            
            if(isset($_POST["fix_submit"])) {
                checkForClickbait();
            }
        ?>

        <div class="container clearfix my-5">
            <h1 class="h2"><?php echo(SECONDTITLE); ?></h1>
            <p class="lead">Hate click bait? Turn those annoying headlines into realistic and honest ones using this simple
                program.</p>

            <div class="row">
                <form action=""
                    method="post"
                    class="col-sm-8 offset-sm-2">
                    <textarea placeholder="Paste click bait headline here"
                        class="form-control input-group-lg my-2"
                        name="clickbait_headline"></textarea>
                    <button type="submit" class="btn btn-primary btn-lg float-right" name="fix_submit">Fix it!</button>
                </form>
            </div>

            <?php 
                if (isset($_POST["fix_submit"])) {
                    $clickBait = checkForClickbait()[0];
                    $honestHeadline = checkForClickbait()[1];

                    displayHonestHeadline($clickBait, $honestHeadline);
                }
            ?>
        </div>

        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>

</html>