<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Bootstrap demo</title>
    <style>

    html,body
    {
      max-width: 100%;
       /* overflow-x: hidden;  */
    }

     #bc:hover {
  background-color: #d1fae5;
} 




        .fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 0px 2px;
  color:#888b97 ;
}

.fa:hover {
    opacity: 0.7;
}
    </style>
  </head>
  <body>
   
  <div class="container  pt-5">
    <div class="container">
  <div class="row">
    <div class="col-sm-6 ">
    <img class="btn-change" src="<?php echo base_url();?>assets/images/CelNow 5 1.png" class="img-fluid mb-3" alt=""  width="150px"><br>
<?php $meta= getmeta();
?>
<p style="color:#888b97"><?php echo $meta->meta; ?></p>
<a href="https://www.facebook.com/" class="fa fa-facebook"></a> 
<a href="https://www.linkedin.com/company/celnow/" class="fa fa-linkedin" ></a>
<a href="https://www.instagram.com/celnow.ind/" class="fa fa-instagram" ></a>
<a href="https://www.youtube.com/channel/UCfStYDt1cu6IpYrOrGAP0Cw" class="fa fa-youtube-play" ></a>

    </div>
    <div class="col-sm-3 col-6"  >
     <b> Pages </b><br><br>
      <a href="<?php echo base_url();?>" style="text-decoration:none;color:#888b97" id="bc">Home</a> <br>
      <a href="<?php echo base_url();?>welcome/aboutus" style="text-decoration:none;color:#888b97" id="bc"> About us</a> <br>
      <a href="<?php echo base_url();?>welcome/termscondition" style="text-decoration:none;color:#888b97" id="bc">Terms & Conditions</a> <br>
      <a href="<?php echo base_url();?>welcome/privacypolicy" style="text-decoration:none;color:#888b97" id="bc">Privacy policy</a> <br>
      <a href="<?php echo base_url();?>welcome/help_support" style="text-decoration:none;color:#888b97" id="bc">Help and Support</a> <br>
      <a href="<?php echo base_url();?>welcome/FAQs" style="text-decoration:none;color:#888b97" id="bc">FAQs</a> <br>
      <a href="<?php echo base_url();?>welcome/verify_content" style="text-decoration:none;color:#888b97" id="bc">How to Verified Product</a> <br>

    </div>
    <div class="col-sm-3 col-6" style="color:#888b97">
     <b style="color:black"> Contact </b><br><br>
      Indore India <br>
      (+91) 45454-81100<br>
      info@celnow.com <br>
    </div>
  </div>
</div>
</div>
</body>
</html>

