// Referencias a los elementos
const openDialog = document.getElementById('open-dialog');
const closeDialog = document.getElementById('close-dialog');
const dialogOverlay = document.getElementById('dialog-overlay');

// Abrir el diálogo
openDialog.addEventListener('click', () => {
    dialogOverlay.style.display = 'flex'; // Muestra el diálogo
    setTimeout(() => {
        dialogOverlay.classList.add('active'); // Agrega la clase con la transición después de un breve momento
    }, 10); // Breve pausa para permitir que el navegador procese el cambio de display
});

// Cerrar el diálogo
closeDialog.addEventListener('click', () => {
    dialogOverlay.classList.remove('active'); // Quita la clase con la transición
    setTimeout(() => {
        dialogOverlay.style.display = 'none'; // Oculta el diálogo después de la transición
    }, 300); // El tiempo debe coincidir con la duración de la transición (0.3s)
});

// Cerrar al hacer clic fuera del diálogo
dialogOverlay.addEventListener('click', (event) => {
    if (event.target === dialogOverlay) {
        dialogOverlay.classList.remove('active'); // Quita la clase con la transición
        setTimeout(() => {
            dialogOverlay.style.display = 'none'; // Oculta el diálogo después de la transición
        }, 300);
    }
});
