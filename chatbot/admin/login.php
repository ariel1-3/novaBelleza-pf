<?php require_once('../config.php') ?>
<!DOCTYPE html>
<html lang="es" class="" style="height: auto;">
 <?php require_once('inc/header.php') ?>
 

<body class="hold-transition login-pages">
  <script>
    start_loader()
  </script>

    <!-- SIDEBAR -->

    <!-- NAVBAR -->

<div class="login-box">
  <!-- desde aquiiiiii -->
  <!-- /.login-logo -->
  <div class="card card-outline ">
    <div class="card-header ">
      <a href="./" class="h3"><b>Configurar chatbot</b></a>


    </div>


    
    <div class="card-body">
      <!-- <p class="login-box-msg">Ingrese para iniciar su sesión</p> -->

      <form style="border-radius: 100px;" padding= "25px 30px;" id="login-frm" action="" method="post">


   
      <!-- <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Usuario">
          <div class="input-group-append">
          </div>
        </div>
        <label> Contraseña </label>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Contraseña" >
           
          <div class="input-group-append">
          </div>
        </div>
        <div class="row" >
          <div class="col-8">
            </div> -->
            <!-- /.col -->
            
            <div class="col-5 " >
              <button type="submit"  class="btn btn-primary btn-block"  >Ingresar</button>
            </div>
            <a href="<?php echo base_url ?>">Ir al website del chat</a>
         
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->
      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
<script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function(){
    end_loader();
  })
</script>
</body>


<!-- inicio pruebaaaa -->






</html>