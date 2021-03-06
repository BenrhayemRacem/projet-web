var imgMath = document.getElementById("imageMath") ;
var imgSciences = document.getElementById("imageSciences") ;
var imgInformatiques = document.getElementById("imageInformatique") ;
var imgArt = document.getElementById("imageArt") ; 
 var imageSolfege = document.getElementById("imageSolfege");
var imageSecurity = document.getElementById("imageSecurity");
var imageMecanqiue = document.getElementById("imageMecanqiue") ;
var imageBook = document.getElementById("imageBook");
setInterval(()=> {
    

if(imgMath.style.display === "none") {
    imageSolfege.style.display = "none" ;
    imageMecanqiue.style.display = "none" ;
    imageSecurity.style.display = "none" ;
    imageBook.style.display = "none" ;
    imgMath.style.display = "block" ;
    imgArt.style.display="block" ;
    imgInformatiques.style.display = "block" ;
    imgSciences.style.display="block" ;
    
}
else {
    imageSolfege.style.display = "block" ;
    imageMecanqiue.style.display = "block" ;
    imageSecurity.style.display = "block" ;
    imageBook.style.display = "block" ;
    imgMath.style.display = "none" ;
    imgArt.style.display="none" ;
    imgInformatiques.style.display = "none" ;
    imgSciences.style.display="none" ;

}

} , 5200)

const ColorTable =["btn-primary" , "btn-success" , "btn-info" , "btn-warning" , "btn-danger"] ;
var boutonInscrit = document.getElementById("bouton-inscription") ;
boutonInscrit.addEventListener("mouseover" , ()=> {
      i= 0 ;
    intervalButon = setInterval ( ()=> {
        boutonInscrit.classList.remove(ColorTable[i]) ;
        i= (i+1) % ColorTable.length ;
        boutonInscrit.classList.add(ColorTable[i]) ; 
        
    },250)

})
function stopInterval() {
    clearInterval(intervalButon) ;
   
}
boutonInscrit.addEventListener("mouseout", ()=> {
   stopInterval();
   boutonInscrit.classList.remove(ColorTable[i]) ;
boutonInscrit.classList.add("btn-success") ;
  
    
})



