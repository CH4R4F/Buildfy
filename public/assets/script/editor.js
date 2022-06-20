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

// =============== grapes js configuration ===================== //

const { Modal } = editor;

// set devices commands
editor.Commands.add("set-device-desktop", {
  run: (editor) => editor.setDevice("Desktop"),
});
editor.Commands.add("set-device-tablet", {
  run: (editor) => editor.setDevice("Tablet"),
});
editor.Commands.add("set-device-mobile", {
  run: (editor) => editor.setDevice("Mobile"),
});
// clear command
editor.Commands.add("cmd-clear", {
  run: (editor) => {
    editor.DomComponents.clear();
    editor.CssComposer.clear();
  },
});
// save command
editor.Commands.add("save-project", {
  run: (editor, sender) => {
    sender && sender.set("active");
    editor.store();
  },
});

// undo command
editor.Commands.add("undo", {
  run: (editor) => editor.UndoManager.undo(),
});
// redo command
editor.Commands.add("redo", {
  run: (editor) => editor.UndoManager.redo(),
});
// save command
editor.Commands.add("save-project", {
  run: (editor, sender) => {
    sender && sender.set("active");
    editor.store();
  },
});

editor.on("storage:load", function (e) {
  // components = JSON.parse(e.components);
  // console.log(e);
  editor.setComponents(JSON.parse(e.html));
  editor.setStyle(JSON.parse(e.css));
});
