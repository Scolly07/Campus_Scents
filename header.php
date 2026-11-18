<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Campus Scents offers student-friendly fragrance discovery in Gauteng, South Africa.">
  <title><?= htmlspecialchars($pageTitle ?? "Campus Scents", ENT_QUOTES, "UTF-8") ?></title>
  <link rel="stylesheet" href="assets/style.css">
  <script src="assets/script.js" defer></script>
</head>
<body>
<header class="site-header">
  <div class="nav-wrap">
    <a class="brand" href="index.php" aria-label="Campus Scents home"><span class="brand-mark">CS</span><span class="brand-name">campus<span>scents</span><small>SMELL GOOD. SPEND SMART.</small></span></a>
    <button class="menu-toggle" id="menuToggle" aria-label="Open navigation" aria-expanded="false">☰</button>
    <nav class="main-nav" id="mainNav" aria-label="Main navigation">
      <a href="index.php" class="<?= basename($_SERVER["PHP_SELF"]) === "index.php" ? "current" : "" ?>">Home</a>
      <a href="about.php" class="<?= basename($_SERVER["PHP_SELF"]) === "about.php" ? "current" : "" ?>">About</a>
      <a href="contact.php" class="<?= basename($_SERVER["PHP_SELF"]) === "contact.php" ? "current" : "" ?>">Contact</a>
      <button class="language-toggle" id="languageToggle" type="button" aria-label="Switch language">EN / ZU</button>
    </nav>
  </div>
</header>