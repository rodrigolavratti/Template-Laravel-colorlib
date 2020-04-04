@extends('layouts.app')

@section('conteudo')

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.html"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">UI elements</li><!-- /.menu-title -->
                <li class="menu-item-has-children active dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  <i class="menu-icon fa fa-cogs"></i>Components</a>
                    <ul class="sub-menu children active dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                        <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>

                        <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                        <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                        <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                        <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                        <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                        <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                        <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>
                        <li><i class="fa fa-table"></i><a href="tables-data.html">Data Table</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                    </ul>
                </li>

                <li class="menu-title">Icons</li><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                        <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                    </ul>
                </li>
                <li>
                    <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
                        <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                        <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
                        <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
                    </ul>
                </li>
                <li class="menu-title">Extras</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                        <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">
        <div class="top-left">
            <div class="navbar-header">
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
            </div>
        </div>
        <div class="top-right">
            <div class="header-menu">
                <div class="header-left">
                    <button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>

                    <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">3</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                        </div>
                    </div>

                    <div class="dropdown for-message">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-envelope"></i>
                            <span class="count bg-primary">4</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                    <p>Hello, this is an example msg</p>
                                </div>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </div>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                    <p>Hello, this is an example msg</p>
                                </div>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                        <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span class="count">13</span></a>

                        <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

                        <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- /header -->
    <!-- Header-->

    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Dashboard</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">UI Elements</a></li>
                                <li class="active">Buttons</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="animated fadeIn">
            <div class="buttons">

                <!-- Left Block -->
                <div class="row">
                    <div class="col-md-6">

                        <div class="card">
                            <div class="card-header">
                                <strong>Badges </strong>
                                <small>Use this class
                                    <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code> or <code>&lt;input&gt;</code>
                                </small>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-primary">Primary</button>
                                <button type="button" class="btn btn-secondary">Secondary</button>
                                <button type="button" class="btn btn-success">Success</button>
                                <button type="button" class="btn btn-danger">Danger</button>
                                <button type="button" class="btn btn-warning">Warning</button>
                                <button type="button" class="btn btn-info">Info</button>
                                <button type="button" class="btn btn-link">Link</button>
                            </div>
                        </div><!-- /# card -->


                        <div class="card">
                            <div class="card-header">
                                <strong>Button tags </strong>
                                <small>Use this class
                                    <code>.btn</code> or <code>&lt;button&gt;</code>
                                </small>
                            </div>
                            <div class="card-body">
                                <a class="btn btn-primary" href="#" role="button">Link</a>
                                <button class="btn btn-danger" type="submit">Button</button>
                                <input class="btn btn-info" type="button" value="Input">
                                <input class="btn btn-success" type="submit" value="Submit">
                                <input class="btn btn-warning" type="reset" value="Reset">
                            </div>
                        </div><!-- /# card -->

                        <div class="card">
                            <div class="card-header">
                                <strong>Disabled state </strong>
                                <small>Use this class
                                    <code>disabled="disabled"</code>
                                </small>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-primary" disabled>Primary</button>
                                <button type="button" class="btn btn-secondary" disabled>Secondary</button>
                                <button type="button" class="btn btn-success" disabled>Success</button>
                                <button type="button" class="btn btn-danger" disabled>Danger</button>
                                <button type="button" class="btn btn-warning" disabled>Warning</button>
                                <button type="button" class="btn btn-info" disabled>Info</button>
                                <button type="button" class="btn btn-link" disabled>Link</button>
                            </div>
                        </div><!-- /# card -->


                        <div class="card">
                            <div class="card-header">
                                <strong>Button with Icons </strong>
                                <small>Use <code>&lt;i&gt;</code></small>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-primary"><i class="fa fa-star"></i>&nbsp; Primary</button>
                                <button type="button" class="btn btn-secondary"><i class="fa fa-lightbulb-o"></i>&nbsp; Secondary</button>
                                <button type="button" class="btn btn-success"><i class="fa fa-magic"></i>&nbsp; Success</button>
                                <button type="button" class="btn btn-warning"><i class="fa fa-map-marker"></i>&nbsp; Warning</button>
                                <button type="button" class="btn btn-danger"><i class="fa fa-rss"></i>&nbsp; Danger</button>
                                <button type="button" class="btn btn-link"><i class="fa fa-link"></i>&nbsp; Link</button>
                            </div>
                        </div><!-- /# card -->


                        <div class="card">
                            <div class="card-header">
                                <strong>Small Button </strong>
                                <small>Use this class
                                    <code>.btn-sm</code>
                                </small>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-primary btn-sm">Primary</button>
                                <button type="button" class="btn btn-secondary btn-sm">Secondary</button>
                                <button type="button" class="btn btn-success btn-sm">Success</button>
                                <button type="button" class="btn btn-warning btn-sm">Warning</button>
                                <button type="button" class="btn btn-danger btn-sm">Danger</button>
                                <button type="button" class="btn btn-link btn-sm">Link</button>
                            </div>
                        </div><!-- /# card -->

                        <div class="card">
                            <div class="card-header">
                                <strong>Small Button with Icons </strong>
                                <small>Use this class
                                    <code>.btn-sm</code>
                                </small>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-star"></i>&nbsp; Primary</button>
                                <button type="button" class="btn btn-secondary btn-sm"><i class="fa fa-lightbulb-o"></i>&nbsp; Secondary</button>
                                <button type="button" class="btn btn-success btn-sm"><i class="fa fa-magic"></i>&nbsp; Success</button>
                                <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-map-marker"></i>&nbsp; Warning</button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-rss"></i>&nbsp;Danger</button>
                                <button type="button" class="btn btn-link btn-sm"><i class="fa fa-link"></i>&nbsp; Link</button>
                            </div>
                        </div><!-- /# card -->

                        <div class="card">
                            <div class="card-header">
                                <strong>Large Button </strong>
                                <small>Use this class
                                    <code>.btn-lg</code>
                                </small>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-primary btn-lg">Primary</button>
                                <button type="button" class="btn btn-secondary btn-lg">Secondary</button>
                                <button type="button" class="btn btn-success btn-lg">Success</button>
                                <button type="button" class="btn btn-warning btn-lg">Warning</button>
                                <button type="button" class="btn btn-danger btn-lg">Danger</button>
                                <button type="button" class="btn btn-link btn-lg">Link</button>
                            </div>
                        </div><!-- /# card -->

                        <div class="card">
                            <div class="card-header">
                                <strong>Large Active Button </strong>
                                <small>Use this class
                                    <code>.btn-lg .active</code>
                                </small>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-primary btn-lg active">Primary</button>
                                <button type="button" class="btn btn-secondary btn-lg active">Secondary</button>
                                <button type="button" class="btn btn-success btn-lg active">Success</button>
                                <button type="button" class="btn btn-warning btn-lg active">Warning</button>
                                <button type="button" class="btn btn-danger btn-lg active">Danger</button>
                                <button type="button" class="btn btn-link btn-lg active">Link</button>
                            </div>
                        </div><!-- /# card -->

                        <div class="card">
                            <div class="card-header">
                                <strong>Block Level Buttons </strong>
                                <small>Use this class
                                    <code>.btn-block</code>
                                </small>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
                                <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>

                                <button type="button" class="btn btn-primary btn-lg btn-block">Primary</button>
                                <button type="button" class="btn btn-secondary btn-lg btn-block">Secondary</button>
                                <button type="button" class="btn btn-success btn-lg btn-block">Success</button>
                                <button type="button" class="btn btn-warning btn-lg btn-block">Warning</button>
                                <button type="button" class="btn btn-danger btn-lg btn-block">Danger</button>
                                <button type="button" class="btn btn-link btn-lg btn-block">Link</button>
                            </div>
                        </div><!-- /# card -->
                    </div>

                    <!-- Right Block -->
                    <div class="col-md-6">

                        <div class="card">
                            <div class="card-header">
                                <strong>Outline Buttons </strong>
                                <small>Use this class
                                    <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code> or <code>&lt;input&gt;</code>
                                </small>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-outline-primary">Primary</button>
                                <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                <button type="button" class="btn btn-outline-success">Success</button>
                                <button type="button" class="btn btn-outline-danger">Danger</button>
                                <button type="button" class="btn btn-outline-warning">Warning</button>
                                <button type="button" class="btn btn-outline-info">Info</button>
                                <button type="button" class="btn btn-outline-link">Link</button>
                            </div>
                        </div><!-- /# card -->


                        <div class="card">
                            <div class="card-header">
                                <strong>Button tags </strong>
                                <small>Use this class
                                    <code>.btn</code> or <code>&lt;button&gt;</code>
                                </small>
                            </div>
                            <div class="card-body">
                                <a class="btn btn-outline-primary" href="#" role="button">Link</a>
                                <button class="btn btn-outline-danger" type="submit">Button</button>
                                <input class="btn btn-outline-info" type="button" value="Input">
                                <input class="btn btn-outline-success" type="submit" value="Submit">
                                <input class="btn btn-outline-warning" type="reset" value="Reset">
                            </div>
                        </div><!-- /# card -->

                        <div class="card">
                            <div class="card-header">
                                <strong>Disabled state </strong>
                                <small>Use this class
                                    <code>disabled="disabled"</code>
                                </small>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-outline-primary" disabled>Primary</button>
                                <button type="button" class="btn btn-outline-secondary" disabled>Secondary</button>
                                <button type="button" class="btn btn-outline-success" disabled>Success</button>
                                <button type="button" class="btn btn-outline-danger" disabled>Danger</button>
                                <button type="button" class="btn btn-outline-warning" disabled>Warning</button>
                                <button type="button" class="btn btn-outline-info" disabled>Info</button>
                                <button type="button" class="btn btn-outline-link" disabled>Link</button>
                            </div>
                        </div><!-- /# card -->


                        <div class="card">
                            <div class="card-header">
                                <strong>Button with Icons </strong>
                                <small>Use <code>&lt;i&gt;</code></small>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-outline-primary"><i class="fa fa-star"></i>&nbsp; Primary</button>
                                <button type="button" class="btn btn-outline-secondary"><i class="fa fa-lightbulb-o"></i>&nbsp; Secondary</button>
                                <button type="button" class="btn btn-outline-success"><i class="fa fa-magic"></i>&nbsp; Success</button>
                                <button type="button" class="btn btn-outline-warning"><i class="fa fa-map-marker"></i>&nbsp; Warning</button>
                                <button type="button" class="btn btn-outline-danger"><i class="fa fa-rss"></i>&nbsp; Danger</button>
                                <button type="button" class="btn btn-outline-link"><i class="fa fa-link"></i>&nbsp; Link</button>
                            </div>
                        </div><!-- /# card -->


                        <div class="card">
                            <div class="card-header">
                                <strong>Small Button </strong>
                                <small>Use this class
                                    <code>.btn-sm</code>
                                </small>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-outline-primary btn-sm">Primary</button>
                                <button type="button" class="btn btn-outline-secondary btn-sm">Secondary</button>
                                <button type="button" class="btn btn-outline-success btn-sm">Success</button>
                                <button type="button" class="btn btn-outline-warning btn-sm">Warning</button>
                                <button type="button" class="btn btn-outline-danger btn-sm">Danger</button>
                                <button type="button" class="btn btn-outline-link btn-sm">Link</button>
                            </div>
                        </div><!-- /# card -->

                        <div class="card">
                            <div class="card-header">
                                <strong>Small Button with Icons </strong>
                                <small>Use this class
                                    <code>.btn-sm</code>
                                </small>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-outline-primary btn-sm"><i class="fa fa-star"></i>&nbsp; Primary</button>
                                <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fa fa-lightbulb-o"></i>&nbsp; Secondary</button>
                                <button type="button" class="btn btn-outline-success btn-sm"><i class="fa fa-magic"></i>&nbsp; Success</button>
                                <button type="button" class="btn btn-outline-warning btn-sm"><i class="fa fa-map-marker"></i>&nbsp; Warning</button>
                                <button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-rss"></i>&nbsp;Danger</button>
                                <button type="button" class="btn btn-outline-link btn-sm"><i class="fa fa-link"></i>&nbsp; Link</button>
                            </div>
                        </div><!-- /# card -->

                        <div class="card">
                            <div class="card-header">
                                <strong>Large Button </strong>
                                <small>Use this class
                                    <code>.btn-lg</code>
                                </small>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-outline-primary btn-lg">Primary</button>
                                <button type="button" class="btn btn-outline-secondary btn-lg">Secondary</button>
                                <button type="button" class="btn btn-outline-success btn-lg">Success</button>
                                <button type="button" class="btn btn-outline-warning btn-lg">Warning</button>
                                <button type="button" class="btn btn-outline-danger btn-lg">Danger</button>
                                <button type="button" class="btn btn-outline-link btn-lg">Link</button>
                            </div>
                        </div><!-- /# card -->

                        <div class="card">
                            <div class="card-header">
                                <strong>Large Active Button </strong>
                                <small>Use this class
                                    <code>.btn-lg .active</code>
                                </small>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-outline-primary btn-lg active">Primary</button>
                                <button type="button" class="btn btn-outline-secondary btn-lg active">Secondary</button>
                                <button type="button" class="btn btn-outline-success btn-lg active">Success</button>
                                <button type="button" class="btn btn-outline-warning btn-lg active">Warning</button>
                                <button type="button" class="btn btn-outline-danger btn-lg active">Danger</button>
                                <button type="button" class="btn btn-outline-link btn-lg active">Link</button>
                            </div>
                        </div><!-- /# card -->

                        <div class="card">
                            <div class="card-header">
                                <strong>Block Level Buttons </strong>
                                <small>Use this class
                                    <code>.btn-block</code>
                                </small>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-outline-primary btn-lg btn-block">Block level button</button>
                                <button type="button" class="btn btn-outline-secondary btn-lg btn-block">Block level button</button>

                                <button type="button" class="btn btn-outline-primary btn-lg btn-block">Primary</button>
                                <button type="button" class="btn btn-outline-secondary btn-lg btn-block">Secondary</button>
                                <button type="button" class="btn btn-outline-success btn-lg btn-block">Success</button>
                                <button type="button" class="btn btn-outline-warning btn-lg btn-block">Warning</button>
                                <button type="button" class="btn btn-outline-danger btn-lg btn-block">Danger</button>
                                <button type="button" class="btn btn-outline-link btn-lg btn-block">Link</button>
                            </div>
                        </div><!-- /# card -->
                    </div>
                </div><!-- .row -->
            </div> <!-- .buttons -->
        </div><!-- .animated -->
    </div><!-- .content -->

@endsection