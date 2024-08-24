<!-- 1. Php_Top_Section -->
<!-- 2. Head_Section -->
<!-- 3. Preloader_Section -->
<!-- 4. Mobile_Menu -->
<!-- 5. Top_Area_Section_Desktop -->
<!-- 6. Main_Menu_Section -->
<!-- 7. Qucik_Contact_Modal -->

<?php
include("templates/db/db.php");
include("templates/db/global_db_query.php");
include("templates/db/router.php");
include("templates/function/text-short.php");
include("templates/function/social_user_details_save.php");
include("templates/function/user_ip_save.php");

if ($pg_nm == "") {
    header('location: ' . $baseUrl . '/home');
} else if (!file_exists("templates/" . $pg_nm . "/page_details/title.php")) {
    header('location: ' . $baseUrl . '/home');
}

$system_info_dataget = mysqli_query($con, "select system_name, logo, favicon, email, address, ph_num from system_info ");
$system_info_data = mysqli_fetch_row($system_info_dataget);

$system_name = $system_info_data[0];
$system_logo = $system_info_data[1];
$system_favicon = $system_info_data[2];
$system_email = $system_info_data[3];
$system_address = $system_info_data[4];
$system_ph_num = $system_info_data[5];
?>

<!DOCTYPE html>
<html lang="en">
<!-- Head_Section  -->

<head>
    <!-- ================================================================================================================================================
            ===================================================================================================================================================== -->
    <!-- Google Tag Manager -->
    <script async>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KMKJLBNM');
    </script>
    <!-- End Google Tag Manager -->
    <!-- ================================================================================================================================================
            ===================================================================================================================================================== -->
    <!-- Basic -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#108957" />


    <base href="<?php echo $baseHref; ?>" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="upload_content/upload_img/system_img/<?php echo $system_favicon; ?>" type="image/x-icon" />
    <?php
    if (file_exists("templates/" . $pg_nm . "/page_details/title.php")) {
        include("templates/" . $pg_nm . "/page_details/title.php");
    } else {
    ?>
        <title>Griho Nirman Realty Pvt.Ltd - Best Realestate Company in Kolkata</title>
    <?php
    }
    ?>
    <?php
    if (file_exists("templates/" . $pg_nm . "/page_details/meta_details.php")) {
        include("templates/" . $pg_nm . "/page_details/meta_details.php");
    } else {
    ?>
        <meta name="description" content="Discover premium real estate in Kolkata with Griho Nirman Realty. Explore top listings and expert services to find your dream home or investment property.">
        <meta name="keywords" content="
                    best relestate company in kolkata,
                    buy plots in kolkata,
                    buy villa in kolkata,
                    housing,
                    99acers,
                    land sale in kolkata,
                    buy villas , 
                    bunglow ,
                    plot sale ,
                    property,
                    Bashbhumi Green View Project,
                    Residential plots,
                    Real estate,
                    Plot sizes,
                    Plots for sale near Joka Metro Station,
                    Residential plots near Vivekananda Mission School,
                    plots in Kolkata,
                    Buy residential plots in a green environment,
                    Investment in Kolkata real estate,
                    Plots with modern amenities in Kolkata,
                    Kolkata plots for family homes,
                    Secure and serene residential plots in Kolkata,
                    Plots near Bharat Sevashram Hospital,
                    Plots with easy access to Calcutta Hospital" />
    <?php
    }
    ?>
    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content=" Griho Nirman Realty Pvt.Ltd.">
    <meta itemprop="description" content="Discover premium real estate in Kolkata with Griho Nirman Realty. Explore top listings and expert services to find your dream home or investment property.">
    <meta itemprop="image" content="https://grihonirmanrealty.in/siteimage.webp">
    <meta property="og:image:type" content="image/webp">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://grihonirmanrealty.in/home">
    <meta property="og:type" content="website">
    <meta property="og:title" content=" Griho Nirman Realty Pvt Ltd">
    <meta property="og:description" content="Discover premium real estate in Kolkata with Griho Nirman Realty. Explore top listings and expert services to find your dream home or investment property.">
    <meta property="og:image" content="https://grihonirmanrealty.in/siteimage.webp">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content=" Griho Nirman Realty Pvt Ltd">
    <meta name="twitter:description" content="Discover premium real estate in Kolkata with Griho Nirman Realty. Explore top listings and expert services to find your dream home or investment property.">
    <meta name="twitter:image" content="https://grihonirmanrealty.in/siteimage.webp">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" type="text/css" />
    <!--end::Fonts-->

    <!-- ========================================== -->
    <!-- WEBSITE CSS START -->
    <!-- ========================================== -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="assets/css/all.min.css" type="text/css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css" type="text/css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="assets/css/slick.min.css" type="text/css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/modal.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/common.css" type="text/css">
    <!-- ========================================== -->
    <!-- WEBSITE CSS END -->
    <!-- ========================================== -->

    <link href="assets/global/plugins/bootstrap-sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/common_assets/style.css" type="text/css">

    <?php
    if (file_exists("templates/" . $pg_nm . "/page_details/css.php")) {
        include("templates/" . $pg_nm . "/page_details/css.php");
    }
    ?>
    <script>
        const baseUrl = "<?php echo $baseUrl; ?>";
        const login = "<?php echo $login; ?>";
    </script>


