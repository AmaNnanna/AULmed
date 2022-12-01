<!-- breadcrumb-area -->
<section class="breadcrumb-area d-flex align-items-center" style="background-image:url(<?= $assets ?>/img/testimonial/test-bg.png)">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12">
                <div class="breadcrumb-wrap text-left">
                    <div class="breadcrumb-title">
                        <h2> Campaigns </h2>
                        <div class="breadcrumb-wrap">

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Campaigns</li>
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

<!-- eventes-area -->
<section id="eventes" class="eventes-area fix pt-120 pb-120" style=" background-image: url(<?= $assets ?>/img/bg/event-bg-aliments.png); background-repeat: no-repeat; background-position: center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title center-align text-center mb-50">
                    <h5>Our Campaigns</h5>
                    <h2>
                        Upcoming Campaigns
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <?php while ($Campaign = mysqli_fetch_object($Campaigns)) : ?>
                <div class="col-lg-6 col-md-12">
                    <div class="eventes-box">
                        <div class="date-box">
                            <h3><?= date("j", strtotime($Campaign->startDate)) ?></h3>
                            <h5><?= date("F, Y", strtotime($Campaign->startDate)) ?></h5>
                        </div>
                        <div class="text">
                            <h5><a href="/pages/<?= $Campaign->id ?>/campaign-details"><?= $Campaign->campaignTopic ?></a></h5>
                            <ul>
                                <li><i class="fal fa-clock"></i> <?= date("g:ia", strtotime($Campaign->startDate)) ?></li>
                                <!-- <li><i class="icon fal fa-map-marker-check"></i> Mumbai, India</li> -->
                            </ul>
                            <p><?= $Campaign->campaignDescription ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<!-- eventes-area-end -->