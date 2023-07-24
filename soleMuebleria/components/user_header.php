<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

<header class="header">

   <section class="flex">

      <a href="home.php" class="logo">SOLE MUEBLERÍA<span></span></a>

      <nav class="navbar">
         <a href="home.php">Bienvenido</a>
         <a href="about.php">Nosotros</a>
         <a href="guarantee.php">Tu Seguimiento</a>
         <a href="contact.php">Contáctanos</a>
         <a href="survey.php">Tu Opinión</a>
      </nav>


   </section>

</header>