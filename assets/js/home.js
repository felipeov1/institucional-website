function animateValue(el, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        el.innerText = Math.floor(progress * (end - start) + start) + (el.dataset.suffix || '');
        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };
    window.requestAnimationFrame(step);
}

function startCounting() {
    const stats = document.querySelectorAll('.number-item');
    stats.forEach((stat) => {
        const endValue = parseInt(stat.getAttribute('data-target'), 10);
        animateValue(stat, 0, endValue, 700);
    });
}

const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            startCounting();  
            observer.unobserve(entry.target); 
        }
    });
});

const statSection = document.querySelector('.statistics-section');
observer.observe(statSection);