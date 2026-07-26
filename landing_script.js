const header = document.getElementById("main-header");
const themeToggle = document.getElementById("theme-toggle");
const langToggle = document.getElementById("lang-toggle");

window.addEventListener("scroll", () => {
  header.classList.toggle("scrolled", window.scrollY > 20);
});

themeToggle.addEventListener("click", () => {
  const html = document.documentElement;
  const nextTheme = html.dataset.theme === "dark" ? "light" : "dark";
  html.dataset.theme = nextTheme;
  themeToggle.textContent = nextTheme === "dark" ? "☀" : "☾";
});

langToggle.addEventListener("click", () => {
  const html = document.documentElement;
  const isArabic = html.lang === "ar";
  html.lang = isArabic ? "en" : "ar";
  html.dir = isArabic ? "ltr" : "rtl";
  langToggle.textContent = isArabic ? "عربي" : "EN";
});

document.querySelectorAll('a[href^="#"]').forEach((link) => {
  link.addEventListener("click", (event) => {
    const target = document.querySelector(link.getAttribute("href"));
    if (!target) return;
    event.preventDefault();
    target.scrollIntoView({ behavior: "smooth", block: "start" });
  });
});

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add("is-visible");
      observer.unobserve(entry.target);
    });
  },
  { threshold: 0.12 },
);

document.querySelectorAll(".section, .product-card, .category-card, .stats-strip > div").forEach((element) => {
  element.classList.add("reveal");
  observer.observe(element);
});
