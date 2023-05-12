<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Dashboard</title>
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/square/blue.css">

 
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">

    <p class="login-box-msg"><b>Sign In</b></p>
    <center><img class="btn-change " src="<?php echo base_url();?>assets/images/CelNow 5 1.png"  class="img-fluid" ></center>

<?php  if($error=$this->session->flashdata('Login_failed')){  ?>
<div class="row">
<div class="col-lg-12">
<div class="alert alert-danger">
<?= $error; ?>
</div>
</div>
</div>

<?php } ?>

<?php  if($error=$this->session->flashdata('logut_success')){  ?>
<div class="row">
<div class="col-lg-12">
<div class="alert alert-success">
<?= $error; ?>
</div>
</div>
</div>

<?php } ?>


<?php  if($error=$this->session->flashdata('password_changed')){  ?>
<div class="row">
<div class="col-lg-12">
<div class="alert alert-success">
<?= $error; ?>
</div>
</div>
</div>

<?php } ?>





<?php  echo form_open('admin/login');  ?>

    
        <!--<div style="height:110px; width:100%; padding:10px">-->
            
        <!--    <img src="https://dbvertex.com/classified/assets/images/Logo.png" style="margin-left:25%;" width="50%" height="100%">-->
        <!--</div>-->
      <div class="form-group has-feedback">
      <div>
          <?php echo form_input(['class'=>'form-control form-control-user span12','placeholder'=>'Email','name'=>'email','value'=>set_value('email')]);  ?>
        </div>
        <div class="form-group has-feedback">
           <?php  echo form_error('email');  ?>
        
        </div>
      </div>
      <div class="form-group has-feedback">
      <div>
        <?php  echo form_password(['class'=>'form-control form-control-user span12','type'=>'password','placeholder'=>'Password','name'=>'pass','value'=>set_value('pass')]); ?>
       </div>
          <div class="form-group has-feedback">
           <?php  echo form_error('pass');  ?>
           </div>
        
      </div>
      <div class="row">
       
        <!-- /.col -->
        <div class="col-xs-4">
         <?php  echo form_submit(['type'=>'submit','class'=>'btn btn-primary btn-block','value'=>'Login']);  ?>
        </div>
        <!-- /.col -->
      </div>
      <?php echo form_close(); ?>

    
    <!-- /.social-auth-links -->

 <!--   <a href="#">I forgot my password</a><br>-->
   
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>assets/plugins/iCheck/icheck.min.js"></script>
<script>

</script>
</body>
</html>
