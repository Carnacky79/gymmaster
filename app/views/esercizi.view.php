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
                    <?php require 'parts/dropdown.new.php' ?>

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
                    <?php
                    $count = 1;
                    foreach ($data['esercizi'] as $esercizio) {
                        $imgs = IMG . '/esercizi/' . $esercizio->cat_nome . '/' . $esercizio->nome . '/' . str_replace('_', '-', $esercizio->nome) . '.gif';
                        $html = <<<HTML
                        <div class="col-4">
                        <div class="box">
                            <div class="box-header">
                                <h3>$esercizio->nome</h3>
                                <small>$esercizio->cat_nome</small>
                            </div>
                            <div class="box-tool">
                                <!--<ul class="nav">
                                    <li class="nav-item inline dropdown">
                                        <a class="nav-link" data-toggle="dropdown">
                                            <i class="material-icons md-18">&#xe5d4;</i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-scale pull-right">
                                            <a class="dropdown-item" href>Assegna esercizio</a>

                                            <div class="dropdown-divider"></div>

                                        </div>
                                    </li>
                                </ul>-->
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-4">
                                    <img class="img-responsive" src='$imgs' alt='$esercizio->nome' style="width: 100%" />
                                    </div>
                                    <div class="col-8">
                                    
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                        </div>
HTML;
                        echo $html;
                        if ($count % 3 == 0) {
                            echo '</div><div class="row">';
                        }
                        $count++;
                    }
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