<script>
        var isAnimating = false;

        function scrollLeftAnimate(elem, unit) {

            if (!elem || isAnimating) {
                //if element not found / if animating, do not execute slide
                return;
            }

            var time = 300; // animation duration in MS, the smaller the faster.
            var from = elem.scrollLeft; // to continue the frame posistion
            var aframe =
                10; //fraction of frame frequency , set 1 for smoothest  ~ set 10++ for lower FPS (reduce CPU usage)
            isAnimating = true; //if animating prevent double trigger animation

            var start = new Date().getTime(),
                timer = setInterval(function () {
                    var step = Math.min(1, (new Date().getTime() - start) / time);
                    elem.scrollLeft = ((step * unit) + from);
                    if (step === 1) {
                        clearInterval(timer);
                        isAnimating = false;
                    }
                }, aframe);
        }

           function initDealCarrousel(dealCarrouselID) {
            var target = document.querySelector("#" + dealCarrouselID + " .va-carrousel-flexbox");
            var cardOutterWidth;
            var maxCarrouselScroll;
            
           

            function updateUpaCarrouselInfo() {
                cardOutterWidth = document.querySelector("#" + dealCarrouselID + " .va-card").offsetWidth; //you can define how far the scroll
                maxCarrouselScroll = (document.querySelectorAll("#" + dealCarrouselID + " .va-card").length *
                        cardOutterWidth) - document.querySelector("#" + dealCarrouselID + " .va-carrousel-flexbox")
                    .clientWidth;
            }
             updateUpaCarrouselInfo();
        
            if(maxCarrouselScroll < 0 ){
                  document.getElementById("right_sponser_button").style.display = "none";
            }
            document.querySelector("#" + dealCarrouselID + " .deals-scroll-left").addEventListener("click",
                function () {
                    updateUpaCarrouselInfo(); //in case window resized, will get new info
                    if (target.scrollLeft > 0) {
                         
                        scrollLeftAnimate(target, -cardOutterWidth * 2);
                         document.getElementById("right_sponser_button").style.display = "block";
                    }
                    else{
                      
                        document.getElementById("left_sponser_button").style.display = "none"; 
                    }
                }
            );

            document.querySelector("#" + dealCarrouselID + " .deals-scroll-right").addEventListener("click",
                function () {
                    updateUpaCarrouselInfo(); //in case window resized, will get new info 
                    if (target.scrollLeft < maxCarrouselScroll) {
                         
                        scrollLeftAnimate(target, cardOutterWidth * 2);
                        document.getElementById("left_sponser_button").style.display = "block"; 
                    }
                    else{
                       
                     document.getElementById("right_sponser_button").style.display = "none";
                    }
                }
            );
        } 
          
              initDealCarrousel('va_container');
        
</script>
<script>
         var isAnimating = false;

        function scrollLeftAnimate(elem, unit) {

            if (!elem || isAnimating) {
                //if element not found / if animating, do not execute slide
                return;
            }

            var time = 300; // animation duration in MS, the smaller the faster.
            var from = elem.scrollLeft; // to continue the frame posistion
            var aframe =
                10; //fraction of frame frequency , set 1 for smoothest  ~ set 10++ for lower FPS (reduce CPU usage)
            isAnimating = true; //if animating prevent double trigger animation

            var start = new Date().getTime(),
                timer = setInterval(function () {
                    var step = Math.min(1, (new Date().getTime() - start) / time);
                    elem.scrollLeft = ((step * unit) + from);
                    if (step === 1) {
                        clearInterval(timer);
                        isAnimating = false;
                    }
                }, aframe);
        }
        
          function initDealCarrousel_urgent(dealCarrouselID) {
            var target = document.querySelector("#" + dealCarrouselID + " .va-carrousel-flexbox_urgent");
            var cardOutterWidth;
            var maxCarrouselScroll;

            function updateUpaCarrouselInfo() {
                cardOutterWidth = document.querySelector("#" + dealCarrouselID + " .va-card").offsetWidth; //you can define how far the scroll
                maxCarrouselScroll = (document.querySelectorAll("#" + dealCarrouselID + " .va-card").length *
                        cardOutterWidth) - document.querySelector("#" + dealCarrouselID + " .va-carrousel-flexbox_urgent")
                    .clientWidth;
                     
            }
            updateUpaCarrouselInfo();
        
            if(maxCarrouselScroll < 0 ){
                  document.getElementById("right_urgent_button").style.display = "none";
            }
            document.querySelector("#" + dealCarrouselID + " .deals-scroll-left_urgent").addEventListener("click",
                function () {
                    updateUpaCarrouselInfo(); //in case window resized, will get new info
                    if (target.scrollLeft > 0) {
                      
                        scrollLeftAnimate(target, -cardOutterWidth * 2);
                          document.getElementById("right_urgent_button").style.display = "block";
                    }
                    else{
                          document.getElementById("left_urgent_button").style.display = "none";
                    }
                }
            );
       
            document.querySelector("#" + dealCarrouselID + " .deals-scroll-right_urgent").addEventListener("click",
                function () {
                    updateUpaCarrouselInfo(); //in case window resized, will get new info 
                    if (target.scrollLeft < maxCarrouselScroll) {
                       
                        scrollLeftAnimate(target, cardOutterWidth * 2);
                         document.getElementById("left_urgent_button").style.display = "block"; 
                    }
                    else{
                         document.getElementById("right_urgent_button").style.display = "none"; 
                    }
                }
            );
        }
      
          initDealCarrousel_urgent('va_container_urgent');
