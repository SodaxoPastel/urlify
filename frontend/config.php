<?php 
// CONFIG - These control the look and details on your site. Consult documentation for more details.

// GENERAL

// Site URL (no trailing slash)
define('siteURL', 'https://urlify.xyz');

// Page title for your site
define('title', 'URLify - Shorten your URL for free!'); 

// The short title of your site, used in the footer and in some sub pages
define('shortTitle', 'Urlify');

// A description of your site, shown on the homepage.
define('description', 'A free way to shorten your URL links and easier to pass them on!'); 

// The favicon for your site
define('favicon', '/frontend/assets/img/favicon.ico');

// Logo for your site, displayed on home page
define('logo', '/frontend/assets/img/logo-blacktwo.png');

// Enable reCAPTCHA V3
// It is highly recommended you use reCAPTCHA V3. It will stop spam. You can get a site and secret key from here: https://www.google.com/recaptcha/admin/create
define("enableRecaptcha", false);

// reCAPTCHA V3 Site Key
define("recaptchaV3SiteKey", '6LdE5uoZAAAAABgBrYuQuJxjKOPnOaOTu6TQRRb_');

// reCAPTCHA V3 Secret Key
define("recaptchaV3SecretKey", '6LdE5uoZAAAAADKC2kOVdrMA6MvVSS45Qa_vnaWS');

// Enables the custom URL field
// true or false
define('enableCustomURL', true);

// Optional
// Set a primary colour to be used. Default: #007bff
// Here are some other colours you could try:
// #f44336: red, #9c27b0: purple, #00bcd4: teal, #ff5722: orange
define('colour', '#7CD6BA');

// Optional
// Set a background image to be used.
// default: unsplash.com random daily photo of the day
// More possibilities of photo embedding from unsplash could be found at: https://source.unsplash.com
define('backgroundImage', 'https://i.imgur.com/LOfvkrx.png');

// FOOTER

// These are the links in the footer. Add a new link for each new link.
// The array follows a title link structure:
// "TITLE" => "LINK",
$footerLinks = [
    "Invite the Bot"   =>  "https://discord.com/oauth2/authorize?client_id=780628608850198548&scope=bot&permissions=379904",
    "Join the Discord" =>  "https://discord.gg/M89Xu85",
    //"Legal"   =>  "https://sleeky.flynntes.com/",
    "Admin Panel"   =>  "/admin"
];

?>
