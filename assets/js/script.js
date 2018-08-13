/* Comportements suite au click sur les boutons du menu*/

/*Comportement Hover des images du menu ASBL*/

let titreAsbl= document.getElementById("titre-asbl");
let imageAsbl = document.getElementById("image-asbl");
let boxAsbl = document.getElementById("box-asbl");
boxAsbl.addEventListener("mouseover",hideAsbl);
boxAsbl.addEventListener("mouseleave",showAsbl);
function hideAsbl(){
    imageAsbl.classList.add("hide576");
    titreAsbl.classList.remove("hide576");
    titreAsbl.classList.add("d-flex");
}
function showAsbl(){
    titreAsbl.classList.remove("d-flex");
    titreAsbl.classList.add("hide576");
    imageAsbl.classList.remove("hide576");
}

/*Comportement Hover des images du menu Loi*/

let titreLoi=document.getElementById("ancre-loi");
let imageLoi=document.getElementById("image-loi");
let boxLoi = document.getElementById("box-loi");
boxLoi.addEventListener("mouseover",hideLoi);
boxLoi.addEventListener("mouseleave",showLoi);
function hideLoi(){
    imageLoi.classList.add("hide576");
    titreLoi.classList.remove("hide576");
    titreLoi.classList.add("d-flex");
}
function showLoi(){
    titreLoi.classList.remove("d-flex");
    titreLoi.classList.add("hide576");
    imageLoi.classList.remove("hide576");
}

/*Comportement Hover des images du menu formalités*/
let titreStep=document.getElementById("ancre-formalites");
let imageStep=document.getElementById("image-step");
let boxStep = document.getElementById("box-step");
boxStep.addEventListener("mouseover",hideStep);
boxStep.addEventListener("mouseleave",showStep);
function hideStep(){
    imageStep.classList.add("hide576");
    titreStep.classList.remove("hide576");
    titreStep.classList.add("d-flex");
}
function showStep(){
    titreStep.classList.remove("d-flex");
    titreStep.classList.add("hide576");
    imageStep.classList.remove("hide576");
}

/*Comportement Hover des images du menu Personnel*/

let titrePersonnel=document.getElementById("ancre-personnel");
let imagePersonnel=document.getElementById("image-personnel");
let boxPersonnel = document.getElementById("box-personnel");
boxPersonnel.addEventListener("mouseover",hidePersonnel);
boxPersonnel.addEventListener("mouseleave",showPersonnel);
function hidePersonnel(){
    imagePersonnel.classList.add("hide576");
    titrePersonnel.classList.remove("hide576");
    titrePersonnel.classList.add("d-flex");
}
function showPersonnel(){
    titrePersonnel.classList.remove("d-flex");
    titrePersonnel.classList.add("hide576");
    imagePersonnel.classList.remove("hide576");
}


let ancreAsbl = document.getElementById("asbl");
let ancreFormalites = document.getElementById("ancre-formalites")
/* let buttonFormalites= document.getElementById("button-formalites"); */
/* let buttonHeader= document.getElementById("button-header");
buttonHeader.addEventListener("click",) */
let buttonMenu = document.getElementById("button-menu");
let sectionAside = document.getElementById("section-aside");
let buttonArrow =document.getElementById("button-menu-aside");
let menuAsbl= document.getElementById("menu-asbl");
let menuAssocFaits= document.getElementById("menu-assoc-faits");
let menuChomage= document.getElementById("menu-chomage");
let menuFinancement= document.getElementById("menu-financement");
let menuOutils= document.getElementById("menu-outils");
let sousMenuAside = document.querySelectorAll(".sous-menu-aside");
/* let buttonMenuASBL =document.getElementById("button-menu-asbl"); */
let buttonMenuAssocFaits= document.getElementById("button-menu-assoc-faits");
let buttonMenuChomage= document.getElementById("button-menu-chomage");
let buttonMenuFinancement= document.getElementById("button-menu-financement");
let buttonMenuOutils= document.getElementById("button-menu-outils");
let bodyMain=document.getElementById("body-main");
let styleBody = getComputedStyle(bodyMain);
let menuMain= document.getElementById("menu-main");
let headerMain= document.getElementById("header-main");
let buttonAbout= document.getElementById("button-about");
let buttonDoc= document.getElementById("button-doc");
let buttonInfos= document.getElementById("button-infos");
let buttonContact= document.getElementById("button-contact");
let buttonsMenu= document.querySelectorAll(".button-menu--round");
let buttonsMenuSmall = document.querySelectorAll(".button-menu--round.small");
let header576Up = document.getElementById("header-576up");
let section= document.querySelectorAll(".section");
let sectionAbout= document.getElementById("section-about");
let sectionDoc= document.getElementById("section-doc");
let sectionInfos= document.getElementById("section-infos");
let sectionContact= document.getElementById("section-contact");
let sectionSearch= document.getElementById("section-search");
/*buttonFormalites.addEventListener("click", clickFormalites);*/
/* buttonMenuASBL.addEventListener("click",clickAsbl); */
buttonMenuAssocFaits.addEventListener("click",clickAssocFaits);
buttonMenuChomage.addEventListener("click",clickChomage);
buttonMenuFinancement.addEventListener("click",clickFinancement);
buttonMenuOutils.addEventListener("click", clickOutils);
buttonArrow.addEventListener("click",clickAside);
/* sectionAside.addEventListener("mouseleave",clickAside); */
buttonAbout.addEventListener("click",clickAbout);
buttonInfos.addEventListener("click",clickInfos);
buttonContact.addEventListener("click",clickContact);
buttonDoc.addEventListener("click",clickDoc);

