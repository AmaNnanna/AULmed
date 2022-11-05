<?php

use Apps\Template;

//Create Admin Login Page
$Route->add("/admin/pages/login", function() {
    
    $Core = new Apps\Core;
    $Template = new Apps\Template();

    $Template->assign("haspage", true);
    $Template->assign("menukey", "admin.login");
    $Template->assign("title", "Admin");

    $Template->render("admin.pages.login");

}, 'GET');

$Route->add("/admin", function() {
    
    $Core = new Apps\Core;
    $Template = new Apps\Template();

    $Template->assign("haspage", true);
    $Template->assign("menukey", "admin.login");
    $Template->assign("title", "Admin");

    $Template->render("admin.pages.login");

}, 'GET');

//Get All Pending Reviews
$Route->add("/admin/pages/all-reviews", function() {
    
    $Core = new Apps\Core;
    $Template = new Apps\Template(auth_url);

    $Template->assign("haspage", true);
    $Template->assign("menukey", "admin.all-reviews");
    $Template->assign("title", "Admin");

    $Template->addheader("admin.layouts.header");
    $Template->addfooter("admin.layouts.footer");

    $reviewSql = "SELECT * FROM pending_testimonial ORDER BY id DESC";
    $Reviews = mysqli_query($Core->dbCon, $reviewSql);
    $Template->assign("Reviews", $Reviews);

    $Template->render("admin.pages.all-reviews");

}, 'GET');

//Other Admin Pages
$Route->add("/admin/pages/{shortname}", function($shortname) {
    
    $Core = new Apps\Core;
    $Template = new Apps\Template(auth_url);

    $Template->addheader("admin.layouts.header");
    $Template->addfooter("admin.layouts.footer");

    $Template->assign("haspage", true);
    $Template->assign("menukey", "$shortname");
    
    if ($shortname == "admin-home") {
        $Template->assign("title", "Admin Homepage");
    } elseif ($shortname == "new-blog") {
        $Template->assign("title", "Post New Blog");
    } else {
        $Template->assign("title", "AULmed Admin Page");
    }

    $Template->render("admin.pages.{$shortname}");

}, 'GET');

//Create Admin Login
$Route->add("/pages/admin/{id}/approved", function($id) {
    
    $Core = new Apps\Core;
    $Template = new Apps\Template(auth_url);

    $updateSql = "UPDATE `pending_testimonial` SET `approved`='1' WHERE `id` = '$id'";
    $updated = mysqli_query($Core->dbCon, $updateSql);


    if ($updated) {
        $Template->setError("This Review have been approved", "success", "/admin/pages/all-reviews");
        $Template->redirect("/admin/pages/all-reviews");
    }

}, 'GET');

//Create Admin Login
$Route->add("/admin_login", function() {
    
    $Core = new Apps\Core;
    $Template = new Apps\Template();

    $data = $Core->data;

    $userName = $data->userName;
    $password = $data->password;

    $admin = $Core->AdminLogin($userName, $password);

    if ($admin->id) {
        $Template->authorize($admin->id);
        $Template->redirect("/admin/pages/admin-home");
    }

}, 'POST');

