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
                    <h5 class="mb-0 _300">Ciao <?= $_SESSION['user']->nome ?></h5>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="box">
                            <div class="box-header">
                                <h3>Nuova scheda di <?= $data['iscritto'][0]->nome ?></h3>
                            </div>
                            <div class="box-tool">
                                <!--<ul class="nav">
                                    <li class="nav-item inline dropdown">
                                        <a class="nav-link" data-toggle="dropdown">
                                            <i class="material-icons md-18">&#xe5d4;</i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-scale pull-right">
                                            <a class="dropdown-item" href>Crea Scheda</a>

                                            <div class="dropdown-divider"></div>

                                        </div>
                                    </li>
                                </ul>-->
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col">
                                        <?php
                                        var_dump($data['scheda']);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box">
                            <div class="box-header">
                                <h3>Lista Schede di <?= $data['iscritto'][0]->nome ?></h3>
                            </div>
                            <div class="box-tool">
                                <!--<ul class="nav">
                                    <li class="nav-item inline dropdown">
                                        <a class="nav-link" data-toggle="dropdown">
                                            <i class="material-icons md-18">&#xe5d4;</i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-scale pull-right">
                                            <a class="dropdown-item" href>Crea Scheda</a>

                                            <div class="dropdown-divider"></div>

                                        </div>
                                    </li>
                                </ul>-->
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col">


                                    </div>
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


