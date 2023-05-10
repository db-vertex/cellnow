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
   
  <div class="container mb-5 mt-5">
    <div class="container">
  <div class="row ">
    <div class="col-sm-6 ">
    <img src="<?php echo base_url();?>assets/images/CelNow 5 1.png" class="img-fluid mb-3" alt=""  width="150px"><br>
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