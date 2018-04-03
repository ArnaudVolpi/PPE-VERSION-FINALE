<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PPE 2.2</title>
   
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- FONT AWESOME -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <!-- JQuery -->
    <script src="js/jquery-3.2.1.min.js"></script>


    <!-- Css Commun -->
    <link rel="stylesheet" href="css/myCss/commonCss.css"> 
    <!-- Css Perso -->
    <?php 
    if (!isset($_GET['page'])) {
       $css="index";
    } else {
        $css= str_replace(".php","",$_GET['page']) ;
    }?>
   <link rel="stylesheet" href="css/myCss/<?=$css?>.css">
    <?php
    require_once("include/connection.php");
    echo'<script src="js/myJs/form.js"></script>';
    ?>
    

</head>
<body>
<!-- PHP VIEW-->
<?php

if (!isset($_GET['page'])) {
    require_once 'include/accueil.php';
} else {
    require_once  htmlspecialchars($_GET['page']);
}
?>
<!--/ PHP VIEW -->

<!-- Bootstrap core JS -->
<script src="js/bootstrap.min.js"></script>
<!-- MDB core JS -->
<script src="js/mdb.min.js"></script>
<!-- Popper JS -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap notify -->
<script src="js/bootstrap-notify/bootstrap-notify.min.js"></script>
</body>
</html>
