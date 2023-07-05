<div class="container bg-3 divpad space-top" > 
<center><img class="img-fluid" src="<?php echo base_url();?>assets/images/aboutus.png">  </center>    
  <h3 class="text-center">How to verifed the Product</h3><br>
  <div class="row" style="margin-bottom: 30px;">
    
  Unlock the Benefits of Verifying Your Products on CelNow!

Get your product verified now:
At CelNow, we value trust, transparency, and authenticity. We understand the importance of ensuring a safe and secure marketplace for our users. That's why we offer a product verification process that allows you to showcase your items as verified on our platform. In this guide, we'll walk you through the steps to get your products verified and explain the numerous benefits it brings. Let's get started!

Steps to get Verification tag:
Step 1: Create an Account on Celnow
If you haven't already, visit our website (www.celnow.com) and sign up for an account. It only takes a few minutes, and you'll gain access to a wide range of features and opportunities.

Step 2: Prepare Your Product Information
Gather all the necessary information about the product you want to get verified. This includes details like the brand, model, condition, and any additional features or accessories it may come with. Necessary bills or latest job sheets if any related to the product you want to get verified. 
Fill out the required fields while posting product on CelNow with accurate information about your product. You may also need to upload clear and high-quality images showcasing the item's condition and any unique aspects.

Step 3: Choose the Verification Method (Charges may be applicable)
Celnow provides both online and offline verification methods to cater to different needs. Select the option that suits you best:
   a) Online Verification: If your product qualifies for online verification, our team will guide you through the necessary steps. This may involve answering additional questions or providing supporting documents to establish authenticity. For online verification talk with our executive on 8377935333 and follow the guided steps. 1st verification free of cost. Every other verification will be charged fixed cost. (Rupees 20). 

   b) Offline Verification: In some cases, CelNow offers offline verification through our network of authorized service points. These service points are registered professionals or shops specialized in specific fields. Visit the nearest service point relevant to your product category, where they will verify the item's authenticity. (Search the nearest registered on our website in the nearby by service professionals or service points section)- Charges will be applicable. 

Step 4: Enjoy the Benefits of Verified Products
Once your product is successfully verified, it will receive a special verified badge on its listing. Here are the benefits you can enjoy as a verified product seller:

   - Enhanced Trust: Verified products instill confidence in potential buyers, showcasing your commitment to providing genuine and reliable items.

   - Increased Visibility: Verified products often receive higher visibility and prominence in search results, attracting more interested buyers.

   - Faster Transactions: Buyers tend to prioritize verified products due to the added trust and assurance, leading to quicker and smoother transactions.

   - Competitive Advantage: Stand out from other sellers by differentiating your products as verified, positioning yourself as a trusted and reputable seller.

Getting your products verified on CelNow is a simple yet powerful step towards establishing trust and maximizing your selling potential. Follow the steps outlined in this guide and unlock the numerous benefits that come with being a verified product seller. Join Celnow today and experience the advantages of a secure and reliable online marketplace.


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