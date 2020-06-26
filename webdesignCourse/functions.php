<?php

    function checkForClickbait() {
        if (isset( $_POST["fix_submit"] )) {
            // save input to variable
            $clickBait = strtolower($_POST["clickbait_headline"]);

            // clickbait sounding words
            $a = array(
                "scientists",
                "doctors",
                "hate",
                "stupid",
                "weird",
                "simple",
                "trick",
                "shocked me",
                "you'll never believe",
                "hack",
                "epic",
                "unbelievable"
            );

            // their replacement
            $r = array(
                "so-called scientist",
                "so-called doctors",
                "aren't threatened by",
                "average",
                "completely normal",
                "ineffective",
                "method",
                "is no different than the others",
                "you won't really be surprised by",
                "slightly improve",
                "boring",
                "normal"
            );

            // replace words
            $honestHeadline = str_replace( $a, $r, $clickBait );

            return array($clickBait, $honestHeadline);
        }
    }

    function displayHonestHeadline($clickBait, $honestHeadline) {
        echo("<strong class='text-danger'>Original Headline</strong><h4 class='h4'>".ucwords($clickBait)."</h4><hr>");
        echo("<strong class='text-success'>Honest Headline</strong><h4 class='h4'>".ucwords($honestHeadline)."</h4>");
    }

?>