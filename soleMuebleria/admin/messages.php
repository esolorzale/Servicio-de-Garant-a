<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
    header('location:admin_login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="../css/admin_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>

    <?php include '../components/admin_header.php'; ?>

    <script src="../js/admin_script.js"></script>
    <h1 class="heading"> </h1>

    <h1 class="heading">Reporte de mensajes</h1>


    <form action="" method="GET">

        <div class="row">

            <div class="col-md-4">

                <div class="form-group">
                    <label><b>Del Dia</b></label>
                    <input type="date" name="from_date" value="<?php if (isset($_GET['from_date'])) {
                        echo $_GET['from_date'];
                    } ?>" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label><b> Hasta el Dia</b></label>
                    <input type="date" name="to_date" value="<?php if (isset($_GET['to_date'])) {
                        echo $_GET['to_date'];
                    } ?>" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label><b></b></label> <br>
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </div>
        </div>
        <br>


    </form>


    <div class="container my-4">
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
                if (isset($_GET['from_date']) && isset($_GET['to_date'])) {
                    $from_date = $_GET['from_date'];
                    $to_date = $_GET['to_date'];

                    $sql = "select * from messages WHERE dateM BETWEEN '$from_date' AND '$to_date' ";

                    $result = $conn->query($sql);
                    if (!$result) {
                        die("Invalid query!");
                    }
                    while ($row = $result->fetch_assoc()) {
                        echo "
      <tr>
           <th>$row[id]</th>
           <th>$row[dateM]</th>
           <td>$row[name]</td>
           <td>$row[email]</td>
           <td>$row[number]</td>
           <td>$row[message]</td>
       
           <td>
              <a class='btn btn-danger' href='deleteMessage.php?id=$row[id]'>Delete</a>
           </td>
      </tr>
";
                    }
                }
                ?>
            </tbody>
        </table>
        <a href="../admin/excelM.php" class="btn-small blue z-depth-2"  >DESCARGAR REPORTES EN EXCEL</a>

    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>





</body>

</html>