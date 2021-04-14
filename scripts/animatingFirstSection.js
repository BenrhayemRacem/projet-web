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

document.querySelector(".searchbtn").addEventListener("click",(e)=> {
    document.querySelector(".searchbtn").classList.toggle("bg-Blue");
    document.querySelector(".fa").classList.toggle("color-white");
    document.querySelector(".input").classList.toggle("active-width");
})





 