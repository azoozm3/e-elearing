<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AI Learn — Master Artificial Intelligence</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/landing.css">   
</head>
<body>

<!-- ═══════════════════════════════ HEADER ═══════════════════════════════ -->
<header id="main-header">
  <nav>
    <a href="#" class="nav-logo">
      <div class="logo-icon">🧠</div>
      <span>AI Learn</span>
    </a>
    <div class="nav-actions">
      <a href="admin_login.php" class="btn-ghost">Admin Login</a>
      <a href="#start" class="btn-primary">Get Started →</a>
    </div>
  </nav>
</header>

<!-- ═══════════════════════════════ HERO ═══════════════════════════════ -->
<section class="hero" id="start">
  <div class="hero-bg"></div>
  <div class="orb orb-1"></div>
  <div class="orb orb-2"></div>
  <div class="orb orb-3"></div>

  <div class="hero-content">
    <div class="hero-badge">
      <span class="badge-dot"></span>
      Now Live — 4 New AI Modules Added
    </div>

    <h1>
      Learn AI Basics<br>
      <span class="gradient-text">The Smart Way</span>
    </h1>

    <p>An interactive platform that makes artificial intelligence simple, engaging, and genuinely fun. Short modules. Quick quizzes. Real understanding.</p>

    <form class="hero-form" id="start-form">
      <div class="hero-input-wrap">
        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>
        </svg>
        <input id="username" type="text" placeholder="Your name to get started..." maxlength="80" required>
      </div>
      <button type="submit" class="btn-hero">Start Learning →</button>
    </form>

    <p class="hero-hint">
      Free forever · No account needed ·
      <a href="admin_login.php">Admin access here</a>
    </p>

    <div class="social-proof">
      <div class="sp-text">
        <div class="sp-stars">★★★★★</div>
        <div><strong>50+</strong> learners this month</div>
      </div>
      <div class="sp-divider"></div>
      <div class="sp-text">
        <strong>92%</strong> completion rate
      </div>
      <div class="sp-divider"></div>
      <div class="sp-text">
        <strong>100%</strong> free to use
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════ STATS ═══════════════════════════════ -->
<section class="stats-strip">
  <div class="section-inner">
    <div class="stats-grid">
      <div class="stat-item">
        <div class="stat-num">4+</div>
        <div class="stat-label">Learning Modules</div>
      </div>
      <div class="stat-item">
        <div class="stat-num">50+</div>
        <div class="stat-label">Active Learners</div>
      </div>
      <div class="stat-item">
        <div class="stat-num">92%</div>
        <div class="stat-label">Completion Rate</div>
      </div>
      <div class="stat-item">
        <div class="stat-num">0$</div>
        <div class="stat-label">Cost to Join</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════ FEATURES ═══════════════════════════════ -->
<section class="features" id="features">
  <div class="section-inner">
    <div class="features-header center">
      <div class="section-label">Why AI Learn</div>
      <h2 class="section-title">Everything you need to<br>understand AI</h2>
      <p class="section-sub">Carefully designed modules that break down complex concepts into clear, digestible lessons.</p>
    </div>

    <div class="features-grid">
      <div class="feature-card">
        <div class="feature-icon fi-purple">🎯</div>
        <h3>Bite-sized Modules</h3>
        <p>Each lesson is designed to be completed in 10–15 minutes, so you can learn at your own pace without overwhelm.</p>
        <span class="feature-tag">Self-paced</span>
      </div>
      <div class="feature-card">
        <div class="feature-icon fi-blue">⚡</div>
        <h3>Instant Quizzes</h3>
        <p>Test your knowledge right after each module. Immediate feedback helps you retain what you've learned.</p>
        <span class="feature-tag">Adaptive</span>
      </div>
      <div class="feature-card">
        <div class="feature-icon fi-green">📊</div>
        <h3>Progress Tracking</h3>
        <p>See exactly where you are in your learning journey. Visual dashboards keep you motivated.</p>
        <span class="feature-tag">Visual</span>
      </div>
      <div class="feature-card">
        <div class="feature-icon fi-amber">🏆</div>
        <h3>Earn Badges</h3>
        <p>Complete modules and quizzes to earn achievement badges. Share your progress and celebrate milestones.</p>
        <span class="feature-tag">Gamified</span>
      </div>
      <div class="feature-card">
        <div class="feature-icon fi-pink">🤖</div>
        <h3>Real AI Concepts</h3>
        <p>From neural networks to LLMs — we cover it all in plain English, without the jargon overload.</p>
        <span class="feature-tag">Comprehensive</span>
      </div>
      <div class="feature-card">
        <div class="feature-icon fi-teal">🌐</div>
        <h3>No Account Needed</h3>
        <p>Just enter your name and start learning. No emails, no passwords, no friction whatsoever.</p>
        <span class="feature-tag">Instant access</span>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════ TESTIMONIALS ═══════════════════════════════ -->
