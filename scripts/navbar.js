let header = document.getElementById("sec");
let navbar = document.querySelector("nav");

    


window.addEventListener("scroll" ,()=> {
    if (window.scrollY>0   )  {
        header.classList.add("sticky") ;
        navbar.style.display="flex" ;
        
        
        
    }
    if(window.scrollY>250) {
        navbar.style.display="none";
    }
    if((window.scrollY<250) && (window.scrollY>50)) {
        header.classList.add("sticky") ;
        navbar.style.display="flex" ;
    }
    if(window.scrollY==0) {
        navbar.style.display="none";
        header.classList.remove("sticky") ;
    }
} );

  
