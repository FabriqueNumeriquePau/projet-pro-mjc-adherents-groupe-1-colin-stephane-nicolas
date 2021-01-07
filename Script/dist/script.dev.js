"use strict";

var sidenav = document.getElementById("mySidenav");
sidenav.addEventListener("mouseover", openNav);
sidenav.addEventListener("mouseout", closeNav);

function openNav() {
  sidenav.style.width = "200px";
  var adherent = document.getElementsByTagName("a");
  adherent.style.visibility = "hidden";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "50px";
}