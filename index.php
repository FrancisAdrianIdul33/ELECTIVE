<?php
$pageTitle = 'Home';
$root = '';
require_once 'includes/data.php';
require_once 'includes/header.php';
?>

<!-- ===== HERO CAROUSEL ===== -->
<?php
$slides = [
    ['image' => 'luzon.jpg',      'title' => 'Mayon Volcano',         'caption' => 'A majestic stratovolcano with a near-perfect conical shape — one of nature\'s most spectacular sights.'],
    ['image' => 'visayas.jpg',    'title' => 'Twin Lagoon',           'caption' => 'Two connected lagoons nestled amidst towering limestone cliffs in Coron, Palawan.'],
    ['image' => 'mindanao.jpg',   'title' => 'Aliwagwag Falls',       'caption' => 'One of the longest waterfalls in the Philippines, raging with life during the rainy season.'],
    ['image' => 'des-batad.jpg',  'title' => 'Batad Rice Terraces',   'caption' => 'Centuries-old terraces carved by the Ifugao people — a UNESCO World Heritage Site.'],
    ['image' => 'des-cave.jpg',   'title' => 'Sumaguing Cave',        'caption' => 'Vast cave networks with ancient stalagmites that challenge even experienced spelunkers.'],
    ['image' => 'des-hill.jpg',   'title' => 'Chocolate Hills',       'caption' => 'Over 1,200 grass-covered hills turning chocolate brown in the dry season — a geological wonder.'],
    ['image' => 'des-falls.jpg',  'title' => 'Kawasan Falls',         'caption' => 'Crystal-clear turquoise cascades nestled in lush Cebu rainforest.'],
    ['image' => 'des-island.jpg', 'title' => 'Cloud 9, Siargao',      'caption' => 'The world-renowned surfing destination with powerful, hollow reef-break waves.'],
    ['image' => 'des-park.webp',  'title' => 'Dahilayan Adventure Park', 'caption' => 'Thrilling ziplines and adventure activities amid Bukidnon\'s stunning mountain scenery.'],
];
?>
<div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">
        <?php foreach ($slides as $i => $slide): ?>
        <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
            <img src="images/<?= htmlspecialchars($slide['image']) ?>" alt="<?= htmlspecialchars($slide['title']) ?>">
            <div class="carousel-caption-custom">
                <h4><?= htmlspecialchars($slide['title']) ?></h4>
                <p><?= htmlspecialchars($slide['caption']) ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- ===== DESTINATIONS ===== -->
<section class="section-wrap">
    <div class="container">
        <h2 class="section-title">Destinations</h2>
        <div class="row g-4">
            <?php foreach ($destinations as $key => $dest): ?>
            <div class="col-md-4 animate-on-scroll">
                <div class="dest-card">
                    <img src="images/<?= htmlspecialchars($dest['places'][0]['image']) ?>"
                         alt="<?= htmlspecialchars($dest['name']) ?>">
                    <div class="dest-card-body">
                        <div class="dest-name"><?= htmlspecialchars($dest['name']) ?></div>
                        <p class="text-muted mt-2" style="font-size:.88rem; line-height:1.55;">
                            <?= htmlspecialchars(substr($dest['description'], 0, 130)) ?>…
                        </p>
                        <a href="pages/destinations/<?= $key ?>.php" class="btn-read blog-card mt-2 d-inline-block"
                           style="padding:.4rem .9rem;font-size:.85rem;border-radius:20px;border:1.5px solid var(--clr-accent);color:var(--clr-accent);font-weight:600;transition:all .25s">
                            Explore <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===== BLOGS ===== -->
