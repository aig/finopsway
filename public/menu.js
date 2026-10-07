document.addEventListener("click", function (event) {
  var link = event.target.closest(".mobile-nav a");
  if (!link) return;

  var menu = link.closest(".mobile-menu");
  if (menu) menu.removeAttribute("open");
});

document.addEventListener("DOMContentLoaded", function () {
  var heart = '<svg class="heart" aria-hidden="true" width="16" height="16" viewBox="0 0 16 16" fill="currentColor"><path d="m8 14.25.345.666a.75.75 0 0 1-.69 0l-.008-.004-.018-.01a7.152 7.152 0 0 1-.31-.17 22.055 22.055 0 0 1-3.434-2.414C2.045 10.731 0 8.35 0 5.5 0 2.836 2.086 1 4.25 1 5.797 1 7.153 1.802 8 3.02 8.847 1.802 10.203 1 11.75 1 13.914 1 16 2.836 16 5.5c0 2.85-2.045 5.231-3.885 6.818a22.066 22.066 0 0 1-3.744 2.584l-.018.01-.006.003h-.002ZM4.25 2.5c-1.336 0-2.75 1.164-2.75 3 0 2.15 1.58 4.144 3.365 5.682A20.58 20.58 0 0 0 8 13.393a20.58 20.58 0 0 0 3.135-2.211C12.92 9.644 14.5 7.65 14.5 5.5c0-1.836-1.414-3-2.75-3-1.373 0-2.609.986-3.029 2.456a.749.749 0 0 1-1.442 0C6.859 3.486 5.623 2.5 4.25 2.5Z"/></svg>';

  document.querySelectorAll(".nav-support").forEach(function (link) {
    link.innerHTML = heart + (link.closest(".mobile-nav") ? " Sponsor on GitHub" : "");
  });

  document.querySelectorAll('.desktop-nav a[aria-current="page"]').forEach(function (link) {
    document.querySelectorAll(".mobile-nav a").forEach(function (mobileLink) {
      if (mobileLink.href === link.href) mobileLink.setAttribute("aria-current", "page");
    });
  });

  document.querySelectorAll(".article-list .article-card").forEach(function (card) {
    var destination = card.querySelector("h2 a");
    if (!destination) return;

    card.classList.add("is-clickable");
    card.setAttribute("tabindex", "0");

    card.addEventListener("click", function (event) {
      if (event.target.closest("a, button, input, select, textarea, summary")) return;
      window.location.href = destination.href;
    });

    card.addEventListener("keydown", function (event) {
      if (event.key !== "Enter" && event.key !== " ") return;
      event.preventDefault();
      destination.click();
    });
  });
});

// Marks the in-page nav link whose section is on screen (home page only).
(function () {
  var links = Array.prototype.slice.call(document.querySelectorAll('.masthead .nav a[href^="#"]'));
  var sections = [];
  links.forEach(function (a) {
    var el = document.getElementById(a.getAttribute("href").slice(1));
    if (el && sections.indexOf(el) < 0) sections.push(el);
  });
  if (!sections.length) return;

  function mark(id) {
    links.forEach(function (a) {
      if (a.getAttribute("href") === "#" + id) a.setAttribute("aria-current", "location");
      else a.removeAttribute("aria-current");
    });
  }

  function current() {
    var line = window.innerHeight * 0.35;
    var id = null;
    sections.forEach(function (el) {
      if (el.getBoundingClientRect().top <= line) id = el.id;
    });
    var atBottom = window.innerHeight + window.scrollY >= document.documentElement.scrollHeight - 2;
    if (atBottom) id = sections[sections.length - 1].id;
    mark(id);
  }

  var queued = false;
  window.addEventListener("scroll", function () {
    if (queued) return;
    queued = true;
    requestAnimationFrame(function () { queued = false; current(); });
  }, { passive: true });
  window.addEventListener("hashchange", function () { mark(location.hash.slice(1)); });
  window.addEventListener("resize", current);
  current();
})();
