<div class="nk-page-background op-5" data-bg-mp4="https://octonia.fr/theme/Octonia/video/bg-2.mp4" data-bg-webm="https://octonia.fr/theme/Octonia/video/bg-2.webm" data-bg-ogv="https://octonia.fr/theme/Octonia/video/bg-2.ogv" data-bg-poster="octonia.fr/theme/Octonia/video/bg-2.jpg"></div>



<div class="nk-page-border">

    <div class="nk-page-border-t"></div>

    <div class="nk-page-border-r"></div>

    <div class="nk-page-border-b"></div>

    <div class="nk-page-border-l"></div>

</div>



<header class="nk-header nk-header-opaque">

    <div class="nk-contacts-top">

        <div class="container">

            <div class="nk-contacts-left">

                <div class="nk-navbar">

                    <ul class="nk-nav">

   </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown dropdown-hover">
<?= ($banner_server) ? '<p class="text-center">'.$banner_server.'</p>' : '<p class="text-center">'.$Lang->get('SERVER__STATUS_OFF').'</p>' ?>

                    </ul>

                </div>

            </div>

            <div class="nk-contacts-right">

                <div class="nk-navbar">

                    <ul class="nk-nav">

                        <?php if(!$isConnected) { ?>

                            <li><a href="#" data-toggle="modal" data-target="#login"><?= $Lang->get('USER__LOGIN')?></a></li>

                            <li><a href="#" data-toggle="modal" data-target="#register"><?= $Lang->get('USER__REGISTER')?></a></li>

                        <?php } else { ?>

                            <li class="nk-drop-item">

                                <a href="#"><?= $user['pseudo'] ?></a>

                                <ul class="dropdown">

                                    <li><a href="#notifications_modal" onclick="notification.markAllAsSeen(2)" data-toggle="modal"><?= $Lang->get('NOTIFICATIONS__LIST') ?></a><span class="notification-indicator"></span></li>

                                    <li><a href="<?= $this->Html->url(array('controller' => 'profile', 'action' => 'index', 'plugin' => null)) ?>"><?= $Lang->get('USER__PROFILE') ?></a></li>

                                    <li><a href="<?= $this->Html->url(array('controller' => 'user', 'action' => 'logout', 'plugin' => null)) ?>"><?= $Lang->get('USER__LOGOUT') ?></a></li>

                                    <?php if($Permissions->can('ACCESS_DASHBOARD')) { ?>

                                        <li><a href="<?= $this->Html->url(array('controller' => '', 'action' => 'index', 'plugin' => 'admin')) ?>"><?= $Lang->get('GLOBAL__ADMIN_PANEL') ?></a></li>

                                    <?php } ?>

                                </ul>

                            </li>

                        <?php } ?>

                    </ul>

                </div>

            </div>

        </div>

    </div>

    <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-transparent nk-navbar-autohide">

        <div class="container">

            <div class="nk-nav-table">



                <a href="http://octonia.fr" class="nk-nav-logo">

                    <img src="https://octonia.fr/theme/OctoniaV2/img/logo.png" alt="" width="90">

                </a>



                <ul class="nk-nav nk-nav-right hidden-md-down" data-nav-mobile="#nk-nav-mobile">

                    <li class="">

                        <a href="<?= $this->Html->url('/') ?>">

                            <?= $Lang->get('GLOBAL__HOME') ?>

                        </a>

                    </li>



                    <?php

                    if (!empty($nav)) {



                        $i = 0;

                        foreach ($nav as $key => $value) {



                            if (empty($value['Navbar']['submenu'])) {



                                echo '<li class="scroll"';

                                echo ($this->params['controller'] == $value['Navbar']['name']) ? ' actived' : '';

                                echo '">';

                                echo '<a href="' . $value['Navbar']['url'] . '"';

                                echo ($value['Navbar']['open_new_tab']) ? ' target="_blank"' : '';

                                echo '>';

                                echo $value['Navbar']['name'];

                                echo '</a>';

                                echo '</li>';



                            } else {



                                echo '<li class="nk-drop-item">';

                                echo '<a href="#">';

                                echo $value['Navbar']['name'] . '';

                                echo '</a>';

                                echo '<ul class="dropdown">';

                                $submenu = json_decode($value['Navbar']['submenu']);

                                foreach ($submenu as $k => $v) {



                                    echo '<li>';

                                    echo '<a href="' . rawurldecode(rawurldecode($v)) . '"';

                                    echo ($value['Navbar']['open_new_tab']) ? ' target="_blank"' : '';

                                    echo '>';

                                    echo rawurldecode(str_replace('+', ' ', $k));

                                    echo '</a>';

                                    echo '</li>';



                                }

                                echo '</ul>';

                                echo '</li>';



                            }

                            $i++;

                        }

                    }

                    ?>



                </ul>



                <ul class="nk-nav nk-nav-right nk-nav-icons">



                    <li class="single-icon hidden-lg-up">

                        <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">

                                <span class="nk-icon-burger">

                                    <span class="nk-t-1"></span>

                                    <span class="nk-t-2"></span>

                                    <span class="nk-t-3"></span>

                                </span>

                        </a>

                    </li>



                    <li class="single-icon">

                        <a href="#" class="no-link-effect" data-nav-toggle="#nk-side">

                            <span class="nk-icon-burger">

                                <span class="nk-t-1"></span>

                                <span class="nk-t-2"></span>

                                <span class="nk-t-3"></span>

                            </span>

                        </a>

                    </li>



                </ul>



            </div>

        </div>

    </nav>

