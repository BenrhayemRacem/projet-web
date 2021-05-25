var cardsArray = document.querySelectorAll("#membersStories div.col-md-12");
var spanArray = document.querySelectorAll("#membersStories div.col-md-12 > span");
console.log(cardsArray);
console.log(spanArray);

cardsArray.forEach(element=> {
    element.addEventListener('mouseenter' , (e)=> {
        element.classList.add("hovering") ;
        element.classList.remove("notHovering") ;


    })
})

cardsArray.forEach(element=> {
    element.addEventListener('mouseleave' , (e)=> {

        element.classList.add("notHovering") ;
        element.classList.remove("hovering") ;


    })
})

// Animate text :
var TextBox = document.querySelector(".text-box");
console.log(TextBox);

TextBox.addEventListener('mouseenter' , (e)=> {
    var T1 = document.querySelector("#Texte1");
    var T2 = document.querySelector("#Texte2");

    T1.classList.add("heading-LastTexte2") ;
    T1.classList.remove("heading-LastTexte1") ;

    T2.classList.add("heading-LastTexte1") ;
    T2.classList.remove("heading-LastTexte2") ;

})

TextBox.addEventListener('mouseleave' , (e)=> {
    var T1 = document.querySelector("#Texte1");
    var T2 = document.querySelector("#Texte2");

    T2.classList.add("heading-LastTexte2") ;
    T2.classList.remove("heading-LastTexte1") ;

    T1.classList.add("heading-LastTexte1") ;
    T1.classList.remove("heading-LastTexte2") ;

})