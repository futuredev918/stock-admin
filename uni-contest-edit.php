<!DOCTYPE html>
<html class=" ">

<head>
    <!-- 
         * @Package: Ultra Admin - Responsive Theme
         * @Subpackage: Bootstrap
         * @Version: B4-1.3
         * This file is part of Ultra Admin Theme.
        -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta charset="utf-8"/>
    <title>Edit Contest</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon"/><!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">
    <!-- For iPhone -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">
    <!-- For iPhone 4 Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">
    <!-- For iPad -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">
    <!-- For iPad Retina display -->


    <!-- CORE CSS FRAMEWORK - START -->
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
    <!-- CORE CSS FRAMEWORK - END -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <link href="assets/plugins/datepicker/css/datepicker.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->


    <!-- CORE CSS TEMPLATE - START -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
    <!-- CORE CSS TEMPLATE - END -->

</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->

<?php
$api_url = 'https://jarbly.com/stockApp/stockAd/Admin/token';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'API-KEY: dsffgdzaGRyc2VohejrjZyaHZvb2hqcGFgfdgsdf'
));
$excute = curl_exec($ch);
curl_close($ch);

$result = json_decode($excute);
$token = $result->data->token;

$contestId = $_GET['contestId'];


$api_url = "https://jarbly.com/stockApp/stockAd/Admin/contestDetail?contestId=" . $contestId;
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'API-KEY: dsffgdzaGRyc2VohejrjZyaHZvb2hqcGFgfdgsdf',
    'token:' . $token
));


$excute = curl_exec($ch);
curl_close($ch);
$result = json_decode($excute);

$contest = $result->data->contestDetail;
$prizeAmounts = $result->data->prizeAmounts;

$arr = (array)$prizeAmounts;

$amountOne = 0;
$amountTwo = 0;
$amountThree = 0;
$amountFour = 0;
$amountFive = 0;
$amountSix = 0;
$amountSeven = 0;
$amountEight = 0;
$amountNine = 0;
$amountTen = 0;

if (sizeof($arr) != 0) {
    $amountOne = $prizeAmounts->amountOne;
    $amountTwo = $prizeAmounts->amountTwo;
    $amountThree = $prizeAmounts->amountThree;
    $amountFour = $prizeAmounts->amountFour;
    $amountFive = $prizeAmounts->amountFive;
    $amountSix = $prizeAmounts->amountSix;
    $amountSeven = $prizeAmounts->amountSeven;
    $amountEight = $prizeAmounts->amountEight;
    $amountNine = $prizeAmounts->amountNine;
    $amountTen = $prizeAmounts->amountTen;
}
$startTime = explode(" ", $contest->startDateTime);
$startPickingTime = explode(" ", $contest->stockAddStartDateTime);
$endTime = explode(' ', $contest->endDateTime);
$endPickingTime = explode(" ", $contest->stockAddEndDateTime);

?>


