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
                    <!--<div ui-include="'<?= ASSETS ?>/views/blocks/dropdown.new.html'"></div>-->


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
                    <div class="col-sm-12 col-md-5 col-lg-4">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="box p-a">
                                    <div class="pull-left m-r">
                                        <i class="fa fa-users text-2x text-danger m-y-sm"></i>
                                    </div>
                                    <div class="clear">
                                        <div class="text-muted">Utenti</div>
                                        <h4 class="m-0 text-md _600"><a
                                                    href=""><?php echo count($data['iscritti']); ?></a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="box p-a">
                                    <div class="pull-left m-r">
                                        <i class="fa-solid fa-dumbbell text-2x text-info m-y-sm"></i>
                                    </div>
                                    <div class="clear">
                                        <div class="text-muted">Esercizi</div>
                                        <h4 class="m-0 text-md _600"><a href><?php echo $data['esercizi']; ?></a></h4>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-sm-6">
                                <div class="box p-a">
                                    <div class="pull-left m-r">
                                        <i class="fa-solid fa-calendar-days text-2x text-accent m-y-sm"></i>
                                    </div>
                                    <div class="clear">
                                        <div class="text-muted">Schede</div>
                                        <h4 class="m-0 text-md _600"><a href>630</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="box p-a">
                                    <div class="pull-left m-r">
                                        <i class="fa fa-video-camera text-2x text-success m-y-sm"></i>
                                    </div>
                                    <div class="clear">
                                        <div class="text-muted">Videos</div>
                                        <h4 class="m-0 text-md _600"><a href>750</a></h4>
                                    </div>
                                </div>
                            </div>-->
                            <div class="col-sm-12">
                                <div class="row no-gutter box-color text-center primary">
                                    <div class="col-sm-6 p-a">
                                        Followers
                                        <h4 class="m-0 text-md _600"><a href>2350</a></h4>
                                    </div>
                                    <div class="col-sm-6 p-a dker">
                                        Following
                                        <h4 class="m-0 text-md _600"><a href>7250</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7 col-lg-8">
                        <div class="row no-gutter box dark bg">
                            <div class="col-sm-8">
                                <div class="box-header">
                                    <h3>Activities</h3>
                                    <small>Your last activity is posted 4 hours ago</small>
                                </div>
                                <div class="box-body">
                                    <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
			              [
			                {
			                  data: [[1, 6.1], [2, 6.3], [3, 6.4], [4, 6.6], [5, 7.0], [6, 7.7], [7, 8.3]],
			                  points: { show: true, radius: 0},
			                  splines: { show: true, tension: 0.45, lineWidth: 2, fill: 0 }
			                },
			                {
			                  data: [[1, 5.5], [2, 5.7], [3, 6.4], [4, 7.0], [5, 7.2], [6, 7.3], [7, 7.5]],
			                  points: { show: true, radius: 0},
			                  splines: { show: true, tension: 0.45, lineWidth: 2, fill: 0 }
			                }
			              ],
			              {
			                colors: ['#0cc2aa','#fcc100'],
			                series: { shadowSize: 3 },
			                xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
			                yaxis:{ show: true, font: { color: '#ccc' }},
			                grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
			                tooltip: true,
			                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
			              }
			            " style="height:162px">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 dker">
                                <div class="box-header">
                                    <h3>Reports</h3>
                                </div>
                                <div class="box-body">
                                    <p class="text-muted">Dales nisi nec adipiscing elit. Morbi id neque quam. Aliquam
                                        sollicitudin venenatis</p>
                                    <a href class="btn btn-sm btn-outline rounded b-success">Read More</a>
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


