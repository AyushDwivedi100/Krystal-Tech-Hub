<?php $current_page = 'about'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <!-- Responsive viewport for mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Primary SEO meta tags -->
    <title>
      About Us - Krystal Tech Hub | Industrial Electrical & Automation Experts
    </title>
    <meta
      name="description"
      content="Krystal Tech Hub delivers excellence in industrial electrical, automation, and instrumentation services across India. Learn about our expert team, services, and commitment to quality."
    />
    <meta
      name="keywords"
      content="Industrial Electrical, Automation, Instrumentation, Power Panels, Site Commissioning, Maintenance Contracts, Krystal Tech Hub"
    />
    <meta name="author" content="Krystal Tech Hub" />

    <!-- Favicon -->
    <link
      rel="icon"
      href="assets/img/favicon/favicon.ico"
      type="image/x-icon"
    />

    <!-- Tailwind CSS CDN (load early for styles) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- AOS CSS for animation on scroll -->
    <link
      href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"
      rel="stylesheet"
    />

    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <!-- Open Graph for social media sharing -->
    <meta property="og:title" content="About Us - Krystal Tech Hub" />
    <meta
      property="og:description"
      content="Krystal Tech Hub: Experts in industrial electrical and automation solutions across India."
    />
    <meta property="og:image" content="/assets/img/krystaltechhub.jpg" />
    <meta property="og:url" content="https://yourwebsite.com/about.html" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="About Us - Krystal Tech Hub" />
    <meta
      name="twitter:description"
      content="Delivering excellence in industrial electrical, automation, and instrumentation services across India."
    />
    <meta name="twitter:image" content="/assets/img/krystaltechhub.jpg" />
  </head>
  <body class="text-gray-800">
    <?php include __DIR__ . '/includes/header.php'; ?>

    <!-- Main Content -->
    <main id="main-content" role="main" aria-label="About Krystal Tech Hub">
    <!-- Hero Section with enhanced design -->
    <section
      class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-indigo-900 text-white py-12 sm:py-16 md:py-20 pt-24 sm:pt-32 md:pt-40 lg:pt-48 overflow-hidden"
      data-aos="fade-in"
      role="banner"
      aria-label="About Krystal Tech Hub hero section"
    >
      <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-blue-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-indigo-500/10 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full h-full">
          <svg class="w-full h-full opacity-5" viewBox="0 0 100 100" preserveAspectRatio="none">
            <defs>
              <pattern id="grid-about" width="10" height="10" patternUnits="userSpaceOnUse">
                <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.5"/>
              </pattern>
            </defs>
            <rect width="100" height="100" fill="url(#grid-about)"/>
          </svg>
        </div>
      </div>

      <div class="container mx-auto text-center px-4 relative z-10">
        <div class="flex flex-wrap justify-center gap-2 sm:gap-3 mb-4 sm:mb-6" data-aos="fade-down" data-aos-delay="100">
          <span class="inline-flex items-center gap-1 sm:gap-2 bg-white/10 backdrop-blur-sm text-xs sm:text-sm px-2 sm:px-4 py-1.5 sm:py-2 rounded-full border border-white/20">
            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>
            Trusted Since Inception
          </span>
          <span class="inline-flex items-center gap-1 sm:gap-2 bg-white/10 backdrop-blur-sm text-xs sm:text-sm px-2 sm:px-4 py-1.5 sm:py-2 rounded-full border border-white/20">
            <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
            </svg>
            GST Registered
          </span>
        </div>

        <h1
          class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold mb-4 sm:mb-6"
          data-aos="zoom-in"
          data-aos-delay="200"
        >
          About <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-cyan-300">Krystal Tech Hub</span>
        </h1>
        <p
          class="text-sm sm:text-base md:text-lg lg:text-xl text-blue-100 max-w-3xl mx-auto mb-6 sm:mb-8 px-2"
          data-aos="fade-up"
          data-aos-delay="400"
        >
          Delivering excellence in industrial electrical, automation, and
          instrumentation services across India with cutting-edge technology and expert solutions.
        </p>

        <div class="flex flex-wrap justify-center gap-3 sm:gap-4 md:gap-6 mt-6 sm:mt-8" data-aos="fade-up" data-aos-delay="500">
          <div class="flex items-center gap-2 sm:gap-3 bg-white/5 backdrop-blur-sm px-3 sm:px-4 md:px-5 py-2 sm:py-3 rounded-xl border border-white/10">
            <div class="bg-blue-500/20 p-1.5 sm:p-2 rounded-lg">
              <svg class="w-4 h-4 sm:w-5 sm:h-5 md:w-6 md:h-6 text-blue-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
              </svg>
            </div>
            <div class="text-left">
              <div class="text-lg sm:text-xl md:text-2xl font-bold">50+</div>
              <div class="text-[10px] sm:text-xs text-blue-200">Projects Completed</div>
            </div>
          </div>
          <div class="flex items-center gap-2 sm:gap-3 bg-white/5 backdrop-blur-sm px-3 sm:px-4 md:px-5 py-2 sm:py-3 rounded-xl border border-white/10">
            <div class="bg-green-500/20 p-1.5 sm:p-2 rounded-lg">
              <svg class="w-4 h-4 sm:w-5 sm:h-5 md:w-6 md:h-6 text-green-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
              </svg>
            </div>
            <div class="text-left">
              <div class="text-lg sm:text-xl md:text-2xl font-bold">100+</div>
              <div class="text-[10px] sm:text-xs text-blue-200">Happy Clients</div>
            </div>
          </div>
          <div class="flex items-center gap-2 sm:gap-3 bg-white/5 backdrop-blur-sm px-3 sm:px-4 md:px-5 py-2 sm:py-3 rounded-xl border border-white/10">
            <div class="bg-yellow-500/20 p-1.5 sm:p-2 rounded-lg">
              <svg class="w-4 h-4 sm:w-5 sm:h-5 md:w-6 md:h-6 text-yellow-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
              </svg>
            </div>
            <div class="text-left">
              <div class="text-lg sm:text-xl md:text-2xl font-bold">24/7</div>
              <div class="text-[10px] sm:text-xs text-blue-200">Support Available</div>
            </div>
          </div>
        </div>
      </div>

      <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-16 text-white" viewBox="0 0 1440 60" preserveAspectRatio="none">
          <path fill="currentColor" d="M0,0 C480,60 960,60 1440,0 L1440,60 L0,60 Z"></path>
        </svg>
      </div>
    </section>

    <!-- Who We Are Section -->
    <section class="py-10 sm:py-12 md:py-16 bg-white" aria-labelledby="who-we-are-heading">
      <div
        class="container mx-auto flex flex-col md:flex-row items-center gap-6 sm:gap-8 px-4 sm:px-6"
      >
        <img
          src="assets/img/about_page/instrumentation-panel.jpg"
          alt="Instrumentation panel showing electrical components"
          class="w-full md:w-1/2 rounded-lg shadow-lg"
          data-aos="fade-right"
          data-aos-duration="1000"
          role="img"
        />
        <div
          class="md:w-1/2"
          data-aos="fade-left"
          data-aos-duration="1000"
          data-aos-delay="200"
        >
          <h2 id="who-we-are-heading" class="text-2xl sm:text-3xl font-semibold mb-3 sm:mb-4">
            Who We Are
          </h2>
          <p class="text-gray-700 leading-relaxed text-sm sm:text-base">
            Krystal Tech Hub is a trusted leader in process automation,
            electrical systems, and industrial power solutions. Founded on a
            commitment to engineering excellence, we specialize in end-to-end
            services—ranging from design and fabrication of power and control
            panels to comprehensive commissioning and ongoing maintenance.
          </p>
          <p class="text-gray-700 leading-relaxed mt-3 sm:mt-4 font-medium text-sm sm:text-base">
            Founded and led by <strong>Ayush Shukla</strong> and
            <strong>Shatyam Shukla</strong>, our firm brings a vision of
            innovation and reliability to the industrial landscape.
          </p>
        </div>
      </div>
    </section>

    <!-- Our Services Section -->
    <section
      class="py-10 sm:py-12 md:py-16 bg-gray-50"
      data-aos="fade-up"
      aria-labelledby="services-heading"
    >
      <div class="container mx-auto text-center mb-8 sm:mb-12 px-4 sm:px-6">
        <h2
          id="services-heading"
          class="text-2xl sm:text-3xl font-semibold mb-3 sm:mb-4"
          data-aos="zoom-in"
          data-aos-delay="100"
        >
          Our Services
        </h2>
        <p class="text-gray-600 text-sm sm:text-base" data-aos="fade-left" data-aos-delay="200">
          A complete suite of industrial electrical & automation solutions
        </p>
      </div>
      <div
        class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 md:gap-8 px-4 sm:px-6"
        role="list"
        aria-label="List of services offered"
      >
        <!-- Service item -->
        <article
          class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition"
          data-aos="fade-up"
          data-aos-delay="300"
          role="listitem"
        >
          <img
            src="https://cdn-icons-png.flaticon.com/512/1055/1055687.png"
            alt="Icon representing Automation"
            class="h-16 mx-auto mb-4"
            aria-hidden="true"
          />
          <h3 class="font-semibold mb-2">
            Process Automation & Instrumentation
          </h3>
          <p class="text-gray-600">
            From PLC, SCADA, and DCS systems to field instrumentation and
            process optimization.
          </p>
        </article>

        <!-- Service item -->
        <article
          class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition"
          data-aos="fade-up"
          data-aos-delay="400"
          role="listitem"
        >
          <img
            src="assets/img/about_page/site-commissioning.png"
            alt="Icon representing Site Commissioning"
            class="h-16 mx-auto mb-4"
            aria-hidden="true"
          />
          <h3 class="font-semibold mb-2">Site Commissioning</h3>
          <p class="text-gray-600">
            End-to-end commissioning of industrial electrical and automation
            systems.
          </p>
        </article>

        <!-- Service item -->
        <article
          class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition"
          data-aos="fade-up"
          data-aos-delay="500"
          role="listitem"
        >
          <img
            src="assets/img/about_page/power-and-control-panel.png"
            alt="Icon representing Power and Control Panels"
            class="h-16 mx-auto mb-4"
            aria-hidden="true"
          />
          <h3 class="font-semibold mb-2">Power & Control Panels</h3>
          <p class="text-gray-600">
            Design, manufacturing, and testing of LT/HT panels and MCCs.
          </p>
        </article>

        <!-- Service item -->
        <article
          class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition"
          data-aos="fade-up"
          data-aos-delay="600"
          role="listitem"
        >
          <img
            src="assets/img/about_page/site-installation-service.svg"
            alt="Icon representing Site Installation Services"
            class="h-16 mx-auto mb-4"
            aria-hidden="true"
          />
          <h3 class="font-semibold mb-2">Site Installation Services</h3>
          <p class="text-gray-600">
            Expert installation of electrical panels, wiring, and
            instrumentation systems.
          </p>
        </article>

        <!-- Service item -->
        <article
          class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition"
          data-aos="fade-up"
          data-aos-delay="700"
          role="listitem"
        >
          <img
            src="assets/img/about_page/annual_maintenance.png"
            alt="Icon representing Annual Maintenance Contracts"
            class="h-16 mx-auto mb-4"
            aria-hidden="true"
          />
          <h3 class="font-semibold mb-2">Annual Maintenance Contracts</h3>
          <p class="text-gray-600">
            Ensure system uptime with proactive service and support contracts.
          </p>
        </article>

        <!-- Service item -->
        <article
          class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition"
          data-aos="fade-up"
          data-aos-delay="800"
          role="listitem"
        >
          <img
            src="https://cdn-icons-png.flaticon.com/512/3050/3050525.png"
            alt="Icon representing Industrial Product Distribution"
            class="h-16 mx-auto mb-4"
            aria-hidden="true"
          />
          <h3 class="font-semibold mb-2">Industrial Product Distribution</h3>
          <p class="text-gray-600">
            Trusted supplier of certified electrical and electronic industrial
            equipment.
          </p>
        </article>
      </div>
    </section>

    <!-- Why Choose Us Section -->
    <section
      class="py-16 bg-white"
      data-aos="fade-up"
      aria-labelledby="why-choose-us-heading"
    >
      <div class="container mx-auto px-4">
        <h2
          id="why-choose-us-heading"
          class="text-3xl font-semibold text-center mb-8"
          data-aos="zoom-in"
          data-aos-delay="100"
        >
          Why Choose Krystal Tech Hub?
        </h2>
        <ul
          class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto"
          role="list"
          aria-label="Reasons to choose Krystal Tech Hub"
        >
          <li
            class="flex items-start text-gray-700 gap-4"
            data-aos="fade-right"
            data-aos-delay="200"
          >
            <img
              src="assets/img/about_page/expert-engineering-team.png"
              alt="Expert Engineering Team Icon"
              class="h-8 mt-1"
              aria-hidden="true"
            />
            <span
              ><strong>Expert Engineering Team</strong> with deep domain
              knowledge and hands-on experience.</span
            >
          </li>
          <li
            class="flex items-start text-gray-700 gap-4"
            data-aos="fade-left"
            data-aos-delay="300"
          >
            <img
              src="assets/img/about_page/precision-and-control.png"
              alt="Precision and Quality Icon"
              class="h-8 mt-1"
              aria-hidden="true"
            />
            <span
              ><strong>Precision & Quality</strong> through certified design,
              fabrication, and testing.</span
            >
          </li>
          <li
            class="flex items-start text-gray-700 gap-4"
            data-aos="fade-right"
            data-aos-delay="400"
          >
            <img
              src="assets/img/about_page/reliable-support.png"
              alt="Reliable Support Icon"
              class="h-8 mt-1"
              aria-hidden="true"
            />
            <span
              ><strong>Reliable Support</strong> with fast response via AMC and
              field services.</span
            >
          </li>
          <li
            class="flex items-start text-gray-700 gap-4"
            data-aos="fade-left"
            data-aos-delay="500"
          >
            <img
              src="assets/img/about_page/end-to-end-solutions.png"
              alt="End-to-End Solutions Icon"
              class="h-8 mt-1"
              aria-hidden="true"
            />
            <span
              ><strong>End-to-End Solutions</strong> – from supply chain to
              maintenance & training.</span
            >
          </li>
        </ul>
      </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-16 bg-blue-800 text-white text-center" data-aos="fade-up">
      <div class="container mx-auto max-w-3xl px-4">
        <h2 class="text-3xl font-bold mb-4" data-aos="zoom-in" data-aos-delay="100">
          Ready to Transform Your Plant?
        </h2>
        <p class="text-lg text-blue-100 mb-8" data-aos="fade-up" data-aos-delay="200">
          Contact Krystal Tech Hub today for a consultation or quote on your automation and electrical needs.
        </p>
        <a
          href="/contact"
          class="inline-flex items-center gap-2 bg-white text-blue-800 px-8 py-4 rounded-full font-bold hover:bg-blue-50 hover:shadow-lg transform hover:scale-105 transition duration-300"
          data-aos="flip-up"
          data-aos-delay="300"
        >
          <span>Get Expert Consultation</span>
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
