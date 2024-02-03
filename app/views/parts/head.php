<?php
/*if ($_SERVER['HTTP_REFERER'] != 'https://www.gymstudio-manager.it/') {
    if (!isset($_SERVER['user']) && substr($_SERVER['HTTP_REFERER'], 0, 39) != 'https://www.gymstudio-manager.it/public') {
        header("Location: https://www.gymstudio-manager.it");
    }
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Gym Studio Manager</title>
    <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="<?= ASSETS ?>/assets/images/logo.png">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="<?= ASSETS ?>/assets/images/logo.png">

    <!-- style -->
    <link rel="stylesheet" href="<?= ASSETS ?>/animate.css/animate.min.css" type="text/css"/>
    <link rel="stylesheet" href="<?= ASSETS ?>/glyphicons/glyphicons.css" type="text/css"/>
    <!--<link rel="stylesheet" href="<?= ASSETS ?>/font-awesome/css/font-awesome.min.css" type="text/css"/>-->
    <!--<link rel="stylesheet" href="<?= ASSETS ?>/material-design-icons/material-design-icons.css" type="text/css" />-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" href="<?= ASSETS ?>/bootstrap/dist/css/bootstrap.min.css" type="text/css"/>
    <!-- build:css ../assets/styles/app.min.css -->
    <link rel="stylesheet" href="<?= ASSETS ?>/styles/app.css" type="text/css"/>
    <!-- endbuild -->
    <link rel="stylesheet" href="<?= ASSETS ?>/styles/font.css" type="text/css"/>
    <style>
        .material-icons {
            padding-top: 10px;
            font-size: 16px;
        }
    </style>
    <script src="https://kit.fontawesome.com/2dcf18d0c3.js" crossorigin="anonymous"></script>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
</head>
<?php
//echo $_SERVER['HTTP_REFERER'] != 'https://www.gymstudio-manager.it/';
?>
