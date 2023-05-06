<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">
<!--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
<style>
    h1 {
    margin-bottom: 40px;
}

label {
    color: #333;
}


.help-block.with-errors {
    color: #ff5050;
    margin-top: 10px;

}

.card{
	margin-left: 10px;
	margin-right: 10px;
}
</style><div class="container mb-5" style="margin-top:100px;">
        <div class=" text-center mt-5 ">

            <h1 style="color:#C5DC49">Contact Us</h1>
                
            
        </div>

             
    
    <div class="row ">
       
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            
            <div class="card-body bg-light">
       
            <div class = "container">
                             <form class="needs-validation" novalidate action="<?php echo base_url();?>welcome/savecontact" method="POST" role="form">

            

            <div class="controls">

                <div class="row ">
                     <?php  if($msg=$this->session->flashdata('msg')): 

$msg_class=$this->session->flashdata('msg_class')

 ?>
<div class="row">
<div class="col-lg-6">
<div class="alert <?= $msg_class ?>">
<?= $msg; 
unset($_SESSION['msg']);?>
</div>
</div>
</div>

<?php endif; ?>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">First Name </label>
                            <input  type="text" name="firstname" class="form-control" id="firstName" placeholder=" First name " required>
                          <div class="invalid-feedback">
                Valid first name is required.
              </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">Last Name </label>
                            <input  type="text" name="lastname" class="form-control" id="lastName" placeholder="Last name " required>
                          <div class="invalid-feedback">
                Valid last name is required.
              </div>
                                                            </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">Email </label>
                            <input  type="email" name="email" class="form-control" id="email" placeholder="Email " required>
                           <div class="invalid-feedback">
                Please enter a valid email address.
              </div>
                        </div>
                    </div>
                   <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">Contact Number</label>
                            <input  type="number" name="mobile" id="mobile" class="form-control " maxlength="10"   minlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" placeholder="Mobile " required>
                           <div class="invalid-feedback">
                Valid mobile is required.
              </div>
                                                            </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">Message </label>
                            <textarea id="description" name="description" class="form-control" placeholder="Write your message here." rows="4" required></textarea
                                ><div class="invalid-feedback">
                Valid message is required.
              </div>
                                                            </div>
                            </div>

                        </div>

</div>
                    
                        
                        <center><button class=" mb-2 btn btn-lg  text-white mt-3"  style="background-color:#C5DC49;"   type="submit">Submit</button>
                    
               </center>
          
                


        </div>
         </form>
        </div>
            </div>


    </div>
        <!-- /.8 -->

    </div>
    <!-- /.row-->

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
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()



var inputQuantity = [];
    $(function() {     
      $(".zipcode-number").on("keyup", function (e) {
        var $field = $(this),
            val=this.value,
            $thisIndex=parseInt($field.data("idx"),10); 
        if (this.validity && this.validity.badInput || isNaN(val) || $field.is(":invalid") ) {
            this.value = inputQuantity[$thisIndex];
            return;
        } 
        if (val.length > Number($field.attr("maxlength"))) {
          val=val.slice(0, 10);
          $field.val(val);
        }
        inputQuantity[$thisIndex]=val;
      });      
    });


</script>



<script>
"use strict"; /* Start of use strict */
(function () {
function14();
})();
function function14() {
$('.btnSweetalert').on("click", function () {
swal({
title: " Logout!",
text: "Are you sure you want to logout?",
type: "warning",
showCancelButton: true,
confirmButtonColor: "#DD6B55",
confirmButtonText: "Yes",
cancelButtonText: "No",
closeOnConfirm: false,
closeOnCancel: true},
function (isConfirm) {
if (isConfirm) {

 window.location.href = "<?php echo base_url();?>welcome/logout";
} else {
}
});
});
}
</script>