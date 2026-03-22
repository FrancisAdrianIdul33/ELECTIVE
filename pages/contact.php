<?php
$root      = '../';
$pageTitle = 'Contact Us';

// Handle form submission
$success = false;
$errors  = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim($_POST['name']    ?? '');
    $email   = trim($_POST['email']   ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (empty($name))    $errors[] = 'Name is required.';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'A valid email is required.';
    if (empty($subject)) $errors[] = 'Subject is required.';
    if (empty($message)) $errors[] = 'Message is required.';

    if (empty($errors)) {
        // In production: mail($to, $subject, $body, $headers);
        $success = true;
    }
}

require_once $root . 'includes/header.php';
?>

<div class="page-hero">
    <h1>Contact Us</h1>
    <p>Have questions or want to share your adventure? We'd love to hear from you.</p>
</div>

<section class="section-wrap">
    <div class="container">
        <div class="row g-5 align-items-start">
            <!-- Form -->
            <div class="col-lg-7 animate-on-scroll">
                <div class="contact-card">
                    <h3 style="font-family:var(--font-display);color:var(--clr-primary);font-weight:700;margin-bottom:1.5rem;">
                        Send a Message
                    </h3>

                    <?php if ($success): ?>
                    <div class="alert alert-success rounded-3">
                        <i class="bi bi-check-circle-fill me-2"></i>
                        Thank you! Your message has been sent. We'll get back to you soon.
                    </div>
                    <?php endif; ?>

                    <?php if ($errors): ?>
                    <div class="alert alert-danger rounded-3">
                        <ul class="mb-0">
                            <?php foreach ($errors as $err): ?>
                            <li><?= htmlspecialchars($err) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>

                    <div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold" style="font-size:.9rem;">Your Name</label>
                                <input type="text" name="name" class="form-control"
                                       placeholder="Juan dela Cruz"
                                       value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold" style="font-size:.9rem;">Email Address</label>
                                <input type="email" name="email" class="form-control"
                                       placeholder="you@example.com"
                                       value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold" style="font-size:.9rem;">Subject</label>
                                <select name="subject" class="form-select">
                                    <option value="">Choose a topic…</option>
                                    <option>General Inquiry</option>
                                    <option>Travel Recommendation</option>
                                    <option>Partnership / Collaboration</option>
                                    <option>Blog Submission</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold" style="font-size:.9rem;">Message</label>
                                <textarea name="message" class="form-control" rows="5"
                                          placeholder="Tell us about your travel dreams or questions…"><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn-submit btn">
                                    <i class="bi bi-send me-2"></i>Send Message
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Info sidebar -->
            <div class="col-lg-5 animate-on-scroll">
                <div style="padding:1.5rem 0;">
                    <h4 style="font-family:var(--font-display);color:var(--clr-primary);font-weight:700;margin-bottom:1.5rem;">
                        Get in Touch
                    </h4>
                    <div class="d-flex flex-column gap-3">
                        <div style="display:flex;align-items:flex-start;gap:1rem;">
                            <div style="width:44px;height:44px;background:var(--clr-bg);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                <i class="bi bi-envelope-fill" style="color:var(--clr-accent);font-size:1.1rem;"></i>
                            </div>
                            <div>
                                <div style="font-weight:700;font-size:.9rem;color:var(--clr-primary);">Email</div>
                                <div style="color:var(--clr-muted);font-size:.9rem;">Advensure@gmail.com</div>
                            </div>
                        </div>
                        <div style="display:flex;align-items:flex-start;gap:1rem;">
                            <div style="width:44px;height:44px;background:var(--clr-bg);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                <i class="bi bi-telephone-fill" style="color:var(--clr-accent);font-size:1.1rem;"></i>
                            </div>
                            <div>
                                <div style="font-weight:700;font-size:.9rem;color:var(--clr-primary);">Phone</div>
                                <div style="color:var(--clr-muted);font-size:.9rem;">+09360134321</div>
                            </div>
                        </div>
                        <div style="display:flex;align-items:flex-start;gap:1rem;">
                            <div style="width:44px;height:44px;background:var(--clr-bg);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                <i class="bi bi-geo-alt-fill" style="color:var(--clr-accent);font-size:1.1rem;"></i>
                            </div>
                            <div>
                                <div style="font-weight:700;font-size:.9rem;color:var(--clr-primary);">Based in</div>
                                <div style="color:var(--clr-muted);font-size:.9rem;">Philippines</div>
                            </div>
                        </div>
                    </div>

                    <div style="margin-top:2rem;">
                        <h6 style="font-weight:700;color:var(--clr-primary);margin-bottom:1rem;">Follow Our Journey</h6>
                        <div class="footer-social">
                            <a href="#" class="social-btn" style="background:var(--clr-bg);color:var(--clr-primary);">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="#" class="social-btn" style="background:var(--clr-bg);color:var(--clr-primary);">
                                <i class="bi bi-twitter-x"></i>
                            </a>
                            <a href="#" class="social-btn" style="background:var(--clr-bg);color:var(--clr-primary);">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="#" class="social-btn" style="background:var(--clr-bg);color:var(--clr-primary);">
                                <i class="bi bi-tiktok"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.animate-on-scroll { opacity: 0; transform: translateY(24px); transition: opacity .6s ease, transform .6s ease; }
.animate-on-scroll.visible { opacity: 1; transform: none; }
</style>

<?php require_once $root . 'includes/footer.php'; ?>
