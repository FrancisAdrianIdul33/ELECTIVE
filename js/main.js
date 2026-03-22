// js/main.js — Advensure Global Scripts

/* ── Navbar scroll effect ─────────────────────────────── */
const nav = document.getElementById('mainNav');
if (nav) {
    window.addEventListener('scroll', () => {
        nav.classList.toggle('scrolled', window.scrollY > 50);
    });
}

/* ── Feedback Carousel ────────────────────────────────── */
const feedbacks = [
    {
        username: "John Mark Monsanto",
        date: "July 24, 2023",
        feedback: "This is a fantastic resource for anyone planning a trip to the Philippines! The website boasts detailed guides, stunning photography, and local insights — making it easy to discover hidden gems and plan unforgettable adventures. Advensure remains a valuable tool for exploring the beauty and diversity of the Philippines."
    },
    {
        username: "Sarah Marie Ellevera",
        date: "February 9, 2023",
        feedback: "Advensure is a breath of fresh air in the world of travel websites! The site's focus on off-the-beaten-path destinations and unique experiences sets it apart, showcasing hidden gems and local cultures often overlooked by mainstream travel guides. A valuable resource for anyone seeking an authentic and unforgettable travel experience."
    },
    {
        username: "Travis Scott Clemente",
        date: "September 15, 2023",
        feedback: "A unique and immersive experience awaits adventurers on this refreshing travel website. The user-friendly interface makes it easy to explore diverse destinations, while detailed itineraries, interactive maps, and stunning photography bring the adventure to life. Truly a must-visit for any traveler to the Philippines!"
    }
];

let currentFeedbackIndex = 0;

function displayFeedback(index) {
    const usernameEl  = document.getElementById('fb-username');
    const dateEl      = document.getElementById('fb-date');
    const textEl      = document.getElementById('fb-text');
    const dotsEl      = document.getElementById('fb-dots');
    if (!usernameEl) return;

    const f = feedbacks[index];
    usernameEl.textContent = f.username;
    dateEl.textContent     = f.date;
    textEl.textContent     = f.feedback;

    if (dotsEl) {
        [...dotsEl.children].forEach((dot, i) => {
            dot.classList.toggle('active', i === index);
        });
    }
}

function moveFeedback(dir) {
    currentFeedbackIndex = (currentFeedbackIndex + dir + feedbacks.length) % feedbacks.length;
    displayFeedback(currentFeedbackIndex);
}

// Init feedback on load
document.addEventListener('DOMContentLoaded', () => {
    displayFeedback(0);

    // Dot navigation
    const dots = document.querySelectorAll('.fb-dot');
    dots.forEach((dot, i) => dot.addEventListener('click', () => {
        currentFeedbackIndex = i;
        displayFeedback(i);
    }));

    // Animate on scroll (simple IntersectionObserver)
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));
});
