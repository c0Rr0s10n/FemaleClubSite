let promo_input = document.querySelector('.promo-code');
let codes_string = document.querySelector('.codes').value;
let codes = codes_string.split(" ");
codes = codes.slice(0, codes.length-1);
promo_input.oninput = () => {
    if (codes.includes(promo_input.value)){
        promo_input.style.border = "1px solid green";
    }
    else {
        promo_input.style.border = "1px solid red";
    }
}