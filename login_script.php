<?php
    var_dump($_POST);

    include("./connect.php");
    include("./functions.php");

    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);

    if (empty($email) || empty($password)) {
        // check of alles is ingevult
        header("location: ./index.php?content=message&alert=loginform-empty");
    } else {

        $sql = "SELECT * FROM `aanmeldingen` WHERE `email` = '$email'";

        $result = mysqli_query($conn, $sql);

        // var_dump(mysqli_num_rows($result));

        if (!mysqli_num_rows($result)) {
            // emai onbekend
            header("location: ./index.php?content=message&alert=email-unknow");
        } else {

            $record = mysqli_fetch_assoc($result);
            // var_dump((bool) $record["activated"]);

            if (!$record["activated"]) {
            header("location: ./index.php?content=message&alert=activated&email=$email");
            }
        }

    }        // check of alles is ingevult
?>