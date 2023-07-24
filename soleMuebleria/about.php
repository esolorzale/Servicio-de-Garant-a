<?php

include 'components/connect.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/solemuebleria.png" alt="">
      </div>

      <div class="content">
         <h3>Nuestra Misión</h3>
         <p>Mejorar la calidad de vida de nuestros clientes, facilitándoles los mejores momentos en casa, por medio de la completa satisfacción de sus necesidades de amueblado y componentes electrónicos.</p>
         <a href="contact.php" class="btn">Contáctanos</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Opiniones de Nuestros Clientes</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/hombre.png" alt="">
         <p>Muy buena atención en su página de Servicio de Garantías, recomiendo esta página </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            
         </div>
         <h3>Ulises Rivera </h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/mujer2.png" alt="">
         <p>Excelente tienda, buenos productos de excelente calidad. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Cinthia Perez</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/hombre2.png" alt="">
         <p>Me gusta esta página, tengo la gran posibilidad de dar seguimiento a mis productos </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Juan Valverde</h3>
      </div>

         

      

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>