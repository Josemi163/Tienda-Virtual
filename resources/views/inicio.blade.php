<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Virtual Premium</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #f0f4f8;
        }

        header {
            background-color: #0b1121;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #1e293b;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }

        main {
            width: 90%;
            max-width: 1100px;
            margin: 40px auto;
        }

        .bienvenida {
            background-color: white;
            color: #111827; 
            padding: 40px;
            text-align: center;
            border-radius: 10px;
        }

        .boton {
            display: inline-block;
            background-color: #2563eb;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        footer {
            margin-top: 50px;
            padding: 20px;
            text-align: center;
            background-color: #0b1121;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <h1>Tienda Virtual</h1>
        <p>Bienvenido a mi super tienda virtual</p>
    </header>

    <nav>
        <a href="/">Inicio</a>
        <a href="/productos">Productos</a>
        <a href="#">Categorias</a>
        <a href="#">Contacto</a>
    </nav>

    <main>
        <section class="bienvenida">
            <h2>Bienvenid@ a nuestra tienda</h2>
            <p>¡Encuentra los mejores productos en un solo lugar!</p>
            <a href="/productos" class="boton">Ver Productos</a>
        </section>
    </main>

    <footer>
        <p>2026 Tienda Virtual - Todos los derechos reservados</p>
    </footer>
</body>
</html>