<section class="testimonials" id="testimonials">
  <div class="section-inner">
    <div class="testimonials-header center">
      <div class="section-label">Reviews</div>
      <h2 class="section-title">What learners are saying</h2>
      <p class="section-sub">Real feedback from real people who've been through the modules.</p>
    </div>

    <div class="testimonials-grid">
      <div class="testimonial-card">
        <div class="t-stars light">★★★★★</div>
        <p class="t-quote">"I tried reading AI textbooks and got lost. This platform explained everything in a way that just clicks. Finished 4 modules in one evening!"</p>
        <div class="t-author">
          <div class="t-avatar" style="background: #5548d9;">AR</div>
          <div>
            <div class="t-name">Ahmed R.</div>
            <div class="t-role">Computer Science Student</div>
          </div>
        </div>
      </div>

      <div class="testimonial-card featured">
        <div class="t-stars dark">★★★★★</div>
        <p class="t-quote">"The quizzes after each module are what make this different. You actually remember things because you test yourself immediately. Brilliant design."</p>
        <div class="t-author">
          <div class="t-avatar" style="background: rgba(255,255,255,0.2);">MK</div>
          <div>
            <div class="t-name">Maya K.</div>
            <div class="t-role">Marketing Manager</div>
          </div>
        </div>
      </div>

      <div class="testimonial-card">
        <div class="t-stars light">★★★★★</div>
        <p class="t-quote">"No signup, no nonsense. Just enter your name and learn. In 2025, that's rare. The content itself is excellent — clear, honest, up to date."</p>
        <div class="t-author">
          <div class="t-avatar" style="background: #0ea5e9;">TN</div>
          <div>
            <div class="t-name">Tariq N.</div>
            <div class="t-role">Freelance Developer</div>
          </div>
        </div>
      </div>

      <div class="testimonial-card">
        <div class="t-stars light">★★★★☆</div>
        <p class="t-quote">"My students use this alongside our course. The bite-sized format is perfect for self-study. The LLM module especially is fantastic."</p>
        <div class="t-author">
          <div class="t-avatar" style="background: #10b981;">SL</div>
          <div>
            <div class="t-name">Sara L.</div>
            <div class="t-role">University Lecturer</div>
          </div>
        </div>
      </div>

      <div class="testimonial-card">
        <div class="t-stars light">★★★★★</div>
        <p class="t-quote">"I'm not a tech person at all but I understood every single lesson. The language is clear and the examples are relatable. Highly recommend."</p>
        <div class="t-author">
          <div class="t-avatar" style="background: #f59e0b;">PJ</div>
          <div>
            <div class="t-name">Priya J.</div>
            <div class="t-role">HR Professional</div>
          </div>
        </div>
      </div>

      <div class="testimonial-card">
        <div class="t-stars light">★★★★★</div>
        <p class="t-quote">"Finished the entire ethics module in one sitting. Made me think about AI in a completely new way. Can't wait for more content to drop."</p>
        <div class="t-author">
          <div class="t-avatar" style="background: #7c3aed;">KW</div>
          <div>
            <div class="t-name">Khalid W.</div>
            <div class="t-role">Product Designer</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════ CTA ═══════════════════════════════ -->
<section class="cta-section">
  <div class="section-inner">
    <div class="cta-card">
      <h2>Ready to understand AI?</h2>
      <p>Join thousands of learners who've already started. No account, no payment, no excuses — just your name.</p>
      <form class="cta-form" id="start-form-2">
        <input id="username2" type="text" placeholder="Enter your name..." maxlength="80" required>
        <button type="submit" class="btn-white">Start Learning →</button>
      </form>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════ FOOTER ═══════════════════════════════ -->
<footer>
  <div class="footer-inner">
    <div class="footer-top">
      <div class="footer-brand">
        <a href="#" class="footer-logo">
          <div class="footer-logo-icon">🧠</div>
          AI Learn
        </a>
        <p>An interactive platform to master AI basics through short modules, smart quizzes, and instant feedback. Free forever.</p>
        <div class="social-links">
          <a href="#" class="social-btn" title="Twitter/X">𝕏</a>
          <a href="#" class="social-btn" title="GitHub">⌥</a>
          <a href="#" class="social-btn" title="LinkedIn">in</a>
          <a href="#" class="social-btn" title="Discord">◈</a>
        </div>
      </div>

      <div class="footer-col">
        <h5>Platform</h5>
        <ul>
          <li><a href="#features">Features</a></li>
          <li><a href="#testimonials">Reviews</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h5>Learn</h5>
        <ul>
          <li><a href="#">AI Basics</a></li>
          <li><a href="#">Machine Learning</a></li>
          <li><a href="#">Neural Networks</a></li>
          <li><a href="#">LLMs & GPT</a></li>
          <li><a href="#">AI Ethics</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h5>Admin</h5>
        <ul>
          <li><a href="admin_login.php">Admin Login</a></li>
          <li><a href="#">Documentation</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms of Use</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <span>© 2025 AI Learn. Built with ❤️ for curious minds.</span>
      <div class="footer-links">
        <a href="#">Privacy</a>
        <a href="#">Terms</a>
        <a href="admin_login.php">Admin</a>
      </div>
    </div>
  </div>
</footer>

    <script src="landing_script.js"></script>
</body>
</html>