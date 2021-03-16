var spanArray = document.querySelectorAll("section div.container-fluid div.row h1 span");






var i =1;
spanArray.forEach(element=>{
    
    element.style.animationDelay=  (i%(spanArray.length+1))* 0.05 + "s";
    i++ ;
})

document.addEventListener("scroll" , ()=>{

    if (window.scrollY>50) {
document.querySelector("section").style.display="none";
document.querySelector("nav").classList.add("fixed-top");
    }
    else{
        document.querySelector("section").style.display="flex" ;
document.querySelector("nav").classList.remove("fixed-top");
    }

})


var column = document.querySelector("div.d-flex.flex-row-reverse.bd-highlight");
var btn = document.querySelector("button.navbar-toggler") ;
btn.addEventListener("click" , ()=> {
    column.classList.toggle("flex-sm-column");
    
     
})


var array=document.querySelectorAll("section> div.container-fluid div.col-sm-12")
if(window.screen.width<=768) {
    array.forEach(elt=>{
        elt.style.position="fixed" ;
        elt.style.top="60px" ;
        elt.style.right="5px" ;
        
        
    }) ;
    array[0].style.top="200px";
}




 