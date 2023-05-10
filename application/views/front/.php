<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> 
    <title>Bootstrap demo</title>
    <style>

html,body
    {
       max-width: 100%;
        /* overflow-x: hidden;    */
    }

    #ab:hover {
  background-color: #d1fae5;
}


      
    </style>
  </head>
  <body >
   <div class="container" >
    <nav class="navbar navbar-expand-lg bg-body-">
  <div class="container-fluid">
    
    
    <img src="<?php echo base_url();?>assets/images/celNow.png"  class="img-fluid" style="width:180px;padding-bottom:12px">
  </a>
    

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav m-auto mb-2 mb-lg-0" >
        <li class="nav-item" style="padding-right:20px "; >
          <a class="nav-link active"  aria-current="page" href="#" style="color:#10B981;font-weight:600;border-radius:32px;border:1px solid;padding:8px;margin-bottom:10px;" id="ab">Donate</a>
        </li>
        <li class="nav-item dropdown" style="padding-right:20px";>
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:#10B981;font-weight:600;border-radius:32px;border:1px solid;padding:8px;margin-bottom:10px;" id="ab">
            Categories
          </a>
          <ul class="dropdown-menu" style="margin-bottom:10px;min-width:80px">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
          
          </ul>
        </li>
        <li class="nav-item dropdown" style="padding-right:20px";>
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:#10B981;font-weight:600;border-radius:32px;border:1px solid;padding:8px;margin-bottom:10px;" id="ab">
            Service Center 
          </a>
          <ul class="dropdown-menu" style="margin-bottom:10px">
            <li><a class="dropdown-item" href="#">AAction</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
           
          </ul>
        </li>


        <li class="nav-item" style="padding-right:20px";>
          <a class="nav-link" href="#" style="color:#10B981;font-weight:600;border-radius:32px;border:1px solid;background-color:#10b981;color:white;padding:8px;margin-bottom:10px;" id="ab">Shop -></a>
        </li>
        <li class="nav-item" style="padding-right:20px";>
          <a class="nav-link" href="#" style="color:#10B981;font-weight:600;border-radius:32px;border:1px solid;background-color:#d1fae5;padding:8px;margin-bottom:10px;" id="ab">Ad Post</a>
        </li>
        
     </ul>
          <a class="nav-link" href="#" style="color:#10B981;font-weight:600;padding-right:40px;margin-bottom:10px;" id="cd">Login/Signup</a>
    </div>
  </div>
</nav>
</div>  



 <?php
	
	        //  include "footer.php";
?> 

</body>
</html>
