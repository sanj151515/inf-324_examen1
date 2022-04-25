<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina Pricipal</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div id="menu">
        <ul>
            <li>Pagina Principal</li>
            <li class="cerrar-sesion">
                <a href="includes/logout.php">Cerrar sesión</a>
            </li>
        </ul>
    </div>

    <section>
        <h1>Bienvenido <?php echo $user->getNombre(); ?> </h1>
    </section>
	<form class="p-4" method="POST" action="notas.php">
	<button class="btn btn-primary" type="submit" >Ver Notas</button></form>
    
</body>
</html>