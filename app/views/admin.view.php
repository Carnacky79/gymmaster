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
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href data-toggle="dropdown">
                                <i class="fa fa-fw fa-plus text-muted"></i>
                                <span>Aggiungi</span>
                            </a>
                            <?php require 'parts/dropdown.new.php' ?>
                            <!--<div ui-include="'<?= ASSETS ?>/views/blocks/dropdown.new.html'"></div>-->
                        </li>
                    </ul>


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
                                        <i class="fa fa-arrows text-2x text-info m-y-sm"></i>
                                    </div>
                                    <div class="clear">
                                        <div class="text-muted">Esercizi</div>
                                        <h4 class="m-0 text-md _600"><a href><?php echo $data['esercizi']; ?></a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="box p-a">
                                    <div class="pull-left m-r">
                                        <i class="fa fa-photo text-2x text-accent m-y-sm"></i>
                                    </div>
                                    <div class="clear">
                                        <div class="text-muted">Photos</div>
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
                            </div>
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
                <div class="row">
                    <div class="col-md-12 col-xl-4">
                        <div class="box">
                            <div class="box-header">
                                <h3>Your tasks</h3>
                                <small>Calculated in last 7 days</small>
                            </div>
                            <div class="box-tool">
                                <ul class="nav">
                                    <li class="nav-item inline">
                                        <a class="nav-link">
                                            <i class="material-icons md-18">&#xe863;</i>
                                        </a>
                                    </li>
                                    <li class="nav-item inline dropdown">
                                        <a class="nav-link" data-toggle="dropdown">
                                            <i class="material-icons md-18">&#xe5d4;</i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-scale pull-right">
                                            <a class="dropdown-item" href>This week</a>
                                            <a class="dropdown-item" href>This month</a>
                                            <a class="dropdown-item" href>This week</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item">Today</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="text-center b-t">
                                <div class="row-col">
                                    <div class="row-cell p-a">
                                        <div class="inline m-b">
                                            <div ui-jp="easyPieChart" class="easyPieChart"
                                                 ui-refresh="app.setting.color" data-redraw='true' data-percent="55"
                                                 ui-options="{
	                      lineWidth: 8,
	                      trackColor: 'rgba(0,0,0,0.05)',
	                      barColor: '#0cc2aa',
	                      scaleColor: 'transparent',
	                      size: 100,
	                      scaleLength: 0,
	                      animate:{
	                        duration: 3000,
	                        enabled:true
	                      }
	                    }">
                                                <div>
                                                    <h5>55%</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            Finished
                                            <small class="block m-b">320</small>
                                            <a href class="btn btn-sm white rounded">Manage</a>
                                        </div>
                                    </div>
                                    <div class="row-cell p-a dker">
                                        <div class="inline m-b">
                                            <div ui-jp="easyPieChart" class="easyPieChart"
                                                 ui-refresh="app.setting.color" data-redraw='true' data-percent="45"
                                                 ui-options="{
	                      lineWidth: 8,
	                      trackColor: 'rgba(0,0,0,0.05)',
	                      barColor: '#fcc100',
	                      scaleColor: 'transparent',
	                      size: 100,
	                      scaleLength: 0,
	                      animate:{
	                        duration: 3000,
	                        enabled:true
	                      }
	                    }">
                                                <div>
                                                    <h5>45%</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            Remaining
                                            <small class="block m-b">205</small>
                                            <a href class="btn btn-sm white rounded">Manage</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="box">
                            <div class="box-header">
                                <h3>Your projects</h3>
                                <small>Calculated in last 30 days</small>
                            </div>
                            <div class="box-tool">
                                <ul class="nav">
                                    <li class="nav-item inline">
                                        <a class="nav-link">
                                            <i class="material-icons md-18">&#xe863;</i>
                                        </a>
                                    </li>
                                    <li class="nav-item inline dropdown">
                                        <a class="nav-link" data-toggle="dropdown">
                                            <i class="material-icons md-18">&#xe5d4;</i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-scale pull-right">
                                            <a class="dropdown-item" href>This week</a>
                                            <a class="dropdown-item" href>This month</a>
                                            <a class="dropdown-item" href>This week</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item">Today</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-body">
                                <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
	              [
	                { data: [[1, 3], [2, 2.6], [3, 3.2], [4, 3], [5, 3.5], [6, 3], [7, 3.5]],
	                  points: { show: true, radius: 0},
                  	  splines: { show: true, tension: 0.45, lineWidth: 2, fill: 0.2 }
	                },
	                { data: [[1, 3.6], [2, 3.5], [3, 6], [4, 4], [5, 4.3], [6, 3.5], [7, 3.6]],
	                  points: { show: true, radius: 0},
                  	  splines: { show: true, tension: 0.45, lineWidth: 2, fill: 0.1 }
	                }
	              ],
	              {
	                colors: ['#fcc100','#0cc2aa'],
	                series: { shadowSize: 3 },
	                xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
	                yaxis:{ show: true, font: { color: '#ccc' },  min: 2},
	                grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
	                tooltip: true,
	                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
	              }
	            " style="height:200px">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="box">
                            <div class="box-header">
                                <h3>Your Sales</h3>
                                <small>A general overview of your sales</small>
                            </div>
                            <div class="box-tool">
                                <ul class="nav">
                                    <li class="nav-item inline">
                                        <a class="nav-link">
                                            <i class="material-icons md-18">&#xe863;</i>
                                        </a>
                                    </li>
                                    <li class="nav-item inline dropdown">
                                        <a class="nav-link" data-toggle="dropdown">
                                            <i class="material-icons md-18">&#xe5d4;</i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-scale pull-right">
                                            <a class="dropdown-item" href>This week</a>
                                            <a class="dropdown-item" href>This month</a>
                                            <a class="dropdown-item" href>This week</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item">Today</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-body">
                                <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
	              [
	                { data: [[1, 2], [2, 4], [3, 5], [4, 7], [5, 6], [6, 4], [7, 5], [8, 4]] },
	                { data: [[1, 2], [2, 3], [3, 2], [4, 5], [5, 4], [6, 3], [7, 4], [8, 2]] }
	              ],
	              {
	                bars: { show: true, fill: true,  barWidth: 0.3, lineWidth: 2, order: 1, fillColor: { colors: [{ opacity: 0.2 }, { opacity: 0.2}] }, align: 'center'},
	                colors: ['#0cc2aa','#fcc100'],
	                series: { shadowSize: 3 },
	                xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
	                yaxis:{ show: true, font: { color: '#ccc' }},
	                grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
	                tooltip: true,
	                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
	              }
	            " style="height:200px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xl-4">
                        <div class="box light lt">
                            <div class="box-header">
                                <span class="label success pull-right">52</span>
                                <h3>Members</h3>
                            </div>
                            <ul class="list no-border p-b">
                                <li class="list-item">
                                    <a herf class="list-left">
	                	<span class="w-40 avatar danger">
		                  <span>C</span>
		                  <i class="on b-white bottom"></i>
		                </span>
                                    </a>
                                    <div class="list-body">
                                        <div><a href>Chris Fox</a></div>
                                        <small class="text-muted text-ellipsis">Designer, Blogger</small>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <a herf class="list-left">
	                  <span class="w-40 avatar purple">
		                  <span>M</span>
		                  <i class="on b-white bottom"></i>
		              </span>
                                    </a>
                                    <div class="list-body">
                                        <div><a href>Mogen Polish</a></div>
                                        <small class="text-muted text-ellipsis">Writter, Mag Editor</small>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <a herf class="list-left">
	                  <span class="w-40 avatar info">
		                  <span>J</span>
		                  <i class="off b-white bottom"></i>
		              </span>
                                    </a>
                                    <div class="list-body">
                                        <div><a href>Joge Lucky</a></div>
                                        <small class="text-muted text-ellipsis">Art director, Movie Cut</small>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <a herf class="list-left">
	                  <span class="w-40 avatar warning">
		                  <span>F</span>
		                  <i class="on b-white bottom"></i>
		              </span>
                                    </a>
                                    <div class="list-body">
                                        <div><a href>Folisise Chosielie</a></div>
                                        <small class="text-muted text-ellipsis">Musician, Player</small>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <a herf class="list-left">
	                	<span class="w-40 avatar success">
		                  <span>P</span>
		                  <i class="away b-white bottom"></i>
		                </span>
                                    </a>
                                    <div class="list-body">
                                        <div><a href>Peter</a></div>
                                        <small class="text-muted text-ellipsis">Musician, Player</small>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="box">
                            <div class="box-header">
                                <h3>Tasks</h3>
                                <small>20 finished, 5 remaining</small>
                            </div>
                            <div class="box-tool">
                                <ul class="nav">
                                    <li class="nav-item inline dropdown">
                                        <a class="nav-link text-muted p-x-xs" data-toggle="dropdown">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-scale pull-right">
                                            <a class="dropdown-item" href>New task</a>
                                            <a class="dropdown-item" href>Make all finished</a>
                                            <a class="dropdown-item" href>Make all unfinished</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item">Settings</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-body">
                                <div class="streamline b-l m-l">
                                    <div class="sl-item b-success">
                                        <div class="sl-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="sl-content">
                                            <div class="sl-date text-muted">8:30</div>
                                            <div>Call to customer <a href class="text-info">Jacob</a> and discuss the
                                                detail about the AP project.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sl-item b-info">
                                        <div class="sl-content">
                                            <div class="sl-date text-muted">Sat, 5 Mar</div>
                                            <div>Prepare for presentation</div>
                                        </div>
                                    </div>
                                    <div class="sl-item b-warning">
                                        <div class="sl-content">
                                            <div class="sl-date text-muted">Sun, 11 Feb</div>
                                            <div><a href class="text-info">Jessi</a> assign you a task <a href
                                                                                                          class="text-info">Mockup
                                                    Design</a>.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <a href class="btn btn-sm btn-outline b-info rounded text-u-c pull-right">Add one</a>
                                <a href class="btn btn-sm white text-u-c rounded">More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-4">
                        <div class="box">
                            <div class="box-header">
                                <span class="label success pull-right">5</span>
                                <h3>Activity</h3>
                                <small>10 members update their activies.</small>
                            </div>
                            <div class="box-body">
                                <div class="streamline b-l m-b m-l">
                                    <div class="sl-item">
                                        <div class="sl-left">
                                            <img src="<?= ASSETS ?>/images/a2.jpg" class="img-circle">
                                        </div>
                                        <div class="sl-content">
                                            <a href class="text-info">Louis Elliott</a><span class="m-l-sm sl-date">5 min ago</span>
                                            <div>assign you a task <a href class="text-info">Mockup Design</a>.</div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left">
                                            <img src="<?= ASSETS ?>/images/a5.jpg" class="img-circle">
                                        </div>
                                        <div class="sl-content">
                                            <a href class="text-info">Terry Moore</a><span class="m-l-sm sl-date">10 min ago</span>
                                            <div>Follow up to close deal</div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left">
                                            <img src="<?= ASSETS ?>/images/a8.jpg" class="img-circle">
                                        </div>
                                        <div class="sl-content">
                                            <a href class="text-info">Walter Paler</a><span class="m-l-sm sl-date">1 hour ago</span>
                                            <div>was added to Repo</div>
                                        </div>
                                    </div>
                                </div>
                                <a href class="btn btn-sm white rounded text-u-c m-y-xs">Load More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xl-4">
                        <div class="box">
                            <div class="box-header">
                                <h3>Messages</h3>
                            </div>
                            <ul class="list no-border">
                                <li class="list-item">
                                    <a href="" class="pull-left w-40 m-r"><img src="<?= ASSETS ?>/images/a1.jpg"
                                                                               class="img-responsive img-circle"></a>
                                    <div class="clear">
                                        <a href="" class="_500 block">Jonathan Doe</a>
                                        <span class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <a href="" class="pull-left w-40 m-r"><img src="<?= ASSETS ?>/images/a2.jpg"
                                                                               class="img-responsive img-circle"></a>
                                    <div class="clear">
                                        <a href="" class="_500 block">Jack Michale</a>
                                        <span class="text-muted">Sectetur adipiscing elit</span>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <a href="" class="pull-left w-40 m-r"><img src="<?= ASSETS ?>/images/a3.jpg"
                                                                               class="img-responsive img-circle"></a>
                                    <div class="clear">
                                        <a href="" class="_500 block">Jessi</a>
                                        <span class="text-muted">Sectetur adipiscing elit</span>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <a href="" class="pull-left w-40 m-r"><img src="<?= ASSETS ?>/images/a4.jpg"
                                                                               class="img-responsive img-circle"></a>
                                    <div class="clear">
                                        <a href="" class="_500 block">Sodake</a>
                                        <span class="text-muted">Vestibulum ullamcorper sodales nisi nec condimentum</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="box indigo-900 lt">
                            <div class="box-header b-b">
                                <h2>Latest Tweets</h2>
                            </div>
                            <ul class="list">
                                <li class="list-item">
                                    <div class="list-body">
                                        <p>Wellcome <a href class="text-info">@Drew Wllon</a> and play this web
                                            application template, have fun1 </p>
                                        <small class="block text-muted"><i class="fa fa-fw fa-clock-o"></i> 2 minuts ago</small>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <div class="list-body">
                                        <p>Morbi nec <a href class="text-info">@Jonathan George</a> nunc condimentum
                                            ipsum dolor sit amet, consectetur</p>
                                        <small class="block text-muted"><i class="fa fa-fw fa-clock-o"></i> 1 hour
                                            ago</small>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <div class="list-body">
                                        <p><a href class="text-info">@Josh Long</a> Vestibulum ullamcorper sodales nisi
                                            nec adipiscing elit. Morbi id neque quam</p>
                                        <small class="block text-muted"><i class="fa fa-fw fa-clock-o"></i> 2 hours ago</small>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="box">
                            <div class="box-header">
                                <h3>Feeds</h3>
                            </div>
                            <div class="box-divider m-0"></div>
                            <ul class="list no-border">
                                <li class="list-item">
                                    <a herf class="pull-left m-r">
	                	<span class="w-40">
	                  		<img src="<?= ASSETS ?>/images/b1.jpg" class="w-full" alt="...">
	                 	</span>
                                    </a>
                                    <div class="clear">
                                        <a href class="_500 text-ellipsis">The people who party before work</a>
                                        <small class="text-muted">May 12</small>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <a herf class="pull-left m-r">
		                <span class="w-40">
	                  		<img src="<?= ASSETS ?>/images/b2.jpg" class="w-full" alt="...">
	                 	</span>
                                    </a>
                                    <div class="clear">
                                        <a href class="_500 text-ellipsis">Robot steal your job</a>
                                        <small class="text-muted">May 9, 2015</small>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <a herf class="pull-left m-r">
	                    <span class="w-40">
	                  		<img src="<?= ASSETS ?>/images/b3.jpg" class="w-full" alt="...">
	                 	</span>
                                    </a>
                                    <div class="clear">
                                        <a href class="_500 text-ellipsis">Reservoir dogs and furious rabies</a>
                                        <small class="text-muted">Jan 9, 2015</small>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <a herf class="pull-left m-r">
	                    <span class="w-40">
	                  		<img src="<?= ASSETS ?>/images/b4.jpg" class="w-full" alt="...">
	                 	</span>
                                    </a>
                                    <div class="clear">
                                        <a href class="_500 text-ellipsis">Changing the world</a>
                                        <small class="text-muted">Jan 5, 2015</small>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <a herf class="pull-left m-r">
	                    <span class="w-40">
	                  		<img src="<?= ASSETS ?>/images/b5.jpg" class="w-full" alt="...">
	                 	</span>
                                    </a>
                                    <div class="clear">
                                        <a href class="_500 text-ellipsis">See stars</a>
                                        <small class="text-muted">Jan 2, 2015</small>
                                    </div>
                                </li>
                            </ul>
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


