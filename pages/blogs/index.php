<?php
$root      = '../../';
$pageTitle = 'Blogs';
require_once $root . 'includes/data.php';
require_once $root . 'includes/header.php';
?>

<div class="page-hero">
    <h1>Travel Blogs</h1>
    <p>Stories, tips, and inspiration from across the Philippine archipelago.</p>
</div>

<section class="section-wrap">
    <div class="container">
        <div class="row g-4">
            <?php foreach ($blogs as $blog): ?>
            <div class="col-lg-4 col-md-6 animate-on-scroll">
                <div class="blog-card">
                    <div class="card-thumb-wrap">
                        <img src="<?= $root ?>images/<?= htmlspecialchars($blog['image']) ?>"
                             alt="<?= htmlspecialchars($blog['title']) ?>" class="card-thumb">
                    </div>
                    <div class="card-body">
                        <div class="card-title"><?= htmlspecialchars($blog['title']) ?></div>
                        <div class="card-excerpt"><?= htmlspecialchars($blog['excerpt']) ?></div>
                        <div class="card-meta">
                            <i class="bi bi-calendar3"></i>
                            <?= htmlspecialchars($blog['date']) ?>
                        </div>
                        <a href="post.php?id=<?= $blog['id'] ?>" class="btn-read">Read More →</a>
                    </div>
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