<body class=" ">
<!-- START TOPBAR -->
<div class='page-topbar '>
    <div class='logo-area'>

    </div>
    <div class='quick-area'>
        <div class='float-left'>
            <ul class="info-menu left-links list-inline list-unstyled">
                <li class="sidebar-toggle-wrap list-inline-item">
                    <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
                <li class="message-toggle-wrapper list-inline-item">

                    <ul class="dropdown-menu messages animated fadeIn">

                        <li class="list dropdown-item">

                            <ul class="dropdown-menu-list list-unstyled ps-scrollbar">
                                <li class="unread status-available">
                                    <a href="javascript:;">
                                        <div class="user-img">
                                            <img src="data/profile/avatar-1.png" alt="user-image"
                                                 class="rounded-circle img-inline">
                                        </div>
                                        <div>
                                                <span class="name">
                                                    <strong>Clarine Vassar</strong>
                                                    <span class="time small">- 15 mins ago</span>
                                                    <span class="profile-status available float-right"></span>
                                                </span>
                                            <span class="desc small">
                                                    Sometimes it takes a lifetime to win a battle.
                                                </span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" status-away">
                                    <a href="javascript:;">
                                        <div class="user-img">
                                            <img src="data/profile/avatar-2.png" alt="user-image"
                                                 class="rounded-circle img-inline">
                                        </div>
                                        <div>
                                                <span class="name">
                                                    <strong>Brooks Latshaw</strong>
                                                    <span class="time small">- 45 mins ago</span>
                                                    <span class="profile-status away float-right"></span>
                                                </span>
                                            <span class="desc small">
                                                    Sometimes it takes a lifetime to win a battle.
                                                </span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" status-busy">
                                    <a href="javascript:;">
                                        <div class="user-img">
                                            <img src="data/profile/avatar-3.png" alt="user-image"
                                                 class="rounded-circle img-inline">
                                        </div>
                                        <div>
                                                <span class="name">
                                                    <strong>Clementina Brodeur</strong>
                                                    <span class="time small">- 1 hour ago</span>
                                                    <span class="profile-status busy float-right"></span>
                                                </span>
                                            <span class="desc small">
                                                    Sometimes it takes a lifetime to win a battle.
                                                </span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" status-offline">
                                    <a href="javascript:;">
                                        <div class="user-img">
                                            <img src="data/profile/avatar-4.png" alt="user-image"
                                                 class="rounded-circle img-inline">
                                        </div>
                                        <div>
                                                <span class="name">
                                                    <strong>Carri Busey</strong>
                                                    <span class="time small">- 5 hours ago</span>
                                                    <span class="profile-status offline float-right"></span>
                                                </span>
                                            <span class="desc small">
                                                    Sometimes it takes a lifetime to win a battle.
                                                </span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" status-offline">
                                    <a href="javascript:;">
                                        <div class="user-img">
                                            <img src="data/profile/avatar-5.png" alt="user-image"
                                                 class="rounded-circle img-inline">
                                        </div>
                                        <div>
                                                <span class="name">
                                                    <strong>Melissa Dock</strong>
                                                    <span class="time small">- Yesterday</span>
                                                    <span class="profile-status offline float-right"></span>
                                                </span>
                                            <span class="desc small">
                                                    Sometimes it takes a lifetime to win a battle.
                                                </span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" status-available">
                                    <a href="javascript:;">
                                        <div class="user-img">
                                            <img src="data/profile/avatar-1.png" alt="user-image"
                                                 class="rounded-circle img-inline">
                                        </div>
                                        <div>
                                                <span class="name">
                                                    <strong>Verdell Rea</strong>
                                                    <span class="time small">- 14th Mar</span>
                                                    <span class="profile-status available float-right"></span>
                                                </span>
                                            <span class="desc small">
                                                    Sometimes it takes a lifetime to win a battle.
                                                </span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" status-busy">
                                    <a href="javascript:;">
                                        <div class="user-img">
                                            <img src="data/profile/avatar-2.png" alt="user-image"
                                                 class="rounded-circle img-inline">
                                        </div>
                                        <div>
                                                <span class="name">
                                                    <strong>Linette Lheureux</strong>
                                                    <span class="time small">- 16th Mar</span>
                                                    <span class="profile-status busy float-right"></span>
                                                </span>
                                            <span class="desc small">
                                                    Sometimes it takes a lifetime to win a battle.
                                                </span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" status-away">
                                    <a href="javascript:;">
                                        <div class="user-img">
                                            <img src="data/profile/avatar-3.png" alt="user-image"
                                                 class="rounded-circle img-inline">
                                        </div>
                                        <div>
                                                <span class="name">
                                                    <strong>Araceli Boatright</strong>
                                                    <span class="time small">- 16th Mar</span>
                                                    <span class="profile-status away float-right"></span>
                                                </span>
                                            <span class="desc small">
                                                    Sometimes it takes a lifetime to win a battle.
                                                </span>
                                        </div>
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li class="external">
                            <a href="javascript:;">
                                <span>Read All Messages</span>
                            </a>
                        </li>
                    </ul>

                </li>
                <li class="notify-toggle-wrapper list-inline-item">

                    <ul class="dropdown-menu notifications animated fadeIn">
                        <li class="total dropdown-item">
                                <span class="small">
                                    You have <strong>3</strong> new notifications.
                                    <a href="javascript:;" class="float-right">Mark all as Read</a>
                                </span>
                        </li>
                        <li class="list dropdown-item">

                            <ul class="dropdown-menu-list list-unstyled ps-scrollbar">
                                <li class="unread available">
                                    <!-- available: success, warning, info, error -->
                                    <a href="javascript:;">
                                        <div class="notice-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div>
                                                <span class="name">
                                                    <strong>Server needs to reboot</strong>
                                                    <span class="time small">15 mins ago</span>
                                                </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="unread away">
                                    <!-- available: success, warning, info, error -->
                                    <a href="javascript:;">
                                        <div class="notice-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div>
                                                <span class="name">
                                                    <strong>45 new messages</strong>
                                                    <span class="time small">45 mins ago</span>
                                                </span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" busy">
                                    <!-- available: success, warning, info, error -->
                                    <a href="javascript:;">
                                        <div class="notice-icon">
                                            <i class="fa fa-times"></i>
                                        </div>
                                        <div>
                                                <span class="name">
                                                    <strong>Server IP Blocked</strong>
                                                    <span class="time small">1 hour ago</span>
                                                </span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" offline">
                                    <!-- available: success, warning, info, error -->
                                    <a href="javascript:;">
                                        <div class="notice-icon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div>
                                                <span class="name">
                                                    <strong>10 Orders Shipped</strong>
                                                    <span class="time small">5 hours ago</span>
                                                </span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" offline">
                                    <!-- available: success, warning, info, error -->
                                    <a href="javascript:;">
                                        <div class="notice-icon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div>
                                                <span class="name">
                                                    <strong>New Comment on blog</strong>
                                                    <span class="time small">Yesterday</span>
                                                </span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" available">
                                    <!-- available: success, warning, info, error -->
                                    <a href="javascript:;">
                                        <div class="notice-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div>
                                                <span class="name">
                                                    <strong>Great Speed Notify</strong>
                                                    <span class="time small">14th Mar</span>
                                                </span>
                                        </div>
                                    </a>
                                </li>
                                <li class=" busy">
                                    <!-- available: success, warning, info, error -->
                                    <a href="javascript:;">
                                        <div class="notice-icon">
                                            <i class="fa fa-times"></i>
                                        </div>
                                        <div>
                                                <span class="name">
                                                    <strong>Team Meeting at 6PM</strong>
                                                    <span class="time small">16th Mar</span>
                                                </span>
                                        </div>
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li class="external dropdown-item">
                            <a href="javascript:;">
                                <span>Read All Notifications</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="d-sm-none d-none searchform list-inline-item">
                    <div class="input-group">
                            <span class="input-group-addon input-focus">
                                <i class="fa fa-search"></i>
                            </span>
                        <form action="search-page.php" method="post">
                            <input type="text" class="form-control animated fadeIn" placeholder="Search & Enter">
                            <input type='submit' value="">
                        </form>
                    </div>
                </li>
            </ul>
        </div>
        <div class='float-right'>
            <ul class="info-menu right-links list-inline list-unstyled">
                <li class="profile list-inline-item">
                    <a href="#" data-toggle="dropdown" class="toggle">
                        <img src="data/profile/profile-university.png" alt="user-image"
                             class="rounded-circle img-inline">
                        <span>Kim Sonsky & Damien Tuffereau<i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul class="dropdown-menu profile animated fadeIn">
                        <li class="dropdown-item">
                            <a href="#settings">
                                <i class="fa fa-wrench"></i>
                                Settings
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a href="#profile">
                                <i class="fa fa-user"></i>
                                Profile
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a href="#help">
                                <i class="fa fa-info"></i>
                                Help
                            </a>
                        </li>
                        <li class="last dropdown-item">
                            <a href="ui-login.php">
                                <i class="fa fa-lock"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="chat-toggle-wrapper list-inline-item">

                </li>
            </ul>
        </div>
    </div>

