// // Funktion zur Fixierung des Headers beim Scrollen

function headerFixed(){

   // Haupt-Header und die Höhe des Topbars abrufen
    let mainHeader= document.getElementById('main-header'),
     topbarHeight =document.getElementById('topbar').clientHeight,
       scrollHeight = window.scrollY;

    // 'fixed'-Klasse zum Haupt-Header hinzufügen, wenn über die Topbar-Höhe gescrollt wurde, sonst entfernen
    scrollHeight >=topbarHeight ? mainHeader.classList.add('fixed'): mainHeader.classList.remove('fixed');
    }

    
// Scroll-Ereignis hinzufügen, um die headerFixed-Funktion aufzurufen
window.addEventListener("scroll",headerFixed);

// Initialisieren eines Owl Carousels mit jQuery

jQuery(".owl-carousel").owlCarousel({
    loop:true,
    items:1,
    autoplay:true,
    autoplayHoverPause: true,
    nav: true
    
});

// Überprüfen, ob die Bildschirmbreite (768px) übereinstimmt
const mediaQuery = window.matchMedia('(max-width: 768px)');

// // Wenn der Breakpoint übereinstimmt
if(mediaQuery.matches){

  // Alle Titel im Oben Footer-Bereich auswählen
    let titles = document.querySelectorAll('.footer-oben .wp-block-heading');

     // Ein Element für den Pfeil-Icon erstellen
    const arrow = document.createElement("i");

    // Klassen zum Pfeil-Icon hinzufügen
    arrow.classList.add("fa-solid" ,"fa-chevron-down");

     // Funktion zum Umschalten des Pfeil-Icons beim Klicken auf einen Titel
    function arrowChange(targetArrow) {
      targetArrow.classList.toggle("fa-chevron-down");
      targetArrow.classList.toggle("fa-chevron-up");
  }
   
  // Schleife durch jeden Titel
    titles.forEach(title => {
        
         // Einen Klick-Ereignis zu jedem Titel hinzufügen
        title.addEventListener('click',function(){

           // Die 'show-hide'-Klasse des nächsten Geschwisterelements umschalten
          this.nextElementSibling.classList.toggle('show-hide');

        //  // Überprüfen, ob ein Chevrons-Icon im Titel vorhanden ist
        let titleArrow = this.querySelector(".fa-chevron-down, .fa-chevron-up");
        if (titleArrow) {
           // Das Pfeil-Icon umschalten
            arrowChange(titleArrow);
        }
        });
       // eine Kopie vom Pfeil-Icon dem Titel hinzufügen
        title.appendChild(arrow.cloneNode(true));
    });

    // Menüpunkte und Untermenü-Elemente auswählen
  let menuItems = document.querySelectorAll('.menu-item-depth-0');
  let subMenu = document.querySelector('.menu-depth-1');
  let subMenuItems = document.querySelectorAll('.menu-item-depth-1');
  let subMenulinks = document.querySelectorAll('.menu-item-depth-1 > a');
  let items = Array.from(subMenuItems);

  // eine Kopie vom Pfeil-Icon zu übergeordneten Menüpunkten hinzufügen
  menuItems.forEach(menuItem=>{menuItem.appendChild(arrow.cloneNode(true));});


// Klick-Ereignis zu Menü-Pfeil-Icons hinzufügen
  const menuArrows = document.querySelectorAll(".menu-item-depth-0 > i");
  menuArrows.forEach(menuArrow=>{
    menuArrow.addEventListener('click',function(){

    // Die 'show-hide'-Klasse des vorherigen Geschwisterelements umschalten
      this.previousElementSibling.classList.toggle('show-hide');
       // Das Pfeil-Icon umschalten
          arrowChange(menuArrow);
      
    });
  });

   
   // Das Pfeil-Icon zu allen Untermenü-Elementen hinzufügen
  
    
    items.forEach(item =>{
    item.appendChild(arrow.cloneNode(true));
    
  });
   let arrowsDowns = document.querySelectorAll('.menu-depth-1 .fa-chevron-down');

   // Untermenü-Icons auswählen und Klick-Ereignis hinzufügen
   arrowsDowns.forEach(arrowDown =>{
    arrowDown.addEventListener('click',function(){

    // Die 'show-hide'-Klasse des vorherigen Geschwisterelements umschalten
      arrowDown.previousElementSibling.classList.toggle('show-hide');
      let titleArrow = this;

      // Das Pfeil-Icon umschalten
          arrowChange(titleArrow);
      
    });
  
  
   
    
    
   });
  //  const menuArrow = document.querySelector("#nav-menu-item-302 > i");
  //  menuArrow.addEventListener('click',function(){
    
  //   subMenu.classList.toggle('show-hide');
    
  //       arrowChange(menuArrow);
    
  // });

}

 // Klick-Ereignis zum Anzeigen/Verbergen des Menüs für das 'fa-bars'-Icon hinzufügen
let bars =document.querySelector('.fa-bars');

bars.addEventListener('click',showMenu);

// Funktion zum Anzeigen/Verbergen des Menüs
function showMenu(){
  let menu =document.querySelector('#navbarSupportedContent');
  menu.classList.toggle('showToggle');
  }


 
// Remove all active class 
// function removeActiveClass() {
//     for (let i = 0; i < slides.length; i++) {
//         slides[i].classList.remove('active-slide');
//     }
// }
// function showNext() {
    //     currentIndex++;
    //     if (currentIndex >= slides.length) {
    //         currentIndex = 0;
    //     }
    //     addActiveClass();
    //     console.log(currentIndex);
    // }
    
    // function showPrev() {
    //     currentIndex--;
    //     if (currentIndex < 0) {
    //         currentIndex = slides.length - 1;
    //     }
    //     addActiveClass();
    //     console.log(currentIndex);
    // }
    
    // function addActiveClass() {
    //     const offset = currentIndex * -100;
    //   slider.style.transform = `translateX(${offset}%)`;
    // }
//     let nextBtn = document.getElementById("next"),
//     prevBtn = document.getElementById("prev");
// let slides = document.getElementById('slides'),
//      slide = document.getElementsByClassName('slide');

// // show the next and previous Slider
//  nextBtn.addEventListener("click", showNext);
//  prevBtn.addEventListener("click", showPrev);


// // 
// // create a slider


// let currentIndex = 0;
// const slideInterval = 3000; 

// function showSlides() {
   

//     let offset = currentIndex * -100;
//     slides.style.transform = `translateX(${offset}%)`;

//     currentIndex = (currentIndex + 1) % (slide.length + 1);

// // Reset to the first slide after the last one
//     if (currentIndex === slide.length) {
//         currentIndex = 0; 
//     }
    
// }
// function check(){
//     if (currentIndex === slide.length-1) {
//      currentIndex = 0; 
    
// }
// else if(currentIndex < 0){
//     currentIndex = 0; }}

//  setInterval(showSlides, slideInterval);

// function showNext() {
//     check();
//      let offset = (currentIndex+1) * -100;
//      console.log(offset);
//     slides.style.transform = `translateX(${offset}%)`;
    
//     currentIndex++;  }
    
// function showPrev() {
    
//     let offset = (currentIndex-1) * 100;
//     console.log(offset);
//     slides.style.transform = `translateX(${offset}%)`;
//     check();
//     currentIndex--;
    
// }


