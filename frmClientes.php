
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SASI | Menú</title>
</head>
<body>
    <header>
        <h1>Formulario de clientes</h1>
    </header>
    <section class="registros">
        <form method="POST">
            <fieldset>
                <legend><h3>Información del cliente</h3></legend>
                <label for="gc_cli">Identificación: </label>
                <input type="text" id="gc_cli" placeholder="CI19XXXX" required>
                <br> <br>
                <label for="cl_tipo_cliente">Tipo de cliente:</label>
                <select name="" id="cl_tipo_cliente" required>
                    <option value="1">Empresa</option>
                    <option value="0">Físico</option>
                </select>
                <br> <br>
                <label for="nombres">Nombre(s): </label>
                <input type="text" id="nombres" placeholder="Nombres" required>
                <br> <br>
                <label for="apPat">Apellido paterno: </label>
                <input type="text" id="apPat" placeholder="Apellido Pat" required>
                <br> <br>
                <label for="apMat">Apellido paterno: </label>
                <input type="text" id="apMat" placeholder="Apellido Mat" required>
                <br> <br>
                <label for="tel">Teléfono: </label>
                <input type="text" id="tel" placeholder="máx 13" max="13" min="10" required>
                <br> <br>
                <label for="fat">Factuar a: </label>
                <input type="text" id="fact" placeholder="Opcional">
                <br> <br>
                <label for="direccion">Dirección: </label>
                <input type="text" id="direccion" placeholder="Dirección completa" required>
                <br> <br>
                <label for="rfc">RFC: </label>
                <input type="text" id="rfc" placeholder="Opcional">
                <br> <br>
                <input type="reset" value="Limpiar">
                <input type="submit" value="Enviar">
            </fieldset>
        </form>
    </section>
</body>
</html>