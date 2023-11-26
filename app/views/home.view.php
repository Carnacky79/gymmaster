<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Flatkit - HTML Version | Bootstrap 4 Web App Kit with AngularJS</title>
    <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="<?=ASSETS?>/assets/images/logo.png">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="<?=ASSETS?>/assets/images/logo.png">

    <!-- style -->
    <link rel="stylesheet" href="<?=ASSETS?>/animate.css/animate.min.css" type="text/css" />
    <link rel="stylesheet" href="<?=ASSETS?>/glyphicons/glyphicons.css" type="text/css" />
    <link rel="stylesheet" href="<?=ASSETS?>/font-awesome/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="<?=ASSETS?>/material-design-icons/material-design-icons.css" type="text/css" />

    <link rel="stylesheet" href="<?=ASSETS?>/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
    <!-- build:css ../assets/styles/app.min.css -->
    <link rel="stylesheet" href="<?=ASSETS?>/styles/app.css" type="text/css" />
    <!-- endbuild -->
    <link rel="stylesheet" href="<?=ASSETS?>/styles/font.css" type="text/css" />
</head>
<body>
<div class="app" id="app">

    <!-- ############ LAYOUT START-->
    <div class="center-block w-xxl w-auto-xs p-y-md">
        <div class="navbar">
            <div class="pull-center">
                <div ui-include="'<?=ASSETS?>/views/blocks/navbar.brand.html'"></div>
            </div>
        </div>
        <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
            <div class="m-b text-sm">
                Log In GymMaster
            </div>
            <form name="form" action="login" method="post">
                <div class="md-form-group float-label">
                    <input type="email" class="md-input" name="email" required>
                    <label>Email</label>
                </div>
                <div class="md-form-group float-label">
                    <input type="password" class="md-input" name="password" required>
                    <label>Password</label>
                </div>
                <div class="m-b-md">
                    <label class="md-check">
                        <input type="radio" name="admin" value="1"><i class="primary"></i> Entra come Admin
                    </label>

                    <label class="md-check">
                        <input type="radio" name="admin" value="2"><i class="primary"></i> Entra come Utente
                    </label>
                </div>
                <button type="submit" class="btn primary btn-block p-x-md">Entra</button>
            </form>
        </div>

    </div>

    <!-- ############ LAYOUT END-->

</div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
<script src="<?=ASSETS?>/libs/jquery/jquery/dist/jquery.js"></script>
<!-- Bootstrap -->
<script src="<?=ASSETS?>/libs/jquery/tether/dist/js/tether.min.js"></script>
<script src="<?=ASSETS?>/libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<!-- core -->
<script src="<?=ASSETS?>/libs/jquery/underscore/underscore-min.js"></script>
<script src="<?=ASSETS?>/libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
<script src="<?=ASSETS?>/libs/jquery/PACE/pace.min.js"></script>

<script src="<?=ASSETS?>/scripts/config.lazyload.js"></script>

<script src="<?=ASSETS?>/scripts/palette.js"></script>
<script src="<?=ASSETS?>/scripts/ui-load.js"></script>
<script src="<?=ASSETS?>/scripts/ui-jp.js"></script>
<script src="<?=ASSETS?>/scripts/ui-include.js"></script>
<script src="<?=ASSETS?>/scripts/ui-device.js"></script>
<script src="<?=ASSETS?>/scripts/ui-form.js"></script>
<script src="<?=ASSETS?>/scripts/ui-nav.js"></script>
<script src="<?=ASSETS?>/scripts/ui-screenfull.js"></script>
<script src="<?=ASSETS?>/scripts/ui-scroll-to.js"></script>
<script src="<?=ASSETS?>/scripts/ui-toggle-class.js"></script>

<script src="<?=ASSETS?>/scripts/app.js"></script>

<!-- ajax -->
<script src="<?=ASSETS?>/libs/jquery/jquery-pjax/jquery.pjax.js"></script>
<script src="<?=ASSETS?>/scripts/ajax.js"></script>
<!-- endbuild -->
</body>
</html>


