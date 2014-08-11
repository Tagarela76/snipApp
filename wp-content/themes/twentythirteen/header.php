<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta name="description" content="">

    <!-- Google Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="./wp-content/themes/twentythirteen/css/prettyPhoto.css">
    <link rel="stylesheet" href="./wp-content/themes/twentythirteen/css/tabulous.css">
    <link rel="stylesheet" href="./wp-content/themes/twentythirteen/css/parallax-styles.css">
    <link rel="stylesheet" href="./wp-content/themes/twentythirteen/css/gooeymenu.css">
    <link rel="stylesheet" href="./wp-content/themes/twentythirteen/css/foundation.css">
    <link rel="stylesheet" href="./wp-content/themes/twentythirteen/css/normalize.css">
    <link rel="stylesheet" href="./wp-content/themes/twentythirteen/css/main.css">
    <link rel="stylesheet" href="./wp-content/themes/twentythirteen/css/styles.css">
    <link href="./wp-content/themes/twentythirteen/css/jquery.toastmessage.css" rel="stylesheet" type="text/css">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

    <!-- Header Scripts -->
    <script src="./wp-content/themes/twentythirteen/js/vendor/modernizr-2.6.2.min.js"></script>

    <script src="./wp-content/themes/twentythirteen/js/validate.min.js"></script>
    <script src="./wp-content/themes/twentythirteen/js/jquery.toastmessage.js"></script>
    <script src="./wp-content/themes/twentythirteen/js/evercookie/swfobject-2.2.min.js"></script>
    <script src="./wp-content/themes/twentythirteen/js/evercookie/evercookie.js"></script>

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

    <script>
        $(function() {
            $(document).tooltip({
                tooltipClass: "tooltip",
                track: true,
                items: "input[title], textarea[title]"
            });
        });
    </script>

    <script type="text/javascript">
        function trackOutboundLink(link, category, action) {
            try {
                _gaq.push(['_trackEvent', category , action]);
            } catch(err){}
            setTimeout(function() {
                document.location.href = link.href;
            }, 100);
        }
    </script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-47443944-1', 'snip-app.com');
        ga('send', 'pageview');
    </script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter23886964 = new Ya.Metrika({id:23886964,
                        webvisor:true,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true});
                } catch(e) { }
            });
            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="//mc.yandex.ru/watch/23886964" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <!-- begin of Top100 code -->
    <script id="top100Counter" type="text/javascript" src="http://counter.rambler.ru/top100.jcn?2992952"></script>
    <noscript>
        <a href="http://top100.rambler.ru/navi/2992952/">
            <img src="http://counter.rambler.ru/top100.cnt?2992952" alt="Rambler's Top100" border="0" />
        </a>
    </noscript>
    <!-- end of Top100 code -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <input type='hidden' id='referUserName' value='<?php echo $referUserName ?>'>
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

	<div id="page" class="hfeed site">

        <!-- Loader -->
        <div class="loader">
            <img src="./wp-content/themes/twentythirteen/img/loader.gif" alt="Loader">
        </div>

        <!-- About Modal -->
        <div id="aboutModal" class="reveal-modal medium">
            <div class="row">
                <div class="large-6 columns">
                    <img src="./wp-content/themes/twentythirteen/img/iPad.png" alt="iPad Mockup">
                </div>
                <div class="large-6 columns">
                    <h2>СНиПы+</h2>
                    <span>Загружайте документы и читайте их в режиме оффлайн</span>
                    <p>Файловый менеджер и текстовый редактор, позволяющие удобно работать внутри приложения с нужной Вам документацией: заполнять формы документов, редактировать, создавать и хранить свои собственные справочные материалы и сборники документации, необходимые для работы и учебы, добавлять и работать со своими проектами и многое другое. </p>

                </div>
            </div>

            <a class="close-reveal-modal">&#215;</a>
        </div>

        <!-- Blog Modal -->
        <div id="blogModal" class="reveal-modal medium">
            <div class="row">
                <div class="large-6 columns">
                    <img src="./wp-content/themes/twentythirteen/img/iPad.png" alt="iPad Mockup">
                </div>
                <div class="large-6 columns">
                    <h2>More about!</h2>
                    <span>Something you've never seen before!</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, aut, reprehenderit ad minus iusto similique esse! Hic, praesentium nulla non alias laborum magni quae itaque aliquid magnam ad vero fugit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, architecto facere incidunt nemo aperiam temporibus fugiat distinctio laborum. Deleniti consequatur illo omnis vero quam est doloremque eligendi odit itaque aut.</p>
                </div>
            </div>

            <a class="close-reveal-modal">&#215;</a>
        </div>

        <div class="headerWrapp">

            <!-- Top Border -->
            <div class="topBorder"></div>

            <!--<header id="masthead" class="site-header" role="banner">
                <div id="navbar" class="navbar">
                    <nav id="site-navigation" class="navigation main-navigation" role="navigation">
                        <a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>

                        <?php get_search_form(); ?>
                    </nav>
                </div>
            </header>-->

            <!-- Header & Navigation -->
            <header id="header">
                <div class="row">
                    <div class="large-3 columns logoHolder">
                        <!--<a href="#head">
                            <img src="img/logo.png" alt="iLander Logo">
                        </a>-->
                        <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                            <img src="./wp-content/themes/twentythirteen/img/logo.png" alt="iLander Logo">
                        </a>
                    </div>
                    <div class="large-9 columns mobile-menu">
                        <button class="smallNavButton">Навигация</button>
                        <!--<ul id="mainNavigation" class="underlinemenu disabledNav">
                            <li><a class="goTo" href="#head">Главное</a></li>
                            <li><a class="goTo" href="#about">О приложении</a></li>
                            <li><a class="goTo" href="#features">Преимущества</a></li>
                            <li><a class="goTo" href="#screenshots">Скриншоты</a></li>
                            <li><a class="goTo" href="#contact">Контакты</a></li>
                        </ul>-->
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
                    </div>
                </div>
            </header>
        </div>
		<div id="main" class="site-main">
