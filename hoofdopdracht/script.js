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

let tijd = 120;

let timer;

function formatTijd(seconden) {
  let min = Math.floor(seconden / 60);
  let sec = seconden % 60;
  if (sec < 10) sec = "0" + sec;
  return min + ":" + sec;
}

function update() {
  let display = document.getElementById("timers");
  display.innerHTML = formatTijd(tijd);
}

function end() {
  tijd--;
  update();
  
  if (tijd === 0) {
    clearInterval(timer);
    document.getElementById("overlayverlies").style.display = "block";
  } else {
    document.getElementById("overlayverlies").style.display = "none";
  };
}

timer = setInterval(end, 1000);

let lenghtin = document.getElementById("naam").value.lenght;

document.getElementById("counter").innerHTML = lenghtin/50;