</header>



<nav class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-lg nk-navbar-align-center nk-navbar-overlay-content" id="nk-side">



    <div class="nk-navbar-bg">

        <div class="bg-image" style="background-image: url('https://octonia.fr/app/webroot/img/rendu%20scene%201%20trailer%20new0111.png')"></div>

    </div>





    <div class="nano">

        <div class="nano-content">

            <div class="nk-nav-table">



                <div class="nk-nav-row">

                    <a href="<?= $this->Html->url('/') ?>" class="nk-nav-logo">

                        <img src="https://octonia.fr/theme/OctoniaV2/img/logo.png" alt="" width="150">

                    </a>

                </div>



                <div class="nk-nav-row nk-nav-row-full nk-nav-row-center">

                    <ul class="nk-nav">

                        <?php

                        if (!empty($nav)) {



                            $i = 0;

                            foreach ($nav as $key => $value) {



                                if (empty($value['Navbar']['submenu'])) {



                                    echo '<li class="scroll"';

                                    echo ($this->params['controller'] == $value['Navbar']['name']) ? ' actived' : '';

                                    echo '">';

                                    echo '<a href="' . $value['Navbar']['url'] . '"';

                                    echo ($value['Navbar']['open_new_tab']) ? ' target="_blank"' : '';

                                    echo '>';

                                    echo $value['Navbar']['name'];

                                    echo '</a>';

                                    echo '</li>';



                                } else {



                                    echo '<li class="nk-drop-item">';

                                    echo '<a href="#">';

                                    echo $value['Navbar']['name'] . '';

                                    echo '</a>';

                                    echo '<ul class="dropdown">';

                                    $submenu = json_decode($value['Navbar']['submenu']);

                                    foreach ($submenu as $k => $v) {



                                        echo '<li>';

                                        echo '<a href="' . rawurldecode(rawurldecode($v)) . '"';

                                        echo ($value['Navbar']['open_new_tab']) ? ' target="_blank"' : '';

                                        echo '>';

                                        echo rawurldecode(str_replace('+', ' ', $k));

                                        echo '</a>';

                                        echo '</li>';



                                    }

                                    echo '</ul>';

                                    echo '</li>';



                                }

                                $i++;

                            }

                        }

                        ?>

                    </ul>

                </div>

                <div class="nk-nav-row">

                    <div class="nk-nav-footer">

                        © 2016. Tous droits réservés. Powered by <a href="http://mineweb.org" target="_blank">MineWeb</a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</nav>



<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-left-side nk-navbar-overlay-content hidden-lg-up">

    <div class="nano">

        <div class="nano-content">

            <a href="<?= $this->Html->url('/') ?>" class="nk-nav-logo">

                <img src="https://octonia.fr/theme/OctoniaV2/img/logo.png" alt="" width="90">

            </a>

            <div class="nk-navbar-mobile-content">

                <ul class="nk-nav">

                </ul>

            </div>

        </div>

    </div>

</div>