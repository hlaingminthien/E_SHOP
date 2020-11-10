

let navToggle = document.querySelector(".nav__toggle");
let navWrapper = document.querySelector(".nav__wrapper");

navToggle.addEventListener("click", function () {
  if (navWrapper.classList.contains("active")) {
    this.setAttribute("aria-expanded", "false");
    this.setAttribute("aria-label", "menu");
    navWrapper.classList.remove("active");
  } else {
    navWrapper.classList.add("active");
    this.setAttribute("aria-label", "close menu");
    this.setAttribute("aria-expanded", "true");
  }
});

$(document).ready(function() {
	// get current URL path and assign 'active' class
  var pathname = window.location.pathname;
  console.log('path name is=>', pathname);
	$('.nav__wrapper > li > a[href="'+pathname+'"]').parent().addClass('active');
})