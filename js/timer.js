let timer = document.querySelector('.timer1');
let minutes = "15";
let seconds = "00";
setInterval(() => {
    seconds = (+seconds - 1).toString();
    console.log(seconds);
    if (seconds == "-1"){
        seconds = "59";
        minutes = (+minutes - 1).toString();
    }
    if (+seconds < 10){
        seconds = "0" + seconds;
    }
    if (+minutes < 10){
        minutes = "0" + minutes;
    }
    timer.innerHTML = "00" + " | " + minutes + " | " + seconds;
}, 1000);

 