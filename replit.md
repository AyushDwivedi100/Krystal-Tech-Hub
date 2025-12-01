# Krystal Tech Hub - Industrial Automation Website

## Overview
A professional business website for Krystal Tech Hub, an industrial automation and power solutions company based in Prayagraj, India. The website showcases their services, products, and provides contact functionality.

## Project Details
- **Technology**: PHP 8.2 with built-in development server
- **Framework**: None (vanilla PHP with Tailwind CSS via CDN)
- **Type**: Multi-page business website
- **Primary Purpose**: Company information and lead generation

## Project Structure
```
.
├── index.php              # Homepage
├── about.php             # About page
├── services.php          # Services listing
├── products.php          # Products catalog
├── contact.php           # Contact form page
├── contact-handler.php   # Form submission handler (SMTP)
├── router.php            # Custom router for clean URLs
├── 404.php              # 404 error page
├── includes/            # Reusable components
│   ├── header.php       # Site header and navigation
│   └── footer.php       # Site footer
├── assets/              # Static assets
│   ├── css/            # Stylesheets
│   ├── img/            # Images and icons
│   └── js/             # JavaScript files
└── PHPMailer/          # Email library for contact form
```

## Features
- **Responsive Design**: Mobile-first design using Tailwind CSS
- **SEO Optimized**: Meta tags, structured data, sitemap.xml
- **Clean URLs**: Custom router for user-friendly URLs (e.g., /about instead of /about.php)
- **Contact Form**: PHPMailer integration with SMTP
- **Accessibility**: ARIA labels, semantic HTML, keyboard navigation
- **Performance**: AOS (Animate on Scroll) library for smooth animations

## Configuration

### Environment Variables (Shared)
The following environment variables are configured for the contact form:
- `SMTP_HOST`: smtp.gmail.com
- `SMTP_PORT`: 587
- `SMTP_USERNAME`: krystaltechhub@gmail.com
- `RECEIVER_EMAIL`: dharshit265@gmail.com

### Required Secrets
**SMTP_PASSWORD**: This is a required secret for the contact form to work. You must provide your Gmail App Password (not your regular Gmail password) as a secret. To generate a Gmail App Password:
1. Go to your Google Account settings
2. Enable 2-factor authentication if not already enabled
3. Go to Security → 2-Step Verification → App passwords
4. Generate a new app password for "Mail"
5. Add it as the SMTP_PASSWORD secret in Replit

### Workflow
- **Name**: PHP Web Server
- **Command**: `php -S 0.0.0.0:5000 router.php`
- **Port**: 5000 (required for Replit webview)
- **Output Type**: webview

### Deployment
- **Target**: Autoscale (stateless web application)
- **Command**: `php -S 0.0.0.0:5000 router.php`

## Setup Notes

### For Replit (Development)
1. The PHP built-in server is configured to listen on 0.0.0.0:5000 for Replit compatibility
2. The router.php handles clean URL routing for the development server

### For Hostinger/Apache (Production)
1. The .htaccess file handles all URL routing on Apache-based hosting
2. It provides:
   - Clean URL routing (/about -> about.php)
   - Automatic redirects from .php/.html to clean URLs
   - Static file serving
   - Custom 404 error page
   - Compression and caching for performance
   - Security headers
3. After uploading to Hostinger, clear any server-side cache and browser cache
4. Contact form requires SMTP_PASSWORD to be set in hosting environment variables

## SEO Configuration
The website is optimized for search engines with the following features:

### Meta Tags (All Pages)
- **Title tags**: Unique, keyword-rich titles for each page
- **Meta descriptions**: Compelling descriptions with calls-to-action
- **Keywords**: Industry-relevant keywords for each page
- **Canonical URLs**: All pages use `https://krystaltechhub.in` (no www, no .html)
- **Robots**: `index, follow` on all pages except 404

### Open Graph Tags
- `og:type`: website
- `og:site_name`: Krystal Tech Hub
- `og:locale`: en_IN
- `og:image`: Full URL with width (1200) and height (630)
- `og:url`: Clean canonical URLs

### Twitter Cards
- `twitter:card`: summary_large_image
- `twitter:site`: @krystaltechhub
- Image alt text included

### Structured Data (JSON-LD)
- **Homepage**: Organization + WebSite schemas with search action
- **About**: AboutPage with embedded Organization
- **Contact**: ContactPage with embedded LocalBusiness (includes geo, hours)
- **Services/Products**: Organization schema

### robots.txt
- Allows all crawlers
- Disallows utility files (contact-handler.php, router.php)
- References sitemap location

### sitemap.xml
- Clean URLs (no .html extensions)
- Priority and changefreq hints
- Updated lastmod dates

## Recent Changes
- **December 1, 2025**: Comprehensive SEO improvements
  - Updated sitemap.xml with clean URLs and current dates
  - Added changefreq and priority to sitemap entries
  - Enhanced robots.txt with crawl directives
  - Added og:site_name, og:locale, og:image dimensions to all pages
  - Added Twitter @site handle to all pages
  - Improved JSON-LD structured data with page-specific schemas
  - Added LocalBusiness schema with geo coordinates and business hours
  - Standardized all URLs to https://krystaltechhub.in (no www)
  - Added canonical URLs to about.php and contact.php
  - Removed placeholder social media links

- **December 1, 2025**: Initial Replit setup
  - Configured PHP workflow with port 5000
  - Created .gitignore for PHP project
  - Set up environment variables for SMTP
  - Configured deployment for autoscale
  - Removed hard-coded SMTP password from contact-handler.php (security fix)
  - Updated to require SMTP_PASSWORD as a secret instead of fallback value
  - Project ready for development and deployment

## User Preferences
None documented yet.

## Notes
- The website uses Tailwind CSS via CDN (shows warning in console - normal for development)
- All email functionality depends on the SMTP_PASSWORD secret being properly configured
- The contact form sends emails to dharshit265@gmail.com using krystaltechhub@gmail.com as sender