<section class="section-wrap" style="background: rgba(255,255,255,.6); padding: 3rem 0;">
    <div class="container">
        <h2 class="section-title">Latest Blogs</h2>
        <div class="row g-4">
            <?php foreach ($blogs as $blog): ?>
            <div class="col-lg-4 col-md-6 animate-on-scroll">
                <div class="blog-card">
                    <div class="card-thumb-wrap">
                        <img src="images/<?= htmlspecialchars($blog['image']) ?>"
                             alt="<?= htmlspecialchars($blog['title']) ?>" class="card-thumb">
                    </div>
                    <div class="card-body">
                        <div class="card-title"><?= htmlspecialchars($blog['title']) ?></div>
                        <div class="card-excerpt"><?= htmlspecialchars($blog['excerpt']) ?></div>
                        <div class="card-meta">
                            <i class="bi bi-calendar3"></i>
                            <?= htmlspecialchars($blog['date']) ?>
                        </div>
                        <a href="pages/blogs/post.php?id=<?= $blog['id'] ?>" class="btn-read">Read More →</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-4">
            <a href="pages/blogs/index.php" class="btn btn-outline-primary rounded-pill px-4">
                View All Blogs <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>
    </div>
</section>

<!-- ===== FEEDBACK + JOIN ===== -->
<section class="section-wrap">
    <div class="container">
        <div class="row g-4 align-items-center">
            <!-- Feedback -->
            <div class="col-lg-7">
                <h2 class="section-title text-start" style="text-align:left!important;">What Travelers Say</h2>
                <div class="feedback-wrap">
                    <div class="feedback-card">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <img src="images/profile.jpg" alt="User" class="feedback-avatar">
                            <div>
                                <div id="fb-username" class="fw-bold" style="color:var(--clr-primary)">John Mark Monsanto</div>
                                <div id="fb-date" class="text-muted" style="font-size:.82rem">July 24, 2023</div>
                            </div>
                        </div>
                        <p id="fb-text" class="mb-0" style="font-size:.92rem;line-height:1.7;color:var(--clr-text);">Loading…</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-3">
                        <button class="feedback-nav-btn" onclick="moveFeedback(-1)" aria-label="Previous">
                            <i class="bi bi-chevron-left"></i>
                        </button>
                        <div id="fb-dots" class="d-flex gap-2">
                            <button class="fb-dot" style="width:10px;height:10px;border-radius:50%;background:var(--clr-accent);border:none;cursor:pointer;opacity:.4"></button>
                            <button class="fb-dot" style="width:10px;height:10px;border-radius:50%;background:var(--clr-accent);border:none;cursor:pointer;opacity:.4"></button>
                            <button class="fb-dot" style="width:10px;height:10px;border-radius:50%;background:var(--clr-accent);border:none;cursor:pointer;opacity:.4"></button>
                        </div>
                        <button class="feedback-nav-btn" onclick="moveFeedback(1)" aria-label="Next">
                            <i class="bi bi-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Join Us -->
            <div class="col-lg-5">
                <div class="join-banner">
                    <h2>Join Us Today!</h2>
                    <p>Become part of our community and enjoy exclusive benefits and a quality travel experience tailored just for you.</p>
                    <a href="pages/contact.php" class="btn-join">Get in Touch →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== ABOUT SNIPPET ===== -->
<section class="section-wrap" style="padding-bottom:4rem;">
    <div class="container">
        <h2 class="section-title">About Us</h2>
        <div class="about-snippet animate-on-scroll">
            <img src="images/group.jpg" alt="Advensure Team">
            <div>
                <h3 style="font-family:var(--font-display);color:var(--clr-primary);font-weight:700;">Our Goal</h3>
                <p class="text-muted" style="line-height:1.8;">
                    We believe that every adventure should be tailored to the individual. That's why we take the time to
                    understand your dreams, your interests, and your travel style. Whether you're seeking adrenaline-pumping
                    thrills or tranquil escapes, we're here to help you create a journey that's uniquely yours.
                </p>
                <a href="pages/about.php" class="btn btn-outline-primary rounded-pill px-4 mt-2">
                    Meet the Team <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
.animate-on-scroll { opacity: 0; transform: translateY(24px); transition: opacity .6s ease, transform .6s ease; }
.animate-on-scroll.visible { opacity: 1; transform: none; }
.fb-dot.active { opacity: 1 !important; }
</style>

<?php require_once 'includes/footer.php'; ?>
