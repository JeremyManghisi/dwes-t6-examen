<?php
$usuarios = $datosParaVista['datos'];

$texto = $_POST['nombre'];
?>

<form action="index.php?controlador=busqueda&accion=usuarios" method="post">
<p>
    <label for="nombre">Buscar usuarios</label>
    <input type="text" name="nombre" id="nombre">
</p>
<p>
    <input type="submit" value="Buscar">
</p>
</form>

<?php
    if (count($usuarios) == 0) {
        echo "No existen usuarios con el patrón <i>$texto</i>";
    } else {
        echo "<h2> Usuarios encontrados con el patrón <i>$texto:</i> </h2>";
        foreach ($usuarios as $usuario) {
            $nombre = $usuario->getNombre();
            echo <<<END
            <ul>
            <li>  $nombre </li>
            </ul>
            END;
        }
    }
