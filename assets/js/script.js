/* Comportements suite au click sur les boutons du menu*/
let buttonMenuAside = document.getElementById("button-menu-aside");
let sectionAside = document.getElementById("section-aside");
let buttonMenusAside =document.getElementById("button-menu-aside");
let menuAsbl= document.getElementById("menu-asbl");
let menuAssocFaits= document.getElementById("menu-assoc-faits");
let menuChomage= document.getElementById("menu-chomage");
let menuFinancement= document.getElementById("menu-financement");
let menuOutils= document.getElementById("menu-outils");
let sousMenuAside = document.querySelectorAll(".sous-menu-aside");
let buttonMenuASBL =document.getElementById("button-menu-asbl");
let buttonMenuAssocFaits= document.getElementById("button-menu-assoc-faits");
let buttonMenuChomage= document.getElementById("button-menu-chomage");
let buttonMenuFinancement= document.getElementById("button-menu-financement");
let buttonMenuOutils= document.getElementById("button-menu-outils");
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
buttonMenuAssocFaits.addEventListener("click",clickAssocFaits);
buttonMenuChomage.addEventListener("click",clickChomage);
buttonMenuFinancement.addEventListener("click",clickFinancement);
buttonMenuOutils.addEventListener("click", clickOutils);
buttonMenuAside.addEventListener("click",clickAside);
buttonAbout.addEventListener("click",clickAbout);
buttonInfos.addEventListener("click",clickInfos);
buttonContact.addEventListener("click",clickContact);
buttonDoc.addEventListener("click",clickDoc);


function toggleFlex(item){
    item=item.classList.toggle("d-flex");
}
function toggleHide(item){
    item=item.classList.toggle("hide");
}
function addHide(item){
    item=item.classList.add("hide");
}
function removeHide(item){
    item=item.classList.remove("hide");
}
function toggleTransition(item){
 
    item=item.classList.toggle("transition");
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
     buttonMenusAside.classList.toggle("hide");
     buttonsMenu.forEach(toggleTransition);
     section.forEach(toggleTransition);
     buttonInfos.classList.toggle("hide");
     sectionInfos.classList.toggle("hide");
 }
 function clickAside(){
    sectionAside.classList.toggle("transition");
     sousMenuAside.forEach(toggleHide);
    /* buttonMenuAside.forEach(toggleHide);  */
}
function clickAsbl(){
   /*  buttonMenuAside.forEach(addHide); */
    menuAsbl.classList.toggle("hide");
     /* buttonMenuAside.forEach(toggleHide);
     buttonMenuASBL.classList.toggle("hide"); */
}
function clickAssocFaits(){
    menuAssocFaits.classList.toggle("hide");
    /* buttonMenuAside.forEach(toggleHide); */
}
function clickChomage(){
     menuChomage.classList.toggle("hide");
    /*  buttonMenuAside.forEach(toggleHide);    */
    }
function clickFinancement(){
    menuFinancement.classList.toggle("hide");
    /*buttonMenuAside.forEach(toggleHide);*/
}
function clickOutils(){
    menuOutils.classList.toggle("hide");
    /* buttonMenuAside.forEach(toggleHide); */
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
    buttonMenuAside.classList.add("hide");
    section.forEach(toggleFlex);
    section.forEach(toggleHide);
    sectionSearch.classList.remove("d-flex");
    sectionSearch.classList.remove("hide");
}
startPage();


/*     setTimeout(locationPage1, 1500); */
/* function locationPage1(){
    document.location.href="page_about.html";
} */


