<?php
function renderFeatures() {
    global $services;
    
    $serviceCards = '';
    foreach ($services as $service) {
        $serviceCards .= <<<HTML
        <div class="card service-card">
            <span class="service-icon">{$service['icon']}</span>
            <h3>{$service['title']}</h3>
            <p>{$service['description']}</p>
        </div>
HTML;
    }
    
    return <<<HTML
    <section class="section" id="portfolio">
        <div class="container">
            <div class="text-center mb-4">
                <h2>Our Services</h2>
                <p>Comprehensive digital solutions tailored to your business needs</p>
            </div>
            <div class="grid grid-4">
                {$serviceCards}
            </div>
        </div>
    </section>
HTML;
}
?>