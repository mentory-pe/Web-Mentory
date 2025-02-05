// Seleccionar todos los botones y los contenidos del detail tab
const buttons = document.querySelectorAll('.tab-button');
const contents = document.querySelectorAll('.tab-content');

// Agregar evento de clic a cada botón
buttons.forEach(button => {
  button.addEventListener('click', () => {
    // Quitar la clase 'active' de todos los botones y contenidos
    buttons.forEach(btn => btn.classList.remove('active'));
    contents.forEach(content => content.classList.remove('active'));

    // Agregar 'active' al botón y contenido seleccionado
    button.classList.add('active');
    document.getElementById(button.dataset.target).classList.add('active');
  });
});






















//pseudocode accordion 

const accordionBtns = document.querySelectorAll(".accordion");

accordionBtns.forEach((accordion) => {
  accordion.onclick = function () {
    this.classList.toggle("is-open");

    let content = this.nextElementSibling;
    console.log(content);

    if (content.style.maxHeight) {
      //this is if the accordion is open
      content.style.maxHeight = null;
    } else {
      //if the accordion is currently closed
      content.style.maxHeight = content.scrollHeight + "px";
      console.log(content.style.maxHeight);
    }
  };
});
