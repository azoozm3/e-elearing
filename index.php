<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SouqSphere — Multi-Vendor Marketplace</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;800&family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="landing.css">
</head>
<body>
  <header id="main-header" class="site-header">
    <nav class="nav-shell">
      <a href="#" class="brand" aria-label="SouqSphere home">
        <span class="brand-mark">S</span>
        <span>SouqSphere</span>
      </a>
      <div class="nav-links" aria-label="Primary navigation">
        <a href="#categories">Categories</a>
        <a href="#products">Products</a>
        <a href="#seller">Seller</a>
        <a href="#admin">Admin</a>
      </div>
      <div class="nav-actions">
        <button class="icon-btn" id="lang-toggle" type="button" aria-label="Toggle Arabic and English">عربي</button>
        <button class="icon-btn" id="theme-toggle" type="button" aria-label="Toggle dark mode">☾</button>
        <a href="#auth" class="btn-ghost">Login</a>
        <a href="#checkout" class="btn-primary">Cart · $246</a>
      </div>
    </nav>
  </header>

  <main>
    <section class="hero" id="home">
      <div class="hero-glow glow-one"></div>
      <div class="hero-glow glow-two"></div>
      <div class="hero-copy">
        <span class="eyebrow">Amazon-scale marketplace starter</span>
        <h1>Launch a modern marketplace for customers, sellers, and admins.</h1>
        <p>SouqSphere is a responsive multi-vendor commerce experience with role-based dashboards, multilingual storefronts, analytics, inventory tools, coupons, reviews, and a scalable PostgreSQL-ready data model.</p>
        <div class="hero-search" role="search">
          <input type="search" placeholder="Search products, categories, sellers, or brands">
          <select aria-label="Category filter">
            <option>All categories</option>
            <option>Electronics</option>
            <option>Fashion</option>
            <option>Gaming</option>
          </select>
          <button type="button">Search</button>
        </div>
        <div class="hero-meta">
          <span>JWT Auth</span><span>PostgreSQL Schema</span><span>Cloudinary Uploads</span><span>RTL Ready</span>
        </div>
      </div>
      <aside class="hero-panel glass-card" aria-label="Live marketplace snapshot">
        <div class="panel-top">
          <div>
            <span class="muted">Today revenue</span>
            <strong>$128,430</strong>
          </div>
          <span class="pill success">+18.4%</span>
        </div>
        <div class="chart-bars" aria-hidden="true">
          <span style="height: 42%"></span><span style="height: 68%"></span><span style="height: 56%"></span><span style="height: 84%"></span><span style="height: 72%"></span><span style="height: 96%"></span>
        </div>
        <div class="mini-order">
          <span class="order-icon">🛒</span>
          <div><strong>Order #9821</strong><small>3 sellers · paid · shipping today</small></div>
        </div>
        <div class="mini-order">
          <span class="order-icon violet">🏬</span>
          <div><strong>Seller approval</strong><small>12 pending applications</small></div>
        </div>
      </aside>
    </section>

    <section class="stats-strip" aria-label="Marketplace metrics">
      <div><strong>52K+</strong><span>Products</span></div>
      <div><strong>1,240</strong><span>Approved sellers</span></div>
      <div><strong>4.8/5</strong><span>Average rating</span></div>
      <div><strong>99.9%</strong><span>Secure checkout uptime</span></div>
    </section>

    <section class="section" id="categories">
      <div class="section-heading">
        <span class="eyebrow">Unlimited categories</span>
        <h2>Browse every department in one polished storefront.</h2>
        <p>Category cards are designed for deep catalogs, SEO pages, pagination, lazy loading, and product filters by price, brand, rating, seller, and stock.</p>
      </div>
      <div class="category-grid">
        <?php
          $categories = [
            ['📱','Electronics','12,480 products'], ['👗','Fashion','9,820 products'], ['🛋️','Furniture','4,410 products'],
            ['🏠','Home','7,230 products'], ['⚽','Sports','2,980 products'], ['🥗','Food','1,780 products'],
            ['💄','Beauty','6,100 products'], ['🚗','Automotive','3,540 products'], ['📚','Books','8,450 products'], ['🎮','Gaming','5,930 products']
          ];
          foreach ($categories as $cat) {
            echo "<article class='category-card'><span>{$cat[0]}</span><h3>{$cat[1]}</h3><p>{$cat[2]}</p></article>";
          }
        ?>
      </div>
    </section>

    <section class="section products-section" id="products">
      <div class="section-heading split">
        <div>
          <span class="eyebrow">Customer website</span>
          <h2>Product discovery that feels like Noon, Amazon, and Alibaba.</h2>
        </div>
        <div class="filter-row" aria-label="Sample product filters">
          <button>Category</button><button>Price</button><button>Brand</button><button>Rating</button>
        </div>
      </div>
      <div class="product-grid">
        <article class="product-card"><span class="badge">-20%</span><div class="product-art">🎧</div><h3>Noise-Cancel Pro Headphones</h3><p>AudioHub Store · SKU AH-102</p><div class="rating">★★★★★ <span>(428)</span></div><div class="price">$89 <del>$112</del></div><button>Add to cart</button></article>
        <article class="product-card"><span class="badge hot">Hot</span><div class="product-art">⌚</div><h3>Smart Fitness Watch X2</h3><p>FitZone · 38 variants</p><div class="rating">★★★★☆ <span>(1.2k)</span></div><div class="price">$149</div><button>Add to wishlist</button></article>
        <article class="product-card"><span class="badge">New</span><div class="product-art">👜</div><h3>Premium Leather Tote</h3><p>Urban Fashion · In stock</p><div class="rating">★★★★★ <span>(214)</span></div><div class="price">$64</div><button>View details</button></article>
        <article class="product-card"><span class="badge success">Eco</span><div class="product-art">🪑</div><h3>Nordic Lounge Chair</h3><p>HomeCraft Seller</p><div class="rating">★★★★☆ <span>(87)</span></div><div class="price">$236</div><button>Compare</button></article>
      </div>
    </section>

    <section class="section dashboard-showcase" id="seller">
      <div class="dashboard-card seller-card">
        <span class="eyebrow">Seller dashboard</span>
        <h2>Every merchant controls only their own store, products, orders, and analytics.</h2>
        <div class="feature-list">
          <span>Create store, logo, and banner</span><span>Add products, images, SKU, stock, variants</span><span>Order status and customer views</span><span>Revenue, monthly reports, best sellers</span>
        </div>
      </div>
      <div class="mock-dashboard glass-card">
        <div class="dash-header"><strong>Seller Analytics</strong><span class="pill">July</span></div>
        <div class="dash-grid"><div><b>$32.6K</b><small>Revenue</small></div><div><b>684</b><small>Orders</small></div><div><b>128</b><small>Products</small></div><div><b>14</b><small>Low stock</small></div></div>
        <div class="inventory-list"><p><span>Wireless Mouse</span><b>892 sold</b></p><p><span>USB-C Hub</span><b>614 sold</b></p><p><span>Laptop Stand</span><b>391 sold</b></p></div>
      </div>
    </section>

    <section class="section dashboard-showcase admin" id="admin">
      <div class="mock-dashboard dark-dashboard">
        <div class="dash-header"><strong>Admin Command Center</strong><span class="pill danger">12 pending sellers</span></div>
        <div class="dash-grid"><div><b>88K</b><small>Users</small></div><div><b>1.2K</b><small>Sellers</small></div><div><b>$2.4M</b><small>Revenue</small></div><div><b>$184K</b><small>Commission</small></div></div>
        <div class="admin-actions"><button>Approve seller</button><button>Suspend account</button><button>Manage coupons</button></div>
      </div>
      <div class="dashboard-card">
        <span class="eyebrow">Admin dashboard</span>
        <h2>Full platform control with charts, moderation, settings, and secure APIs.</h2>
        <div class="feature-list">
          <span>Manage users, sellers, categories, products</span><span>Approve/reject sellers and suspend stores</span><span>Orders, payments, reviews, banners, coupons</span><span>Email, notification, SEO, and site settings</span>
        </div>
      </div>
    </section>

    <section class="section architecture" id="auth">
      <div class="section-heading center">
        <span class="eyebrow">Production architecture</span>
        <h2>Clean React + Express blueprint with secure role protection.</h2>
      </div>
      <div class="architecture-grid">
        <article><h3>Frontend</h3><p>React, Vite, TailwindCSS, Zustand, React Hook Form, Zod, reusable components, skeleton states, toast notifications, dark/light mode, and Arabic/English RTL support.</p></article>
        <article><h3>Backend</h3><p>Node.js, Express.js, RESTful APIs, JWT middleware, role guards for Admin/Seller/Customer, error handling, pagination, search, validation, and secure upload flows.</p></article>
        <article><h3>Database</h3><p>PostgreSQL-ready models for users, stores, categories, products, orders, reviews, wishlist, cart, coupons, notifications, payments, and shipping records.</p></article>
      </div>
    </section>

    <section class="cta-section" id="checkout">
      <div class="cta-card glass-card">
        <span class="eyebrow">Ready for full-stack implementation</span>
        <h2>Ship a polished marketplace MVP with buyer, seller, and admin journeys.</h2>
        <p>Includes checkout, order history, tracking, reviews, notifications, seller isolation, admin moderation, dashboard statistics, and extensible category management.</p>
        <div class="cta-actions"><a href="#products" class="btn-primary">Explore storefront</a><a href="#admin" class="btn-ghost light">View dashboards</a></div>
      </div>
    </section>
  </main>

  <footer>
    <div class="footer-inner">
      <a href="#" class="brand"><span class="brand-mark">S</span><span>SouqSphere</span></a>
      <p>© 2026 SouqSphere Marketplace. Built for scalable multi-vendor commerce.</p>
      <div><a href="#auth">JWT Roles</a><a href="#categories">Categories</a><a href="#seller">Seller Tools</a></div>
    </div>
  </footer>

  <script src="landing_script.js"></script>
</body>
</html>
