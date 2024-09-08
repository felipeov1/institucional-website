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
        animateValue(stat, 0, endValue, 1000);
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

const statSection = document.querySelector('.statistics');
observer.observe(statSection);


////////// EVENTS CALENDAR

function showEvent(eventNumber) {
    const eventContent = document.getElementById("eventContent");
    const eventText = document.getElementById("eventText");
    const eventImage = document.getElementById("eventImage");

    if (eventNumber === 1) {
        eventText.innerHTML = "<h3>Evento de 14 de Dezembro</h3><p>Detalhes sobre o evento do dia 14.</p>";
        eventImage.innerHTML = "<img src='/assets/images/event-template.webp' alt='Evento 1' style='width:100%;'>";
    } else if (eventNumber === 2) {
        eventText.innerHTML = "<h3>Evento de 15 de Dezembro</h3><p>Detalhes sobre o evento do dia 15.</p>";
        eventImage.innerHTML = "<img src='imagem2.jpg' alt='Evento 2' style='width:100%;'>";
    } else if (eventNumber === 3) {
        eventText.innerHTML = "<h3>Evento de 16 de Dezembro</h3><p>Detalhes sobre o evento do dia 16.</p>";
        eventImage.innerHTML = "<img src='imagem3.jpg' alt='Evento 3' style='width:100%;'>";
    } else if (eventNumber === 4) {
        eventText.innerHTML = "<h3>Evento de 17 de Dezembro</h3><p>Detalhes sobre o evento do dia 17.</p>";
        eventImage.innerHTML = "<img src='imagem4.jpg' alt='Evento 4' style='width:100%;'>";
    }

    eventContent.style.display = "block";
}


function animateNumbers() {
    const counters = document.querySelectorAll('.number-item');
    const speed = 80;

    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText.replace(/\D/g, '');

            const increment = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + increment) + counter.innerText.slice(-1);
                setTimeout(updateCount, 10);
            } else {
                counter.innerText = target + counter.innerText.slice(-1); o
            }
        };

        updateCount();
    });
}

window.addEventListener('load', animateNumbers);
