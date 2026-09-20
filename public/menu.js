document.addEventListener("click", function (event) {
  var link = event.target.closest(".mobile-nav a");
  if (!link) return;

  var menu = link.closest(".mobile-menu");
  if (menu) menu.removeAttribute("open");
});
