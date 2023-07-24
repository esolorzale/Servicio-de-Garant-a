<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename= archivo.xls");


?>

<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Fecha</th>
      <th>Nombre</th>
      <th>Apellido Paterno</th>
      <th>Apellido Materno</th>
      <th>No. Telefónico</th>
      <th>Calle</th>
      <th>No. Interior</th>
      <th>No. Exterior</th>
      <th>Colonia</th>
      <th>Código postal</th>
      <th>Ciudad</th>
      <th>Estado</th>
      <th>Artículo</th>
      <th>Falla</th>
      <th>Accesorios</th>
      <th>Comentario</th>
      <th>Estatus</th>


    </tr>
  </thead>
  <tbody>
    <?php
    include "../admin/connection.php";
    $sql = "select * from guarantee";
    $ejecutar = mysqli_query($conn, $sql);
    while ($fila = mysqli_fetch_array($ejecutar)) {



      ?>
      <tr>
        <td>
          <?php echo $fila[0] ?>
        </td>
        <td>
          <?php echo $fila[1] ?>
        </td>
        <td>
          <?php echo $fila[2] ?>
        </td>
        <td>
          <?php echo $fila[3] ?>
        </td>
        <td>
          <?php echo $fila[4] ?>
        </td>
        <td>
          <?php echo $fila[5] ?>
        </td>
        <td>
          <?php echo $fila[6] ?>
        </td>
        <td>
          <?php echo $fila[7] ?>
        </td>
        <td>
          <?php echo $fila[8] ?>
        </td>
        <td>
          <?php echo $fila[9] ?>
        </td>
        <td>
          <?php echo $fila[10] ?>
        </td>
        <td>
          <?php echo $fila[11] ?>
        </td>
        <td>
          <?php echo $fila[12] ?>
        </td>
        <td>
          <?php echo $fila[13] ?>
        </td>
        <td>
          <?php echo $fila[14] ?>
        </td>
        <td>
          <?php echo $fila[15] ?>
        </td>
        <td>
          <?php echo $fila[16] ?>
        </td>
        <td>
          <?php echo $fila[17] ?>
        </td>
        

      </tr>


    <?php } ?>





  </tbody>
</table>