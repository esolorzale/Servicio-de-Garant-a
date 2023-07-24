<?php
  include "../admin/connection.php";
  $id="";
  $name="";
  $email="";
  $phone="";

  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:admin_login.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "select * from guarantee where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location:admin_login.php");
      exit;
    }
    $status=$row["status"];

  }
  else{
    $id= $_POST["id"];
    $status= $_POST["status"];
    

    $sql = "update guarantee set status='$status' where id='$id'";
    $result = $conn->query($sql);
    
  }
  
?>
<!DOCTYPE html>
<html>
<head>
 <title>solemueblería</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
  
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-warning">
 <h1 class="text-white text-center">  Modificar Estatus  </h1>
 </div><br>

 <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>

 <label> Escribe el nuevo estatus de la orden: </label>
 <input type="text" name="status" value="<?php echo $name; ?>" class="form-control"> <br>



 <button class="btn btn-success" type="submit" name="submit"> Modificar </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="../admin/dashboard.php"> Regresar </a><br>

 </div>
 </form>
 </div>
</body>
</html>