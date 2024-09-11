function showValue(valueId) {
    // Ocultar todos los valores
    const values = document.querySelectorAll('.value');
    values.forEach(value => {
        value.style.display = 'none';
    });

    // Mostrar el valor seleccionado
    document.getElementById(valueId).style.display = 'flex';

    // Cambiar la clase activa del botón
    const tabs = document.querySelectorAll('.tab');
    tabs.forEach(tab => {
        tab.classList.remove('active');
    });
    document.querySelector(`button[onclick="showValue('${valueId}')"]`).classList.add('active');
}
