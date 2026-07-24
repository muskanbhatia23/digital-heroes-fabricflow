document.addEventListener("DOMContentLoaded", () => {

    const form = document.getElementById("contactForm");
    const button = document.querySelector(".btn-submit-contact");
    const buttonText = document.querySelector(".btn-text");
    const toast = document.getElementById("contactToast");

    if (form) {

        form.addEventListener("submit", function (e) {

            e.preventDefault();

            button.disabled = true;

            button.innerHTML = `
                <span class="spinner-border spinner-border-sm me-2"></span>
                Sending...
            `;

            setTimeout(() => {

                form.reset();

                button.disabled = false;

                button.innerHTML = `
                    <span class="btn-text">
                        Send Message
                    </span>
                    <i class="bi bi-arrow-right ms-2"></i>
                `;

                toast.classList.add("show");

                setTimeout(() => {

                    toast.classList.remove("show");

                }, 4000);

            }, 1800);

        });

    }

    document.querySelectorAll('a[href^="#"]').forEach(link => {

        link.addEventListener("click", function (e) {

            const target = document.querySelector(this.getAttribute("href"));

            if (target) {

                e.preventDefault();

                target.scrollIntoView({

                    behavior: "smooth"

                });

            }

        });

    });

});