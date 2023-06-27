<div class="container bg-3 divpad space-top">  
<center><img  class="img-fluid" src="<?php echo base_url();?>assets/images/terms.png">  </center>
  <h3 class="text-center">Help and Support</h3><br>
  <div class="row" style="margin-bottom: 30px;">
    

  
  <?php

  //print_r($help_support);

echo $help_support['0']['help_support'];

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