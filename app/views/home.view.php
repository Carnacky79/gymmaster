<?php require 'parts/head.php' ?>
<body>
<div class="app" id="app">

    <!-- ############ LAYOUT START-->
    <div class="center-block w-xxl w-auto-xs p-y-md">
        <div class="navbar">
            <div class="pull-center">
                <div ui-include="'<?= ASSETS ?>/views/blocks/navbar.brand.html'"></div>
            </div>
        </div>
        <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
            <div class="m-b text-sm text-center">
                Log In GymMaster
            </div>
            <form name="form" action="<?= ROOT ?>/login" method="post">
                <div class="md-form-group float-label">
                    <input type="email" class="md-input" name="email" required>
                    <label>Email</label>
                </div>
                <div class="md-form-group float-label">
                    <input type="password" class="md-input" name="password" required>
                    <label>Password</label>
                </div>
                <!--<div class="m-b-md">
                    <label class="md-check">
                        <input type="radio" name="admin" value="1"><i class="primary"></i> Entra come Admin
                    </label>

                    <label class="md-check">
                        <input type="radio" name="admin" value="2"><i class="primary"></i> Entra come Utente
                    </label>
                </div>-->
                <button type="submit" class="btn primary btn-block p-x-md">Entra</button>
            </form>
        </div>

    </div>

    <!-- ############ LAYOUT END-->

</div>
<?php require 'parts/footer.php'; ?>


