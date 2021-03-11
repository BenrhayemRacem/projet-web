let header = document.getElementById("sec");
let navbar = document.querySelector("nav");

    


window.addEventListener("scroll" ,()=> {
    if (window.scrollY>50   )  {
        header.classList.add("sticky") ;
        navbar.style.display="flex" ;
        
        
        
    }
    else {
        header.classList.remove("sticky") ;
        navbar.style.display="none" ;
    }
} );