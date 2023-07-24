<?php

include 'components/connect.php';

if(isset($_POST['send'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);

   $lastName = $_POST['lastName'];
   $lastName = filter_var($lastName, FILTER_SANITIZE_STRING);

   $motherLast = $_POST['motherLast'];
   $motherLast = filter_var($motherLast, FILTER_SANITIZE_STRING);

   $phone = $_POST['phone'];
   $phone = filter_var($phone, FILTER_SANITIZE_STRING);

   $street = $_POST['street'];
   $street = filter_var($street, FILTER_SANITIZE_STRING);
    
   $interiorNumber = $_POST['interiorNumber'];
   $interiorNumber = filter_var($interiorNumber, FILTER_SANITIZE_STRING);
    
   $exterioNumber = $_POST['exterioNumber'];
   $exterioNumber = filter_var($exterioNumber, FILTER_SANITIZE_STRING);
    
   $colony = $_POST['colony'];
   $colony = filter_var($colony, FILTER_SANITIZE_STRING);
    
   $postalCode = $_POST['postalCode'];
   $postalCode = filter_var($postalCode, FILTER_SANITIZE_STRING);
     
   $city = $_POST['city'];
   $city = filter_var($city, FILTER_SANITIZE_STRING);
     
   $state = $_POST['state'];
   $state = filter_var($state, FILTER_SANITIZE_STRING);
     
   $article = $_POST['article'];
   $article = filter_var($article, FILTER_SANITIZE_STRING);
     
   $failure = $_POST['failure'];
   $failure = filter_var($failure, FILTER_SANITIZE_STRING);
      
   $accessory = $_POST['accessory'];
   $accessory = filter_var($accessory, FILTER_SANITIZE_STRING);

   $comment = $_POST['comment'];
   $comment = filter_var($comment, FILTER_SANITIZE_STRING);

   $status = $_POST['status'];
   $status = filter_var($status, FILTER_SANITIZE_STRING);

   $select_message = $conn->prepare("SELECT * FROM `guarantee` WHERE name = ? AND lastName = ? AND motherLast = ? AND phone = ? AND street = ?
   AND interiorNumber = ? AND exterioNumber = ? AND colony = ? AND postalCode = ? AND city = ? AND state = ? AND article = ? AND failure = ? 
   AND accessory = ? AND comment = ? AND status = ?");
   $select_message->execute([$name, $lastName, $motherLast, $phone, $street, $interiorNumber, $exterioNumber, $colony, $postalCode, $city, $state, 
   $article, $failure, $accessory, $comment, $status]);

   if($select_message->rowCount() > 0){
      $message[] = 'Servicio de Garantía Enviado';
   }else{

      $insert_message = $conn->prepare("INSERT INTO `guarantee`(name, lastName, motherLast, phone, street, interiorNumber, 
      exterioNumber, colony, postalCode, city, state, article, failure, accessory, comment, status) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
      $insert_message->execute([$name, $lastName, $motherLast, $phone, $street, $interiorNumber, $exterioNumber, $colony, $postalCode, $city, $state, 
      $article, $failure, $accessory, $comment, $status]);

      $message[] = 'Servicio de Garantía enviado con éxito, Recuerda que el número de teléfono que registraste será tu número para seguimiento, por favor anótalo
      ';

   }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SoleMueblería</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">



</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<div class="home-bg">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/solemuebleria.png" alt="">
         </div>
         <div class="content">
            <span>BIENVENIDO </span>
            <h3>SERVICIO DE GARANTÍA </h3>
            <a href="contact.php" class="btn">Contacto directo</a>
         </div>
      </div>


    </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>


<section class="contact">

   <form action="" method="post">
      <h3>COMPÁRTENOS TUS DATOS</h3>
      <input type="text" name="name" placeholder="Nombre" required maxlength="20" class="box">
      <input type="text" name="lastName" placeholder="Apellido paterno" required maxlength="20" class="box">
      <input type="text" name="motherLast" placeholder="Apellido materno" required maxlength="20" class="box">
      <h2>NÚMERO PARA TU SEGUIMIENTO</h2>
      <input type="text" name="phone" placeholder="Número de teléfono" required maxlength="20" class="box">
      <h2>DOMICILIO</h2>
      <input type="text" name="street" placeholder="Calle" required maxlength="20" class="box">
      <input type="text" name="interiorNumber" placeholder="Número interior" required maxlength="20" class="box">
      <input type="text" name="exterioNumber" placeholder="Número exterior" required maxlength="20" class="box">
      <input type="text" name="colony" placeholder="Colonia" required maxlength="20" class="box">
      <input type="text" name="postalCode" placeholder="Código postal" required maxlength="20" class="box">
      <input type="text" name="city" placeholder="Ciudad" required maxlength="20" class="box">
      <input type="text" name="state" placeholder="Estado de la República" required maxlength="20" class="box">
      <h1>¿QUE ARTICULO VAS A REPORTAR?</h1>

      <select name="article" class="box" required>
               <option value="Refrigerador">Refrigerador</option>
               <option value="Lavadora">Lavadora</option>
               <option value="Equipo de sonido">Equipo de sonido</option> 
               <option value="Computadora de escritorio">Computadora de escritorio</option>
               <option value="Laptop">Laptop</option>
               <option value="Bocina">Bocina</option>

      </select>
      <h1>TIPO DE FALLA</h1>

      <select name="failure" class="box" required>
               <option value="No enciende">No enciende</option>
               <option value="Huele a quemado">Huele a quemado</option>
               <option value="Se apaga">Se apaga</option> 
               
      </select>
      <input type="text" name="accessory" placeholder="Accesorio que entregas" required maxlength="50" class="box">
      <textarea name="comment" class="box" placeholder="Cuentanos con tus propias palabras la falla que esta presentando." cols="30" rows="10"></textarea>
      <input type="hidden" name="status" value="Solicitud recibida, siendo procesada por el adminitrador.">

      <input type="submit" value="Enviar solicitud" name="send" class="btn">
   </form>

</section>





<?php include 'components/footer.php'; ?>

</body>
</html>