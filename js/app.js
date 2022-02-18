const slideContainer = document.querySelector(".about__wrapper");
let mouseDown = false;
let startX, scrollLeft;

const plansContainer = document.querySelector(".plans__wrapper");
let plansmouseDown = false;
let plansStartX, plansScrollLeft;

const startDragging = function (event) {
  mouseDown = true;
  startX = event.pageX - slideContainer.offsetLeft;
  scrollLeft = slideContainer.scrollLeft;
};

const stopDragging = function () {
  mouseDown = false;
};

const startDraggingList = function (event) {
  plansmouseDown = true;
  plansStartX = event.pageX - plansContainer.offsetLeft;
  plansScrollLeft = plansContainer.scrollLeft;
};

const stopDraggingList = function () {
  plansmouseDown = false;
};

slideContainer.addEventListener("mousemove", function (e) {
  e.preventDefault();
  if (!mouseDown) return;
  const x = e.pageX - slideContainer.offsetLeft;
  const scroll = x - startX;
  slideContainer.scrollLeft = scrollLeft - scroll;
});

plansContainer.addEventListener("mousemove", function (e) {
  e.preventDefault();
  if (!plansmouseDown) return;
  const x = e.pageX - plansContainer.offsetLeft;
  const scroll = x - plansStartX;
  plansContainer.scrollLeft = plansScrollLeft - scroll;
});

slideContainer.addEventListener("mousedown", startDragging, false);
slideContainer.addEventListener("mouseup", stopDragging, false);
slideContainer.addEventListener("mouseleave", stopDragging, false);

plansContainer.addEventListener("mousedown", startDraggingList, false);
plansContainer.addEventListener("mouseup", stopDraggingList, false);
plansContainer.addEventListener("mouseleave", stopDraggingList, false);

const menuOpenBtn = document.querySelector(".navigation__toggle");
const menuCloseBtn = document.querySelector(".menu__btn");
const body = document.querySelector("body");
const menuBody = document.querySelector(".menu");

const openMenuHandler = function () {
  body.classList.add("no-scroll");
  menuBody.classList.remove("menu--hidden");
};

const closeMenuHandler = function () {
  body.classList.remove("no-scroll");
  menuBody.classList.add("menu--hidden");
};

menuOpenBtn.addEventListener("click", openMenuHandler);
menuCloseBtn.addEventListener("click", closeMenuHandler);
