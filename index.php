<?php
date_default_timezone_set("America/Denver");

require 'flight/Flight.php';

function renderTemplate($templateName, $selectedTab, $subTitle='', $pageType=''){
    Flight::render('partials/head', array('title' => $subTitle ? " - $subTitle" : ''), 'headContent');
    Flight::render('partials/contactDetails', array(), 'contactDetails');
    Flight::render('partials/socialList', array(), 'socialList');
    Flight::render('partials/navigation', array('selectedTab' => $selectedTab), 'navigation');
    Flight::render('partials/footer', array(), 'footer');
    Flight::render($templateName, array('title' => $subTitle !== '' ? " - $subTitle" : '', 'subTitle' => $subTitle, 'pageType' => $pageType));
}

Flight::route('/', function(){
    renderTemplate('home', 'home');
});

Flight::route('/about', function(){
    Flight::render('about', array(), 'pageContent');
    renderTemplate('template', 'about', 'About Us', 'page-id-29');
});

Flight::route('/offer', function(){
    Flight::render('what-we-offer', array(), 'pageContent');
    renderTemplate('template', 'offer', 'What We Offer', 'page-id-31');
});

Flight::route('/contact', function(){
    Flight::render('contact', array(), 'pageContent');
    renderTemplate('template', 'contact', 'Contact Us', 'page-id-36');
});

Flight::start();
?>
