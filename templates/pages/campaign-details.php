<!-- main-area -->
<main>
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(<?= $assets ?>/img/testimonial/test-bg.png)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <h2>Campaign Detail</h2>
                            <div class="breadcrumb-wrap">

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Campaign
                                            Detail</li>
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

    <!-- inner-blog -->
    <section class="inner-blog b-details-p pt-120 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-wrap">
                        <div class="details__content pb-30">
                            <div class="bsingle__post-thumb mb-30">
                                <img src="<?= $CampaignDetails->campaignImage ?>" alt="Campaign Image">
                            </div>
                            <h2><?= $CampaignDetails->campaignTopic ?></h2>
                            <div class="meta-info">
                                <ul>
                                    <li style="color: #E68366;"><i class="fal fa-calendar-alt"></i><?= date("l, jS M, Y. g:ia", strtotime($CampaignDetails->startDate)) ?> to <?= date("l, jS M, Y. g:ia", strtotime($CampaignDetails->endDate)) ?></li>
                                </ul>
                            </div>
                            <div><?= $CampaignDetails->campaignDetails ?></div>

                            <a class="btn ss-btn mt-30" href="/pages/campaigns">Go Back to Campaigns</a>
                        </div>
                    </div>

                    <section id="custom_html-5" class="widget_text widget widget_custom_html mb-50">
                        <h2 class="widget-title">Share</h2>
                        <div class="textwidget custom-html-widget">
                            <div class="widget-social">
                                <a href="http://www.facebook.com/sharer.php?u=https://aulmed.org/pages/<?= $CampaignDetails->id ?>/campaign-details&text=<?= $CampaignDetails->campaignTopic ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/share?url=https://aulmed.org/pages/1/campaign-details&text=<?= $CampaignDetails->campaignTopic ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="http://www.linkedin.com/shareArticle?mini=true&url=https://aulmed.org/pages/1/campaign-details&text=<?= $CampaignDetails->campaignTopic ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                                <a href="mailto:?Subject=<?= $CampaignDetails->campaignTopic ?>&Body=<?= $CampaignDetails->campaignDetails ?> https://aulmed.org/pages/1/campaign-details"><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                    </section>
                </div>


                <!-- #right side -->
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <aside class="sidebar-widget">
                        <section class="widget widget_search">
                            <div class="course-widget-price">
                                <h2 class="widget-title">Event Features</h2>
                                <ul>
                                    <li>
                                        <i class="fal fa-calendar-alt"></i>
                                        <span>Start Date</span>
                                        <span class="time">May 29, 2016</span>
                                    </li>
                                    <li>
                                        <i class="fal fa-clock"></i>
                                        <span>Time</span>
                                        <span class="time">08:30am</span>
                                    </li>
                                    <li>
                                        <i class="fal fa-loveseat"></i>
                                        <span>Seat</span>
                                        <span class="time">220</span>
                                    </li>
                                    <li>
                                        <i class="icon fal
                                                    fa-map-marker-check"></i>
                                        <span>Place</span>
                                        <span class="time">Ontario,CA</span>
                                    </li>
                                    <li>
                                        <i class="fal fa-plus-hexagon"></i>
                                        <span>Organizer</span>
                                        <span class="time">Roboto Dos</span>
                                    </li>
                                    <li>
                                        <i class="icon fal fa-phone"></i>
                                        <span>Phone</span>
                                        <span class="time">+1 (705) 210
                                            1786</span>
                                    </li>
                                    <li>
                                        <i class="icon fal fa-envelope"></i>
                                        <span>Email</span>
                                        <span class="time">email@example.com</span>
                                    </li>
                                    <li>
                                        <i class="fal fa-user"></i>
                                        <span>Website</span>
                                        <span class="time">www.example.com</span>
                                    </li>
                                </ul>

                                <a class="btn ss-btn mt-30" href="#">Buy
                                    Ticket</a>
                            </div>
                        </section>

                        <section class="widget widget_search">
                            <div class="course-widget-price">
                                <h2 class="widget-title">Event Features</h2>
                                <ul>
                                    <li>
                                        <i class="fal fa-calendar-alt"></i>
                                        <span>Start Date</span>
                                        <span class="time">May 29, 2016</span>
                                    </li>
                                    <li>
                                        <i class="fal fa-clock"></i>
                                        <span>Time</span>
                                        <span class="time">08:30am</span>
                                    </li>
                                    <li>
                                        <i class="fal fa-loveseat"></i>
                                        <span>Seat</span>
                                        <span class="time">220</span>
                                    </li>
                                    <li>
                                        <i class="icon fal
                                                    fa-map-marker-check"></i>
                                        <span>Place</span>
                                        <span class="time">Ontario,CA</span>
                                    </li>
                                    <li>
                                        <i class="fal fa-plus-hexagon"></i>
                                        <span>Organizer</span>
                                        <span class="time">Roboto Dos</span>
                                    </li>
                                    <li>
                                        <i class="icon fal fa-phone"></i>
                                        <span>Phone</span>
                                        <span class="time">+1 (705) 210
                                            1786</span>
                                    </li>
                                    <li>
                                        <i class="icon fal fa-envelope"></i>
                                        <span>Email</span>
                                        <span class="time">email@example.com</span>
                                    </li>
                                    <li>
                                        <i class="fal fa-user"></i>
                                        <span>Website</span>
                                        <span class="time">www.example.com</span>
                                    </li>
                                </ul>

                                <a class="btn ss-btn mt-30" href="#">Buy
                                    Ticket</a>
                            </div>
                        </section>
                    </aside>
                </div>
                <!-- #right side end -->
            </div>
        </div>
    </section>
    <!-- inner-blog-end -->