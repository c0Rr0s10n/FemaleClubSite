let promo_input = document.querySelector('.promo-code');
let codes_string = document.querySelector('.codes').value;
let codes = codes_string.split(" ");
let textt = document.querySelector('.clarify');
codes = codes.slice(0, codes.length-1);
promo_input.oninput = () => {
    if (codes.includes(promo_input.value)){
        promo_input.style.border = "1px solid green";
		textt.innerHTML = "Введён верный промокод!<br> <strong>К вашей оплате будет начислена скидка</strong>";
    }
    else {
        promo_input.style.border = "1px solid red";
		textt.innerHTML = "Промокод не верный.";
    }
}