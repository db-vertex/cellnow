<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- link for map -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Sellerprofile</title>
  <style>
    html,
    body {
      max-width: 100%;
      overflow-x: hidden;
    }


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
      padding: 4px 32px;

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
  </style>
</head>


<body>



  <div class="container-fluid ">
    <img src="<?php echo base_url(); ?>assets/images/Rectangle 32336.png" class="img-fluid" width="100%" alt="">';
  </div>


  <div class="container">
    <h3 class="ml-5 mb-3"><b>My Favorites Ads</b></h3>
    <div class="row">
      <?php $favroite = get_all_favroite($user["user_id"]);

      if (!empty($favroite)) {
        foreach ($favroite as $value) {


          $product_id = $value->product_id;
          if ($value->category_id == 1) {


            $product = get_all_category_reusable_parts($product_id);

          }
          //   else if($value->category_id==2){
          //       $product = get_all_category_Electronic($product_id);
          //   }
          //   else if($value->category_id==3){
          //       $product = get_all_category_Furniture($product_id);
          //   }
          //   else if($value->category_id==4){
          //       $product = get_all_category_Fashion($product_id);
          //   }
      
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






          <div class="col-lg-4 col-md-6  mb-2">
            <div class="card" style="max-width: 25rem; border-radius: 28px;margin:auto;">
              <img class="va-thumbnail" src="<?php echo base_url(); ?><?php echo $product->cover_img;?>" class="card-img-top" alt="Card image cap">
              <div class="card-block" style="padding:5px">
                <div class="card-title">
                  <div class="row pl-3">
                    <div class="col-6"><b style="font-size:18px">
                        <?php echo ucfirst($product->title); ?>
                      </b></div>
                    <div class="col-2"> <i style="margin-top:-20px;color:#F15927;" data-toggle="modal" data-target="#login"
                        data-uid="<?php echo $user["user_id"]; ?>"
                        class="<?php echo ($wishlist == 0) ? 'fa fa-heart-o' : 'fa fa-heart'; ?> dddssaaf dddssaaf<?php echo $product->id; ?>"
                        data-pid="<?php echo $product->id; ?>" data-cid="<?php echo $product->category_id; ?>"
                        data-wishlist="<?php echo $wishlist; ?>"></i>
                    </div>
                    <div class="col-4" style="color:#10b981">
                      <h5><b>$<?php echo $product->price; ?>
                        </b></h5>
                    </div>
                  </div>
                </div>
                <div class="row pl-3">
                <small class="card-text ">
                  <?php echo ucfirst($product->Description); ?>
                </small><br>
        </div>

                <div class="row pl-3">
                  <div class=col-6>Fresheness </div>
                  <div class=col-6>New(Extra fresh)</div>
                </div>

                <div class="row pl-3">
                  <div class=col-6>Model</div>
                  <div class=col-6><?php echo $product->type; ?></div>
                </div>



                <div class="row text-center p-3">
                  <div class="col-1"><img src="<?php echo base_url();?>assets/images/location .png" ></i></div>
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

<script>
  $(document).on('click', '.dddssaaf', function (e) {
    e.stopPropagation();
    var obj = $(this);
    var pid = $(this).data("pid");
    var cid = $(this).data("cid");
    var uid = $(this).data("uid");
    var status = $(this).data("wishlist");

    if (!uid == 0)
      //   alert(status);
      $.ajax({
        type: "POST",
        url: '<?php echo base_url("Welcome/setwishlist"); ?>',
        cache: false,
        data: { 'product_id': pid, 'user_id': uid, 'category_id': cid },
        error: function () {
          alert('Something is wrong');
        },
        success: function (data) {
          $(".dddssaaf" + pid).toggleClass("fa-heart-o fa-heart");
          if (status == 0) {
            $(this).data("wishlist", 1);
            swal("Product Added in Wishlist Successfully!", "", "success");
          }
          else {
            $(this).data("wishlist", 0);
            swal("Product removed from Wishlist Successfully!", "", "success");
          }
        }
      });


  });
</script>