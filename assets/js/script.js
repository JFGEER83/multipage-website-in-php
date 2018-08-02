/* Comportements suite au click sur les boutons du menu*/
let buttonMenuAside = document.getElementById("button-menu-aside");
let sectionAside = document.getElementById("section-aside");
let menuAsbl= document.getElementById("menu-asbl");
let sousMenuAside = document.querySelectorAll(".sous-menu-aside");
let buttonMenuASBL =document.getElementById("button-menu-asbl");
let bodyMain=document.getElementById("body-main");
let menuMain= document.getElementById("menu-main");
let headerMain= document.getElementById("header-main");
let buttonAbout= document.getElementById("button-about");
let buttonDoc= document.getElementById("button-doc");
let buttonInfos= document.getElementById("button-infos");
let buttonContact= document.getElementById("button-contact");
let buttonsMenu= document.querySelectorAll(".button-menu--round");
let section= document.querySelectorAll(".section");
let sectionAbout= document.getElementById("section-about");
let sectionDoc= document.getElementById("section-doc");
let sectionInfos= document.getElementById("section-infos");
let sectionContact= document.getElementById("section-contact");
let sectionSearch= document.getElementById("section-search");
buttonMenuASBL.addEventListener("click",clickAsbl);
buttonMenuAside.addEventListener("click",clickAside);
buttonAbout.addEventListener("click",clickAbout);
buttonInfos.addEventListener("click",clickInfos);
buttonContact.addEventListener("click",clickContact);
buttonDoc.addEventListener("click",clickDoc);

function clickAside(){
    sectionAside.classList.toggle("transition");
    sousMenuAside.forEach(toggleHide);
}
function toggleFlex(item){
    item=item.classList.toggle("d-flex");
}
function toggleHide(item){
    item=item.classList.toggle("hide");
}
function addHide(item){
    item=item.classList.add("hide");
}
function toggleTransition(item){
 
    item=item.classList.toggle("transition");
}
function clickAsbl(){
    menuAsbl.classList.toggle("hide");
}
function clickButtons(){
    buttonsMenu.forEach(toggleHide);
    sectionSearch.classList.toggle("hide");
    /* section.forEach(toggleHide); */
    /* section.forEach(toggleFlex); */
    menuMain.classList.toggle("transition");
    headerMain.classList.toggle("transition");
    bodyMain.classList.toggle("transition"); 
}
 function clickInfos(){
     clickButtons();
    /*  section.forEach(toggleHide); */
     buttonsMenu.forEach(toggleTransition);
     section.forEach(toggleTransition);
     buttonInfos.classList.toggle("hide");
     sectionInfos.classList.toggle("hide");
 }
 function clickContact(){
     clickButtons();
     buttonsMenu.forEach(toggleTransition);
     section.forEach(toggleTransition);
     buttonContact.classList.toggle("hide");
     sectionContact.classList.toggle("hide");
 }
 function clickDoc(){
    clickButtons();
    buttonsMenu.forEach(toggleTransition);
    buttonDoc.classList.toggle("hide");
 }
 function clickAbout(){
    clickButtons();
    sectionAbout.classList.toggle("hide");
    buttonsMenu.forEach(toggleTransition);
    section.forEach(toggleTransition);
    buttonAbout.classList.toggle("hide");
   
 }
function startPage(){
    section.forEach(toggleFlex);
    section.forEach(toggleHide);
 /*    sectionAside.classList.toggle("transition"); */
    sectionSearch.classList.remove("d-flex");
    sectionSearch.classList.remove("hide");
}
startPage();


/*     setTimeout(locationPage1, 1500); */
/* function locationPage1(){
    document.location.href="page_about.html";
} */


