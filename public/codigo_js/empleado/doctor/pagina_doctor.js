// Obtener elementos del DOM
const hamburgerIcon = document.getElementById('hamburger-icon');
const sideMenu = document.getElementById('side-menu');
const mainContent = document.getElementById('main-content');

// Variable para controlar si el menú está abierto o cerrado
let menuOpen = false;

// Evento click para el ícono de hamburguesa
hamburgerIcon.addEventListener('click', function() {
    if (!menuOpen) {
        sideMenu.style.right = '0';  // Mostrar el menú
        mainContent.style.marginRight = '250px';  // Mover el contenido principal
        menuOpen = true;
    } else {
        sideMenu.style.right = '-250px';  // Ocultar el menú
        mainContent.style.marginRight = '0';  // Volver el contenido principal a su lugar
        menuOpen = false;
    }
});
