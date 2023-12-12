<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sneaky Shoes</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #D2FF99; /* Color verde agregado */
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        nav {
            background-color: #555;
            padding: 1em;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        nav li {
            display: inline-block;
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            font-size: 18px;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #ffcc00;
        }

        main {
            padding: 20px;
            text-align: center;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .sneaker-images {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .sneaker-images img {
            max-width: 200px;
            max-height: 200px;
            margin: 0 10px;
            border-radius: 10px;
        }

        .image-address {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>👟⭐ Sneaky Shoes ⭐👟</h1>
    </header>

    <nav>
        <ul>
            <li><a href="showsneakers">Sneakers disponibles</a></li>
            <li><a href="mostrarmarca">Marcas manejadas</a></li>
            <li><a href="<?= base_url('/contact') ?>">Contact</a></li>
        </ul>
    </nav>

    <main>
        <p>¡Bienvenido a Sneaky Shoes, la tienda en donde encontrarás Sneakers de la mejor calidad!.</p>
        <div class="sneaker-images">
            <img src="https://static.sneakerjagers.com/news/nl/2023/09/FN0344_901_A_PREM-1024x1024.png" alt="Sneaker Image 1">
            <img src="https://th.bing.com/th/id/OIG.OZTJcYH7L0rfm5z7wuoA?w=270&h=270&c=6&r=0&o=5&pid=ImgGn" alt="Sneaker Image 2">
            <img src="https://i.ebayimg.com/00/s/MTAwMFgxMDAw/z/IRwAAOSwGdNhJR5J/$_58.png" alt="Sneaker Image 3">
        </div>
        <!-- Puedes agregar más contenido aquí -->
        
    </main>

    <footer>
        <p>&copy; 2023 TecNM Campus Teziutlán</p>
    </footer>
</body>
</html>
