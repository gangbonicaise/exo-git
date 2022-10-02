<!DOCTYPE html>

<html lang="en" class="material-style layout-fixed">

<head>
    <title>Bouge-SE | Application de Suivi Evaluation</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Empire Bootstrap admin template made using Bootstrap 4, it has tons of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="Empire, bootstrap admin template, bootstrap admin panel, bootstrap 4 admin template, admin template">
    <meta name="author" content="Nicaise GANGBO" />
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/assets/img/logo.png">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/fonts/ionicons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/fonts/linearicons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/fonts/open-iconic.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/fonts/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/fonts/feather.css">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/css/bootstrap-material.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/css/shreerang-material.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/css/uikit.css">

    <!-- Libs -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/libs/flot/flot.css">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>


</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <!-- [ Layout sidenav ] Start -->
            <div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-white logo-dark">
                <!-- Brand demo (see assets/css/demo/demo.css) -->
                <div class="app-brand demo">
                    <span class="app-brand-logo demo">
                        <img src="<?php echo base_url(); ?>assets/assets/img/logo.png" alt="Brand Logo" class="img-fluid">
                    </span>
                    <a href="#" class="app-brand-text demo sidenav-text font-weight-normal ml-2">Bouge-SE</a>
                    <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
                        <i class="ion ion-md-menu align-middle"></i>
                    </a>
                </div>
                <div class="sidenav-divider mt-0"></div>

                <!-- Links -->
                <ul class="sidenav-inner py-1">

                    <!-- Dashboards dashbord_admin -->
                    <li class="sidenav-item active">
                        <a href="<?php echo base_url();?>index.php/welcome/dashbord_admin" class="sidenav-link">
                            <i class="sidenav-icon feather icon-home"></i>
                            <div>Dashboards</div>
                        </a>
                    </li>
                    <!-- Forms & Tables -->
                    <li class="sidenav-divider mb-1"></li>
                    <li class="sidenav-header small font-weight-semibold" style="color: #ff0000; font-weight: bold; font-size: 14px;">Suivi & statistiques</li>
                    <li class="sidenav-item">
                        <a href="javascript:" class="sidenav-link sidenav-toggle">
                            <span class="iconify" data-icon="emojione:bar-chart" data-inline="false"></span>
                            <div>&ensp;&ensp;Cantine</div>
                        </a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="<?php echo base_url();?>index.php/welcome/affiche_etat_stock_cantine" class="sidenav-link">
                                    <div style="color: #090088;">Point du stock de la cantine</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="<?php echo base_url();?>index.php/welcome/affiche_etat_sortie_stock_cantine" class="sidenav-link">
                                    <div style="color: #ce2b37;">Point des sorties de stock</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="<?php echo base_url();?>index.php/welcome/affiche_etat_depense_cantine_1" class="sidenav-link">
                                    <div style="color: #000;">Cout périodique des repas</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="<?php echo base_url();?>index.php/welcome/total_approvisionnement_cantine" class="sidenav-link">
                                    <div style="color: #028900">Point total des approvisionnements</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="sidenav-item">
                        <a href="javascript:" class="sidenav-link sidenav-toggle">
                            <span class="iconify" data-icon="emojione:bar-chart" data-inline="false"></span>
                            <div>&ensp;&ensp;Start-up succès</div>
                        </a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="<?php echo base_url();?>index.php/welcome/etat_stock_jus_bilan" class="sidenav-link">
                                    <div style="color: #090088;">Etat du stock de jus</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="<?php echo base_url();?>index.php/welcome/point_vente_jus" class="sidenav-link">
                                    <div style="color: #ce2b37;">Point des ventes de jus</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="<?php echo base_url();?>index.php/welcome/point_investissement_jus" class="sidenav-link">
                                    <div style="color: #028900">Point financiers de prod.</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="<?php echo base_url();?>index.php/welcome/point_vente_jus_bilan" class="sidenav-link">
                                    <div style="color: #004c4c;">Résultat d'exploitation</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidenav-item">
                        <a href="javascript:" class="sidenav-link sidenav-toggle">
                            <span class="iconify" data-icon="emojione:bar-chart" data-inline="false"></span>
                            <div>&ensp;&ensp;Production animale</div>
                        </a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="<?php echo base_url();?>index.php/welcome/etat_stock_production_animale" class="sidenav-link">
                                    <div style="color: #090088;">Etat du stock</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="<?php echo base_url();?>index.php/welcome/point_vente_production_animale" class="sidenav-link">
                                    <div style="color: #ce2b37;">Point des ventes</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="<?php echo base_url();?>index.php/welcome/point_invest_production_animale" class="sidenav-link">
                                    <div style="color: #028900">Point des investissements</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="<?php echo base_url();?>index.php/welcome/resultat_exploitation_production_animale_v" class="sidenav-link">
                                    <div style="color: #004c4c;">Résultat d'exploitation</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="<?php echo base_url();?>index.php/welcome/graph_resultat_exploitation_production_animale" class="sidenav-link">
                                    <div style="color: #004c4c;">Graphique Résultat d'exploitation</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:" class="sidenav-link sidenav-toggle">
                            <span class="iconify" data-icon="emojione:bar-chart" data-inline="false"></span>
                            <div>&ensp;&ensp;Production végétale</div>
                        </a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="<?php echo base_url();?>index.php/welcome/admin_point_stock_planche" class="sidenav-link">
                                    <div style="color: #090088;">Etat du stock</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="<?php echo base_url();?>index.php/welcome/admin_point_confection_planche" class="sidenav-link">
                                    <div style="color: #028900;">Point des confections des planches</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="<?php echo base_url();?>index.php/welcome/admin_point_vente_planche" class="sidenav-link">
                                    <div style="color: #ce2b37;">Point des ventes</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="<?php echo base_url();?>index.php/welcome/resultat_exploitation_production_vegetale" class="sidenav-link">
                                    <div style="color: #004c4c;">Résultat d'exploitation</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidenav-item">
                        <a href="javascript:" class="sidenav-link sidenav-toggle">
                            <span class="iconify" data-icon="emojione:bar-chart" data-inline="false"></span>
                            <div>&ensp;&ensp;Transformation</div>
                        </a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="#" class="sidenav-link">
                                    <div style="color: #090088;">Etat du stock</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="#" class="sidenav-link">
                                    <div style="color: #ce2b37;">Point des ventes</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="#" class="sidenav-link">
                                    <div style="color: #028900">Point des investissements</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="#" class="sidenav-link">
                                    <div style="color: #004c4c;">Résultat d'exploitation</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Layouts --> 
                    <li class="sidenav-divider mb-1"></li>
                    <span class="iconify" data-icon="emojione:chart-increasing" data-inline="false"></span>
                    <li class="sidenav-header small font-weight-semibold" style="color: #ce2b37; font-weight: bold; font-size: 14px;">Définition des indicateurs</li>
                    <li class="sidenav-item">
                        <a href="<?php echo base_url();?>index.php/welcome/ajout_indicateurs" class="sidenav-link">
                            <span class="iconify" data-icon="emojione:chart-increasing" data-inline="false"></span>
                            <div>&ensp;&ensp;Indicateurs de perf.</div>
                        </a>
                    </li>

                    <!-- Layouts --> 
                    <li class="sidenav-divider mb-1"></li>
                    <li class="sidenav-header small font-weight-semibold" style="color: #090088; font-weight: bold; font-size: 14px;">Gestion des Users</li>
                    <li class="sidenav-item">
                        <a href="#" class="sidenav-link">
                            <span class="iconify" data-icon="whh:businesscard" data-inline="false"></span>
                            <div>&ensp;&ensp;Liste des users</div>
                        </a>
                    </li>

                    <!-- Opérations sur les prfils des utilsateurs ajout suppressions et modifications   -->
                    <li class="sidenav-item">
                        <a href="javascript:" class="sidenav-link sidenav-toggle">
                            <span class="iconify" data-icon="emojione:busts-in-silhouette" data-inline="false"></span>
                            <div>&ensp;&ensp;Poste des Users UP</div>
                        </a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="<?php echo base_url();?>index.php/welcome/add_user" class="sidenav-link">
                                    <div>Nouveau utilisateur</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="bui_badges.html" class="sidenav-link">
                                    <div>Modifier infos</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="bui_badges.html" class="sidenav-link">
                                    <div>Supprimer</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                        <!-- UI elements -->
                    <li class="sidenav-item">
                        <a href="javascript:" class="sidenav-link sidenav-toggle">
                            <span class="iconify" data-icon="flat-ui:dude" data-inline="false"></span>
                            <div>&ensp;&ensp;Profil user UP</div>
                        </a>
                        <ul class="sidenav-menu">
                            <li class="sidenav-item">
                                <a href="<?php echo base_url();?>index.php/welcome/add_user" class="sidenav-link">
                                    <div>Nouveau profil</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="bui_badges.html" class="sidenav-link">
                                    <div>Modifier infos</div>
                                </a>
                            </li>
                            <li class="sidenav-item">
                                <a href="bui_button.html" class="sidenav-link">
                                    <div>Supprimer</div>
                                </a>
                            </li>
                        </ul>
                    </li>


                    

                    <!-- Pages -->
                    <li class="sidenav-divider mb-1"></li>
                    <li class="sidenav-header small font-weight-semibold" style="color: #559900; font-weight: bold; font-size: 14px;"> Messages & notifications</li>
                    <li class="sidenav-item">
                        <a href="pages_authentication_login-v1.html" class="sidenav-link">
                            <span class="iconify" data-icon="emojione:incoming-envelope" data-inline="false"></span>
                            <div>&ensp; &ensp;Messages</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="pages_authentication_register-v1.html" class="sidenav-link">
                             <span class="iconify" data-icon="emojione:alarm-clock" data-inline="false"></span>
                            <div>&ensp; &ensp;Notifications</div>
                        </a>
                    </li>
                    
                </ul>
            </div>
            <!-- [ Layout sidenav ] End -->
            <!-- [ Layout container ] Start -->
            <div class="layout-container">
                <!-- [ Layout navbar ( Header ) ] Start -->
                <nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-dark container-p-x" id="layout-navbar">

                    <!-- Brand demo (see assets/css/demo/demo.css) -->
                    <a href="index.html" class="navbar-brand app-brand demo d-lg-none py-0 mr-4">
                        <span class="app-brand-logo demo">
                            <img src="<?php echo base_url(); ?>assets/assets/img/logo-dark.png" alt="Brand Logo" class="img-fluid">
                        </span>
                        <span class="app-brand-text demo font-weight-normal ml-2">Bouge-SE</span>
                    </a>

                    <!-- Sidenav toggle (see assets/css/demo/demo.css) -->
                    <div class="layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto">
                        <a class="nav-item nav-link px-0 mr-lg-4" href="javascript:">
                            <i class="ion ion-md-menu text-large align-middle"></i>
                        </a>
                    </div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#layout-navbar-collapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="navbar-collapse collapse" id="layout-navbar-collapse">
                        <!-- Divider -->
                        <hr class="d-lg-none w-100 my-2">

                        <div class="navbar-nav align-items-lg-center">
                            <!-- Search -->
                            <label class="nav-item navbar-text navbar-search-box p-0 active">
                                <i class="feather icon-search navbar-icon align-middle"></i>
                                <span class="navbar-search-input pl-2">
                                    <input type="text" class="form-control navbar-text mx-2" placeholder="Search...">
                                </span>
                            </label>
                        </div>

                        <div class="navbar-nav align-items-lg-center ml-auto">
                            <div class="demo-navbar-notifications nav-item dropdown mr-lg-3">
                                <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                                    <i class="feather icon-bell navbar-icon align-middle"></i>
                                    <span class="badge badge-danger badge-dot indicator"></span>
                                    <span class="d-lg-none align-middle">&nbsp; Notifications</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="bg-primary text-center text-white font-weight-bold p-3">
                                       3 Nouvelles Notifications
                                    </div>
                                    <div class="list-group list-group-flush">
                                    <?php
                                        foreach ($user_notification as $album) {
                                            echo '
                                                <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                                <div class="ui-icon ui-icon-sm feather icon-home bg-secondary border-0 text-white"></div>
                                                <div class="media-body line-height-condenced ml-3">
                                                    <div class="text-dark">'.$album->titre.', '.$album->nom_auteur.'</div>
                                                    <div class="text-light small mt-1">
                                                    '.$album->libelle_notification.'
                                                </div>
                                                <div class="text-light small mt-1">'.$album->delai.'</div>
                                                </div>
                                                </a>
                                            ';
                                        }
                                        

                                        ?>                                        
                                    </div>
                                    <a href="javascript:" class="d-block text-center text-light small p-2 my-1">Voir toutes les notifications</a>
                                </div>
                            </div>

                            <div class="demo-navbar-messages nav-item dropdown mr-lg-3">
                                <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                                    <i class="feather icon-mail navbar-icon align-middle"></i>
                                    <span class="badge badge-success badge-dot indicator"></span>
                                    <span class="d-lg-none align-middle">&nbsp; Messages</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="bg-primary text-center text-white font-weight-bold p-3">
                                       4 Nouveaux Messages
                                    </div>
                                    <div class="list-group list-group-flush">
                                        <?php
                                        foreach ($user_message as $album) {
                                            echo '
                                                <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                                <img src="'.base_url().'assets/assets/img/avatars/6-small.png" class="d-block ui-w-40 rounded-circle" alt>
                                                <div class="media-body ml-3">
                                                <div class="text-dark line-height-condenced">'.$album->libelle_message.'</div>
                                                <div class="text-light small mt-1">
                                                    '.$album->nom_auteur.' &nbsp;·&nbsp; il y a 58 mn
                                                </div>
                                                </div>
                                                </a>
                                            ';
                                        }
                                        ?>
                                    </div>

                                    <a href="javascript:" class="d-block text-center text-light small p-2 my-1">Show all messages</a>
                                </div>
                            </div>

                            <!-- Divider -->
                            <div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>
                            <div class="demo-navbar-user nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                    <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
                                        <img src="<?php echo base_url(); ?>assets/assets/img/avatars/<?php echo $this->session->userdata('photo')?>" alt class="d-block ui-w-30 rounded-circle">
                                        <span class="px-1 mr-lg-2 ml-2 ml-lg-0"><?php echo $this->session->userdata('prenoms')?> <?php echo $this->session->userdata('nom')?></span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="javascript:" class="dropdown-item">
                                        <i class="feather icon-user text-muted"></i> &nbsp; Mon profile</a>
                                    <a href="javascript:" class="dropdown-item">
                                        <i class="feather icon-mail text-muted"></i> &nbsp; Messages</a>
                                    <a href="javascript:" class="dropdown-item">
                                        <i class="feather icon-settings text-muted"></i> &nbsp; Reglage compte</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="<?php echo base_url();?>index.php/welcome/session_expire" class="dropdown-item">
                                        <i class="feather icon-power text-danger"></i> &nbsp; Déconnexion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- [ Layout navbar ( Header ) ] End -->

                <!-- [ Layout content ] Start -->
                <div class="layout-content">

                    <!-- [ content ] Start -->
                    <div class="container-fluid flex-grow-1 container-p-y">
                        <h4 class="font-weight-bold py-3 mb-0"><?php echo $this->session->userdata('libelle_unite')?></h4>
                        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><span class="iconify" data-icon="emojione:hammer-and-wrench" data-inline="false" style="font-size: 25px; font-weight: bold;"></span></a></li>
                                <li class="breadcrumb-item"><a href="#">Aperçu</a></li>
                                <li class="breadcrumb-item active">Données</li>
                            </ol>
                        </div>
                        <div class="row">
                            <!-- 1st row Start -->
                            <div class="col-lg-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="">
                                                        <h2 class="mb-2"> 256 </h2>
                                                        <p class="text-muted mb-0"><span class="badge badge-primary">Bénéfice</span> P. vég.</p>
                                                    </div>
                                                    <div class="lnr lnr-leaf display-4 text-primary"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="">
                                                        <h2 class="mb-2">8451</h2>
                                                        <p class="text-muted mb-0"><span class="badge badge-success">Bénéfice</span> P. ani.</p>
                                                    </div>
                                                    <div class="lnr lnr-chart-bars display-4 text-success"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="">
                                                        <h2 class="mb-2"> 31% <small></small></h2>
                                                        <p class="text-muted mb-0"><span class="badge badge-danger">Bénéfice</span> Succès</p>
                                                    </div>
                                                    <div class="lnr lnr-rocket display-4 text-danger"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="">
                                                        <h3 class="mb-2"><?php echo(number_format(4550000, 0, '.', '.')); ?></h3>
                                                        <p class="text-muted mb-0"><span class="badge badge-warning">Investis.</span> Cantine</p>
                                                    </div>
                                                    <div class="lnr lnr-cart display-4 text-warning"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="card d-flex w-100 mb-4">
                                            <div class="row no-gutters row-bordered row-border-light h-100">
                                                <div class="d-flex col-md-6 align-items-center">
                                                    <div class="card-body">
                                                        <div class="row align-items-center mb-3">
                                                            <div class="col-auto">
                                                                <span class="iconify" data-icon="flat-ui:calculator" data-inline="false" style="font-size:18px;"></span>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-0 text-muted">Totales <span class="text-primary">Dépenses</span></h6>
                                                                <h4 class="mt-3 mb-0">652<i class="ion ion-md-arrow-round-down ml-3 text-danger"></i></h4>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-muted">36% Depuis les 6 derniers mois</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex col-md-6 align-items-center">
                                                    <div class="card-body">
                                                        <div class="row align-items-center mb-3">
                                                            <div class="col-auto">
                                                                <span class="iconify" data-icon="emojione:bank" data-inline="false" style="font-size:18px;"></span>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="mb-0 text-muted">Totales <span class="text-primary">Recettes</span></h6>
                                                                <h4 class="mt-3 mb-0">5963<i class="ion ion-md-arrow-round-up ml-3 text-success"></i></h4>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-muted">36% Depuis les 6 derniers mois</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="card mb-4">
                                    <div class="card-header with-elements">
                                        <h6 class="card-header-title mb-0">Statistiques (dépenses & recettes)</h6>
                                        <div class="card-header-elements ml-auto">
                                            <label class="text m-0">
                                                <span class="text-light text-tiny font-weight-semibold align-middle"></span>
                                                <span class="switcher switcher-primary switcher-sm d-inline-block align-middle mr-0 ml-2"><input type="checkbox" class="switcher-input" checked><span class="switcher-indicator"><span class="switcher-yes"></span><span
                                                            class="switcher-no"></span></span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="statistics-chart-1" style="height:300px"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- 1st row Start -->
                        </div>
                        <div class="row">
                            <!-- 1st row Start -->
                            <div class="col-md-6">
                                <div class="card d-flex w-100 mb-4">
                                    <div class="row no-gutters row-bordered row-border-light h-100">
                                        <div class="d-flex col-sm-6 col-md-4 col-lg-6 align-items-center">
                                            <div class="card-body media align-items-center text-dark">
                                                <i class="lnr lnr-diamond display-4 d-block text-primary"></i>
                                                <span class="media-body d-block ml-3"><span class="text-big mr-1 text-primary">1584789 FCFA</span>
                                                    <br>
                                                    <small class="text-muted">Gagnés ce mois par succès</small>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="d-flex col-sm-6 col-md-4 col-lg-6 align-items-center">
                                            <div class="card-body media align-items-center text-dark">
                                                <i class="lnr lnr-clock display-4 d-block text-warning"></i>
                                                <span class="media-body d-block ml-3"><span class="text-big"><span class="mr-1 text-warning">152</span>Heure de travail</span>
                                                    <br>
                                                    <small class="text-muted">Effectué ce mois-ci</small>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="d-flex col-sm-6 col-md-4 col-lg-6 align-items-center">
                                            <div class="card-body media align-items-center text-dark">
                                                <i class="lnr lnr-hourglass display-4 d-block text-danger"></i>
                                                <span class="media-body d-block ml-3"><span class="text-big"><span class="mr-1 text-danger">54</span> Tâches</span>
                                                    <br>
                                                    <small class="text-muted">Accomplies ce mois-ci</small>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="d-flex col-sm-6 col-md-4 col-lg-6 align-items-center">
                                            <div class="card-body media align-items-center text-dark">
                                                <i class="lnr lnr-license display-4 d-block text-success"></i>
                                                <span class="media-body d-block ml-3"><span class="text-big"><span class="mr-1 text-success">6</span> Productions</span>
                                                    <br>
                                                    <small class="text-muted">Réalisé à succès ce mois-ci</small>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card mb-4 bg-pattern-3 bg-primary text-white">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="lnr lnr-cart display-4"></div>
                                                    <div class="ml-3">
                                                        <div class="small">Ventes succès</div>
                                                        <div class="text-large">2362</div>
                                                    </div>
                                                </div>
                                                <div id="order-chart-1" class="mt-3 chart-shadow" style="height:70px"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card mb-4 bg-pattern-3-dark">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="lnr lnr-gift display-4 text-primary"></div>
                                                    <div class="ml-3">
                                                        <div class="text-muted small">Productions succès</div>
                                                        <div class="text-large">985</div>
                                                    </div>
                                                </div>
                                                <div id="ecom-chart-3" class="mt-3 chart-shadow-primary" style="height:70px"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 1st row Start je suis ici-->
                        </div>
                        <div class="row">
                            <!-- 3rd row Start -->
                            <div class="col-xl-5">
                                <div class="card mb-4">
                                    <div class="card-header with-elements">
                                        <h6 class="card-header-title mb-0">Messages  & Notifications</h6>
                                        <div class="card-header-elements ml-auto">
                                            <button type="button" class="btn btn-default btn-xs md-btn-flat">Afficher plus</button>
                                        </div>
                                    </div>
                                    <div style="height: 310px" id="tasks-inner">
                                        <div class="card-body">
                                            <p class="text-muted small">Aujourd'hui</p>
                                            <div class="custom-controls-stacked">
                                                <?php
                                                    foreach ($user_message as $album) {
                                                        echo '


                                                            <label class="ui-todo-item custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input">
                                                                <span class="custom-control-label">'.$album->libelle_message.'</span>
                                                                <span class="ui-todo-badge badge badge-outline-default font-weight-normal ml-2">58 mins left</span>
                                                            </label>

                                                        ';
                                                    }
                                                    ?>
                                                
                                            </div>
                                        </div>
                                        <hr class="m-0">
                                        <div class="card-body">
                                            <p class="text-muted small">Demain</p>
                                            <div class="custom-controls-stacked">
                                                <label class="ui-todo-item custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-label">Acheter antivirus</span>
                                                </label>
                                                
                                                <label class="ui-todo-item custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-label">Appeler les fournisseurs</span>
                                                </label>

                                                <label class="ui-todo-item custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-label">Acheter antivirus</span>
                                                </label>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Type your task">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-primary">Ajouter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <!-- tableau liste des users affiche_user affiche_user,: -->

                            <div class="col-xl-7">
                                <div class="card mb-4">
                                    <div class="card-header with-elements pb-0">
                                        <h6 class="card-header-title mb-0">Liste des users</h6>
                                        <div class="card-header-elements ml-auto p-0">
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#sale-stats">Infos users</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#latest-sales">Liste des postes des U-Prod</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="nav-tabs-top">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="sale-stats">
                                                <div style="height: 330px" id="tab-table-1">
                                                    <table class="table table-hover card-table">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <label class="custom-control custom-checkbox mb-0">
                                                                        <input type="checkbox" class="custom-control-input">
                                                                        <span class="custom-control-label"><strong>ID-User</strong></span>
                                                                    </label>
                                                                </th>
                                                                <th>Utilisateur</th>
                                                                <th>Description</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                foreach ($affiche_user as $album) {
                                                                    echo '

                                                                        <tr>
                                                                            <td>
                                                                                <label class="custom-control custom-checkbox mb-0">
                                                                                    <input type="checkbox" class="custom-control-input">
                                                                                    <span class="custom-control-label"><strong>'.$album->id.'</strong></span>
                                                                                </label>
                                                                            </td>
                                                                            <td>
                                                                                <div class="media mb-0">
                                                                                    <img src="'.base_url().'assets/assets/img/avatars/'.$album->photo.'" class="d-block ui-w-40 rounded-circle" alt="">
                                                                                    <div class="media-body align-self-center ml-3">
                                                                                        <h6 class="mb-0">'.$album->nom.' '.$album->prenoms.'</h6>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="d-inline-block align-middle">
                                                                                    <h6 class="mb-1">['.$album->id_poste.'] '.$album->libelle_poste.'</h6>
                                                                                    <p class="text-muted mb-0">'.$album->libelle_unite.'</p>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                    ';
                                                                }
                                                                
                                                            ;?>                                                                             
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <a href="javascript:" class="card-footer d-block text-center text-dark small font-weight-semibold">VOIR PLUS</a>
                                            </div>
                                            <div class="tab-pane fade" id="latest-sales">
                                                <div style="height: 330px" id="tab-table-2">
                                                    <table class="table table-hover card-table">
                                                        <thead>
                                                            <tr>
                                                                <th>ID-Poste</th>
                                                                <th>Libelle poste</th>
                                                                <th>U-production</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                foreach ($u_poste as $album) {
                                                                    echo '
                                                                        <tr>
                                                                            <td class="align-middle">
                                                                                <a href="javascript:" class="text-dark">'.$album->id_poste.'</a>
                                                                            </td>
                                                                            <td class="align-middle">'.$album->libelle_poste.'</td>
                                                                            <td class="align-middle">'.$album->unite_production.'</td>
                                                                        </tr>
                                                                    ';
                                                                }
                                                            ;?>
                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <a href="javascript:" class="card-footer d-block text-center text-dark small font-weight-semibold">VOIR PLUS</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 3rd row Start -->
                        </div>
                    
                    </div>
                    <!-- [ content ] End -->

                    <!-- [ Layout footer ] Start -->
                    <nav class="layout-footer footer bg-white">
                        <div class="container-fluid d-flex flex-wrap justify-content-between text-center container-p-x pb-3">
                            <div class="pt-3">
                                <span class="footer-text font-weight-semibold">&copy; <a href="https://bougge-ong.org" class="footer-link" target="_blank">Bouge-SE</a></span>
                            </div>
                            <div>
                                <a href="javascript:" class="footer-link pt-3">Manuel d'utilisation</a>
                                <a href="javascript:" class="footer-link pt-3 ml-4">Rapport d'études</a>
                            </div>
                        </div>
                    </nav>
                    <!-- [ Layout footer ] End -->
                </div>
                <!-- [ Layout content ] Start -->
            </div>
            <!-- [ Layout container ] End -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- [ Layout wrapper] End -->

    <!-- Core scripts -->
    <script src="<?php echo base_url(); ?>assets/assets/js/pace.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/libs/popper/popper.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/js/sidenav.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/js/layout-helpers.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/js/material-ripple.js"></script>

    <!-- Libs -->
    <script src="<?php echo base_url(); ?>assets/assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/libs/eve/eve.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/libs/flot/flot.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/libs/flot/curvedLines.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/libs/chart-am4/core.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/libs/chart-am4/charts.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/libs/chart-am4/animated.js"></script>

    <!-- Demo il faut modifier le fichier dashboards_index.js pour actualiser le graphique-->
    <script src="<?php echo base_url(); ?>assets/assets/js/demo.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/js/analytics.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/js/pages/dashboards_index.js"></script>
</body>

</html>
