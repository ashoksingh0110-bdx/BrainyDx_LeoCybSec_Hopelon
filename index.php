<?php require ("./partials/header.php"); ?>

  <!-- Main Content -->
  <main class="home-page">
    <!-- Hero Section -->
    <section class="hero-section position-relative text-center text-white section-padding">
      <!-- Background Video -->
      <video autoplay muted loop playsinline class="hero-video">
        <source src="./assets/images/banner.webm" type="video/mp4" />
      </video>

      <!-- Overlay -->
      <div class="hero-overlay"></div>

      <!-- Content -->
      <div class="hero-content">
        <div class="container">
          <!-- Badge -->
          <div class="client-badge mb-20 d-inline-flex align-items-center gap-2">
            <div class="avatars d-flex">
              <img src="./assets/images/avatar1.png" alt="client" class="avatar" />
              <img src="./assets/images/avatar2.png" alt="client" class="avatar" />
              <img src="./assets/images/avatar3.png" alt="client" class="avatar" />
              <img src="./assets/images/avatar4.png" alt="client" class="avatar" />
            </div>
            <div class="content">
              <!-- <div class="star">★★★★★</div> -->
              <div class="mb-0 pb-0" align="left"><img src="./assets/images/stars.png" class="stars" /></div>
              <p class="p-0">100+ Satisfied Client</p>
            </div>
          </div>

          <!-- Main Heading -->
          <h1 class="heading mb-0">
            <span>HOPLON:</span> SMART<br />CYBERSECURITY MADE SIMPLE
          </h1>
          <div class="d-flex justify-content-center">
            <p class="mt-3 mb-4 para-content text-center">
              Real-time protection, instant alerts, and powerful AI threat
              detection
            </p>
          </div>


        </div>
        <!-- CTA Buttons -->
        <div class="d-block d-lg-flex justify-content-center gap-3 flex-wrap">
          <a href="#contact-us" class="btn btn-secondary w-100 w-lg-fit mb-3 mb-lg-0">BOOK A DEMO</a>
          <a href="#contact-us" class="btn btn-primary w-100 w-lg-fit">ENQUIRE NOW</a>
        </div>

        <!-- Features -->
        <div class="row features-box mt-5 d-flex justify-content-center flex-wrap row-gap-20">
          <div class="col-md-4 feature text-center">
            <img src="./assets/icons/hex-icon.svg" alt="icon" />
            <div class="f-content">
              <h4>8 Security Modules</h4>
              <p>Total tech protection, zero blind spots</p>
            </div>
          </div>
          <div class="col-md-4 feature text-center">
            <img src="./assets/icons/hex-icon.svg" alt="icon" />
            <div class="f-content">
              <h4>50+ Vendors</h4>
              <p>Bring your security tools into one platform</p>
            </div>
          </div>
          <div class="col-md-4 feature text-center">
            <img src="./assets/icons/hex-icon.svg" alt="icon" />
            <div class="f-content">
              <h4>24/7</h4>
              <p>Threat Monitoring Across All Systems</p>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

    <!-- Problem Section -->
    <section class="problem-section section-padding" id="problemSection">
      <div class="container">
        <div class="badge-svg">
          <span class="section-badge badge-primary" style="position: relative; z-index: 2; background-color: #2f1b92">
            <img src="./assets/icons/star.png" alt="start" />
            Problem
          </span>
          <div class="svg-arrow-box">
            <svg id="arrowSvg" xmlns="http://www.w3.org/2000/svg" width="40" height="163" viewBox="0 0 40 163"
              fill="none">
              <defs>
                <linearGradient id="fillGradient" x1="0" y1="0" x2="0" y2="1">
                  <stop id="stop1" offset="0%" stop-color="#D4514B"></stop>
                  <stop id="stop2" offset="0%" stop-color="transparent"></stop>
                </linearGradient>
              </defs>
              <path
                d="M0.998817 155H-0.00118256V156H0.998817V155ZM39.7071 155.707C40.0976 155.317 40.0976 154.683 39.7071 154.293L33.3431 147.929C32.9526 147.538 32.3195 147.538 31.9289 147.929C31.5384 148.319 31.5384 148.953 31.9289 149.343L37.5858 155L31.9289 160.657C31.5384 161.047 31.5384 161.681 31.9289 162.071C32.3195 162.462 32.9526 162.462 33.3431 162.071L39.7071 155.707ZM0.998817 1V0L-0.00118256 0V1L0.998817 1ZM0.998817 155V156L39 156V155V154L0.998817 154V155ZM36.4815 1V0L0.998817 0V1V2L36.4815 2V1ZM0.998817 1L-0.00118256 1V155H0.998817H1.99882V1L0.998817 1Z"
                fill="url(#fillGradient)" />
            </svg>
          </div>
        </div>

        <h2 class="section-heading mb-40">
          THE CYBERSECURITY THREAT IS WORSE FOR <span>SMBs</span>
        </h2>

        <div class="row gap-32">
          <div class="col-lg-4">
            <div class="card-style-1">
              <img src="./assets/icons/complexity.png" alt="Complexity icon" class="icon" />
              <div class="content">
                <h4>Complexity</h4>
                <p>Only 14% of SMBs are prepared for cyber attacks</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card-style-1">
              <img src="./assets/icons/threats.png" alt="Rising Threats icon" class="icon" />
              <div class="content">
                <h4>Rising Threats</h4>
                <p>43% of cyberattacks target SMBs</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card-style-1">
              <img src="./assets/icons/talent_gap.png" alt="Talent Gap icon" class="icon" />
              <div class="content">
                <h4>Talent Gap</h4>
                <p>SMBs lack access to skilled cybersecurity professionals</p>
              </div>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="card-style-1">
              <img src="./assets/icons/compliance.png" alt="Compliance icon" class="icon" />
              <div class="content">
                <h4>Compliance Burden</h4>
                <p>80% of SMBs fail to meet privacy regulatory standards</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card-style-1">
              <img src="./assets/icons/new_threats.png" alt="New Threats icon" class="icon" />
              <div class="content">
                <h4>New Threats</h4>
                <p>
                  AI & LLMs enable cyber criminals to build malicious
                  materials 95% cheaper and 25% faster
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- AI Security Agent Section(desktop view) -->
    <section class="features-section section-padding d-none d-lg-block">
      <div class="gradient-overlay"></div>
      <div class="container content-container p-0" style="max-width: 100%">
        <div class="section-padding ps-0 py-0 d-flex flex-column align-items-center justify-content-center">
          <span class="section-badge badge-secondary">
            <img src="./assets/icons/star.png" alt="start" />
            AI Security Agent for SMBs
          </span>
          <h2 class="section-heading mb-20">
            <span>MEET HOPELON:</span> YOUR 24/7 AI SECURITY PARTNER
          </h2>
          <div class="section-content text-center mb-40">
            Hoplon is the first AI cybersecurity agent designed to deliver
            enterprise-grade protection for SMBs without the need for an
            in-house security team
          </div>
        </div>

        <!-- for desktop view -->
        <div class="tab-style-1">
          <div class="features-tab-container d-flex">
            <!-- Tabs Header (Left) -->
            <div class="mb-4 tab-header">
              <div class="nav flex-column nav-pills gap-4" id="custom-scroll-tabs">
                <a href="#risk" class="nav-link active tab-btn d-flex align-items-start gap-3">
                  <img src="./assets/icons/risk-insights.png" alt="Risk Insights" />
                  <div class="content">
                    <h4 class="mb-1">
                      Comprehensive Cybersecurity Risk Insights
                    </h4>
                    <p class="mb-0 font-base">
                      Proactive identification and analysis of
                      vulnerabilities.
                    </p>
                  </div>
                </a>
                <a href="#compliance" class="nav-link tab-btn d-flex align-items-start gap-3">
                  <img src="./assets/icons/compliance-readiness.png" alt="Compliance Readiness" />
                  <div class="content">
                    <h4 class="mb-1">Automated Compliance Readiness</h4>
                    <p class="mb-0 font-base">
                      Simplifies meeting regulatory standards.
                    </p>
                  </div>
                </a>
                <a href="#assistant" class="nav-link tab-btn d-flex align-items-start gap-3">
                  <img src="./assets/icons/ai-assistant.png" alt="AI Assistant" />
                  <div class="content">
                    <h4 class="mb-1">AI Virtual Security Assistant</h4>
                    <p class="mb-0 font-base">
                      Real-time threat insights and automated response.
                    </p>
                  </div>
                </a>
                <a href="#platform" class="nav-link tab-btn d-flex align-items-start gap-3">
                  <img src="./assets/icons/platform.png" alt="Platform Icon" />
                  <div class="content">
                    <h4 class="mb-1">Unified, Scalable Platform</h4>
                    <p class="mb-0 font-base">
                      All your security in one place, grows with your
                      business.
                    </p>
                  </div>
                </a>
                <a href="#cloud" class="nav-link tab-btn d-flex align-items-start gap-3">
                  <img src="./assets/icons/email-cloud.png" alt="Email and Cloud Icon" />
                  <div class="content">
                    <h4 class="mb-1">Email & Cloud Security Insights</h4>
                    <p class="mb-0 font-base">
                      Specific protection for critical assets.
                    </p>
                  </div>
                </a>
              </div>
            </div>

            <!-- Content Sections (Right) -->
            <div class="w-100 meetHoplon">
              <div id="risk" class="content-section pb-3">
                <img src="./assets/images/1.webp" alt="Risk Insights Image" class="img-fluid" />
              </div>
              <div id="compliance" class="content-section pb-3">
                <img src="./assets/images/2.webp" alt="Compliance Readiness Image" class="img-fluid" />
              </div>
              <div id="assistant" class="content-section pb-3">
                <img src="./assets/images/your-security-partner-.gif" alt="AI Assistant Image" class="img-fluid" />
              </div>
              <div id="platform" class="content-section pb-3">
                <img src="./assets/images/3.webp" alt="Platform Image" class="img-fluid" />
              </div>
              <div id="cloud" class="content-section pb-3">
                <img src="./assets/images/4.webp" alt="Cloud Image" class="img-fluid" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- AI Security Agent Section (for mobile view) -->
    <section class="m-features-section section-padding d-block d-lg-none" style="overflow: hidden;">
      <div class="gradient-overlay"></div>
      <div class="container content-container p-0" style="max-width: 100%">
        <div class="section-padding ps-0 py-0 d-flex flex-column align-items-center justify-content-center">
          <span class="section-badge badge-secondary">
            <img src="./assets/icons/star.png" alt="start" />
            AI Security Agent for SMBs
          </span>
          <h2 class="section-heading mb-20 text-center">
            <span>MEET HOPELON:</span> YOUR 24/7 AI SECURITY PARTNER
          </h2>
          <div class="section-content text-center mb-40">
            Hoplon is the first AI cybersecurity agent designed to deliver
            enterprise-grade protection for SMBs without the need for an
            in-house security team
          </div>
        </div>
        <!-- Security Agent Slider -->
        <div class="security-agent-slider-container">
          <div class="security-agent-slider">

            <div class="security-agent-slide">
              <div class="agent-card">
                <div class="image-box">
                  <img src="./assets/images/m-security-cloud.webp" alt="Risk Insights Image" class="img-fluid" />
                </div>
                <div class="nav-link tab-btn">
                  <!-- <img src="./assets/icons/email-cloud.png" alt="Email and Cloud Icon" /> -->
                  <img src="./assets/icons/risk-insights.png" alt="Email and Cloud Icon" />
                  <div class="content">
                    <h4>Comprehensive Cybersecurity Risk Insights</h4>
                    <p class="mb-0 font-base">
                      Proactive identification and analysis of
                      vulnerabilities.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="security-agent-slide">
              <div class="agent-card">
                <div class="image-box">
                  <img src="./assets/images/m-security-risk-insights.webp" alt="Risk Insights Image"
                    class="img-fluid" />
                </div>
                <div class="nav-link tab-btn">
                  <img src="./assets/icons/compliance-readiness.png" alt="Risk Insights" />
                  <div class="content">
                    <h4>Automated Compliance Readiness</h4>
                    <p class="mb-0 font-base">
                      Simplifies meeting regulatory standards.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="security-agent-slide">
              <div class="agent-card">
                <div class="image-box">
                  <img src="./assets/images/m-security-compliance.webp" alt="Risk Insights Image" class="img-fluid" />
                </div>
                <div class="nav-link tab-btn">
                  <img src="./assets/icons/ai-assistant.png" alt="Compliance Readiness" />
                  <div class="content">
                    <h4>AI Virtual Security Assistant</h4>
                    <p class="mb-0 font-base">
                      Real-time threat insights and automated response.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="security-agent-slide">
              <div class="agent-card">
                <div class="image-box">
                  <img src="./assets/images/m-3.gif" alt="Compliance Readiness Image" class="img-fluid" />
                </div>
                <div class="nav-link tab-btn">
                  <img src="./assets/icons/platform.png" alt="AI Assistant" />
                  <div class="content">
                    <h4>Unified, Scalable Platform</h4>
                    <p class="mb-0 font-base">
                      All your security in one place, grows with your business.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="security-agent-slide">
              <div class="agent-card">
                <div class="image-box">
                  <img src="./assets/images/m-security-platform.png" alt="Risk Insights Image" class="img-fluid" />
                </div>
                <div class="nav-link tab-btn">
                  <img src="./assets/icons/email-cloud.png" alt="Platform Icon" />
                  <div class="content">
                    <h4>Email & Cloud Security Insights</h4>
                    <p class="mb-0 font-base">
                      Specific protection for critical assets.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits-section section-padding">
      <div class="overlay benefits-overlay"></div>
      <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-5">
          <span class="section-badge badge-secondary">
            <img src="./assets/icons/contact-tag.png" alt="contact" />
            Benefits
          </span>
          <div class="row">
            <div class="col-md-6">
              <h2 class="section-heading" style="text-align: left">
                <span>WHY HOPLON?</span> SECURITY IN MINUTES, NOT MONTHS
              </h2>
            </div>
            <div class="col-md-6 d-flex align-items-end text-left">
              <p class="benefit-section-text">
                Fast to deploy, easy to scale, and built to deliver value from
                day one.
              </p>
            </div>
          </div>
        </div>

        <!-- Benefits Cards (for desktop view) -->
        <!-- Cards Wrapper -->
        <div class="benefit-cards-wrapper d-none d-lg-block">
          <div class="benefit-card" id="benefit-card-1">
            <div class="left-tabs">
              <button class="tab active" onclick="scrollToSection('benefit-card-1')">Cost Efficiency</button>
              <button class="tab" onclick="scrollToSection('benefit-card-2')">10-Minutes Setup</button>
              <button class="tab" onclick="scrollToSection('benefit-card-3')">Compliance</button>
              <button class="tab" onclick="scrollToSection('benefit-card-4')">Incident Status</button>
            </div>
            <div class="card-content">
              <div class="card-image">
                <img src="./assets/images/benefit-cost.webp" alt="Cost Efficiency" />
              </div>
              <div class="card-text">
                <div>
                  <h3>Enterprise-grade protection, SMB-friendly pricing.</h3>
                </div>
                <div>
                  <p>
                    Our subscription packages let you pay only for what you
                    need, making cybersecurity affordable for SMBs and
                    lowering costs.
                  </p>
                  <a href="#contact-us"  class="btn btn-secondary">BOOK A DEMO
                    <img class="icon end" src="./assets/icons/arrow-right.png" alt="arrow" /></a>
                </div>
              </div>
            </div>
          </div>

          <div class="benefit-card" id="benefit-card-2">
            <div class="left-tabs">
              <button class="tab" onclick="scrollToSection('benefit-card-1')">Cost Efficiency</button>
              <button class="tab active" onclick="scrollToSection('benefit-card-2')">10-Minutes Setup</button>
              <button class="tab" onclick="scrollToSection('benefit-card-3')">Compliance</button>
              <button class="tab" onclick="scrollToSection('benefit-card-4')">Incident Status</button>
            </div>
            <div class="card-content">
              <div class="card-image">
                <img src="./assets/images/benefit-setup.webp" alt="10 Minutes Setup" />
              </div>
              <div class="card-text">
                <div>
                  <h3>Build Your Cybersecurity Program in Just 10 Minutes</h3>
                </div>
                <div>
                  <p>
                    Skip the complexity. Our streamlined setup gets your
                    entire organization protected in 10 minutes, not 10 days.
                  </p>
                  <a href="#contact-us"  class="btn btn-secondary">BOOK A DEMO
                    <img class="icon end" src="./assets/icons/arrow-right.png" alt="arrow" /></a>
                </div>
              </div>
            </div>
          </div>

          <div class="benefit-card" id="benefit-card-3">
            <div class="left-tabs">
              <button class="tab" onclick="scrollToSection('benefit-card-1')">Cost Efficiency</button>
              <button class="tab" onclick="scrollToSection('benefit-card-2')">10-Minutes Setup</button>
              <button class="tab active" onclick="scrollToSection('benefit-card-3')">Compliance</button>
              <button class="tab" onclick="scrollToSection('benefit-card-4')">Incident Status</button>
            </div>
            <div class="card-content">
              <div class="card-image">
                <img src="./assets/images/benefit-compliance.webp" alt="Compliance" />
              </div>
              <div class="card-text">
                <div>
                  <h3>Compliance on autopilot.</h3>
                </div>
                <div>
                  <p>
                    Hoplon automates the entire compliance
                    lifecycle—monitoring controls, collecting evidence, and
                    generating real-time reports across standards like ISO
                    27001, GDPR, and NIS2.
                  </p>
                  <a href="#contact-us"  class="btn btn-secondary">BOOK A DEMO
                    <img class="icon end" src="./assets/icons/arrow-right.png" alt="arrow" /></a>
                </div>
              </div>
            </div>
          </div>

          <div class="benefit-card" id="benefit-card-4">
            <div class="left-tabs">
              <button class="tab" onclick="scrollToSection('benefit-card-1')">Cost Efficiency</button>
              <button class="tab" onclick="scrollToSection('benefit-card-2')">10-Minutes Setup</button>
              <button class="tab" onclick="scrollToSection('benefit-card-3')">Compliance</button>
              <button class="tab active" onclick="scrollToSection('benefit-card-4')">Incident Status</button>
            </div>
            <div class="card-content">
              <div class="card-image">
                <img src="./assets/images/benefit-incidents.webp" alt="Incident Status" />
              </div>
              <div class="card-text">
                <div>
                  <h3>Real-time alerting for what really matters</h3>
                </div>
                <div>
                  <p>
                    We leverage advanced AI to continuously correlate data
                    across endpoints, cloud, email, and user
                    behavior—delivering accurate, actionable insights right to
                    your preferred channels.
                  </p>
                  <a href="#contact-us"  class="btn btn-secondary">BOOK A DEMO
                    <img class="icon end" src="./assets/icons/arrow-right.png" alt="arrow" /></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Benefits Cards (for mobile view) -->
        <!-- Cards Wrapper -->
        <div class="benefit-cards-wrapper-m d-block d-lg-none" style="overflow: hidden;">
          <div class="left-tabs">
            <button class="tab tab-btn active" data-slide="0">Cost Efficiency</button>
            <button class="tab tab-btn" data-slide="1">10-Minutes Setup</button>
            <button class="tab tab-btn" data-slide="2">Compliance</button>
            <button class="tab tab-btn" data-slide="3">Incident Status</button>
          </div>
          <div class="benefit-cards-slider">
            <!-- Card 1 -->
            <div class="slide">
              <div class="benefit-card">
                <div class="card-content">
                  <div class="card-image">
                    <img src="./assets/images/benefit-cost.webp" alt="Cost Efficiency" />
                  </div>
                  <div class="card-text">
                    <div>
                      <h3>
                        Enterprise-grade protection, SMB-friendly pricing.
                      </h3>
                    </div>
                    <div>
                      <p>
                        Our subscription packages let you pay only for what
                        you need, making cybersecurity affordable for SMBs and
                        lowering costs.
                      </p>
                      <a href="#contact-us"  class="btn btn-secondary">
                        BOOK A DEMO
                        <img class="icon end" src="./assets/icons/arrow-right.png" alt="arrow" />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="slide">
              <div class="benefit-card">
                <div class="card-content">
                  <div class="card-image">
                    <img src="./assets/images/benefit-setup.webp" alt="Complete Security" />
                  </div>
                  <div class="card-text">
                    <div>
                      <h3>Build Your Cybersecurity Program in Just 10 Minutes</h3>
                    </div>
                    <div>
                      <p>
                        Skip the complexity. Our streamlined setup gets your entire organization protected in 10 minutes, not 10 days.
                      </p>
                      <a href="#contact-us"  class="btn btn-secondary">
                        BOOK A DEMO
                        <img class="icon end" src="./assets/icons/arrow-right.png" alt="arrow" />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card 3 -->
            <div class="slide">
              <div class="benefit-card">
                <div class="card-content">
                  <div class="card-image">
                    <img src="./assets/images/benefit-compliance.webp" alt="Cloud Protection" />
                  </div>
                  <div class="card-text">
                    <div>
                      <h3>Compliance on autopilot.</h3>
                    </div>
                    <div>
                      <p>
                        Hoplon automates the entire compliance lifecycle—monitoring controls, collecting evidence, and generating real-time reports across standards like ISO 27001, GDPR, and NIS2.
                      </p>
                      <a href="#contact-us"  class="btn btn-secondary">
                        BOOK A DEMO
                        <img class="icon end" src="./assets/icons/arrow-right.png" alt="arrow" />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card 4 -->
            <div class="slide">
              <div class="benefit-card">
                <div class="card-content">
                  <div class="card-image">
                    <img src="./assets/images/benefit-incidents.webp" alt="Expert Support" />
                  </div>
                  <div class="card-text">
                    <div>
                      <h3>Real time alerting for what really matters</h3>
                    </div>
                    <div>
                      <p>
                        We leverage advanced AI to continuously correlate data across endpoints, cloud, email, and user behavior—delivering accurate, actionable insights right to your preferred channels.
                      </p>
                      <a href="#contact-us"  class="btn btn-secondary">
                        BOOK A DEMO
                        <img class="icon end" src="./assets/icons/arrow-right.png" alt="arrow" />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- How Hopelon Works Section (for desktop view) -->
    <!-- <section class="how-hoplon-works section-padding d-none d-lg-block">
        <div class="d-flex justify-content-center">
          <div class="title-box">
            <span class="section-badge badge-secondary">
              <img src="./assets/icons/star.png" alt="process icon" />
              Simplified Process
            </span>
            <h2 class="section-heading">HOW HOPLON WORKS</h2>
          </div>
        </div>

        <div class="howhoplon-gif">
          <img
            id="hoplonGif"
            class="gif active"
            src=""
            data-src="./assets/images/how-hopelon-works.gif"
            alt="Hoplon Process Animation"
          />
        </div>
      </section> -->

    <section class="how-hoplon-works-video-section d-none d-lg-block">
      <video id="promoVideo" autoplay muted playsinline style="width:100%;">
        <source src="./assets/images/how-it-works.webm" type="video/webm">
        <source src="./assets/images/how-it-works.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="title-box">
        <span class="section-badge badge-secondary">
          <img src="./assets/icons/star.png" alt="process icon" />
          Simplified Process
        </span>
        <h2 class="section-heading">HOW HOPLON WORKS</h2>
      </div>
    </section>

    <!-- How Hopelon Works Section (for mobile view)-->
    <section class="how-hoplon-works-m section-padding d-block d-lg-none">
      <div class="d-flex justify-content-center">
        <div class="title-box">
          <span class="section-badge badge-secondary">
            <img src="./assets/icons/star.png" alt="process icon" />
            Simplified Process
          </span>
          <h2 class="section-heading">HOW HOPLON WORKS</h2>
        </div>
      </div>
      <!-- <img
          class="d-block d-lg-none img-fluid"
          src="./assets/images/how-hopelon-works-m.png"
          alt="how-hopelon-works"
        /> -->
      <section class="process-flow">
        <!-- Step 1 -->
        <div class="step">
          <div class="step-number">01</div>
          <div class="hexagon-outer">
            <div class="hexagon-wrapper">
              <div class="hexagon">
                <img src="./assets/icons/onboarding.png" alt="Onboarding" />
              </div>
            </div>
          </div>
          <div class="step-content">
            <h4>Instant Secure Onboarding</h4>
            <p>Just signup and connect—protected in 10 minutes</p>
          </div>
          <div class="arrow">
            <img src="./assets/icons/arrow_down.png" alt="arrow" />
          </div>
        </div>

        <!-- Step 2 -->
        <div class="step">
          <div class="step-number">02</div>
          <div class="hexagon-outer">
            <div class="hexagon-wrapper">
              <div class="hexagon">
                <img src="./assets/icons/live_monitoring.png" alt="live_monitoring" />
              </div>
            </div>
          </div>
          <div class="step-content">
            <h4>Live Monitoring</h4>
            <p>Your AI-powered security team is now live and on alert</p>
          </div>
          <div class="arrow">
            <img src="./assets/icons/arrow_down.png" alt="arrow" />
          </div>
        </div>

        <!-- Step 3 -->
        <div class="step">
          <div class="step-number">03</div>
          <div class="hexagon-outer">
            <div class="hexagon-wrapper">
              <div class="hexagon">
                <img src="./assets/icons/alerts_reports.png" alt="alerts_reports" />
              </div>
            </div>
          </div>
          <div class="step-content">
            <h4>Alerts & Reports</h4>
            <p>Customer alerts and detailed incident reports</p>
          </div>
          <div class="arrow">
            <img src="./assets/icons/arrow_down.png" alt="arrow" />
          </div>
        </div>

        <!-- Step 4 -->
        <div class="step">
          <div class="step-number">04</div>
          <div class="hexagon-outer">
            <div class="hexagon-wrapper">
              <div class="hexagon">
                <img src="./assets/icons/rapid_response.png" alt="rapid_response" />
              </div>
            </div>
          </div>
          <div class="step-content">
            <h4>Rapid Response</h4>
            <p>Actionable steps taken instantly</p>
          </div>
        </div>
      </section>
    </section>

    <!-- Contact us Section -->
    <section class="contact-us-section section-padding" id="contact-us">
      <div class="overlay contact-overlay"></div>
      <div class="container">
        <div class="row form-container-row gap-40">
          <!-- Left Column -->
          <div class="left-col">
            <div class="contact-card mb-40">
              <div class="section-icon mb-3">
                <img src="./assets/icons/info.png" alt="info icon" />
              </div>
              <h4 class="mb-40">Get in touch with us</h4>

              <div class="info-box first">
                <label>Email</label>
                <p>
                  <a href="mailto:info@leocysec.com">info@leocysec.com</a>
                </p>
              </div>

              <div class="info-box">
                <label>London Office</label>
                  <p>167–169 Great Portland Street, London, England, W1W
                    5PF</p>
              </div>

              <div class="info-box">
                <label>Dubai Office</label>
                  <p>Business Bay, Ontario Tower Building, SR-G-01-042, Dubai,
                    United Arab Emirates</p>
              </div>
            </div>

            <div class="contact-card">
              <div class="section-icon mb-3">
                <img src="./assets/icons/social-group.png" alt="socials icon" />
              </div>
              <h4 class="mb-20">Social Media</h4>
              <p>
                <strong>Join our community</strong> to share tips, ask
                questions, and connect with fellow users.
              </p>
              <a href="https://www.linkedin.com/company/leo-cybsec" target="_blank" class="btn-outlined btn-outlined-primary mt-40 d-block w-100">JOIN US</a>
            </div>
          </div>

          <!-- Right Column -->
          <div class="right-col" id="contact-form">
            <div class="contact-card form-container">
              <span class="section-badge badge-secondary">
                <img src="./assets/icons/contact-tag.png" alt="contact" />
                Reach Out to Us
              </span>
              <h2 class="mb-2 contactUsHeading">Contact our sales team</h2>
              <p>
                Talk with our sales team to see how leocysec can fit your
                needs.
              </p>

              <form method="POST" action="./backend/contactForm.php">
                <div class="row gap-24">
                  <div class="col-md-6">
                    <div class="form-grp">
                      <label for="fname">First Name</label>
                      <input id="fname" name="fname" type="text" placeholder="First Name" required/>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-grp">
                      <label for="lname">Last Name</label>
                      <input id="lname" name="lname" type="text" placeholder="Last Name" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-grp">
                      <label for="email">Email</label>
                      <input id="email" name="email" type="email" placeholder="Email" required/>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-grp">
                      <label for="phone">Phone Number</label>
                      <input id="phone" name="phone" type="text" placeholder="Phone Number" />
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-grp">
                      <label for="message">Message</label>
                      <textarea id="message" name="message" rows="4" placeholder="Your message" required></textarea>
                    </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-secondary w-100">
                      SEND MESSAGE
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Industries Section -->
    <section class="industries-section section-padding">
      <div class="container text-center">
        <div class="heading-section">
          <div class="d-flex justify-content-center">
            <span class="section-badge badge-primary">
              <img src="./assets/icons/shield-security-tag.png" alt="Referral Icon" />
              Security for Every Industry
            </span>
          </div>
          <h2 class="section-heading mb-40">INDUSTRIES WE SERVE</h2>
          <img class="icon-animation" src="./assets/images/animation-for-bg.png" alt="icon" />
        </div>
        <div></div>

        <div class="row g-4 justify-content-center industry-cards-row">
          <!-- Card 1 -->
          <div class="col-lg-4">
            <div class="industry-card">
              <div class="icon">
                <img src="./assets/icons/enterprises.png" alt="SMBs" />
              </div>
              <div>
                <h4>SMBs</h4>
                <p>Simple security for lean teams</p>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="col-lg-4">
            <div class="industry-card">
              <div class="icon">
                <img src="./assets/icons/smb.png" alt="Enterprises" />
              </div>
              <div>
                <h4>ENTERPRISES</h4>
                <p>Deep insights across large fleets</p>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="col-lg-4">
            <div class="industry-card">
              <div class="icon">
                <img src="./assets/icons/fintech.png" alt="Fintech" />
              </div>
              <div>
                <h4>FINTECH</h4>
                <p>Complex stacks secured</p>
              </div>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="col-lg-4">
            <div class="industry-card">
              <div class="icon">
                <img src="./assets/icons/healthcare.png" alt="Healthcare" />
              </div>
              <div>
                <h4>HEALTHCARE</h4>
                <p>Automated compliance monitoring</p>
              </div>
            </div>
          </div>

          <!-- Card 5 -->
          <div class="col-lg-4">
            <div class="industry-card">
              <div class="icon">
                <img src="./assets/icons/ecommerce.png" alt="E-Commerce" />
              </div>
              <div>
                <h4>E-Commerce</h4>
                <p>Brand reputation secured</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
      <div class="cta-section-container section-padding">
        <div class="overlay cta-overlay"></div>
        <div class="container">
          <div class="cta-wrapper">
            <div class="inner-wrapper">
              <div class="content">
                <span class="section-badge badge-secondary-40">
                  <img src="./assets/icons/share-tag.png" alt="Referral Icon" />
                  Referral Program
                </span>
                <h2 class="section-heading">
                  KEEP YOUR CYBER WORLD SAFE.
                  <span class="span">GET REWARDED!</span>
                </h2>
                <p class="mt-3">
                  Be part of our Referral Program, where empowering
                  partnerships fortify cybersecurity defenses. In today’s
                  interconnected world, unity is strength, & together, we’re
                  on a mission to safeguard digital landscapes.
                </p>
                <div class="cta-buttons mt-4 gap-3">
                  <a href="https://app.leocybsec.com/" target="_blank" class="btn btn-secondary me-3">START TODAY</a>
                  <a href="#contact-form" class="btn btn-primary">TALK TO SALES</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section section-padding">
      <div class="container text-center px-0">
        <!-- Section Title -->
        <div class="d-flex justify-content-center">
          <span class="section-badge badge-primary align-self-center">
            <img src="./assets/icons/user-tag.png" alt="Icon" /> See What Our
            Client Says
          </span>
        </div>
        <h2 class="section-heading mb-40">TESTIMONIALS</h2>

        <!-- Testimonial Cards -->
        <div class="testimonial-slider-container">
          <img class="icon-animation" src="./assets/images/animation-for-bg.png" alt="icon" />
          <div class="testimonial-slider">
            <!-- Card 1 -->
            <div class="testimonial-slide">
              <div class="testimonial-card">
                <div>
                  <img src="./assets/icons/quote.png" class="quote-mark" />
                <p>
                  As a company that prioritizes security and compliance integrating Hoplon in our operations has been
                  transformative. From the first day we were impressed by the platform’s comprehensive protection and
                  oversight.

                </p>
                </div>
                <div class="user-info">
                  <h5>Simon Cockle</h5>
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <small class="role">CTO</small>
                    </div>
                    <div class="logo d-flex align-items-end">
                      <img src="./assets/images/testimonial-card-1-logo.png" alt="Ontime" />
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <!-- Card 2 -->
            <div class="testimonial-slide">
              <div class="testimonial-card">
                <div>
                  <img src="./assets/icons/quote.png" class="quote-mark" />
                  <p>
                    Hoplon made it easy to protect our business without the cost and hassle of building a security team.
                    It runs 24/7 giving us enterprise-level grade protection and real-time threat insights. Now we can
                    focus on growth , knowing our security is taken care of.
  
                  </p>
                </div>
                <div class="user-info">
                  <h5>Issa Aghabi</h5>

                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <small class="role">Managing Director</small>
                    </div>
                    <div class="logo d-flex align-items-end">
                      <img src="./assets/images/testimonial-card-2-logo.png" alt="Access Bridge Ventures" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Card 3 -->
            <div class="testimonial-slide">
              <div class="testimonial-card">
                <div>

                  <img src="./assets/icons/quote.png" class="quote-mark" />
                  <p>
                    Hoplon has completely transformed the way we handle
                  cybersecurity at Cedar Bridge. With its proactive approach
                  and risk insights, we now get all the protection we need.
                  The platform has been especially effective in securing us
                  against phishing attacks, helping us detect and prevent
                  threats before they become a problem.
                </p>
              </div>
                <div class="user-info">
                  <h5>Melissa Furtado</h5>
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <small class="role">Senior Internal Auditor</small>
                    </div>
                    <div class="logo d-flex align-items-end">
                      <img src="./assets/images/testimonial-card-3-logo.png" alt="Cedar Bridge" />
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <!-- Card 4 -->
            <div class="testimonial-slide">
              <div class="testimonial-card">
                <div>

                <img src="./assets/icons/quote.png" class="quote-mark" />
                <p>
                  Unlike other cybersecurity service providers who will look to fix just an issue, Hoplon’s holistic
                  approach allows them to go the extra mile and propose the best ROI.
                </p>
              </div>
                <div class="user-info">
                  <h5>Felix Zimmermann</h5>
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <small class="role">CFO</small>
                    </div>
                    <div class="logo d-flex align-items-end">
                      <img src="./assets/images/testimonial-card-4-logo.png" alt="Ontime" />
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <!-- Card 5 -->
            <div class="testimonial-slide">
              <div class="testimonial-card">
                <div>

                <img src="./assets/icons/quote.png" class="quote-mark" />
                <p>
                  The effectiveness of the platform in guiding us through ISO 27001 complexities were impressive. We
                  highly recommend Hoplon for businesses who are seeking efficient security strategies and ISO 27001
                  compliance.

                </p>
              </div>
                <div class="user-info">
                  <h5>Erik Dvergsnes</h5>
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <small class="role">CEO</small>
                    </div>
                    <div class="logo d-flex align-items-end">
                      <img src="./assets/images/testimonial-card-5-logo.png" alt="Access Bridge Ventures" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Card 6 -->
            <div class="testimonial-slide">
              <div class="testimonial-card">
                <div>

                  <img src="./assets/icons/quote.png" class="quote-mark" />
                  <p>
                    Our collaboration with Hoplon has been outstanding in achieving ISO 27001 certification and enhancing
                    the security levels of our organization and platform. It would have taken much longer to achieve the
                    certification ourselves.
                    
                  </p>
                </div>
                <div class="user-info">
                  <h5>Francesco Cipollone</h5>
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <small class="role">CEO</small>
                    </div>
                    <div class="logo d-flex align-items-end">
                      <img src="./assets/images/testimonial-card-6-logo.png" alt="Cedar Bridge" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Card 7 -->
            <div class="testimonial-slide">
              <div class="testimonial-card">
                <div>

                  <img src="./assets/icons/quote.png" class="quote-mark" />
                  <p>
                    We needed a trustworthy cyber security partner who cοuld help us identify key risks, improve the
                  security of our systems and raise the security awareness of our employees. Hoplon proved to be very
                  efficient and managed to satisfy even the most demanding requirements.
                </p>
              </div>
                <div class="user-info">

                  <h5>Nikos Antonopoulos</h5>
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <small class="role">CIO</small>
                    </div>
                    <div class="logo d-flex align-items-end">
                      <img src="./assets/images/testimonial-card-7-logo.png" alt="Cedar Bridge" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Card 8 -->
            <div class="testimonial-slide">
              <div class="testimonial-card">
                <div>

                  <img src="./assets/icons/quote.png" class="quote-mark" />
                  <p>
                    As a company that priorities security and compliance, integrating Hoplon into our operations has been
                  transformative. From the first day, we were impressed by the platform’s comprehensive protection &
                  oversight.
                </p>
              </div>
                <div class="user-info">
                  <h5>Kostas S. Kastrinakis</h5>
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <small class="role">CEO</small>
                    </div>
                    <div class="logo d-flex align-items-end">
                      <img src="./assets/images/testimonial-card-8-logo.png" alt="Cedar Bridge" />
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Stats -->
        <div class="row gap-32 mt-40">
          <div class="col-md-6 col-lg-3">
            <div class="stat-card">
              <div class="outer-circle">
                <div class="stat-circle">70%</div>
              </div>
              <div class="content">
                <h4>Save Cost</h4>
                <p>Up to 70% saving cost</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="stat-card">
              <div class="outer-circle">
                <div class="stat-circle">75%</div>
              </div>
              <div class="content">
                <h4>Compliance Readiness</h4>
                <p>Saving time and resources up to 75%</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="stat-card">
              <div class="outer-circle">

                <div class="stat-circle">90%</div>
              </div>
              <div class="content">
                <h4>Mitigating Cyber Exposure</h4>
                <p>90% risk reduction</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="stat-card">
              <div class="outer-circle">

                <div class="stat-circle">5 min</div>
              </div>
              <div class="content">
                <h4>Fast Onboarding</h4>
                <p>Save up to 160+ hours</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- sidebar -->
  <div class="sidebar offcanvas offcanvas-end d-lg-none" tabindex="-1" id="demoOffcanvas">
    <div class="offcanvas-header">
      <img src="assets/images/logo.png" alt="Tech Prodigy Logo" class="logo" />
      <button type="button" class="btn-close text-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <a href="#" class="btn btn-primary w-100 mb-3">START FREE TRIAL</a>
      <a href="#contact-us" class="btn btn-primary w-100">ENQUIRE NOW</a>
    </div>
  </div>

<?php require ("./partials/footer.php"); ?>