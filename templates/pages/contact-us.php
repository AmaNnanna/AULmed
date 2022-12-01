<!-- breadcrumb-area -->
<section class="breadcrumb-area d-flex align-items-center" style="background-image:url(<?= $assets ?>/img/testimonial/test-bg.png)">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12">
                <div class="breadcrumb-wrap text-left">
                    <div class="breadcrumb-title">
                        <h2>Contact Us</h2>
                        <div class="breadcrumb-wrap">

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- services-area -->
<section id="services" class="services-area pt-120 pb-90 fix" style=" background-image: url(<?= $assets ?>/img/bg/blog-bg-aliments.png); background-repeat: no-repeat; background-position: center center;background-attachment: fixed;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title center-align text-center mb-50">
                    <h5>Contact Us</h5>
                    <h2>
                        Get In Touch With Us
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="services-box mt-0 mb-30 text-center">
                    <div class="services-icon">
                        <img src="<?= $assets ?>/img/icon/cn-icon1.png" alt="icon01">
                    </div>
                    <div class="services-content2">
                        <h5>Email Address</h5>
                        <p>contact@aulmed.org <br /> info@aulmed.org </p>
                    </div>
                </div>

                <div class="services-box mt-0 mb-30 text-center">
                    <div class="services-icon">
                        <img src="<?= $assets ?>/img/icon/cn-icon3.png" alt="icon01">
                    </div>
                    <div class="services-content2">
                        <h5>Postal Address</h5>
                        <p>531 Northern Parade, Hilsea <br /> Portsmouth Hampshire.</p>
                    </div>
                </div>

                <div class="services-box mt-0 mb-30 text-center">
                    <div class="services-icon">
                        <img src="<?= $assets ?>/img/icon/cn-icon2.png" alt="icon01">
                    </div>
                    <div class="services-content2">
                        <h5>Phone Number</h5>
                        <p>0776-322-3809</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-12">

                <form action="/contact_page" method="POST" class="contact-form ">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-field p-relative c-name mb-20">
                                <input type="text" id="firstn" name="fullName" placeholder="Your Full Name" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="contact-field p-relative c-subject mb-20">
                                <input type="email" id="email" name="email" placeholder="Your Eamil Address" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="contact-field p-relative c-message mb-45">
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Write Us a Message..."></textarea>
                            </div>
                            <div class="slider-btn">
                                <button type="submit" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- services-area-end -->