// sticky header shadow
const header = document.getElementById("main-header");
window.addEventListener("scroll", () => {
  header.classList.toggle("scrolled", window.scrollY > 20);
});

// hero form
async function submitForm(usernameVal) {
  const username = usernameVal.trim();
  if (!username) return;
  const fd = new FormData();
  fd.append("action", "set_username");
  fd.append("username", username);
  await fetch("app.php", { method: "POST", body: fd }).catch(() => {});
  location.href = "app.php";
}

document.getElementById("start-form").addEventListener("submit", (e) => {
  e.preventDefault();
  submitForm(document.getElementById("username").value);
});

document.getElementById("start-form-2").addEventListener("submit", (e) => {
  e.preventDefault();
  submitForm(document.getElementById("username2").value);
});

// smooth scroll for nav links
document.querySelectorAll('a[href^="#"]').forEach((a) => {
  a.addEventListener("click", (e) => {
    const target = document.querySelector(a.getAttribute("href"));
    if (target) {
      e.preventDefault();
      target.scrollIntoView({ behavior: "smooth", block: "start" });
    }
  });
});

// intersection observer for fade-in
const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((e) => {
      if (e.isIntersecting) {
        e.target.style.opacity = "1";
        e.target.style.transform = "translateY(0)";
        observer.unobserve(e.target);
      }
    });
  },
  { threshold: 0.1 },
);

document
  .querySelectorAll(
    ".feature-card, .module-item, .testimonial-card, .stat-item",
  )
  .forEach((el) => {
    el.style.opacity = "0";
    el.style.transform = "translateY(24px)";
    el.style.transition = "opacity 0.5s ease, transform 0.5s ease";
    observer.observe(el);
  });
