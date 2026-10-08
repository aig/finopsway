<?php
// Document start, <head> and masthead, driven by $page; footer.php closes the document.
// $page keys: title, description, path; og_title turns on Open Graph and Twitter tags.
// Bump the ?v= cache-busters here, once for the whole site. 'compact' => false only on home.
$e = fn ($s) => htmlspecialchars($s, ENT_QUOTES | ENT_HTML5);
$url = 'https://finopsway.com' . $page['path'];
$og_description = $page['og_description'] ?? $page['description'];
$compact = $page['compact'] ?? true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="color-scheme" content="only light" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= $e($page['title']) ?></title>
  <meta name="description" content="<?= $e($page['description']) ?>" />
  <link rel="icon" href="/favicon.ico" sizes="32x32" />
  <link rel="icon" href="/img/favicon.svg" type="image/svg+xml" />
  <link rel="apple-touch-icon" href="/apple-touch-icon.png" />
  <link rel="stylesheet" href="/styles.css?v=070" />
  <script src="/menu.js?v=006" defer></script>
<?php foreach ($page['styles'] ?? [] as $href): ?>
  <link rel="stylesheet" href="<?= $e($href) ?>" />
<?php endforeach; ?>
<?php foreach ($page['scripts'] ?? [] as $src): ?>
  <script src="<?= $e($src) ?>" defer></script>
<?php endforeach; ?>
  <script data-goatcounter="https://s.finopsway.com/count"
          async src="//s.finopsway.com/count.js"></script>
  <link rel="canonical" href="<?= $e($url) ?>" />
  <meta name="robots" content="index, follow, max-image-preview:large" />
<?php if (isset($page['og_title'])): ?>
  <meta property="og:type" content="<?= $e($page['og_type'] ?? 'website') ?>" />
  <meta property="og:site_name" content="FinOpsWay" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:url" content="<?= $e($url) ?>" />
  <meta property="og:title" content="<?= $e($page['og_title']) ?>" />
  <meta property="og:description" content="<?= $e($og_description) ?>" />
<?php if (isset($page['image'])): ?>
  <meta property="og:image" content="<?= $e($page['image']) ?>" />
  <meta property="og:image:alt" content="<?= $e($page['image_alt']) ?>" />
<?php endif; ?>
<?php if (isset($page['published'])): ?>
  <meta property="article:published_time" content="<?= $e($page['published']) ?>" />
  <meta property="article:modified_time" content="<?= $e($page['modified']) ?>" />
  <meta property="article:author" content="<?= $e($page['author']) ?>" />
<?php endif; ?>
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?= $e($page['og_title']) ?>" />
  <meta name="twitter:description" content="<?= $e($page['twitter_description'] ?? $og_description) ?>" />
<?php if (isset($page['image'])): ?>
  <meta name="twitter:image" content="<?= $e($page['image']) ?>" />
  <meta name="twitter:image:alt" content="<?= $e($page['image_alt']) ?>" />
<?php endif; ?>
<?php endif; ?>
<?php if (isset($page['json_ld'])): ?>
  <script type="application/ld+json">
<?= $page['json_ld'] ?>

  </script>
<?php endif; ?>
</head>
<body>
  <a class="skip" href="#main">Skip to content</a>

  <header class="masthead<?= $compact ? ' is-compact' : '' ?>">
    <div class="head">
    <div class="bar">
      <a class="lockup" href="/" aria-label="FinOpsWay home">
        <span class="wordmark">
          <img class="wm-s" src="/img/FinOpsWay_logo_bl.png" width="574" height="120" alt="FinOpsWay" />
        </span>
        <span class="tagline">Databricks costs, in context</span>
      </a>
      <nav class="nav desktop-nav" aria-label="Main navigation">
        <a class="nav-download" href="/#download">Download</a>
        <a href="/onboarding/">Setup</a>
        <a href="/features/">Features</a>
        <a href="/#why">Why</a>
        <a href="/#authors">Contacts</a>
        <a href="/security/">Security</a>
        <a href="/guides/">Guides</a>
        <a class="nav-support" href="https://github.com/sponsors/aig" target="_blank" rel="noopener" aria-label="Sponsor on GitHub" title="Sponsor on GitHub"><svg class="heart" aria-hidden="true" width="16" height="16" viewBox="0 0 16 16" fill="currentColor"><path d="m8 14.25.345.666a.75.75 0 0 1-.69 0l-.008-.004-.018-.01a7.152 7.152 0 0 1-.31-.17 22.055 22.055 0 0 1-3.434-2.414C2.045 10.731 0 8.35 0 5.5 0 2.836 2.086 1 4.25 1 5.797 1 7.153 1.802 8 3.02 8.847 1.802 10.203 1 11.75 1 13.914 1 16 2.836 16 5.5c0 2.85-2.045 5.231-3.885 6.818a22.066 22.066 0 0 1-3.744 2.584l-.018.01-.006.003h-.002ZM4.25 2.5c-1.336 0-2.75 1.164-2.75 3 0 2.15 1.58 4.144 3.365 5.682A20.58 20.58 0 0 0 8 13.393a20.58 20.58 0 0 0 3.135-2.211C12.92 9.644 14.5 7.65 14.5 5.5c0-1.836-1.414-3-2.75-3-1.373 0-2.609.986-3.029 2.456a.749.749 0 0 1-1.442 0C6.859 3.486 5.623 2.5 4.25 2.5Z"/></svg></a>
      </nav>
      <details class="mobile-menu">
        <summary>Menu <span aria-hidden="true">☰</span></summary>
        <nav class="mobile-nav" aria-label="Main navigation">
          <a href="/#download">Download</a>
          <a href="/onboarding/">Setup</a>
          <a href="/features/">Features</a>
          <a href="/#why">Why</a>
          <a href="/#authors">Contacts</a>
          <a href="/security/">Security</a>
          <a href="/guides/">Guides</a>
          <a class="nav-support" href="https://github.com/sponsors/aig" target="_blank" rel="noopener"><svg class="heart" aria-hidden="true" width="16" height="16" viewBox="0 0 16 16" fill="currentColor"><path d="m8 14.25.345.666a.75.75 0 0 1-.69 0l-.008-.004-.018-.01a7.152 7.152 0 0 1-.31-.17 22.055 22.055 0 0 1-3.434-2.414C2.045 10.731 0 8.35 0 5.5 0 2.836 2.086 1 4.25 1 5.797 1 7.153 1.802 8 3.02 8.847 1.802 10.203 1 11.75 1 13.914 1 16 2.836 16 5.5c0 2.85-2.045 5.231-3.885 6.818a22.066 22.066 0 0 1-3.744 2.584l-.018.01-.006.003h-.002ZM4.25 2.5c-1.336 0-2.75 1.164-2.75 3 0 2.15 1.58 4.144 3.365 5.682A20.58 20.58 0 0 0 8 13.393a20.58 20.58 0 0 0 3.135-2.211C12.92 9.644 14.5 7.65 14.5 5.5c0-1.836-1.414-3-2.75-3-1.373 0-2.609.986-3.029 2.456a.749.749 0 0 1-1.442 0C6.859 3.486 5.623 2.5 4.25 2.5Z"/></svg> Sponsor on GitHub</a>
        </nav>
      </details>
    </div>
    </div>
  </header>
