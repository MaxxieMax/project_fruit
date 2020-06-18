<?php
include("./connect.php");
include("./functions.php");

$id = sanitize($_POST["id"]);
$pwh = sanitize($_POST["pwh"]);
$password = sanitize($_POST["Password"]);
$passwordCheck = sanitize($_POST["PasswordCheck"]);


if(empty($_POST["Password"]) || empty($_POST["PasswordCheck"])) {
    header("location: ./index.php?content=message&alert=password-empty&id=$id&pwh=$pwh");
} elseif (strcmp($password, $passwordCheck)){
    header("location: ./index.php?content=message&alert=nomatch-password&id=$id&pwh=$pwh");
} else {

    $sql = "SELECT * FROM `aanmeldingen` where `id` = $id AND `Wachtwoord` = '$pwh'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)) {

    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    $sql = "UPDATE `aanmeldingen` 
            SET     `Wachtwoord` = '$password_hash' 
            WHERE   `id` = $id
            AND      `Wachtwoord` = '$pwh'";

    if (mysqli_query($conn, $sql)) {
        // succes
        header("location: ./index.php?content=message&alert=update-succes");
    } else {
        // error
        header("location: ./index.php?content=message&alert=update-error&id=$id&pwh=$pwh");
    }

    }else{
        header("location: ./index.php?content=message&alert=no-id-pwh-match");
    }
}
