<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style>
    

      .border {
            border: 1px solid #13C571 !important;
            border-radius: 30px;
        }
        </style>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-md-9 col-lg-6 col-xl-5 p-3">
      <img class="img-fluid" src="../assets/images/Frame.png">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 p-3 border">
      <div class="row mt-5">
                                <div class="col">
                                    <p class="lead fw-normal mb-0 me-3">Welcome to <a href="<?php echo base_url();?>" style="color:#13C571;">Celnow </a></p>
                                    <h3 class="card-title mb-3 ">Log in</h3>

                                </div>

                                <div class="col ml-4">
                                    <a style="color:lightgrey;">No Account?</a><br>
                                    <a href="<?php echo base_url();?>welcome/signup" style="color:#13C571;" class="">Sign Up</a>
                                </div>
                            </div>
        <form action="<?php echo base_url();?>welcome/login" method="post">
        
        <?php  if($error=$this->session->flashdata('Login_failed')){  ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-danger ">
                                    <?= $error; 

                               unset($_SESSION['Login_failed']);
              ?>

                                </div>
                            </div>
                        </div>

                        <?php } ?>



                        <?php  if($otpsent =$this->session->flashdata('otp_sent')){  ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-success">
                                    <?= $otpsent; 
                             
                             unset($_SESSION['otp_sent']);
              ?>
                                </div>
                            </div>
                        </div>

                        <?php } ?>

          <!-- Email input -->
          <div class="form-outline mb-4">
          <label class="form-label">Enter Your Mobile</label>
                                    <input name="phone" class="form-control form-control-lg" placeholder="Mobile" type="number" 
                                        style="border-radius:30px; border-color:#13C571">
                                        <span style="color:red;"> <?php echo form_error('phone'); ?></span>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
          <label class="form-label">Enter Your Password</label>
                                    <input name="password" class="form-control form-control-lg" placeholder="Password" type="password" 
                                        style="border-radius:30px; border-color:#13C571">
                                        <span style="color:red;"><?php  echo form_error('password'); ?></span>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              
             
            </div>
            <a href="<?php echo base_url();?>welcome/forgotpassword" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
          <center><button class=" mb-2 btn btn-lg  text-white mt-3"
                                        style="background-color:#13C571;border-radius:30px;width:40%;"
                                       name="submit" type="submit">Login</button>

                                </center>
          </div>

        </form>
      </div>
    </div>
  </div>
  
</section>