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
            <?php
            //var_dump($data['categorie']);
            ?>
            <!-- ############ PAGE START-->
            <div class="padding">
                <div class="margin">
                    <h5 class="mb-0 _300">Aggiungi nuovo esercizio</h5>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="box">
                            <div class="box-header">
                                <h3>Dettagli dell'esercizio</h3>
                            </div>
                            <div class="box-body">
                                <form action="<?= ROOT . '/admin/persistex' ?>" method="post"
                                      enctype="multipart/form-data">
                                    <div class="row mt-3">
                                        <div class="col-8">
                                            <label for="immagine_esercizio">Carica Immagine:</label>
                                            <input type="file" accept="image/gi" class="form-control"
                                                   id="immagine_esercizio"
                                                   name="immagine_esercizio">
                                        </div>
                                        <div class="col-4">
                                            <label for="categoria">Categoria:</label>
                                            <select name="categoria" id="categoria" class="form-control">
                                                <option selected value="-1">Selezione un'opzione</option>
                                                <?php
                                                foreach ($data['categorie'] as $cat) {
                                                    echo "<option value=$cat->id>$cat->nome</option>";
                                                }

                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-4">
                                            <button type="submit" class="btn btn-primary">Aggiungi Esercizio</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                if (isset($data['messaggio'])):
                    ?>
                    <div class="row">
                        <div class="col">
                            <div class="box">
                                <div class="box-header">
                                    <h3>Informazioni sul caricamento nuovo esercizio</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row mt-3">
                                        <div class="col-8">
                                            <?php
                                            if (isset($data['messaggio']))
                                                echo "<h2>{$data['messaggio']}</h2>";
                                            ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endif;
                ?>
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