</script>
<script>
     var isAnimating = false;

      function scrollLeftAnimate(elem, unit) {

            if (!elem || isAnimating) {
                //if element not found / if animating, do not execute slide
                return;
            }

            var time = 300; // animation duration in MS, the smaller the faster.
            var from = elem.scrollLeft; // to continue the frame posistion
            var aframe =
                10; //fraction of frame frequency , set 1 for smoothest  ~ set 10++ for lower FPS (reduce CPU usage)
            isAnimating = true; //if animating prevent double trigger animation

            var start = new Date().getTime(),
                timer = setInterval(function () {
                    var step = Math.min(1, (new Date().getTime() - start) / time);
                    elem.scrollLeft = ((step * unit) + from);
                    if (step === 1) {
                        clearInterval(timer);
                        isAnimating = false;
                    }
                }, aframe);
        }
           
           
    function initDealCarrousel_most_view(dealCarrouselID) {
            var target = document.querySelector("#" + dealCarrouselID + " .va-carrousel-flexbox_most");
            var cardOutterWidth;
            var maxCarrouselScroll;

            function updateUpaCarrouselInfo() {
                cardOutterWidth = document.querySelector("#" + dealCarrouselID + " .va-card").offsetWidth; //you can define how far the scroll
                maxCarrouselScroll = (document.querySelectorAll("#" + dealCarrouselID + " .va-card").length *
                        cardOutterWidth) - document.querySelector("#" + dealCarrouselID + " .va-carrousel-flexbox_most")
                    .clientWidth;
            }
           updateUpaCarrouselInfo();
        
            if(maxCarrouselScroll < 0 ){
                  document.getElementById("right_view_button").style.display = "none";
            }
            document.querySelector("#" + dealCarrouselID + " .deals-scroll-left_most_view").addEventListener("click",
                function () {
                    updateUpaCarrouselInfo(); //in case window resized, will get new info
                    if (target.scrollLeft > 0) {
                        scrollLeftAnimate(target, -cardOutterWidth * 2);
                         document.getElementById("right_view_button").style.display = "block";
                    }
                    else{
                        document.getElementById("left_view_button").style.display = "none"; 
                    }
                }
            );

            document.querySelector("#" + dealCarrouselID + " .deals-scroll-right_most_view").addEventListener("click",
                function () {
                    updateUpaCarrouselInfo(); //in case window resized, will get new info 
                    if (target.scrollLeft < maxCarrouselScroll) {
                        scrollLeftAnimate(target, cardOutterWidth * 2);
                        document.getElementById("left_view_button").style.display = "block"; 
                    }
                    else{
                     document.getElementById("right_view_button").style.display = "none";
                    }
                }
            );
        }
      
    initDealCarrousel_most_view('va_container_most_view');
