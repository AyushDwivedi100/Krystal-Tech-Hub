<?php
if (!isset($current_page)) {
    $current_page = '';
}
?>
<!-- Skip Navigation Link for Accessibility -->
<a
  href="#main-content"
  class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-[9999] focus:bg-blue-600 focus:text-white focus:px-4 focus:py-2 focus:rounded-md"
>
  Skip to main content
</a>

<!-- Fixed Header Container -->
<header class="fixed top-0 left-0 right-0 z-50" role="banner">
  <!-- Top Bar with Contact Info -->
  <div class="bg-blue-900 text-white text-xs sm:text-sm py-1.5 sm:py-2">
    <div class="container mx-auto px-3 sm:px-6 md:px-20">
      <div
        class="flex flex-row justify-between items-center gap-2"
      >
        <div
          class="flex flex-wrap justify-start items-center gap-2 sm:gap-4 md:gap-6"
        >
          <a
            href="tel:+918808408802"
            class="flex items-center gap-1 sm:gap-2 hover:text-blue-300 transition"
            aria-label="Call us at +91 88084 08802"
          >
            <svg
              class="w-3 h-3 sm:w-4 sm:h-4 shrink-0"
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
            <span class="hidden sm:inline">+91 88084 08802</span>
            <span class="sm:hidden">Call</span>
          </a>
          <a
            href="mailto:info@krystaltechhub.in"
            class="flex items-center gap-1 sm:gap-2 hover:text-blue-300 transition"
            aria-label="Email us at info@krystaltechhub.in"
          >
            <svg
              class="w-3 h-3 sm:w-4 sm:h-4 shrink-0"
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
            <span class="hidden sm:inline">info@krystaltechhub.in</span>
            <span class="sm:hidden">Email</span>
          </a>
        </div>
        <a
          href="https://maps.google.com/?q=G+T+Road,+Handia,+Ward+No.+09,+Near+Manas+Hall,+Prayagraj,+Uttar+Pradesh,+India+221503"
          target="_blank"
          rel="noopener noreferrer"
          class="flex items-center gap-1 sm:gap-2 hover:text-blue-300 transition text-right shrink-0"
          aria-label="View our location on Google Maps - Handia, Prayagraj"
        >
          <svg
            class="w-3 h-3 sm:w-4 sm:h-4 shrink-0"
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
          <span class="hidden md:inline text-xs md:text-sm">Handia, Prayagraj, UP - 221503</span>
          <span class="md:hidden text-xs">Location</span>
        </a>
      </div>
    </div>
  </div>

  <!-- Navigation -->
  <nav
    class="bg-white shadow-md"
    role="navigation"
    aria-label="Main Navigation"
  >
    <div class="container mx-auto flex justify-between items-center px-3 sm:px-4 md:px-20">
      <a href="/" aria-label="Homepage - Krystal Tech Hub" class="shrink-0">
        <img
          src="/assets/img/krystaltechhub.jpg"
          alt="Krystal Tech Hub Logo"
          class="h-12 sm:h-14 md:h-16 lg:h-20 w-auto object-contain py-1.5 sm:py-2"
          loading="lazy"
        />
      </a>
      <div class="flex items-center justify-between">
        <div class="hidden md:flex space-x-4 lg:space-x-8" role="menubar">
          <a
            href="/about"
            class="text-gray-800 hover:text-blue-600<?php echo $current_page === 'about' ? ' nav-link-active' : ''; ?>"
            <?php echo $current_page === 'about' ? 'aria-current="page"' : ''; ?>
            role="menuitem"
            >About</a
          >
          <a
            href="/services"
            class="text-gray-800 hover:text-blue-600<?php echo $current_page === 'services' ? ' nav-link-active' : ''; ?>"
            <?php echo $current_page === 'services' ? 'aria-current="page"' : ''; ?>
            role="menuitem"
            >Services</a
          >
          <a
            href="/products"
            class="text-gray-800 hover:text-blue-600<?php echo $current_page === 'products' ? ' nav-link-active' : ''; ?>"
            <?php echo $current_page === 'products' ? 'aria-current="page"' : ''; ?>
            role="menuitem"
            >Products</a
          >
          <a
            href="/contact"
            class="text-gray-800 hover:text-blue-600<?php echo $current_page === 'contact' ? ' nav-link-active' : ''; ?>"
            <?php echo $current_page === 'contact' ? 'aria-current="page"' : ''; ?>
            role="menuitem"
            >Contact</a
          >
        </div>

        <!-- Mobile Hamburger -->
        <div class="md:hidden">
          <button
            id="hamburger-btn"
            aria-label="Toggle mobile menu"
            aria-expanded="false"
            aria-controls="mobile-menu"
            class="text-gray-800 focus:outline-none p-2"
          >
            <svg
              class="h-6 w-6"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              aria-hidden="true"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"
              ></path>
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div
      id="mobile-menu"
      class="md:hidden px-4 sm:px-6 pb-4 pt-2 hidden flex-col space-y-3 bg-white border-t border-gray-100"
      role="menu"
      aria-label="Mobile Navigation"
    >
      <a
        href="/about"
        class="block text-gray-800 hover:text-blue-600<?php echo $current_page === 'about' ? ' nav-link-active' : ''; ?>"
        <?php echo $current_page === 'about' ? 'aria-current="page"' : ''; ?>
        role="menuitem"
        >About</a
      >
      <a
        href="/services"
        class="block text-gray-800 hover:text-blue-600<?php echo $current_page === 'services' ? ' nav-link-active' : ''; ?>"
        <?php echo $current_page === 'services' ? 'aria-current="page"' : ''; ?>
        role="menuitem"
        >Services</a
      >
      <a
        href="/products"
        class="block text-gray-800 hover:text-blue-600<?php echo $current_page === 'products' ? ' nav-link-active' : ''; ?>"
        <?php echo $current_page === 'products' ? 'aria-current="page"' : ''; ?>
        role="menuitem"
        >Products</a
      >
      <a
        href="/contact"
        class="block text-gray-800 hover:text-blue-600<?php echo $current_page === 'contact' ? ' nav-link-active' : ''; ?>"
        <?php echo $current_page === 'contact' ? 'aria-current="page"' : ''; ?>
        role="menuitem"
        >Contact</a
      >
    </div>
  </nav>
</header>
