<?php
$root = '../../';
require_once $root . 'includes/data.php';

// Get post by ID
$id   = (int)($_GET['id'] ?? 1);
$post = null;
foreach ($blogs as $b) {
    if ($b['id'] === $id) { $post = $b; break; }
}

// Redirect if not found
if (!$post) {
    header('Location: index.php');
    exit;
}

// Related posts (all others, max 4)
$related = array_filter($blogs, fn($b) => $b['id'] !== $id);
$related = array_values($related);

$pageTitle = $post['title'];
require_once $root . 'includes/header.php';
?>

<article class="container">
    <div class="blog-post-wrap">
        <!-- Header image with overlay title -->
        <div class="blog-post-header">
            <img src="<?= $root ?>images/<?= htmlspecialchars($post['image']) ?>"
                 alt="<?= htmlspecialchars($post['title']) ?>">
            <div class="post-overlay">
                <h1 class="post-title"><?= htmlspecialchars($post['title']) ?></h1>
                <div style="font-size:.85rem;opacity:.75;display:flex;align-items:center;gap:.5rem;">
                    <i class="bi bi-calendar3"></i> <?= htmlspecialchars($post['date']) ?>
                </div>
            </div>
        </div>
        <!-- Body -->
        <div class="blog-post-body">
            <?php foreach ($post['content'] as $para): ?>
            <p><?= htmlspecialchars($para) ?></p>
            <?php endforeach; ?>
            <!-- Back link -->
            <div class="mt-3">
                <a href="index.php" style="color:var(--clr-accent);font-weight:600;font-size:.9rem;">
                    <i class="bi bi-arrow-left me-1"></i>Back to all blogs
                </a>
            </div>
        </div>
    </div>
</article>

<!-- ===== READ MORE ===== -->
<section class="section-wrap">
    <div class="container">
        <h2 class="section-title">Read More Blogs</h2>
        <div class="row g-4">
            <?php foreach ($related as $rel): ?>
            <div class="col-lg-3 col-md-6 animate-on-scroll">
                <div class="blog-card">
                    <div class="card-thumb-wrap">
                        <img src="<?= $root ?>images/<?= htmlspecialchars($rel['image']) ?>"
                             alt="<?= htmlspecialchars($rel['title']) ?>" class="card-thumb">
                    </div>
                    <div class="card-body">
                        <div class="card-title"><?= htmlspecialchars($rel['title']) ?></div>
                        <div class="card-excerpt"><?= htmlspecialchars($rel['excerpt']) ?></div>
                        <div class="card-meta">
                            <i class="bi bi-calendar3"></i>
                            <?= htmlspecialchars($rel['date']) ?>
                        </div>
                        <a href="post.php?id=<?= $rel['id'] ?>" class="btn-read">Read More →</a>
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
