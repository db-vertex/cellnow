<div class="container bg-3 divpad" style="margin-top:8%;">   
<center><img  class="img-fluid" src="<?php echo base_url();?>assets/images/privacy.png">  </center> 
  <h3 class="text-center">Privacy Policy</h3><br>
  <div class="row" style="margin-bottom: 30px;">
    


  
  <?php

  //print_r($privacy);

echo $privacy['0']['privacy_policy'];

   ?>

   </div>

</div>

<script>
    "use strict"; /* Start of use strict */
    (function() {
        function14();
    })();

    function function14() {
        $('.btnSweetalert').on("click", function() {
            swal({
                    title: " Logout!",
                    text: "Are you sure you want to logout?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes",
                    cancelButtonText: "No",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm) {
                    if (isConfirm) {

                        window.location.href = "<?php echo base_url();?>welcome/logout";
                    } else {
                        swal("Cancelled", "Something went wrong. Please try again.)", "error");
                    }
                });
        });
    }
    </script>