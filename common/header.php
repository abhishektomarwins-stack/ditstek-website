<?php
$current_page = basename($_SERVER['PHP_SELF']);

$ai_services_pages = [
  'ai-software-development.php',
  'ai-chatbot-development.php',
  'ai-agent-development.php',
  'generative-ai-development-solutions.php',
  'ai-integration-services.php',
  'ai-consulting.php',
  'ai-saas-platform.php',
  'ai-solutions-for-enterprise.php',
  'ai-in-fintech.php',
  'ai-in-oil-and-gas.php',
  'ai-in-healthcare.php',
  'ai-in-manufacturing.php',
  'ai-in-mining.php',
  'ai-in-agriculture.php',
  'ai-in-real-estate.php',
  'ai-in-insurance.php'
];

$services_pages = [
  'it-consulting-services.php',
  'custom-application-development.php',
  'software-development-services.php',
  'full-stack-development-services.php',
  'dedicated-development-team.php',
  'backend-development-services.php',
  'legacy-modernization-services.php',
  'qa-software-testing-services.php',
  'mvp-development.php',
  'cross-platform-development.php',
  'enterprise-software-development.php',
  'product-engineering-services.php',
  'cloud-computing-services.php',
  'digital-transformation-services.php',
  'saas-product-development.php',
  'hire-remote-developers.php',
  'hire-asp-net-developers.php',
  'hire-php-developers.php',
  'hire-ui-ux-developers.php',
  'hire-front-end-developers.php'
];

$industries_pages = [
  'healthcare.php',
  'business-and-workflow-automation.php',
  'edtech-software-development.php',
  'retail.php',
  'iot.php',
  'real-estate.php',
  'fintech.php',
  'transportation-and-logistics.php',
  'mining.php',
  'agriculture.php',
  'automotive.php',
  'insurance.php',
  'oil-and-gas.php'
];

