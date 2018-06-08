var path = window.location.pathname;
var page = path.split("/")
var pageName = page[page.length - 2];


if (pageName == "blueflowermedia") {
  runParticles();
  runCarousel();
  runRellax();
} else if (pageName == "team") {
  teamImagePlayer();
}
