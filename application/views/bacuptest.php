<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <!-- link for map -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <title>Verify product details</title>
  <style>
    html,
    body {
      max-width: 100%;
      overflow-x: hidden;
    }


    #a {

      border-color: #78d7b8;
      border-radius: 20px;
      align-items: center;
      background-color: white;


    }


    #a:visited {
      color: black;



    }

    #a:hover {
      color: white;
      background-color: #78d7b8;


    }


    /* for hr line  */
    hr.class-1 {
      border-top: 2px solid #69d3b0;
      width: 120px;
      margin: 3px 0px;
    }


    #b {

      border: 1px solid #78d7b8;
      border-radius: 25px;
      font-size: 12px;
      padding: 8px;
    }

    #b:visited {
      color: #78d7b8;

      border-color: #78d7b8;
    }

    #b:hover {
      color: white;
      background-color: #78d7b8;
    }


    /* rounded card  */

    /* input::placeholder {
  font-size: 16px;
  font-weight: bold;
}
@media screen and (max-width: 992px) {
  input::placeholder  {
     font-size: 12px;
     font-weight: bold;
  }
}
  @media screen and (max-width: 776px) {
  input::placeholder  {
     font-size: 10px;
     font-weight: bold;
  }
}
@media screen and (max-width: 560px) {
  input::placeholder  {
     font-size: 12px;
    font-weight: bold;
  }
}  */




    /* verify shop bottom rounded card  */

    @media screen and (max-width: 992px) {

      #c {

        height: 140px;

      }

      @media screen and (max-width: 768px) {

        #c {

          height: 160px;

        }

      }

      @media screen and (max-width: 490px) {

        #c {

          height: 150px;

        }

      }

      @media screen and (max-width: 400px) {

        #c {

          height: 160px;

        }

      }
    }

    @media screen and (max-width: 315px) {

      #c {

        height: 200px;

      }

    }





    /*for rounded card text  */

    @media screen and (max-width: 992px) {

      #d {

        font-size: 12px;

      }

      @media screen and (max-width: 768px) {
        #d {

          font-size: 18px;

        }

        @media screen and (max-width: 576px) {
          #d {

            font-size: 13px;

          }
        }
      }
    }
  </style>
</head>

