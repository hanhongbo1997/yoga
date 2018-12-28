<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>后台管理</title>
        <!-- Mobile specific metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Force IE9 to render in normal mode -->
        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
        <meta name="author" content="SuggeElson" />
        <meta name="description" content=""
        />
        <meta name="keywords" content=""
        />
        <meta name="application-name" content="sprFlat admin template" />
        <!-- Import google fonts - Heading first/ text second -->
        <link rel='stylesheet' type='text/css' 
        <!--[if lt IE 9]>

        <![endif]-->
        <!-- Css files -->
        <!-- Icons -->
        <link href="/admin/css/icons.css" rel="stylesheet" />
        <link href="/admin/css/slidebar.css" rel="stylesheet" />
        <!-- jQueryUI -->
        <link href="/admin/css/sprflat-theme/jquery.ui.all.css" rel="stylesheet" />
        <!-- Bootstrap stylesheets (included template modifications) -->
        <link href="/admin/css/bootstrap.css" rel="stylesheet" />
        <!-- Plugins stylesheets (all plugin custom css) -->
        <link href="/admin/css/plugins.css" rel="stylesheet" />
        <!-- Main stylesheets (template main css file) -->
        <link href="/admin/css/main.css" rel="stylesheet" />
        <!-- Custom stylesheets ( Put your own changes here ) -->
        <link href="/admin/css/custom.css" rel="stylesheet" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/admin/img/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/admin/img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/admin/img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/admin/img/ico/apple-touch-icon-57-precomposed.png">
        <link rel="icon" href="/admin/img/ico/favicon.ico" type="image/png">
        <!-- Windows8 touch icon ( http://www.buildmypinnedsite.com/ )-->
        <meta name="msapplication-TileColor" content="#3399cc" />
    </head>
    <body>
        <!-- Start #header -->
        <div id="header">
            <div class="container-fluid">
                <div class="navbar">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.html">
                            <i class="im-windows8 text-logo-element animated bounceIn"></i><span class="text-logo">spr</span><span class="text-slogan">flat</span> 
                        </a>
                    </div>
                    <nav class="top-nav" role="navigation">
                        <ul class="nav navbar-nav pull-left">
                            <li id="toggle-sidebar-li">
                                <a href="#" id="toggle-sidebar"><i class="en-arrow-left2"></i>
                        </a>
                            </li>
                            <li>
                                <a href="#" class="full-screen"><i class="fa-fullscreen"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown"><i class="ec-cog"></i><span class="notification">10</span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#"><i class="en-database"></i> Database <span class="notification">3</span></a>
                                    </li>
                                    <li><a href="#"><i class="st-cube"></i> Packages <span class="notification blue">17</span></a>
                                    </li>
                                    <li><a href="#"><i class="st-health"></i> Disconnects <span class="notification yellow">1</span></a>
                                    </li>
                                    <li><a href="#"><i class="im-images"></i> Images <span class="notification teal">320</span></a>
                                    </li>
                                    <li><a href="#"><i class="st-users"></i> Users <span class="notification orange">2k</span></a>
                                    </li>
                                    <li><a href="#"><i class="st-meter"></i> Traffic <span class="notification magenta">2tb</span></a>
                                    </li>
                                    <li><a href="#"><i class="im-coin"></i> Finances <span class="notification pink">+3k</span></a>
                                    </li>
                                    <li><a href="#"><i class="st-folder"></i> Directories <span class="notification green">17</span></a>
                                    </li>
                                    <li><a href="#"><i class="st-bag"></i> Orders <span class="notification purple">12</span></a>
                                    </li>
                                    <li><a href="#"><i class="ec-contract"></i> Contracts <span class="notification dark">7</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown"><i class="ec-mail"></i><span class="notification">4</span></a>
                                <ul class="dropdown-menu email" role="menu">
                                    <li class="mail-head">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <a href="email-inbox.html"><i class="ec-archive"></i></a>
                                            </div>
                                            <span>Inbox</span> 
                                            <div class="pull-right">
                                                <a href="email-inbox.html"><i class="st-pencil"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="search-email">
                                        <form>
                                            <input type="text" name="search" placeholder="Search for emails">
                                            <button type="submit"><i class="ec-search"></i>
                                            </button>
                                        </form>
                                    </li>
                                    <li class="mail-list clearfix">
                                        <a href="#">
                                            <img src="/admin/img/avatars/128.jpg" class="mail-avatar pull-left" alt="avatar">
                                            <p class="name">
                                                <span class="status"><i class="en-dot"></i></span> Jason Rivera
                                                <span class="notification">2</span>
                                                <span class="time">12:30 am</span>
                                            </p>
                                            <p class="msg">
                                                I contact you regarding my account please can you set up my pass ...
                                            </p>
                                        </a>
                                    </li>
                                    <li class="mail-list clearfix">
                                        <a href="#">
                                            <img src="/admin/img/avatars/129.jpg" class="mail-avatar pull-left" alt="avatar">
                                            <p class="name">
                                                <span class="status off"><i class="en-dot"></i></span> Steeve Mclark
                                                <span class="notification">6</span>
                                                <span class="time">10:26 am</span>
                                            </p>
                                            <p class="msg">
                                                Good job dude awesome work here, please add theese features ...
                                            </p>
                                        </a>
                                    </li>
                                    <li class="mail-list clearfix">
                                        <a href="#">
                                            <img src="/admin/img/avatars/130.jpg" class="mail-avatar pull-left" alt="avatar">
                                            <p class="name">
                                                <span class="status off"><i class="en-dot"></i></span> Fellix Jones
                                                <span class="notification">1</span>
                                                <span class="time">7:15 am</span>
                                            </p>
                                            <p class="msg">
                                                I have some issues when try to reach my product page can you ...
                                            </p>
                                        </a>
                                    </li>
                                    <li class="mail-list clearfix">
                                        <a href="#">
                                            <img src="/admin/img/avatars/131.jpg" class="mail-avatar pull-left" alt="avatar">
                                            <p class="name">
                                                <span class="status"><i class="en-dot"></i></span> Tina Dowsen
                                                <span class="notification">5</span>
                                                <span class="time">03:46 am</span>
                                            </p>
                                            <p class="msg">
                                                Hello Sugge, i want to apply for your referal program , please ...
                                            </p>
                                        </a>
                                    </li>
                                    <li class="mail-more">
                                        <a href="email-inbox.html">View all <i class="en-arrow-right7"></i></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav pull-right">
                            <li>
                                <a href="#" id="toggle-header-area"><i class="ec-download"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown"><i class="br-alarm"></i> <span class="notification">5</span></a>
                                <ul class="dropdown-menu notification-menu right" role="menu">
                                    <li class="clearfix">
                                        <i class="ec-chat"></i> 
                                        <a href="#" class="notification-user"> Ric Jones </a> 
                                        <span class="notification-action"> replied to your </span> 
                                        <a href="#" class="notification-link"> comment</a>
                                    </li>
                                    <li class="clearfix">
                                        <i class="st-pencil"></i> 
                                        <a href="#" class="notification-user"> SuggeElson </a> 
                                        <span class="notification-action"> just write a </span> 
                                        <a href="#" class="notification-link"> post</a>
                                    </li>
                                    <li class="clearfix">
                                        <i class="ec-trashcan"></i> 
                                        <a href="#" class="notification-user"> SuperAdmin </a> 
                                        <span class="notification-action"> just remove </span> 
                                        <a href="#" class="notification-link"> 12 files</a>
                                    </li>
                                    <li class="clearfix">
                                        <i class="st-paperclip"></i> 
                                        <a href="#" class="notification-user"> C. Wiilde </a> 
                                        <span class="notification-action"> attach </span> 
                                        <a href="#" class="notification-link"> 3 files</a>
                                    </li>
                                    <li class="clearfix">
                                        <i class="st-support"></i> 
                                        <a href="#" class="notification-user"> John Simpson </a> 
                                        <span class="notification-action"> add support </span> 
                                        <a href="#" class="notification-link"> ticket</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown">
                                    <img class="user-avatar" src="/admin/img/avatars/48.jpg" alt="SuggeElson">管理员</a>
                                <ul class="dropdown-menu right" role="menu">
                                    <li><a href="profile.html"><i class="st-user"></i> Profile</a>
                                    </li>
                                    <li><a href="file.html"><i class="st-cloud"></i> Files</a>
                                    </li>
                                    <li><a href="#"><i class="st-settings"></i> Settings</a>
                                    </li>
                                    <li><a href="login.html"><i class="im-exit"></i> Logout</a>
                                    </li>
                                </ul>
                            </li>
                            <li id="toggle-right-sidebar-li"><a href="#" id="toggle-right-sidebar"><i class="ec-users"></i> <span class="notification">3</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Start #header-area -->
                <div id="header-area" class="fadeInDown">
                    <div class="header-area-inner">
                        <ul class="list-unstyled list-inline">
                            <li>
                                <div class="shortcut-button">
                                    <a href="#">
                                        <i class="im-pie"></i>
                                        <span>Earning Stats</span>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="shortcut-button">
                                    <a href="#">
                                        <i class="ec-images color-dark"></i>
                                        <span>Gallery</span>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="shortcut-button">
                                    <a href="#">
                                        <i class="en-light-bulb color-orange"></i>
                                        <span>Fresh ideas</span>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="shortcut-button">
                                    <a href="#">
                                        <i class="ec-link color-blue"></i>
                                        <span>Links</span>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="shortcut-button">
                                    <a href="#">
                                        <i class="ec-support color-red"></i>
                                        <span>Support</span>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="shortcut-button">
                                    <a href="#">
                                        <i class="st-lock color-teal"></i>
                                        <span>Lock area</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End #header-area -->
            </div>
            <!-- Start .header-inner -->
        </div>
        <!-- End #header -->
        <!-- Start #sidebar -->
        <div id="sidebar">
            <!-- Start .sidebar-inner -->
            <div class="sidebar-inner">
                <!-- Start #sideNav -->
                <ul id="sideNav" class="nav nav-pills nav-stacked">
                    <li class="top-search">
                        <form>
                            <input type="text" name="search" placeholder="关键字 ...">
                            <button type="submit"><i class="ec-search s20"></i>
                            </button>
                        </form>
                   

                    <li>
                        <a href="#"> 用户管理 <i class="ec-users"></i></a>
                        <ul class="nav sub">
                            <li><a href="/admin/users"><i class="ec-list"></i> 用户列表</a>
                            </li>
                            <li><a href="/admin/users/create"><i class="im-plus"></i> 用户添加</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"> 视频管理 <i class="ec-videos"></i></a>
                        <ul class="nav sub">
                            <li><a href="/admin/videos"><i class="ec-list"></i> 视频列表</a>
                            </li>
                            <li><a href="/admin/videos/create"><i class="im-plus"></i> 视频添加</a>
                            </li>
                            <li><a href="form-validation.html"><i class="ec-pencil2"></i> 视频评论</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"> 视频分类管理 <i class="im-paragraph-justify"></i></a>
                        <ul class="nav sub">
                            <li><a href="forms.html"><i class="ec-pencil2"></i> 视频分类列表</a>
                            </li>
                            <li><a href="form-validation.html"><i class="im-checkbox-checked"></i> 视频分类添加</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"> 课程管理 <i class="ec-bookmark"></i></a>
                        <ul class="nav sub">
                            <li><a href="forms.html"><i class="im-list"></i> 课程列表</a>
                            </li>
                            <li><a href="form-validation.html"><i class="im-plus"></i> 课程添加</a>
                            </li>
                            <li><a href="form-validation.html"><i class="ec-pencil2"></i> 课程评论</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"> 课程分类管理 <i class="im-paragraph-justify"></i></a>
                        <ul class="nav sub">
                            <li><a href="forms.html"><i class="ec-pencil2"></i> 课程分类列表</a>
                            </li>
                            <li><a href="form-validation.html"><i class="im-checkbox-checked"></i> 课程分类添加</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"> 瑜伽馆管理 <i class="im-office"></i></a>
                        <ul class="nav sub">
                            <li><a href="forms.html"><i class="im-list"></i> 瑜伽馆列表</a>
                            </li>
                            <li><a href="form-validation.html"><i class="im-plus"></i> 瑜伽馆添加</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"> 名师管理 <i class="fa-user"></i></a>
                        <ul class="nav sub">
                            <li><a href="forms.html"><i class="im-list"></i> 名师列表</a>
                            </li>
                            <li><a href="form-validation.html"><i class="im-plus"></i> 名师添加</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"> 订单管理 <i class="im-file"></i></a>
                    </li>

                    <li>
                        <a href="#"> 资迅管理 <i class="im-earth"></i></a>
                        <ul class="nav sub">
                            <li><a href="forms.html"><i class="im-list"></i> 资迅列表</a>
                            </li>
                            <li><a href="form-validation.html"><i class="im-plus"></i> 资迅添加</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"> 轮播图管理 <i class="im-paragraph-justify"></i></a>
                        <ul class="nav sub">
                            <li><a href="/admin/slideshow"><i class="ec-pencil2"></i> 轮播图列表</a>
                            </li>
                            <li><a href="/admin/slideshow/create"><i class="im-checkbox-checked"></i> 轮播图添加</a>
                            </li>
                        </ul>
                    </li>

                <!-- End #sideNav -->
            </div>
            <!-- End .sidebar-inner -->
        </div>
        <!-- End #sidebar -->
        <!-- Start #right-sidebar -->
        <div id="right-sidebar" class="hide-sidebar">
            <!-- Start .sidebar-inner -->
            <div class="sidebar-inner">
                <div class="sidebar-panel mt0">
                    <div class="sidebar-panel-content fullwidth pt0">
                        <div class="chat-user-list">
                            <form class="form-horizontal chat-search" role="form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search for user...">
                                    <button type="submit"><i class="ec-search s16"></i>
                                    </button>
                                </div>
                                <!-- End .form-group  -->
                            </form>
                            <ul class="chat-ui bsAccordion">
                                <li>
                                    <a href="#">Favorites <span class="notification teal">4</span><i class="en-arrow-down5"></i></a>
                                    <ul class="in">
                                        <li>
                                            <a href="#" class="chat-name">
                                                <img class="chat-avatar" src="/admin/img/avatars/49.jpg" alt="@chadengle">Chad Engle
                                                <span class="has-message"><i class="im-pencil"></i></span>
                                            </a>
                                            <span class="status online"><i class="en-dot"></i></span>
                                        </li>
                                        <li>
                                            <a href="#" class="chat-name">
                                                <img class="chat-avatar" src="/admin/img/avatars/54.jpg" alt="@alagoon">Anthony Lagoon</a>
                                            <span class="status offline"><i class="en-dot"></i></span>
                                        </li>
                                        <li>
                                            <a href="#" class="chat-name">
                                                <img class="chat-avatar" src="/admin/img/avatars/52.jpg" alt="@koridhandy">Kory Handy</a>
                                            <span class="status"><i class="en-dot"></i></span>
                                        </li>
                                        <li>
                                            <a href="#" class="chat-name">
                                                <img class="chat-avatar" src="/admin/img/avatars/50.jpg" alt="@divya">Divia Manyan</a>
                                            <span class="status"><i class="en-dot"></i></span>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Online <span class="notification green">3</span><i class="en-arrow-down5"></i></a>
                                    <ul class="in">
                                        <li>
                                            <a href="#" class="chat-name">
                                                <img class="chat-avatar" src="/admin/img/avatars/51.jpg" alt="@kolage">Eric Hofman</a>
                                            <span class="status online"><i class="en-dot"></i></span>
                                        </li>
                                        <li>
                                            <a href="#" class="chat-name">
                                                <img class="chat-avatar" src="/admin/img/avatars/55.jpg" alt="@mikebeecham">Mike Beecham</a>
                                            <span class="status online"><i class="en-dot"></i></span>
                                        </li>
                                        <li>
                                            <a href="#" class="chat-name">
                                                <img class="chat-avatar" src="/admin/img/avatars/53.jpg" alt="@derekebradley">Darek Bradly</a>
                                            <span class="status online"><i class="en-dot"></i></span>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Offline <span class="notification red">5</span><i class="en-arrow-down5"></i></a>
                                    <ul>
                                        <li>
                                            <a href="#" class="chat-name">
                                                <img class="chat-avatar" src="/admin/img/avatars/56.jpg" alt="@laurengray">Lauren Grey</a>
                                            <span class="status offline"><i class="en-dot"></i></span>
                                        </li>
                                        <li>
                                            <a href="#" class="chat-name">
                                                <img class="chat-avatar" src="/admin/img/avatars/49.jpg" alt="@chadengle">Chad Engle</a>
                                            <span class="status offline"><i class="en-dot"></i></span>
                                        </li>
                                        <li>
                                            <a href="#" class="chat-name">
                                                <img class="chat-avatar" src="/admin/img/avatars/58.jpg" alt="@frankiefreesbie">Frankie Freesibie</a>
                                            <span class="status offline"><i class="en-dot"></i></span>
                                        </li>
                                        <li>
                                            <a href="#" class="chat-name">
                                                <img class="chat-avatar" src="/admin/img/avatars/57.jpg" alt="@joannefournier">Joane Fornier</a>
                                            <span class="status offline"><i class="en-dot"></i></span>
                                        </li>
                                        <li>
                                            <a href="#" class="chat-name">
                                                <img class="chat-avatar" src="/admin/img/avatars/59.jpg" alt="@aiiaiiaii">Alia Alien</a>
                                            <span class="status offline"><i class="en-dot"></i></span>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="chat-box">
                            <h5>Chad Engle</h5>
                            <a id="close-user-chat" href="#" class="btn btn-xs btn-primary"><i class="en-arrow-left4"></i></a>
                            <ul class="chat-ui chat-messages">
                                <li class="chat-user">
                                    <p class="avatar">
                                        <img src="/admin/img/avatars/49.jpg" alt="@chadengle">
                                    </p>
                                    <p class="chat-name">Chad Engle <span class="chat-time">15 seconds ago</span>
                                    </p>
                                    <span class="status online"><i class="en-dot"></i></span>
                                    <p class="chat-txt">Hello Sugge check out the last order.</p>
                                </li>
                                <li class="chat-me">
                                    <p class="avatar">
                                        <img src="/admin/img/avatars/48.jpg" alt="SuggeElson">
                                    </p>
                                    <p class="chat-name">管理员 <span class="chat-time">10 seconds ago</span>
                                    </p>
                                    <span class="status online"><i class="en-dot"></i></span>
                                    <p class="chat-txt">Ok i will check it out.</p>
                                </li>
                                <li class="chat-user">
                                    <p class="avatar">
                                        <img src="/admin/img/avatars/49.jpg" alt="@chadengle">
                                    </p>
                                    <p class="chat-name">Chad Engle <span class="chat-time">now</span>
                                    </p>
                                    <span class="status online"><i class="en-dot"></i></span>
                                    <p class="chat-txt">Thank you, have a nice day</p>
                                </li>
                            </ul>
                            <div class="chat-write">
                                <form action="#" class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <textarea name="sendmsg" id="sendMsg" class="form-control elastic" rows="1"></textarea>
                                        <a role="button" class="btn" id="attach_photo_btn">
                                            <i class="fa-picture s20"></i> 
                                        </a>
                                        <input type="file" name="attach_photo" id="attach_photo">
                                    </div>
                                    <!-- End .form-group  -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .sidebar-inner -->
        </div>
        <!-- End #right-sidebar -->
        <!-- Start #content -->
        <div id="content">
            <!-- Start .content-wrapper -->
            <div class="content-wrapper">
                <div class="row">
                    <!-- Start .row -->
                    <!-- Start .page-header -->
                    <div class="col-lg-12 heading">
                        <h1 class="page-header"><i class="im-screen"></i> 网站后台</h1>
                        <!-- Start .bredcrumb -->
                        <ul id="crumb" class="breadcrumb">
                        </ul>
                        <!-- End .breadcrumb -->
                        <!-- Start .option-buttons -->
                        <div class="option-buttons">
                            <div class="btn-toolbar" role="toolbar">
                                <div class="btn-group">
                                    <a id="clear-localstorage" class="btn tip" title="Reset panels position">
                                        <i class="ec-refresh color-red s24"></i>
                                    </a>
                                </div>
                                <div class="btn-group dropdown">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown" id="dropdownMenu1"><i class="br-grid s24"></i></a>
                                    <div class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">
                                        <div class="option-dropdown">
                                            <div class="shortcut-button">
                                                <a href="#">
                                                    <i class="ec-users"></i>
                                                    <span>韩宏波</span>
                                                </a>
                                            </div>
                                            <div class="shortcut-button">
                                                <a href="#">
                                                    <i class="ec-images color-dark"></i>
                                                    <span>Gallery</span>
                                                </a>
                                            </div>
                                            <div class="shortcut-button">
                                                <a href="#">
                                                    <i class="en-light-bulb color-orange"></i>
                                                    <span>Fresh ideas</span>
                                                </a>
                                            </div>
                                            <div class="shortcut-button">
                                                <a href="#">
                                                    <i class="ec-link color-blue"></i>
                                                    <span>Links</span>
                                                </a>
                                            </div>
                                            <div class="shortcut-button">
                                                <a href="#">
                                                    <i class="ec-support color-red"></i>
                                                    <span>Support</span>
                                                </a>
                                            </div>
                                            <div class="shortcut-button">
                                                <a href="#">
                                                    <i class="st-lock color-teal"></i>
                                                    <span>Lock area</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-group dropdown">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown" id="dropdownMenu2"><i class="ec-pencil s24"></i></a> 
                                    <div class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu2">
                                        <div class="option-dropdown">
                                            <div class="row">
                                                <p class="col-lg-12">Quick post</p>
                                                <form class="form-horizontal" role="form">
                                                    <div class="form-group">
                                                        <div class="col-lg-12">
                                                            <input type="text" class="form-control" placeholder="Enter title">
                                                        </div>
                                                    </div>
                                                    <!-- End .form-group  -->
                                                    <div class="form-group">
                                                        <div class="col-lg-12">
                                                            <textarea class="form-control wysiwyg" placeholder="Enter text"></textarea>
                                                        </div>
                                                    </div>
                                                    <!-- End .form-group  -->
                                                    <div class="form-group">
                                                        <div class="col-lg-12">
                                                            <input type="text" class="form-control tags1" placeholder="Enter tags">
                                                        </div>
                                                    </div>
                                                    <!-- End .form-group  -->
                                                    <div class="form-group">
                                                        <div class="col-lg-12">
                                                            <button class="btn btn-default btn-xs">Save Draft</button>
                                                            <button class="btn btn-success btn-xs pull-right">Publish</button>
                                                        </div>
                                                    </div>
                                                    <!-- End .form-group  -->
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown" id="dropdownMenu3"><i class="ec-help s24"></i></a>
                                    <div class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu3">
                                        <div class="option-dropdown">
                                            <p>First time visitor ? <a href="#" id="app-tour" class="btn btn-success ml15">Take app tour</a> 
                                            </p>
                                            <hr>
                                            <p>Or check the <a href="#" class="btn btn-danger ml15">FAQ</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .option-buttons -->
                    </div>
                    <!-- End .page-header -->
                </div>
                <!-- End .row -->
                @section('content')
                   
            
                @show
                </div>
            <!-- End .content-wrapper -->
            <div class="clearfix"></div>
        </div>
        <!-- End #content -->
        <!-- Javascripts -->
        <!-- Load pace first -->
        <script src="/admin/plugins/core/pace/pace.min.js"></script>
        <!-- Important javascript libs(put in all pages) -->
        <script src="/admin/js/jquery-1.8.3.min.js"></script>
        <script>
        window.jQuery || document.write('<script src="/admin/js/libs/jquery-2.1.1.min.js">\x3C/script>')
        </script>
        <script src="/admin/js/jquery-ui.js"></script>
        <script>
        window.jQuery || document.write('<script src="/admin/js/libs/jquery-ui-1.10.4.min.js">\x3C/script>')
        </script>
        <!--[if lt IE 9]>
        <script type="text/javascript" src="/admin/js/libs/excanvas.min.js"></script>
        <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script type="text/javascript" src="/admin/js/libs/respond.min.js"></script>
        <![endif]-->
        <!-- Bootstrap plugins -->
        <script src="/admin/js/bootstrap/bootstrap.js"></script>
        <!-- Core plugins ( not remove ever) -->
        <!-- Handle responsive view functions -->
        <script src="/admin/js/jRespond.min.js"></script>
        <!-- Custom scroll for sidebars,tables and etc. -->
        <script src="/admin/plugins/core/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="/admin/plugins/core/slimscroll/jquery.slimscroll.horizontal.min.js"></script>
        <!-- Resize text area in most pages -->
        <script src="/admin/plugins/forms/autosize/jquery.autosize.js"></script>
        <!-- Proivde quick search for many widgets -->
        <script src="/admin/plugins/core/quicksearch/jquery.quicksearch.js"></script>
        <!-- Bootbox confirm dialog for reset postion on panels -->
        <script src="/admin/plugins/ui/bootbox/bootbox.js"></script>
        <!-- Other plugins ( load only nessesary plugins for every page) -->
        <script src="/admin/plugins/charts/flot/jquery.flot.js"></script>
        <script src="/admin/plugins/charts/flot/jquery.flot.pie.js"></script>
        <script src="/admin/plugins/charts/flot/jquery.flot.resize.js"></script>
        <script src="/admin/plugins/charts/flot/jquery.flot.time.js"></script>
        <script src="/admin/plugins/charts/flot/jquery.flot.growraf.js"></script>
        <script src="/admin/plugins/charts/flot/jquery.flot.categories.js"></script>
        <script src="/admin/plugins/charts/flot/jquery.flot.stack.js"></script>
        <script src="/admin/plugins/charts/flot/jquery.flot.tooltip.min.js"></script>
        <script src="/admin/plugins/charts/flot/date.js"></script>
        <script src="/admin/plugins/charts/sparklines/jquery.sparkline.js"></script>
        <script src="/admin/plugins/charts/pie-chart/jquery.easy-pie-chart.js"></script>
        <script src="/admin/plugins/forms/icheck/jquery.icheck.js"></script>
        <script src="/admin/plugins/forms/tags/jquery.tagsinput.min.js"></script>
        <script src="/admin/plugins/forms/tinymce/tinymce.min.js"></script>
        <script src="/admin/plugins/misc/highlight/highlight.pack.js"></script>
        <script src="/admin/plugins/misc/countTo/jquery.countTo.js"></script>
        <script src="/admin/plugins/ui/weather/skyicons.js"></script>
        <script src="/admin/plugins/ui/notify/jquery.gritter.js"></script>
        <script src="/admin/plugins/ui/calendar/fullcalendar.js"></script>
        <script src="/admin/js/jquery.sprFlat.js"></script>
        <script src="/admin/js/app.js"></script>
        <script src="/admin/js/pages/dashboard.js"></script>
    </body>
</html>