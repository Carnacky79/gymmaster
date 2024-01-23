<!-- aside -->
<div id="aside" class="app-aside modal fade folded md nav-expand">
    <div class="left navside indigo-900 dk" layout="column">
        <div class="navbar navbar-md no-radius text-center">
            <!-- brand -->
            <a class="navbar-brand">
                <!--<div ui-include="'<?= ASSETS ?>/images/logo_gym.svg'"></div>-->
                <img src="<?= ASSETS ?>/images/logo_gym.jpg" alt="logo"
                     style="max-height: 70px; border: 2px solid black">
                <!--<span class="hidden-folded inline">Gym Master</span>-->
            </a>
            <!-- / brand -->
        </div>
        <div flex class="hide-scroll">
            <nav class="scroll nav-active-primary">

                <ul class="nav" ui-nav>
                    <!--<li class="nav-header hidden-folded">
                        <small class="text-muted">Main</small>
                    </li>-->

                    <li>
                        <a href="<?= ROOT ?>">
                  <span class="nav-icon">
                    <i class="material-icons">&#xeb43;
                        <!--<span ui-include="'<?= ASSETS ?>/images/i_0.svg'"></span>-->
                    </i>

                  </span>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                            <!--<span class="nav-label">
                <b class="label rounded label-sm primary">5</b>
              </span>-->
                            <span class="nav-icon">
                    <i class="material-icons">&#xf02e;
                        <!--<span ui-include="'<?= ASSETS ?>/images/i_1.svg'"></span>-->
                    </i>
                  </span>
                            <span class="nav-text">Utenti</span>
                        </a>
                        <ul class="nav-sub">
                            <li>
                                <a href="<?= ROOT ?>/admin/users">
                                    <span class="nav-text">Lista Utenti</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= ROOT ?>/admin/adduser">
                                    <span class="nav-text">Aggiungi Utente</span>
                                </a>
                            </li>
                            <!--<li>
                                <a href="<?= ROOT ?>/admin/deluser">
                                    <span class="nav-text">Elimina Utente</span>
                                </a>
                            </li>-->
                        </ul>
                    </li>

                    <li>
                        <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                            <span class="nav-icon">
                    <i class="material-icons">&#xebc4;
                        <!--<span ui-include="'<?= ASSETS ?>/images/i_2.svg'"></span>-->
                    </i>
                  </span>
                            <span class="nav-text">Esercizi</span>
                        </a>
                        <ul class="nav-sub">
                            <li>
                                <a href="<?= ROOT ?>/admin/esercizi">
                                    <span class="nav-text">Lista Esercizi</span>
                                </a>
                            </li>
                            <!--<li>
                                <a href="<?= ROOT ?>/admin/addesercizio">
                                    <span class="nav-text">Aggiungi Esercizio</span>
                                </a>
                            </li>-->
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- / aside -->