$events_pages = [
  'web-summit-26.php',
  'gitex.php',
  'himss24.php'
];
?>
<header class="site-header">
  <div class="top-bar">
    <div class="container-fluid d-flex justify-content-between align-items-center">
      <div class="top-bar-contacts d-flex gap-3">
        <a href="tel:+15875004784" class="top-bar-item d-flex align-items-center gap-2">
          <i class="fa fa-phone" aria-hidden="true"></i> +1 (587) 500-4784
        </a>
        <a href="tel:+16517807578" class="top-bar-item d-flex align-items-center gap-2">
          <i class="fa fa-phone" aria-hidden="true"></i> +1 (651) 780-7578
        </a>
        <a href="mailto:info@ditstek.com" class="top-bar-item d-flex align-items-center gap-2">
          <i class="fa fa-envelope" aria-hidden="true"></i> info@ditstek.com
        </a>
      </div>
      <div class="d-flex gap-4">
        <a href="https://www.linkedin.com/company/ditstek" target="_blank" rel="noopener noreferrer"
          class="top-bar-social-link" aria-label="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        <a href="https://twitter.com/ditstek" target="_blank" rel="noopener noreferrer" class="top-bar-social-link"
          aria-label="X (Twitter)">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor"
            aria-hidden="true">
            <path
              d="M18.901 1.153h3.68l-8.04 9.19L24 22.847h-7.406l-5.8-7.584-6.64 7.584H.474l8.6-9.83L0 1.153h7.594l5.243 6.932L18.901 1.153zm-1.292 19.49h2.039L6.486 3.24H4.298L17.609 20.643z" />
          </svg>
        </a>
        <a href="https://www.facebook.com/ditstek" target="_blank" rel="noopener noreferrer" class="top-bar-social-link"
          aria-label="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="https://www.youtube.com/@ditstek" target="_blank" rel="noopener noreferrer" class="top-bar-social-link"
          aria-label="YouTube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/ditstek" target="_blank" rel="noopener noreferrer"
          class="top-bar-social-link" aria-label="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="https://www.behance.net/ditstek" target="_blank" rel="noopener noreferrer" class="top-bar-social-link"
          aria-label="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>

  <nav class="main-nav navbar">
    <div class="container-fluid">

      <a href="<?php echo $url; ?>index.php" class="navbar-brand d-flex align-items-center text-decoration-none">
        <img src="<?php echo $url; ?>assets/images/home-page/svg/logo.svg" class="img-fluid" alt="Logo" title="Logo">
      </a>

      <ul class="nav-menu d-flex align-items-center list-unstyled mb-0 ms-5 gap-1">

        <li class="nav-item has-dropdown position-relative">
          <a href="#"
            class="nav-link-item d-flex align-items-center gap-1 <?php echo in_array($current_page, $ai_services_pages) ? "active" : ""; ?>">ai
            services <i class="fa fa-chevron-down nav-arrow"></i></a>
          <div class="dropdown-menu-custom mega-menu position-absolute">
            <p class="mega-menu-title">faster, smarter & cost
              saving ai development services to join marketplace with ease</p>
            <ul class="mega-menu-list list-unstyled d-flex flex-wrap">
              <li class="w-50"> <a href="<?php echo $url; ?>services/ai-software-development.php"
                  class="text-decoration-none d-flex align-items-center fw-bold gap-2 <?php echo ($current_page == "ai-software-development.php") ? "active" : ""; ?>"><i
                    class="fa fa-arrow-right"></i>
                  AI Software
                  Development</a></li>
              <li class="w-50"> <a href="<?php echo $url; ?>services/ai-chatbot-development.php"
                  class="text-decoration-none d-flex align-items-center fw-bold gap-2 <?php echo ($current_page == "ai-chatbot-development.php") ? "active" : ""; ?>"><i
                    class="fa fa-arrow-right"></i> AI Chatbot
                  Development</a></li>
              <li class="w-50"> <a href="<?php echo $url; ?>services/ai-agent-development.php"
                  class="text-decoration-none d-flex align-items-center fw-bold gap-2 <?php echo ($current_page == "ai-agent-development.php") ? "active" : ""; ?>"><i
                    class="fa fa-arrow-right"></i>
                  AI Agent
                  Development</a></li>
              <li class="w-50"> <a href="<?php echo $url; ?>services/generative-ai-development-solutions.php"
                  class="text-decoration-none d-flex align-items-center fw-bold gap-2 <?php echo ($current_page == "generative-ai-development-solutions.php") ? "active" : ""; ?>"><i
                    class="fa fa-arrow-right"></i> Generative AI
                  Development Solutions</a></li>
              <li class="w-50"> <a href="<?php echo $url; ?>services/ai-integration-services.php"
                  class="text-decoration-none d-flex align-items-center fw-bold gap-2 <?php echo ($current_page == "ai-integration-services.php") ? "active" : ""; ?>"><i
                    class="fa fa-arrow-right"></i> AI Integration
                  Services</a></li>
              <li class="w-50"> <a href="<?php echo $url; ?>services/ai-consulting.php"
                  class="text-decoration-none d-flex align-items-center fw-bold gap-2 <?php echo ($current_page == "ai-consulting.php") ? "active" : ""; ?>"><i
                    class="fa fa-arrow-right"></i> AI Consulting</a></li>
              <li class="w-50"> <a href="<?php echo $url; ?>services/ai-saas-platform.php"
                  class="text-decoration-none d-flex align-items-center fw-bold gap-2 <?php echo ($current_page == "ai-saas-platform.php") ? "active" : ""; ?>"><i
                    class="fa fa-arrow-right"></i> AI SaaS
                  Platform</a></li>
              <li class="w-50"> <a href="<?php echo $url; ?>services/ai-solutions-for-enterprise.php"
                  class="text-decoration-none d-flex align-items-center fw-bold gap-2 <?php echo ($current_page == "ai-solutions-for-enterprise.php") ? "active" : ""; ?>"><i
                    class="fa fa-arrow-right"></i> AI Solutions For
                  Enterprise</a></li>
              <li class="w-50"> <a href="<?php echo $url; ?>services/ai-in-fintech.php"
                  class="text-decoration-none d-flex align-items-center fw-bold gap-2 <?php echo ($current_page == "ai-in-fintech.php") ? "active" : ""; ?>"><i
                    class="fa fa-arrow-right"></i> AI In Fintech</a></li>
              <li class="w-50"> <a href="<?php echo $url; ?>services/ai-in-oil-gas.php"
                  class="text-decoration-none d-flex align-items-center fw-bold  gap-2 <?php echo ($current_page == "ai-in-oil-gas.php") ? "active" : ""; ?>"><i
                    class="fa fa-arrow-right"></i> AI In Oil &
                  Gas</a></li>
              <li class="w-50"> <a href="<?php echo $url; ?>services/ai-in-healthcare.php"
                  class="text-decoration-none d-flex align-items-center fw-bold gap-2 <?php echo ($current_page == "ai-in-healthcare.php") ? "active" : ""; ?>"><i
                    class="fa fa-arrow-right"></i> AI In
                  Healthcare</a></li>
              <li class="w-50"> <a href="<?php echo $url; ?>services/ai-in-manufacturing.php"
                  class="text-decoration-none d-flex align-items-center fw-bold gap-2 <?php echo ($current_page == "ai-in-manufacturing.php") ? "active" : ""; ?>"><i
                    class="fa fa-arrow-right"></i> AI In
                  Manufacturing</a></li>
              <li class="w-50"> <a href="<?php echo $url; ?>services/ai-in-mining.php"
                  class="text-decoration-none d-flex align-items-center fw-bold gap-2 <?php echo ($current_page == "ai-in-mining.php") ? "active" : ""; ?>"><i
                    class="fa fa-arrow-right"></i> AI In Mining</a></li>
              <li class="w-50"> <a href="<?php echo $url; ?>services/ai-in-agriculture.php"
                  class="text-decoration-none d-flex align-items-center fw-bold gap-2 <?php echo ($current_page == "ai-in-agriculture.php") ? "active" : ""; ?>"><i
                    class="fa fa-arrow-right"></i> AI In
                  Agriculture</a></li>
              <li class="w-50"> <a href="<?php echo $url; ?>services/ai-in-real-estate.php"
                  class="text-decoration-none d-flex align-items-center fw-bold gap-2 <?php echo ($current_page == "ai-in-real-estate.php") ? "active" : ""; ?>"><i
                    class="fa fa-arrow-right"></i> AI In Real
                  Estate</a></li>
              <li class="w-50"> <a href="<?php echo $url; ?>services/ai-in-insurance.php"
                  class="text-decoration-none d-flex align-items-center fw-bold gap-2 <?php echo ($current_page == "ai-in-insurance.php") ? "active" : ""; ?>"><i
                    class="fa fa-arrow-right"></i> AI In
                  Insurance</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a href="<?php echo $url; ?>pages/about.php"
            class="nav-link-item <?php echo ($current_page == "about.php") ? "active" : ""; ?>">about us</a>
        </li>

        <li class="nav-item has-dropdown position-relative">
          <a href="#"
            class="nav-link-item d-flex align-items-center gap-1 <?php echo in_array($current_page, $services_pages) ? "active" : ""; ?>">services
            <i class="fa fa-chevron-down nav-arrow"></i></a>
          <div class="dropdown-menu-custom mega-menu services-mega-menu position-absolute">
            <div class="d-flex">
              <div class="flex-grow-1 border-end pe-4 me-4">
                <h6 class=" services-header">services</h6>
                <p class="mega-menu-title">cost-effective
                  software development and support services</p>
                <ul class="mega-menu-list list-unstyled d-flex flex-wrap">
                  <li class="w-50"> <a href="<?php echo $url; ?>services/it-consulting-services.php"
                      class="text-decoration-none d-flex align-items-center gap-2 <?php echo ($current_page == "it-consulting-services.php") ? "active" : ""; ?>"><i
                        class="fa fa-arrow-right"></i> IT Consulting
                      Services</a></li>
                  <li class="w-50"> <a href="<?php echo $url; ?>services/custom-application-development.php"
                      class="text-decoration-none d-flex align-items-center gap-2 <?php echo ($current_page == "custom-application-development.php") ? "active" : ""; ?>"><i
                        class="fa fa-arrow-right"></i> Custom Application
                      Development</a></li>
                  <li class="w-50"> <a href="<?php echo $url; ?>services/software-development-services.php"
                      class="text-decoration-none d-flex align-items-center gap-2 <?php echo ($current_page == "software-development-services.php") ? "active" : ""; ?>"><i
                        class="fa fa-arrow-right"></i> Software
                      Development Services</a></li>
                  <li class="w-50"> <a href="<?php echo $url; ?>services/full-stack-development-services.php"
                      class="text-decoration-none d-flex align-items-center gap-2 <?php echo ($current_page == "full-stack-development-services.php") ? "active" : ""; ?>"><i
                        class="fa fa-arrow-right"></i> Full-Stack
                      Development Services</a></li>
                  <li class="w-50"> <a href="<?php echo $url; ?>services/dedicated-development-team.php"
                      class="text-decoration-none d-flex align-items-center gap-2 <?php echo ($current_page == "dedicated-development-team.php") ? "active" : ""; ?>"><i
                        class="fa fa-arrow-right"></i> Dedicated
                      Development Team</a></li>
                  <li class="w-50"> <a href="<?php echo $url; ?>services/backend-development-services.php"
                      class="text-decoration-none d-flex align-items-center gap-2 <?php echo ($current_page == "backend-development-services.php") ? "active" : ""; ?>"><i
                        class="fa fa-arrow-right"></i> Backend Development
                      Services</a></li>
                  <li class="w-50"> <a href="<?php echo $url; ?>services/legacy-modernization-services.php"
                      class="text-decoration-none d-flex align-items-center gap-2 <?php echo ($current_page == "legacy-modernization-services.php") ? "active" : ""; ?>"><i
                        class="fa fa-arrow-right"></i> Legacy
                      Modernization Services</a></li>
                  <li class="w-50"> <a href="<?php echo $url; ?>services/qa-software-testing-services.php"
                      class="text-decoration-none d-flex align-items-center gap-2 <?php echo ($current_page == "qa-software-testing-services.php") ? "active" : ""; ?>"><i
                        class="fa fa-arrow-right"></i> QA Software Testing
                      Services</a></li>
                  <li class="w-50"> <a href="<?php echo $url; ?>services/mvp-development.php"
                      class="text-decoration-none d-flex align-items-center gap-2 <?php echo ($current_page == "mvp-development.php") ? "active" : ""; ?>"><i
                        class="fa fa-arrow-right"></i> MVP
                      Development</a></li>
                  <li class="w-50"> <a href="<?php echo $url; ?>services/cross-platform-development.php"
                      class="text-decoration-none d-flex align-items-center gap-2 <?php echo ($current_page == "cross-platform-development.php") ? "active" : ""; ?>"><i
                        class="fa fa-arrow-right"></i> Cross Platform
                      Development</a></li>
                  <li class="w-50"> <a href="<?php echo $url; ?>services/enterprise-software-development.php"
                      class="text-decoration-none d-flex align-items-center gap-2 <?php echo ($current_page == "enterprise-software-development.php") ? "active" : ""; ?>"><i
                        class="fa fa-arrow-right"></i> Enterprise Software
                      Development</a></li>
                  <li class="w-50"> <a href="<?php echo $url; ?>services/product-engineering-services.php"
                      class="text-decoration-none d-flex align-items-center gap-2 <?php echo ($current_page == "product-engineering-services.php") ? "active" : ""; ?>"><i
                        class="fa fa-arrow-right"></i> Product Engineering
                      Services</a></li>
                  <li class="w-50"> <a href="<?php echo $url; ?>services/cloud-computing-services.php"
                      class="text-decoration-none d-flex align-items-center gap-2 <?php echo ($current_page == "cloud-computing-services.php") ? "active" : ""; ?>"><i
                        class="fa fa-arrow-right"></i> Cloud Computing
                      Services</a></li>
                  <li class="w-50"> <a href="<?php echo $url; ?>services/digital-transformation-services.php"
                      class="text-decoration-none d-flex align-items-center gap-2 <?php echo ($current_page == "digital-transformation-services.php") ? "active" : ""; ?>"><i
                        class="fa fa-arrow-right"></i> Digital
                      Transformation Services</a></li>
                  <li class="w-50"> <a href="<?php echo $url; ?>services/saas-product-development.php"
                      class="text-decoration-none d-flex align-items-center gap-2 <?php echo ($current_page == "saas-product-development.php") ? "active" : ""; ?>"><i
                        class="fa fa-arrow-right"></i> SaaS Product
                      Development</a></li>
                </ul>
              </div>
              <div class="right-column">
                <ul class="mega-menu-list list-unstyled">
                  <li class="mb-2"> <a href="<?php echo $url; ?>services/hire-remote-developers.php"
                      class="text-decoration-none d-flex hire-developers gap-2 <?php echo ($current_page == "hire-remote-developers.php") ? "active" : ""; ?>"><i
                        class="fa fa-arrow-right"></i> Hire Remote
                      Developers</a></li>
                  <li> <a href="<?php echo $url; ?>services/hire-asp.net-developers.php"
                      class="text-decoration-none hire-link <?php echo ($current_page == "hire-asp.net-developers.php") ? "active" : ""; ?>">Hire
                      Asp.Net Developers</a></li>
                  <li> <a href="<?php echo $url; ?>services/hire-php-developers.php"
                      class="text-decoration-none hire-link <?php echo ($current_page == "hire-php-developers.php") ? "active" : ""; ?>">Hire
                      PHP Developers</a></li>
                  <li> <a href="<?php echo $url; ?>services/hire-ui-ux-developers.php"
                      class="text-decoration-none hire-link <?php echo ($current_page == "hire-ui-ux-developers.php") ? "active" : ""; ?>">Hire
                      UI/UX Developers</a></li>
                  <li> <a href="<?php echo $url; ?>services/hire-front-end-developers.php"
                      class="text-decoration-none hire-link <?php echo ($current_page == "hire-front-end-developers.php") ? "active" : ""; ?>">Hire
                      Front End Developers</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>

        <li class="nav-item">
          <a href="<?php echo $url; ?>products.php"
            class="nav-link-item <?php echo ($current_page == "products.php") ? "active" : ""; ?>">our products</a>
        </li>

        <li class="nav-item has-dropdown position-relative">
          <a href="#"
            class="nav-link-item d-flex align-items-center gap-1 <?php echo in_array($current_page, $industries_pages) ? "active" : ""; ?>">industries
            <i class="fa fa-chevron-down nav-arrow"></i></a>
          <ul class="dropdown-menu-custom position-absolute list-unstyled">
            <li> <a href="<?php echo $url; ?>industries/healthcare.php"
                class="text-decoration-none d-block <?php echo ($current_page == "healthcare.php") ? "active" : ""; ?>">Healthcare</a>
            </li>
            <li> <a href="<?php echo $url; ?>industries/business-and-workflow-automation.php"
                class="text-decoration-none d-block <?php echo ($current_page == "business-and-workflow-automation.php") ? "active" : ""; ?>">Business
                And Workflow Automation</a></li>
            <li> <a href="<?php echo $url; ?>industries/edtech-software-development.php"
                class="text-decoration-none d-block <?php echo ($current_page == "edtech-software-development.php") ? "active" : ""; ?>">Edtech
                Software Development</a></li>
            <li> <a href="<?php echo $url; ?>industries/retail.php"
                class="text-decoration-none d-block <?php echo ($current_page == "retail.php") ? "active" : ""; ?>">Retail</a>
            </li>
            <li> <a href="<?php echo $url; ?>industries/iot.php"
                class="text-decoration-none d-block <?php echo ($current_page == "iot.php") ? "active" : ""; ?>">IOT</a>
            </li>
            <li> <a href="<?php echo $url; ?>industries/real-estate.php"
                class="text-decoration-none d-block <?php echo ($current_page == "real-estate.php") ? "active" : ""; ?>">Real
                Estate</a></li>
            <li> <a href="<?php echo $url; ?>industries/fintech.php"
                class="text-decoration-none d-block <?php echo ($current_page == "fintech.php") ? "active" : ""; ?>">Fintech</a>
            </li>
            <li> <a href="<?php echo $url; ?>industries/transportation-and-logistics.php"
                class="text-decoration-none d-block <?php echo ($current_page == "transportation-and-logistics.php") ? "active" : ""; ?>">Transportation
                And Logistics</a></li>
            <li> <a href="<?php echo $url; ?>industries/mining.php"
                class="text-decoration-none d-block <?php echo ($current_page == "mining.php") ? "active" : ""; ?>">Mining</a>
            </li>
            <li> <a href="<?php echo $url; ?>industries/agriculture.php"
                class="text-decoration-none d-block <?php echo ($current_page == "agriculture.php") ? "active" : ""; ?>">Agriculture</a>
            </li>
            <li> <a href="<?php echo $url; ?>industries/automotive.php"
                class="text-decoration-none d-block <?php echo ($current_page == "automotive.php") ? "active" : ""; ?>">Automotive</a>
            </li>
            <li> <a href="<?php echo $url; ?>industries/insurance.php"
                class="text-decoration-none d-block <?php echo ($current_page == "insurance.php") ? "active" : ""; ?>">Insurance</a>
            </li>
            <li> <a href="<?php echo $url; ?>industries/oil-and-gas.php"
                class="text-decoration-none d-block <?php echo ($current_page == "oil-and-gas.php") ? "active" : ""; ?>">Oil
                And Gas</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="<?php echo $url; ?>blogs.php"
            class="nav-link-item <?php echo ($current_page == "blogs.php") ? "active" : ""; ?>">blogs</a>
        </li>

        <li class="nav-item">
          <a href="<?php echo $url; ?>techfolio.php"
            class="nav-link-item <?php echo ($current_page == "techfolio.php") ? "active" : ""; ?>">techfolio</a>
        </li>

        <li class="nav-item has-dropdown position-relative">
          <a href="#"
            class="nav-link-item d-flex align-items-center gap-1 <?php echo in_array($current_page, $events_pages) ? "active" : ""; ?>">events
            <i class="fa fa-chevron-down nav-arrow"></i></a>
          <ul class="dropdown-menu-custom position-absolute list-unstyled">
            <li> <a href="<?php echo $url; ?>events/web-summit-26.php"
                class="text-decoration-none d-block <?php echo ($current_page == "web-summit-26.php") ? "active" : ""; ?>">Web
                Summit 26</a></li>
            <li> <a href="<?php echo $url; ?>events/gitex.php"
                class="text-decoration-none d-block <?php echo ($current_page == "gitex.php") ? "active" : ""; ?>">GITEX</a>
            </li>
            <li> <a href="<?php echo $url; ?>events/himss24.php"
                class="text-decoration-none d-block <?php echo ($current_page == "himss24.php") ? "active" : ""; ?>">HIMSS24</a>
            </li>

          </ul>
        </li>

        <li class="nav-item">
          <a href="<?php echo $url; ?>pages/contact.php"
            class="nav-link-item <?php echo ($current_page == "contact.php") ? "active" : ""; ?>">contact us</a>
        </li>

      </ul>

      <button class="hamburger-btn" id="hamburgerBtn" aria-label="Toggle menu" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
      </button>

    </div>
  </nav>

  <div class="mobile-menu-overlay" id="mobileMenuOverlay"></div>
  <div class="mobile-menu" id="mobileMenu">
    <div class="mobile-menu-header">
      <a href="<?php echo $url; ?>index.php" class="navbar-brand d-flex align-items-center text-decoration-none">
        <img src="<?php echo $url; ?>assets/images/home-page/svg/logo.svg" class="img-fluid" alt="Logo" title="Logo">
      </a>
      <button class="mobile-menu-close" id="mobileMenuClose" aria-label="Close menu">
        <i class="fa fa-times"></i>
      </button>
    </div>

    <ul class="list-unstyled mb-0">

      <li class="mobile-nav-item has-dropdown">
        <div class="mobile-nav-link <?php echo in_array($current_page, $ai_services_pages) ? "active" : ""; ?>"
          data-toggle="mobile-dropdown">
          ai services <i class="fa fa-plus mobile-arrow"></i>
        </div>
        <ul class="mobile-dropdown list-unstyled">
          <li><a href="<?php echo $url; ?>services/ai-software-development.php"
              class="<?php echo ($current_page == "ai-software-development.php") ? "active" : ""; ?>">AI Software
              Development</a></li>
          <li><a href="<?php echo $url; ?>services/ai-chatbot-development.php"
              class="<?php echo ($current_page == "ai-chatbot-development.php") ? "active" : ""; ?>">AI Chatbot
              Development</a></li>
          <li><a href="<?php echo $url; ?>services/ai-agent-development.php"
              class="<?php echo ($current_page == "ai-agent-development.php") ? "active" : ""; ?>">AI Agent
              Development</a></li>
          <li><a href="<?php echo $url; ?>services/generative-ai-development-solutions.php"
              class="<?php echo ($current_page == "generative-ai-development-solutions.php") ? "active" : ""; ?>">Generative
              AI Development Solutions</a></li>
          <li><a href="<?php echo $url; ?>services/ai-integration-services.php"
              class="<?php echo ($current_page == "ai-integration-services.php") ? "active" : ""; ?>">AI Integration
              Services</a></li>
          <li><a href="<?php echo $url; ?>services/ai-consulting.php"
              class="<?php echo ($current_page == "ai-consulting.php") ? "active" : ""; ?>">AI Consulting</a></li>
          <li><a href="<?php echo $url; ?>services/ai-saas-platform.php"
              class="<?php echo ($current_page == "ai-saas-platform.php") ? "active" : ""; ?>">AI SaaS Platform</a></li>
          <li><a href="<?php echo $url; ?>services/ai-solutions-for-enterprise.php"
              class="<?php echo ($current_page == "ai-solutions-for-enterprise.php") ? "active" : ""; ?>">AI Solutions
              For Enterprise</a></li>
          <li><a href="<?php echo $url; ?>services/ai-in-fintech.php"
              class="<?php echo ($current_page == "ai-in-fintech.php") ? "active" : ""; ?>">AI In Fintech</a></li>
          <li><a href="<?php echo $url; ?>services/ai-in-oil-gas.php"
              class="<?php echo ($current_page == "ai-in-oil-gas.php") ? "active" : ""; ?>">AI In Oil & Gas</a></li>
          <li><a href="<?php echo $url; ?>services/ai-in-healthcare.php"
              class="<?php echo ($current_page == "ai-in-healthcare.php") ? "active" : ""; ?>">AI In Healthcare</a></li>
          <li><a href="<?php echo $url; ?>services/ai-in-manufacturing.php"
              class="<?php echo ($current_page == "ai-in-manufacturing.php") ? "active" : ""; ?>">AI In
              Manufacturing</a></li>
          <li><a href="<?php echo $url; ?>services/ai-in-mining.php"
              class="<?php echo ($current_page == "ai-in-mining.php") ? "active" : ""; ?>">AI In Mining</a></li>
          <li><a href="<?php echo $url; ?>services/ai-in-agriculture.php"
              class="<?php echo ($current_page == "ai-in-agriculture.php") ? "active" : ""; ?>">AI In Agriculture</a>
          </li>
          <li><a href="<?php echo $url; ?>services/ai-in-real-estate.php"
              class="<?php echo ($current_page == "ai-in-real-estate.php") ? "active" : ""; ?>">AI In Real Estate</a>
          </li>
          <li><a href="<?php echo $url; ?>services/ai-in-insurance.php"
              class="<?php echo ($current_page == "ai-in-insurance.php") ? "active" : ""; ?>">AI In Insurance</a></li>
        </ul>
      </li>

      <li class="mobile-nav-item">
        <a href="<?php echo $url; ?>pages/about.php"
          class="mobile-nav-link <?php echo ($current_page == "about.php") ? "active" : ""; ?>">about us</a>
      </li>

      <li class="mobile-nav-item has-dropdown">
        <div class="mobile-nav-link <?php echo in_array($current_page, $services_pages) ? "active" : ""; ?>"
          data-toggle="mobile-dropdown">
          services <i class="fa fa-plus mobile-arrow"></i>
        </div>
        <ul class="mobile-dropdown list-unstyled">
          <li><a href="<?php echo $url; ?>services/it-consulting-services.php"
              class="<?php echo ($current_page == "it-consulting-services.php") ? "active" : ""; ?>">IT Consulting
              Services</a></li>
          <li><a href="<?php echo $url; ?>services/custom-application-development.php"
              class="<?php echo ($current_page == "custom-application-development.php") ? "active" : ""; ?>">Custom
              Application Development</a></li>
          <li><a href="<?php echo $url; ?>services/software-development-services.php"
              class="<?php echo ($current_page == "software-development-services.php") ? "active" : ""; ?>">Software
              Development Services</a></li>
          <li><a href="<?php echo $url; ?>services/full-stack-development-services.php"
              class="<?php echo ($current_page == "full-stack-development-services.php") ? "active" : ""; ?>">Full-Stack
              Development Services</a></li>
          <li><a href="<?php echo $url; ?>services/dedicated-development-team.php"
              class="<?php echo ($current_page == "dedicated-development-team.php") ? "active" : ""; ?>">Dedicated
              Development Team</a></li>
          <li><a href="<?php echo $url; ?>services/backend-development-services.php"
              class="<?php echo ($current_page == "backend-development-services.php") ? "active" : ""; ?>">Backend
              Development Services</a></li>
          <li><a href="<?php echo $url; ?>services/legacy-modernization-services.php"
              class="<?php echo ($current_page == "legacy-modernization-services.php") ? "active" : ""; ?>">Legacy
              Modernization Services</a></li>
          <li><a href="<?php echo $url; ?>services/qa-software-testing-services.php"
              class="<?php echo ($current_page == "qa-software-testing-services.php") ? "active" : ""; ?>">QA Software
              Testing Services</a></li>
          <li><a href="<?php echo $url; ?>services/mvp-development.php"
              class="<?php echo ($current_page == "mvp-development.php") ? "active" : ""; ?>">MVP Development</a></li>
          <li><a href="<?php echo $url; ?>services/cross-platform-development.php"
              class="<?php echo ($current_page == "cross-platform-development.php") ? "active" : ""; ?>">Cross Platform
              Development</a></li>
          <li><a href="<?php echo $url; ?>services/enterprise-software-development.php"
              class="<?php echo ($current_page == "enterprise-software-development.php") ? "active" : ""; ?>">Enterprise
              Software Development</a></li>
          <li><a href="<?php echo $url; ?>services/product-engineering-services.php"
              class="<?php echo ($current_page == "product-engineering-services.php") ? "active" : ""; ?>">Product
              Engineering Services</a></li>
          <li><a href="<?php echo $url; ?>services/cloud-computing-services.php"
              class="<?php echo ($current_page == "cloud-computing-services.php") ? "active" : ""; ?>">Cloud Computing
              Services</a></li>
          <li><a href="<?php echo $url; ?>services/digital-transformation-services.php"
              class="<?php echo ($current_page == "digital-transformation-services.php") ? "active" : ""; ?>">Digital
              Transformation Services</a></li>
          <li><a href="<?php echo $url; ?>services/saas-product-development.php"
              class="<?php echo ($current_page == "saas-product-development.php") ? "active" : ""; ?>">SaaS Product
              Development</a></li>
          <li><a href="<?php echo $url; ?>services/hire-remote-developers.php"
              class="<?php echo ($current_page == "hire-remote-developers.php") ? "active" : ""; ?>">Hire Remote
              Developers</a></li>
          <li><a href="<?php echo $url; ?>services/hire-asp.net-developers.php"
              class="<?php echo ($current_page == "hire-asp.net-developers.php") ? "active" : ""; ?>">Hire Asp.Net
              Developers</a></li>
          <li><a href="<?php echo $url; ?>services/hire-php-developers.php"
              class="<?php echo ($current_page == "hire-php-developers.php") ? "active" : ""; ?>">Hire PHP
              Developers</a></li>
          <li><a href="<?php echo $url; ?>services/hire-ui-ux-developers.php"
              class="<?php echo ($current_page == "hire-ui-ux-developers.php") ? "active" : ""; ?>">Hire UI/UX
              Developers</a></li>
          <li><a href="<?php echo $url; ?>services/hire-front-end-developers.php"
              class="<?php echo ($current_page == "hire-front-end-developers.php") ? "active" : ""; ?>">Hire Front End
              Developers</a></li>
        </ul>
      </li>

      <li class="mobile-nav-item">
        <a href="<?php echo $url; ?>products.php"
          class="mobile-nav-link <?php echo ($current_page == "products.php") ? "active" : ""; ?>">our products</a>
      </li>

      <li class="mobile-nav-item has-dropdown">
        <div class="mobile-nav-link <?php echo in_array($current_page, $industries_pages) ? "active" : ""; ?>"
          data-toggle="mobile-dropdown">
          industries <i class="fa fa-plus mobile-arrow"></i>
        </div>
        <ul class="mobile-dropdown list-unstyled">
          <li><a href="<?php echo $url; ?>industries/healthcare.php"
              class="<?php echo ($current_page == "healthcare.php") ? "active" : ""; ?>">Healthcare</a></li>
          <li><a href="<?php echo $url; ?>industries/business-and-workflow-automation.php"
              class="<?php echo ($current_page == "business-and-workflow-automation.php") ? "active" : ""; ?>">Business
              And Workflow Automation</a></li>
          <li><a href="<?php echo $url; ?>industries/edtech-software-development.php"
              class="<?php echo ($current_page == "edtech-software-development.php") ? "active" : ""; ?>">Edtech
              Software Development</a></li>
          <li><a href="<?php echo $url; ?>industries/retail.php"
              class="<?php echo ($current_page == "retail.php") ? "active" : ""; ?>">Retail</a></li>
          <li><a href="<?php echo $url; ?>industries/iot.php"
              class="<?php echo ($current_page == "iot.php") ? "active" : ""; ?>">IOT</a></li>
          <li><a href="<?php echo $url; ?>industries/real-estate.php"
              class="<?php echo ($current_page == "real-estate.php") ? "active" : ""; ?>">Real Estate</a></li>
          <li><a href="<?php echo $url; ?>industries/fintech.php"
              class="<?php echo ($current_page == "fintech.php") ? "active" : ""; ?>">Fintech</a></li>
          <li><a href="<?php echo $url; ?>industries/transportation-and-logistics.php"
              class="<?php echo ($current_page == "transportation-and-logistics.php") ? "active" : ""; ?>">Transportation
              And Logistics</a></li>
          <li><a href="<?php echo $url; ?>industries/mining.php"
              class="<?php echo ($current_page == "mining.php") ? "active" : ""; ?>">Mining</a></li>
          <li><a href="<?php echo $url; ?>industries/agriculture.php"
              class="<?php echo ($current_page == "agriculture.php") ? "active" : ""; ?>">Agriculture</a></li>
          <li><a href="<?php echo $url; ?>industries/automotive.php"
              class="<?php echo ($current_page == "automotive.php") ? "active" : ""; ?>">Automotive</a></li>
          <li><a href="<?php echo $url; ?>industries/insurance.php"
              class="<?php echo ($current_page == "insurance.php") ? "active" : ""; ?>">Insurance</a></li>
          <li><a href="<?php echo $url; ?>industries/oil-and-gas.php"
              class="<?php echo ($current_page == "oil-and-gas.php") ? "active" : ""; ?>">Oil And Gas</a></li>
        </ul>
      </li>

      <li class="mobile-nav-item">
        <a href="<?php echo $url; ?>blogs.php"
          class="mobile-nav-link <?php echo ($current_page == "blogs.php") ? "active" : ""; ?>">blogs</a>
      </li>

      <li class="mobile-nav-item">
        <a href="<?php echo $url; ?>techfolio.php"
          class="mobile-nav-link <?php echo ($current_page == "techfolio.php") ? "active" : ""; ?>">techfolio</a>
      </li>

      <li class="mobile-nav-item has-dropdown">
        <div class="mobile-nav-link <?php echo in_array($current_page, $events_pages) ? "active" : ""; ?>"
          data-toggle="mobile-dropdown">
          events <i class="fa fa-plus mobile-arrow"></i>
        </div>
        <ul class="mobile-dropdown list-unstyled">
          <li><a href="<?php echo $url; ?>events/upcoming-events.php"
              class="<?php echo ($current_page == "upcoming-events.php") ? "active" : ""; ?>">Upcoming Events</a></li>
          <li><a href="<?php echo $url; ?>events/past-events.php"
              class="<?php echo ($current_page == "past-events.php") ? "active" : ""; ?>">Past Events</a></li>
        </ul>
      </li>

      <li class="mobile-nav-item">
        <a href="<?php echo $url; ?>pages/contact.php"
          class="mobile-nav-link <?php echo ($current_page == "contact.php") ? "active" : ""; ?>">contact us</a>
      </li>

    </ul>
  </div>

</header>