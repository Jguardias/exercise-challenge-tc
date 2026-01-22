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
    </main>

    <?php include_once('src/components/modal.php') ?>
    <?php include_once('src/components/modalEdit.php') ?>
    <?php include_once('src/footer.php') ?>
</body>

</html>