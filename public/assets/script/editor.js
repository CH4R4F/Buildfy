let tabBtns = document.querySelectorAll(".tab-btn");
let tabContent = document.querySelectorAll(".tab-content");

function activeTab(btn) {
  let target = document.getElementById(btn);
  tabBtns.forEach(function (item) {
    item.classList.remove("bg-gray-200");
  });
  tabContent.forEach(function (item) {
    item.classList.add("hidden");
  });
  target.classList.add("bg-gray-200");
  document.querySelector(`[data-tab=${btn}]`).classList.remove("hidden");
}

tabBtns.forEach(function (item) {
  item.addEventListener("click", function () {
    activeTab(item.id);
  });
});

document.addEventListener("DOMContentLoaded", function () {
  activeTab("blocks");
});

function checkScreen() {
  if (window.innerWidth < 970) {
    document.querySelector(".size-alert").classList.remove("hidden");
    document.body.style.overflow = "hidden";
  } else {
    document.querySelector(".size-alert").classList.add("hidden");
    document.body.style.overflow = "auto";
  }
}

document.addEventListener("DOMContentLoaded", () => {
  checkScreen();
});
window.addEventListener("resize", () => {
  checkScreen();
});