<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
    <head>
        <!-- Basic Page Needs
================================================== -->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <!-- JS
        ================================================== -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <!-- HTML5 Shiv events -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" ></script>
        <!-- HTML5 Shiv events (end)-->
        <!-- typekit font -->
        <script type="text/javascript" src="//use.typekit.net/blt8ahf.js"></script>
        <script type="text/javascript">try {
                Typekit.load();
            } catch (e) {
            }</script>
        <!-- typekit font (end) -->
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-12990017-2', 'auto');
            ga('send', 'pageview');

        </script>
        <script type="text/javascript">
<!--


            function toggle_visibility() {
                var e = title;
                if (e.style.display == 'block')
                    e.style.display = 'none';
            }
            function timeout_init() {
                setTimeout('toggle_visibility()', 1200);
            }


//-->
        </script>

        <script type="text/javascript" src="js/jcarousel.js" ></script>
<!--<script src="js/bootstrap-alert.js"></script>
<script src="js/bootstrap-dropdown.js"></script>
<script src="js/bootstrap-tab.js"></script>-->
<script src="js/bootstrap-tooltip.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('#main-port').jcarousel(), jQuery('#our-clients').jcarousel();
    });
</script>
<script type="text/javascript" src="js/eg-custom.js" ></script>
<script src="layerslider/jQuery/jquery-easing-1.3.js" type="text/javascript"></script>
<script src="layerslider/js/layerslider.kreaturamedia.jquery-min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#layerslider').layerSlider({
            skinsPath: 'layerslider/skins/',
            skin: 'fullwidth',
            thumbnailNavigation: 'hover',
            hoverPrevNext: true,
            responsive: false,
            responsiveUnder: 0,
            sublayerContainer: 900,
            autoPlayVideos: false
        });
    });
</script>

        <!-- Favicons
        ================================================== -->
        <link rel="shortcut icon" href="images/favicon.ico">

    </head>

    <body>
        <!-- Primary Page Layout
                ================================================== -->
        <div id="wrap">
            <!-- Start header -->
            <div id="header_stick">

                    <?php include 'top-header.php'?>

                <header id="header" class="container">
                    <div class="four columns logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="https://www.emergenetics.com/images/eg_logo.png" alt="Emergenetics Logo" width="220" height="68"></a>
                    </div>

                    <!-- nav starts -->
                    <nav id="nav-wrap" class="twelve columns">
                        <!-- Start Nav Menu -->
                            <?php wp_nav_menu( array( 'emergenetics' => 'header-menu', 'container' => '', 'menu_class' => 'nav slide' ) ); ?>
                        <!-- End Nav Menu -->
                    </nav>
                    <!-- /nav-wrap -->

                </header>
            </div>
            <!--End header -->