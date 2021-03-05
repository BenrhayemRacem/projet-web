var li1 = document.querySelectorAll("form li") 
setInterval(()=> {
    li1.forEach ((element)=>element.classList.toggle("active")  )
         
    
} , 500)