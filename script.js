document.addEventListener("DOMContentLoaded", () => {
  const menuToggle = document.getElementById("menuToggle");
  const mainNav = document.getElementById("mainNav");
  if (menuToggle && mainNav) {
    menuToggle.addEventListener("click", () => {
      const open = mainNav.classList.toggle("nav-open");
      menuToggle.setAttribute("aria-expanded", String(open));
      menuToggle.textContent = open ? "✕" : "☰";
    });
  }

  // Feature 1: filter fragrance-style cards.
  const filterButtons = document.querySelectorAll(".filter-button");
  const productCards = document.querySelectorAll(".product-card");
  filterButtons.forEach(button => button.addEventListener("click", () => {
    filterButtons.forEach(item => item.classList.remove("active"));
    button.classList.add("active");
    const filter = button.dataset.filter;
    productCards.forEach(card => {
      card.hidden = filter !== "all" && card.dataset.mood !== filter;
    });
  }));

  // Feature 2: interactive scent recommendation.
  const recommendButton = document.getElementById("recommendButton");
  if (recommendButton) {
    recommendButton.addEventListener("click", () => {
      const mood = document.getElementById("scentMood").value;
      const suggestions = {
        fresh: "Try a fresh, clean or citrus-inspired fragrance for an easy everyday scent.",
        sweet: "Try a warm, sweet or amber-inspired fragrance for evenings and special plans.",
        bold: "Try a woody, spicy or oud-inspired fragrance when you want a stronger statement."
      };
      document.getElementById("recommendation").textContent = suggestions[mood] || suggestions.fresh;
    });
  }

  // Feature 3: simple English / isiZulu text switch for marked content.
  const languageToggle = document.getElementById("languageToggle");
  let language = "en";
  if (languageToggle) {
    languageToggle.addEventListener("click", () => {
      language = language === "en" ? "zu" : "en";
      document.documentElement.lang = language === "en" ? "en" : "zu";
      document.querySelectorAll("[data-en][data-zu]").forEach(element => {
        element.textContent = element.dataset[language];
      });
      languageToggle.textContent = language === "en" ? "EN / ZU" : "ZU / EN";
    });
  }

  // Client-side contact form check; server-side PHP validation remains authoritative.
  const contactForm = document.querySelector("form");
  if (contactForm && contactForm.action.includes("contact.php")) {
    contactForm.addEventListener("submit", event => {
      const email = document.getElementById("email");
      const message = document.getElementById("message");
      if (email && !email.validity.valid) {
        event.preventDefault(); email.focus(); alert("Please enter a valid email address.");
      } else if (message && message.value.trim().length < 10) {
        event.preventDefault(); message.focus(); alert("Please write a message of at least 10 characters.");
      }
    });
  }
});