document.addEventListener('DOMContentLoaded', () => {
  const backendUrl = 'http://localhost:8000/api/drinks';

  // Llamada a la API para obtener los datos
  fetch(backendUrl)
    .then(response => {
      if (!response.ok) {
        return response.json().then(errorData => {
          throw new Error(`Error en la respuesta: ${response.status} - ${errorData.message}`);
        });
      }
      return response.json();
    })
    .then(data => {
      const tableBody = document.getElementById('drinks-table');
      tableBody.innerHTML = ''; // Limpia la tabla antes de llenarla

      // Itera sobre los datos y añade filas a la tabla
      data.forEach(drink => {
        const price = typeof drink.price === 'number' ? drink.price.toFixed(2) : 'N/A';
        const row = document.createElement('tr');
        row.innerHTML = `
          <td>${drink.id}</td>
          <td>${drink.name}</td>
          <td>${drink.type}</td>
          <td>${price}</td>
        `;
        tableBody.appendChild(row);
      });
    })
    .catch(error => console.error('Error al cargar los datos:', error));
});