const navbar = document.getElementById("navbar");
    const navbarCollapse = document.getElementById("navbarNav");

    // Scroll effect
    window.addEventListener("scroll", () => {
      if (window.scrollY > 50) {
        navbar.classList.add("navbar-scrolled");
      } else {
        navbar.classList.remove("navbar-scrolled");
      }
    });

    // Menu toggle events
    navbarCollapse.addEventListener("show.bs.collapse", () => {
      navbar.classList.add("navbar-toggler-open");
    });
    navbarCollapse.addEventListener("hide.bs.collapse", () => {
      navbar.classList.remove("navbar-toggler-open");
    });


    // ========card img destination====
     const viewMoreBtn = document.getElementById("viewMoreBtnUnique");
  const hiddenSection = document.getElementById("moreDestinationsUnique");

  viewMoreBtn.addEventListener("click", () => {
    hiddenSection.classList.toggle("open");

    if (hiddenSection.classList.contains("open")) {
      viewMoreBtn.textContent = "View Less";
    } else {
      viewMoreBtn.textContent = "View More";
    }
  });