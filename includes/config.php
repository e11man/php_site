<?php
// Site Configuration
define('SITE_NAME', 'Modern Design Studio');
define('SITE_DESCRIPTION', 'Creating exceptional digital experiences with cutting-edge design and development');
define('SITE_URL', 'https://yoursite.vercel.app');
define('SITE_EMAIL', 'hello@moderndesignstudio.com');
define('SITE_PHONE', '+1 (555) 123-4567');

// Theme Configuration
define('PRIMARY_COLOR', '#6366f1');
define('SECONDARY_COLOR', '#8b5cf6');
define('ACCENT_COLOR', '#f59e0b');
define('DARK_COLOR', '#1f2937');
define('LIGHT_COLOR', '#f9fafb');

// Navigation Items
$navigation = [
    'Home' => '#home',
    'Services' => '#services',
    'About' => '#about',
    'Portfolio' => '#portfolio',
    'Contact' => '#contact'
];

// Service Items
$services = [
    [
        'icon' => '🎨',
        'title' => 'UI/UX Design',
        'description' => 'Creating intuitive and beautiful user interfaces that enhance user experience'
    ],
    [
        'icon' => '💻',
        'title' => 'Web Development',
        'description' => 'Building responsive and fast websites using modern technologies'
    ],
    [
        'icon' => '📱',
        'title' => 'Mobile Apps',
        'description' => 'Developing native and cross-platform mobile applications'
    ],
    [
        'icon' => '🚀',
        'title' => 'Digital Strategy',
        'description' => 'Strategic planning to maximize your digital presence and growth'
    ]
];

// Portfolio Items
$portfolio = [
    [
        'title' => 'E-commerce Platform',
        'category' => 'Web Development',
        'description' => 'A modern e-commerce solution with advanced features'
    ],
    [
        'title' => 'Mobile Banking App',
        'category' => 'Mobile App',
        'description' => 'Secure and user-friendly banking application'
    ],
    [
        'title' => 'Brand Identity',
        'category' => 'Design',
        'description' => 'Complete brand identity for a tech startup'
    ]
];
?>