<body>



  <div class="container-fluid" style="padding:0px">
    <img src="<?php echo base_url(); ?>assets/images/Rectangle 32336.png" class="img-fluid" width="100%" alt="">
  </div><br>


  <div class="container">
    <div class="row">
      <div class="col p-2"
        style="border-radius:18px;background-image: linear-gradient(to right, #77d4b5 ,#77d4b5 ,#d5fdfc, #f5f5f5);">
        <small style="padding-left:20px">Homepage/Bike/Hayabusa Suzuki</small></div>
    </div>
  </div><br>


  <!-- again  -->
  <?php

  $product_detail = $categories_data;



  $wishlist = 0;
  if (!empty($user) && isset($user)) {
    $wishlit = get_wishlist($product_detail->id, $product_detail->category_id, $user["user_id"]);

    if (empty($wishlit)) {

      $wishlist = 0;


    } else {

      $wishlist = 1;

    }
  } else {
    $wishlist = 0;
  }
  ?>
  <div class="container ">
    <div class="row row justify-content-around">
      <div class="col-lg-5 col-md-5 ">



        <div>


          <div class="images">

            <div class="text-center">
              <?php if ($product_detail->cover_img !== NULL) { ?>
                <img style="min-height:400px; max-height:400px; width: auto; max-width: 500px; border-radius:10px;" id="main-image"
                  src="<?php echo base_url() . $product_detail->cover_img . ""; ?>" width="250" />
              <?php } else { ?>
                <img style="min-height:500px; max-height:500px; width: auto; max-width: 500px;" id="main-image"
                  src="<?php echo base_url(); ?>assets/images/Group 486.png" />

              <?php } ?>
            </div>
          </div>

          <ul class="preview-thumbnail nav  pt-3" style="text-align: -webkit-center;">
            <li class="active" style="text-align: -webkit-center">
              <?php if ($product_detail->cover_img !== NULL) { ?>
                <img style="width:auto; max-width: fit-content; max-width: 100px;" width=80 height=70
                  onclick="change_image(this)" src="<?php echo base_url() . $product_detail->cover_img . ""; ?>" />
              <?php } else {
                echo "";
              } ?>
            </li>


            <li style="text-align: -webkit-center;">
              <?php if ($product_detail->images_2 !== NULL) { ?>
                <img style="width:auto; max-width: fit-content; text-align:center; max-width: 100px; margin-left:30px" width=80 height=70
                  onclick="change_image(this)" src="<?php echo base_url() . $product_detail->images_2 . ""; ?>" />
              <?php } else {
                echo "";
              } ?>

            </li>
          

            <li style="text-align: -webkit-center;">
              <?php if ($product_detail->images_3 !== NULL) { ?>
                <img style="width:auto; max-width: fit-content; text-align:center; max-width: 100px; margin-left:30px" width=80 height=70
                  onclick="change_image(this)" src="<?php echo base_url() . $product_detail->images_3 . ""; ?>" />
              <?php } else {
                echo "";
              } ?>
            </li>
            <li style="text-align: -webkit-center;">
              <?php if ($product_detail->images_4 !== NULL) { ?>
                <img style="width:auto; max-width: fit-content; text-align:center; margin-left:30px" width=80 height=70
                  onclick="change_image(this)" src="<?php echo base_url() . $product_detail->images_4 . ""; ?>" />
              <?php } else {
                echo "";
              } ?>
            </li>
            <li style="text-align: -webkit-center;">
              <?php if ($product_detail->images_5 !== NULL) { ?>
                <img style="width:auto; max-width: fit-content; text-align:center; max-width: 100px;" width=80 height=70
                  onclick="change_image(this)" src="<?php echo base_url() . $product_detail->images_5 . ""; ?>" />
              <?php } else {
                echo "";
              } ?>
            </li>
          </ul>
          <div class="row mt-3" style="border:1px solid #69d3b0;margin:3px">
            <ul class="preview-thumbnail nav ">
              <li><a><i class="fa fa-calendar" aria-hidden="true" style="font-size:18px; color:#69d3b0"></i>
                  <?php function time_elapsed_string($datetime, $full = false)
                  {
                    $now = new DateTime;
                    $ago = new DateTime($datetime);
                    $diff = $now->diff($ago);

                    $diff->w = floor($diff->d / 7);
                    $diff->d -= $diff->w * 7;

                    $string = array(
                      'y' => 'year',
                      'm' => 'month',
                      'w' => 'week',
                      'd' => 'day',
                      'h' => 'hour',
                      'i' => 'minute',
                      's' => 'second',
                    );
                    foreach ($string as $k => &$v) {
                      if ($diff->$k) {
                        $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
                      } else {
                        unset($string[$k]);
                      }
                    }

                    if (!$full)
                      $string = array_slice($string, 0, 1);
                    return $string ? implode(', ', $string) . ' ago' : 'just now';
                  }
                  echo time_elapsed_string($product_detail->created_at); ?>
                </a></li>



              <li><a><i class="fa fa-eye" aria-hidden="true" style="font-size:18px; color:#69d3b0"></i> View</a></li>

              <li> <a class="btn-change" style="color:black;" id="GFG" href="javascript:void(0);" id="share_desk"
                  onclick="window.open('mailto:?subject=<?php echo base_url() . 'welcome/productdetail/' . $product_detail->category_id . '/' . $product_detail->id; ?>');"><i
                    class="fa fa-share-alt" aria-hidden="true" style="font-size:18px; color:#69d3b0 "></i> Share </a>
              </li>
              <li><a class="btn-change" style="color:black; " id="GFG" href="" <?php if (empty($user) || !isset($user)) { ?> data-toggle="modal" data-target="#login" <?php } else { ?> data-toggle="modal"
                    data-target="#report_product" <?php } ?>><i class="fa fa-exclamation-triangle" aria-hidden="true"
                    style="font-size:18px; color:#69d3b0"></i> Report </a></li>

            </ul>
          </div>
        </div>

        <div class="row mt-3">
          <img src="<?php echo base_url(); ?>assets/images/Rectangle 32336.png"
            class="img-responsive center-block d-block mx-auto" width="100%" alt="" style="padding:px">
        </div><br>
      </div>


      <div class="col-lg-6 col-md-7 ">
        <div class="card" style="padding:
     
     0px;border-color:#69d3b0">
          <div class="container" style="padding:2rem;padding-bottom:30px">

            <div class="row">
              <div class="col "> <b style="font-size:20px">
                  <?php echo ucfirst($product_detail->title); ?>
                </b></div>
              <div class="col ">
                <i style="color:#F15927; margin-top:-20px;" <?php if (empty($user) || !isset($user)) { ?>
                    onclick="<?php echo base_url(); ?>welcome/login" <?php } else { ?>
                    data-uid="<?php echo $user["user_id"]; ?>" <?php } ?>
                  class="<?php echo ($wishlist == 0) ? 'fa fa-heart-o' : 'fa fa-heart'; ?> dddssaaf dddssaaf<?php echo $product_detail->id; ?>"
                  data-pid="<?php echo $product_detail->id; ?>" data-cid="<?php echo $product_detail->category_id; ?>"
                  data-wishlist="<?php echo $wishlist; ?>"></i>
              </div>
              <div class="col "><b style="font-size:27px;color:#10b981">$<?php echo $product_detail->price; ?>
                </b></div>
            </div>

            <div class="row">
              <div class="col"><b>General Details</b></div>
            </div>
            <hr class="class-1" />



            <div class="row">
              <div class="col" style="word-spacing:20px">Condition: Brand</div>
            </div>
            <div class="row">
              <div class="col" style="word-spacing:63px"> City:
                <?php echo $product_detail->town; ?>
              </div>
            </div>
            <div class="row">
              <div class="col" style="word-spacing:46px">Model:
                <?php echo $product_detail->type; ?>
              </div>
            </div>
            <div class="row">
              <div class="col" style="word-spacing:62px">Size: Red</div>
            </div>
            <br>

            <div style="font-size:12px;"> <i class="fa fa-map-marker"></i>
              <?php echo $product_detail->address; ?>
            </div><br>
            <?php   $shoplist = 0;
  if (!empty($user) && isset($user)) {
    $shop =check_shoplist($user['user_id']);
    if(empty($shop)){  $shop_list =check_shoplist_by_productid($product_detail->id);
      if(empty($shop_list)){ echo"";}else{
      $shop_name= get_shop_name($shop_list->shop_id);?>
      <div class="row text-center p-2"
      style="border:1px solid #69d3b0;border-radius:15px;background-color:#d1fae5;margin-right:30px;margin-left:30px">
      
      <div class="col">verifed by Shop: <?php echo $shop_name;?>
      </div>
      
          </div>
           <?php } }else{
    $wishlit = get_shoplist($product_detail->id, $product_detail->category_id, $shop->id, $product_detail->user_id ,$user["user_id"]);

    if (empty($wishlit)) {

     ?> <div class="row text-center p-1"
      style="border:1px solid #69d3b0;border-radius:25px;background-color:#d1fae5;margin-right:90px;margin-left:90px">
  
<div class="col">
<form class=""  action="<?php echo base_url();?>welcome/setshoplist" method="POST">
        <input type="hidden" name="product_id" id="product_id" value="<?php echo $product_detail->id; ?>">
         <input type="hidden" name="category_id" id="category_id" value="<?php echo $product_detail->category_id; ?>">
       <input type="hidden" name="user_id" id="sender_id" value="<?php  $session_id = $this->session->userdata('id');
      if($session_id){echo $_SESSION['id'];} ?>">
       <input type="hidden" name="seller_id" id="receiver_id" value="<?php echo $product_detail->user_id; ?>">
       <input type="hidden" name="shop_id" id="receiver_id" value="<?php echo $shop->id; ?>">
       <input type="hidden" name="subcategory_id" id="receiver_id" value="<?php echo $product_detail->subcategory_id; ?>">


      <button class="btn btn-sellersignup btn-change"  type="submit" name="submit" > verified</button>
    </form>
</div>

    </div>


  <?php  } else {
    $shop_list =check_shoplist_by_productid($product_detail->id);
    if(empty($shop_list)) {echo"";}else{
    $shop_name= get_shop_name($shop_list->shop_id);
    ?>

<div class="row text-center p-2"
style="border:1px solid #69d3b0;border-radius:15px;background-color:#d1fae5;margin-right:20px;margin-left:20px">

<div class="col">verifed by Shop: <?php echo $shop_name;?>
</div>

    </div>
   <?php } } }
  } else { $shop_list =check_shoplist_by_productid($product_detail->id);
    if(empty($shop_list)) {echo"";}else{
   $shop_name= get_shop_name($shop_list->shop_id);
  ?>
    <div class="row text-center p-2"
    style="border:1px solid #69d3b0;border-radius:25px;background-color:#d1fae5;margin-right:12px;margin-left:px">
    
    <div class="col">verifed by Shop: <?php echo $shop_name;?>
    </div>
    
        </div>
  <?php }} ?>
            <!-- <div class="row text-center"
              style="border:1px solid #69d3b0;border-radius:15px;background-color:#d1fae5;margin-right:12px;margin-left:px">
          
    <div class="col"><?php echo ($wishlist == 0) ? 'verfied ' : 'verify '; ?></div>
   
            </div><br> -->
          </div>


          <?php $userdetail = get_users_details($product_detail->user_id); ?>
          <div class="col" style="padding-left:25px">
            <!-- <div class="card" style="border-radius:5em;background-color:#d1fae5"> -->
            <div class="card"
              style="border-radius: 7rem 0px 0px 7rem;background-image: linear-gradient(to right, #d1fae5,#d1fae5 ,#d1fae5, #f5f5f5);margin-right:0px;padding-right:0px"
              id="c">
              <div class="card-body">
                <div class="row text-center">
                  <div class="col-4 order-first " style="margin:auto"><img
                      src="<?php echo base_url() . "uploads/profile/" . $userdetail->profile_img . ""; ?>" class="img-fluid rounded-corners mx-auto d-block" style="height: 131.9px;
