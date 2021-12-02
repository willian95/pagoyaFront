$(document).ready(function () {
  setTimeout(function () {
    $(".elipse").fadeOut(500);
  }, 4000);
});


let btn = document.getElementById("menuBtn");
let left = document.querySelector(".left");
let right = document.querySelector(".right");

let links = document.querySelectorAll(".right a");
let backs = [
  "url(https://images.unsplash.com/photo-1587906697341-bfbde76785c7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=726&q=80)",
  "url(https://images.unsplash.com/photo-1585086629663-079e873973e0?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80)",
  "url(https://images.unsplash.com/photo-1599202875854-23b7cd490ff4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80)",

  "url(https://images.unsplash.com/photo-1571867424488-4565932edb41?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80)",
];

let flag = true;

btn.addEventListener("click", () => {
  flag = !flag;
  if (!flag) {
    left.style.transform = "translateY(0)";
    right.style.transform = "translateY(0)";
  } else {
    left.style.transform = "translateY(100vh)";
    right.style.transform = "translateY(-100vh)";
  }
  left.style.background =
    "url('https://images.unsplash.com/photo-1612103147485-8c8de055942b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80";
});

for (let i = 0; i < links.length; i++) {
  links[i].addEventListener("mousemove", () => {
    left.style.background = backs[i];
  });
}

$(".clic-nav").on("click", function () {
  if (!$(this).hasClass("clic-active")) {
    $(this).addClass("clic-active");
  } else {
    $(this).removeClass("clic-active");
  }
});

/*'use strict';

(function() {
  var body = document.body;
  var burgerMenu = document.getElementsByClassName('b-menu')[0];
  var burgerContain = document.getElementsByClassName('b-container')[0];
  var burgerNav = document.getElementsByClassName('b-nav')[0];

  burgerMenu.addEventListener('click', function toggleClasses() {
    [body, burgerContain, burgerNav].forEach(function (el) {
      el.classList.toggle('open');
    });
  }, false);
})();*/
("use strict");
/*console.clear();*/
const hangTime = 2000;
const spinTime = 300;
document.documentElement.style.setProperty("--hang-time", hangTime / 1000);
document.documentElement.style.setProperty("--spin-time", spinTime / 2000);
let cards = ["credit-card", "birthday-card", "playing-card"]; // 'library-card', 'loyality-card',
let selected = -1;
let getCard = (position) => {
  if (position < 0) position = cards.length - 1;
  if (position >= cards.length) position = 0;
  return document.querySelector("#" + cards[position]);
};
let nextCard = () => {
  selected++;
  if (selected >= cards.length) selected = 0;
  getCard(selected - 1).setAttribute("data-state", "out");
  getCard(selected).setAttribute("data-state", "show");
  getCard(selected + 1).setAttribute("data-state", "in");
};
setInterval(() => nextCard(), hangTime);
nextCard();



$('.container-menu ').removeClass('w-auto')
$('#menuBtn').on('click', function () {
    $('.container-menu ').addClass('w-auto')
  })

$(function (){
    $(window).scroll(function(){
       if ($(this).scrollTop() > 500) {
        $('.header-nav').addClass("header-fix");
        $('nav').addClass("nav-bg");

       } else {
        $('.header-nav').removeClass("header-fix");
        $('nav').removeClass("nav-bg");
       }
    });
  });
