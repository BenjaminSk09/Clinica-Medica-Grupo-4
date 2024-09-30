<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Historial Médico del Paciente</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <h1>Historial Médico</h1>
        </div>
        <nav>
            <ul class="menu">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Pacientes</a></li>
                <li><a href="#">Historial</a></li>
                <li><a href="#">Citas</a></li>
            </ul>
        </nav>
    </header>

    <!-- Buscador de Pacientes -->
    <section class="search-section">
        <input type="text" id="searchInput" placeholder="Buscar paciente...">
        <button id="searchBtn">Buscar</button>
    </section>

    <!-- Tabla de Historial Médico -->
    <main>
        <section class="patient-history-section">
            <h2>Historial Médico</h2>
            <table id="historyTable">
                <thead>
                    <tr>
                        <th onclick="sortTable(0)">Nombre <span>&#x25B2;&#x25BC;</span></th>
                        <th onclick="sortTable(1)">Fecha <span>&#x25B2;&#x25BC;</span></th>
                        <th onclick="sortTable(2)">Diagnóstico <span>&#x25B2;&#x25BC;</span></th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="patientTableBody">
                    <tr>
                        <td>Juan Pérez</td>
                        <td>15/09/2024</td>
                        <td>Resfriado Común</td>
                        <td>
                            <button class="editBtn">Editar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>María López</td>
                        <td>13/09/2024</td>
                        <td>Dolor de Cabeza</td>
                        <td>
                            <button class="editBtn">Editar</button>
                        </td>
                    </tr>
                    <!-- Más pacientes aquí -->
                </tbody>
            </table>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Doctor Online. Todos los derechos reservados.</p>
    </footer>

    <!-- Script para la funcionalidad de búsqueda y ordenación -->
    <script src="scripts.js">
        // scripts.js

// Función para ordenar la tabla por columna
function sortTable(columnIndex) {
    const table = document.getElementById("historyTable");
    const rows = Array.from(table.rows).slice(1); // Omitimos el encabezado

    let sortedRows = rows.sort((a, b) => {
        const aText = a.cells[columnIndex].textContent.trim().toLowerCase();
        const bText = b.cells[columnIndex].textContent.trim().toLowerCase();

        return aText > bText ? 1 : -1;
    });

    // Volvemos a añadir las filas ordenadas a la tabla
    const tableBody = document.getElementById("patientTableBody");
    tableBody.innerHTML = "";
    sortedRows.forEach(row => tableBody.appendChild(row));
}

// Función para buscar pacientes en la tabla
document.getElementById("searchBtn").addEventListener("click", function() {
    const searchValue = document.getElementById("searchInput").value.toLowerCase();
    const rows = document.querySelectorAll("#historyTable tbody tr");

    rows.forEach(row => {
        const patientName = row.cells[0].textContent.toLowerCase();
        if (patientName.includes(searchValue)) {
            row.style.display = "";
        } else {
            row.style.display = "none";
        }
    });
});

    </script>
    <style>/* Estilos Generales */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: #f0f4f7;
}

a {
    text-decoration: none;
    color: inherit;
}

h1, h2 {
    margin: 0;
    text-align: center;
    color: #004466;
}

/* Header */
header {
    background-color: #004466;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px;
}

.logo h1 {
    font-size: 1.8rem;
}

nav ul {
    list-style-type: none;
    display: flex;
    gap: 20px;
}

nav ul li a {
    color: white;
    font-weight: bold;
    transition: color 0.3s;
}

nav ul li a:hover {
    color: #ffcc00;
}

/* Buscador */
.search-section {
    margin: 20px;
    text-align: center;
}

.search-section input {
    padding: 10px;
    width: 50%;
    max-width: 40
}
</style>
</body>

</html>
