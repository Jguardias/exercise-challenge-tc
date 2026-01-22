<div class="modal-custom" id="modalCreateProduct" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content" style="border-top: 5px solid #2FA44C;">

            <div class="modal-header">
                <h5 class="modal-title" id="modalCreateProductLabel">Crear nuevo producto</h5>
                <button type="button" class="btn-close" id="btnCloseModalIcon" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="formCreateProduct">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="productName" class="form-label">Nombre del producto</label>
                            <input type="text" class="form-control" id="productName" placeholder="Teclado Mecánico" required>
                        </div>
                        <div class="col-md-6">
                            <label for="productRef" class="form-label">Referencia</label>
                            <input type="text" class="form-control" id="productRef" placeholder="SKU-00000" required>
                        </div>
                        <div class="col-md-6">
                            <label for="productPrice" class="form-label">Precio ($)</label>
                            <input type="number" step="0.01" class="form-control" id="productPrice" placeholder="0.00" required>
                        </div>
                        <div class="col-md-6">
                            <label for="productWeight" class="form-label">Peso (KG)</label>
                            <input type="number" step="0.01" class="form-control" id="productWeight" placeholder="0.00" required>
                        </div>
                        <div class="col-md-6">
                            <label for="productCategory" class="form-label">Categoría</label>
                            <select class="form-select" id="productCategory">
                                <option value="" selected disabled>Seleccione una categoría</option>
                                <option value="Electrónica">Electrónica</option>
                                <option value="Muebles">Muebles</option>
                                <option value="Oficina">Oficina</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="productStock" class="form-label">Cantidad en Stock</label>
                            <input type="number" class="form-control" id="productStock" placeholder="0" required>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" id="btnCancelModal">Cancelar</button>
                <button type="submit" form="formCreateProduct" class="btn btn-success">Guardar</button>
            </div>

        </div>
    </div>
</div>