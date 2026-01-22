const modalEdit = document.getElementById('modalEditProduct');
const btnCancelEdit = document.getElementById('btnCancelEditModal');
const btnCloseIconEdit = document.getElementById('btnCloseEditModalIcon');
const formEdit = document.getElementById('formEditProduct');
    
async function openModalEdit(id) {
    
    const product = await getProductById(id);
    if (product) {
        document.getElementById('editProductId').value = product.id_producto;
        document.getElementById('editProductName').value = product.nombre_producto;
        document.getElementById('editProductRef').value = product.referencia;
        document.getElementById('editProductPrice').value = product.precio;
        document.getElementById('editProductWeight').value = product.peso;
        document.getElementById('editProductStock').value = product.stock;
        document.getElementById('editProductCategory').value = product.categoria;
        modalEdit.classList.add('is-open');
        document.body.style.overflow = 'hidden';
    }
}

 const closeModalEdit = () => {
    if (modalEdit) {
     modalEdit.classList.remove('is-open');
     document.body.style.overflow = 'auto'; 
  }
 };

document.addEventListener('DOMContentLoaded', () => {
   
    if (btnCancelEdit) {
        btnCancelEdit.addEventListener('click', closeModalEdit);
    }

    if (btnCloseIconEdit) {
        btnCloseIconEdit.addEventListener('click', closeModalEdit);
    }

    if (formEdit) {
        formEdit.addEventListener('submit', async (e) => {
            e.preventDefault(); 

            const id = document.getElementById('editProductId').value;
           
            const data = {
                nombre_producto: document.getElementById('editProductName').value,
                referencia:      document.getElementById('editProductRef').value,
                precio:          document.getElementById('editProductPrice').value,
                peso:            document.getElementById('editProductWeight').value,
                categoria:       document.getElementById('editProductCategory').value,
                stock:           document.getElementById('editProductStock').value
            };

           
            await updateProductById(id, data);
            await getProducts();
            Swal.fire({
                title: '¡Actualizado!',
                text: 'El producto se ha modificado correctamente.',
                icon: 'success',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Aceptar'
                }).then(() => {
              closeModalEdit();});     
        });
    }

});


