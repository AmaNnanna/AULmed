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

                        <section id="categories-1" class="widget
                                    widget_categories">
                            <h2 class="widget-title">Categories</h2>
                            <ul>
                                <li class="cat-item cat-item-16"><a href="#">Branding</a> (4)</li>
                                <li class="cat-item cat-item-23"><a href="#">Corporat</a> (3)</li>
                                <li class="cat-item cat-item-18"><a href="#">Design</a> (3)</li>
                                <li class="cat-item cat-item-22"><a href="#">Gallery</a> (3)</li>
                            </ul>
                        </section>
                        <section id="tag_cloud-1" class="widget
                                    widget_tag_cloud">
                            <h2 class="widget-title">Tag</h2>
                            <div class="tagcloud">
                                <a href="#" class="tag-cloud-link
                                            tag-link-28 tag-link-position-1" style="font-size: 8pt;" aria-label="app (1 item)">app</a>
                                <a href="#" class="tag-cloud-link
                                            tag-link-17 tag-link-position-2" style="font-size: 8pt;" aria-label="Branding (1 item)">Branding</a>
                                <a href="#" class="tag-cloud-link
                                            tag-link-20 tag-link-position-3" style="font-size: 8pt;" aria-label="corporat (1 item)">corporat</a>
                                <a href="#" class="tag-cloud-link
                                            tag-link-24 tag-link-position-4" style="font-size: 16.4pt;" aria-label="Design (2 items)">Design</a>
                                <a href="#" class="tag-cloud-link
                                            tag-link-25 tag-link-position-5" style="font-size: 22pt;" aria-label="gallery (3 items)">gallery</a>
                                <a href="#" class="tag-cloud-link
                                            tag-link-26 tag-link-position-6" style="font-size: 8pt;" aria-label="video (1 item)">video</a>
                                <a href="#" class="tag-cloud-link
                                            tag-link-29 tag-link-position-7" style="font-size: 16.4pt;" aria-label="web design (2 items)">web
                                    design</a>
                            </div>
                        </section>

                    </aside>
                </div>
                <!-- #right side end -->
            </div>
        </div>
    </section>
    <!-- inner-blog-end -->



</main>
<!-- main-area-end -->