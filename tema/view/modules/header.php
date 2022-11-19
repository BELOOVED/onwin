<?php
  $query = $db -> query("SELECT * from payments WHERE DAY(time) = DAY(CURDATE()) Limit 10");
  $querys = $db -> query("SELECT * from users WHERE DAY(time) = DAY(CURDATE()) Limit 10");
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
</head>
<?php include 'sidebar.php' ?>

<div id="right-panel" class="right-panel">
<header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <?php
                        
                        $total = $db -> query("SELECT count(id) as num from payments WHERE DAY(time) = DAY(CURDATE())")->fetch_assoc()[num];
         ?>
                        
                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger"><?=$total?></span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red"><?=$total?> Yeni Ödemeniz Var </p>
                                <?php  while ($res = $query->fetch_assoc()) { ?>
                                <a href="payments" class="dropdown-item media" href="#">
                                    <i style="color: green;" class="fa fa-check"></i>
                                    <p>Kullanıcı : <?=$res['user']?> || Tutar:<?=$res['amount']?></p>
                                </a>
                                <? }?>
                            </div>
                        </div>


                        
<?php
                        
                        $totals = $db -> query("SELECT count(id) as num from users WHERE DAY(time) = DAY(CURDATE())")->fetch_assoc()[num];
          ?>
                        
                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user"></i>
                                <span class="count bg-info"><?=$totals?></span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red"><?=$totals?> Yeni Kullanıcı Var </p>
                                <?php while ($r = $querys->fetch_assoc()) { ?>
                                <a href="users" class="dropdown-item media" href="#">
                                    <i style="color: green;" class="fa fa-check"></i>
                                    <p>Kullanıcı : <?=$r['login']?> || Bakiyesi:<?=$r['originalbalance']?></p>
                                </a>
                                <? }?>
                            </div>
                        </div>

                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="general-settings"><i class="fa fa- user"></i>Genel Ayarlar</a>

                            <a class="nav-link" href="account-settings"><i class="fa fa- user"></i>Hesap Ayarları</a>

                            <a class="nav-link" href="payments"><i class="fa fa -cog"></i>Ödemeler</a>

                            <a class="nav-link" onclick="logOut()" href="javascript:;"><i class="fa fa-power -off"></i>Çıkış</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
    </div>