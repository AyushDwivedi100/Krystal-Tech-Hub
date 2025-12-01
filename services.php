<?php $current_page = 'services'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Character encoding -->
    <meta charset="UTF-8" />
    <!-- Viewport settings for responsiveness -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicon -->
    <link
      rel="icon"
      href="assets/img/favicon/favicon.ico"
      type="image/x-icon"
    />

    <!-- Title -->
    <title>
      Our Services - Krystal Tech Hub | Industrial Automation & Solutions
    </title>

    <!-- Tailwind CSS CDN (load early for styles) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- AOS CSS for animation on scroll -->
    <link
      href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"
      rel="stylesheet"
    />

    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <!-- SEO Meta Tags -->
    <meta
      name="description"
      content="Explore Krystal Tech Hub's comprehensive industrial solutions including process automation, instrumentation, power and control panels, and annual maintenance contracts."
    />
    <meta
      name="keywords"
      content="Process Automation, Electrical Panels, Industrial Services, Instrumentation, AMC, Site Commissioning, Installation, Krystal Tech Hub"
    />
    <meta name="author" content="Krystal Tech Hub" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="https://krystaltechhub.in/services" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Krystal Tech Hub" />
    <meta property="og:locale" content="en_IN" />
    <meta property="og:title" content="Our Services - Krystal Tech Hub | Industrial Automation & Solutions" />
    <meta property="og:description" content="Explore Krystal Tech Hub's comprehensive industrial solutions including process automation, instrumentation, power panels, and annual maintenance contracts." />
    <meta property="og:url" content="https://krystaltechhub.in/services" />
    <meta property="og:image" content="https://krystaltechhub.in/assets/img/krystaltechhub.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@krystaltechhub" />
    <meta name="twitter:title" content="Our Services - Krystal Tech Hub | Industrial Solutions" />
    <meta name="twitter:description" content="Explore Krystal Tech Hub's industrial solutions including automation, instrumentation, panels, and AMC." />
    <meta name="twitter:image" content="https://krystaltechhub.in/assets/img/krystaltechhub.jpg" />

    <!-- Structured Data (JSON-LD) for Organization -->
    <script type="application/ld+json" defer>
      {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Krystal Tech Hub",
        "url": "https://krystaltechhub.in",
        "logo": "https://krystaltechhub.in/assets/img/krystaltechhub.jpg",
        "sameAs": [
          "https://twitter.com/krystaltechhub",
          "https://www.linkedin.com/company/krystaltechhub",
          "https://www.facebook.com/krystaltechhub"
        ],
        "contactPoint": {
          "@type": "ContactPoint",
          "telephone": "+91-8808408802",
          "contactType": "customer service",
          "areaServed": "IN",
          "availableLanguage": ["English", "Hindi"]
        }
      }
    </script>
  </head>
  <body class="text-gray-800">
    <?php include __DIR__ . '/includes/header.php'; ?>

    <!-- Main Content -->
    <main id="main-content" role="main" aria-label="Our Services">
    <!-- HERO SECTION -->
    <section
      class="relative bg-gradient-to-br from-indigo-900 via-blue-900 to-blue-800 text-white py-12 sm:py-16 md:py-20 pt-24 sm:pt-32 md:pt-40 lg:pt-48 overflow-hidden"
      data-aos="fade-in"
      data-aos-once="true"
      aria-labelledby="services-hero-title"
    >
      <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-20 -left-20 w-72 h-72 bg-indigo-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-20 -right-20 w-80 h-80 bg-blue-400/10 rounded-full blur-3xl"></div>
        <div class="absolute top-20 right-1/4 w-40 h-40 bg-cyan-500/5 rounded-full blur-2xl"></div>
        <svg class="absolute inset-0 w-full h-full opacity-[0.03]" viewBox="0 0 100 100">
          <defs>
            <pattern id="services-pattern" width="20" height="20" patternUnits="userSpaceOnUse">
              <circle cx="10" cy="10" r="1" fill="white"/>
            </pattern>
          </defs>
          <rect width="100" height="100" fill="url(#services-pattern)"/>
        </svg>
      </div>

      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-wrap justify-center gap-2 sm:gap-3 mb-4 sm:mb-6" data-aos="fade-down" data-aos-delay="100">
          <span class="inline-flex items-center gap-1 sm:gap-2 bg-white/10 backdrop-blur-sm text-xs sm:text-sm px-2 sm:px-4 py-1.5 sm:py-2 rounded-full border border-white/20">
            <svg class="w-4 h-4 text-orange-400" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
            </svg>
            End-to-End Solutions
          </span>
          <span class="inline-flex items-center gap-1 sm:gap-2 bg-white/10 backdrop-blur-sm text-xs sm:text-sm px-2 sm:px-4 py-1.5 sm:py-2 rounded-full border border-white/20">
            <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
            </svg>
            Industry Certified
          </span>
          <span class="inline-flex items-center gap-1 sm:gap-2 bg-white/10 backdrop-blur-sm text-xs sm:text-sm px-2 sm:px-4 py-1.5 sm:py-2 rounded-full border border-white/20">
            <svg class="w-4 h-4 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
            </svg>
            Expert Team
          </span>
        </div>

        <h1
          id="services-hero-title"
          class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold mb-4 sm:mb-6 text-center"
          data-aos="zoom-in"
          data-aos-delay="200"
          data-aos-once="true"
        >
          Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 to-blue-300">Services</span>
        </h1>
        <p
          class="text-sm sm:text-base md:text-lg lg:text-xl text-blue-100 max-w-3xl mx-auto text-center mb-6 sm:mb-8 px-2"
          data-aos="fade-up"
          data-aos-delay="400"
          data-aos-once="true"
          lang="en"
        >
          Providing end-to-end industrial solutions with excellence and
          reliability, from design to commissioning.
        </p>

        <div class="flex flex-wrap justify-center gap-3 sm:gap-4 md:gap-6 lg:gap-8 mt-6 sm:mt-8 md:mt-10" data-aos="fade-up" data-aos-delay="500">
          <div class="flex items-center gap-2 sm:gap-3">
            <div class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-lg sm:rounded-xl flex items-center justify-center shadow-lg shadow-blue-500/30">
              <svg class="w-4 h-4 sm:w-5 sm:h-5 md:w-6 md:h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
            </div>
            <div class="text-left">
              <div class="font-semibold text-xs sm:text-sm md:text-base">Process Automation</div>
              <div class="text-[10px] sm:text-xs text-blue-200">PLC, SCADA, HMI</div>
            </div>
          </div>
          <div class="flex items-center gap-2 sm:gap-3">
            <div class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-lg sm:rounded-xl flex items-center justify-center shadow-lg shadow-yellow-500/30">
              <svg class="w-4 h-4 sm:w-5 sm:h-5 md:w-6 md:h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
              </svg>
            </div>
            <div class="text-left">
              <div class="font-semibold text-xs sm:text-sm md:text-base">Power Solutions</div>
              <div class="text-[10px] sm:text-xs text-blue-200">Panels & Distribution</div>
            </div>
          </div>
          <div class="flex items-center gap-2 sm:gap-3">
            <div class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 bg-gradient-to-br from-green-500 to-emerald-500 rounded-lg sm:rounded-xl flex items-center justify-center shadow-lg shadow-green-500/30">
              <svg class="w-4 h-4 sm:w-5 sm:h-5 md:w-6 md:h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
              </svg>
            </div>
            <div class="text-left">
              <div class="font-semibold text-xs sm:text-sm md:text-base">AMC Services</div>
              <div class="text-[10px] sm:text-xs text-blue-200">24/7 Maintenance</div>
            </div>
          </div>
        </div>
      </div>

      <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-16 text-gray-50" viewBox="0 0 1440 60" preserveAspectRatio="none">
          <path fill="currentColor" d="M0,0 C480,60 960,60 1440,0 L1440,60 L0,60 Z"></path>
        </svg>
      </div>
    </section>

    <!-- SERVICES GRID -->
    <section
      class="py-10 sm:py-12 md:py-16 bg-gray-50"
      data-aos="fade-up"
      data-aos-once="true"
      aria-labelledby="services-list-title"
    >
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 id="services-list-title" class="text-2xl sm:text-3xl font-bold text-center mb-3 sm:mb-4 text-gray-800">
          What We Offer
        </h2>
        <p class="text-gray-600 text-center mb-8 sm:mb-12 max-w-2xl mx-auto text-sm sm:text-base px-2">
          Comprehensive industrial solutions engineered for reliability, efficiency, and long-term success
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 md:gap-8">
          <!-- Service Card 1: Process Automation -->
          <article
            class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transform hover:-translate-y-1 transition duration-300 flex flex-col"
            data-aos="fade-up"
            data-aos-delay="100"
            data-aos-once="true"
            role="region"
            aria-labelledby="service1-title"
          >
            <div class="flex items-center gap-4 mb-4">
              <div class="bg-blue-100 p-3 rounded-lg">
                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                </svg>
              </div>
              <h3 id="service1-title" class="text-xl font-bold text-gray-800">
                Process Automation
              </h3>
            </div>
            <p class="text-gray-600 mb-4">
              Smart control systems that enhance production efficiency, reduce downtime, and provide real-time visibility.
            </p>
            <ul class="space-y-2 mb-4 flex-grow">
              <li class="flex items-start gap-2">
                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600 text-sm">PLC Programming (Siemens, Allen Bradley)</span>
              </li>
              <li class="flex items-start gap-2">
                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600 text-sm">SCADA & HMI Development</span>
              </li>
              <li class="flex items-start gap-2">
                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600 text-sm">DCS Implementation</span>
              </li>
              <li class="flex items-start gap-2">
                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600 text-sm">Instrumentation & Calibration</span>
              </li>
            </ul>
            <div class="pt-4 border-t border-gray-100">
              <span class="inline-block bg-blue-50 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full">Industry 4.0 Ready</span>
            </div>
          </article>

          <!-- Service Card 2: Site Installation -->
          <article
            class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transform hover:-translate-y-1 transition duration-300 flex flex-col"
            data-aos="fade-up"
            data-aos-delay="200"
            data-aos-once="true"
            role="region"
            aria-labelledby="service2-title"
          >
            <div class="flex items-center gap-4 mb-4">
              <div class="bg-orange-100 p-3 rounded-lg">
                <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
              </div>
              <h3 id="service2-title" class="text-xl font-bold text-gray-800">
                Site Installation
              </h3>
            </div>
            <p class="text-gray-600 mb-4">
              Professional on-site installation services ensuring quality workmanship and adherence to safety standards.
            </p>
            <ul class="space-y-2 mb-4 flex-grow">
              <li class="flex items-start gap-2">
                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600 text-sm">Electrical Wiring & Cabling</span>
              </li>
              <li class="flex items-start gap-2">
                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600 text-sm">Panel Mounting & Integration</span>
              </li>
              <li class="flex items-start gap-2">
                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600 text-sm">Instrumentation Setup</span>
              </li>
              <li class="flex items-start gap-2">
                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600 text-sm">Safety Compliance & Documentation</span>
              </li>
            </ul>
            <div class="pt-4 border-t border-gray-100">
              <span class="inline-block bg-orange-50 text-orange-700 text-xs font-semibold px-3 py-1 rounded-full">Certified Engineers</span>
            </div>
          </article>

          <!-- Service Card 3: Site Commissioning -->
          <article
            class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transform hover:-translate-y-1 transition duration-300 flex flex-col"
            data-aos="fade-up"
            data-aos-delay="300"
            data-aos-once="true"
            role="region"
            aria-labelledby="service3-title"
          >
            <div class="flex items-center gap-4 mb-4">
              <div class="bg-green-100 p-3 rounded-lg">
                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
              </div>
              <h3 id="service3-title" class="text-xl font-bold text-gray-800">
                Site Commissioning
              </h3>
            </div>
            <p class="text-gray-600 mb-4">
              Complete commissioning services to ensure your systems are tested, calibrated, and ready for operation.
            </p>
            <ul class="space-y-2 mb-4 flex-grow">
              <li class="flex items-start gap-2">
                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600 text-sm">Pre-commissioning Checks</span>
              </li>
              <li class="flex items-start gap-2">
                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600 text-sm">Loop Testing & Verification</span>
              </li>
              <li class="flex items-start gap-2">
                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600 text-sm">System Integration Testing</span>
              </li>
              <li class="flex items-start gap-2">
                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600 text-sm">Performance Optimization</span>
              </li>
            </ul>
            <div class="pt-4 border-t border-gray-100">
              <span class="inline-block bg-green-50 text-green-700 text-xs font-semibold px-3 py-1 rounded-full">Quality Assured</span>
            </div>
          </article>

          <!-- Service Card 4: Power & Control Panels -->
          <article
            class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transform hover:-translate-y-1 transition duration-300 flex flex-col"
            data-aos="fade-up"
            data-aos-delay="400"
            data-aos-once="true"
            role="region"
            aria-labelledby="service4-title"
          >
            <div class="flex items-center gap-4 mb-4">
              <div class="bg-yellow-100 p-3 rounded-lg">
                <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
              </div>
              <h3 id="service4-title" class="text-xl font-bold text-gray-800">
                Power & Control Panels
              </h3>
            </div>
            <p class="text-gray-600 mb-4">
              Custom-engineered electrical panels built with precision for reliable power distribution and control.
            </p>
            <ul class="space-y-2 mb-4 flex-grow">
              <li class="flex items-start gap-2">
                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600 text-sm">LT/HT Power Distribution Panels</span>
              </li>
              <li class="flex items-start gap-2">
                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600 text-sm">MCC & PCC Panels</span>
              </li>
              <li class="flex items-start gap-2">
                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600 text-sm">VFD & Soft Starter Panels</span>
              </li>
              <li class="flex items-start gap-2">
                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600 text-sm">APFC & Synchronization Panels</span>
              </li>
            </ul>
            <div class="pt-4 border-t border-gray-100">
              <span class="inline-block bg-yellow-50 text-yellow-700 text-xs font-semibold px-3 py-1 rounded-full">IS/IEC Certified</span>
            </div>
          </article>

          <!-- Service Card 5: AMC -->
          <article
            class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transform hover:-translate-y-1 transition duration-300 flex flex-col"
            data-aos="fade-up"
            data-aos-delay="500"
            data-aos-once="true"
            role="region"
            aria-labelledby="service5-title"
          >
            <div class="flex items-center gap-4 mb-4">
              <div class="bg-purple-100 p-3 rounded-lg">
                <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
              </div>
              <h3 id="service5-title" class="text-xl font-bold text-gray-800">
                Annual Maintenance (AMC)
              </h3>
            </div>
            <p class="text-gray-600 mb-4">
              Comprehensive maintenance contracts to keep your systems running at peak performance year-round.
            </p>
            <ul class="space-y-2 mb-4 flex-grow">
              <li class="flex items-start gap-2">
                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600 text-sm">Scheduled Preventive Maintenance</span>
              </li>
              <li class="flex items-start gap-2">
                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600 text-sm">24/7 Emergency Support</span>
              </li>
              <li class="flex items-start gap-2">
                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600 text-sm">Spare Parts Management</span>
              </li>
              <li class="flex items-start gap-2">
                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600 text-sm">Performance Reports & Analytics</span>
              </li>
            </ul>
            <div class="pt-4 border-t border-gray-100">
              <span class="inline-block bg-purple-50 text-purple-700 text-xs font-semibold px-3 py-1 rounded-full">Priority Support</span>
            </div>
          </article>

          <!-- Service Card 6: Product Distribution -->
          <article
            class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transform hover:-translate-y-1 transition duration-300 flex flex-col"
            data-aos="fade-up"
            data-aos-delay="600"
            data-aos-once="true"
            role="region"
            aria-labelledby="service6-title"
          >
            <div class="flex items-center gap-4 mb-4">
              <div class="bg-red-100 p-3 rounded-lg">
                <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                </svg>
              </div>
              <h3 id="service6-title" class="text-xl font-bold text-gray-800">
                Product Distribution
              </h3>
            </div>
            <p class="text-gray-600 mb-4">
              Authorized distribution of premium electrical and automation products from world-leading brands.
            </p>
            <ul class="space-y-2 mb-4 flex-grow">
              <li class="flex items-start gap-2">
                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600 text-sm">ABB, Siemens, Schneider Electric</span>
              </li>
              <li class="flex items-start gap-2">
                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600 text-sm">Motors, Drives & Controllers</span>
              </li>
              <li class="flex items-start gap-2">
                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600 text-sm">Sensors & Instrumentation</span>
              </li>
              <li class="flex items-start gap-2">
                <svg class="w-5 h-5 text-green-500 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-600 text-sm">Fast Pan-India Delivery</span>
              </li>
            </ul>
            <div class="pt-4 border-t border-gray-100">
              <span class="inline-block bg-red-50 text-red-700 text-xs font-semibold px-3 py-1 rounded-full">Authorized Dealer</span>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-blue-800 text-white text-center" data-aos="fade-up">
      <div class="container mx-auto max-w-3xl px-4">
        <h2 class="text-3xl font-bold mb-4" data-aos="zoom-in" data-aos-delay="100">
          Need a Custom Solution?
        </h2>
        <p class="text-lg text-blue-100 mb-8" data-aos="fade-up" data-aos-delay="200">
          Contact us for customized service solutions tailored to your specific industrial requirements.
        </p>
        <a
          href="/contact.html"
          class="inline-flex items-center gap-2 bg-white text-blue-800 px-8 py-4 rounded-full font-bold hover:bg-blue-50 hover:shadow-lg transform hover:scale-105 transition duration-300"
          data-aos="flip-up"
          data-aos-delay="300"
        >
          <span>Get Expert Advice</span>
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
      </div>
    </section>
    </main>

    <!-- Footer -->

    <?php include __DIR__ . '/includes/footer.php'; ?>
  </body>
</html>
