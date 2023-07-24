<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename= archivo.xls");


?>

<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Fecha</th>
        <th>Facilidad de Uso</th>
        <th>Calidad en la Atención</th>
        <th>Tiempo de Atención</th>
        <th>Recomendación del Servicio</th>
        <th>Comentarios del Cliente</th>
        
        
      </tr>
    </thead>
    <tbody>
      <?php
        include "../admin/connection.php";
        $sql = "select * from survey";
        $ejecutar=mysqli_query($conn, $sql);
        while ($fila=mysqli_fetch_array($ejecutar)){

          
        
      ?>
      <tr>
        <td><?php echo $fila[0] ?></td>
        <td><?php echo $fila[1] ?></td>
        <td><?php echo $fila[2] ?></td>
        <td><?php echo $fila[3] ?></td>
        <td><?php echo $fila[4] ?></td>
        <td><?php echo $fila[5] ?></td>
        <td><?php echo $fila[6] ?></td>
      </tr>


      <?php } ?>





    </tbody>
  </table>