//Post Blog by Admin
$Route->add("/new_blog", function () {
    $Core = new Apps\Core;
    $Template = new Apps\Template;

    $data = $Core->post($_POST);

    $heading = $data->heading;
    $postCreator = $data->postCreator;
    $shortDescription = $data->shortDescription;

    $firstContent = $data->firstContent;
    $secondContent = $data->secondContent;
    $thirdContent = $data->thirdContent;

    $blockQuote = $data->blockQuote;
    $quoteAuthor = $data->quoteAuthor;
    $videoLink = $data->videoLink;

    $secondImageHeading = $data->secondImageHeading;
    $thirdImageHeading = $data->thirdImageHeading;

    $firstImage = "";
    $secondImage = "";
    $thirdImage = "";

    //Uploading Blog Pictures//
    //First Image
    $first_image_path_to_db = "";

    $Uploader = new \Verot\Upload\Upload($_FILES['firstImage']);

    if ($Uploader->uploaded) {
        $name = md5(time() . mt_rand(1,10000));
        $Uploader->file_new_name_body = $name;
        $Uploader->process("./_store/blog_posts/");

        if ($Uploader->processed) {
            $first_image_path_to_db = $Uploader->file_dst_pathname;
        } else {
        }
    }

    $firstImage = $first_image_path_to_db;

    //Second Image
    $second_image_path_to_db = "";

    $Uploader = new \Verot\Upload\Upload($_FILES['secondImage']);

    if ($Uploader->uploaded) {
        $name = md5(time() . mt_rand(1,10000));
        $Uploader->file_new_name_body = $name;
        $Uploader->process("./_store/blog_posts/");

        if ($Uploader->processed) {
            $second_image_path_to_db = $Uploader->file_dst_pathname;
        } else {
        }
    }

    $secondImage = $second_image_path_to_db;

    //Third Image
    $third_image_path_to_db = "";

    $Uploader = new \Verot\Upload\Upload($_FILES['thirdImage']);

    if ($Uploader->uploaded) {
        $name = md5(time() . mt_rand(1,10000));
        $Uploader->file_new_name_body = $name;
        $Uploader->process("./_store/blog_posts/");

        if ($Uploader->processed) {
            $third_image_path_to_db = $Uploader->file_dst_pathname;
        } else {
        }
    }

    $thirdImage = $third_image_path_to_db;
    //Uploading Blog Pictures Ends//

    $newBlog = (int)$Core->CreateNewBlog($heading, $postCreator, $shortDescription, $firstContent, $secondContent, $thirdContent, $blockQuote, $quoteAuthor, $videoLink, $secondImageHeading, $thirdImageHeading, $firstImage, $secondImage, $thirdImage);

    if($newBlog) {
        $Template->setError ("Your Blog was posted successfully", "success", "/admin/pages/admin-home");
        $Template->redirect ("/admin/pages/admin-home");
    }

    $Template->setError ("Something went wrong, and your blog didn't post", "warning", "/admin/pages/admin-home");
    $Template->redirect ("/admin/pages/admin-home");

}, 'POST');
//Post Blog by Admin Ends

//Post Campaign by Admin
$Route->add("/new_campaign", function () {
    $Core = new Apps\Core;
    $Template = new Apps\Template;

    $data = $Core->post($_POST);

    $campaignTopic = $data->campaignTopic;
    $campaignDescription = $data->campaignDescription;
    $campaignDetails = $data->campaignDetails;
    $startDate = $data->startDate;
    $endDate = $data->endDate;

    $campaignImage = "";

    //Uploading Campaign Pictures
    $campaignImage_path_to_db = "";

    $Uploader = new \Verot\Upload\Upload($_FILES['campaignImage']);

    if ($Uploader->uploaded) {
        $name = md5(time() . mt_rand(1,10000));
        $Uploader->file_new_name_body = $name;
        $Uploader->process("./_store/campaigns/");

        if ($Uploader->processed) {
            $campaignImage_path_to_db = $Uploader->file_dst_pathname;
        } else {
        }
    }

    $campaignImage = $campaignImage_path_to_db;


    $newCampaign = (int)$Core->CreateNewCampaign($campaignTopic, $campaignDescription, $campaignDetails, $startDate, $endDate, $campaignImage);

    if($newCampaign) {
        $Template->setError ("Your Campaign was posted successfully", "success", "/admin/pages/admin-home");
        $Template->redirect ("/admin/pages/admin-home");
    }

    $Template->setError ("Something went wrong, and your new campmaign didn't post", "warning", "/admin/pages/admin-home");
    $Template->redirect ("/admin/pages/admin-home");

}, 'POST');
//Post Campaign by Admin Ends

