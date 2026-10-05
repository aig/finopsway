document.addEventListener("click", function (event) {
  var link = event.target.closest(".mobile-nav a");
  if (!link) return;

  var menu = link.closest(".mobile-menu");
  if (menu) menu.removeAttribute("open");
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
