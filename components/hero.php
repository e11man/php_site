<?php
require_once 'components/buttons.php';

function renderHero() {
    $buttons = [
        [
            'text' => 'Start Your Project',
            'type' => 'primary',
            'href' => '#contact',
            'icon' => '🚀'
        ],
        [
            'text' => 'View Our Work',
            'type' => 'secondary',
            'href' => '#portfolio',
            'icon' => '👁️'
        ]
    ];
    
    $buttonGroup = renderButtonGroup($buttons);
    
    return <<<HTML
    <section class="hero">
        <div class="container">
            <div class="hero-content animate-fadeInUp">
                <h1>Creating Digital Experiences That Inspire</h1>
                <p>We design and develop modern websites, mobile apps, and digital solutions that help your business stand out in the digital landscape. Let's bring your vision to life with cutting-edge technology and beautiful design.</p>
                {$buttonGroup}
            </div>
        </div>
    </section>
HTML;
}
?>