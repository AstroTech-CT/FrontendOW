// Obtengo los elementos del botón "Crear" y del modal
const openModalButton = document.getElementById('open-modal-button');
const modal = document.getElementById('myModal');

// Evento de clic para mostrar el modal
openModalButton.addEventListener('click', () => {
    modal.style.display = 'block';
});

// Evento de clic para cerrar el modal
const closeModal = document.getElementById('close-modal');
closeModal.addEventListener('click', () => {
    modal.style.display = 'none';
});

// Cierra el modal si se hace clic fuera de él
window.addEventListener('click', (event) => {
    if (event.target === modal) {
        modal.style.display = 'none';
    }
});
