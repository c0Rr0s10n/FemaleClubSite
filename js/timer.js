let doc = document.querySelector('html');
let timer = document.querySelector('.timer1');
setInterval(() => {
    const today = new Date();
    const tomorrow = today;
    tomorrow.setDate(today.getDate() + 1);
    // tomorrow.setHours(00);
    // console.log(tomorrow.getHours());
    let hours = (24 - today.getHours()-1).toString();
    let minutes = (60 - today.getMinutes()-1).toString();
    let seconds = (60 - today.getSeconds()-1).toString();
    if (+hours < 10){
        hours = "0"+hours;
    }
    else if (+hours == 60){
        hours = "00";
    }
    if (+minutes < 10){
        minutes = "0"+minutes;
    }
    else if (+minutes == 60){
        minutes = "00";
    }
    if (+seconds < 10){
        seconds = "0"+seconds;
    }
    else if (+seconds == 60){
        seconds = "00";
    }
    timer.innerHTML = hours + " | " + minutes + " | " + seconds;
}, 1000);

 