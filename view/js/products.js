
async function getProducts() {
    try {
        const formData = new FormData();
        formData.append('opcn', 'listProducts');
        const response = await fetch('../controllers/productsController.php', {
            method: 'POST',
            body: formData
        });
        const data = await response.json();
        renderProductsTable(data);
    } catch (error) {
        console.error("Error al obtener productos:", error);
    }
}


function renderProductsTable(products) {
    const tabla = document.querySelector('#tableProducts');
    
    if(products.length === 0) {
        tabla.innerHTML = `<tr><td colspan="9" class="text-center">No hay productos disponibles.</td></tr>`;
    }else{
    tabla.innerHTML = "";
    products.forEach(prod => {
        const tr = document.createElement('tr');
        tr.innerHTML = `
            <td><strong>${prod.nombre_producto}</strong></td>
            <td>${prod.referencia}</td>
            <td>$${Number(prod.precio).toLocaleString()}</td>
            <td>${prod.peso} kg</td>
            <td><span class="status-badge">${prod.categoria}</span></td>
            <td>${prod.stock}</td>
            <td>${prod.fecha_creacion}</td>
            <td>${prod.ultima_venta || 'Sin ventas'}</td>
            <td class="text-right">
                <button type="button" class="btn btn-primary" onclick="editProduct(${prod.id})">
                    <i class="bi bi-pencil-fill"></i>
                </button>
                <button type="button" class="btn btn-danger" onclick="deleteProduct(${prod.id})">
                    <i class="bi bi-trash3-fill"></i>
                </button>
            </td>
        `;
        tabla.appendChild(tr);
    });
    }
}


getProducts();