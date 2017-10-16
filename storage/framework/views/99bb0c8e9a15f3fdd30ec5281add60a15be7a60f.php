<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
   <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ITCeg</title>
        <meta name="keywords" content="ITCeg" />
        <meta name="description" content="ITCeg">
        <meta name="author" content="ITCeg">
        <link rel="shortcut icon" href="<?php echo e(asset('img/favicon.ico')); ?>" type="image/x-icon" />
        <link rel="apple-touch-icon" href="<?php echo e(asset('img/apple-touch-icon.png')); ?>">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('vendor/font-awesome/css/font-awesome.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('vendor/animate/animate.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('vendor/simple-line-icons/css/simple-line-icons.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('vendor/owl.carousel/assets/owl.carousel.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('vendor/owl.carousel/assets/owl.theme.default.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('vendor/magnific-popup/magnific-popup.min.css')); ?>">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('vendor/font-awesome/css/font-awesome.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('vendor/animate/animate.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('vendor/simple-line-icons/css/simple-line-icons.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('vendor/owl.carousel/assets/owl.carousel.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('vendor/owl.carousel/assets/owl.theme.default.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('vendor/magnific-popup/magnific-popup.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('master/rtl/css/rtl-theme.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('master/rtl/css/rtl-theme-elements.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('master/rtl/css/rtl-theme-blog.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('master/rtl/css/rtl-theme-shop.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('vendor/rs-plugin/css/settings.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('vendor/rs-plugin/css/layers.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('vendor/rs-plugin/css/navigation.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/skins/skin-digital-agency.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('master/rtl/css/demos/rtl-demo-digital-agency.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>">
        <script src="<?php echo e(asset('vendor/modernizr/modernizr.min.js')); ?>"></script>
</head>
<body>
<div class="body">
            <header id="header" class="header-narrow header-semi-transparent header-flex" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 1, 'stickySetTop': '0'}">
                <div class="header-body">
                    <div class="header-container container">
                        <div class="header-row">
                            <div class="header-column">
                                <div class="header-logo">
                                    <a href="demo-digital-agency.html">
                                        <img alt="ITceg" width="200" height="70" src="<?php echo e(asset('img/demos/digital-agency/logo-digital-agency.png')); ?>">
                                    </a>
                                </div>
                            </div>
                            <div class="header-column">
                                <div class="header-row">
                                    <div class="header-nav header-nav-stripe">
                                        <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                                            <i class="fa fa-bars"></i>
                                        </button>
                                        <ul class="header-social-icons social-icons hidden-xs">
                                            <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                        <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1 collapse">
                                            <nav>
                                                <ul class="nav nav-pills" id="mainNav">
                                                    
                                                    <li>
                                                        <a href="<?php echo e(url('/contact')); ?>">
                                                            اتصل بنا
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="<?php echo e(url('/services')); ?>">
                                                            الخدمات
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="<?php echo e(url('/products')); ?>">
                                                            المنتجات
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="<?php echo e(url('/about')); ?>">
                                                            من نحن
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="<?php echo e(url('/')); ?>">
                                                            الرئيسية
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="<?php echo e(url('/login')); ?>">
                                                            تسجيل الدخول
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <li><a href="<?php echo e(route('login')); ?>">تسجيل الدخول</a></li>
                            
                        <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            تسجيل خروج
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>


        <?php echo $__env->yieldContent('content'); ?>
    </div>


    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
