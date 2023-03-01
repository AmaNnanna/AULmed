<!-- breadcrumb-area -->
<section class="breadcrumb-area d-flex align-items-center" style="background-image:url(<?= $assets ?>/img/testimonial/test-bg.png)">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12">
                <div class="breadcrumb-wrap text-left">
                    <div class="breadcrumb-title">
                        <h2>Health Topics</h2>
                        <div class="breadcrumb-wrap">

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Online Classes</li>
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

<!-- video-area -->
<section class="shop-area pt-120 pb-120 p-relative " style=" background-image: url(<?= $assets ?>/img/bg/blog-bg-aliments.png); background-repeat: no-repeat; background-position: center center;background-attachment: fixed;">
    <div class="container">
        <div class="row align-items-center">

            <?php while ($VideoTutorial = mysqli_fetch_object($VideoTutorials)) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="product couress-box mb-40">
                        <div class="product__img">

                            <div class="video-img wow fadeInRight animated" data-animation="fadeInDown animated" data-delay=".  2s" style="background-image:url(<?= $VideoTutorial->image_thumbnail ?>); background-repeat: no-repeat; background-position: center;">
                                <a href="<?= $VideoTutorial->video_link ?>" class="video-i popup-video"> <img src="<?= $VideoTutorial->image_thumbnail ?>" alt="img" class="active-icon"></a>
                            </div>

                        </div>
                        <div class="product__content pt-30">
                            <ul class="course-meta course-meta2 review style2 clearfix mb-30">
                                <li class="author">
                                    <div class="text">
                                        <ul>
                                            <li><?= $VideoTutorial->creator_name ?></li>
                                            <li><?= $VideoTutorial->creator_designation ?></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <h4 class="pro-title"><a href="courses-details.html"><?= $VideoTutorial->title ?></a></h4>
                            <p><?= $VideoTutorial->description ?></p>
                            <ul class="course-meta desc">
                                <li>
                                    <h6><?= $VideoTutorial->video_source ?></h6>
                                    <span>Course Source</span>
                                </li>
                                <li>
                                    <h6><span class="course-time"><?= $VideoTutorial->video_duration ?></span></h6>
                                    <span> Course Duration</span>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

        </div>
    </div>
</section>
<!-- video-area-end -->