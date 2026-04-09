let hour = new Date().getHours();

if(hour < 12){
    document.getElementById("greeting").innerHTML = "Goed morgen"
}else if(hour === 12){
    document.getElementById("greeting").innerHTML = "Goed middag"
}else if(hour > 12){
    document.getElementById("greeting").innerHTML = "Goeden avond"
};

function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}

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

document.getElementById("naam").addEventListener("input", () => {

  let lenghtin = document.getElementById("naam").value.length;
  document.getElementById("counter").innerHTML = lenghtin + "/50";

});

let clickamount;

document.getElementById("footer").addEventListener("click", () =>{

  clickamount + 1;
  console.log("clickamount")
  if (clickamount === 3) {
    alert
  };
  
})

