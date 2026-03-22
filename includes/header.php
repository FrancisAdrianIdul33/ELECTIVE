<?php
// includes/header.php
// Usage: include this at top of every page.
// Set $pageTitle and $extraCss before including.
$pageTitle = $pageTitle ?? 'Advensure';
$extraCss  = $extraCss  ?? '';
$bodyBg    = $bodyBg    ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?> — Advensure</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Global CSS -->
    <link rel="stylesheet" href="<?= $root ?? '' ?>css/global.css">
    <?php if ($extraCss): ?>
    <link rel="stylesheet" href="<?= $root ?? '' ?>css/<?= htmlspecialchars($extraCss) ?>">
    <?php endif; ?>
</head>
<body<?= $bodyBg ? ' style="' . htmlspecialchars($bodyBg) . '"' : '' ?>>

<?php
// Determine the root path for links based on depth
$root = $root ?? '';
?>

<!-- ===== NAVBAR ===== -->
<nav class="adv-nav navbar navbar-expand-lg" id="mainNav">
    <div class="container">
        <a class="navbar-brand adv-brand" href="<?= $root ?>index.php">
            <span class="brand-icon">✦</span>
            <span class="brand-text">Advensure</span>
        </a>
        <button class="navbar-toggler adv-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span></span><span></span><span></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                <li class="nav-item dropdown">
                    <a class="nav-link adv-nav-link dropdown-toggle" href="#"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-map me-1"></i>Destinations
                    </a>
                    <ul class="dropdown-menu adv-dropdown">
                        <li><a class="dropdown-item" href="<?= $root ?>pages/destinations/luzon.php">
                            <i class="bi bi-geo-alt me-2"></i>Luzon</a></li>
                        <li><a class="dropdown-item" href="<?= $root ?>pages/destinations/visayas.php">
                            <i class="bi bi-geo-alt me-2"></i>Visayas</a></li>
                        <li><a class="dropdown-item" href="<?= $root ?>pages/destinations/mindanao.php">
                            <i class="bi bi-geo-alt me-2"></i>Mindanao</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link adv-nav-link" href="<?= $root ?>pages/blogs/index.php">
                        <i class="bi bi-journal-text me-1"></i>Blogs
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link adv-nav-link" href="<?= $root ?>pages/about.php">
                        <i class="bi bi-people me-1"></i>About Us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link adv-nav-link" href="<?= $root ?>pages/contact.php">
                        <i class="bi bi-envelope me-1"></i>Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
