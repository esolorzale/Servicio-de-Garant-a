<?php

include 'components/connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>garantía</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>



<h1 class="heading">Seguimiento de Garantías</h1>

<section class="search-form">
   <form action="" method="post">
      <input type="text" name="search_box" placeholder="Escribe tu número telefónico" maxlength="100" class="box" required>
      <button type="submit" class="fas fa-search" name="search_btn"></button>
   </form>
</section>



<section class="orders">

   <div class="box-container">

   <?php
         if(isset($_POST['search_box']) OR isset($_POST['search_btn'])){
            $search_box = $_POST['search_box'];
            $select_guarantee = $conn->prepare("SELECT * FROM `guarantee` WHERE phone LIKE '%{$search_box}%'"); 
            $select_guarantee->execute();
            if($select_guarantee->rowCount() > 0){
             while($fetch_guarantee = $select_guarantee->fetch(PDO::FETCH_ASSOC)){
               
   ?>

   <div class="box">
      
      <p>Solicitud recibida el dia: <span><?= $fetch_guarantee['dateG']; ?></span></p>
      <p>Nombre: <span><?= $fetch_guarantee['name']; ?></span></p>
      <p>Apellido: <span><?= $fetch_guarantee['lastName']; ?></span></p>
      <p>Artículo: <span><?= $fetch_guarantee['article']; ?></span></p>
      <p>Falla <span><?= $fetch_guarantee['failure']; ?></span></p>
      <p>Accesorios <span><?= $fetch_guarantee['accessory']; ?></span></p>
      <p>Estatus de la garantía <span><?= $fetch_guarantee['status']; ?></span></p>

      
      
   </div>
   <?php
      }
      }else{
         echo '<p class="empty">Aún no existe algún Servicio de Garantía</p>';
      }
   }
   ?>

   </div>

</section>




<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>