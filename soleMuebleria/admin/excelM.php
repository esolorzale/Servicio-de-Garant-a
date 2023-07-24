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
      <th>Correo Electrónico</th>
      <th>No. Telefónico</th>
      <th>Mensaje</th>


    </tr>
  </thead>
  <tbody>
    <?php
    include "../admin/connection.php";
    $sql = "select * from messages";
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
        
      </tr>


    <?php } ?>





  </tbody>
</table>