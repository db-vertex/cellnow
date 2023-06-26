<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


 

  <title>Sellerprofile</title>
  <style>
   
    img.rounded-corners {
      border-radius: 50%;
    }

    #a {
      margin-right: 10px;
      border-color: #;
      border-radius: 60px;
      font-family: open sans;
      font-weight: 550;
      font-size: 18px;
      padding: 4px 18px;

    }
    .related_ads_details_button {
    box-sizing: border-box;

    /* Auto layout */

    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 7.42857px 6.5714px;
    gap: 4.71px;

    width: 85.43px;
    height: 26.86px;

    background: #10B981;
    /* C2/B */

    border: 1.57143px solid #46760A;
    border-radius: 25.42857px;

    /* Inside auto layout */

    flex: none;
    order: 0;
    align-self: center;
    flex-grow: 0;
}

    #a:visited {
      color: #;

    }

    #a:hover {
      color: white;
      background-color: #;

    }


    #b {

      border: 1px solid #;
      rder-radius: 25px;
      font-size: 12px;

    }

    #b:visited {
      color: #;
      border-color: #;
    }

    #b:hover {
      color: white;
      background-color: #;
    }

    .va-thumbnail {
        border-radius: 6px;
        border: 0px;
        width: 100%;
        max-height: 200px;
        min-height: 200px;
    }
  </style>
</head>


