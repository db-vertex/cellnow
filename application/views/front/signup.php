<!DOCTYPE html>
<html lang="en">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
<!------ Include the above in your HEAD tag ---------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />

<head>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .alert-dan {
            color: #721c24;
            background-color: lightpink;
            /* border-color: #f5c6cb; */
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .inp-icon {
            box-sizing: border-box;
            width: 250px;
            background-image: url('https://dbvertex.com/classified/assets/images/Group 483.png');
            background-size: 20px;
            background-repeat: no-repeat;
            border-radius: 1px;
            padding-left: 5px;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        *:focus {
            outline: none;
        }

        input {
            border-top-style: hidden;
            border-right-style: hidden;
            border-left-style: hidden;
            border-bottom-style: groove;
        }

        #invalid_ {
            color: red;
        }

        input:focus,
        input.form-control:focus {
            outline: none !important;
            outline-width: 0 !important;
            box-shadow: none;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;

        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        .border {
            border: 1px solid #13C571 !important;
            border-radius: 30px;
        }
        .Signup_header{
            padding-bottom: 0px;
          border-bottom: 6px solid #10B981;
        }
        .card-title_Login {
        font-family: 'Lexend';
        font-style: normal;
        font-weight: 600;
    }
    </style>
</head>
<script>
    function checkUserName() {
        var userNames = document.getElementById("verify").value;
        var SubBtn = document.getElementById("demo");
        if (userNames.length >= 4) {
            SubBtn.disabled = false;
        } else {
            SubBtn.disabled = true;
        }
    }
</script>

<body>
    <main style="margin-top: 135px;">
        <div class="container " style="margin-top:20px">

            <div class="row " style="min-height:90%;">
                <div class="col-lg-6 col-sm-12 ps-0">
                    <div class="h-100 p-5 ">
                        <img class="img-fluid" src="<?php echo base_url()?>/assets/images/signup.png">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 ps-4 pe-4" style="align-self: center;">
                    <div class="card  border p-4">
                        <article class="card-body">
                        <center><p class="lead card-title_Login fw-normal mb-0 me-3">Welcome to <a href="<?php echo base_url();?>" class="text-decoration-none"  style="color:#13C571;"><b>CelNow </b></a></p>
                        <h2 class="card-title card-title_Login mb-4 mt-1">Sign up</h2></center>
                            <form action="<?php echo base_url()?>welcome/signup" method="post">
                                <div class="form-group ">
                                    <label>Enter Your Email</label>
                                    <input name="email" class="form-control" placeholder="Email" type="text" maxlength="40" value="<?php echo set_value('email'); ?>"
                                        style="border-radius:30px; border-color:#13C571">
                                        <span style="color:red;"><?php echo form_error('email'); ?></span>
                                </div> <!-- form-group// -->
                                <div class="row ">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> Full Name</label>
                                            <input name="name" class="form-control" placeholder="Name" type="text" maxlength="30" value="<?php echo set_value('name'); ?>"
                                                style="border-radius:30px; border-color:#13C571">
                                                <span style="color:red;"> <?php echo form_error('name'); ?></span>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> Mobile</label>
                                            <input name="phone" class="form-control" placeholder="Mobile" type="number" value="<?php echo set_value('phone'); ?>"
                                                style="border-radius:30px; border-color:#13C571">
                                                <span style="color:red;"> <?php echo form_error('phone'); ?></span>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">

                                    <label> Password</label>
                                    <input name="password" class="form-control" placeholder="******" type="password" maxlength="20" value="<?php echo set_value('password'); ?>"
                                        style="border-radius:30px; border-color:#13C571">
                                        <span style="color:red;"><?php  echo form_error('password'); ?></span>
                                </div> <!-- form-group// -->
                                <div class="form-group">

                                    <label> Confirm Password</label>
                                    <input name="confirmpassword" class="form-control" placeholder="******" type="password" maxlength="20" value="<?php echo set_value('confirmpassword'); ?>"
                                        style="border-radius:30px; border-color:#13C571">
                                        <span style="color:red;"> <?php echo form_error('confirmpassword'); ?></span>
                                </div> <!-- form-group// -->



                                <center><button class=" card-title_Login  mb-2 btn btn-lg  text-white mt-2"
                                        style="background-color:#13C571;border-radius:30px;width:40%;"
                                        type="submit" name="submit">Sign up</button>

                                </center>
                            </form>
                        </article>
                    </div>


                </div>

            </div>


        </div>
    </main>


</body>

</html>