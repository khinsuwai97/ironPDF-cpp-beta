<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?= esc($meta['description']) ?>" />
    <meta name="keywords" content="<?= esc($meta['keywords']) ?>" />
    <meta property="og:title" content="<?= esc($meta['og_title']) ?>" />
    <meta property="og:description" content="<?= esc($meta['og_description']) ?>" />
    <meta property="og:type" content="website" />
    <title><?= esc($meta['title']) ?></title>
    <link rel="icon" type="image/svg+xml" href="<?= base_url('images/PDF.svg') ?>" />

    <!-- Bootstrap 5.3 -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    />

    <!-- Google Fonts — Montserrat (Gotham fallback) -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&display=swap"
      rel="stylesheet"
    />

    <!-- Custom styles -->
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('css/queries.css') ?>" />
  </head>

  <body>
    <!-- ============================================================
         HERO WRAPPER (nav + hero + signup banner)
         ============================================================ -->
    <div class="hero-wrapper">
      <!-- Hero image — spans the entire wrapper -->
      <div class="hero-image-wrap">
        <img
          src="<?= base_url('images/hero.svg') ?>"
          alt="C++ file icon with decorative geometric shapes"
          class="hero-image"
        />
      </div>

      <!-- NAVIGATION -->
      <nav
        class="site-nav navbar navbar-expand-lg navbar-dark"
        aria-label="Main navigation"
      >
        <div class="container-fluid">
          <a href="<?= base_url('/') ?>" class="navbar-brand">
            <img
              src="<?= base_url('images/logos/LOGO.svg') ?>"
              alt="Iron Software"
              class="nav-logo"
            />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mainNav"
            aria-controls="mainNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-4">
              <?php foreach ($nav['links'] as $link): ?>
              <li class="nav-item">
                <a
                  class="nav-link<?= $link['dropdown'] ? ' dropdown-toggle' : '' ?>"
                  href="<?= esc($link['url']) ?>"
                  <?php if ($link['dropdown']): ?>
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                  <?php endif; ?>
                >
                  <?= esc($link['label']) ?>
                </a>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </nav>

      <!-- HERO + SIGN-UP BANNER -->
      <section class="hero" aria-label="Hero and early-access sign-up">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="hero-content">
                <div class="hero-logo-area">
                  <span class="logo-mark-small" aria-hidden="true">
                    <img src="<?= base_url('images/PDF.svg') ?>" alt="pdf" />
                  </span>
                  <span class="hero-logo-iron">
                    <strong><?= esc($hero['product_name']) ?></strong><span style="color: var(--clr-accent-pink)"><?= esc($hero['product_suffix']) ?></span>
                    <small class="sm-text"><?= esc($hero['product_for']) ?></small>
                  </span>
                </div>
                <p class="hero-subtitle">
                  <?= esc($hero['subtitle']) ?>
                </p>
                <h1 class="hero-title">
                  <?= esc($hero['title_line1']) ?><br />
                  <span class="title-highlight"><?= esc($hero['title_line2']) ?></span>
                </h1>
                <p class="hero-coming-soon"><?= esc($hero['coming_soon']) ?></p>
              </div>
            </div>
          </div>
        </div>

        <div class="signup-banner">
          <div class="container">
            <h2><?= esc($signup_banner['heading']) ?></h2>
            <p><?= esc($signup_banner['subheading']) ?></p>
            <form class="signup-form" action="#" method="post">
              <label for="email-banner" class="visually-hidden">Email address</label>
              <input
                type="email"
                id="email-banner"
                class="form-control"
                placeholder="<?= esc($signup_banner['placeholder']) ?>"
                required
              />
              <button type="submit" class="btn-signup"><?= esc($signup_banner['button_text']) ?></button>
            </form>
            <div class="coming-soon-strip">
              <span class="coming-soon-tag"># Coming Soon</span>
              IronPDF Beta Program also coming soon for
              <?php foreach ($signup_banner['coming_soon_languages'] as $i => $lang): ?>
                <span class="lang-highlight"><?= esc($lang) ?></span><?= $i < count($signup_banner['coming_soon_languages']) - 1 ? ' |' : '' ?>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- END .hero-wrapper -->

    <!-- ============================================================
         FEATURES SECTION
         ============================================================ -->
    <section class="features-section">
      <div class="container">
        <div class="section-title-wrap">
          <h2><?= esc($features['section_title']) ?></h2>
          <img src="<?= base_url('images/coming-soon.svg') ?>" alt="Coming Soon" class="badge-coming-soon" />
        </div>

        <ul class="feature-list">
          <?php foreach ($features['items'] as $i => $item): ?>
          <li class="feature-item">
            <span class="feature-hash">#</span> <?= esc($item) ?>
            <?php if ($i < count($features['items']) - 1): ?>
              <span>|</span>
            <?php endif; ?>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="feature-description">
        <div class="container">
          <?php foreach ($features['description'] as $paragraph): ?>
          <p><?= $paragraph ?></p>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ============================================================
         WHY C++ SECTION
         ============================================================ -->
    <section class="why-section">
      <div class="container">
        <div class="row align-items-center g-0">
          <!-- Left: icon diagram -->
          <div class="col-md-4">
            <div class="why-icon-group">
              <img
                src="<?= base_url('images/GroupHTML-PDF.svg') ?>"
                alt="HTML to PDF conversion diagram"
                class="why-icon-diagram"
              />
            </div>
          </div>

          <!-- Right: text content -->
          <div class="col-md-8 why-content">
            <h2><?= esc($why_section['title_prefix']) ?> <span class="highlight"><?= esc($why_section['title_highlight']) ?></span></h2>
            <?php foreach ($why_section['paragraphs'] as $paragraph): ?>
            <p><?= esc($paragraph) ?></p>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
         EARLY ACCESS SECTION
         ============================================================ -->
    <section class="early-access-section">
      <div class="container">
        <h2><?= esc($early_access['title_prefix']) ?> <span class="highlight"><?= esc($early_access['title_highlight']) ?></span></h2>
        <p class="lead-text">
          <?= esc($early_access['lead_text']) ?>
        </p>

        <div class="product-cards">
          <?php foreach ($early_access['product_cards'] as $card): ?>
          <div class="product-card<?= $card['released'] ? ' released' : '' ?>">
            <span class="card-status <?= $card['released'] ? 'status-released' : 'status-coming' ?>"># <?= esc($card['status']) ?></span>
            <span class="card-product-name">
              <span class="iron-text"><span class="iron-color"><?= esc($card['name']) ?></span><span class="iron-pdf"><?= esc($card['suffix']) ?></span></span>
              <span class="for-lang">for <?= esc($card['language']) ?></span>
            </span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ============================================================
         BOTTOM SIGN-UP
         ============================================================ -->
    <section class="bottom-signup">
      <div class="container">
        <h2><?= esc($bottom_signup['title_prefix']) ?> <span class="highlight"><?= esc($bottom_signup['title_highlight']) ?></span></h2>

        <form class="signup-form" action="#" method="post">
          <label for="email-bottom" class="visually-hidden">Email address</label>
          <input
            type="email"
            id="email-bottom"
            class="form-control"
            placeholder="<?= esc($bottom_signup['placeholder']) ?>"
            required
          />
          <button type="submit" class="btn-signup"><?= esc($bottom_signup['button_text']) ?></button>
        </form>
      </div>
    </section>

    <!-- Bootstrap JS (for mobile nav toggle) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>
  </body>
</html>
