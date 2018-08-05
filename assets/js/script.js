/* Comportements suite au click sur les boutons du menu*/
let ancreFormalites = document.getElementById("ancre-formalites")
/* let buttonFormalites= document.getElementById("button-formalites"); */
let buttonMenu = document.getElementById("button-menu");
let sectionAside = document.getElementById("section-aside");
let buttonArrow =document.getElementById("button-menu-aside");
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
/*buttonFormalites.addEventListener("click", clickFormalites);*/
buttonMenuASBL.addEventListener("click",clickAsbl);
buttonMenuAssocFaits.addEventListener("click",clickAssocFaits);
buttonMenuChomage.addEventListener("click",clickChomage);
buttonMenuFinancement.addEventListener("click",clickFinancement);
buttonMenuOutils.addEventListener("click", clickOutils);
buttonArrow.addEventListener("mouseover",clickAside);
sectionAside.addEventListener("mouseleave",clickAside);
buttonAbout.addEventListener("click",clickAbout);
buttonInfos.addEventListener("click",clickInfos);
buttonContact.addEventListener("click",clickContact);
buttonDoc.addEventListener("click",clickDoc);

/*function clickFormalites(){
    ancreFormalites.scrollIntoView({behavior:"smooth"});
}*/
window.onscroll = function() {myFunction()};

/* var header = document.getElementById("myHeader"); */
var sticky = buttonInfos.offsetTop;

function myFunction() {
   
  if (window.pageYOffset > 140) {
    buttonInfos.classList.add("sticky");
  }else{
      buttonInfos.classList.remove("sticky");
  }
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
/* function addEventScroll(item){
    item=item.addEventListener("click",functionScroll);
}
function functionScroll(item){
    item=item.scrollIntoView({behavior: "smooth"});
} */

function removeHide(item){
    item=item.classList.remove("hide");
}
function toggleTransition(item){
 
    item=item.classList.toggle("transition");
}
function clickButtons(){
    buttonsMenu.forEach(toggleHide);
    sectionSearch.classList.toggle("hide");
    menuMain.classList.toggle("transition"); 
    headerMain.classList.toggle("transition");
    bodyMain.classList.toggle("transition"); 
}
 function clickInfos(){
    console.log(buttonInfos.offsetTop);
     clickButtons();
     buttonArrow.classList.toggle("hide");
     buttonMenu.classList.toggle("hide");
     buttonsMenu.forEach(toggleTransition);
     section.forEach(toggleTransition);
     buttonInfos.classList.toggle("hide");
     sectionInfos.classList.toggle("hide");
     /*   buttonInfos.classList.toggle("relative"); */
     /* buttonInfos.classList.toggle("sticky"); */
 }
 function clickAside(){
    sectionAside.classList.toggle("transition");
    sousMenuAside.forEach(addHide);
    
    /* buttonMenu.forEach(toggleHide);  */
}
function clickAsbl(){
   /*  buttonMenu.forEach(addHide); */
    menuAsbl.classList.toggle("hide");
     /* buttonMenu.forEach(toggleHide);
     buttonMenuASBL.classList.toggle("hide"); */
}
function clickAssocFaits(){
    menuAssocFaits.classList.toggle("hide");
    /* buttonMenu.forEach(toggleHide); */
}
function clickChomage(){
     menuChomage.classList.toggle("hide");
    /*  buttonMenu.forEach(toggleHide);    */
    }
function clickFinancement(){
    menuFinancement.classList.toggle("hide");
    /*buttonMenu.forEach(toggleHide);*/
}
function clickOutils(){
    menuOutils.classList.toggle("hide");
    /* buttonMenu.forEach(toggleHide); */
}
 function clickContact(){
     clickButtons();
     buttonsMenu.forEach(toggleTransition);
     section.forEach(toggleTransition);
     buttonContact.classList.toggle("hide");
     sectionContact.classList.toggle("hide");
     buttonContact.classList.toggle("fixed");
 }
 function clickDoc(){
    clickButtons();
    buttonsMenu.forEach(toggleTransition);
    section.forEach(toggleTransition);
    buttonDoc.classList.toggle("hide");
    sectionDoc.classList.toggle("hide");
    buttonDoc.classList.toggle("fixed");
 }
 function clickAbout(){
    clickButtons();
    buttonsMenu.forEach(toggleTransition);
    section.forEach(toggleTransition);
    buttonAbout.classList.toggle("hide");
    sectionAbout.classList.toggle("hide");
    buttonAbout.classList.toggle("fixed");
 }
 /* let ancres=document.querySelectorAll('a[href^="#"]');
 ancres.forEach("click",scroll);
 function scroll(item){
    item=item.scrollIntoView({behavior: "smooth"});
 } */
function startPage(){
    buttonMenu.classList.add("hide");
    buttonArrow.classList.add("hide");
    section.forEach(toggleFlex);
    section.forEach(toggleHide);
    sectionSearch.classList.remove("d-flex");
    sectionSearch.classList.remove("hide");
    sousMenuAside.forEach(addHide);
}
/* document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
}); */
startPage();


/*     setTimeout(locationPage1, 1500); */
/* function locationPage1(){
    document.location.href="page_about.html";
} */


