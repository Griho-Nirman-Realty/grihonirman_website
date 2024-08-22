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

if ($pg_nm == "") {
    header('location: ' . $baseUrl . '/home/');
} else if (!file_exists("templates/" . $pg_nm . "/page_details/title.php")) {
    header('location: ' . $baseUrl . '/home/');
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
    <script>
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->

    <!-- ========================================== -->
    <!-- WEBSITE CSS START -->
    <!-- ========================================== -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="assets/css/slick.min.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/modal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/common.css">
    <!-- ========================================== -->
    <!-- WEBSITE CSS END -->
    <!-- ========================================== -->

    <link href="assets/global/plugins/bootstrap-sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/common_assets/style.css">

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
                    <div class="col-lg-4 p-1">
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
    <script src="assets/global/plugins/jquery.min.js" type="text/javascript" defer></script>
    <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript" defer></script>

    <!-- WEB SITE JS START  -->
    <!-- Jquery -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js" defer></script>
    <!-- Slick Slider -->
    <script src="assets/js/slick.min.js" defer></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js" defer></script>
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

    <script>
        document.getElementById('isd_code').addEventListener('focus', function() {
            if (this.children.length === 1) { // Ensure options are loaded only once
                const countries = [{
                        code: '+1',
                        name: 'USA'
                    },
                    {
                        code: '+93',
                        name: 'Afghanistan'
                    },
                    {
                        code: '+355',
                        name: 'Albania'
                    },
                    {
                        code: '+213',
                        name: 'Algeria'
                    },
                    {
                        code: '+376',
                        name: 'Andorra'
                    },
                    {
                        code: '+244',
                        name: 'Angola'
                    },
                    {
                        code: '+54',
                        name: 'Argentina'
                    },
                    {
                        code: '+374',
                        name: 'Armenia'
                    },
                    {
                        code: '+61',
                        name: 'Australia'
                    },
                    {
                        code: '+43',
                        name: 'Austria'
                    },
                    {
                        code: '+994',
                        name: 'Azerbaijan'
                    },
                    {
                        code: '+973',
                        name: 'Bahrain'
                    },
                    {
                        code: '+880',
                        name: 'Bangladesh'
                    },
                    {
                        code: '+375',
                        name: 'Belarus'
                    },
                    {
                        code: '+32',
                        name: 'Belgium'
                    },
                    {
                        code: '+501',
                        name: 'Belize'
                    },
                    {
                        code: '+229',
                        name: 'Benin'
                    },
                    {
                        code: '+975',
                        name: 'Bhutan'
                    },
                    {
                        code: '+591',
                        name: 'Bolivia'
                    },
                    {
                        code: '+387',
                        name: 'Bosnia and Herzegovina'
                    },
                    {
                        code: '+267',
                        name: 'Botswana'
                    },
                    {
                        code: '+55',
                        name: 'Brazil'
                    },
                    {
                        code: '+673',
                        name: 'Brunei'
                    },
                    {
                        code: '+359',
                        name: 'Bulgaria'
                    },
                    {
                        code: '+226',
                        name: 'Burkina Faso'
                    },
                    {
                        code: '+257',
                        name: 'Burundi'
                    },
                    {
                        code: '+855',
                        name: 'Cambodia'
                    },
                    {
                        code: '+237',
                        name: 'Cameroon'
                    },
                    {
                        code: '+1',
                        name: 'Canada'
                    },
                    {
                        code: '+238',
                        name: 'Cape Verde'
                    },
                    {
                        code: '+236',
                        name: 'Central African Republic'
                    },
                    {
                        code: '+235',
                        name: 'Chad'
                    },
                    {
                        code: '+56',
                        name: 'Chile'
                    },
                    {
                        code: '+86',
                        name: 'China'
                    },
                    {
                        code: '+57',
                        name: 'Colombia'
                    },
                    {
                        code: '+269',
                        name: 'Comoros'
                    },
                    {
                        code: '+243',
                        name: 'Congo, Democratic Republic of the'
                    },
                    {
                        code: '+242',
                        name: 'Congo, Republic of the'
                    },
                    {
                        code: '+506',
                        name: 'Costa Rica'
                    },
                    {
                        code: '+225',
                        name: 'Côte d\'Ivoire'
                    },
                    {
                        code: '+385',
                        name: 'Croatia'
                    },
                    {
                        code: '+53',
                        name: 'Cuba'
                    },
                    {
                        code: '+357',
                        name: 'Cyprus'
                    },
                    {
                        code: '+420',
                        name: 'Czech Republic'
                    },
                    {
                        code: '+45',
                        name: 'Denmark'
                    },
                    {
                        code: '+253',
                        name: 'Djibouti'
                    },
                    {
                        code: '+1-767',
                        name: 'Dominica'
                    },
                    {
                        code: '+1-809',
                        name: 'Dominican Republic'
                    },
                    {
                        code: '+1-829',
                        name: 'Dominican Republic'
                    },
                    {
                        code: '+1-849',
                        name: 'Dominican Republic'
                    },
                    {
                        code: '+670',
                        name: 'East Timor'
                    },
                    {
                        code: '+593',
                        name: 'Ecuador'
                    },
                    {
                        code: '+20',
                        name: 'Egypt'
                    },
                    {
                        code: '+503',
                        name: 'El Salvador'
                    },
                    {
                        code: '+240',
                        name: 'Equatorial Guinea'
                    },
                    {
                        code: '+291',
                        name: 'Eritrea'
                    },
                    {
                        code: '+372',
                        name: 'Estonia'
                    },
                    {
                        code: '+251',
                        name: 'Ethiopia'
                    },
                    {
                        code: '+500',
                        name: 'Falkland Islands'
                    },
                    {
                        code: '+298',
                        name: 'Faroe Islands'
                    },
                    {
                        code: '+679',
                        name: 'Fiji'
                    },
                    {
                        code: '+358',
                        name: 'Finland'
                    },
                    {
                        code: '+33',
                        name: 'France'
                    },
                    {
                        code: '+689',
                        name: 'French Polynesia'
                    },
                    {
                        code: '+241',
                        name: 'Gabon'
                    },
                    {
                        code: '+220',
                        name: 'Gambia'
                    },
                    {
                        code: '+995',
                        name: 'Georgia'
                    },
                    {
                        code: '+49',
                        name: 'Germany'
                    },
                    {
                        code: '+233',
                        name: 'Ghana'
                    },
                    {
                        code: '+350',
                        name: 'Gibraltar'
                    },
                    {
                        code: '+30',
                        name: 'Greece'
                    },
                    {
                        code: '+299',
                        name: 'Greenland'
                    },
                    {
                        code: '+1-473',
                        name: 'Grenada'
                    },
                    {
                        code: '+502',
                        name: 'Guatemala'
                    },
                    {
                        code: '+224',
                        name: 'Guinea'
                    },
                    {
                        code: '+245',
                        name: 'Guinea-Bissau'
                    },
                    {
                        code: '+592',
                        name: 'Guyana'
                    },
                    {
                        code: '+509',
                        name: 'Haiti'
                    },
                    {
                        code: '+504',
                        name: 'Honduras'
                    },
                    {
                        code: '+852',
                        name: 'Hong Kong'
                    },
                    {
                        code: '+36',
                        name: 'Hungary'
                    },
                    {
                        code: '+354',
                        name: 'Iceland'
                    },
                    {
                        code: '+91',
                        name: 'India'
                    },
                    {
                        code: '+62',
                        name: 'Indonesia'
                    },
                    {
                        code: '+98',
                        name: 'Iran'
                    },
                    {
                        code: '+964',
                        name: 'Iraq'
                    },
                    {
                        code: '+353',
                        name: 'Ireland'
                    },
                    {
                        code: '+972',
                        name: 'Israel'
                    },
                    {
                        code: '+39',
                        name: 'Italy'
                    },
                    {
                        code: '+1-876',
                        name: 'Jamaica'
                    },
                    {
                        code: '+81',
                        name: 'Japan'
                    },
                    {
                        code: '+962',
                        name: 'Jordan'
                    },
                    {
                        code: '+7',
                        name: 'Kazakhstan'
                    },
                    {
                        code: '+254',
                        name: 'Kenya'
                    },
                    {
                        code: '+686',
                        name: 'Kiribati'
                    },
                    {
                        code: '+850',
                        name: 'Korea, North'
                    },
                    {
                        code: '+82',
                        name: 'Korea, South'
                    },
                    {
                        code: '+965',
                        name: 'Kuwait'
                    },
                    {
                        code: '+996',
                        name: 'Kyrgyzstan'
                    },
                    {
                        code: '+856',
                        name: 'Laos'
                    },
                    {
                        code: '+371',
                        name: 'Latvia'
                    },
                    {
                        code: '+961',
                        name: 'Lebanon'
                    },
                    {
                        code: '+266',
                        name: 'Lesotho'
                    },
                    {
                        code: '+231',
                        name: 'Liberia'
                    },
                    {
                        code: '+218',
                        name: 'Libya'
                    },
                    {
                        code: '+423',
                        name: 'Liechtenstein'
                    },
                    {
                        code: '+370',
                        name: 'Lithuania'
                    },
                    {
                        code: '+352',
                        name: 'Luxembourg'
                    },
                    {
                        code: '+853',
                        name: 'Macau'
                    },
                    {
                        code: '+389',
                        name: 'Macedonia'
                    },
                    {
                        code: '+261',
                        name: 'Madagascar'
                    },
                    {
                        code: '+265',
                        name: 'Malawi'
                    },
                    {
                        code: '+60',
                        name: 'Malaysia'
                    },
                    {
                        code: '+960',
                        name: 'Maldives'
                    },
                    {
                        code: '+223',
                        name: 'Mali'
                    },
                    {
                        code: '+356',
                        name: 'Malta'
                    },
                    {
                        code: '+692',
                        name: 'Marshall Islands'
                    },
                    {
                        code: '+222',
                        name: 'Mauritania'
                    },
                    {
                        code: '+230',
                        name: 'Mauritius'
                    },
                    {
                        code: '+262',
                        name: 'Mayotte'
                    },
                    {
                        code: '+52',
                        name: 'Mexico'
                    },
                    {
                        code: '+691',
                        name: 'Micronesia'
                    },
                    {
                        code: '+373',
                        name: 'Moldova'
                    },
                    {
                        code: '+377',
                        name: 'Monaco'
                    },
                    {
                        code: '+976',
                        name: 'Mongolia'
                    },
                    {
                        code: '+382',
                        name: 'Montenegro'
                    },
                    {
                        code: '+212',
                        name: 'Morocco'
                    },
                    {
                        code: '+258',
                        name: 'Mozambique'
                    },
                    {
                        code: '+95',
                        name: 'Myanmar'
                    },
                    {
                        code: '+264',
                        name: 'Namibia'
                    },
                    {
                        code: '+674',
                        name: 'Nauru'
                    },
                    {
                        code: '+977',
                        name: 'Nepal'
                    },
                    {
                        code: '+31',
                        name: 'Netherlands'
                    },
                    {
                        code: '+599',
                        name: 'Netherlands Antilles'
                    },
                    {
                        code: '+687',
                        name: 'New Caledonia'
                    },
                    {
                        code: '+64',
                        name: 'New Zealand'
                    },
                    {
                        code: '+505',
                        name: 'Nicaragua'
                    },
                    {
                        code: '+227',
                        name: 'Niger'
                    },
                    {
                        code: '+234',
                        name: 'Nigeria'
                    },
                    {
                        code: '+683',
                        name: 'Niue'
                    },
                    {
                        code: '+672',
                        name: 'Norfolk Island'
                    },
                    {
                        code: '+47',
                        name: 'Norway'
                    },
                    {
                        code: '+968',
                        name: 'Oman'
                    },
                    {
                        code: '+92',
                        name: 'Pakistan'
                    },
                    {
                        code: '+680',
                        name: 'Palau'
                    },
                    {
                        code: '+970',
                        name: 'Palestine'
                    },
                    {
                        code: '+507',
                        name: 'Panama'
                    },
                    {
                        code: '+675',
                        name: 'Papua New Guinea'
                    },
                    {
                        code: '+595',
                        name: 'Paraguay'
                    },
                    {
                        code: '+51',
                        name: 'Peru'
                    },
                    {
                        code: '+63',
                        name: 'Philippines'
                    },
                    {
                        code: '+48',
                        name: 'Poland'
                    },
                    {
                        code: '+351',
                        name: 'Portugal'
                    },
                    {
                        code: '+1-787',
                        name: 'Puerto Rico'
                    },
                    {
                        code: '+1-939',
                        name: 'Puerto Rico'
                    },
                    {
                        code: '+974',
                        name: 'Qatar'
                    },
                    {
                        code: '+40',
                        name: 'Romania'
                    },
                    {
                        code: '+7',
                        name: 'Russia'
                    },
                    {
                        code: '+250',
                        name: 'Rwanda'
                    },
                    {
                        code: '+290',
                        name: 'Saint Helena'
                    },
                    {
                        code: '+1-869',
                        name: 'Saint Kitts and Nevis'
                    },
                    {
                        code: '+1-758',
                        name: 'Saint Lucia'
                    },
                    {
                        code: '+508',
                        name: 'Saint Pierre and Miquelon'
                    },
                    {
                        code: '+1-784',
                        name: 'Saint Vincent and the Grenadines'
                    },
                    {
                        code: '+685',
                        name: 'Samoa'
                    },
                    {
                        code: '+378',
                        name: 'San Marino'
                    },
                    {
                        code: '+239',
                        name: 'Sao Tome and Principe'
                    },
                    {
                        code: '+966',
                        name: 'Saudi Arabia'
                    },
                    {
                        code: '+221',
                        name: 'Senegal'
                    },
                    {
                        code: '+381',
                        name: 'Serbia'
                    },
                    {
                        code: '+248',
                        name: 'Seychelles'
                    },
                    {
                        code: '+232',
                        name: 'Sierra Leone'
                    },
                    {
                        code: '+65',
                        name: 'Singapore'
                    },
                    {
                        code: '+421',
                        name: 'Slovakia'
                    },
                    {
                        code: '+386',
                        name: 'Slovenia'
                    },
                    {
                        code: '+677',
                        name: 'Solomon Islands'
                    },
                    {
                        code: '+252',
                        name: 'Somalia'
                    },
                    {
                        code: '+27',
                        name: 'South Africa'
                    },
                    {
                        code: '+34',
                        name: 'Spain'
                    },
                    {
                        code: '+94',
                        name: 'Sri Lanka'
                    },
                    {
                        code: '+249',
                        name: 'Sudan'
                    },
                    {
                        code: '+597',
                        name: 'Suriname'
                    },
                    {
                        code: '+268',
                        name: 'Swaziland'
                    },
                    {
                        code: '+46',
                        name: 'Sweden'
                    },
                    {
                        code: '+41',
                        name: 'Switzerland'
                    },
                    {
                        code: '+963',
                        name: 'Syria'
                    },
                    {
                        code: '+886',
                        name: 'Taiwan'
                    },
                    {
                        code: '+992',
                        name: 'Tajikistan'
                    },
                    {
                        code: '+255',
                        name: 'Tanzania'
                    },
                    {
                        code: '+66',
                        name: 'Thailand'
                    },
                    {
                        code: '+228',
                        name: 'Togo'
                    },
                    {
                        code: '+690',
                        name: 'Tokelau'
                    },
                    {
                        code: '+676',
                        name: 'Tonga'
                    },
                    {
                        code: '+1-868',
                        name: 'Trinidad and Tobago'
                    },
                    {
                        code: '+216',
                        name: 'Tunisia'
                    },
                    {
                        code: '+90',
                        name: 'Turkey'
                    },
                    {
                        code: '+993',
                        name: 'Turkmenistan'
                    },
                    {
                        code: '+688',
                        name: 'Tuvalu'
                    },
                    {
                        code: '+256',
                        name: 'Uganda'
                    },
                    {
                        code: '+380',
                        name: 'Ukraine'
                    },
                    {
                        code: '+971',
                        name: 'United Arab Emirates'
                    },
                    {
                        code: '+44',
                        name: 'United Kingdom'
                    },
                    {
                        code: '+1',
                        name: 'United States'
                    },
                    {
                        code: '+598',
                        name: 'Uruguay'
                    },
                    {
                        code: '+998',
                        name: 'Uzbekistan'
                    },
                    {
                        code: '+678',
                        name: 'Vanuatu'
                    },
                    {
                        code: '+379',
                        name: 'Vatican City'
                    },
                    {
                        code: '+58',
                        name: 'Venezuela'
                    },
                    {
                        code: '+84',
                        name: 'Vietnam'
                    },
                    {
                        code: '+681',
                        name: 'Wallis and Futuna'
                    },
                    {
                        code: '+967',
                        name: 'Yemen'
                    },
                    {
                        code: '+260',
                        name: 'Zambia'
                    },
                    {
                        code: '+263',
                        name: 'Zimbabwe'
                    }
                    // Add more countries if needed
                ];

                countries.forEach(country => {
                    const option = document.createElement('option');
                    option.value = country.code;
                    option.textContent = `${country.name} (${country.code})`;
                    this.appendChild(option);
                });
            }
        });
    </script>
</body>

</html>