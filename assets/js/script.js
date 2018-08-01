/* Comportements suite au click sur les boutons du menu*/
let bodyMain=document.getElementById("body-main");
let menuMain= document.getElementById("menu-main");
let headerMain= document.getElementById("header-main");
let buttonAbout= document.getElementById("button-about");
let buttonDoc= document.getElementById("button-doc");
let buttonInfos= document.getElementById("button-infos");
let buttonContact= document.getElementById("button-contact");
buttonAbout.addEventListener("click",toggleTransition);
buttonInfos.addEventListener("click",toggleTransition);
buttonContact.addEventListener("click",toggleTransition);
buttonDoc.addEventListener("click",toggleTransition);
function toggleTransition(){
 /*     setTimeout(locationPage1, 1500); */
    menuMain.classList.toggle("transition");
    headerMain.classList.toggle("transition");
    buttonInfos.classList.toggle("transition");
    bodyMain.classList.toggle("transition"); 
     
      /* locationPage1();  */
 }
/* function locationPage1(){
    document.location.href="page_about.html";
} */


