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
   
  <div class="container  ">
    <div class="container">
  <div class="row p-4">
    <div class="col-sm-6 ">
    <img class="btn-change" src="<?php echo base_url();?>assets/images/CelNow 5 1.png" class="img-fluid mb-3" alt=""  width="150px"><br>
<p style="color:#888b97">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Laboriosam rerum ipsa id recusandae quasi officia nihil! </p>
<a href="https://www.facebook.com/" class="fa fa-facebook"></a> 
<a href="https://twitter.com/i/flow/login" class="fa fa-twitter" ></a>
<a href="https://www.instagram.com/" class="fa fa-instagram" ></a>

    </div>
    <div class="col-sm-3 col-6"  >
     <b> Pages </b><br><br>
      <a href="<?php echo base_url();?>" style="text-decoration:none;color:#888b97" id="bc">Home</a> <br>
      <a href="<?php echo base_url();?>welcome/aboutus" style="text-decoration:none;color:#888b97" id="bc"> About us</a> <br>
      <a href="<?php echo base_url();?>welcome/termscondition" style="text-decoration:none;color:#888b97" id="bc">Terms & Conditions</a> <br>
      <a href="<?php echo base_url();?>welcome/privacypolicy" style="text-decoration:none;color:#888b97" id="bc">Privacy policy</a> <br>
     
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
           

           
          function initDealCarrousel_Popular(dealCarrouselID) {
            var target = document.querySelector("#" + dealCarrouselID + " .va-carrousel-flexbox_Popular");
            var cardOutterWidth;
            var maxCarrouselScroll;

            function updateUpaCarrouselInfo() {
                cardOutterWidth = document.querySelector("#" + dealCarrouselID + " .va-card").offsetWidth; //you can define how far the scroll
                maxCarrouselScroll = (document.querySelectorAll("#" + dealCarrouselID + " .va-card").length *
                        cardOutterWidth) - document.querySelector("#" + dealCarrouselID + " .va-carrousel-flexbox_Popular")
                    .clientWidth;
            }
            if(maxCarrouselScroll < 0 ){
            document.getElementById("right_view_button").style.display = "none";
            }
            document.querySelector("#" + dealCarrouselID + " .deals-scroll-left_Popular").addEventListener("click",
                function () {
                    updateUpaCarrouselInfo(); //in case window resized, will get new info
                    if (target.scrollLeft > 0) {
                        scrollLeftAnimate(target, -cardOutterWidth * 2);
                    }
                }
            );

            document.querySelector("#" + dealCarrouselID + " .deals-scroll-right_Popular").addEventListener("click",
                function () {
                    updateUpaCarrouselInfo(); //in case window resized, will get new info 
                    if (target.scrollLeft < maxCarrouselScroll) {
                        scrollLeftAnimate(target, cardOutterWidth * 2);
                        
                    }
                }
            );
        }
      
           initDealCarrousel_Popular('va_container_Popular');
        
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

</script>