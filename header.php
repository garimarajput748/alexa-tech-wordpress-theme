<?php
$upload_dir_baseurl = wp_upload_dir();
$upload_dir_image_path = $upload_dir_baseurl['url'] . "/";
$site_assets_path = get_stylesheet_directory_uri() . "/"; // . "/assets/css/";
$site_js_path = get_stylesheet_directory_uri() . "/"; /// . "/assets/js/";
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<meta charset="<?php bloginfo('charset'); ?>">

<!-- Mirrored from dizitechnologies.com.au/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Dec 2022 11:48:53 GMT -->

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5N5T9D61PS"></script>
    <a id="href2" target="_blank" href="http://www.2findlocal.com/b/14401972"><img class="anchorImage" alt="dizi technologies" src="http://www.2findlocal.com/Set/Icons/2.png"></a><a target="_blank" href="http://taxihowmuch.com/"><img alt="taxi how much" src="http://www.2findlocal.com/Set/Icons/u.png"></a><a id="href3" target="_blank" href="https://updownradar.com/"><img alt="updown" src="http://www.2findlocal.com/Set/Icons/f.png"></a>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-5N5T9D61PS');
    </script>
    <meta name="msvalidate.01" content="31FE80F4A683C616C47137563FB62128" />
    <meta name="google-site-verification" content="SMo9EfdHE04PAAnCgnP7DChSCDTk8F2VO2CoNoCPkhk" />
    <!-- Quantcast Tag -->
    <script type="text/javascript">
        window._qevents = window._qevents || [];

        (function() {
            var elem = document.createElement('script');
            elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
            elem.async = true;
            elem.type = "text/javascript";
            var scpt = document.getElementsByTagName('script')[0];
            scpt.parentNode.insertBefore(elem, scpt);
        })();

        window._qevents.push({
            qacct: "p-skA9RWq7NShZ1",
            uid: "__INSERT_EMAIL_HERE__"
        });
    </script>

    <noscript>
        <div style="display:none;">
            <img src="http://pixel.quantserve.com/pixel/p-skA9RWq7NShZ1.gif" border="0" height="1" width="1" alt="Quantcast" />
        </div>
    </noscript>
    <!-- End Quantcast tag -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo $site_assets_path; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $site_assets_path; ?>assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $site_assets_path; ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo $site_assets_path; ?>assets/css/swiper-min.css">
    <link rel="stylesheet" href="<?php echo $site_assets_path; ?>assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="<?php echo $site_assets_path; ?>assets/css/fancybox.min.css">
    <link rel="stylesheet" href="<?php echo $site_assets_path; ?>assets/css/aos.min.css">
    <link rel="stylesheet" href="<?php echo $site_assets_path; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $site_assets_path; ?>assets/css/responsive.css">
    <title>
        <?php bloginfo('name'); ?>
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <meta name="description" content="<?php bloginfo("description") ?>">
    <meta name="keywords" content="Website Development in Canberra">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="icon" type="image/png" href="<?php echo $site_assets_path; ?>assets/img/favicon.png">
</head>

<body>

    <!-- <div class="preloader js-preloader">
        <img src="<?php //echo $site_assets_path; 
                    ?>assets/img/preloader.gif" alt="Image">
    </div> -->
    <div class="page-wrapper">
        <header class="header-wrap style3 mb-5">
            <div class="header-top bg-vulcan">
                <div class="close-header-top xl-none">
                    <button type="button">
                        <i class="las la-times"></i>
                    </button>
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-12">
                            <div class="header-top-left">
                                <div class="contact-item">
                                    <i class="flaticon-call-1"></i>
                                    <a href="tel:0251122810">0251122810</a>
                                </div>
                                <div class="contact-item">
                                    <i class="flaticon-email"></i>
                                    <a href="mailto:Info@dizitechnologies.com.au">
                                        <p>Info@dizitechnologies.com.au</p>
                                    </a>
                                </div>
                                <div class="contact-item">
                                    <i class="flaticon-maps-and-flags"></i>
                                    <p>Level 1, 33 Allara Street, Canberra ACT 2601</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12">
                            <div class="header-top-right">
                                <ul class="social-profile style2 list-style">
                                    <li>
                                        <a target="_blank" href="#">
                                            <i class="flaticon-facebook-app-symbol"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="#">
                                            <i class="flaticon-instagram-2"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="#">
                                            <i class="flaticon-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                                <a href="#" class="btn style1 xl-none">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="header-bottom-wrap">
                        <div class="row align-items-center">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-5">
                                <a href="index-2.html" class="logo">
                                    <img src="<?php echo $site_assets_path; ?>assets/img/logo.png" alt="Image">
                                </a>
                            </div>
                            <div class="col-xl-5 col-lg-6 col-md-6 col-7">
                                <div class="main-menu-wrap">
                                    <div class="menu-close xl-none">
                                        <a href="javascript:void(0)">
                                            <i class="las la-times"></i>
                                        </a>
                                    </div>
                                    <div id="menu">
                                        <?php
                                        wp_nav_menu(
                                            array(
                                                'menu'              => 'primary',
                                                'theme_location'    => 'primary',
                                                'depth'             => 2,
                                                // 'container'         => 'div',
                                                // 'container_class'   => 'collapse navbar-collapse',
                                                // 'container_id'      => 'bs-example-navbar-collapse-1',
                                                'menu_class'        => 'main-menu list-style',
                                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                                'walker'            => new wp_bootstrap_navwalker()
                                            )
                                        );
                                        ?>
                                        <!--
                                        <ul class="main-menu list-style">
                                            <li>
                                                <a class="active" href="index.php">Home</a>
                                            </li>
                                            <li>
                                                <a href="about.html">About Us</a>
                                            </li>
                                            <li class="has-children">
                                                <a href="#">Services</a>
                                                <ul class="sub-menu list-style">
                                                    <li><a href="website-designing.html"><i class="fa fa-angle-right"></i> Web Designing</a>
                                                    </li>
                                                    <li><a href="mobile-web-app-development.html"><i class="fa fa-angle-right"></i> Mobile and Web-App Development</a></li>
                                                    <li><a href="digital-marketing.html"><i class="fa fa-angle-right"></i>
                                                            Digital Marketing</a>
                                                    </li>
                                                    <li><a href="maintenance-services.html"><i class="fa fa-angle-right"></i> Maintenance Services</a></li>
                                                    <li><a href="managed-ict-services.html"><i class="fa fa-angle-right"></i> Managed ICT Services</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="Blog/index.html">Blog</a>
                                            </li>
                                            <li>
                                                <a href="contact.html">Contact Us</a>
                                            </li>
                                        </ul>-->
                                    </div>
                                </div>
                                <div class="mobile-bar-wrap">
                                    <div class="mobile-top-bar xl-none">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="mobile-menu xl-none">
                                        <a href="javascript:void(0)">
                                            <i class="las la-bars"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 lg-none">
                                <div class="header-bottom-right">
                                    <a href="contact.html" class="btn style1">Enquiry</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>