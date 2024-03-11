// add smooth scroll to nav link and navbar toggle

$(document).ready(function () {
  const menuToggle = $("#menu-toggle");
  const menu = $("#nav-links-container");

  if (menuToggle.length && menu.length) {
    menuToggle.on("click", function () {
      const expanded = menu.attr("aria-expanded") === "true" || false;
      menu.attr("aria-expanded", !expanded);
      menu.toggleClass("hidden");
      menu.slideToggle("fast");
    });
  }
});
