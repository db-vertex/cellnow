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
        border-radius: 20px;
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


            $product = get_all_category_reusable_parts($product_id);
           

          }
             else if($value->category_id==2){
               $product = get_all_category_tuitions($product_id);
           }
            else if($value->category_id==3){
                $product = get_all_category_job($product_id);
             }
             else if($value->category_id==4){
                $product = get_all_category_internships($product_id);
             }
      
          $wishlist = 0;
          if (!empty($user) && isset($user)) {
            $wishlit = get_wishlist($product->id, $product->category_id, $user["user_id"]);

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






          <div class="col-lg-4 col-md-6 mb-3" id="hide_f">
            <div class="card" style="max-width: 20rem; border-radius: 22px;margin:auto;">
              <img class="va-thumbnail" src="<?php echo base_url(); ?><?php echo $product->cover_img;?>" class="card-img-top" alt="Card image cap">
              <div class="card-block" style="padding:5px">
                <div class="card-title">
                  <div class="row pl-3">
                    <div class="col-6"><b style="font-size:15px">
                    <?php
                           $title =$product->title;
                            if(strlen($title) <= 10)
                              {
                                echo ucfirst($title);
                              }
                              else
                              {
                                $y = substr($title,0,10) . '...';
                                echo ucfirst($y);
                              }
                           
                           ?>
                       
                      </b></div>
                    <div class="col-2">   <i lass="bi bi-suit-heart" aria-hidden="true"
                                style="font-size:18px; color:#69d3b0; padding: 0px;"
                                <?php if (empty($user) || !isset($user)) { ?>
                                href="<?php echo base_url(); ?>welcome/login" <?php } else { ?>
                                data-uid="<?php echo $user["user_id"]; ?>" <?php } ?>
                                class="<?php echo ($wishlist == 0) ? 'fa fa-heart-o' : 'fa fa-heart'; ?> dddssaaf dddssaaf<?php echo $product->id; ?>"
                                data-pid="<?php echo $product->id; ?>"
                                data-cid="<?php echo $product->category_id; ?>"
                                data-wishlist="<?php echo $wishlist; ?>"></i>
                    </div>
                    <div class="col-4" style="color:#10b981">
                      <h6><b>$<?php echo $product->price; ?>
                        </b></h6>
                    </div>
                  </div>
                </div>
                <div class="row pl-3">
                <small class="card-text ">
                <?php
                           $title =$product->Description;
                            if(strlen($title) <= 25)
                              {
                                echo ucfirst($title);
                              }
                              else
                              {
                                $y = substr($title,0,25) . '...';
                                echo ucfirst($y);
                              }
                           
                           ?>
                 
                </small><br>
        </div>

               
                <?php if($product->category_id==1){
                  ?>
                <div class="row pl-3">
                  <div class=col-6><p>Type</p></div>
                  <div class=col-6><p><?php echo $product->type; ?></p></div>
                </div>
                <?php } else if($product->category_id==2){
                   $type_name = get_product_type_name($product->Education_Type); 
                  ?>
                <div class="row pl-3">
                  <div class=col-6><p>Education Type</p></div>
                  <div class=col-6><p><?php echo $type_name; ?><p></div>
                </div>
                <?php } else if($product->category_id==3 && $product->category_id==4){ 
                  $type_name = get_product_type_name($product->Job_type); 
                  ?>
 <div class="row pl-3">
 <div class=col-6><p>Job Type</p></div>
 <div class=col-6><p><?php echo $type_name; ?></p></div>
</div>
<?php } ?>

                <div class="row text-center p-3">
                  <div class="col-1 "><img  src="<?php echo base_url();?>assets/images/location .png" ></i></div>
                  <div class="col-5">
                    <p>
                      <?php echo $product->address; ?>
                    </p>
                  </div>
                  <div class="col-6"> <a
                      href="<?php echo base_url(); ?>welcome/productdetail/<?php echo $product->category_id; ?>/<?php echo $product->id; ?>/<?php echo $product->subcategory_id; ?>"
                      class="btn btn-change" id="a" style="font-size:15px; background-color:#10B981; color:#fff;">Ads
                      Details </a>
                  </div>
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