</head>

<!-- ============================= -->
<!-- Header Section Start  -->
<!-- ============================= -->

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KMKJLBNM"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!--==============================
            Preloader_Section
            ==============================-->
    <div class="preloader">
        <div class="preloader-inner">
            <img loading="lazy" src="upload_content/upload_img/system_img/<?php echo $system_favicon; ?>" alt="Grihonirman">
            <span class="loader"></span>
        </div>
    </div>
    <div class="preloader2">
        <div class="preloader-inner">
            <img loading="lazy" src="upload_content/upload_img/system_img/<?php echo $system_favicon; ?>" alt="Grihonirman">
            <span class="loader"></span>
        </div>
    </div>
    <!--==============================
            Mobile_Menu
            ============================== -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-area text-center">
            <button class="menu-toggle"><i class="fas fa-times"></i></button>
            <div class="mobile-logo">
                <a href="<?php echo $baseUrl; ?>/home">
                    <img src="upload_content/upload_img/system_img/<?php echo $system_logo == "" ? "no_image.png" : $system_logo ?>" alt="Griho Nirman Logo" loading="lazy">
                </a>
            </div>
            <div class="mobile-menu">
                <ul>
                    <li>
                        <a href="<?php echo $baseUrl; ?>/home">Home</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">About Us</a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo $baseUrl; ?>/about">Griho Nirman</a></li>
                            <li><a href="<?php echo $baseUrl; ?>/services">Services</a></li>
                            <li><a href="<?php echo $baseUrl; ?>/faq">FAQ</a></li>
                            <li><a href="<?php echo $baseUrl; ?>/gallery">Gallery</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo $baseUrl; ?>/testimonial">Client Testimonial</a>
                    </li>

                    <li>
                        <a href="<?php echo $baseUrl; ?>/portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a href="<?php echo $baseUrl; ?>/career">Career</a>
                    </li>
                    <li>
                        <a href="<?php echo $baseUrl; ?>/contact">Contact</a>
                    </li>

                </ul>
            </div>
            <div class="btn-wrap" style="justify-content: center !important;">
                <button class="mobilemenu menu-toggle openModalBtn open-modal-btn btn style2">Enquiry Now<i class="fas fa-angle-double-right"></i></button>
            </div>
        </div>
    </div>
    <!--==============================
            Top_Area_Section_Desktop
            ==============================-->
    <header class="nav-header header-layout1">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li style="margin-right: 12px;"><img src="assets/icon/email.webp" alt="Email" loading="lazy" style="width: 30px; height: 30px;"><a href="mailto:<?php echo $system_email ?>"><?php echo $system_email; ?></a></li>
                                <li style="white-space: nowrap;"><img src="assets/icon/call-i.webp" alt="Call" loading="lazy" style="width: 30px; height: 30px;"><a href="tel: <?php echo $system_ph_num; ?>"><?php echo $system_ph_num; ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto  d-none d-lg-block">
                        <div class="header-links">
                            <ul>
                                <li>
                                    <div class="social-links">
                                        <!-- <span class="social-title">Follow On :</span> -->
                                        <a href="https://www.facebook.com/profile.php?id=61563583546780" target="_blank" style="background-color: #0288d1;"><i class="fab fa-facebook"></i></a>
                                        <a href="https://x.com/GrihoL48022" target="_blank" style="background-color: #000000;"><i class="fab fa-brands fa-x-twitter"></i></a>
                                        <a href="https://www.instagram.com/griho.nirman/" target="_blank" style="background-color: #fc104a;"><i class="fab fa-instagram"></i></a>
                                        <a href="https://www.linkedin.com/in/griho-nirman-97b0a4322/" target="_blank" style="background-color: #58b5e8;"><i class="fab fa-linkedin"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main_Menu_Section -->
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo top-section">
                                <a href="<?php echo $baseUrl; ?>/home"><img src="upload_content/upload_img/system_img/<?php echo $system_logo == "" ? "no_image.png" : $system_logo ?>" alt="logo" loading="lazy"></a>
                                <p><?php echo $system_name; ?></p>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li>
                                        <a href="<?php echo $baseUrl; ?>/home">Home</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">About Us</a>
                                        <ul class="sub-menu">
                                            <li><a href="<?php echo $baseUrl; ?>/about">Griho Nirman</a></li>
                                            <li><a href="<?php echo $baseUrl; ?>/services">Services</a></li>
                                            <li><a href="<?php echo $baseUrl; ?>/faq">FAQ</a></li>
                                            <li><a href="<?php echo $baseUrl; ?>/gallery">Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="<?php echo $baseUrl; ?>/portfolio">Our Portfolio</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $baseUrl; ?>/testimonial">Testimonial</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $baseUrl; ?>/career">Career</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $baseUrl; ?>/contact">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="navbar-right d-inline-flex d-lg-none">
                                <button type="button" class="menu-toggle icon-btn"><i class="fas fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button">
                                <button id="openModalBtn" class="openModalBtn open-modal-btn btn">
                                    Enquiry Now
                                    <i class="fas fa-angle-double-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Qucik_Contact_Modal -->
    <div id="modal" class="modal modal-quick-contact">
        <div class="contact-form-wrap">
            <div class="title-area">
                <p class="sec-title" style="line-height: 1.5; color: #000000; font-size: 16px;">Want to Know More about the projects? Our Advisors Are Ready to Assist!</p>
                <button id="closeModalBtn" class="close-modal-btn">&times;</button>
            </div>
            <div id="modalForm">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="text" class="form-control style-border" id="name" placeholder="Your Name" required>
                            <label data-default-mssg="" class="input_alert name-inp-alert"></label>
                        </div>
                    </div>
                    <div class="col-lg-4 my-2 my-lg-0">
                        <select name="isd_code" id="isd_code" class="form-select style-border" required>
                            <option value="" disabled selected hidden>Country code
                            </option>
                        </select>
                    </div>

                    <div class="col-lg-8">
                        <div class="form-group">
                            <input type="number" class="form-control style-border" id="phone" placeholder="Phone Number" required>
                            <label data-default-mssg="" class="input_alert phone-inp-alert"></label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="email" class="form-control style-border" id="email" placeholder="Email Address" required>
                            <label data-default-mssg="" class="input_alert email-inp-alert"></label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <select id="category" class="form-select style-border" required>
                                <option value="" disabled selected hidden>Category</option>
                                <option value="General Inquiry">General Inquiry</option>
                                <option value="Job Opportunity">Job Opportunity</option>
                                <option value="Feedback">Feedback</option>
                                <option value="Flat">Flat</option>
                                <option value="Plots">Plots</option>
                                <option value="Villa">Villa</option>
                            </select>
                            <label data-default-mssg="" class="input_alert category-inp-alert"></label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <textarea class="form-control style-border" name="message" id="message" cols="30" rows="4" placeholder="Your Message" required></textarea>
                            <label data-default-mssg="" class="input_alert message-inp-alert"></label>
                        </div>
                    </div>
                </div>
                <div class="form-btn col-12 text-center">
                    <button type="submit" class="btn w-100 style4" onclick="quick_contact()">Submit Now</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================= -->
    <!-- Header Section End  -->
    <!-- ============================= -->

    <!-- ============================= -->
    <!-- Body Section Start  -->
    <!-- ============================= -->
    <?php
    if (file_exists("templates/" . $pg_nm . "/" . $pg_nm . ".php")) {
        include("templates/" . $pg_nm . "/" . $pg_nm . ".php");
    }
    ?>
    <!-- ============================= -->
    <!-- Body Section End  -->
    <!-- ============================= -->
    <!-- ============================= -->
    <!-- Footer Section Start  -->
    <!-- ============================= -->



    <footer class="footer-wrapper footer-layout1 overflow-hidden" data-bg-src="url(assets/img/bg/footer-bg-1.svg)">
        <div class="container">

            <div class="widget-area">
                <div class="row justify-content-between">
                    <div class="col-md-3 col-lg-5">
                        <div class="widget footer-widget">
                            <div class="widget-about">
                                <div class="footer-logo">
                                    <a href="<?php echo $baseUrl; ?>/home"><img src="upload_content/upload_img/system_img/<?php echo $system_logo == "" ? "no_image.png" : $system_logo ?>" alt="Griho Nirman" loading="lazy" style="width: 80px; height: 80px;"></a>
                                </div>
                                <p class="about-text">Griho Nirman is committed to showcasing properties that meet
                                    high standards of quality and providing clear, honest information about each
                                    project, ensuring transparency throughout the buying process.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Link</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="<?php echo $baseUrl ?>/home">Home</a></li>
                                    <li><a href="<?php echo $baseUrl ?>/about">About Us</a></li>
                                    <li><a href="<?php echo $baseUrl ?>/testimonial">Testimonial</a></li>
                                    <li><a href="<?php echo $baseUrl ?>/portfolio">Our Project</a></li>
                                    <li><a href="<?php echo $baseUrl ?>/contact">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Newsletter</h3>
                            <p class="footer-text">Your opinion is important to us. So contact us for any service.</p>
                            <form class="newsletter-form">
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Your Email Address" required="">
                                </div>
                                <button type="submit" class="btn"><i class="fas fa-paper-plane"></i></button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row gy-3 justify-content-lg-between justify-content-center">
                    <div class="col-auto align-self-center">
                        <p class="copyright-text">© Copyright 2024 <a href="#"><?php echo $system_name; ?></a> All Rights Reserved</p>
                    </div>
                    <div class="col-auto align-self-center">
                        <div class="footer-links">
                            <div class="social-btn style4" style="justify-content: center">
                                <a href="https://www.facebook.com/profile.php?id=61563583546780" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://x.com/GrihoL48022" target="_blank"><i class="fab fa-brands fa-x-twitter"></i></a>
                                <a href="https://www.instagram.com/griho.nirman/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/griho-nirman-97b0a4322/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
    <div class="whatsapp-sticky-main">
        <a href="https://wa.me/9147390718?text=" target="_blank" class="whatsapp-sticky">
            <span>Need Help?Let's Chat</span>
            <img loading="lazy" src="assets/icon/whatsapp.webp" alt="whatsapp">
        </a>
    </div>


    <!-- ============================= -->
    <!-- Footer Section End  -->
    <!-- ============================= -->
    <script src="assets/js/dropdown.js" typeof="text/javascript" defer></script>
    <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <!-- WEB SITE JS START  -->
    <!-- Jquery -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js" defer></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js" defer></script>
    <!-- Slick Slider -->
    <script src="assets/js/slick.min.js" defer></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js" defer></script>
    <!-- Counter Up -->
    <script src="assets/js/jquery.counterup.min.js" defer></script>
    <!-- Range Slider -->
    <script src="assets/js/jquery-ui.min.js" defer></script>
    <!-- Isotope Filter -->
    <script src="assets/js/imagesloaded.pkgd.min.js" defer></script>
    <script src="assets/js/isotope.pkgd.min.js" defer></script>
    <!-- Main Js File -->
    <script src="assets/js/modal.js" defer></script>
    <script src="assets/js/main.js" defer></script>
    <script src="assets/js/sllider-implitaion.js" defer></script>
    <script src="assets/js/custom.js" defer></script>
    <script src="https://kit.fontawesome.com/35181277b5.js" crossorigin="anonymous" defer></script>
    <!-- WEB SITE JS End -->

    <script src="assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript" defer></script>
    <script src="assets/global/plugins/bootstrap-sweetalert/sweetalert.js" type="text/javascript" defer></script>
    <script src="assets/common_assets/main_controller.js?v=1.1.2" type="text/javascript" defer></script>

    <!-- <script>
                window.embeddedChatbotConfig = {
                    chatbotId: "a9OqzUxQZ1E5DEnTOInm-",
                    domain: "www.chatbase.co"
                }
            </script>
            <script src="https://www.chatbase.co/embed.min.js" chatbotId="a9OqzUxQZ1E5DEnTOInm-" domain="www.chatbase.co" defer> 
            </script>-->
    <?php
    if (file_exists("templates/" . $pg_nm . "/page_details/js.php")) {
        include("templates/" . $pg_nm . "/page_details/js.php");
    }
    ?>


</body>

</html>