<div class="modal-custom" id="modalEditProduct" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content" style="border-top: 5px solid #0d6efd;">
            <div class="modal-header">
                <h5 class="modal-title">Actualizar Producto</h5>
                <button type="button" class="btn-close" id="btnCloseEditModalIcon" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="formEditProduct">
                    <input type="hidden" id="editProductId" name="id_producto">

                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="editProductName" class="form-label">Nombre del producto</label>
                            <input type="text" class="form-control" id="editProductName" name="nombre_producto" required>
                        </div>

                        <div class="col-md-6">
                            <label for="editProductRef" class="form-label">Referencia</label>
                            <input type="text" class="form-control" id="editProductRef" name="referencia" required>
                        </div>

                        <div class="col-md-6">
                            <label for="editProductCategory" class="form-label">Categoría</label>
                            <select class="form-select" id="editProductCategory" name="categoria">
                                <option value="Electrónica">Electrónica</option>
                                <option value="Muebles">Muebles</option>
                                <option value="Oficina">Oficina</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="editProductPrice" class="form-label">Precio ($)</label>
                            <input type="number" step="0.01" class="form-control" id="editProductPrice" name="precio" required>
                        </div>

                        <div class="col-md-4">
                            <label for="editProductWeight" class="form-label">Peso (KG)</label>
                            <input type="number" step="0.01" class="form-control" id="editProductWeight" name="peso" required>
                        </div>

                        <div class="col-md-4">
                            <label for="editProductStock" class="form-label">Stock</label>
                            <input type="number" class="form-control" id="editProductStock" name="stock" required>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" id="btnCancelEditModal">Cancelar</button>
                <button type="submit" form="formEditProduct" class="btn btn-primary">Actualizar</button>
            </div>

        </div>
    </div>
</div>