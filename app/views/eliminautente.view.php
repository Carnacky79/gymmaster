<?php require 'parts/head.php' ?>
<body>
<div class="app" id="app">

    <!-- ############ LAYOUT START-->

    <?php require 'parts/aside.php' ?>

    <!-- content -->
    <div id="content" class="app-content box-shadow-z0" role="main">
        <div class="app-header white box-shadow navbar-md">
            <div class="navbar navbar-toggleable-sm flex-row align-items-center">
                <!-- Open side - Naviation on mobile -->
                <a data-toggle="modal" data-target="#aside" class="hidden-lg-up mr-3">
                    <i class="material-icons">&#xe5d2;</i>
                </a>
                <!-- / -->

                <!-- Page title - Bind to $state's title -->
                <div class="mb-0 h5 no-wrap" ng-bind="$state.current.data.title" id="pageTitle"></div>

                <!-- navbar collapse -->
                <div class="collapse navbar-collapse" id="collapse">
                    <!-- link and dropdown -->


                    <!-- <div ui-include="'<?= ASSETS ?>/views/blocks/navbar.form.html'"></div> -->
                </div>
                <!-- / navbar collapse -->

                <!-- navbar right -->
                <?php require 'parts/navbar.right.php' ?>
                <!-- / navbar right -->
            </div>
        </div>
        <div class="app-footer">
            <div class="p-2 text-xs">
                <div class="pull-right text-muted py-1">
                    &copy; Copyright <strong>EggWeb</strong> <span
                            class="hidden-xs-down">- Built with Love v1.1.3</span>
                    <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
                </div>
            </div>
        </div>
        <div ui-view class="app-body" id="view">

            <!-- ############ PAGE START-->
            <div class="padding">
    <div class="margin">
        <h5 class="mb-0 _300">Elimina utente</h5>
    </div>
    <div class="row">
        <div class="col">
            <div class="box">
                <div class="box-header">
                    <h3>Seleziona utente da eliminare</h3>
                </div>
                <div class="box-body">
                    <form action="<?= ROOT . '/admin/deleteuser' ?>" method="post">
                        <div class="row mt-3">
                            <div class="col-6">
                                <label for="utente_da_elimina">Seleziona utente:</label>
                                <select class="form-control" id="utente_da_elimina" name="utente_da_elimina" required>
                                    <!-- Aggiungi opzioni dinamiche qui con i dati degli utenti -->
                                    <?php
                                    // Esempio: Ottenere la lista degli utenti dal backend e mostrare le opzioni nel menu a discesa
                                    $lista_utenti = []; // Sostituisci con la tua lista di utenti
                                    foreach ($lista_utenti as $utente) {
                                        echo "<option value='" . $utente['id'] . "'>" . $utente['nome'] . " " . $utente['cognome'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-4">
                                <button type="submit" class="btn btn-danger">Elimina Utente</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                <!-- ############ PAGE END-->

            </div>
        </div>
        <!-- / -->

        <!-- theme switcher -->
        <?php require 'parts/switcher.php' ?>
        <!-- / -->

        <!-- ############ LAYOUT END-->

    </div>
    <?php require 'parts/footer.php' ?>


