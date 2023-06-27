<div class="container bg-3 divpad space-top">  
<center><img  src="<?php echo base_url();?>assets/images/terms.png">  </center>
  <h3 class="text-center">FAQs</h3><br>
  <div class="row" style="margin-bottom: 30px;">
    

  
  <?php

  //print_r($help_support);

echo $FAQs['0']['FAQs'];

   ?>
<!-- <button id="share"><i class="fa fa-share-alt" style="float:right;" aria-hidden="true"></i> </button>


      <script type="text/javascript">
        
           $("#share").click(function(){


/*alert();*/

    if (navigator.share) {

          navigator.share({

                title: 'Pahadi Uncle',
                text: 'Product detail',
                url: 'adaasdasd',

          })

    .then(() => console.log('Successful share'))

    .catch((error) => console.log('Error sharing', error));

}


});
      </script>
 -->
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