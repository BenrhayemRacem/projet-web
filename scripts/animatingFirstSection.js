var spanArray = document.querySelectorAll("section div.container-fluid div.row h1 span");
console.log(spanArray) ;

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



 