<?php $current_page = 'contact'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Primary Meta Tags -->
    <title>
      Contact Us - Krystal Tech Hub | Industrial Solutions in Prayagraj
    </title>
    <meta
      name="description"
      content="Get in touch with Krystal Tech Hub for expert industrial solutions, consulting, and services in Prayagraj, Uttar Pradesh. Contact us via email, phone, or visit our office."
    />
    <meta
      name="keywords"
      content="Krystal Tech Hub, industrial solutions, contact, Prayagraj, Uttar Pradesh, industrial projects, consulting"
    />
    <meta name="author" content="Krystal Tech Hub" />
    <meta name="robots" content="index, follow" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Contact Us - Krystal Tech Hub" />
    <meta
      property="og:description"
      content="Contact Krystal Tech Hub for industrial solutions and services in Prayagraj, Uttar Pradesh."
    />
    <meta
      property="og:url"
      content="https://www.krystaltechhub.in/contact.html"
    />
    <meta
      property="og:image"
      content="https://www.krystaltechhub.in/assets/img/krystaltechhub.jpg"
    />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Contact Us - Krystal Tech Hub" />
    <meta
      name="twitter:description"
      content="Reach out to Krystal Tech Hub for industrial consulting and solutions."
    />
    <meta
      name="twitter:image"
      content="https://www.krystaltechhub.in/assets/img/krystaltechhub.jpg"
    />

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

    <!-- Structured Data: Organization & ContactPoint in JSON-LD -->
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Krystal Tech Hub",
        "url": "https://www.krystaltechhub.in",
        "logo": "https://www.krystaltechhub.in/assets/img/krystaltechhub.jpg",
        "contactPoint": {
          "@type": "ContactPoint",
          "telephone": "+91-8808408802",
          "contactType": "customer service",
          "areaServed": "IN",
          "availableLanguage": ["English", "Hindi"]
        },
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "G T Road, Handia, Ward No. 09, Near Manas Hall",
          "addressLocality": "Handia, Prayagraj",
          "addressRegion": "Uttar Pradesh",
          "postalCode": "221503",
          "addressCountry": "IN"
        }
      }
    </script>
  </head>
  <body class="text-gray-800">
    <?php include __DIR__ . '/includes/header.php'; ?>

    <!-- Main Content -->
    <main id="main-content" role="main" aria-label="Contact Krystal Tech Hub">
    <!-- Hero Section -->
    <section
      class="relative bg-gradient-to-br from-blue-900 via-indigo-900 to-purple-900 text-white py-12 sm:py-16 md:py-20 pt-24 sm:pt-32 md:pt-40 lg:pt-48 overflow-hidden"
      data-aos="fade-in"
      aria-labelledby="contact-hero-title"
    >
      <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-20 left-1/4 w-72 h-72 bg-blue-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-20 right-1/4 w-80 h-80 bg-purple-500/10 rounded-full blur-3xl"></div>
        <svg class="absolute inset-0 w-full h-full opacity-[0.03]" viewBox="0 0 100 100">
          <defs>
            <pattern id="contact-waves" width="40" height="20" patternUnits="userSpaceOnUse">
              <path d="M0 10 Q10 0 20 10 T40 10" fill="none" stroke="white" stroke-width="0.5"/>
            </pattern>
          </defs>
          <rect width="100" height="100" fill="url(#contact-waves)"/>
        </svg>
      </div>

      <div class="container mx-auto px-4 relative z-10 text-center">
        <div class="flex flex-wrap justify-center gap-2 sm:gap-3 mb-4 sm:mb-6" data-aos="fade-down" data-aos-delay="100">
          <span class="inline-flex items-center gap-1 sm:gap-2 bg-white/10 backdrop-blur-sm text-xs sm:text-sm px-2 sm:px-4 py-1.5 sm:py-2 rounded-full border border-white/20">
            <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
            </svg>
            Quick Response
          </span>
          <span class="inline-flex items-center gap-1 sm:gap-2 bg-white/10 backdrop-blur-sm text-xs sm:text-sm px-2 sm:px-4 py-1.5 sm:py-2 rounded-full border border-white/20">
            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
            </svg>
            24/7 Available
          </span>
          <span class="inline-flex items-center gap-1 sm:gap-2 bg-white/10 backdrop-blur-sm text-xs sm:text-sm px-2 sm:px-4 py-1.5 sm:py-2 rounded-full border border-white/20">
            <svg class="w-4 h-4 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
            </svg>
            Prayagraj, UP
          </span>
        </div>

        <h1
          id="contact-hero-title"
          class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold mb-4 sm:mb-6"
          data-aos="zoom-in"
          data-aos-delay="150"
        >
          Get in <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 to-blue-300">Touch</span>
        </h1>
        <p class="text-sm sm:text-base md:text-lg lg:text-xl text-blue-100 max-w-2xl mx-auto mb-6 sm:mb-8 px-2" data-aos="fade-up" data-aos-delay="350">
          We're here to answer your queries and help you start your next industrial
          project. Reach out today!
        </p>

        <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-3 sm:gap-4 md:gap-6 mt-6 sm:mt-8" data-aos="fade-up" data-aos-delay="450">
          <a href="tel:+918808408802" class="flex items-center gap-2 sm:gap-3 bg-white/10 backdrop-blur-sm px-4 sm:px-5 md:px-6 py-3 sm:py-4 rounded-xl border border-white/20 hover:bg-white/20 transition duration-300 group">
            <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gradient-to-br from-green-500 to-emerald-500 rounded-lg sm:rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition shrink-0">
              <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
              </svg>
            </div>
            <div class="text-left">
              <div class="text-[10px] sm:text-xs text-blue-200">Call Us Now</div>
              <div class="font-semibold text-sm sm:text-base">+91 88084 08802</div>
            </div>
          </a>
          <a href="mailto:info@krystaltechhub.in" class="flex items-center gap-2 sm:gap-3 bg-white/10 backdrop-blur-sm px-4 sm:px-5 md:px-6 py-3 sm:py-4 rounded-xl border border-white/20 hover:bg-white/20 transition duration-300 group">
            <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-lg sm:rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition shrink-0">
              <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
              </svg>
            </div>
            <div class="text-left">
              <div class="text-[10px] sm:text-xs text-blue-200">Email Us</div>
              <div class="font-semibold text-sm sm:text-base">info@krystaltechhub.in</div>
            </div>
          </a>
        </div>
      </div>

      <div class="absolute bottom-0 left-0 right-0">
        <svg class="w-full h-16 text-gray-50" viewBox="0 0 1440 60" preserveAspectRatio="none">
          <path fill="currentColor" d="M0,0 C480,60 960,60 1440,0 L1440,60 L0,60 Z"></path>
        </svg>
      </div>
    </section>

    <!-- Contact Section -->
    <section
      class="py-10 sm:py-12 md:py-16 bg-gray-50"
      data-aos="fade-up"
      data-aos-duration="1000"
      aria-labelledby="contact-info-heading"
    >
      <div
        class="container mx-auto px-4 sm:px-6 grid grid-cols-1 md:grid-cols-2 gap-8 sm:gap-10 md:gap-12"
      >
        <!-- Contact Info -->
        <div data-aos="fade-right" data-aos-delay="150">
          <h2 id="contact-info-heading" class="text-xl sm:text-2xl font-semibold mb-3 sm:mb-4">
            Get In Touch
          </h2>
          <p class="text-gray-700 mb-4 sm:mb-6 text-sm sm:text-base">
            Fill out the form or reach out using the information below.
          </p>
          <ul class="text-gray-700 space-y-3 sm:space-y-4 mb-6 sm:mb-8 text-sm sm:text-base">
            <li>
              <strong>Email:</strong>
              <a
                href="mailto:info@krystaltechhub.in"
                class="text-blue-600 hover:underline"
                >info@krystaltechhub.in</a
              >
            </li>
            <li>
              <strong>Phone:</strong>
              <a href="tel:+918808408802" class="text-blue-600 hover:underline"
                >+91 88084 08802</a
              >
            </li>
            <li>
              <strong>Address:</strong> G T Road, Handia, Ward No. 09, Near
              Manas Hall, Handia, Prayagraj, Uttar Pradesh, India - 221503
            </li>
          </ul>

          <!-- Google Map Embed -->
          <div class="rounded overflow-hidden shadow-lg">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d413.1634544882752!2d82.1884479252724!3d25.363007459688983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sin!4v1753359697345!5m2!1sen!2sin"
              width="100%"
              height="250"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              title="Krystal Tech Hub Location on Google Maps"
            >
            </iframe>
          </div>
        </div>

        <!-- Contact Form -->
        <form
          id="contactForm"
          action="contact-handler.php"
          method="POST"
          class="bg-white p-6 rounded-lg shadow-md"
          data-aos="fade-left"
          data-aos-delay="300"
          aria-label="Contact form"
        >
          <div class="mb-4">
            <label for="name" class="block mb-1 font-medium">Name</label>
            <input
              type="text"
              id="name"
              name="name"
              required
              aria-required="true"
              class="w-full border border-gray-300 px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Your full name"
            />
          </div>
          <div class="mb-4">
            <label for="email" class="block mb-1 font-medium">Email</label>
            <input
              type="email"
              id="email"
              name="email"
              required
              aria-required="true"
              class="w-full border border-gray-300 px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="you@example.com"
              autocomplete="email"
            />
          </div>
          <div class="mb-4">
            <label for="message" class="block mb-1 font-medium">Message</label>
            <textarea
              id="message"
              name="message"
              rows="4"
              required
              aria-required="true"
              class="w-full border border-gray-300 px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Write your message here..."
            ></textarea>
          </div>
          <button
            type="submit"
            class="bg-blue-800 text-white px-6 py-2 rounded-md hover:bg-blue-900 transition"
            aria-label="Send your message"
          >
            Send Message
          </button>
        </form>
      </div>
    </section>
    </main>

    <!-- Footer -->

    <?php include __DIR__ . '/includes/footer.php'; ?>
  </body>
</html>
