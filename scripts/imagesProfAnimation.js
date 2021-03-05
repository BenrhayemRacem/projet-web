var img1= document.getElementById("imageProf1") ;
var img2 = document.getElementById("imageProf2") ;
var img3 = document.getElementById("imageProf3") ;
var img4= document.getElementById("imageProf4") ;
img2.style.display = "none" ;
img3.style.display = "none" ;
setInterval( () => {
    if (img1.style.display==="block") {
        img1.style.display = "none" ;
        img4.style.display = "none" ;
        img2.style.display = "block" ;
        img3.style.display = "block" ;
    } else {
        img1.style.display="block" ;
        img4.style.display = "block" ;
        img2.style.display = "none" ;
        img3.style.display = "none" ;
    };
},1000)
