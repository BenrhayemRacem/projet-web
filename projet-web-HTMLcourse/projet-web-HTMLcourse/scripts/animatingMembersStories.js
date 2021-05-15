var cardsArray = document.querySelectorAll("#membersStories div.col-md-12") ;
var spanArray = document.querySelectorAll("#membersStories div.col-md-12 > span") ;
console.log(cardsArray);
console.log(spanArray);

cardsArray.forEach(element=> {
    element.addEventListener('mouseenter' , e=> {
        element.classList.add("hovering") ; 
        element.classList.remove("notHovering") ;
        
         
    })
})

cardsArray.forEach(element=> {
    element.addEventListener('mouseleave' , e=> {
       
         element.classList.add("notHovering") ; 
         element.classList.remove("hovering") ;
         
         
    })
})