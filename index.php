    
<?php

define('DOT', '.');
require_once(DOT . "/bootstrap.php");
require_once(DOT . "/_public/adminroutes.php");
require_once(DOT . "/_public/visitorsroutes.php");

$Route = new Apps\Route;

//Home page//
$Route->add('/', function () {

    $Core = new Apps\Core;
    $Template = new Apps\Template;

    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");

    $Template->assign("title", "");
    $Template->assign("haspage", false);
    $Template->assign("menukey", "home");

    $sqlBlog = "SELECT * FROM blog_posts ORDER BY id DESC";
    $BlogPosts = mysqli_query($Core->dbCon, $sqlBlog);
    $Template->assign("BlogPosts", $BlogPosts);

    $sqlCampaign = "SELECT * FROM campaigns ORDER BY id DESC";
    $Campaigns = mysqli_query($Core->dbCon, $sqlCampaign);
    $Template->assign("Campaigns", $Campaigns);

    $sqlReview = "SELECT * FROM `pending_testimonial` ORDER BY RAND() LIMIT 3";
    $Reviews = mysqli_query($Core->dbCon, $sqlReview);
    $Template->assign("Reviews", $Reviews);

    $Template->render("home");
}, 'GET');

//Get Blog's Pages//
//Get All Blogs
$Route->add("/pages/blog", function () {

    $Core = new Apps\Core;
    $Template = new Apps\Template;

    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");

    $Template->assign("haspage", true);
    $Template->assign("menukey", "pages.blog");
    $Template->assign("title", "Blogs");

    $sql = "SELECT * FROM blog_posts ORDER BY id DESC";
    $BlogPosts = mysqli_query($Core->dbCon, $sql);
    $Template->assign("BlogPosts", $BlogPosts);

    $Template->render("pages.blog");
}, 'GET');

//Get Details of Each Blog
$Route->add("/pages/{id}/blog-details", function ($id) {

    $Core = new Apps\Core;
    $Template = new Apps\Template;

    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");

    $Template->assign("haspage", true);
    $Template->assign("menukey", "pages.blog-details");
    $Template->assign("title", "Blog Details");

    $sql = "SELECT * FROM blog_posts WHERE id='$id'";
    $full_blog = mysqli_query($Core->dbCon, $sql);
    $BlogDetails = mysqli_fetch_object($full_blog);

    $Template->assign("BlogDetails", $BlogDetails);

    $Template->render("pages.blog-details");
}, 'GET');
//Get Blog's Pages Ends//

//Get Campaign's Pages//
//Get All Campaigns
$Route->add("/pages/campaigns", function () {

    $Core = new Apps\Core;
    $Template = new Apps\Template;

    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");

    $Template->assign("haspage", true);
    $Template->assign("menukey", "pages.campaigns");
    $Template->assign("title", "Campaigns");

    $sql = "SELECT * FROM campaigns ORDER BY id DESC";
    $Campaigns = mysqli_query($Core->dbCon, $sql);
    $Template->assign("Campaigns", $Campaigns);

    $Template->render("pages.campaigns");
}, 'GET');

//Get Details of Each Campaign
$Route->add("/pages/{id}/campaign-details", function ($id) {

    $Core = new Apps\Core;
    $Template = new Apps\Template;

    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");

    $Template->assign("haspage", true);
    $Template->assign("menukey", "pages.campaign-details");
    $Template->assign("title", "Campaign Details");

    $sql = "SELECT * FROM campaigns WHERE id='$id'";
    $full_campaign = mysqli_query($Core->dbCon, $sql);
    $CampaignDetails = mysqli_fetch_object($full_campaign);

    $Template->assign("CampaignDetails", $CampaignDetails);

    $Template->render("pages.campaign-details");
}, 'GET');
//Get Campaign's Pages Ends//

//Other pages//
$Route->add("/pages/{shortname}", function ($shortname) {

    $Core = new Apps\Core;
    $Template = new Apps\Template;

    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");

    $Template->assign("haspage", true);
    $Template->assign("menukey", $shortname);

    if ($shortname == "about") {
        $Template->assign("title", "About");
    } elseif ($shortname == "contact") {
        $Template->assign("title", "Contact");
    } else {
        $Template->assign("title", "MMA Care Services");
    }
    $Template->render("pages.{$shortname}");
}, 'GET');

// //Emailer
// $Route->add('/password', function () {

//     $Core = new Apps\Core;
//     $Template = new Apps\Template;

//     $password = $Core->GenPassword(10);

//     $sent = mail("agu.chux@gmail.com", "Welcome", "Thanks you {$password}");

//     // $EmailTemplate = new Apps\EmailTemplate("mails.default");
//     // $EmailTemplate->fullname = "Agu Chux";
//     // $EmailTemplate->email = "agu.chux@gmail.com";
//     // $EmailTemplate->password = $password;

//     // $Template->debug($EmailTemplate);

//     // $Mailer = new Apps\Emailer();
//     // $Mailer->SetTemplate($EmailTemplate);

//     // $Mailer->fromEmail = "info@mmacareservices.com";
//     // $Mailer->fromName = "MMA Care Services";
//     // $Mailer->replyEmail = "info@mmacareservices.com";
//     // $Mailer->replyName = "MMA Care Services";
//     // $Mailer->subject = "Welcome: Your login";

//     // $sent = $Mailer->send();

// }, 'GET');

//Collect Newsletter Email
$Route->add("/newsletter", function () {
    $Core = new Apps\Core;
    $Template = new Apps\Template();

    $data = $Core->post($_POST);

    $newsletterEmail = $data->newsletterEmail;

    $newEmail = (int)$Core->NewsletterEmail($newsletterEmail);

    if ($newEmail) {
        $Template->setError("Congratulations! You have successfully subscribed to our Email Newsletter. <br />We'll send the best tips to stay healthy into your Email.", "Success", "/");
        $Template->redirect("/");
    }

    $Template->setError("This Email already receives our Newsletter.", "Success", "/");
    $Template->redirect("/");
}, 'POST');


//Logout session//
$Route->add("/admin/logout", function () {
    $Template = new Apps\Template;
    $Template->expire();
    $Template->redirect("/admin");
}, 'GET');
//Logout sessions ends//

$Route->run('/');
