# Advensure — PHP Travel Website

A fully restructured PHP version of the Advensure travel website, converted from standalone HTML pages into a clean, maintainable PHP project.

---

## 📁 Folder Structure

```
advensure/
├── index.php                        # Homepage
├── css/
│   └── global.css                   # Unified design system (all styles)
├── js/
│   └── main.js                      # Navbar scroll, feedback carousel, scroll animations
├── images/                          # ← Copy all your original images here
│   ├── background.jpg
│   ├── logo.svg
│   ├── profile.jpg
│   ├── group.jpg
│   ├── join.jpg
│   ├── member1.jpg, mem2.jpg, mem3.jpg, member4.jpg
│   ├── luzon.jpg, visayas.jpg, mindanao.jpg
│   ├── blog1.jpg, blog2.jpg, blog3.jpeg, blog4.webp, blog5.jpg
│   ├── des-batad.jpg, des-cave.jpg, des-hill.jpg
│   ├── des-falls.jpg, des-island.jpg, des-park.webp
│   ├── luzon-back.jpg, visayas-back.jpg, mindanao-back.jpg
│   └── (any other images)
├── includes/
│   ├── header.php                   # Shared <head> + navbar (included on every page)
│   ├── footer.php                   # Shared footer + scripts (included on every page)
│   └── data.php                     # Central data: blogs, destinations, team members
└── pages/
    ├── about.php                    # About Us page
    ├── contact.php                  # Contact page (NEW — with working PHP form)
    ├── blogs/
    │   ├── index.php                # All blogs listing
    │   └── post.php                 # Single blog post (dynamic via ?id=N)
    └── destinations/
        ├── _destination.php         # Shared destination template
        ├── luzon.php                # Luzon page
        ├── visayas.php              # Visayas page
        └── mindanao.php             # Mindanao page
```

---

## 🚀 Setup Instructions

### Requirements
- PHP 7.4+ (or PHP 8.x)
- A local server: [XAMPP](https://www.apachefriends.org/), [WAMP](https://www.wampserver.com/), [Laragon](https://laragon.org/), or similar

### Steps

1. **Copy the project** into your server's web root:
   - XAMPP: `C:/xampp/htdocs/advensure/`
   - Laragon: `C:/laragon/www/advensure/`

2. **Copy your images** into the `images/` folder (all the original images from the HTML project).

3. **Open in browser:**
   ```
   http://localhost/advensure/
   ```

---

## ✨ What Changed from the Original HTML

### Architecture
| Before | After |
|--------|-------|
| 11 separate HTML files | 1 layout system with shared includes |
| Navbar duplicated in every file | Single `includes/header.php` |
| Footer duplicated in every file | Single `includes/footer.php` |
| 3 separate CSS files with repeated rules | 1 unified `css/global.css` |
| `des-luzon.html`, `des-visayas.html`, `des-mindanao.html` — each ~300 lines | 3 one-liner PHP files + 1 shared `_destination.php` template |
| `blog1.html`–`blog5.html` — each ~300 lines | 1 `post.php` + data array in `data.php` |
| Blog content hardcoded in each file | All blog data centralized in `includes/data.php` |
| No contact page | New `pages/contact.php` with server-side validation |

### UI Improvements
- Fixed navbar with scroll-shrink effect
- Playfair Display + DM Sans font pairing
- CSS custom properties (design tokens) for consistent colors, spacing, radius, shadows
- Card hover animations (lift + shadow)
- Scroll-triggered fade-in animations via IntersectionObserver
- Improved blog post layout with full-width header image and overlay title
- Responsive destination hero banners
- Improved feedback carousel with dot indicators
- Fully responsive — mobile-friendly at all breakpoints
- Modern footer with social icons

### New Files
- `pages/contact.php` — Contact form with PHP server-side validation
- `includes/data.php` — Central data store (add/edit blogs or destinations in one place)

---

## 📝 Adding a New Blog Post

Open `includes/data.php` and add a new entry to the `$blogs` array:

```php
[
    'id'      => 6,
    'slug'    => 'my-new-blog',
    'title'   => 'My New Blog Title',
    'excerpt' => 'Short description shown on the cards.',
    'date'    => 'March 22, 2026',
    'image'   => 'myblog.jpg',   // place image in /images/
    'content' => [
        "First paragraph text...",
        "Second paragraph text...",
    ],
],
```

That's it — it automatically appears on the homepage, blogs listing, and as a full post.

---

## 📝 Adding a New Destination Place

Open `includes/data.php` and add to the relevant destination's `places` array:

```php
[
    'name'     => 'New Place',
    'location' => 'Province, Region',
    'image'    => 'newplace.jpg',
    'desc'     => 'Description of the place.',
],
```

---

## 🔧 To Enable Email on Contact Form

In `pages/contact.php`, replace the `// In production: mail(...)` comment with:

```php
$to      = 'Advensure@gmail.com';
$headers = "From: $email\r\nReply-To: $email\r\n";
mail($to, "Advensure Contact: $subject", $message, $headers);
```

---

## 🎨 Customizing Colors

All colors are defined as CSS variables in `css/global.css`:

```css
:root {
    --clr-primary:  #1a3a6e;   /* dark navy */
    --clr-accent:   #4f8ef7;   /* blue */
    --clr-accent2:  #f5a623;   /* gold/orange */
    --clr-bg:       #f4f7fb;
    --clr-surface:  #ffffff;
    --clr-text:     #1e2a3a;
    --clr-muted:    #607080;
}
```

Change any variable and the whole site updates.
