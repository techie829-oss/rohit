/**
 * Amisha Gupta Portfolio — Main JS
 * Handles: navbar, mobile menu, scroll reveal, case study modals, contact form
 */

document.addEventListener('DOMContentLoaded', () => {

  /* ── LUCIDE ICONS ───────────────────────────────────────── */
  if (typeof lucide !== 'undefined') lucide.createIcons();

  /* ── THEME TOGGLE (LIGHT / DARK) ────────────────────────── */
  const themeToggleBtn = document.getElementById('themeToggleBtn');
  const mobileThemeToggleBtn = document.getElementById('mobileThemeToggleBtn');

  function toggleTheme() {
    const currentTheme = document.documentElement.getAttribute('data-theme') || 'dark';
    const newTheme = currentTheme === 'light' ? 'dark' : 'light';
    document.documentElement.setAttribute('data-theme', newTheme);
    localStorage.setItem('amisha_theme', newTheme);
    if (typeof lucide !== 'undefined') lucide.createIcons();
  }

  themeToggleBtn && themeToggleBtn.addEventListener('click', toggleTheme);
  mobileThemeToggleBtn && mobileThemeToggleBtn.addEventListener('click', toggleTheme);

  /* ── NAVBAR SCROLL ──────────────────────────────────────── */
  const navbar = document.getElementById('navbar');
  const onScroll = () => {
    navbar.classList.toggle('scrolled', window.scrollY > 60);
    updateActiveNav();
  };
  window.addEventListener('scroll', onScroll, { passive: true });

  /* ── MOBILE MENU ────────────────────────────────────────── */
  const hamburger    = document.getElementById('hamburger');
  const mobileMenu   = document.getElementById('mobile-menu');
  const mobileOvl    = document.getElementById('mobile-overlay');
  const mobileClose  = document.getElementById('mobile-close');

  function openMenu() {
    hamburger.classList.add('open');
    mobileMenu.classList.add('open');
    mobileOvl.classList.add('active');
    document.body.style.overflow = 'hidden';
  }
  function closeMenu() {
    hamburger.classList.remove('open');
    mobileMenu.classList.remove('open');
    mobileOvl.classList.remove('active');
    document.body.style.overflow = '';
  }
  hamburger.addEventListener('click', () =>
    mobileMenu.classList.contains('open') ? closeMenu() : openMenu()
  );
  mobileOvl.addEventListener('click', closeMenu);
  mobileClose && mobileClose.addEventListener('click', closeMenu);
  document.querySelectorAll('.mobile-nav-link').forEach(l => l.addEventListener('click', closeMenu));

  /* ── SCROLL REVEAL ──────────────────────────────────────── */
  const revealObs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        revealObs.unobserve(e.target);
      }
    });
  }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });

  document.querySelectorAll('.reveal').forEach(el => revealObs.observe(el));

  /* ── ACTIVE NAV ─────────────────────────────────────────── */
  const sections  = document.querySelectorAll('section[id]');
  const navLinks  = document.querySelectorAll('.nav-link[data-section]');

  function updateActiveNav() {
    let current = '';
    sections.forEach(sec => {
      if (window.scrollY >= sec.offsetTop - 140) current = sec.id;
    });
    navLinks.forEach(l => {
      l.classList.toggle('active', l.dataset.section === current);
    });
  }

  /* ── PROJECT DATA ───────────────────────────────────────── */
  const PROJECTS = {
    'champions-t10': {
      num: '01',
      category: 'Sports / Entertainment Platform',
      title: 'Champions League T10',
      overview: 'A comprehensive digital platform for Champions League T10 — combining sports content, player registration, team pages, league information, match updates, a news and blogs section, and event-focused experiences in a single cohesive web presence.',
      challenge: 'The platform needed to handle multiple distinct content types — players, teams, leagues, schedules, blogs — all presented in a cohesive, engaging experience for sports fans while remaining manageable for the content team.',
      solution: 'Developed a structured PHP/CodeIgniter backend with dedicated modules for each content type, a MySQL-driven database schema, and a clean responsive frontend that presents the league\'s content clearly across all devices.',
      contribution: [
        'Backend development with PHP and CodeIgniter',
        'Database schema design and management with MySQL',
        'Player registration and profile module development',
        'Team pages and roster management functionality',
        'Blog and news publishing section',
        'Responsive UI implementation across all devices',
        'Admin panel for content management',
        'Performance and stability optimizations'
      ],
      tech: ['PHP', 'CodeIgniter', 'MySQL', 'JavaScript', 'HTML5', 'CSS3', 'Responsive Design'],
      features: [
        'Player registration and public profile pages',
        'Team listings with full roster details',
        'League information and match schedule display',
        'Blog, news and event content publishing',
        'Admin content management panel',
        'Fully responsive across all screen sizes'
      ],
      result: 'Delivered a fully functional sports and entertainment platform that successfully presents Champions League T10\'s league structure, teams, players and news content with a responsive, production-ready experience.',
      liveUrl: 'https://www.championst10.com'
    },

    'pandit-kapil': {
      num: '02',
      category: 'Professional Service Website',
      title: 'Shree Hit Pandit Kapil Vaid Ji',
      overview: 'A professionally designed, service-focused website built to clearly present offerings, establish credibility and provide visitors with intuitive pathways to make contact or submit inquiries.',
      challenge: 'Creating a website that effectively communicates the full scope of services, builds trust with first-time visitors, and converts website traffic into genuine, qualified inquiries — with excellent usability across all devices.',
      solution: 'Built a structured, content-organized website with clear service sections, professional visual presentation, optimized contact experience, and an information architecture designed for easy navigation.',
      contribution: [
        'Full website design and development',
        'Service section structure and implementation',
        'Contact and inquiry form development',
        'Responsive layout across mobile, tablet and desktop',
        'Content structure and information architecture',
        'Performance and page speed optimization'
      ],
      tech: ['PHP', 'HTML5', 'CSS3', 'JavaScript', 'MySQL', 'Responsive Design'],
      features: [
        'Clear, structured service presentation sections',
        'Professional layout for credibility and trust',
        'Contact and inquiry forms',
        'Fully responsive across all devices',
        'Intuitive navigation and content flow',
        'Clean, readable typography and layout'
      ],
      result: 'Delivered a clean, professional website that presents services clearly, establishes credibility with visitors and provides an effective contact experience for prospective clients.',
      liveUrl: '#'
    },

    'solidrix': {
      num: '03',
      category: 'Technology Company Website',
      title: 'Solidrix Technologies',
      overview: 'A modern, conversion-focused website for Solidrix Technologies — a technology company offering custom SaaS development, enterprise software, AI-powered solutions, CRM/HRMS platforms, cloud infrastructure and scalable digital products for businesses.',
      challenge: 'Effectively positioning a diverse technology portfolio — from enterprise software to AI solutions — with clear messaging, strong credibility signals, and conversion-focused sections that translate visitor interest into business inquiries.',
      solution: 'Developed a structured technology company website with organized product and service sections, conversion-oriented CTAs, professional visual presentation and a fully responsive experience that works seamlessly across all screen sizes.',
      contribution: [
        'Frontend development and responsive implementation',
        'Product and service section design and development',
        'Conversion-focused layout and CTA implementation',
        'Backend integration and dynamic functionality',
        'Cross-device responsiveness and testing',
        'Performance and load-time optimization'
      ],
      tech: ['PHP', 'HTML5', 'CSS3', 'JavaScript', 'MySQL', 'Tailwind CSS', 'Responsive Design'],
      features: [
        'Multi-product and service presentation sections',
        'Enterprise and SaaS-focused content layout',
        'Conversion-optimized CTAs throughout',
        'Technology credibility and portfolio sections',
        'Fully responsive design across all devices',
        'Contact and inquiry pathways'
      ],
      result: 'Delivered a professional technology company website that clearly presents Solidrix\'s full product and service portfolio with modern aesthetics and strong conversion-focused elements.',
      liveUrl: 'https://solidrix.com'
    },

    'pro100': {
      num: '04',
      category: 'Business Web Platform',
      title: 'Pro100',
      overview: 'A professional business web platform developed to support core business operations, service delivery and client engagement through a structured, reliable web application with an intuitive user interface.',
      challenge: 'Building a reliable, operationally sound business platform that handles core functional requirements clearly and efficiently, with a clean interface that business users can navigate without friction.',
      solution: 'Developed a backend-driven business web application with PHP, a well-structured MySQL database, clean admin functionality, and a responsive frontend focused on operational usability and clarity.',
      contribution: [
        'Backend development with PHP',
        'Database architecture design and management',
        'Business logic and workflow implementation',
        'User interface development',
        'Admin panel functionality',
        'Responsive design implementation and testing'
      ],
      tech: ['PHP', 'MySQL', 'JavaScript', 'HTML5', 'CSS3', 'Responsive Design'],
      features: [
        'Business operations management modules',
        'User-friendly interface design',
        'Database-driven dynamic functionality',
        'Admin panel for management and oversight',
        'Responsive design across all screen sizes',
        'Reliable workflow and business logic implementation'
      ],
      result: 'Delivered a functional, reliable business platform with clean architecture, efficient operational workflows and a user-friendly experience for business stakeholders and end users.',
      liveUrl: '#'
    },

    'avara-stays': {
      num: '05',
      category: 'Hospitality / Travel',
      title: 'Avara Stays',
      overview: 'A hospitality-focused web platform for Avara Stays — designed to showcase properties, facilitate easy discovery, and create a conversion-optimized experience that turns visitors into booking inquiries.',
      challenge: 'Creating a hospitality website that showcases properties attractively, delivers a smooth browsing and discovery experience, and converts visitor interest into genuine bookings or inquiries — while feeling premium and trustworthy.',
      solution: 'Built a visually engaging, information-rich hospitality web platform with property showcase capabilities, booking/inquiry functionality, gallery views and a responsive experience optimized for both mobile and desktop visitors.',
      contribution: [
        'Frontend and backend development',
        'Property listing and showcase functionality',
        'Booking and inquiry system implementation',
        'Responsive UI design and development',
        'Property image gallery integration',
        'Content management capabilities'
      ],
      tech: ['PHP', 'MySQL', 'JavaScript', 'HTML5', 'CSS3', 'Responsive Design'],
      features: [
        'Property showcase and listing pages',
        'Booking and inquiry submission functionality',
        'Property image gallery displays',
        'Location and amenity information sections',
        'Mobile-optimized responsive experience',
        'Clear, conversion-focused CTAs'
      ],
      result: 'Delivered a complete hospitality web platform that presents properties professionally, facilitates booking inquiries smoothly and provides a quality browsing experience across all devices.',
      liveUrl: '#'
    },

    'learmy': {
      num: '06',
      category: 'Education / EdTech',
      title: 'LearMy EduCoach',
      overview: 'An education-focused web platform for LearMy EduCoach — built to present courses and coaching services, support student discovery and create clear, accessible pathways from first visit to enrollment.',
      challenge: 'Building an EdTech website that communicates educational offerings clearly, builds trust with prospective students and parents, and provides a structured, accessible path from information discovery to enrollment action.',
      solution: 'Developed a structured educational web platform with clearly organized course and service sections, readable information architecture, responsive design and conversion-oriented enrollment and contact pathways.',
      contribution: [
        'Frontend and backend development',
        'Course and coaching service section implementation',
        'Enrollment and contact functionality',
        'Responsive layout implementation',
        'Information architecture and content structure',
        'Usability and performance optimization'
      ],
      tech: ['PHP', 'MySQL', 'JavaScript', 'HTML5', 'CSS3', 'Responsive Design'],
      features: [
        'Course and coaching service showcase',
        'Enrollment and inquiry submission forms',
        'Instructor and coach credibility sections',
        'Structured course information layout',
        'Fully responsive mobile and desktop design',
        'Clear conversion paths for prospective students'
      ],
      result: 'Delivered a complete EdTech web platform that presents courses and coaching services professionally with clear information architecture and effective enrollment pathways for prospective students.',
      liveUrl: '#'
    }
  };

  /* ── MODAL ──────────────────────────────────────────────── */
  const modalOverlay = document.getElementById('case-study-modal');
  const modalInner   = document.getElementById('modal-inner');

  function openModal(id) {
    const p = PROJECTS[id];
    if (!p) return;

    modalInner.innerHTML = buildCaseStudy(p);
    modalOverlay.classList.add('active');
    document.body.style.overflow = 'hidden';

    // Re-run lucide on modal content
    if (typeof lucide !== 'undefined') lucide.createIcons();

    // Bind inner close button
    const closeBtn = document.getElementById('modal-inner-close');
    if (closeBtn) closeBtn.addEventListener('click', closeModal);
  }

  function closeModal() {
    modalOverlay.classList.remove('active');
    document.body.style.overflow = '';
  }

  // Open modal on card click (but not on link clicks)
  document.querySelectorAll('[data-project]').forEach(card => {
    card.addEventListener('click', e => {
      if (e.target.closest('a, button')) return;
      openModal(card.dataset.project);
    });
    card.setAttribute('role', 'button');
    card.setAttribute('tabindex', '0');
    card.addEventListener('keydown', e => {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        openModal(card.dataset.project);
      }
    });
  });

  // Open modal from "Case Study" buttons
  document.querySelectorAll('[data-open-modal]').forEach(btn => {
    btn.addEventListener('click', e => {
      e.stopPropagation();
      openModal(btn.dataset.openModal);
    });
  });

  modalOverlay.addEventListener('click', e => {
    if (e.target === modalOverlay) closeModal();
  });
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape') closeModal();
  });

  /* ── BUILD CASE STUDY HTML ──────────────────────────────── */
  function buildCaseStudy(p) {
    const liveBtn = (p.liveUrl && p.liveUrl !== '#')
      ? `<a href="${p.liveUrl}" target="_blank" rel="noopener noreferrer" class="btn-primary" style="margin-top:0.75rem;display:inline-flex;">
           View Live Project <i data-lucide="external-link" style="width:15px;height:15px;"></i>
         </a>`
      : `<p style="color:var(--text-muted);font-size:0.875rem;margin-top:0.5rem;">Live URL coming soon.</p>`;

    return `
      <div class="modal-header">
        <div>
          <div class="project-cat" style="margin-bottom:0.4rem;">${p.category}</div>
          <h2 class="font-display" style="font-size:1.5rem;font-weight:700;color:var(--text-primary);line-height:1.25;">${p.title}</h2>
        </div>
        <button class="modal-close-btn" id="modal-inner-close" aria-label="Close modal">
          <i data-lucide="x" style="width:18px;height:18px;"></i>
        </button>
      </div>
      <div class="modal-body">
        <div class="cs-section">
          <div class="cs-label">01 — Overview</div>
          <p class="cs-text">${p.overview}</p>
        </div>
        <div class="cs-section">
          <div class="cs-label">02 — Challenge</div>
          <p class="cs-text">${p.challenge}</p>
        </div>
        <div class="cs-section">
          <div class="cs-label">03 — Solution</div>
          <p class="cs-text">${p.solution}</p>
        </div>
        <div class="cs-section">
          <div class="cs-label">04 — My Contribution</div>
          <ul class="cs-list">${p.contribution.map(c => `<li>${c}</li>`).join('')}</ul>
        </div>
        <div class="cs-section">
          <div class="cs-label">05 — Technologies</div>
          <div class="tech-tags" style="margin-top:0.5rem;">${p.tech.map(t => `<span class="tech-tag">${t}</span>`).join('')}</div>
        </div>
        <div class="cs-section">
          <div class="cs-label">06 — Key Features</div>
          <ul class="cs-list">${p.features.map(f => `<li>${f}</li>`).join('')}</ul>
        </div>
        <div class="cs-section">
          <div class="cs-label">07 — Result / Delivery</div>
          <p class="cs-text">${p.result}</p>
        </div>
        <div>
          <div class="cs-label">08 — Live Project</div>
          ${liveBtn}
        </div>
      </div>
    `;
  }

  /* ── CONTACT FORM TO WHATSAPP ─────────────────────────── */
  const contactForm = document.getElementById('contact-form');
  const formSuccess = document.getElementById('form-success');

  if (contactForm) {
    contactForm.addEventListener('submit', e => {
      e.preventDefault();
      const name        = (document.getElementById('f-name')?.value || '').trim();
      const email       = (document.getElementById('f-email')?.value || '').trim();
      const projectType = (document.getElementById('f-type')?.value || '').trim();
      const budget      = (document.getElementById('f-budget')?.value || '').trim();
      const details     = (document.getElementById('f-details')?.value || '').trim();

      if (!name || !email || !details) {
        alert('Please fill in your Name, Email, and Project Details.');
        return;
      }

      // Format WhatsApp inquiry text
      const waText = 
`👋 *New Project Inquiry from Portfolio*

👤 *Name:* ${name}
📧 *Email:* ${email}
💼 *Project Type:* ${projectType || 'Not specified'}
💰 *Budget Range:* ${budget || 'Not specified'}

📝 *Project Details:*
${details}`;

      const waUrl = `https://wa.me/918423538142?text=${encodeURIComponent(waText)}`;

      // Show success notification
      if (formSuccess) {
        formSuccess.innerHTML = `<i data-lucide="check-circle" style="width:20px;height:20px;flex-shrink:0;"></i> Thank you ${name}! Opening WhatsApp to send your project details...`;
        if (typeof lucide !== 'undefined') lucide.createIcons();
        formSuccess.classList.add('show');
        setTimeout(() => formSuccess.classList.remove('show'), 7000);
      }

      contactForm.reset();

      // Open WhatsApp with all formatted details
      window.open(waUrl, '_blank');
    });
  }

  /* ── SMOOTH SCROLL FOR NAV LINKS ────────────────────────── */
  document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', e => {
      const target = document.querySelector(link.getAttribute('href'));
      if (target) {
        e.preventDefault();
        const offset = 80;
        const top = target.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top, behavior: 'smooth' });
      }
    });
  });

  /* ── HERO TAB SWITCHER (PROFILE / CODE) ──────────────────── */
  window.switchHeroTab = function(tab) {
    const profileTabBtn = document.getElementById('heroTabProfile');
    const codeTabBtn    = document.getElementById('heroTabCode');
    const profileView   = document.getElementById('heroTabContentProfile');
    const codeView      = document.getElementById('heroTabContentCode');

    if (!profileTabBtn || !codeTabBtn || !profileView || !codeView) return;

    if (tab === 'profile') {
      profileTabBtn.classList.add('active');
      codeTabBtn.classList.remove('active');
      profileView.style.display = 'block';
      codeView.style.display = 'none';
    } else if (tab === 'code') {
      codeTabBtn.classList.add('active');
      profileTabBtn.classList.remove('active');
      profileView.style.display = 'none';
      codeView.style.display = 'block';
    }
  };

});

