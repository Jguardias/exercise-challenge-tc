<!DOCTYPE html>
<html lang="es">

<head>
    <!-- include_once modularization technique -->
    <?php include_once('src/header.php') ?>
    <title> exercise-challenge-tc </title>
</head>

<body>
    <header>
        <h1>exercise-challenge-tc</h1>
        <div style="display: flex; height: 38px; gap: 12px;">
            <div class="input-group mb-3" style="width: 250px;">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                <input type="text" class="form-control" placeholder="Buscar producto" aria-label="Buscar producto" aria-describedby="basic-addon1">
            </div>
            <button id="btnOpenCreateProduct" class="btn btn-success">
                <i class="bi bi-plus"></i>
                Agregar Producto
            </button>
            <div>
    </header>
    <main>
        <table class="inventory-table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Referencia</th>
                    <th>Precio</th>
                    <th>Peso</th>
                    <th>Categoría</th>
                    <th>Stock</th>
                    <th>Fecha de Creación</th>
                    <th>Última Venta</th>
                    <th class="text-right">Acciones</th>
                </tr>
            </thead>
            <tbody id="tableProducts">
                <!-- Aquí se insertan los productos dinámicamente -->
            </tbody>
        </table>

        <div class="d-flex justify-content-between align-items-center mt-4 text-secondary" style="font-size: 0.75rem;">
            <div>Mostrando 7 productos de 1,240</div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-outline-dark btn-sm">Anterior</button>
                <button type="button" class="btn btn-dark btn-sm">1</button>
                <button type="button" class="btn btn-outline-dark btn-sm">2</button>
                <button type="button" class="btn btn-outline-dark btn-sm">Siguiente</button>
            </div>
        </div>
    </main>

    <?php include_once('src/components/modal.php') ?>
    <?php include_once('src/components/modalEdit.php') ?>
    <?php include_once('src/footer.php') ?>
</body>

</html>