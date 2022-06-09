const sideBar = document.getElementById("sidebar");
const navLinks = document.querySelectorAll(".nav-link");
const navArrows = document.querySelectorAll(".arrow");
const overlay = document.querySelector(".overlay");
const burger = document.getElementById("burger");
const hideMenu = document.getElementById("hideMenu");
const navSelect = document.querySelectorAll(".dt");

// ============ hover event on sidebar ============
sideBar.addEventListener("mouseover", () => {
  sideBar.classList.add("md:!max-w-[250px]");
  overlay.classList.remove("hidden");

  navLinks.forEach((link) => {
    link.classList.remove("md:hidden");
  });
  navArrows.forEach((arrow) => {
    arrow.classList.remove("md:hidden");
  });
});

sideBar.addEventListener("mouseleave", () => {
  sideBar.classList.remove("md:!max-w-[250px]");
  overlay.classList.add("hidden");
  navSelect.forEach((s) => {
    s.removeAttribute("open");
  });
  navLinks.forEach((link) => {
    link.classList.add("md:hidden");
  });
  navArrows.forEach((arrow) => {
    arrow.classList.add("md:hidden");
  });
});

// ============ click event on burger ============
burger.addEventListener("click", () => {
  sideBar.classList.remove("-translate-x-full");
});

hideMenu.addEventListener("click", () => {
  sideBar.classList.add("-translate-x-full");
});
