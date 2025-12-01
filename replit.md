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

**SMTP_PASSWORD**: This must be set as a secret for the contact form to work. The user needs to provide their Gmail App Password via the Replit secrets interface.

### Workflow
- **Name**: PHP Web Server
- **Command**: `php -S 0.0.0.0:5000 router.php`
- **Port**: 5000 (required for Replit webview)
- **Output Type**: webview

### Deployment
- **Target**: Autoscale (stateless web application)
- **Command**: `php -S 0.0.0.0:5000 router.php`

## Setup Notes
1. The PHP built-in server is configured to listen on 0.0.0.0:5000 for Replit compatibility
2. The router.php handles:
   - Clean URL routing
   - Static file serving
   - 404 error handling
   - Redirects from .php/.html to clean URLs
3. Contact form requires SMTP_PASSWORD to be set as a secret

## Recent Changes
- **December 1, 2025**: Initial Replit setup
  - Configured PHP workflow with port 5000
  - Created .gitignore for PHP project
  - Set up environment variables for SMTP
  - Configured deployment for autoscale
  - Project ready for development and deployment

## User Preferences
None documented yet.

## Notes
- The website uses Tailwind CSS via CDN (shows warning in console - normal for development)
- All email functionality depends on the SMTP_PASSWORD secret being properly configured
- The contact form sends emails to dharshit265@gmail.com using krystaltechhub@gmail.com as sender