width: 131.9px;"
                      alt="" id="e" style="margin:auto"></div>
                  <div class="col-5" style="text-align:left; font-size:20px"><b id="d">
                      <?php echo ucfirst($userdetail->name); ?>
                    </b><br>
                    <span style="font-size:15px" id="d"> Profile Crated
                      <?php function time_string($datetime, $full = false)
                      {
                        $now = new DateTime;
                        $ago = new DateTime($datetime);
                        $diff = $now->diff($ago);

                        $diff->w = floor($diff->d / 7);
                        $diff->d -= $diff->w * 7;

                        $string = array(
                          'y' => 'year',
                          'm' => 'month',
                          'w' => 'week',
                          'd' => 'day',
                          'h' => 'hour',
                          'i' => 'minute',
                          's' => 'second',
                        );
                        foreach ($string as $k => &$v) {
                          if ($diff->$k) {
                            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
                          } else {
                            unset($string[$k]);
                          }
                        }

                        if (!$full)
                          $string = array_slice($string, 0, 1);
                        return $string ? implode(', ', $string) . ' ago' : 'just now';
                      }
                      echo time_string($userdetail->created); ?>
                    </span><br>
                    <span id="d"> Total 20 Ads</span><br>
                    <span id="d"> Active 10 Ads </span>
                  </div>
                  <div class=" col-3 order-last">
                      <form class="" id="chat_frm" action="<?php echo base_url();?>welcome/chat/<?php echo $product_detail->category_id; ?>" method="POST">
        <input type="hidden" name="product_id" id="product_id" value="<?php echo $product_detail->id; ?>">
         <input type="hidden" name="category_id" id="category_id" value="<?php echo $product_detail->category_id; ?>">
       <input type="hidden" name="sender_id" id="sender_id" value="<?php  $session_id = $this->session->userdata('id');
      if($session_id){echo $_SESSION['id'];} ?>">
       <input type="hidden" name="receiver_id" id="receiver_id" value="<?php echo $product_detail->user_id; ?>">
     
                      <input class="btn"  style="font-size:15px;border-color:#46760a" value="Chat" <?php if(empty($user) || !isset($user)){ ?> data-toggle="modal"
                    data-target="#login" <?php }else{ ?>type="submit"    <?php }  ?>>
                      </form><br>
                      
                    <a href="<?php echo base_url(); ?>welcome/viewsellerprofile/<?php echo $product_detail->user_id; ?>"
                      style="color:black;font-size:15px"><b id="">View Seller profile ></b></a>
                  </div>


                </div>
              </div>
            </div>
          </div>

          <div class="container" style="padding:3rem">
            <h5><b style="font-size: 20px;">Description</b></h5>
            <hr class="class-1" />
            <b style="font-size: 15px;">Origins</b>
            <p style="font-size: 18px;">
              <?php echo $product_detail->Description; ?>
            </p>
          </div>


        </div>
      </div>

    </div>
  </div>





  <br>

  <div class="container mt-5">
    <p style="color:#f59e0b; padding-left:20px">Our Recommendation</p>
    <h4><b style="padding-left:20px">Related Ads</b></h4>
  </div>

  <div class="container">
    <div class="row">
    
    <?php
   
