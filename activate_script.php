<?php
include("./connect.php");
include("./functions.php");

$id = sanitize($_POST["id"]);
$pwh = sanitize($_POST["pwh"]);

if(empty($_POST["password"]) || empty($_POST["passwordCheck"])) {
    header("location: ./index.php?content=message&alert=password-empty&id=$id&pwh=$pwh");
}
?>