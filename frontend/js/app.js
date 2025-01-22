document.addEventListener('DOMContentLoaded', () => {
  // Define la URL del backend dependiendo de si estás en localhost o Docker
  const backendUrl = location.hostname === 'localhost'
    ? 'http://localhost:8000/api/snacks' // URL local
    : 'http://laravel_backend:8000/api/snacks'; // URL desde Docker

  // Llamada a la API para obtener los datos
  fetch(backendUrl)
    .then(response => {
      if (!response.ok) {
        throw new Error(`Error en la respuesta: ${response.status}`);
      }
      return response.json();
    })
    .then(data => {
      const tableBody = document.getElementById('snacks-table');
      tableBody.innerHTML = ''; // Limpia la tabla antes de llenarla

      // Itera sobre los datos y añade filas a la tabla
      data.forEach(snack => {
        const row = document.createElement('tr');
        row.innerHTML = `
          <td>${snack.id}</td>
          <td>${snack.name}</td>
          <td>${snack.quantity}</td>
          <td>${snack.price.toFixed(2)}</td>
        `;
        tableBody.appendChild(row);
      });
    })
    .catch(error => console.error('Error al cargar los datos:', error));
});