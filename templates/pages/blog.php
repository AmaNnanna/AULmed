<!-- offcanvas-area -->
<div class="offcanvas-menu">
    <span class="menu-close"><i class="fas fa-times"></i></span>
    <form role="search" method="get" id="searchform" class="searchform" action="http://wordpress.zcube.in/xconsulta/">
        <input type="text" name="s" id="search" value="" placeholder="Search" />
        <button><i class="fa fa-search"></i></button>
    </form>


    <div id="cssmenu3" class="menu-one-page-menu-container">
        <ul id="menu-one-page-menu-2" class="menu">
            <li class="menu-item menu-item-type-custom
                        menu-item-object-custom"><a href="index.html">Home</a></li>
            <li class="menu-item menu-item-type-custom
                        menu-item-object-custom"><a href="about.html">About Us</a></li>
            <li class="menu-item menu-item-type-custom
                        menu-item-object-custom"><a href="services.html">Services</a></li>
            <li class="menu-item menu-item-type-custom
                        menu-item-object-custom"><a href="pricing.html">Pricing
                </a></li>
            <li class="menu-item menu-item-type-custom
                        menu-item-object-custom"><a href="team.html">Team </a></li>
            <li class="menu-item menu-item-type-custom
                        menu-item-object-custom"><a href="projects.html">Gallery
                    Study</a></li>
            <li class="menu-item menu-item-type-custom
                        menu-item-object-custom"><a href="blog.html">Blog</a></li>
            <li class="menu-item menu-item-type-custom
                        menu-item-object-custom"><a href="contact.html">Contact</a></li>
        </ul>
    </div>

    <div id="cssmenu2" class="menu-one-page-menu-container">
        <ul id="menu-one-page-menu-1" class="menu">
            <li class="menu-item menu-item-type-custom
                        menu-item-object-custom"><a href="#home"><span>+8 12
                        3456897</span></a></li>
            <li class="menu-item menu-item-type-custom
                        menu-item-object-custom"><a href="#howitwork"><span>info@example.com</span></a></li>
        </ul>
    </div>
</div>
<div class="offcanvas-overly"></div>
<!-- offcanvas-end -->
<!-- main-area -->
<main>

    <!-- search-popup -->
    <div class="modal fade bs-example-modal-lg search-bg popup1" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content search-popup">
                <div class="text-center">
                    <a href="#" class="close2" data-dismiss="modal" aria-label="Close">× close</a>
                </div>
                <div class="row search-outer">
                    <div class="col-md-11"><input type="text" placeholder="Search for products..." /></div>
                    <div class="col-md-1 text-right"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /search-popup -->
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(<?= $assets ?>/img/testimonial/test-bg.png)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <h2>Our Blog</h2>
                            <div class="breadcrumb-wrap">

                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
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
    <section class="inner-blog b-details-p">
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="blog-details-wrap">
                        <div class="related__post mt-45 mb-85">
                            <div class="post-title">
                                <h4>Our Recents Blogs</h4>
                            </div>
                            <div class="row">

                                <?php while ($BlogPost = mysqli_fetch_object($BlogPosts)) : ?>
                                    <div class="col-md-4">
                                        <div class="related-post-wrap
                                                mb-30">
                                            <div class="post-thumb">
                                                <img src="<?= $BlogPost->firstImage ?>">
                                            </div>
                                            <div class=" rp__content">
                                                <h3><a href="/pages/<?= $BlogPost->id ?>/blog-details"><?= $BlogPost->heading ?></a>
                                                </h3>
                                                <p class="pb-30"><?= $BlogPost->shortDescription ?>
                                                </p>
                                                <div class="meta-info">
                                                    <ul class="pb-0">
                                                        <li><i class="far fa-user"></i> <?= $BlogPost->postCreator ?> </li>
                                                        <li><i class="fal fa-calendar-alt"></i><?= date("M. Y", strtotime($BlogPost->postDate))  ?></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-blog-end -->
</main>
<!-- main-area-end -->