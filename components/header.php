<?php
require_once 'components/buttons.php';

function renderHeader() {
    global $navigation;
    
    $navItems = '';
    foreach ($navigation as $name => $href) {
        $navItems .= "<li><a href='{$href}' class='nav-link'>{$name}</a></li>";
    }
    
    $ctaButton = renderButton('Get Started', 'primary', '#contact', '🚀');
    
    return <<<HTML
    <header class="header" id="home">
        <div class="container">
            <nav class="nav">
                <div class="logo">
                    <a href="#home">✦ " . SITE_NAME . "</a>
                </div>
                <ul class="nav-menu">
                    {$navItems}
                    <li>{$ctaButton}</li>
                </ul>
                <div class="mobile-menu-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </div>
    </header>
HTML;
}
?>