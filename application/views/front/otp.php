<!DOCTYPE html>
<html lang="en">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
    <main>
        <div class="container py-4" style="margin-top:100px">

            <div class="row " style="min-height:90%;">
                <div class="col-md-6 col-sm-12 ps-0">
                    <div class="h-100 p-5 ">
                        <img class="img-fluid" src="../assets/images/otp.png">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 pe-0">
                    <div class="card  border p-4">
                        <article class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p>Welcome to <a href="" style="color:#13C571;">Celnow </a></p>
                                    <h2 class="card-title mb-3 ">Otp</h2>

                                </div>

                                <div class="col ml-4">
                                    <a href="" style="color:lightgrey;">Have an Account?</a><br>
                                    <a href="" style="color:#13C571;" class="">Sign in</a>
                                </div>
                            </div>
                            <form>
                                <div class="form-group mt-2">
                                    <label>Enter Your Otp</label>
                                    <input name="" class="form-control" placeholder="Otp" type="email"
                                        style="border-radius:30px; border-color:#13C571">
                                       
                                </div> <!-- form-group// -->
                                
<center> <a href="#!" class="text-body">Resend otp</a></center>

                                <center><button class=" mb-3 btn btn-lg  text-white mt-3"
                                        style="background-color:#13C571;border-radius:30px;width:40%;"
                                        type="submit">Send</button>

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