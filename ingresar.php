<!DOCTYPE html>
<html>
    <head>
    <tittle>Ingresar Libro</tittle>
    </head>

    <body>
    <header>Ingresar los datos del libro</header>

    <form action="administrar_libro.php" method="post">
    <table>
    <tr>
    <td>Nombre Libro</td>
    <td><input type="text" name="nombre"></td>
    </tr>

    <tr>
    <td>Autor</td>
    <td><input type="text" name="autor"></td>
    </tr>

    <tr>
    <td>Fecha Edición</td>
    <td><input type="text" name="edicion"></td>
    </tr>

    <input type="hidden" name="insertar" value="insertar">

    </table>

    <input type="submit" value="guardar">
    <a href="index.php">Volver</a>
    </form>
    </body>
    </html>