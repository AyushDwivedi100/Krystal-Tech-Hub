<?php $current_page = 'home'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Title -->
    <title>
      Krystal Tech Hub | Industrial Automation & Power Solutions in India
    </title>

    <!-- Meta Description -->
    <meta
      name="description"
      content="Krystal Tech Hub provides cutting-edge industrial automation, power panels, and electrical solutions across India. Trusted engineering & installation services for factories and smart industries."
    />

    <!-- Keywords -->
    <meta
      name="keywords"
      content="industrial automation, control panels, power solutions, electrical distribution, SCADA, PLC, installation services, Krystal Tech Hub, India, Prayagraj"
    />

    <!-- Author -->
    <meta name="author" content="Krystal Tech Hub" />

    <!-- Robots -->
    <meta name="robots" content="index, follow" />

    <!-- Canonical URL -->
    <link rel="canonical" href="https://krystaltechhub.in/" />

    <!-- Favicon -->
    <link
      rel="icon"
      href="assets/img/favicon/favicon.ico"
      type="image/x-icon"
    />

    <!-- Open Graph / Facebook -->
    <meta
      property="og:title"
      content="Krystal Tech Hub | Industrial Automation & Power Panels"
    />
    <meta
      property="og:description"
      content="Powering Industries with advanced automation and electrical solutions. Get in touch for custom engineering projects in India."
    />
    <meta
      property="og:image"
      content="https://krystaltechhub.in/assets/img/krystaltechhub.jpg"
    />
    <meta property="og:url" content="https://krystaltechhub.in/" />
    <meta property="og:type" content="website" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta
      name="twitter:title"
      content="Krystal Tech Hub | Industrial Automation & Power Panels"
    />
    <meta
      name="twitter:description"
      content="Automation and electrical panel manufacturing for industrial excellence. Serving India with end-to-end solutions."
    />
    <meta
      name="twitter:image"
      content="https://krystaltechhub.in/assets/img/krystaltechhub.jpg"
    />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />

    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <!-- Schema Markup -->
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Krystal Tech Hub",
        "url": "https://krystaltechhub.in",
        "logo": "https://krystaltechhub.in/assets/img/krystaltechhub.jpg",
        "contactPoint": {
          "@type": "ContactPoint",
          "telephone": "+91-8808408802",
          "contactType": "Customer Service",
          "areaServed": "IN"
        },
        "sameAs": [
          "https://www.facebook.com/your-page",
          "https://twitter.com/your-profile",
          "https://www.linkedin.com/company/krystaltechhub"
        ]
      }
    </script>

    <!-- For the industries we serve section -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js" defer></script>
    <script>
      document.addEventListener("DOMContentLoaded", () =>
        AOS.init({
          duration: 1000,
          once: true,
          offset: 0,
        }),
      );
    </script>
  </head>
  <body
    class="bg-gray-50 font-roboto leading-relaxed text-gray-800 overflow-x-hidden"
  >
    <?php include __DIR__ . '/includes/header.php'; ?>

    <!-- Main Content -->
    <main id="main-content" role="main" aria-label="Main content">
      <!-- Hero Section -->
      <section
        id="home"
        class="hero flex items-center justify-center text-center text-white min-h-[60vh] sm:min-h-[70vh] md:min-h-screen pt-24 sm:pt-28 md:pt-32 lg:pt-36 pb-8 sm:pb-12"
        data-aos="fade-in"
        data-aos-duration="1200"
        aria-label="Welcome to Krystal Tech Hub - Industrial Automation Solutions"
      >
        <div
          class="container mx-auto px-4 sm:px-6"
          data-aos="zoom-in"
          data-aos-delay="300"
        >
          <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold mb-3 sm:mb-4 leading-tight">
            Powering Industries with Precision, <br class="hidden sm:block" /><span class="sm:hidden"> </span>Performance & Progress
          </h1>
          <p
            class="text-base sm:text-lg md:text-xl lg:text-2xl mb-6 sm:mb-8 px-2 sm:px-0"
            data-aos="fade-up"
            data-aos-delay="500"
          >
            Your trusted partner for industrial automation and power solutions
          </p>
          <a
            href="#contact"
            class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2.5 sm:py-3 px-6 sm:px-8 rounded-full transition duration-300 inline-block text-sm sm:text-base"
            data-aos="fade-up"
            data-aos-delay="700"
          >
            Get in Touch
          </a>
        </div>
      </section>

      <!-- About Section -->
      <section
        id="about"
        class="py-10 sm:py-12 md:py-16 bg-white overflow-x-hidden"
        aria-labelledby="about-heading"
      >
        <div class="container mx-auto px-4 sm:px-6">
          <h2
            id="about-heading"
            class="text-2xl sm:text-3xl font-bold text-center mb-8 sm:mb-12 section-title"
            data-aos="fade-up"
          >
            About Krystal Tech Hub
          </h2>

          <div class="flex flex-col md:flex-row md:items-center gap-6 sm:gap-8 md:gap-10">
            <!-- Image -->
            <div class="md:w-1/2 mb-6 md:mb-0" data-aos="fade-right">
              <div class="overflow-hidden rounded-lg shadow-xl">
                <img
                  src="assets/img/about.jpg"
                  alt="Industrial engineer working on control panel"
                  class="w-full h-auto transform hover:scale-105 transition duration-500 ease-in-out"
                />
              </div>
            </div>

            <!-- Content -->
            <div class="md:w-1/2 space-y-4 sm:space-y-6" data-aos="fade-left">
              <p class="text-gray-700 text-sm sm:text-base md:text-lg leading-relaxed">
                <strong>Krystal Tech Hub</strong> is a trusted name in process
                automation, electrical systems, and industrial power solutions.
                We deliver comprehensive services – from manufacturing advanced
                power panels to distributing top-tier electronic and industrial
                equipment.
              </p>
              <p class="text-gray-700 text-sm sm:text-base md:text-lg leading-relaxed">
                With a focus on engineering excellence and tech innovation, we
                aim to be the one-stop partner for industries across India.
              </p>

              <!-- Highlight 1 -->
              <div
                class="bg-blue-50 p-3 sm:p-4 md:p-5 rounded-lg border-l-4 border-blue-600 flex items-start gap-3 sm:gap-4 shadow-sm"
              >
                <!-- Icon: Factory -->
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5 sm:h-6 sm:w-6 text-blue-600 mt-0.5 sm:mt-1 shrink-0"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                >
                  <path d="M2 21h20v-2H2v2Zm3-4h14V3H5v14Zm2-2V5h10v10H7Z" />
                </svg>
                <p class="text-blue-800 font-medium text-sm sm:text-base">
                  Proudly serving sectors like manufacturing, utilities, energy,
                  infrastructure, and smart industries.
                </p>
              </div>

              <!-- Highlight 2 -->
              <div
                class="bg-green-50 p-3 sm:p-4 md:p-5 rounded-lg border-l-4 border-green-600 flex items-start gap-3 sm:gap-4 shadow-sm"
              >
                <!-- Icon: Clock/Experience -->
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5 sm:h-6 sm:w-6 text-green-600 mt-0.5 sm:mt-1 shrink-0"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                >
                  <path
                    d="M12 1a11 11 0 1 0 11 11A11.012 11.012 0 0 0 12 1Zm0 2a9 9 0 1 1-9 9 9.01 9.01 0 0 1 9-9Zm-.5 4h1v5l4 2-.5.87L11.5 13V7Z"
                  />
                </svg>
                <p class="text-green-800 font-medium text-sm sm:text-base">
                  Serving India for over 2 years with reliable solutions and
                  top-notch customer support.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Services Section -->
      <section
        id="services"
        class="py-10 sm:py-12 md:py-16 bg-gray-50"
        aria-labelledby="services-heading"
      >
        <div class="container mx-auto px-4 sm:px-6">
          <h2
            id="services-heading"
            class="text-2xl sm:text-3xl font-bold text-center mb-3 sm:mb-4 section-title"
            data-aos="fade-down"
          >
            Our Key Offerings
          </h2>
          <p
            class="text-gray-600 text-center mb-8 sm:mb-12 max-w-2xl mx-auto text-sm sm:text-base px-2"
            data-aos="fade-up"
          >
            Comprehensive industrial solutions designed to optimize your
            operations and drive growth
          </p>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 md:gap-8">
            <!-- Process Automation Solutions -->
            <div
              class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-transform transform hover:-translate-y-1 duration-300 flex flex-col"
              data-aos="fade-up"
              data-aos-delay="0"
            >
              <div class="flex items-center gap-4 mb-4">
                <div class="bg-blue-100 p-3 rounded-lg">
                  <svg
                    class="w-8 h-8 text-blue-600"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"
                    />
                  </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800">
                  Process Automation
                </h3>
              </div>
              <p class="text-gray-600 mb-4">
                Transform your industrial processes with cutting-edge automation
                technology for maximum efficiency.
              </p>
              <ul class="space-y-2 mb-4 flex-grow">
                <li class="flex items-start gap-2">
                  <svg
                    class="w-5 h-5 text-green-500 mt-0.5 shrink-0"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span class="text-gray-600 text-sm"
                    >PLC Programming & Integration</span
                  >
                </li>
                <li class="flex items-start gap-2">
                  <svg
                    class="w-5 h-5 text-green-500 mt-0.5 shrink-0"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span class="text-gray-600 text-sm"
                    >SCADA Systems & HMI Design</span
                  >
                </li>
                <li class="flex items-start gap-2">
                  <svg
                    class="w-5 h-5 text-green-500 mt-0.5 shrink-0"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span class="text-gray-600 text-sm"
                    >DCS & Control Panel Solutions</span
                  >
                </li>
                <li class="flex items-start gap-2">
                  <svg
                    class="w-5 h-5 text-green-500 mt-0.5 shrink-0"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span class="text-gray-600 text-sm"
                    >Real-time Monitoring & Analytics</span
                  >
                </li>
              </ul>
              <div class="pt-4 border-t border-gray-100">
                <span
                  class="inline-block bg-blue-50 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full"
                  >Industry 4.0 Ready</span
                >
              </div>
            </div>

            <!-- Power & Control Panels -->
            <div
              class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-transform transform hover:-translate-y-1 duration-300 flex flex-col"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="flex items-center gap-4 mb-4">
                <div class="bg-yellow-100 p-3 rounded-lg">
                  <svg
                    class="w-8 h-8 text-yellow-600"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M13 10V3L4 14h7v7l9-11h-7z"
                    />
                  </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800">
                  Power & Control Panels
                </h3>
              </div>
              <p class="text-gray-600 mb-4">
                Custom-built power panels engineered for reliability, safety,
                and optimal performance.
              </p>
              <ul class="space-y-2 mb-4 flex-grow">
                <li class="flex items-start gap-2">
                  <svg
                    class="w-5 h-5 text-green-500 mt-0.5 shrink-0"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span class="text-gray-600 text-sm"
                    >LT & HT Panel Manufacturing</span
                  >
                </li>
                <li class="flex items-start gap-2">
                  <svg
                    class="w-5 h-5 text-green-500 mt-0.5 shrink-0"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span class="text-gray-600 text-sm">MCC & PCC Panels</span>
                </li>
                <li class="flex items-start gap-2">
                  <svg
                    class="w-5 h-5 text-green-500 mt-0.5 shrink-0"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span class="text-gray-600 text-sm"
                    >VFD & Soft Starter Panels</span
                  >
                </li>
                <li class="flex items-start gap-2">
                  <svg
                    class="w-5 h-5 text-green-500 mt-0.5 shrink-0"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span class="text-gray-600 text-sm"
                    >APFC & Synchronization Panels</span
                  >
                </li>
              </ul>
              <div class="pt-4 border-t border-gray-100">
                <span
                  class="inline-block bg-yellow-50 text-yellow-700 text-xs font-semibold px-3 py-1 rounded-full"
                  >IS/IEC Certified</span
                >
              </div>
            </div>

            <!-- Industrial Equipment Supply -->
            <div
              class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-transform transform hover:-translate-y-1 duration-300 flex flex-col"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="flex items-center gap-4 mb-4">
                <div class="bg-purple-100 p-3 rounded-lg">
                  <svg
                    class="w-8 h-8 text-purple-600"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"
                    />
                  </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800">
                  Equipment Supply
                </h3>
              </div>
              <p class="text-gray-600 mb-4">
                Premium industrial equipment from world-renowned brands,
                delivered with reliability.
              </p>
              <ul class="space-y-2 mb-4 flex-grow">
                <li class="flex items-start gap-2">
                  <svg
                    class="w-5 h-5 text-green-500 mt-0.5 shrink-0"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span class="text-gray-600 text-sm"
                    >Motors, Drives & Controllers</span
                  >
                </li>
                <li class="flex items-start gap-2">
                  <svg
                    class="w-5 h-5 text-green-500 mt-0.5 shrink-0"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span class="text-gray-600 text-sm"
                    >Sensors & Instrumentation</span
                  >
                </li>
                <li class="flex items-start gap-2">
                  <svg
                    class="w-5 h-5 text-green-500 mt-0.5 shrink-0"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span class="text-gray-600 text-sm"
                    >Switchgear & Protection Devices</span
                  >
                </li>
                <li class="flex items-start gap-2">
                  <svg
                    class="w-5 h-5 text-green-500 mt-0.5 shrink-0"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span class="text-gray-600 text-sm"
                    >Cables, Connectors & Accessories</span
                  >
                </li>
              </ul>
              <div class="pt-4 border-t border-gray-100">
                <span
                  class="inline-block bg-purple-50 text-purple-700 text-xs font-semibold px-3 py-1 rounded-full"
                  >Authorized Dealer</span
                >
              </div>
            </div>

            <!-- Electrical Product Distribution -->
            <div
              class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-transform transform hover:-translate-y-1 duration-300 flex flex-col"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="flex items-center gap-4 mb-4">
                <div class="bg-green-100 p-3 rounded-lg">
                  <svg
                    class="w-8 h-8 text-green-600"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"
                    />
                  </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800">
                  Product Distribution
                </h3>
              </div>
              <p class="text-gray-600 mb-4">
                Complete range of electrical products sourced from trusted
                manufacturers worldwide.
              </p>
              <ul class="space-y-2 mb-4 flex-grow">
                <li class="flex items-start gap-2">
                  <svg
                    class="w-5 h-5 text-green-500 mt-0.5 shrink-0"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span class="text-gray-600 text-sm"
                    >ABB, Siemens, Schneider Products</span
                  >
                </li>
                <li class="flex items-start gap-2">
                  <svg
                    class="w-5 h-5 text-green-500 mt-0.5 shrink-0"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span class="text-gray-600 text-sm"
                    >Bulk Order Capabilities</span
                  >
                </li>
                <li class="flex items-start gap-2">
                  <svg
                    class="w-5 h-5 text-green-500 mt-0.5 shrink-0"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span class="text-gray-600 text-sm"
                    >Competitive Pricing & Warranty</span
                  >
                </li>
                <li class="flex items-start gap-2">
                  <svg
                    class="w-5 h-5 text-green-500 mt-0.5 shrink-0"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span class="text-gray-600 text-sm"
                    >Fast Pan-India Delivery</span
                  >
                </li>
              </ul>
              <div class="pt-4 border-t border-gray-100">
                <span
                  class="inline-block bg-green-50 text-green-700 text-xs font-semibold px-3 py-1 rounded-full"
                  >100% Genuine Products</span
                >
              </div>
            </div>

            <!-- Installation Services -->
            <div
              class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-transform transform hover:-translate-y-1 duration-300 flex flex-col"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <div class="flex items-center gap-4 mb-4">
                <div class="bg-orange-100 p-3 rounded-lg">
                  <svg
                    class="w-8 h-8 text-orange-600"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"
                    />
                  </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800">
                  Installation Services
                </h3>
              </div>
              <p class="text-gray-600 mb-4">
                Expert on-site installation and commissioning by our certified
                engineering team.
              </p>
              <ul class="space-y-2 mb-4 flex-grow">
                <li class="flex items-start gap-2">
                  <svg
                    class="w-5 h-5 text-green-500 mt-0.5 shrink-0"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span class="text-gray-600 text-sm"
                    >Site Survey & Assessment</span
                  >
                </li>
                <li class="flex items-start gap-2">
                  <svg
                    class="w-5 h-5 text-green-500 mt-0.5 shrink-0"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span class="text-gray-600 text-sm"
                    >Professional Wiring & Setup</span
                  >
                </li>
                <li class="flex items-start gap-2">
                  <svg
                    class="w-5 h-5 text-green-500 mt-0.5 shrink-0"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span class="text-gray-600 text-sm"
                    >Testing & Commissioning</span
                  >
                </li>
                <li class="flex items-start gap-2">
                  <svg
                    class="w-5 h-5 text-green-500 mt-0.5 shrink-0"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span class="text-gray-600 text-sm"
                    >Training & Documentation</span
                  >
                </li>
              </ul>
              <div class="pt-4 border-t border-gray-100">
                <span
                  class="inline-block bg-orange-50 text-orange-700 text-xs font-semibold px-3 py-1 rounded-full"
                  >Certified Engineers</span
                >
              </div>
            </div>

            <!-- Custom Engineering -->
            <div
              class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-transform transform hover:-translate-y-1 duration-300 flex flex-col"
              data-aos="fade-up"
              data-aos-delay="500"
            >
              <div class="flex items-center gap-4 mb-4">
                <div class="bg-red-100 p-3 rounded-lg">
                  <svg
                    class="w-8 h-8 text-red-600"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"
                    />
                  </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800">
                  Custom Engineering
                </h3>
              </div>
              <p class="text-gray-600 mb-4">
                End-to-end turnkey solutions designed specifically for your
                unique industrial requirements.
              </p>
              <ul class="space-y-2 mb-4 flex-grow">
                <li class="flex items-start gap-2">
                  <svg
                    class="w-5 h-5 text-green-500 mt-0.5 shrink-0"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span class="text-gray-600 text-sm"
                    >Requirement Analysis & Design</span
                  >
                </li>
                <li class="flex items-start gap-2">
                  <svg
                    class="w-5 h-5 text-green-500 mt-0.5 shrink-0"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span class="text-gray-600 text-sm"
                    >Prototype Development</span
                  >
                </li>
                <li class="flex items-start gap-2">
                  <svg
                    class="w-5 h-5 text-green-500 mt-0.5 shrink-0"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span class="text-gray-600 text-sm"
                    >Project Management & Execution</span
                  >
                </li>
                <li class="flex items-start gap-2">
                  <svg
                    class="w-5 h-5 text-green-500 mt-0.5 shrink-0"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span class="text-gray-600 text-sm"
                    >Ongoing Support & Maintenance</span
                  >
                </li>
              </ul>
              <div class="pt-4 border-t border-gray-100">
                <span
                  class="inline-block bg-red-50 text-red-700 text-xs font-semibold px-3 py-1 rounded-full"
                  >Turnkey Solutions</span
                >
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Clients Section -->
      <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
          <h2
            class="text-3xl font-bold text-center mb-12 section-title"
            data-aos="fade-down"
          >
            Industries We Serve
          </h2>

          <div class="flex flex-wrap justify-center items-center gap-8">
            <!-- Card 1 -->
            <div
              class="bg-gray-50 p-6 rounded-lg text-center w-40 h-40 flex flex-col items-center justify-center shadow hover:shadow-lg transition duration-300 ease-in-out"
              data-aos="fade-up"
            >
              <img
                src="assets/img/icons/manufacturing.svg"
                alt="Manufacturing"
                class="w-12 h-12 mb-2"
              />
              <span class="font-semibold text-gray-800">Manufacturing</span>
            </div>

            <!-- Card 2 -->
            <div
              class="bg-gray-50 p-6 rounded-lg text-center w-40 h-40 flex flex-col items-center justify-center shadow hover:shadow-lg transition duration-300 ease-in-out"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <img
                src="assets/img/icons/utilities.svg"
                alt="Utilities"
                class="w-12 h-12 mb-2"
              />
              <span class="font-semibold text-gray-800">Utilities</span>
            </div>

            <!-- Card 3 -->
            <div
              class="bg-gray-50 p-6 rounded-lg text-center w-40 h-40 flex flex-col items-center justify-center shadow hover:shadow-lg transition duration-300 ease-in-out"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <img
                src="assets/img/icons/energy.svg"
                alt="Energy"
                class="w-12 h-12 mb-2"
              />
              <span class="font-semibold text-gray-800">Energy</span>
            </div>

            <!-- Card 4 -->
            <div
              class="bg-gray-50 p-6 rounded-lg text-center w-40 h-40 flex flex-col items-center justify-center shadow hover:shadow-lg transition duration-300 ease-in-out"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <img
                src="assets/img/icons/infrastructure.svg"
                alt="Infrastructure"
                class="w-12 h-12 mb-2"
              />
              <span class="font-semibold text-gray-800">Infrastructure</span>
            </div>

            <!-- Card 5 -->
            <div
              class="bg-gray-50 p-6 rounded-lg text-center w-40 h-40 flex flex-col items-center justify-center shadow hover:shadow-lg transition duration-300 ease-in-out"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <img
                src="assets/img/icons/smart-industry.svg"
                alt="Smart Industry"
                class="w-12 h-12 mb-2"
              />
              <span class="font-semibold text-gray-800">Smart Industry</span>
            </div>
          </div>
        </div>
      </section>

      <!-- CONTACT SECTION: Company contact details and user inquiry form -->
      <section
        id="contact"
        class="py-8 bg-blue-800 text-white"
        data-aos="fade-up"
      >
        <div class="container mx-auto px-6">
          <!-- Section Title -->
          <h2
            class="text-3xl font-bold text-center mb-12 section-title"
            data-aos="fade-down"
          >
            Get in Touch
          </h2>

          <!-- Two-column layout: Contact info & Contact form -->
          <div class="flex flex-col md:flex-row">
            <!-- Contact Information Column -->
            <div
              class="md:w-1/2 mb-8 md:mb-0 md:pr-10"
              data-aos="fade-right"
              data-aos-delay="100"
            >
              <h3 class="text-xl font-bold mb-4">Contact Information</h3>
              <p class="mb-4">
                Ready to power your industry with our solutions? Reach out to
                our team today.
              </p>

              <!-- Contact details with icons -->
              <div class="space-y-4">
                <!-- Phone -->
                <div
                  class="flex items-start"
                  data-aos="fade-up"
                  data-aos-delay="200"
                >
                  <svg
                    class="w-5 h-5 mt-1 mr-3 shrink-0"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                    />
                  </svg>
                  <a href="tel:+918808408802" target="_blank"
                    >+91 88084 08802</a
                  >
                </div>

                <!-- Email -->
                <div
                  class="flex items-start"
                  data-aos="fade-up"
                  data-aos-delay="300"
                >
                  <svg
                    class="w-5 h-5 mt-1 mr-3 shrink-0"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                    />
                  </svg>
                  <a href="mailto:info@krystaltechhub.in"
                    >info@krystaltechhub.in</a
                  >
                </div>

                <!-- Address -->
                <div
                  class="flex items-start"
                  data-aos="fade-up"
                  data-aos-delay="400"
                >
                  <svg
                    class="w-5 h-5 mt-1 mr-3 shrink-0"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                  </svg>
                  <a
                    href="https://maps.app.goo.gl/x2bhXNHmQ2d97hmb9"
                    target="_blank"
                  >
                    G T Road, Handia, Ward No. 09, Near Manas Hall, Handia,
                    Prayagraj, Uttar Pradesh, India - 221503
                  </a>
                </div>
              </div>

              <!-- Website and GST Info -->
              <div class="mt-8" data-aos="fade-up" data-aos-delay="500">
                <br /><br />
                <p>GSTIN : 09NHYPS0935L1Z1</p>
              </div>
            </div>

            <!-- Contact Form Column -->
            <div class="md:w-1/2" data-aos="fade-left" data-aos-delay="100">
              <form
                action="contact-handler.php"
                method="POST"
                class="bg-white p-6 rounded-lg shadow-md"
                aria-label="Contact form"
              >
                <!-- Name Field -->
                <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                  <label for="name" class="block mb-1 font-medium text-black"
                    >Name</label
                  >
                  <input
                    type="text"
                    id="name"
                    name="name"
                    required
                    class="w-full border border-gray-300 px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                  />
                </div>

                <!-- Email Field -->
                <div class="mb-4" data-aos="fade-up" data-aos-delay="300">
                  <label for="email" class="block mb-1 font-medium text-black"
                    >Email</label
                  >
                  <input
                    type="email"
                    id="email"
                    name="email"
                    required
                    class="w-full border border-gray-300 px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                  />
                </div>

                <!-- Message Field -->
                <div class="mb-4" data-aos="fade-up" data-aos-delay="400">
                  <label for="message" class="block mb-1 font-medium text-black"
                    >Message</label
                  >
                  <textarea
                    id="message"
                    name="message"
                    rows="4"
                    required
                    class="w-full border border-gray-300 px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                  ></textarea>
                </div>

                <!-- Submit Button -->
                <button
                  type="submit"
                  class="bg-blue-800 text-white px-6 py-2 rounded-md hover:bg-blue-900 transition"
                  data-aos="fade-up"
                  data-aos-delay="500"
                >
                  Send Message
                </button>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>

    <?php include __DIR__ . '/includes/footer.php'; ?>
  </body>
</html>