</script>
<script>
     var isAnimating = false;

      function scrollLeftAnimate(elem, unit) {

            if (!elem || isAnimating) {
                //if element not found / if animating, do not execute slide
                return;
            }

            var time = 300; // animation duration in MS, the smaller the faster.
            var from = elem.scrollLeft; // to continue the frame posistion
            var aframe =
                10; //fraction of frame frequency , set 1 for smoothest  ~ set 10++ for lower FPS (reduce CPU usage)
            isAnimating = true; //if animating prevent double trigger animation

            var start = new Date().getTime(),
                timer = setInterval(function () {
                    var step = Math.min(1, (new Date().getTime() - start) / time);
                    elem.scrollLeft = ((step * unit) + from);
                    if (step === 1) {
                        clearInterval(timer);
                        isAnimating = false;
                    }
                }, aframe);
        }
           
           
    function initDealCarrousel_popular(dealCarrouselID) {
            var target = document.querySelector("#" + dealCarrouselID + " .va-carrousel-flexbox_popular");
            var cardOutterWidth;
            var maxCarrouselScroll;

            function updateUpaCarrouselInfo() {
                cardOutterWidth = document.querySelector("#" + dealCarrouselID + " .va-card").offsetWidth; //you can define how far the scroll
                maxCarrouselScroll = (document.querySelectorAll("#" + dealCarrouselID + " .va-card").length *
                        cardOutterWidth) - document.querySelector("#" + dealCarrouselID + " .va-carrousel-flexbox_popular")
                    .clientWidth;
            }
           updateUpaCarrouselInfo();
        
            if(maxCarrouselScroll < 0 ){
                  document.getElementById("right_popular_button").style.display = "none";
            }
            document.querySelector("#" + dealCarrouselID + " .deals-scroll-left_popular").addEventListener("click",
                function () {
                    updateUpaCarrouselInfo(); //in case window resized, will get new info
                    if (target.scrollLeft > 0) {
                        scrollLeftAnimate(target, -cardOutterWidth * 2);
                         document.getElementById("right_popular_button").style.display = "block";
                    }
                    else{
                        document.getElementById("left_popular_button").style.display = "none"; 
                    }
                }
            );

            document.querySelector("#" + dealCarrouselID + " .deals-scroll-right_popular").addEventListener("click",
                function () {
                    updateUpaCarrouselInfo(); //in case window resized, will get new info 
                    if (target.scrollLeft < maxCarrouselScroll) {
                        scrollLeftAnimate(target, cardOutterWidth * 2);
                        document.getElementById("left_popular_button").style.display = "block"; 
                    }
                    else{
                     document.getElementById("right_popular_button").style.display = "none";
                    }
                }
            );
        }
      
    initDealCarrousel_popular('va_container_Popular');
</script>

<script>
  $(".cut-list").cutList({
  moreBtnTitle: '<img class="mt-1 text-muted  img-fluid bd-placeholder-img img-circle" width="25" height="25"src="<?php echo base_url();?>assets/images/more.png"> <span class="my-auto">More Category</span></div>',
  showMoreOnHover: true,
  risezeDelay: 100
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();






  $(document).on('click', '.dddssaaf', function(e) {
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
            data: {
                'product_id': pid,
                'user_id': uid,
                'category_id': cid
            },
            error: function() {
                alert('Something is wrong');
            },
            success: function(data) {
        
                $(".dddssaaf" + pid).toggleClass("fa-heart-o fa-heart");
                if (status == 0) {
                    $(this).data("wishlist", 1);
                    swal("Product Added in Wishlist Successfully!", "", "success");
                } else {
                   
                    $(this).data("wishlist", 0);
                    swal("Product removed from Wishlist Successfully!", "", "success");
                    location.reload();
                }
               
            }
        });
        

});


</script>

<script>
$(document).ready(function() {
    $("#latitudeArea").addClass("d-none");
    $("#longtitudeArea").addClass("d-none");
});

google.maps.event.addDomListener(window, 'load', initialize);

function initialize() {
    var input = document.getElementById('Location');
    var autocomplete = new google.maps.places.Autocomplete(input);

    var job_Office_Address = document.getElementById('job_Office_Address');
    var autocomplete = new google.maps.places.Autocomplete(job_Office_Address);

    autocomplete.addListener('place_changed', function() {
        var place = autocomplete.getPlace();

        $('#latitude').val(place.geometry['location'].lat());
        $('#longitude').val(place.geometry['location'].lng());

        $("#latitudeArea").removeClass("d-none");
        $("#longtitudeArea").removeClass("d-none");
    });
}
</script>

<script>
"use strict";
/ Start of use strict /
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