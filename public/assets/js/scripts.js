document.addEventListener("DOMContentLoaded", function () {
    const modalShown = localStorage.getItem('ppi_welcome_shown');
    const currentTime = new Date().getTime();
    const oneDay = 24 * 60 * 60 * 1000;

    if (!modalShown || (currentTime - modalShown > oneDay)) {
        setTimeout(function () {
            const myModal = new bootstrap.Modal(document.getElementById('welcomeModal'));
            myModal.show();

            localStorage.setItem('ppi_welcome_shown', currentTime);
        }, 10000);
    }
});


const counters = document.querySelectorAll('.counter');
const speed = 200;

const startCounter = (entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const counter = entry.target;
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const inc = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + inc);
                    setTimeout(updateCount, 15);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
            observer.unobserve(counter);
        }
    });
};

    const options = {
    threshold: 0.5
};
    const counterObserver = new IntersectionObserver(startCounter, options);

    counters.forEach(counter => {
    counterObserver.observe(counter);
});