<body>



  <div class="container-fluid " style=" margin-top: 110px;">
    <img src="<?php echo base_url(); ?>assets/images/Rectangle 32336.png" class="img-fluid" width="100%" alt="">
  </div>


  <div class="container">
    <h3 class="m-5 mb-3"><b>My Favorites Ads</b></h3>
    <div class="row" style="margin-left:30px; margin-right:30px;">
      <?php $favroite = get_all_favroite($user["user_id"]);

      if (!empty($favroite)) {
        foreach ($favroite as $value) {


          $product_id = $value->product_id;
          if ($value->category_id == 1) {


            $pro = get_all_category_reusable_parts($product_id);
           

          }
             else if($value->category_id==2){
               $pro = get_all_category_tuitions($product_id);
           }
            else if($value->category_id==3){
                $pro = get_all_category_job($product_id);
             }
             else if($value->category_id==4){
                $pro = get_all_category_internships($product_id);
               
             }
      
          $wishlist = 0;
          if (!empty($user) && isset($user)) {
            $wishlit = get_wishlist($pro->id, $pro->category_id, $user["user_id"]);

            if (empty($wishlit)) {

              $wishlist = 0;


            } else {

              $wishlist = 1;

            }
          } else {
            $wishlist = 0;
          }
          ?>
          <!-- <center><img src="<?php echo base_url(); ?>assets/images/no_product .png"></center> -->





          <div class="col-lg-3 col-md-4 col-sm-6 mb-4 post">
                    <div class="card">
                        <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                            <a
                                href="<?php echo base_url();?>welcome/productdetail/<?php echo $pro->category_id; ?>/<?php echo $pro->id; ?>/<?php echo $pro->subcategory_id; ?>"><img
                                    src="<?php echo base_url(); ?><?php echo $pro->cover_img ?>"
                                    class="w-100 va-thumbnail" /></a>
                                    <p style="margin-left:5px;"> 
                                    <?php if($pro->pay_type ==1){ ?>
                                      <img class="img-fluid image2"
                                src="<?php echo base_url(); ?>assets/images/sponsor.png" style="
   width:80px; ">
                            <?php } if($pro->verified_product ==1){ ?>
                            <img class="img-fluid image3" src="<?php echo base_url(); ?>assets/images/verified.png" style="
   width:80px; ">
                      

                            <?php }?>
                        </p>
                            <a href="#!">

                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="dress-name"><b><?php
                           $title = $pro->title;
                            if(strlen($title) <= 10)
                              {
                                echo ucfirst($title);
                              }
                              else
                              {
                                $y = substr($title,0,10) . '...';
                                echo ucfirst($y);
                              }
                           
                           ?></b></p>
                            <a  style="font-size:15px; color:#69d3b0; padding: 0px;" <?php if (empty($user) || !isset($user)) { ?>
                                href="<?php echo base_url(); ?>welcome/login" <?php } else { ?>><i lass="bi bi-suit-heart" aria-hidden="true"
                                style="font-size:15px; color:#69d3b0; padding: 0px;"
                               
                                data-uid="<?php echo $user["user_id"]; ?>" <?php } ?>
                                class="<?php echo ($wishlist == 0) ? 'fa fa-heart-o' : 'fa fa-heart'; ?> dddssaaf dddssaaf<?php echo $pro->id; ?>"
                                data-pid="<?php echo $pro->id; ?>"
                                data-cid="<?php echo $pro->category_id; ?>"
                                data-wishlist="<?php echo $wishlist; ?>"></i></a>
                                <?php if($pro->category_id != 4 && $pro->pay_type !=2){ ?>
                         <p class="details_price">₹<?php echo $pro->price; ?>
                                </p>
<?php } ?>

                            </div>
                            <div class="d-flex justify-content-between align-items-center">

                                <p style="color: #575757;"><?php
                           $title = $pro->Description;
                            if(strlen($title) <= 20)
                              {
                                echo ucfirst($title);
                              }
                              else
                              {
                                $y = substr($title,0,20) . '...';
                                echo ucfirst($y);
                              }
                           
                           ?></p>

                            </div>
                            <?php if($pro->category_id==1){
                  ?>
                                <div class="row mt-1">
                                    <div class="col-4">
                                        <p style="color: #575757;">Type</p>
                                    </div>
                                    <div class="col-8">
                                        <p style="color: #575757;"><?php echo $pro->type; ?></p>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-4">
                                        <p style="color: #575757;">Brand</p>
                                    </div>
                                    <div class="col-8">
                                        <p style="color: #575757;"><?php echo $pro->brand; ?></p>
                                    </div>
                                </div>
                                <?php } else if($pro->category_id==2){
                   $type_name = get_product_type_name($pro->type); 
                  ?>
                   <div class="row mt-1">
                                    <div class="col-6">
                                        <p style="color: #575757;">Education Type</p>
                                    </div>
                                    <div class="col-6">
                                        <p style="color: #575757;"><?php echo $type_name; ?></p>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-6">
                                        <p style="color: #575757;">Tuitions Location</p>
                                    </div>
                                    <div class="col-6">
                                        <p style="color: #575757;"><?php echo $pro->Tuitions_loction; ?></p>
                                    </div>
                                </div>
                            
                                <?php } else if($pro->category_id==4){ 
                              
                  $type_name = get_product_type_name($pro->Job_type); 
              
                  ?>
                  <div class="row mt-1">
                                    <div class="col-6">
                                        <p style="color: #575757;">Job Type</p>
                                    </div>
                                    <div class="col-6">
                                        <p style="color: #575757;"><?php echo $type_name; ?></p>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-6">
                                        <p style="color: #575757;">Job Location</p>
                                    </div>
                                    <div class="col-6">
                                        <p style="color: #575757;"><?php echo $pro->Job_Location; ?></p>
                                    </div>
                                </div>
                              
                                <?php } else if($pro->category_id==3){ 
                              
                              $type_name = get_product_type_name($pro->Job_type); 
                          
                              ?>
                              <div class="row mt-1">
                                                <div class="col-6">
                                                    <p style="color: #575757;">Job Type</p>
                                                </div>
                                                <div class="col-6">
                                                    <p style="color: #575757;"><?php echo $type_name; ?></p>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-6">
                                                    <p style="color: #575757;">Job Location</p>
                                                </div>
                                                <div class="col-6">
                                                    <p style="color: #575757;"><?php echo $pro->Job_Location; ?></p>
                                                </div>
                                            </div>
                                <?php } ?>
                            <div class="d-flex justify-content-between align-items-center">
                                <p> <img style="max-width:25px;" src="<?php echo base_url();?>assets/images/location .png"></p> 
                                <p style="color: #575757;"><?php
                           $title = $pro->address;
                            if(strlen($title) <= 12)
                              {
                                echo ucfirst($title);
                              }
                              else
                              {
                                $y = substr($title,0,12) . '...';
                                echo ucfirst($y);
                              }
                           
                           ?></p>
                                <a
                                    href="<?php echo base_url();?>welcome/productdetail/<?php echo $pro->category_id; ?>/<?php echo $pro->id; ?>/<?php echo $pro->subcategory_id; ?>">
                                    <p class="related_ads_details_button ">
                                        <spam class="related_ads_details_button_text">Product Detail</spam>
                                    </p>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>


        <?php }
      } else { ?>
        <center><img src="<?php echo base_url(); ?>assets/images/no_product .png"></center>
      <?php } ?>


    </div>
  </div>




</body>

</html>

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