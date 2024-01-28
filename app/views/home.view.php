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
            <div class="m-b btn-groups">
                <a class="btn primary btn-block" data-toggle="modal" data-target="#m-a-f" ui-toggle-class="fade-down" ui-target="#animate">Ciro</a>
                <a class="btn danger btn-block" data-toggle="modal" data-target="#m-a-d" ui-toggle-class="fade-down" ui-target="#animate">Atleta</a>

            </div>

        </div>

    </div>

    <!-- ############ LAYOUT END-->

</div>
<!-- .modal -->


<div id="m-a-f" class="modal fade" data-backdrop="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ciro</h5>
            </div>
            <div class="modal-body text-center p-lg">
                <form name="form" action="<?= ROOT ?>/login" method="post">
                    <div class="md-form-group float-label">
                        <input type="email" class="md-input" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="md-form-group float-label">
                        <input type="password" class="md-input" name="password" required>
                        <label>Password</label>
                    </div>
                    <input type="hidden" name="admin" value="1">
                    <button type="submit" class="btn primary btn-block p-x-md">Entra</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn danger p-x-md btn-block" data-dismiss="modal">Chiudi</button>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>

<div id="m-a-d" class="modal fade" data-backdrop="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Atleta</h5>
            </div>
            <div class="modal-body text-center p-lg">
                <form name="form" action="<?= ROOT ?>/login" method="post">
                    <div class="md-form-group float-label">
                        <input type="email" class="md-input" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="md-form-group float-label">
                        <input type="password" class="md-input" name="password" required>
                        <label>Password</label>
                    </div>

                            <input type="hidden" name="admin" value="0">

                    <button type="submit" class="btn primary btn-block p-x-md">Entra</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn danger p-x-md btn-block" data-dismiss="modal">Chiudi</button>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>
<!-- / .modal -->
<?php require 'parts/footer.php'; ?>