foreach($category_data as $relatedproduct){

?>

      <div class="col-lg-4 col-md-6  mb-2 ">
        <div class="card" style="max-width: 18rem; border-radius: 28px;margin:auto;">
          <img src="<?php echo base_url(); ?><?php echo $relatedproduct->cover_img; ?>" class="card-img-top" alt="Card image cap">
          <div class="card-block" style="padding:8px">
            <div class="card-title">
              <div class="row">
                <div class="col-6"><b style="font-size:18px"><?php echo $relatedproduct->title;?></b></div>
                <div class="col-2"><b style='font-size:18px'><i class="fa fa-heart-o" style="color:#ff6737"></i></b>
                </div>
                <div class="col-4" style="color:#10b981">
                  <h5><b>$<?php echo $relatedproduct->price;?></b></h5>
                </div>
              </div>
            </div>

            <small class="card-text"><?php echo $relatedproduct->Description;?></small><br>

            <div class="row">
              <div class=col-5>Fresheness </div>
              <div class=col-7>New(Extra fresh)</div>
            </div>

            <div class="row">
              <div class=col-5>Model</div>
              <div class=col-5>2015</div>
            </div>

            

            <div class="row text-center">
              <div class="col-1"><i class="fa fa-map-marker"></i></div>
              <div class="col-5">
                <p><?php echo $relatedproduct->address;?></p>
              </div>
              <div class="col-6"> <a href="<?php echo base_url(); ?>welcome/productdetail/<?php echo $relatedproduct->category_id; ?>/<?php echo $relatedproduct->id; ?>/<?php echo $relatedproduct->subcategory_id; ?>" class="btn" style="padding:px" id="b">Ads Details ></a></div>
            </div>

          </div>
        </div>
      </div>
      <?php } ?>

                    </div>
                    </div>




