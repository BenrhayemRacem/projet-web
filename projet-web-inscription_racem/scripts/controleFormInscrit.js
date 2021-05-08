var mdp1= document.getElementById("exampleInputPassword1") ;
var mdp2 = document.getElementById("exampleInputPassword2");

var check = ()=>{
    if(mdp1.value===mdp2.value) {
        mdp2.style.color="green";
        document.querySelector("button").classList.remove("disabled");
    }
    else{
        document.querySelector("button").classList.add("disabled");
        mdp2.style.color="red";
    }
}

mdp1.addEventListener("keyup" , check) ;
mdp2.addEventListener("keyup" , check);