/*function clickFormalites(){
    ancreFormalites.scrollIntoView({behavior:"smooth"});
}*/
console.log(styleBody.width);
console.log(window.pageYOffset);
console.log(sectionInfos.offsetTop);

/* var header = document.getElementById("myHeader"); */
/* let sticky = buttonInfos.offsetTop; */
window.onscroll = function() {myFunction()};
function myFunction() {
    let stickyInfos= sectionInfos.offsetTop;
    let stickyContact= sectionContact.offsetTop;
    let stickyButtonInfos= document.getElementById("button-sticky-infos");
    let stickyButtonAbout= document.getElementById("button-sticky-about");
    let stickyButtonDoc= document.getElementById("button-sticky-doc");
    let stickyButtonContact= document.getElementById("button-sticky-contact");
  if(styleBody.width>='1001px'){ /*576*/
    if (window.pageYOffset > stickyInfos+800 && window.pageYOffset < stickyContact-500 ){
        sectionAside.classList.add("transition");
        stickyButtonInfos.classList.add("transition");
   
    }else{
        sectionAside.classList.remove("transition");
        stickyButtonInfos.classList.remove("transition");
        
    }
    if(window.pageYOffset > stickyContact-900){
        stickyButtonContact.classList.add("transition");
    }else{
        stickyButtonContact.classList.remove("transition");
    }  
  }  
  
 if (styleBody.width<'1000px'){
    if (window.pageYOffset > 140) {
        buttonsMenu.forEach(addsticky);
        /* buttonsMenuH2.forEach(addsticky); */
      /* buttonsMenu.classList.add("sticky"); */
    
    }else {
        buttonsMenu.forEach(removeSticky);
        /* buttonsMenuH2.forEach(removeSticky); */
    }
 }else if (styleBody.width>='1001px'){  /*576*/
     if(window.pageYOffset >600){
        header576Up.classList.add("sticky");
        /* buttonsMenuSmall.forEach(addsticky); */
     }
     else{
        header576Up.classList.remove("sticky");
        /* buttonsMenuSmall.forEach(removeSticky); */
     }
      
     /*  buttonsMenuH2.forEach(removeSticky); */
    /* buttonsMenu.classList.remove("sticky"); */
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
function addsticky(item){
    item=item.classList.add("sticky");
}
function removeSticky(item){
    item=item.classList.remove("sticky");
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
    menuAsbl.classList.toggle("hide");
    
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
    /*  buttonArrow.classList.toggle("hide"); */
     buttonMenu.classList.toggle("hide");
     buttonsMenu.forEach(toggleTransition);
     section.forEach(toggleTransition);
     buttonContact.classList.toggle("hide");
     sectionContact.classList.toggle("hide");
     
 }
 function clickDoc(){
    clickButtons();
   /*  buttonArrow.classList.toggle("hide"); */
    buttonMenu.classList.toggle("hide");
    buttonsMenu.forEach(toggleTransition);
    section.forEach(toggleTransition);
    buttonDoc.classList.toggle("hide");
    sectionDoc.classList.toggle("hide");
   
   
 }
 function clickAbout(){
    clickButtons();
    /* buttonArrow.classList.toggle("hide"); */
    buttonMenu.classList.toggle("hide");
    buttonsMenu.forEach(toggleTransition);
    section.forEach(toggleTransition);
    buttonAbout.classList.toggle("hide");
    sectionAbout.classList.toggle("hide");
   
   
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
    sousMenuAside.forEach(toggleFlex);
   
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


