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

      <a href="../admin/dashboard.php" class="logo">Administrador<span></span></a>

      <nav class="navbar">
         <a href="../admin/dashboard.php">Garantías</a>
         <a href="../admin/survey.php">Encuestas</a>
         <a href="../admin/messages.php">Mensajes</a>
         
         
      </nav>

      
      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `admins` WHERE id = ?");
            $select_profile->execute([$admin_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile['name']; ?></p>
         <a href="../admin/update_profile.php" class="btn">Actualizar perfil</a>
         <div class="flex-btn">
            <a href="../admin/register_admin.php" class="option-btn">Regístrate</a>
            <a href="../admin/admin_login.php" class="option-btn">Iniciar sesión</a>
         </div>
         <a href="../components/admin_logout.php" class="delete-btn" onclick="return confirm('¿Seguro desea salir?');">Salir</a> 
      </div>

   </section>

</header>