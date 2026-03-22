<?php
// includes/footer.php
$root = $root ?? '';
?>

<!-- ===== FOOTER ===== -->
<footer class="adv-footer">
    <div class="container">
        <div class="row gy-4">
            <!-- Brand + Contact -->
            <div class="col-lg-4 col-md-6">
                <div class="footer-brand mb-3">
                    <span class="brand-icon">✦</span>
                    <span class="brand-text">Advensure</span>
                </div>
                <p class="footer-tagline">Your gateway to the Philippines' hidden wonders.</p>
                <div class="footer-contact">
                    <p><i class="bi bi-envelope-fill me-2"></i>Advensure@gmail.com</p>
                    <p><i class="bi bi-telephone-fill me-2"></i>+09360134321</p>
                </div>
            </div>
            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6 col-6">
                <h6 class="footer-heading">Destinations</h6>
                <ul class="footer-links">
                    <li><a href="<?= $root ?>pages/destinations/luzon.php">Luzon</a></li>
                    <li><a href="<?= $root ?>pages/destinations/visayas.php">Visayas</a></li>
                    <li><a href="<?= $root ?>pages/destinations/mindanao.php">Mindanao</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 col-6">
                <h6 class="footer-heading">Explore</h6>
                <ul class="footer-links">
                    <li><a href="<?= $root ?>pages/blogs/index.php">Blogs</a></li>
                    <li><a href="<?= $root ?>pages/about.php">About Us</a></li>
                    <li><a href="<?= $root ?>pages/contact.php">Contact</a></li>
                </ul>
            </div>
            <!-- Social -->
            <div class="col-lg-4 col-md-6">
                <h6 class="footer-heading">Follow Us</h6>
                <div class="footer-social">
                    <a href="#" class="social-btn" aria-label="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="social-btn" aria-label="Twitter / X">
                        <i class="bi bi-twitter-x"></i>
                    </a>
                    <a href="#" class="social-btn" aria-label="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#" class="social-btn" aria-label="TikTok">
                        <i class="bi bi-tiktok"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; <?= date('Y') ?> Advensure. All rights reserved.</p>
    </div>
</footer>

<!-- Bootstrap JS (single load) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<!-- Global JS -->
<script src="<?= $root ?>js/main.js"></script>
<?php if (!empty($extraJs)): ?>
<script src="<?= $root ?>js/<?= htmlspecialchars($extraJs) ?>"></script>
<?php endif; ?>
</body>
</html>
