document.querySelector(".UserIcon").addEventListener('mouseenter' , (e)=> {
    document.querySelector(".UserIcon").style.backgroundImage = "linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%)" ;
})


document.querySelector(".UserIcon").addEventListener('mouseleave' , (e)=> {
    document.querySelector(".UserIcon").style.background = "#5EC2C2" ;
    document.querySelector(".UserIcon").style.backgroundImage = "#5EC2C2" ;

})