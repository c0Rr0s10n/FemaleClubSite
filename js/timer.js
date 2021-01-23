let timer = document.querySelector('.timer1');
let minutes = "15";
let seconds = "00";
setInterval(() => {
    seconds = (+seconds - 1).toString();
    if (seconds == "-1"){
        seconds = "59";
        minutes = (+minutes - 1).toString();
    }
    if (+seconds < 10){
        seconds = "0" + seconds;
    }
    if (+minutes < 10){
        minutes = "0" + (+minutes).toString();
    }
    timer.innerHTML = "<strong>00</strong>" + " | " + "<strong>" + minutes + "</strong>" + " | " + "<strong>" + seconds + "</strong>";
}, 1000);

 