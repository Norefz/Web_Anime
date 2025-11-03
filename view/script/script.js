let click = document.getElementById("sidebar");
const burger = document.querySelector("#sidebar svg"); //  burger icon
  burger.addEventListener("click", () => {
    sidebar.classList.toggle("-translate-x-full"); // hide or show
  });
const burger2 = document.getElementById("sidebar2"); //  burger icon
  burger2.addEventListener("click", () => {
    sidebar.classList.toggle("-translate-x-full"); // hide or show
  });
