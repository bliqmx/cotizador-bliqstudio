document.addEventListener('DOMContentLoaded', () => {
  const input = document.querySelector('#search');
  const table = document.querySelector('#results');

  function load() {
    fetch('includes/ajax_catalog.php?q=' + encodeURIComponent(input.value))
      .then(r => r.json())
      .then(d => {
        let html = `
          <tr>
            <th>Categoría</th>
            <th>Producto</th>
            <th>Precio</th>
          </tr>
        `;
        for (const x of d) {
          html += `
            <tr>
              <td>${x.category}</td>
              <td>${x.name}</td>
              <td>${x.price ?? ''}</td>
            </tr>
          `;
        }
        table.innerHTML = html;
      })
      .catch(() => {
        table.innerHTML = '<tr><td colspan="3">Error al cargar datos</td></tr>';
      });
  }

  input.addEventListener('input', load);
  load(); // carga inicial
});
