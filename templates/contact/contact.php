<!--==============================
    Breadcumb
    ============================== -->
<div class="breadcumb-wrapper" data-bg-src="url(assets/images/contact/contact-hero.webp)">
    <!-- bg animated image/ -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Contact</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="./Home">Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

<!--==============================
        Contact Area  
    ==============================-->
<div class="contact-area">
    <div class="container container2">
        <div class="row justify-content-center align-items-top">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-info" style="margin-top: 0;">
                            <div class="contact-info_icon">
                                <img loading="lazy" src="assets/img/icon/contact-envelope.svg" alt="icon">
                            </div>
                            <div class="media-body">
                                <h4 class="contact-info_title">Contacts Info</h4>
                                <span class="contact-info_text">Phone Number: <?php echo $system_ph_num; ?></span>
                                <br>
                                <span class="contact-info_text"><?php echo $system_email; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="contact-info">
                            <div class="contact-info_icon">
                                <img loading="lazy" src="assets/img/icon/contact-home.svg" alt="icon">
                            </div>
                            <div class="media-body">
                                <h4 class="contact-info_title">Location</h4>
                                <span class="contact-info_text">
                                    <?php echo $system_address; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="contact-info">
                            <div class="contact-info_icon">
                                <img loading="lazy" src="assets/img/icon/contact-calendar.svg" alt="icon">
                            </div>
                            <div class="media-body">
                                <h4 class="contact-info_title">Working Hour</h4>
                                <span class="contact-info_text">Mon-Sat: 10:00AM - 6:30PM</span>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6 contact-quick-con">
                <div class="contact-form-wrap ms-xl-4 mt-40 mt-lg-0">
                    <div class="title-area">
                        <span class="sub-title">TALK TO US</span>
                        <h2 class="sec-title">Do you have any question?</h2>
                    </div>
                    <div>
                        <div class="row p-1">
                            <div class="col-lg-12 p-1">
                                <div class="form-group">
                                    <input type="text" class="form-control style-border" name="name1" id="name1" placeholder="Your Name" required>
                                    <label data-default-mssg="" class="input_alert name1-inp-alert"></label>
                                </div>
                            </div>
                            <div class="col-lg-4 p-1">
                                
                                <select name="isd_code1" id="isd_code1" class="form-select style-border" required>
                                    <option value="" disabled selected hidden>Country code 
                                    </option>
                                </select>
                            </div>
                            <div class="col-lg-8 p-1">
                                <div class="form-group">
                                    <input type="number" class="form-control style-border" name="phone1" id="phone1" placeholder="Phone Number" required>
                                    <label data-default-mssg="" class="input_alert phone1-inp-alert"></label>
                                </div>
                            </div>
                            <div class="col-lg-6 p-1">
                                <div class="form-group">
                                    <input type="email" class="form-control style-border" name="email1" id="email1" placeholder="Email Address" required>
                                    <label data-default-mssg="" class="input_alert email1-inp-alert"></label>
                                </div>
                            </div>
                            <div class="col-lg-6 p-1">
                                <div class="form-group">
                                    <select name="category1" id="category1" class="form-select style-border" required>
                                        <option value="" disabled selected hidden>Category</option>
                                        <option value="General Inquiry">General Inquiry</option>
                                        <option value="Job Opportunity">Job Opportunity</option>
                                        <option value="Feedback">Feedback</option>
                                        <option value="Plots">Plots</option>
                                        <option value="Villa">Villa</option>
                                    </select>
                                    <label data-default-mssg="" class="input_alert category1-inp-alert"></label>
                                </div>
                            </div>
                            <div class="col-lg-12 p-1">
                                <div class="form-group">
                                    <textarea class="form-control style-border" name="message1" id="message1" cols="30" rows="4" placeholder="Your message" required></textarea>
                                    <label data-default-mssg="" class="input_alert message1-inp-alert"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-btn col-12 text-center">
                            <button class="btn w-100 style4" onclick="quick_contact1()">Submit Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="container">
    <div class="contact-map py-3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!o1m12!1m3!1d1549.3983416194774!2d88.51578868365652!3d22.537511944063926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a020b759875957f%3A0x1893a441ee5b2bff!2sBeonta%20II%20Gram%20Panchayet%20Office!5e0!3m2!1sen!2sin!4v1722578590636!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>


