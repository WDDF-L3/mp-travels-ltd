
const slides = document.querySelectorAll('.hero-slide');
let si = 0;
if (slides.length) {
    setInterval(() => {
        slides[si].classList.remove('active');
        si = (si + 1) % slides.length; slides[si].classList.add('active')
    }, 4000)
}
const counters = document.querySelectorAll('.counter');
let counted = false;
function runCounters() {
    if (counted) return;
    const box = document.querySelector('.counter-wrap');
    if (!box || box.getBoundingClientRect().top > innerHeight)
        return;
    counted = true;
    counters.forEach(el => {
        const target = +el.dataset.target;
        let n = 0;
        const inc = Math.max(1, Math.ceil(target / 90));
        const t = setInterval(() => {
            n += inc;
            if (n >= target) {
                n = target;
                clearInterval(t)
            }
            el.textContent = n.toLocaleString() + ' +'
        }, 25)
    })
}
function reveal() {
    document.querySelectorAll('.reveal').forEach(e => {
        if (e.getBoundingClientRect().top < innerHeight - 80) e.classList.add('show')
    }); runCounters()
}

// member start here 
document.addEventListener("DOMContentLoaded", function () {

    new Swiper(".memberSlider", {

        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        speed: 1200,

        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },

        breakpoints: {

            576: {
                slidesPerView: 2,
            },

            768: {
                slidesPerView: 3,
            },

            1200: {
                slidesPerView: 5,
            }

        }

    });

});

// update date and time in footer
function updateDateTime() {
    const dateTimeElement = document.getElementById('dateTime');
    const now = new Date();
    const options = {
        year: 'numeric',
        month: 'long',
        day: 'numeric',
        weekday: 'long',
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit'
    };
    dateTimeElement.textContent = now.toLocaleDateString('en-US', options);
}
updateDateTime();
setInterval(updateDateTime, 1000);

// navbar start here 
// Navbar Scroll Background
window.addEventListener("scroll", function () {
    const navbar = document.getElementById("navbar");

    if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});

// Close mobile menu when overlay clicked
const overlay = document.querySelector(".mobile-overlay");
const navCollapse = document.getElementById("mainNav");

overlay.addEventListener("click", function () {
    bootstrap.Collapse.getInstance(navCollapse).hide();
});

addEventListener('scroll', reveal);
addEventListener('load', reveal);
const topBtn = document.querySelector('.back-top');
addEventListener('scroll', () => {
    if (topBtn) topBtn.style.display = scrollY > 450 ? 'block' : 'none'
});
if (topBtn) topBtn.onclick = () => scrollTo({ top: 0, behavior: 'smooth' });

// modal apply start here
const applyButtons = document.querySelectorAll(".quick-apply-btn");
const applyModal = document.getElementById("applyModal");
const applyClose = document.getElementById("applyClose");

applyButtons.forEach(function (button) {
    button.addEventListener("click", function (e) {
        e.preventDefault();
        applyModal.classList.add("active");
        document.body.classList.add("modal-open");
    });
});

applyClose.addEventListener("click", function () {
    applyModal.classList.remove("active");
    document.body.classList.remove("modal-open");
});

applyModal.addEventListener("click", function (e) {
    if (e.target === applyModal) {
        applyModal.classList.remove("active");
        document.body.classList.remove("modal-open");
    }
});

// modal apply end here