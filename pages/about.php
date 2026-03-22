<?php
$root      = '../';
$pageTitle = 'About Us';
require_once $root . 'includes/data.php';
require_once $root . 'includes/header.php';
?>

<div class="page-hero">
    <h1>About Us</h1>
    <p>The passionate team behind Advensure — your guide to the Philippines' hidden wonders.</p>
</div>

<!-- ===== OUR GOAL ===== -->
<section class="section-wrap">
    <div class="container">
        <div class="about-snippet animate-on-scroll">
            <img src="<?= $root ?>images/group.jpg" alt="Advensure Team">
            <div>
                <h2 style="font-family:var(--font-display);color:var(--clr-primary);font-weight:700;margin-bottom:1rem;">Our Goal</h2>
                <p style="color:var(--clr-muted);line-height:1.8;font-size:1rem;">
                    We believe that every adventure should be tailored to the individual. That's why we take the time to
                    understand your dreams, your interests, and your travel style. Whether you're seeking adrenaline-pumping
                    thrills or tranquil escapes, we're here to help you create a journey that's uniquely yours.
                </p>
                <p style="color:var(--clr-muted);line-height:1.8;font-size:1rem;">
                    Our blog is a treasure trove of inspiration, offering insights into diverse destinations, unique
                    activities, and hidden gems waiting to be discovered. We're committed to providing exceptional service,
                    ensuring your adventure is everything you dreamed of and more.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ===== TEAM ===== -->
<section class="section-wrap" style="background:rgba(255,255,255,.55);padding:3rem 0;">
    <div class="container">
        <h2 class="section-title">Meet the Team</h2>
        <div class="row g-4 justify-content-center">
            <?php foreach ($members as $m): ?>
            <div class="col-lg-3 col-md-6 animate-on-scroll">
                <div class="member-card">
                    <img src="<?= $root ?>images/<?= htmlspecialchars($m['photo']) ?>"
                         alt="<?= htmlspecialchars($m['name']) ?>" class="member-photo">
                    <div class="member-name"><?= htmlspecialchars($m['name']) ?></div>
                    <div class="mb-2">
                        <?php foreach ($m['hobbies'] as $hobby): ?>
                        <span class="badge-hobby"><?= htmlspecialchars($hobby) ?></span>
                        <?php endforeach; ?>
                    </div>
                    <div class="member-desc">
                        <?= htmlspecialchars($m['bio']) ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===== VALUES ===== -->
<section class="section-wrap">
    <div class="container">
        <h2 class="section-title">What Drives Us</h2>
        <div class="row g-4">
            <?php
            $values = [
                ['icon' => 'compass',      'title' => 'Adventure First',    'text' => 'Every recommendation we make is rooted in real travel experience and a love for discovery.'],
                ['icon' => 'heart',        'title' => 'Local Love',         'text' => 'We celebrate Filipino culture, support local communities, and highlight authentic experiences.'],
                ['icon' => 'shield-check', 'title' => 'Trustworthy Guides', 'text' => 'Our content is honest, well-researched, and updated regularly so you can plan with confidence.'],
            ];
            foreach ($values as $v): ?>
            <div class="col-md-4 animate-on-scroll">
                <div style="background:var(--clr-surface);border-radius:var(--radius-md);padding:2rem;text-align:center;box-shadow:var(--shadow-sm);height:100%;">
                    <div style="font-size:2.2rem;color:var(--clr-accent);margin-bottom:1rem;">
                        <i class="bi bi-<?= $v['icon'] ?>"></i>
                    </div>
                    <h5 style="font-family:var(--font-display);color:var(--clr-primary);font-weight:700;">
                        <?= htmlspecialchars($v['title']) ?>
                    </h5>
                    <p style="color:var(--clr-muted);font-size:.92rem;line-height:1.6;">
                        <?= htmlspecialchars($v['text']) ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
.animate-on-scroll { opacity: 0; transform: translateY(24px); transition: opacity .6s ease, transform .6s ease; }
.animate-on-scroll.visible { opacity: 1; transform: none; }
</style>

<?php require_once $root . 'includes/footer.php'; ?>
