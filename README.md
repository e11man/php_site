# Modern Design Studio 🚀

A beautifully crafted, highly modular PHP website template featuring modern design, smooth animations, and a unique scroll-stack effect. Ready for Vercel deployment with zero configuration.

## ✨ Features

- **Highly Modular Architecture**: Every component is separated into its own PHP file for easy maintenance
- **Modern Design**: Clean, professional design with gradient colors and smooth animations
- **Scroll Stack Effect**: Unique scrolling animation with card transformations
- **Responsive Design**: Mobile-first approach with perfect responsiveness
- **Performance Optimized**: Fast loading with optimized CSS and JavaScript
- **Vercel Ready**: Zero-config deployment to Vercel
- **SEO Optimized**: Proper meta tags and semantic HTML structure
- **Interactive Elements**: Smooth animations, hover effects, and form handling

## 🎨 Design Theme

The website features a modern **Digital Agency/Design Studio** theme with:
- **Color Palette**: Indigo (#6366f1), Purple (#8b5cf6), Amber (#f59e0b)
- **Typography**: Inter for body text, Space Grotesk for headings
- **Style**: Clean, minimal, with gradient backgrounds and card-based layouts
- **Animations**: Smooth transitions, fade-in effects, and scroll-based animations

## 📁 Project Structure

```
├── index.php                 # Main entry point
├── includes/
│   └── config.php            # Site configuration and global variables
├── components/
│   ├── head.php              # HTML head with meta tags and styles
│   ├── header.php            # Navigation header
│   ├── hero.php              # Hero section
│   ├── scroll-stack.php      # Unique scroll-stack component
│   ├── features.php          # Services/features section
│   ├── about.php             # About section with stats
│   ├── contact.php           # Contact form and info
│   ├── footer.php            # Site footer
│   └── buttons.php           # Reusable button components
├── assets/
│   ├── css/
│   │   └── style.css         # Main stylesheet with CSS variables
│   └── js/
│       └── main.js           # JavaScript for interactions and animations
├── vercel.json               # Vercel deployment configuration
├── package.json              # Project metadata and scripts
└── README.md                 # This file
```

## 🔧 Modular Components

### Configuration (`includes/config.php`)
- Site-wide constants and settings
- Navigation menu items
- Service and portfolio data
- Color and theme configuration

### Reusable Components
- **Buttons** (`components/buttons.php`): Multiple button types with icons
- **Head** (`components/head.php`): SEO-optimized meta tags and fonts
- **Header** (`components/header.php`): Responsive navigation
- **Sections**: Hero, About, Services, Contact, Footer

### Styling (`assets/css/style.css`)
- **CSS Variables**: Centralized color and spacing system
- **Typography**: Responsive font scaling with clamp()
- **Components**: Modular CSS for buttons, cards, and layouts
- **Animations**: Smooth transitions and scroll-based effects

## 🚀 Quick Start

### Local Development

1. **Clone or download** this project
2. **Start local server**:
   ```bash
   php -S localhost:8000
   ```
   Or if you have npm installed:
   ```bash
   npm run dev
   ```
3. **Open browser** to `http://localhost:8000`

### Vercel Deployment

1. **Install Vercel CLI**:
   ```bash
   npm i -g vercel
   ```

2. **Deploy to Vercel**:
   ```bash
   vercel
   ```
   Or:
   ```bash
   npm run deploy
   ```

3. **Auto-deployment**: Connect your GitHub repo to Vercel for automatic deployments

## 🎯 Customization

### Changing Colors
Edit the CSS variables in `assets/css/style.css`:
```css
:root {
  --primary-color: #your-color;
  --secondary-color: #your-color;
  --accent-color: #your-color;
}
```

### Modifying Content
Edit the configuration in `includes/config.php`:
```php
define('SITE_NAME', 'Your Site Name');
define('SITE_DESCRIPTION', 'Your description');
// Update services, navigation, etc.
```

### Adding New Sections
1. Create a new component file in `components/`
2. Include it in `index.php`
3. Add corresponding styles to `style.css`

### Customizing Scroll Stack
The scroll-stack effect can be customized in `components/scroll-stack.php` and the JavaScript in `assets/js/main.js`.

## 📱 Responsive Design

The template is built mobile-first with breakpoints:
- **Mobile**: < 480px
- **Tablet**: < 768px
- **Desktop**: 768px+

All components automatically adapt to different screen sizes.

## 🔍 SEO Features

- Semantic HTML structure
- Open Graph meta tags
- Twitter Card support
- Proper heading hierarchy
- Fast loading times
- Mobile-friendly design

## 🛠️ Technologies Used

- **PHP 7.4+**: Server-side rendering
- **HTML5**: Semantic markup
- **CSS3**: Modern styling with Grid, Flexbox, and CSS Variables
- **Vanilla JavaScript**: No dependencies, pure JS
- **Google Fonts**: Inter and Space Grotesk typography

## 📈 Performance

- **Lightweight**: No heavy frameworks or libraries
- **Optimized**: Minified CSS and efficient JavaScript
- **Fast Loading**: Optimized images and fonts
- **Modern**: Uses latest web standards

## 🎨 Animations & Effects

- **Scroll Stack**: Unique card stacking effect with scale and blur
- **Fade In**: Intersection Observer-based animations
- **Parallax**: Subtle hero section parallax
- **Hover Effects**: Interactive button and card hovers
- **Ripple Effect**: Material Design-inspired button clicks

## 📞 Support

This template is designed to be self-contained and easy to understand. All code is well-commented and follows modern PHP and web development best practices.

## 📄 License

MIT License - feel free to use this template for personal or commercial projects.

---

**Built with ❤️ for modern web development**