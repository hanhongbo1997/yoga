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
        <meta name="csrf-token" content="{{ csrf_token() }}"><!--需要有csrf token-->
        <script src="{{ URL::asset('js/spark-md5.min.js') }}"></script><!--需要引入spark-md5.min.js-->
        <script src="//cdn.bootcss.com/jquery/2.2.3/jquery.min.js"></script><!--需要引入jquery.min.js-->
        <script src="{{ URL::asset('js/aetherupload.js') }}"></script><!--需要引入aetherupload.js-->
        <!-- Windows8 touch icon ( http://www.buildmypinnedsite.com/ )-->
        <meta name="msapplication-TileColor" content="#3399cc" />

    </head>
    <body>
        <!-- Start #header -->
        <div id="header">
            <div class="container-fluid">
                <div class="navbar">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/">
                            <img src="/admin/img/yaoming.png" style="width: 40px;margin-top: -10px;"><span class="text-logo">先从这</span><span class="text-slogan">进首页</span> 
                        </a>
                    </div>
                    <nav class="top-nav" role="navigation">
                        
                        <ul class="nav navbar-nav pull-right">
                            
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown">
                                    <img class="user-avatar" src="/admin/img/avatars/48.jpg" alt="SuggeElson">管理员</a>
                                <ul class="dropdown-menu right" role="menu">

                                    <li><a href="/admin/logout"><i class="im-exit"></i> Logout</a>
                                    </li>
                                </ul>
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
                            <li><a href="/admin/videocomment/getCommentList"><i class="ec-pencil2"></i> 视频评论</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"> 视频分类管理 <i class="im-paragraph-justify"></i></a>
                        <ul class="nav sub">
                            <li><a href="/admin/videosort"><i class="ec-pencil2"></i> 视频分类列表</a>
                            </li>
                            <li><a href="/admin/videosort/create"><i class="im-checkbox-checked"></i> 视频分类添加</a>

                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"> 课程管理 <i class="ec-bookmark"></i></a>
                        <ul class="nav sub">
                            <li><a href="/admin/class"><i class="im-list"></i> 课程列表</a>
                            </li>
                            <li><a href="/admin/class/create"><i class="im-plus"></i> 课程添加</a>

                            </li>
                            <li><a href="form-validation.html"><i class="ec-pencil2"></i> 课程评论</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"> 课程分类管理 <i class="im-paragraph-justify"></i></a>
                        <ul class="nav sub">
                            <li><a href="/admin/lessonsort"><i class="ec-pencil2"></i> 课程分类列表</a>
                            </li>
                            <li><a href="/admin/lessonsort/create"><i class="im-checkbox-checked"></i> 课程分类添加</a>

                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"> 瑜伽馆管理 <i class="im-office"></i></a>
                        <ul class="nav sub">

                             <li><a href="/admin/clubsort"><i class="im-drawer"></i>瑜伽馆分类表</a>
                            </li>
                            
                        
                            <li><a href="/admin/club/"><i class="im-list"></i>瑜伽馆列表</a>
                            </li>
                           
                            
                            <li><a href="/admin/club/create"><i class="im-pencil2"></i>瑜伽馆添加</a>

                        </ul>
                    </li>


                    <li>
                        <a href="#"> 名师管理 <i class="fa-user"></i></a>
                        <ul class="nav sub">
                            <li><a href="/admin/teacher/"><i class="im-list"></i> 名师列表</a>
                            </li>
                            <li><a href="/admin/teacher/create"><i class="im-plus"></i> 名师添加</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"> 订单管理 <i class="im-file"></i></a>
                    </li>

                    <li>
                        <a href="#"> 资讯管理 <i class="im-earth"></i></a>
                        <ul class="nav sub">
                            <li><a href="/admin/news/index"><i class="im-list"></i> 资讯列表</a>
                            </li>
                            <li><a href="/admin/news/create"><i class="im-plus"></i> 资讯添加</a>

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
                    <li>
                        <a href="#"> 报名管理 <i class="im-paragraph-justify"></i></a>
                        <ul class="nav sub">
                            <li><a href="/admin/enroll"><i class="ec-pencil2"></i> 报名者列表</a>
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
                        
                        <!-- End .option-buttons -->
                    </div>
                    <!-- End .page-header -->
                </div>
                <!-- End .row -->
                @if (session('success'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <strong>{{ session('success') }}</strong> 
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <strong>{{ session('error') }}</strong> 
                        </div>
                    @endif
                @section('content')

            
                @show
                </div>
            <!-- End .content-wrapper -->
            <div class="clearfix"></div>
        </div>
        <!-- End #content -->
        <!-- Javascripts -->

        <script src="/admin/plugins/core/pace/pace.min.js"></script>
        <script>
            someCallback = function(){
                $('#result').append(
                    '<p>执行回调 - 文件原名：<span >'+this.fileName+'</span> | 文件大小：<span >'+parseFloat(this.fileSize / (1000 * 1000)).toFixed(2) + 'MB'+'</span> | 文件储存名：<span >'+this.savedPath.substr(this.savedPath.lastIndexOf('/') + 1)+'</span></p>'
                );
            }
        </script>

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

        <script src="/admin/plugins/core/moment/moment.min.js"></script>

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

        <script src="/admin/plugins/forms/switch/jquery.onoff.min.js"></script>
        <script src="/admin/plugins/forms/maxlength/bootstrap-maxlength.js"></script>
        <!-- <script src="/admin/plugins/forms/bootstrap-filestyle/bootstrap-filestyle.js"></script> -->
        <script src="/admin/plugins/forms/color-picker/spectrum.js"></script>
        <script src="/admin/plugins/forms/daterangepicker/daterangepicker.js"></script>
        <script src="/admin/plugins/forms/datetimepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="/admin/plugins/forms/globalize/globalize.js"></script>
        <script src="/admin/plugins/forms/maskedinput/jquery.maskedinput.js"></script>
        <script src="/admin/plugins/forms/select2/select2.js"></script>
        <script src="/admin/plugins/forms/dual-list-box/jquery.bootstrap-duallistbox.js"></script>
        <script src="/admin/plugins/forms/password/jquery-passy.js"></script>
        <script src="/admin/plugins/forms/checkall/jquery.checkAll.js"></script>

        <script src="/admin/plugins/misc/highlight/highlight.pack.js"></script>
        <script src="/admin/plugins/misc/countTo/jquery.countTo.js"></script>
        <script src="/admin/plugins/ui/weather/skyicons.js"></script>
        <script src="/admin/plugins/ui/notify/jquery.gritter.js"></script>
        <script src="/admin/plugins/ui/calendar/fullcalendar.js"></script>
        <script src="/admin/js/jquery.sprFlat.js"></script>
        <script src="/admin/js/app.js"></script>
        <script src="/admin/js/pages/dashboard.js"></script>

        <script src="/admin/js/pages/forms.js"></script>
        <link rel="stylesheet" href="/admin/css/lightbox.css" media="screen"/>
        <script src="/admin/js/lightbox-2.6.min.js"></script>


    </body>
</html>