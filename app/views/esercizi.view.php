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
                <ul class="nav navbar-nav ml-auto flex-row">
                    <li class="nav-item dropdown">
                        <a class="nav-link p-0 clear" href="#" data-toggle="dropdown">
                  <span class="avatar w-32">
                    <img src="<?= ASSETS ?>/images/a0.jpg" alt="...">
                    <i class="on b-white bottom"></i>
                  </span>
                        </a>
                        <div ui-include="'<?= ASSETS ?>/views/blocks/dropdown.user.html'"></div>
                    </li>
                    <li class="nav-item hidden-md-up">
                        <a class="nav-link pl-2" data-toggle="collapse" data-target="#collapse">
                            <i class="material-icons">&#xe5d4;</i>
                        </a>
                    </li>
                </ul>
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
                        <div class="col">
                        <div class="box">
                            <div class="box-header">
                                <h3>$esercizio->nome</h3>
                                <small>$esercizio->cat_nome</small>
                            </div>
                            <div class="box-tool">
                                <ul class="nav">
                                    <li class="nav-item inline dropdown">
                                        <a class="nav-link" data-toggle="dropdown">
                                            <i class="material-icons md-18">&#xe5d4;</i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-scale pull-right">
                                            <a class="dropdown-item" href>Assegna esercizio</a>

                                            <div class="dropdown-divider"></div>

                                        </div>
                                    </li>
                                </ul>
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
        <div id="switcher">
            <div class="switcher box-color dark-white text-color" id="sw-theme">
                <a href ui-toggle-class="active" target="#sw-theme" class="box-color dark-white text-color sw-btn">
                    <i class="fa fa-gear"></i>
                </a>
                <div class="box-header">
                    <a href="https://themeforest.net/item/flatkit-app-ui-kit/13231484?ref=flatfull"
                       class="btn btn-xs rounded danger pull-right">BUY</a>
                    <h2>Theme Switcher</h2>
                </div>
                <div class="box-divider"></div>
                <div class="box-body">
                    <p class="hidden-md-down">
                        <label class="md-check m-y-xs" data-target="folded">
                            <input type="checkbox">
                            <i class="green"></i>
                            <span class="hidden-folded">Folded Aside</span>
                        </label>
                        <label class="md-check m-y-xs" data-target="boxed">
                            <input type="checkbox">
                            <i class="green"></i>
                            <span class="hidden-folded">Boxed Layout</span>
                        </label>
                        <label class="m-y-xs pointer" ui-fullscreen>
                            <span class="fa fa-expand fa-fw m-r-xs"></span>
                            <span>Fullscreen Mode</span>
                        </label>
                    </p>
                    <p>Colors:</p>
                    <p data-target="themeID">
                        <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md"
                               data-value="{primary:'primary', accent:'accent', warn:'warn'}">
                            <input type="radio" name="color" value="1">
                            <i class="primary"></i>
                        </label>
                        <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md"
                               data-value="{primary:'accent', accent:'cyan', warn:'warn'}">
                            <input type="radio" name="color" value="2">
                            <i class="accent"></i>
                        </label>
                        <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md"
                               data-value="{primary:'warn', accent:'light-blue', warn:'warning'}">
                            <input type="radio" name="color" value="3">
                            <i class="warn"></i>
                        </label>
                        <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md"
                               data-value="{primary:'success', accent:'teal', warn:'lime'}">
                            <input type="radio" name="color" value="4">
                            <i class="success"></i>
                        </label>
                        <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md"
                               data-value="{primary:'info', accent:'light-blue', warn:'success'}">
                            <input type="radio" name="color" value="5">
                            <i class="info"></i>
                        </label>
                        <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md"
                               data-value="{primary:'blue', accent:'indigo', warn:'primary'}">
                            <input type="radio" name="color" value="6">
                            <i class="blue"></i>
                        </label>
                        <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md"
                               data-value="{primary:'warning', accent:'grey-100', warn:'success'}">
                            <input type="radio" name="color" value="7">
                            <i class="warning"></i>
                        </label>
                        <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md"
                               data-value="{primary:'danger', accent:'grey-100', warn:'grey-300'}">
                            <input type="radio" name="color" value="8">
                            <i class="danger"></i>
                        </label>
                    </p>
                    <p>Themes:</p>
                    <div data-target="bg" class="row no-gutter text-u-c text-center _600 clearfix">
                        <label class="p-a col-sm-6 light pointer m-0">
                            <input type="radio" name="theme" value="" hidden>
                            Light
                        </label>
                        <label class="p-a col-sm-6 grey pointer m-0">
                            <input type="radio" name="theme" value="grey" hidden>
                            Grey
                        </label>
                        <label class="p-a col-sm-6 dark pointer m-0">
                            <input type="radio" name="theme" value="dark" hidden>
                            Dark
                        </label>
                        <label class="p-a col-sm-6 black pointer m-0">
                            <input type="radio" name="theme" value="black" hidden>
                            Black
                        </label>
                    </div>
                </div>
            </div>

            <div class="switcher box-color black lt" id="sw-demo">
                <a href ui-toggle-class="active" target="#sw-demo" class="box-color black lt text-color sw-btn">
                    <i class="fa fa-list text-white"></i>
                </a>
                <div class="box-header">
                    <h2>Demos</h2>
                </div>
                <div class="box-divider"></div>
                <div class="box-body">
                    <div class="row no-gutter text-u-c text-center _600 clearfix">
                        <a href="dashboard.html"
                           class="p-a col-sm-6 primary">
                            <span class="text-white">Default</span>
                        </a>
                        <a href="dashboard.0.html"
                           class="p-a col-sm-6 success">
                            <span class="text-white">Zero</span>
                        </a>
                        <a href="dashboard.1.html"
                           class="p-a col-sm-6 blue">
                            <span class="text-white">One</span>
                        </a>
                        <a href="dashboard.2.html"
                           class="p-a col-sm-6 warn">
                            <span class="text-white">Two</span>
                        </a>
                        <a href="dashboard.3.html"
                           class="p-a col-sm-6 danger">
                            <span class="text-white">Three</span>
                        </a>
                        <a href="dashboard.4.html"
                           class="p-a col-sm-6 green">
                            <span class="text-white">Four</span>
                        </a>
                        <a href="dashboard.5.html"
                           class="p-a col-sm-6 info">
                            <span class="text-white">Five</span>
                        </a>
                        <div
                                class="p-a col-sm-6 lter">
                            <span class="text">...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / -->

        <!-- ############ LAYOUT END-->

    </div>
    <?php require 'parts/footer.php' ?>


