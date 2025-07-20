<?php
function renderFooter() {
    $currentYear = date('Y');
    
    return <<<HTML
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <div class="logo" style="font-size: 1.75rem; margin-bottom: var(--space-md);">
                        ✦ " . SITE_NAME . "
                    </div>
                    <p style="max-width: 300px;">" . SITE_DESCRIPTION . "</p>
                </div>
                
                <div class="footer-links">
                    <a href="#home" class="footer-link">Home</a>
                    <a href="#services" class="footer-link">Services</a>
                    <a href="#about" class="footer-link">About</a>
                    <a href="#portfolio" class="footer-link">Portfolio</a>
                    <a href="#contact" class="footer-link">Contact</a>
                </div>
                
                <div class="footer-social" style="margin-top: var(--space-lg);">
                    <a href="#" class="footer-link" style="font-size: 1.5rem; margin-right: var(--space-md);">🐦</a>
                    <a href="#" class="footer-link" style="font-size: 1.5rem; margin-right: var(--space-md);">📘</a>
                    <a href="#" class="footer-link" style="font-size: 1.5rem; margin-right: var(--space-md);">📷</a>
                    <a href="#" class="footer-link" style="font-size: 1.5rem;">💼</a>
                </div>
            </div>
            
            <div style="border-top: 1px solid #4b5563; margin-top: var(--space-xl); padding-top: var(--space-lg); text-align: center;">
                <p style="margin: 0; color: #9ca3af;">
                    © {$currentYear} " . SITE_NAME . ". All rights reserved. Built with ❤️ and modern technology.
                </p>
            </div>
        </div>
    </footer>
HTML;
}
?>