</div>
<!-- END TOPBAR -->
<!-- START CONTAINER -->
<div class="page-container row-fluid">

    <!-- SIDEBAR - START -->
    <div class="page-sidebar ">

        <!-- MAIN MENU - START -->
        <div class="page-sidebar-wrapper" id="main-menu-wrapper">

            <!-- USER INFO - START -->
            <div class="profile-info row">

                <div class="profile-image col-lg-4 col-md-4 col-4">
                    <a href="#">
                        <img src="data/profile/profile-university.png" class="img-fluid rounded-circle">
                    </a>
                </div>

                <div class="profile-details col-lg-8 col-md-8 col-8">

                    <h3>
                        <a href="#">Kim Sonsky & Damien Tuffereau</a>

                        <!-- Available statuses: online, idle, busy, away and offline -->
                        <span class="profile-status online"></span>
                    </h3>

                    <p class="profile-title">Owners, Starstruck Date LLC</p>

                </div>

            </div>
            <!-- USER INFO - END -->


            <ul class='wraplist'>


                <li class="">
                    <a href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li class="">
                    <a href="javascript:;">
                        <i class="fa fa-user"></i>
                        <span class="title">Users</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a class="" href="uni-users.php">All Users</a>
                        </li>
                        <li>
                            <a class="" href="uni-user-add.php">Add User</a>
                        </li>
                        <!--                            <li>-->
                        <!--                                <a class="" href="uni-user-edit.php">Edit User</a>-->
                        <!--                            </li>-->
                        <!-- <li>
                            <a class="" href="uni-user-profile.php">User Profile</a>
                        </li> -->
                    </ul>
                </li>
                <!-- <li class="">
                    <a href="javascript:;">
                        <i class="fa fa-bar-chart"></i>
                        <span class="title">Reports</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a class="" href="uni-report-student.php">Users</a>
                        </li>
                        <li>
                            <a class="" href="uni-report-university.php">University</a>
                        </li>
                        <li>
                            <a class="" href="uni-report-professors.php">Professors</a>
                        </li>
                    </ul>
                </li> -->
                <li class="open">
                    <a href="javascript:;">
                        <i class="fa fa-graduation-cap"></i>
                        <span class="title">Contests</span>
                        <span class="arrow open"></span>
                    </a>
                    <ul class="sub-menu" style='display:block;'>
                        <li>
                            <a class="" href="uni-contests.php">All Contests</a>
                        </li>
                        <li>
                            <a class="" href="uni-contest-add.php">Add Contest</a>
                        </li>
                        <!--                            <li>-->
                        <!--                                <a class="active" href="uni-contest-edit.php">Edit Contest</a>-->
                        <!--                            </li>-->
                        <!-- <li>
                            <a class="" href="uni-contest-info.php">Contest Info</a>
                        </li> -->
                    </ul>
                </li>
            </ul>
        </div>
        <!-- MAIN MENU - END -->


        <div class="project-info">
        </div>


    </div>
    <!--  SIDEBAR - END -->
    <!-- START CONTENT -->
    <section id="main-content" class=" ">
        <section class="wrapper main-wrapper" style=''>

            <div class='col-xl-12 col-lg-12 col-md-12 col-12'>
                <div class="page-title">

                    <div class="float-left">
                        <h1 class="title">Edit Contest</h1>
                    </div>

                    <div class="float-right d-none">
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.php"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li>
                                <a href="uni-courses.php">Contest</a>
                            </li>
                            <li class="active">
                                <strong>Edit Contest</strong>
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-xl-12 col-lg-12 col-12 col-md-12">
                <section class="box ">
                    <header class="panel_header">
                        <h2 class="title float-left">Basic Info</h2>
                        <div class="actions panel_actions float-right">
                            <i class="box_toggle fa fa-chevron-down"></i>
                            <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                            <i class="box_close fa fa-times"></i>
                        </div>
                    </header>
                    <div class="content-body">
                        <div class="row">
                            <form action="ui-contest-update.php" method="post">
                                <div class="col-xl-8 col-lg-8 col-md-9 col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="field-1">Contest Name</label>
                                        <span class="desc"></span>
                                        <div class="controls">
                                            <input type="hidden" name="contestId" value="<?php echo $contest->id?>"/>
                                            <input type="text" value="<?php echo $contest->name ?>" class="form-control"
                                                   id="field-1" name="name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="field-5">Start Date</label>
                                                <span class="desc">e.g. "04/03/2015"</span>
                                                <div class="controls">
                                                    <input type="text"
                                                           value="<?php echo $startTime[0] ?>"
                                                           class="form-control datepicker"
                                                           data-format="yyyy-mm-dd">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="field-5">Start Time</label>
                                                <span class="desc"></span>
                                                <div class="controls">
                                                    <input type="time"
                                                           value="<?php echo $startTime[1] ?>"
                                                           class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="field-5">Stock Picking Start Date</label>
                                                <span class="desc">e.g. "04/03/2015"</span>
                                                <div class="controls">
                                                    <input type="text"
                                                           value="<?php echo $startPickingTime[0] ?>"
                                                           class="form-control datepicker"
                                                           data-format="yyyy-mm-dd">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="field-5">Stock Picking Start Time</label>
                                                <span class="desc"></span>
                                                <div class="controls">
                                                    <input type="time"
                                                           value="<?php echo $startPickingTime[1] ?>"
                                                           class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="field-5">End Date</label>
                                                <span class="desc">e.g. "04/03/2015"</span>
                                                <div class="controls">
                                                    <input type="text" value="<?php echo $endTime[0] ?>"
                                                           class="form-control datepicker"
                                                           data-format="yyyy-mm-dd">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="field-5">End Time</label>
                                                <span class="desc"></span>
                                                <div class="controls">
                                                    <input type="time" value="<?php echo $endTime[1] ?>"
                                                           class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="field-5">Stock Picking End Date</label>
                                                <span class="desc">e.g. "04/03/2015"</span>
                                                <div class="controls">
                                                    <input type="text" class="form-control datepicker"
                                                           data-format="yyyy-mm-dd"
                                                           value="<?php echo $endPickingTime[0] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="field-5">Stock Picking End Time</label>
                                                <span class="desc"></span>
                                                <div class="controls">
                                                    <input type="time" value="<?php echo $endPickingTime[1] ?>"
                                                           class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="field-5">Max Number of Contestants </label>
                                        <span class="desc"></span>
                                        <div class="controls">
                                            <input type="number" value="<?php echo $contest->maxContestants ?>"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <!--                                        <fieldset class="form-group">-->
                                    <!--                                            <div class="row">-->
                                    <!--                                                <legend class="col-form-label col-sm-2 pt-0">Weekly Reset </legend>-->
                                    <!--                                                <div class="col-sm-10">-->
                                    <!--                                                    <div class="form-check">-->
                                    <!--                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>-->
                                    <!--                                                        <label class="form-check-label" for="gridRadios1">-->
                                    <!--                                                            Yes-->
                                    <!--                                                        </label>-->
                                    <!--                                                    </div>-->
                                    <!--                                                    <div class="form-check">-->
                                    <!--                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">-->
                                    <!--                                                        <label class="form-check-label" for="gridRadios2">-->
                                    <!--                                                            No-->
                                    <!--                                                        </label>-->
                                    <!--                                                    </div>-->
                                    <!--                                                </div>-->
                                    <!--                                            </div>-->
                                    <!--                                        </fieldset>-->

                                    <div class="form-group">
                                        <label class="form-label" for="field-1">Prize Pot</label>
                                        <span class="desc"></span>
                                        <div class="controls">
                                            <input type="text" value="<?php echo $contest->prizePot ?>"
                                                   class="form-control" id="field-1">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="form-label" for="field-1">Entry Fee</label>
                                        <span class="desc"></span>
                                        <div class="controls">
                                            <input type="text" class="form-control"
                                                   value="<?php echo $contest->entryFees ?>" id="field-1">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="field-1">Banner Ad Prompt</label>
                                        <span class="desc"></span>
                                        <div class="controls">
                                            <input type="text" class="form-control"
                                                   value="<?php echo $contest->bannerText ?>" id="field-1">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="form-label" for="field-6">Contest Rules</label>
                                        <span class="desc">e.g. "Enter any size of text description here"</span>
                                        <div class="controls">
                                                <textarea class="form-control" rows="10"
                                                          id="field-6"><?php echo $contest->rules ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-9 col-12 padding-bottom-30">
                                        <div class="text-left">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            <button type="button" class="btn">Cancel</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>

            <div class="col-xl-12 col-lg-12 col-12 col-md-12">
                <section class="box">
                    <header class="panel_header">
                        <h2 class="title float-left">Contest prizes</h2>
                        <div class="actions panel_actions float-right">
                            <i class="box_toggle fa fa-chevron-down"></i>
                            <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                            <i class="box_close fa fa-times"></i>
                        </div>
                    </header>
                    <div class="content-body">
                        <div class="row">
                            <form action="ui-contest-update-prize.php" method="post">
                                <div class="col-xl-8 col-lg-8 col-md-9 col-12">
                                    <input value="<?php echo $contest->id ?>" type="hidden" name="contestId"/>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">1 st</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputEmail3" name="amountOne" value="<?php echo $amountOne ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">2 nd</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputEmail3" name="amountTwo" value="<?php echo $amountTwo?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">3 rd</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputEmail3"
                                                   name="amountThree" value="<?php echo $amountThree?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">4 th</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputEmail3" name="amountFour" value="<?php echo $amountFour?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">5 th</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputEmail3" name="amountFive" value="<?php echo $amountFive?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">6 th</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputEmail3" name="amountSix" value="<?php echo $amountSix?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">7 th</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputEmail3"
                                                   name="amountSeven" value="<?php echo $amountSeven?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">8 th</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputEmail3"
                                                   name="amountEight" value="<?php echo $amountEight?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">9 th</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputEmail3" name="amountNine" value="<?php echo $amountNine?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">10 th</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputEmail3" name="amountTen" value="<?php echo $amountTen?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-9 col-12 padding-bottom-30">
                                    <div class="text-left">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="button" class="btn">Cancel</button>
                                    </div>
                                </div>

                            </form>
                        </div>


                    </div>
                </section>
            </div>

        </section>
    </section>
    <!-- END CONTENT -->
    <div class="page-chatapi hideit">

        <div class="search-bar">
            <input type="text" placeholder="Search" class="form-control">
        </div>

        <div class="chat-wrapper">
            <h4 class="group-head">Groups</h4>
            <ul class="group-list list-unstyled">
                <li class="group-row">
                    <div class="group-status available">
                        <i class="fa fa-circle"></i>
                    </div>
                    <div class="group-info">
                        <h4><a href="#">Work</a></h4>
                    </div>
                </li>
                <li class="group-row">
                    <div class="group-status away">
                        <i class="fa fa-circle"></i>
                    </div>
                    <div class="group-info">
                        <h4><a href="#">Friends</a></h4>
                    </div>
                </li>

            </ul>


            <h4 class="group-head">Favourites</h4>
            <ul class="contact-list">

                <li class="user-row" id='chat_user_1' data-user-id='1'>
                    <div class="user-img">
                        <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Clarine Vassar</a></h4>
                        <span class="status available" data-status="available"> Available</span>
                    </div>
                    <div class="user-status available">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row" id='chat_user_2' data-user-id='2'>
                    <div class="user-img">
                        <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Brooks Latshaw</a></h4>
                        <span class="status away" data-status="away"> Away</span>
                    </div>
                    <div class="user-status away">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row" id='chat_user_3' data-user-id='3'>
                    <div class="user-img">
                        <a href="#"><img src="data/profile/avatar-3.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Clementina Brodeur</a></h4>
                        <span class="status busy" data-status="busy"> Busy</span>
                    </div>
                    <div class="user-status busy">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>

            </ul>


            <h4 class="group-head">More Contacts</h4>
            <ul class="contact-list">

                <li class="user-row" id='chat_user_4' data-user-id='4'>
                    <div class="user-img">
                        <a href="#"><img src="data/profile/avatar-4.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Carri Busey</a></h4>
                        <span class="status offline" data-status="offline"> Offline</span>
                    </div>
                    <div class="user-status offline">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row" id='chat_user_5' data-user-id='5'>
                    <div class="user-img">
                        <a href="#"><img src="data/profile/avatar-5.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Melissa Dock</a></h4>
                        <span class="status offline" data-status="offline"> Offline</span>
                    </div>
                    <div class="user-status offline">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row" id='chat_user_6' data-user-id='6'>
                    <div class="user-img">
                        <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Verdell Rea</a></h4>
                        <span class="status available" data-status="available"> Available</span>
                    </div>
                    <div class="user-status available">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row" id='chat_user_7' data-user-id='7'>
                    <div class="user-img">
                        <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Linette Lheureux</a></h4>
                        <span class="status busy" data-status="busy"> Busy</span>
                    </div>
                    <div class="user-status busy">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row" id='chat_user_8' data-user-id='8'>
                    <div class="user-img">
                        <a href="#"><img src="data/profile/avatar-3.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Araceli Boatright</a></h4>
                        <span class="status away" data-status="away"> Away</span>
                    </div>
                    <div class="user-status away">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row" id='chat_user_9' data-user-id='9'>
                    <div class="user-img">
                        <a href="#"><img src="data/profile/avatar-4.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Clay Peskin</a></h4>
                        <span class="status busy" data-status="busy"> Busy</span>
                    </div>
                    <div class="user-status busy">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row" id='chat_user_10' data-user-id='10'>
                    <div class="user-img">
                        <a href="#"><img src="data/profile/avatar-5.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Loni Tindall</a></h4>
                        <span class="status away" data-status="away"> Away</span>
                    </div>
                    <div class="user-status away">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row" id='chat_user_11' data-user-id='11'>
                    <div class="user-img">
                        <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Tanisha Kimbro</a></h4>
                        <span class="status idle" data-status="idle"> Idle</span>
                    </div>
                    <div class="user-status idle">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>
                <li class="user-row" id='chat_user_12' data-user-id='12'>
                    <div class="user-img">
                        <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                    </div>
                    <div class="user-info">
                        <h4><a href="#">Jovita Tisdale</a></h4>
                        <span class="status idle" data-status="idle"> Idle</span>
                    </div>
                    <div class="user-status idle">
                        <i class="fa fa-circle"></i>
                    </div>
                </li>

            </ul>
        </div>

    </div>


    <div class="chatapi-windows ">


    </div>
</div>
<!-- END CONTAINER -->
<!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


<!-- CORE JS FRAMEWORK - START -->
<script src="assets/js/jquery-3.4.1.min.js" type="text/javascript"></script>
<script src="assets/js/popper.min.js" type="text/javascript"></script>
<!-- <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script>  -->
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>

<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script>
<script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>
<!-- CORE JS FRAMEWORK - END -->


<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="assets/plugins/datepicker/js/datepicker.js" type="text/javascript"></script>
<script src="assets/plugins/autosize/autosize.min.js" type="text/javascript"></script>
<script src="assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->


<!-- CORE TEMPLATE JS - START -->
<script src="assets/js/scripts.js" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS - END -->

<!-- Sidebar Graph - START -->
<script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="assets/js/chart-sparkline.js" type="text/javascript"></script>
<!-- Sidebar Graph - END -->


<!-- General section box modal start -->
<div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label"
     aria-hidden="true">
    <div class="modal-dialog animated bounceInDown">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Section Settings</h4>
            </div>
            <div class="modal-body">

                Body goes here...

            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                <button class="btn btn-success" type="button">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- modal end -->
</body>

</html>