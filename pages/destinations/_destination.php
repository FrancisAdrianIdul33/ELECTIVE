<?php
// pages/destinations/_destination.php
// Shared template used by luzon.php, visayas.php, mindanao.php
// Expects: $destKey (string), $dest (array from $destinations)
$root = '../../';
$pageTitle = $dest['name'];
$extraCss  = null;
require_once $root . 'includes/header.php';
?>

<!-- ===== DESTINATION HERO ===== -->
<div class="dest-hero" style="background-image: url('<?= $root ?>images/<?= htmlspecialchars($dest['bg_image']) ?>');">
    <div class="dest-hero-content container">
        <h1><?= htmlspecialchars($dest['name']) ?></h1>
        <p><?= htmlspecialchars($dest['description']) ?></p>
    </div>
</div>

<!-- ===== PLACES ===== -->
<section class="section-wrap">
    <div class="container">
        <h2 class="section-title">Places to Explore</h2>
        <?php foreach ($dest['places'] as $place): ?>
        <div class="place-row animate-on-scroll">
            <img src="<?= $root ?>images/<?= htmlspecialchars($place['image']) ?>"
                 alt="<?= htmlspecialchars($place['name']) ?>" class="place-img">
            <div class="place-body">
                <div class="place-name"><?= htmlspecialchars($place['name']) ?></div>
                <div class="place-location">
                    <i class="bi bi-geo-alt-fill"></i>
                    <?= htmlspecialchars($place['location']) ?>
                </div>
                <p><?= htmlspecialchars($place['desc']) ?></p>
            </div>
        </div>
        <?php endforeach; ?>

        <div class="mt-4 d-flex gap-3 justify-content-center flex-wrap">
            <?php
            $others = array_filter(['luzon', 'visayas', 'mindanao'], fn($k) => $k !== $destKey);
            foreach ($others as $other):
                $label = ucfirst($other);
            ?>
            <a href="<?= $other ?>.php" class="btn btn-outline-primary rounded-pill px-4">
                Explore <?= $label ?> <i class="bi bi-arrow-right ms-1"></i>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
.animate-on-scroll { opacity: 0; transform: translateY(24px); transition: opacity .6s ease, transform .6s ease; }
.animate-on-scroll.visible { opacity: 1; transform: none; }
</style>

<?php require_once $root . 'includes/footer.php'; ?>
