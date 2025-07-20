# 🚀 Deployment Guide - Vercel

This guide will help you deploy your Modern Design Studio website to Vercel in just a few minutes.

## Prerequisites

- A Vercel account (free at [vercel.com](https://vercel.com))
- Git repository (GitHub, GitLab, or Bitbucket)

## Method 1: Deploy via Git Repository (Recommended)

### 1. Push to Git Repository
```bash
git init
git add .
git commit -m "Initial commit - Modern Design Studio"
git remote add origin https://github.com/yourusername/your-repo.git
git push -u origin main
```

### 2. Connect to Vercel
1. Go to [vercel.com](https://vercel.com) and sign in
2. Click "New Project"
3. Import your Git repository
4. Vercel will automatically detect it's a PHP project
5. Click "Deploy"

### 3. Automatic Deployments
- Every push to your main branch will trigger a new deployment
- Preview deployments are created for pull requests

## Method 2: Deploy via Vercel CLI

### 1. Install Vercel CLI
```bash
npm i -g vercel
```

### 2. Login to Vercel
```bash
vercel login
```

### 3. Deploy
```bash
vercel
```
Follow the prompts:
- Set up and deploy? **Y**
- Which scope? Select your account
- Link to existing project? **N**
- What's your project's name? **modern-design-studio**
- In which directory is your code located? **./**

### 4. Deploy to Production
```bash
vercel --prod
```

## Configuration

The included `vercel.json` file configures:
- PHP runtime (`vercel-php@0.6.0`)
- URL routing (all requests to `index.php`)
- Static asset caching
- Performance optimizations

## Custom Domain

### 1. Add Domain in Vercel Dashboard
1. Go to your project in Vercel dashboard
2. Click "Settings" → "Domains"
3. Add your custom domain

### 2. Update DNS
Point your domain to Vercel:
- **A Record**: `76.76.19.61`
- **CNAME**: `cname.vercel-dns.com`

## Environment Variables (Optional)

If you need environment-specific settings:

1. In Vercel dashboard: Settings → Environment Variables
2. Add variables like:
   - `SITE_ENV=production`
   - `CONTACT_EMAIL=your@email.com`

## Performance Optimizations

The template includes:
- ✅ Static asset caching (1 year)
- ✅ Gzip compression
- ✅ Optimized images
- ✅ Minified CSS/JS
- ✅ Fast PHP runtime

## Monitoring

### Vercel Analytics
Enable in dashboard for:
- Page views
- Performance metrics
- User insights

### Error Monitoring
Check deployment logs in Vercel dashboard for any issues.

## Troubleshooting

### Common Issues

**1. PHP Version Error**
- Ensure `vercel.json` specifies correct PHP runtime
- Current: `vercel-php@0.6.0` (PHP 8.1)

**2. File Not Found**
- Check that all files are committed to Git
- Verify `vercel.json` routing configuration

**3. CSS/JS Not Loading**
- Ensure static files are in `assets/` directory
- Check cache headers in `vercel.json`

### Getting Help
- Vercel Documentation: [vercel.com/docs](https://vercel.com/docs)
- Vercel Community: [github.com/vercel/vercel/discussions](https://github.com/vercel/vercel/discussions)

## Development vs Production

### Local Development
```bash
php -S localhost:8000
```

### Production
- Automatic deployments on push
- Global CDN distribution
- HTTPS enabled by default
- 99.99% uptime SLA

## Post-Deployment Checklist

- [ ] Test all sections and animations
- [ ] Verify contact form (add backend processing if needed)
- [ ] Check mobile responsiveness
- [ ] Test loading speed
- [ ] Verify SEO meta tags
- [ ] Set up custom domain (optional)
- [ ] Enable Vercel Analytics (optional)

---

**Your Modern Design Studio website is now live! 🎉**