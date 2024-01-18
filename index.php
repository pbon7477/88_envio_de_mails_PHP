<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario envío</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Formulario de contacto</h2>

        <form action="enviar_mail.php" method="POST">
            <table>
            <tr>
                <td>
                    <label for="nombre">Nombre: </label>
                </td>
                <td>
                    <input type="text" name="nombre" maxlength="50" size="25">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="apellido">Apellido: </label>
                </td>
                <td>
                    <input type="text" name="apellido" maxlength="50" size="25">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="email">Dirección E-mail: </label>
                </td>
                <td>
                    <input type="email" name="email" maxlength="80" size="25">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="tfno">Numero telefonico: </label>
                </td>
                <td>
                    <input type="text" name="tfno" maxlength="25" size="25">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="asunto">Asunto: </label>
                </td>
                <td>
                    <input type="text" name="asunto" maxlength="25" size="25">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="comentario">Comentario: </label>
                </td>
                <td>
                    <textarea type="text" name="comentario" maxlength="500" cols="30" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                    <input type="submit" value="Enviar">
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>