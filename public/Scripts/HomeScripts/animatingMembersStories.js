const cardsArray = document.querySelectorAll("#membersStories div.col-md-12");
const spanArray = document.querySelectorAll("#membersStories div.col-md-12 > span");
console.log(cardsArray);
console.log(spanArray);

cardsArray.forEach(element=> {
    element.addEventListener('mouseenter' , ()=> {
        element.classList.add("hovering") ;
        element.classList.remove("notHovering") ;


    })
})

cardsArray.forEach(element=> {
    element.addEventListener('mouseleave' , ()=> {

        element.classList.add("notHovering") ;
        element.classList.remove("hovering") ;


    })
})

// Animate text :
const TextBox = document.querySelector(".text-box");
console.log(TextBox);

TextBox.addEventListener('mouseenter' , ()=> {
    let T1 = document.querySelector("#Texte1");
    let T2 = document.querySelector("#Texte2");

    T1.classList.add("heading-LastTexte2") ;
    T1.classList.remove("heading-LastTexte1") ;

    T2.classList.add("heading-LastTexte1") ;
    T2.classList.remove("heading-LastTexte2") ;

})

TextBox.addEventListener('mouseleave' , ()=> {
    let T1 = document.querySelector("#Texte1");
    let T2 = document.querySelector("#Texte2");

    T2.classList.add("heading-LastTexte2") ;
    T2.classList.remove("heading-LastTexte1") ;

    T1.classList.add("heading-LastTexte1") ;
    T1.classList.remove("heading-LastTexte2") ;

})