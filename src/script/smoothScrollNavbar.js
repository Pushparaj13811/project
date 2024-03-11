// Add smooth scroll to nav links
$(document).ready(function () {
  $("#nav-links-container ul li a").on("click", function (e) {
    e.preventDefault(); // Prevent default link behavior
    const href = $(this).attr("href");
    const target = document.querySelector(href); // Get the target element
    target.scrollIntoView({
      behavior: "smooth",
      block: "start",
      inline: "nearest",
    }); // Smooth scroll with duration of 0.3s
  });
});
