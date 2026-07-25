document.addEventListener('DOMContentLoaded', () => {

    const pricingSwitch = document.getElementById('pricingSwitch');
    const currencySelect = document.getElementById('currencySelect');

    const starterPrice = document.getElementById('starterPrice');
    const growthPrice = document.getElementById('growthPrice');

    const starterCurrency = document.getElementById('starterCurrency');
    const growthCurrency = document.getElementById('growthCurrency');

    const monthlyLabel = document.getElementById('monthlyLabel');
    const yearlyLabel = document.getElementById('yearlyLabel');

    function updatePricing() {

        const yearly = pricingSwitch.checked;
        const currency = currencySelect.value;

        // Toggle active label
        monthlyLabel.classList.toggle('active', !yearly);
        yearlyLabel.classList.toggle('active', yearly);

        if (currency === 'INR') {

            starterCurrency.textContent = '₹';
            growthCurrency.textContent = '₹';

            if (yearly) {
                starterPrice.textContent = '9,590';
                growthPrice.textContent = '23,990';
            } else {
                starterPrice.textContent = '999';
                growthPrice.textContent = '2,499';
            }

        } else {

            starterCurrency.textContent = '$';
            growthCurrency.textContent = '$';

            if (yearly) {
                starterPrice.textContent = '279';
                growthPrice.textContent = '759';
            } else {
                starterPrice.textContent = '29';
                growthPrice.textContent = '79';
            }

        }

        document.querySelectorAll('.duration').forEach(duration => {
            duration.textContent = yearly ? '/year' : '/month';
        });

    }

    pricingSwitch.addEventListener('change', updatePricing);
    currencySelect.addEventListener('change', updatePricing);

    updatePricing();

});