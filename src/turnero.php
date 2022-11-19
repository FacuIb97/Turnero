<?php
include "../conexion.php";
?>
<form action="turnero_action.php" method="POST">
    <label name="profesional">Profesional: </label>
    <select name="profesional">

    <?php
    include "../conexion.php";
    $query = mysqli_query($conexion, "SELECT * FROM profesionales");
    $result = mysqli_num_rows($query);

        while ($row = mysqli_fetch_array($query)) {
            $id = $row['id_profesional'];
            $nombre = $row['nombre'];
            $apellido = $row['apellido'];
    ?>
            
        <option value="<?php echo $id ?>"><?php echo $nombre." ".$apellido; ?></option>
                                
    <?php }
    ?>

    </select>
    <br>
    <br>
    <label for="cars">Fecha: </label>
    <input type="date" name="fecha_turno" id="fecha_turno" required>

    <br>
    <br>
    <button type="sumbit"><b>Consultar disponibilidad</b></button>
</form
