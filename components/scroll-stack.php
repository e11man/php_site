<?php
function renderScrollStack() {
    $cards = [
        [
            'title' => 'Innovative Design',
            'subtitle' => 'Creative Excellence',
            'description' => 'We craft unique and memorable designs that capture your brand essence and engage your audience.',
            'icon' => '🎨'
        ],
        [
            'title' => 'Modern Development',
            'subtitle' => 'Technical Excellence',
            'description' => 'Built with the latest technologies for optimal performance, security, and user experience.',
            'icon' => '⚡'
        ],
        [
            'title' => 'User Experience',
            'subtitle' => 'Design That Works',
            'description' => 'Every interaction is carefully designed to provide an intuitive and delightful user journey.',
            'icon' => '✨'
        ],
        [
            'title' => 'Mobile First',
            'subtitle' => 'Responsive Design',
            'description' => 'Optimized for all devices, ensuring your site looks perfect on phones, tablets, and desktops.',
            'icon' => '📱'
        ],
        [
            'title' => 'Performance',
            'subtitle' => 'Lightning Fast',
            'description' => 'Optimized for speed and performance, keeping your users engaged and search engines happy.',
            'icon' => '🚀'
        ]
    ];
    
    $cardHtml = '';
    foreach ($cards as $index => $card) {
        $cardHtml .= <<<HTML
        <div class="scroll-stack-card-wrapper">
            <div class="scroll-stack-card">
                <div class="card-icon">{$card['icon']}</div>
                <h3>{$card['title']}</h3>
                <h4 class="card-subtitle">{$card['subtitle']}</h4>
                <p>{$card['description']}</p>
            </div>
        </div>
HTML;
    }
    
    return <<<HTML
    <section class="section" id="services">
        <div class="container">
            <div class="text-center mb-4">
                <h2>Why Choose Us</h2>
                <p>Experience the difference with our comprehensive approach to digital excellence</p>
            </div>
        </div>
        <div class="scroll-stack-scroller">
            <div class="scroll-stack-inner">
                {$cardHtml}
                <div class="scroll-stack-end"></div>
            </div>
        </div>
    </section>
HTML;
}
?>