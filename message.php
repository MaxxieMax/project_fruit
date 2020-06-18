<?php
    $alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";
    $id = (isset($_GET["id"]))? $_GET["id"]: "default";
    $pwh = (isset($_GET["pwh"]))? $_GET["pwh"]: "default";


    switch($alert){
        case "no-email" : 
            echo '<div class="alert alert-danger mt-5  w-50 mx-auto" role="alert">
            U heeft geen email ingevult, probeer het opnieuw
          </div>';
          header("refresh: 3; ./index.php?content=registratie");
        break;
        case "emailexists" :
            echo '<div class="alert alert-warning mt-5  w-50 mx-auto" role="alert">
           Het email bestaat al, probeer het opnieuw
          </div>';
          header("refresh: 3; ./index.php?content=registratie");
        break;
        case "register_error" :
          echo '<div class="alert alert-danger mt-5  w-50 mx-auto" role="alert">
          Het is niet gelukt, probeer het opnieuw
         </div>';
         header("refresh: 3; ./index.php?content=registratie");
        break;
        case "register_succses" :
          echo '<div class="alert alert-danger mt-5  w-50 mx-auto" role="alert">
          Het is gelukt, U wordt verder doorgestuurd
         </div>';
         header("refresh: 3; ./index.php?content=login");
        break;
        case "register-error" :
          echo '<div class="alert alert-danger mt-5  w-50 mx-auto" role="alert">
          Het is niet gelukt, U wordt weer teruggestuurd.
         </div>';
         header("refresh: 3; ./index.php?content=login");
        break;
        case "hacker-alert" :
          echo '<div class="alert alert-danger mt-5  w-50 mx-auto" role="alert">
          U heeft geen rechten op deze pagina.
         </div>';
         header("refresh: 3; ./index.php?content=homepage");
        break;
        case "password-empty" :
          echo '<div class="alert alert-danger mt-5  w-50 mx-auto" role="alert">
          U heeft een van beide velden niet ingevuld, probeer opnieuw.
         </div>';
         header("refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
        break;
        case "" :

        break;
        default:
            header("./index.php?content=home");
    break;
    }
?>