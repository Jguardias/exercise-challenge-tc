
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

async function addProduct() {
    try {
        const formData = new FormData();
        formData.append('opcn', 'addProduct');
        formData.append('nombre_producto', document.getElementById('productName').value);
        formData.append('referencia', document.getElementById('productRef').value);
        formData.append('precio', document.getElementById('productPrice').value);
        formData.append('peso', document.getElementById('productWeight').value);
        formData.append('categoria', document.getElementById('productCategory').value);
        formData.append('stock', document.getElementById('productStock').value);

        const response = await fetch('../controllers/productsController.php', {
            method: 'POST',
            body: formData
        });

        const result = await response.json();

        if (result) {
            await Swal.fire({
                title: '¡Producto Creado!',
                text: 'El nuevo producto ha sido agregado a la base de datos.',
                icon: 'success',
                confirmButtonColor: '#2FA44C', 
                confirmButtonText: 'Aceptar'
            });

            document.getElementById('formCreateProduct').reset();
            const modal = document.getElementById('modalCreateProduct');
            if (modal) {
                modal.classList.remove('is-open');
                document.body.style.overflow = 'auto'; 
            }
                await getProducts();
        }
    } catch (error) {
        console.error("Error add product:", error);
        Swal.fire('Error', 'No se pudo guardar el producto', 'error');
    }
}

async function getProductById(id) {
    try {
        const formData = new FormData();
        formData.append('opcn', 'getProductById');
        formData.append('id', id);
        const response = await fetch('../controllers/productsController.php', {
            method: 'POST',
            body: formData
        });
        const data = await response.json();
        return data;
    } catch (error) {
        console.error("Error al obtener producto:", error);
    }
}

async function updateProductById(id, data) {
    try {
        const formData = new FormData();
        formData.append('opcn', 'updateProduct');
        formData.append('id_producto', id);
        Object.keys(data).forEach(key => {
            formData.append(key, data[key]);
        });
        await fetch('../controllers/productsController.php', {
            method: 'POST',
            body: formData
        });

    } catch (error) {
        console.error("Error update product:", error);
    }
}

async function deleteProduct(id) {
    
    const result = await Swal.fire({
        title: '¿Estás seguro?',
        text: "El producto se marcará como inactivo y no aparecerá en la lista.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33', 
        cancelButtonColor: '#3085d6', 
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
    });

   
    if (result.isConfirmed) {
        try {
            const formData = new FormData();
            formData.append('opcn', 'deleteProduct');
            formData.append('id', id);

            const response = await fetch('../controllers/productsController.php', {
                method: 'POST',
                body: formData
            });

            const res = await response.json();
            
            if (res) {
                Swal.fire({
                    title: '¡Eliminado!',
                    text: 'El producto ha sido borrado con éxito.',
                    icon: 'success',
                    timer: 2000,
                    showConfirmButton: false
                });
                
                await getProducts(); 
            }
        } catch (error) {
            console.error("Error delete product:", error);
            Swal.fire('Error', 'No se pudo eliminar el producto', 'error');
        }
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
            <td>${prod.fecha_ultima_venta || 'Sin ventas'}</td>
            <td class="text-right">
                <button type="button" class="btn btn-primary" onclick="openModalEdit(${prod.id_producto})">
                    <i class="bi bi-pencil-fill"></i>
                </button>
                <button type="button" class="btn btn-danger" onclick="deleteProduct(${prod.id_producto})">
                    <i class="bi bi-trash3-fill"></i>
                </button>
            </td>
        `;
        tabla.appendChild(tr);
    });
    }
}


getProducts();