</body>

</html>

<div id="report_product" class="modal fade" role="dialog">

  <div class="modal modal-signin position-static d-block  py-5" tabindex="-1" role="dialog" id="modalSignin">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-4 shadow">
        <button data-dismiss="modal" type="button" class="close" aria-label="Close"
          style="margin-left: 90%; margin-top:10px;">&times;</button>


        <div class="modal-body px-5 pt-0">
          <h5 class=" mb-0 my-3 fs-5" style="color:#13C571;text-align: center;">Report on Ads</h5>

          <?php if ($error = $this->session->flashdata('Login_fail')) { ?>
            <div class="row">
              <div class="col-lg-12">
                <div class="alert alert-danger ">
                  <?= $error;

                  unset($_SESSION['Login_fail']);
                  ?>

                </div>
              </div>
            </div>

          <?php } ?>

          <form class="needs-validation" novalidate enctype="multipart/form-data"
            action="<?php echo base_url(); ?>welcome/reportproduct" method="POST" class="needs-validation" novalidate>

            <input type="hidden" name="reported_by" value="<?php echo $user['user_id'] ?>">
            <input type="hidden" name="category_id" value="<?php echo $product_detail->category_id; ?>">
            <input type="hidden" name="product_id" value="<?php echo $product_detail->id; ?>">
            <div class=" input-container my-3 px-3">
              <label>Name</label>
              <input name="name" type="text" class="form-control   text-dark Name" id="firstName" value=""
                placeholder="Name" maxlength="30" style="border-radius:30px; border-color:#13C571" required>
              <div class="invalid-feedback">
                Valid name is required.
              </div>
            </div>

            <div class=" input-container my-3 px-3">
              <label>Email</label>
              <input name="email" type="email" class="form-control   text-dark inp-icon" placeholder="Enter Email"
                style="border-radius:30px; border-color:#13C571" required>

              <div class="invalid-feedback">
                Please enter a valid email address.
              </div>
            </div>
            <div class=" input-container mt-3 px-3 ">
              <label>Mobile</label>
              <input name="mobile" type="number" class="form-control  text-dark mobile" type="number" id="mobile"
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                maxlength="10" minlength="10" value="" placeholder="phone"
                style="border-radius:30px; border-color:#13C571" required>

              <p id="mobile_error"></p>
              <div class="invalid-feedback">
                Valid mobile is required.
              </div>
            </div>

            <div class=" input-container my-3 px-3 ">
              <label>Report Reason (Only 150 character are allowed)</label>

              <textarea name="report" class="form-control" id="aboutus" placeholder="Report" maxlength="150" rows="4"
                style="border-radius:20px; border-color:#13C571" required></textarea>
              <div class="invalid-feedback">
                Valid report is required.
              </div>
            </div>
            <center><button class=" mb-2 btn btn-lg  text-white mt-2"
                style="background-color:#13C571;border-radius:30px;width:40%;" type="submit"
                name="submit">Report</button>

            </center>

          </form>
        </div>
      </div>
    </div>
  </div>

