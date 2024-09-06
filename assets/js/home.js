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
