<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explora Nuestros Sneakers</title>
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
            overflow: auto; /* Agregado para permitir desplazamiento */
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

        .sneaker-image {
            max-width: 100px;
            max-height: 100px;
            border-radius: 50%;
        }

        .warning-message {
            background-color: #ffc107;
            color: #333;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="table-container">
        <div class="warning-message">
            ¡Ojo! La categoría 1 es la categoría de sneakers básica, la número 2 es la categoría exclusiva de "Sneaky Shoes".
        </div>
        <h2 class="display-4">Explora nuestros sneakers disponibles</h2>
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Categoría</th>
                        <th>Descripción</th>
                        <th>Estatus</th>
                        <th>Disponibles</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $imageUrls = [
                        'https://izicop.com/cdn/shop/products/snakerstoreNike_Air_Force_1_Low_Pixel_White-CK6649-100-0.png?v=1673864369',
                        'https://thecave.mx/cdn/shop/products/NikeSbDunkLowGreenApple1.thecavemx_645x.png?v=1679593673',
                        'https://snkrs-mexico.com.mx/cdn/shop/products/air-jordan-1-retro-high-university-blue.webp?v=1685693784&width=2048',
                        'https://i5.walmartimages.com.mx/mg/gm/3pp/asr/5de677d8-eeb8-4af8-8903-dc84039cd3ea.f361e626f8959646a0287dc19fbea391.png?odnHeight=612&odnWidth=612&odnBg=FFFFFF',
                        'https://drop-shop.mx/cdn/shop/products/69adb023eb9c9b808ee7da6ebbc7237e_ded37c6e-1dac-4070-93f2-0161af1d8ebf.png?v=1681590658',
                        'https://www.nikesb.com/assets/uploads/product/FD0860-001_307870631_D_A_1X1_2023-04-28-184301.PNG',
                        // ... Agrega más URLs según sea necesario
                    ];

                    foreach ($sneakers as $index => $sneaker): ?>
                        <tr>
                            <td>
                                <img src="<?= $imageUrls[$index] ?? 'https://via.placeholder.com/100' ?>" alt="Sneaker Image" class="sneaker-image">
                            </td>
                            <td><?= $sneaker->nombre_sneaker ?></td>
                            <td><?= $sneaker->categoria ?></td>
                            <td><?= $sneaker->descripcion ?></td>
                            <td><?= $sneaker->status ?></td>
                            <td><?= $sneaker->stock ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
