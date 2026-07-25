import './bootstrap';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import "./product";

document.addEventListener('DOMContentLoaded', () => {

    // Number Counters
    document.querySelectorAll('.counter').forEach(counter => {

        const target = Number(counter.dataset.target);
        let current = 0;
        const increment = target / 80;

        function update() {
            current += increment;

            if (current >= target) current = target;

            if (target >= 1000) {
                counter.innerText = Math.floor(current / 1000) + "K+";
            } else {
                counter.innerText = Math.floor(current) + "+";
            }

            if (current < target) {
                requestAnimationFrame(update);
            }
        }

        update();
    });

    // Percentage Counter
    document.querySelectorAll('.counter-percent').forEach(counter => {

        const target = parseFloat(counter.dataset.target);
        let current = 0;
        const increment = target / 80;

        function update() {
            current += increment;

            if (current >= target) current = target;

            counter.innerText = current.toFixed(1) + "%";

            if (current < target) {
                requestAnimationFrame(update);
            }
        }

        update();
    });

});