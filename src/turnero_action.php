<?php
include "../conexion.php";
$id_profesional = $_POST["profesional"];
$fecha_turno = $_POST["fecha_turno"];
$query = mysqli_query($conexion, "SELECT * FROM turnosdisponibles WHERE fk_profesional = '$id_profesional' AND fecha = '$fecha_turno'");
?>

<form action="turnero_action.php" method="POST">
    <label name="horarios">Horarios disponibles: </label>
    <select name="horarios">

    <?php
    include "../conexion.php";
    $result = mysqli_num_rows($query);

        while ($row = mysqli_fetch_array($query)) {
            $id = $row['id_turnoDisponible'];
            $hora = $row['hora'];
    ?>
            
        <option value="<?php echo $id ?>"><?php echo $hora; ?></option>
                                
    <?php }
    ?>

    </select>

    <br>
    <br>
    <button type="sumbit"><b>Confirmar horario</b></button>
</form