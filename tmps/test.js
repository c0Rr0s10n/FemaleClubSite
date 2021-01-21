let promo_input = document.getElementById('promo-code');
let results = "<?php echo $codes ?>";

promo_input.oninput = () => {
    console.log(results);
}