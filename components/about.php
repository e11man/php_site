<?php
require_once 'components/buttons.php';

function renderAbout() {
    $stats = [
        ['number' => '150+', 'label' => 'Projects Completed'],
        ['number' => '98%', 'label' => 'Client Satisfaction'],
        ['number' => '5+', 'label' => 'Years Experience'],
        ['number' => '24/7', 'label' => 'Support Available']
    ];
    
    $statsHtml = '';
    foreach ($stats as $stat) {
        $statsHtml .= <<<HTML
        <div class="stat-item text-center">
            <h3 class="stat-number">{$stat['number']}</h3>
            <p class="stat-label">{$stat['label']}</p>
        </div>
HTML;
    }
    
    $ctaButton = renderButton('Learn More About Us', 'accent', '#contact', '→');
    
    return <<<HTML
    <section class="section" id="about" style="background: var(--white);">
        <div class="container">
            <div class="grid grid-2" style="align-items: center; gap: var(--space-3xl);">
                <div>
                    <h2>About Our Studio</h2>
                    <p>We are a passionate team of designers and developers dedicated to creating exceptional digital experiences. Our mission is to help businesses thrive in the digital world through innovative design and cutting-edge technology.</p>
                    <p>With years of experience and a portfolio of successful projects, we understand what it takes to create websites and applications that not only look great but also deliver results.</p>
                    
                    <div class="grid grid-2 mt-4 mb-4">
                        {$statsHtml}
                    </div>
                    
                    {$ctaButton}
                </div>
                <div class="about-image">
                    <div class="image-placeholder" style="background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%); height: 400px; border-radius: var(--radius-2xl); display: flex; align-items: center; justify-content: center; color: white; font-size: 4rem;">
                        🎯
                    </div>
                </div>
            </div>
        </div>
    </section>
HTML;
}
?>