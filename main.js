document.querySelectorAll(".servicos").forEach(servico => {
    let color = servico.getAttribute("data-color");
    servico.style.backgroundColor = color;
});

document.querySelectorAll(".servico").forEach(servico => {
    let color = servico.getAttribute("data-color");
    servico.style.backgroundColor = color;
});

function navegar(id){document.querySelector(id).classList.toggle("caixa");}

const visitContainers = document.querySelectorAll("#visitas");
visitContainers.forEach(container => {
    const button = container.querySelector("#butao");

    container.addEventListener("mouseenter", () => {
        button.style.display = "inline-block"; // Show the button on hover
    });

    container.addEventListener("mouseleave", () => {
        button.style.display = "none"; // Hide the button when not hovering
    });
});