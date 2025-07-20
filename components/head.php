<?php
function renderHead($title = null) {
    $siteTitle = $title ?: SITE_NAME;
    $description = SITE_DESCRIPTION;
    
    return <<<HTML
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{$description}">
    <meta name="keywords" content="web design, development, UI/UX, digital agency, modern design">
    <meta name="author" content="{SITE_NAME}">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="{$siteTitle}">
    <meta property="og:description" content="{$description}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{SITE_URL}">
    <meta property="og:image" content="{SITE_URL}/assets/images/og-image.jpg">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{$siteTitle}">
    <meta name="twitter:description" content="{$description}">
    
    <title>{$siteTitle}</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- Preload critical resources -->
    <link rel="preload" href="assets/css/style.css" as="style">
    <link rel="preload" href="assets/js/main.js" as="script">
</head>
HTML;
}
?>