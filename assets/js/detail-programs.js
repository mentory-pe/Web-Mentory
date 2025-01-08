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





// Accordion
// Seleccionar todos los encabezados del accordion
const accordionHeaders = document.querySelectorAll('.accordion-header');

accordionHeaders.forEach(header => {
  header.addEventListener('click', () => {
    // Alternar la clase 'active' en el header clicado
    header.classList.toggle('active');

    // Seleccionar el contenido relacionado
    const content = header.nextElementSibling;

    if (header.classList.contains('active')) {
      // Expandir el contenido
      content.style.maxHeight = content.scrollHeight + 'px';
      content.style.padding = '0px 20px';
    } else {
      // Colapsar el contenido
      content.style.maxHeight = '0';
      content.style.padding = '0 20px';
    }
  });
});