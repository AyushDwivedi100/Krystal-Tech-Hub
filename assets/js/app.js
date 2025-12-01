document.addEventListener("DOMContentLoaded", function () {
  // ✅ Hamburger toggle
  function initHamburgerMenu() {
    const hamburgerBtn = document.getElementById("hamburger-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    if (hamburgerBtn && mobileMenu) {
      hamburgerBtn.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
      });
    }
  }
  initHamburgerMenu();

  // ✅ Toast Notification System
  const toastStyles = document.createElement("style");
  toastStyles.textContent = `
    .toast-container {
      position: fixed;
      bottom: 24px;
      right: 24px;
      z-index: 10000;
      display: flex;
      flex-direction: column;
      gap: 12px;
    }
    .toast {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 16px 20px;
      border-radius: 12px;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
      transform: translateX(120%);
      opacity: 0;
      transition: transform 0.4s ease, opacity 0.4s ease;
      max-width: 380px;
      font-family: inherit;
    }
    .toast.show {
      transform: translateX(0);
      opacity: 1;
    }
    .toast.hide {
      transform: translateX(120%);
      opacity: 0;
    }
    .toast-success {
      background: linear-gradient(135deg, #10B981 0%, #059669 100%);
      color: white;
    }
    .toast-error {
      background: linear-gradient(135deg, #EF4444 0%, #DC2626 100%);
      color: white;
    }
    .toast-icon {
      width: 24px;
      height: 24px;
      flex-shrink: 0;
    }
    .toast-content {
      flex: 1;
    }
    .toast-title {
      font-weight: 600;
      font-size: 15px;
      margin-bottom: 2px;
    }
    .toast-message {
      font-size: 14px;
      opacity: 0.9;
    }
    .toast-close {
      background: none;
      border: none;
      color: white;
      cursor: pointer;
      padding: 4px;
      opacity: 0.7;
      transition: opacity 0.2s;
    }
    .toast-close:hover {
      opacity: 1;
    }
    @media (max-width: 480px) {
      .toast-container {
        left: 16px;
        right: 16px;
        bottom: 16px;
      }
      .toast {
        max-width: 100%;
      }
    }
  `;
  document.head.appendChild(toastStyles);

  let toastContainer = document.querySelector('.toast-container');
  if (!toastContainer) {
    toastContainer = document.createElement('div');
    toastContainer.className = 'toast-container';
    document.body.appendChild(toastContainer);
  }

  function showToast(type, title, message) {
    const toast = document.createElement('div');
    toast.className = `toast toast-${type}`;
    
    const iconSvg = type === 'success' 
      ? '<svg class="toast-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>'
      : '<svg class="toast-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>';
    
    toast.innerHTML = `
      ${iconSvg}
      <div class="toast-content">
        <div class="toast-title">${title}</div>
        <div class="toast-message">${message}</div>
      </div>
      <button class="toast-close" aria-label="Close">
        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    `;
    
    toastContainer.appendChild(toast);
    
    requestAnimationFrame(() => {
      toast.classList.add('show');
    });
    
    const closeBtn = toast.querySelector('.toast-close');
    closeBtn.addEventListener('click', () => removeToast(toast));
    
    setTimeout(() => removeToast(toast), 5000);
  }

  function removeToast(toast) {
    if (!toast.parentNode) return;
    toast.classList.remove('show');
    toast.classList.add('hide');
    setTimeout(() => {
      if (toast.parentNode) {
        toast.parentNode.removeChild(toast);
      }
    }, 400);
  }

  window.showToast = showToast;

  // ✅ WhatsApp Floating Button
  const whatsappNumber = "918808408802";
  const whatsappMessage = "Hello! I'm interested in your industrial automation services. Please provide more information.";
  const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(whatsappMessage)}`;

  const whatsappStyles = document.createElement("style");
  whatsappStyles.textContent = `
    .whatsapp-float {
      position: fixed;
      bottom: 24px;
      left: 24px;
      z-index: 9999;
    }
    .whatsapp-button {
      width: 60px;
      height: 60px;
      background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 15px rgba(37, 211, 102, 0.4);
      cursor: pointer;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      animation: whatsapp-pulse 1.2s infinite;
      text-decoration: none;
    }
    .whatsapp-button:hover {
      transform: scale(1.1);
      box-shadow: 0 6px 20px rgba(37, 211, 102, 0.6);
      animation: none;
    }
    .whatsapp-button svg {
      width: 32px;
      height: 32px;
      fill: white;
    }
    .whatsapp-tooltip {
      position: absolute;
      left: 70px;
      top: 50%;
      transform: translateY(-50%);
      background: #25D366;
      color: white;
      padding: 8px 16px;
      border-radius: 8px;
      font-size: 14px;
      font-weight: 600;
      white-space: nowrap;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.3s ease, visibility 0.3s ease;
      box-shadow: 0 2px 10px rgba(0,0,0,0.15);
    }
    .whatsapp-tooltip::before {
      content: '';
      position: absolute;
      left: -6px;
      top: 50%;
      transform: translateY(-50%);
      border: 6px solid transparent;
      border-right-color: #25D366;
      border-left: none;
    }
    .whatsapp-float:hover .whatsapp-tooltip {
      opacity: 1;
      visibility: visible;
    }
    @keyframes whatsapp-pulse {
      0% {
        box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
      }
      70% {
        box-shadow: 0 0 0 15px rgba(37, 211, 102, 0);
      }
      100% {
        box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
      }
    }
  `;
  document.head.appendChild(whatsappStyles);

  const whatsappHTML = `
    <div class="whatsapp-float">
      <a href="${whatsappURL}" target="_blank" rel="noopener noreferrer" class="whatsapp-button" aria-label="Chat on WhatsApp">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
        </svg>
      </a>
      <span class="whatsapp-tooltip">WhatsApp</span>
    </div>
  `;

  document.body.insertAdjacentHTML("beforeend", whatsappHTML);

  // ✅ Contact form submission handler
  function initContactForm() {
    const contactForm = document.getElementById("contactForm");

    if (contactForm) {
      contactForm.addEventListener("submit", function (e) {
        e.preventDefault();

        const submitBtn = this.querySelector('[type="submit"]');
        submitBtn.disabled = true;
        submitBtn.textContent = "Sending...";

        fetch(this.action, {
          method: "POST",
          body: new FormData(this),
          headers: {
            Accept: "application/json",
          },
        })
          .then((response) => {
            if (response.ok) {
              showToast("success", "Message Sent!", "We will get back to you soon.");
              this.reset();
            } else {
              throw new Error("Failed to send message");
            }
          })
          .catch((error) => {
            showToast("error", "Error", "Failed to send message. Please try again later.");
            console.error(error);
          })
          .finally(() => {
            submitBtn.disabled = false;
            submitBtn.textContent = "Send Message";
          });
      });
    }
  }
  initContactForm();

  // ✅ AJAX Navigation System (SPA-like navigation)
  const ajaxNavStyles = document.createElement("style");
  ajaxNavStyles.textContent = `
    #main-content {
      transition: opacity 0.25s ease-in-out;
    }
    #main-content.fade-out {
      opacity: 0;
    }
    #main-content.fade-in {
      opacity: 1;
    }
    .page-loader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 3px;
      background: linear-gradient(90deg, #3b82f6 0%, #1d4ed8 50%, #3b82f6 100%);
      background-size: 200% 100%;
      animation: loading-bar 1.5s ease-in-out infinite;
      z-index: 99999;
      opacity: 0;
      transition: opacity 0.2s;
    }
    .page-loader.active {
      opacity: 1;
    }
    @keyframes loading-bar {
      0% { background-position: 200% 0; }
      100% { background-position: -200% 0; }
    }
  `;
  document.head.appendChild(ajaxNavStyles);

  const loader = document.createElement("div");
  loader.className = "page-loader";
  document.body.appendChild(loader);

  const internalNavPages = ['/about', '/services', '/products', '/contact', '/'];
  
  function isInternalNavLink(href) {
    if (!href) return false;
    try {
      const url = new URL(href, window.location.origin);
      if (url.origin !== window.location.origin) return false;
      const path = url.pathname.replace(/\.php$/, '').replace(/\.html$/, '');
      return internalNavPages.includes(path) || path === '/index';
    } catch {
      return false;
    }
  }

  function getCleanPath(href) {
    try {
      const url = new URL(href, window.location.origin);
      let path = url.pathname;
      path = path.replace(/\.php$/, '').replace(/\.html$/, '');
      if (path === '/index') path = '/';
      return path;
    } catch {
      return href;
    }
  }

  function getFetchUrl(cleanPath) {
    if (cleanPath === '/') {
      return '/index.php';
    }
    return cleanPath + '.php';
  }

  function updateActiveNavLinks(currentPath) {
    const navLinks = document.querySelectorAll('header nav a[role="menuitem"]');
    navLinks.forEach(link => {
      const linkPath = getCleanPath(link.getAttribute('href'));
      const isActive = linkPath === currentPath || 
                       (linkPath !== '/' && currentPath.startsWith(linkPath));
      
      if (isActive) {
        link.classList.add('nav-link-active');
        link.setAttribute('aria-current', 'page');
      } else {
        link.classList.remove('nav-link-active');
        link.removeAttribute('aria-current');
      }
    });
  }

  async function loadPage(cleanPath, pushState = true) {
    const mainContent = document.getElementById('main-content');
    if (!mainContent) {
      window.location.href = cleanPath;
      return;
    }

    loader.classList.add('active');
    mainContent.classList.add('fade-out');

    const fetchUrl = getFetchUrl(cleanPath);

    try {
      const response = await fetch(fetchUrl);
      if (!response.ok) throw new Error('Page not found');
      
      const html = await response.text();
      const parser = new DOMParser();
      const doc = parser.parseFromString(html, 'text/html');
      const newContent = doc.getElementById('main-content');
      const newTitle = doc.querySelector('title');

      if (newContent) {
        await new Promise(resolve => setTimeout(resolve, 250));
        
        mainContent.innerHTML = newContent.innerHTML;
        
        if (newTitle) {
          document.title = newTitle.textContent;
        }

        if (pushState) {
          history.pushState({ path: cleanPath }, '', cleanPath);
        }

        updateActiveNavLinks(cleanPath);

        const mobileMenu = document.getElementById('mobile-menu');
        if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
          mobileMenu.classList.add('hidden');
        }

        mainContent.classList.remove('fade-out');
        mainContent.classList.add('fade-in');

        if (typeof AOS !== 'undefined') {
          AOS.refresh();
        }

        initContactForm();

        window.scrollTo({ top: 0, behavior: 'smooth' });

        setTimeout(() => {
          mainContent.classList.remove('fade-in');
        }, 300);
      } else {
        throw new Error('Content not found');
      }
    } catch (error) {
      console.error('Navigation error:', error);
      window.location.href = cleanPath;
    } finally {
      loader.classList.remove('active');
    }
  }

  document.addEventListener('click', function(e) {
    const link = e.target.closest('a');
    if (!link) return;

    const href = link.getAttribute('href');
    
    if (link.closest('.whatsapp-float')) return;
    if (link.target === '_blank') return;
    if (link.hasAttribute('download')) return;
    if (href && href.startsWith('#')) return;
    if (href && (href.startsWith('mailto:') || href.startsWith('tel:'))) return;

    if (isInternalNavLink(href)) {
      e.preventDefault();
      const cleanPath = getCleanPath(href);
      
      if (cleanPath !== getCleanPath(window.location.pathname)) {
        loadPage(cleanPath);
      }
    }
  });

  window.addEventListener('popstate', function(e) {
    const cleanPath = e.state?.path || getCleanPath(window.location.pathname);
    loadPage(cleanPath, false);
  });

  const initialPath = getCleanPath(window.location.pathname);
  history.replaceState({ path: initialPath }, '', window.location.pathname);
  updateActiveNavLinks(initialPath);
});
