var spanArray = document.querySelectorAll("section div.container-fluid div.row h1 span");
console.log(spanArray);


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
    document.querySelector(".fa-search").classList.toggle("color-white");
    document.querySelector(".input").classList.toggle("active-width");
    
})



// CountUp  
function animateValues() {
    var duration = 500 ;
    var start = 0 ;
    var ListObj = document.querySelectorAll(".Number");
    for (i=0;i<ListObj.length ; i++)
    {   if (ListObj[i].innerHTML>1000)
        {duration = 50 ; start = 2000 ;} 
        animateValue(ListObj[i],start,ListObj[i].innerHTML,duration);
    }
}

animateValues();


function animateValue(obj, start, end, duration) {
    if (start === end) return;
    var range = end - start;
    var current = start;
    var increment = end > start? 1 : -1;
    var stepTime = Math.abs(Math.floor(duration / range));
   
    var timer = setInterval(function() {
        current += increment;
        obj.innerHTML = current;
        if (current == end) {
            clearInterval(timer);
        }
    }, stepTime);
}
// End CountUp  

 