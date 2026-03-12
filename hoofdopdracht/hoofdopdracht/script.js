let hour = new Date().getHours();

if(hour < 12){
    document.getElementById("greeting").innerHTML = "Goed morgen"
}else if(hour === 12){
    document.getElementById("greeting").innerHTML = "Goed middag"
}else if(hour > 12){
    document.getElementById("greeting").innerHTML = "Goeden avond"
};

const element = document.getElementById("darkbtn");
element.addEventListener("click", dark);

function dark(){
    document.querySelector(body).style.backgroundColor = "black"
    document.querySelector(body).style.color = "white"
};