</div>
<script>

  (() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        var mabile = document.getElementById('mobile').value.length
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
          document.getElementById("mobile_error").innerHTML = "";
        }
        else if (mabile < 10) {
          document.getElementById("mobile_error").innerHTML = "Please enter 10 digits";
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
  })()


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


  $(document).on('click', '.ssaaf', function (e) {
    e.stopPropagation();
    var obj = $(this);
    var pid = $(this).data("pid");
    var cid = $(this).data("cid");
    var uid = $(this).data("uid");
    var shopid = $(this).data("shopid");
    var sellerid = $(this).data("sellerid");
    var status = $(this).data("wishlist");

    if (!uid == 0)
      //   alert(status);
      $.ajax({
        type: "POST",
        url: '<?php echo base_url("Welcome/setshoplist"); ?>',
        cache: false,
        data: { 'product_id': pid, 'user_id': uid, 'category_id': cid,'shop_id': shopid,'seller_id': sellerid },
        error: function () {
          alert('Something is wrong');
        },
        success: function (data) {
          $(".ssaaf" + pid).toggleClass("fa-heart-o fa-heart");
          if (status == 0) {
            $(this).data("wishlist", 1);
            swal("Product verify Successfully!", "", "success");
          }
          else {
            $(this).data("wishlist", 0);
            swal("Product removed from Wishlist Successfully!", "", "success");
          }
        }
      });


  });



  function change_image(image) {

    var container = document.getElementById("main-image");

    container.src = image.src;
  }
</script>

<script>

$(document).ready(function(){


 var limit = 2;
 var start = 0;
 var action = 'inactive';
 var str = window.location.href;
 str = str.split("/");
  cat = str[str.length - 3];
   sub = str[str.length -1];

 function load_country_data(limit, start)
 {
  $.ajax({
   url:"<?php echo base_url();?>welcome/fetch/",
   method:"POST",
   data:{limit:limit, start:start,category_id:cat,subcategory_id:sub},
   cache:false,
   success:function(data)
   {
    $('#load_data').append(data);
    if(data == '')
    {
     $('#load_data_message').html("<button type='button' class='btn btn-info'>No Data Found</button>");
     action = 'active';
    }
    else
    {
     $('#load_data_message').html("<button type='button' class='btn btn-warning'>Please Wait....</button>");
     action = "inactive";
    }
   }
  });
 }

 if(action == 'inactive')
 {
  action = 'active';
  load_country_data(limit, start);
 }
 $(window).scroll(function(){
  if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
  {
   action = 'active';
   start = start + limit;
   setTimeout(function(){
    load_country_data(limit, start);
   }, 1000);
  }
 });

});
</script>