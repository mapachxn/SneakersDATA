<style>
    body {
        background-color: #f8f9fa;
        color: #495057;
        font-family: 'Arial', sans-serif;
    }

    .container {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    h2 {
        color: #007bff;
        text-align: center;
        margin-bottom: 20px;
    }

    .table-container {
        width: 80%;
        margin: 0 auto;
    }

    .table {
        background-color: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }

    th, td {
        text-align: center;
        padding: 15px;
    }

    thead {
        background-color: #343a40;
        color: #fff;
    }

    tbody tr:hover {
        background-color: #f2f2f2;
    }

    .brand-logo {
        max-width: 80px; /* Ajusta el tamaño según sea necesario */
        max-height: 80px; /* Ajusta el tamaño según sea necesario */
        border-radius: 50%;
    }

    .action-buttons a {
        margin-right: 5px;
    }
</style>

<div class="container">
    <div class="table-container">
        <h2 class="display-4">Explora nuestras marcas de Sneakers</h2>
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Logo</th>
                        <th>Nombre de la Fundación</th>
                        <th>Fecha de Creación</th>
                        <th>País de Origen</th>
                        <th>Estado de Origen</th>
                        <th>Sitio Web Oficial</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Puedes agregar las direcciones de las imágenes aquí
                    $logoUrls = [
                        'https://seeklogo.com/images/N/nike-logo-47A65A59D5-seeklogo.com.png',
                        'https://cdn.iconscout.com/icon/free/png-256/free-adidas-9-282622.png',
                        'https://outletpuebla.com/wp-content/uploads/2022/10/64-puma-outlet-logo-tienda.jpg',
                        'https://logospng.org/download/new-balance/logo-new-balance-fundo-vermelho-256.png',
                        'https://logospng.org/download/jordan/logo-air-jordan-256.png',
                        // Agrega más URLs según sea necesario
                    ];

                    foreach ($MarcaSneakers as $index => $marca): ?>
                        <tr>
                            <td>
                                <img src="<?= $logoUrls[$index] ?? 'https://via.placeholder.com/80' ?>" alt="Logo" class="brand-logo">
                            </td>
                            <td><?= $marca->nombre_fundacion ?></td>
                            <td><?= $marca->creacion ?></td>
                            <td><?= $marca->pais_origen ?></td>
                            <td><?= $marca->estado_origen ?></td>
                            <td>
                                <a href="<?= $marca->sitio_web ?>" target="_blank" rel="noopener noreferrer"><?= $marca->sitio_web ?></a>
                            </td>
                            <td class="action-buttons">
                                <a href="<?= base_url('index.php/marca/delete/' . $marca->id); ?>" class="btn btn-danger btn-sm">Eliminar</a>
                                <a href="<?= base_url('index.php/marca/editar/' . $marca->id); ?>" class="btn btn-primary btn-sm">Editar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
