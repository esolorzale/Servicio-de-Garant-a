<?php

include 'components/connect.php';

if(isset($_POST['send'])){

   $difficulty = $_POST['difficulty'];
   $difficulty = filter_var($difficulty, FILTER_SANITIZE_STRING);

   $attention = $_POST['attention'];
   $attention = filter_var($attention, FILTER_SANITIZE_STRING);

   $time = $_POST['time'];
   $time = filter_var($time, FILTER_SANITIZE_STRING);

   $recommendation = $_POST['recommendation'];
   $recommendation = filter_var($recommendation, FILTER_SANITIZE_STRING);

   $comment = $_POST['comment'];
   $comment = filter_var($comment, FILTER_SANITIZE_STRING);


   $select_message = $conn->prepare("SELECT * FROM `survey` WHERE difficulty = ? AND attention = ? AND time = ? AND recommendation = ? AND comment = ?");
   $select_message->execute([$difficulty, $attention, $time, $recommendation, $comment]);

   if($select_message->rowCount() > 0){
      $message[] = 'Encuesta enviada';
   }else{

      $insert_message = $conn->prepare("INSERT INTO `survey`(difficulty, attention, time, recommendation,comment) VALUES(?,?,?,?,?)");
      $insert_message->execute([$difficulty, $attention, $time, $recommendation, $comment]);

      $message[] = 'Gracias por responder la encuesta, estamos trabajando para mejorar nuestro servicio';

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
            <img src="images/encuesta.png" alt="">
         </div>
         <div class="content">
            <span> </span>
            <h3>Encuesta de satisfacción </h3>
            
         </div>
      </div>


    </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>
<h1>Gracias por utilizar nuestros servicios, a continuación te mostramos una encuesta de satisfacción, la cual nos ayudara a brindarle un mejor servicio.</h1>
<h1>TU OPINIÓN ES COMPLETAMENTE CONFIDENCIAL POR LO QUE NO TE PEDIMOS NINGÚN DATO PERSONAL.</h1>
<h1>Por favor califique del 1 al 10 cada una de las siguientes preguntas, en donde 1 es NADA SATISFECHO y 10 MUY SATISFECHO.</h1>


<section class="contact">

   <form action="" method="post">
      <h2>¿Del 1 al 10, que tan fácil le pareció el uso de esta herramienta? </h2>
      <select name="difficulty" class="box" required>
               <option value="10">10</option>
               <option value="9">9</option>
               <option value="8">8</option> 
               <option value="7">7</option>
               <option value="6">6</option>
               <option value="5">5</option>
               <option value="4">4</option>
               <option value="3">3</option>
               <option value="2">2</option> 
               <option value="1">1</option>

      </select>
      <h2>¿Del 1 al 10, que tan satisfecho está con la atención brindada por el personal en el servicio de garantía? </h2>
      <select name="attention" class="box" required>
              <option value="10">10</option>
               <option value="9">9</option>
               <option value="8">8</option> 
               <option value="7">7</option>
               <option value="6">6</option>
               <option value="5">5</option>
               <option value="4">4</option>
               <option value="3">3</option>
               <option value="2">2</option> 
               <option value="1">1</option>

      </select>
      <h2>¿Del 1 al 10, que le pareció el tiempo en el que fue atendida su solicitud? </h2>
      <select name="time" class="box" required>
               <option value="10">10</option>
               <option value="9">9</option>
               <option value="8">8</option> 
               <option value="7">7</option>
               <option value="6">6</option>
               <option value="5">5</option>
               <option value="4">4</option>
               <option value="3">3</option>
               <option value="2">2</option> 
               <option value="1">1</option>

      </select>
      <h2>¿Del 1 al 10, que tanto recomendaría a sus amigos o familiares nuestro servicio de garantía? </h2>

      <select name="recommendation" class="box" required>
               <option value="10">10</option>
               <option value="9">9</option>
               <option value="8">8</option> 
               <option value="7">7</option>
               <option value="6">6</option>
               <option value="5">5</option>
               <option value="4">4</option>
               <option value="3">3</option>
               <option value="2">2</option> 
               <option value="1">1</option>

      </select>
      


      <textarea name="comment" class="box" placeholder="Déjanos tu comentario" cols="30" rows="10"></textarea>

      <input type="submit" value="Enviar encuesta" name="send" class="btn">
   </form>

</section>





<?php include 'components/footer.php'; ?>

</body>
</html>