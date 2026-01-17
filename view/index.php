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
            <button class="btn btn-success">
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
            <tbody>
                <tr>
                    <td><strong>Teclado Mecánico G-Pro</strong></td>
                    <td>SKU-10293</td>
                    <td>$129.00</td>
                    <td>0.85 kg</td>
                    <td><span class="status-badge">Electrónica</span></td>
                    <td>42</td>
                    <td>Oct 12, 2023</td>
                    <td>Nov 05, 2023</td>
                    <td class="text-right">
                        <button type="button" class="btn btn-primary" aria-label="Editar">
                            <i class="bi bi-pencil-fill"></i>
                        </button>
                        <button type="button" class="btn btn-danger" aria-label="Eliminar">
                            <i class="bi bi-trash3-fill"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>

        <div style="margin-top: 1.5rem; display: flex; justify-content: space-between; align-items: center; font-size: 0.75rem; color: #666666;">
            <div>Mostrando 7 productos de 1,240</div>
            <div>
                <button style="padding: 2px 8px; background: white; border: 1px solid #ddd; cursor: pointer;">Anterior</button>
                <button style="padding: 2px 8px; background: #000; color: white; border: 1px solid #000; cursor: pointer;">1</button>
                <button style="padding: 2px 8px; background: white; border: 1px solid #ddd; cursor: pointer;">2</button>
                <button style="padding: 2px 8px; background: white; border: 1px solid #ddd; cursor: pointer;">Siguiente</button>
            </div>
        </div>
    </main>
    <?php include_once('src/footer.php') ?>
</body>

</html>