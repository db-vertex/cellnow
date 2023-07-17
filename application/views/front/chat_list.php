<!--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<div class="container-fluid bg-3 divpad">  

<!--   <ul class="breadcrumb" style="background-color: unset;padding-top: 34px;">-->
<!--  <li><a href="<?php echo base_url(); ?>">Home</a></li>-->
<!--  <li><a href="#">Chat</a></li>-->
  <!-- <li><a href="#">Summer 15</a></li>
<!--  <li>Italy</li> -->
<!--</ul>-->
<?php
 
 //print_r($reciever_id);

?>  
<style type="text/css">
 ul {
    padding-left: 0rem;
}

.breadcrumb_container {
        box-sizing: border-box;
        width: 100%;
        max-width: 1300px;
        margin: 0 auto;
    }

    .breadcrumb_row {
        display: flex;
        flex-wrap: wrap;
        margin: 0 -15px;
    }

    .breadcrumb_col {
        box-sizing: border-box;
        flex: 1;
        padding: 0 15px;
    }

    .breadcrumbs {
        box-sizing: border-box;
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 16px 45px;
        position: relative;
        height: 48px;
        background: linear-gradient(90.02deg, #77D4B5 -23.01%, rgba(213, 253, 252, 0) 97.7%);
        border: 0.5px solid #6AD3B0;
        border-radius: 20px;
    }

  .action_menu{
	
		
	
		background-color: rgba(0,0,0,0.5);
		color: white;
	    width:10%;
	    margin-left: 86%;
		top: 30px;
		right: 15px;
		display: none;
	}
	.action_menu ul{
		list-style: none;
		padding: 0;
	margin: 0;
	}
	.action_menu ul li{
		width: 10%;
		padding: 10px 15px;
		margin-top: 40px;
	}
	.action_menu ul li i{
		padding-right: 10px;
	
	}
	.action_menu ul li:hover{
		cursor: pointer;
	
	}


/* Component: Chat */
.chat .chat-wrapper .chat-list-wrapper {
  border: 1px solid #ddd;
  height: 510px;
  overflow-y: auto;
}
.timestamp {
    position: absolute;
    bottom: -22px;
    font-size: 10px;
    color: #555;
    right: 20px;
    /* color: rgba(255, 255, 255, .7); */
}
.timestamp-sender {
    position: absolute;
    bottom: -15px;
    font-size: 10px;
    color: #555;
    left: 0px;
    /* color: rgba(255, 255, 255, .7); */
}
.checkmark-sent-delivered {
    position: absolute;
    bottom: -18px;
    right: 0px;
    font-size: 12px;
    
}
.checkmark-read {
    
    position: absolute;
    bottom: -18px;
    right: 6px;
    font-size: 12px;
}
.chat .chat-wrapper .chat-list-wrapper .chat-list {
  padding: 0;
}
.chatbodys{
    color:black;
}
.chat .chat-wrapper .chat-list-wrapper .chat-list li {
  display: block;
  padding: 20px 10px;
  clear: both;
  cursor: pointer;
  border-bottom: 1px solid #ddd;
  -webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -ms-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
.chat .chat-wrapper .chat-list-wrapper .chat-list li .avatar {
  margin-right: 12px;
  float: left;
}
.chat .chat-wrapper .chat-list-wrapper .chat-list li .avatar img {
  width: 60px;
  height: auto;
  border: 4px solid transparent;
}
.chat .chat-wrapper .chat-list-wrapper .chat-list li .avatar.available img {
  border-color: #2ecc71;
     width: 50px;
    height: 50px;
}
.chat .chat-wrapper .chat-list-wrapper .chat-list li .avatar.busy img {
  border-color: #ff530d;
}
.chat .chat-wrapper .chat-list-wrapper .chat-list li .body .header {
  margin-top: 4px;
  margin-bottom: 4px;
}
.chat .chat-wrapper .chat-list-wrapper .chat-list li .body .header .username {
  font-weight: bold;
}
.chat .chat-wrapper .chat-list-wrapper .chat-list li .body .header .timestamp {
  float: right;
  color: #999;
  font-size: 11px;
  line-height: 18px;
  font-style: italic;
}
.chat .chat-wrapper .chat-list-wrapper .chat-list li .body .header .timestamp i {
  margin-right: 4px;
}
.chat .chat-wrapper .chat-list-wrapper .chat-list li .body p {
  font-size: 12px;
  line-height: 16px;
  max-height: 32px;
  overflow: hidden;
}
.chat .chat-wrapper .chat-list-wrapper .chat-list li:hover {
  background-color: #f4f4f4;
}
.chat .chat-wrapper .chat-list-wrapper .chat-list li.active {
  background-color: #eee;
  color: black;
}
.chat .chat-wrapper .chat-list-wrapper .chat-list li.active .body .timestamp {
  color: black;
}
.chat .chat-wrapper .chat-list-wrapper .chat-list li.new {
  border-left: 2px solid #2ecc71;
}
.chat .chat-wrapper .message-list-wrapper {
  border: 1px solid #ddd;
  height: 452px;
  position: relative;
  overflow-y: auto;
}
.chat .chat-wrapper .message-list-wrapper .message-list {
  padding: 0;
}
.chat .chat-wrapper .message-list-wrapper .message-list li {
  display: block;
  padding: 20px 20px;
  clear: both;
  position: relative;
  color: black;
}
.chat .chat-wrapper .message-list-wrapper .message-list li.left .avatar {
  margin-right: 12px;
  margin-left: -12px;
  display: block;
  float: left;
  
}
.chat .chat-wrapper .message-list-wrapper .message-list li.left .avatar img {
  width: 60px;
  height: auto;
  border: 2px solid transparent;
   border-radius:100%;
}
.chat .chat-wrapper .message-list-wrapper .message-list li.left .avatar.available img {
  border-color: #2ecc71;
      width: 50px;
    height: 50px;
}
.chat .chat-wrapper .message-list-wrapper .message-list li.left .avatar.busy img {
  border-color: #ff530d;
}
.chat .chat-wrapper .message-list-wrapper .message-list li.left .username {
  float: left;
  display: none;
}
.chat .chat-wrapper .message-list-wrapper .message-list li.left .timestamp {
  text-align: left;
  display: block;
  color: #999;
  font-size: 10px;
  line-height: 18px;
  font-style: italic;
  margin-bottom: 4px;
}
.chat .chat-wrapper .message-list-wrapper .message-list li.left .timestamp i {
  margin-right: 4px;
}
.chat .chat-wrapper .message-list-wrapper .message-list li.left .body {
  display: block;
  width: 87%;
  float: left;
  position: relative;
  text-align:left;
}
.chat .chat-wrapper .message-list-wrapper .message-list li.left .body .message {
  font-size: 12px;
 font-weight: bold;
  display: inline-block;
  width: auto;
  height:auto;
  background: #E7E7E7;
  padding:7px ;
  border-radius: 15px;

}
.chat .chat-wrapper .message-list-wrapper .message-list li.left .body .message:before {
  content: '';
  display: block;
  position: absolute;
  width: 0;
  height: 0;
 
  margin-left: -7px;
}
.chat .chat-wrapper .message-list-wrapper .message-list li.left .body .message a.white {
  color: white;
  font-weight: bolder;
 
   
  text-decoration: underline;
}
.chat .chat-wrapper .message-list-wrapper .message-list li.left .body .message img {

  width: 100%;
  height: auto;
  margin-bottom: 5px;
}
.chat .chat-wrapper .message-list-wrapper .message-list li.right .avatar {
  margin-left: 12px;
  display: block;
  float: right;
}
.chat .chat-wrapper .message-list-wrapper .message-list li.right .avatar img {
  width: 50px;
  height: 50px;
  border: 2px solid transparent;
  border-radius:100%;
}
.chat .chat-wrapper .message-list-wrapper .message-list li.right .avatar.available img {
  border-color: #2ecc71;
     width: 50px;
    height: 50px;
}
.chat .chat-wrapper .message-list-wrapper .message-list li.right .avatar.busy img {
  border-color: #ff530d;
}
.chat .chat-wrapper .message-list-wrapper .message-list li.right .username {
  float: right;
  display: none;
}
.chat .chat-wrapper .message-list-wrapper .message-list li.right .timestamp {
  text-align: right;
  display: block;
  color: #999;
  font-size: 10px;
  line-height: 18px;
  font-style: italic;
  margin-bottom: 4px;
  
}
.chat .chat-wrapper .message-list-wrapper .message-list li.right .timestamp i {
  margin-right: 4px;
}
.chat .chat-wrapper .message-list-wrapper .message-list li.right .body {
  display: block;
  width: 87%;
  float: right;
  position: relative;
  text-align: right;
}
.chat .chat-wrapper .message-list-wrapper .message-list li.right .body .message {
  font-size: 12px;
 font-weight: bold;
  display: inline-block;
  width: auto;
  height:auto;
  background: #D1FAE5 ;
  color:#194B74;
  border-radius: 15px;
    padding:7px;
 
}
.chat .chat-wrapper .message-list-wrapper .message-list li.right .body .message:after {
  content: '';
  display: block;
  position: absolute;
  width: 0;
  height: 0;

 
  margin-right: -7px;
  -moz-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}
.chat .chat-wrapper .message-list-wrapper .message-list li.right .body .message a.white {
  color: white;
  font-weight: bold;
  
}
.chat .chat-wrapper .message-list-wrapper .message-list li.right .body .message img {
 
  width: 100%;
  height: auto;
  margin-bottom: 5px;
}
.chat .chat-wrapper .compose-area {
  padding: 10px 0;
  text-align: right;
}
.chat .chat-wrapper .compose-box {
  padding: 10px 0;
}
.chat .chat-wrapper .recipient-box {
  padding: 10px 0;
}
.chat .chat-wrapper .recipient-box .bootstrap-tagsinput {
  display: block;
  width: 100%;
  margin-bottom: 0;
}
@media (max-width: 767px) {
  .chat .chat-wrapper .chat-list-wrapper {
    border: 1px solid #ddd;
    height: 300px;
    overflow-y: auto;
  }
  .chat .chat-wrapper .chat-list-wrapper .chat-list {
    padding: 0;
  }
  .chat .chat-wrapper .chat-list-wrapper .chat-list li {
    display: block;
    padding: 20px 10px;
    clear: both;
    border-bottom: 1px solid #ddd;
  }
  
  .chat .chat-wrapper .chat-list-wrapper .chat-list li .body .header {
    margin-top: 4px;
    margin-bottom: 4px;
  }
  .chat .chat-wrapper .chat-list-wrapper .chat-list li .body .header .username {
    font-weight: bold;
  }
  .chat .chat-wrapper .chat-list-wrapper .chat-list li .body .header .timestamp {
    float: right;
    color: #999;
    font-size: 11px;
    line-height: 18px;
    font-style: italic;
    
  }
  .chat .chat-wrapper .chat-list-wrapper .chat-list li .body .header .timestamp i {
    margin-right: 4px;
    margin-top: 4px;
  }
  .chat .chat-wrapper .chat-list-wrapper .chat-list li .body p {
    display: none;
  }
  .chat .chat-wrapper .chat-list-wrapper .chat-list li.active {
    color: black;
  }
  .chat .chat-wrapper .chat-list-wrapper .chat-list li.active .body .timestamp {
    color: black;
  }
  .chat .chat-wrapper .chat-list-wrapper .chat-list li.new {
    font-weight: bolder;
  }
  .chat .chat-wrapper .chat-list-wrapper .chat-list li.new .body .timestamp {
    font-weight: bolder;
  }
  .chat .chat-wrapper .message-list-wrapper .message-list li.left .avatar {
    display: none;
  }
  .chat .chat-wrapper .message-list-wrapper .message-list li.left .username {
    display: inline-block;
    margin-right: 10px;
  }
  .chat .chat-wrapper .message-list-wrapper .message-list li.left .body {
    width: 100%;
  }
  .chat .chat-wrapper .message-list-wrapper .message-list li.right .avatar {
    display: none;
  }
  .chat .chat-wrapper .message-list-wrapper .message-list li.right .username {
    display: inline-block;
    margin-left: 10px;
  }
  .chat .chat-wrapper .message-list-wrapper .message-list li.right .timestamp {
    text-align: right;
    display: block;
    color: #999;
    font-size: 11px;
    line-height: 18px;
    font-style: italic;
    margin-bottom: 4px;
  }
  .chat .chat-wrapper .message-list-wrapper .message-list li.right .timestamp i {
    margin-right: 4px;
  }
  .chat .chat-wrapper .message-list-wrapper .message-list li.right .body {
    width: 100%;
  }
  .chat .chat-wrapper .recipient-box {
    margin-top: 30px;
  }
}

.btn-green {
    background-color:  #D1FAE5 ;

    border-color: #27ae60;
    color: white;
}

.mg-btm-10 {
    margin-bottom: 10px !important;
}

.panel-white {
    border: 1px solid #dddddd;
}
.panel {
    border-radius: 0;
    margin-bottom: 30px;
}
.border-top-green {
    border-top: 4px solid #27ae60 !important;
}

.fa {
    padding: 10px;
    font-size: 30px;
    width: 50px;
    text-align: center;
    text-decoration: none;
    margin: 0px 2px;
    color: #888b97;
}

</style>
<script>
    function redirectDiv(){
        // Scroll to the target div
        var targetElement = document.getElementById("targetDiv");
        targetElement.scrollIntoView({
            behavior: 'smooth'
        });
    }
    
    </script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<!-- <script src="http://91.234.35.26/iwiki-admin/v1.0.0/admin/js/jquery.nicescroll.min.js"></script> -->

<div class="container mt-5">
<div class="row">
<div class="col p-2" style="border-radius:18px;background-image: linear-gradient(to right, #77d4b5 ,#77d4b5 ,#d5fdfc, #f5f5f5);"><small style="padding-left:20px"><a href="<?php echo base_url(); ?>">Home</a> / Chat</small></div>
</div>
</div><br>
<div class="container mt-5" >

<div class="breadcrumb_container container mb-5">
                <div class="row breadcrumb_row">
                    <div class="breadcrumb_col col">
                        <div class="breadcrumbs">
                            <span class="me-2 handline"><a class="text-dark link-underline-opacity-0"
                                    href="<?php echo base_url();?>">Home</a></span>/<span
                                class="ms-2 handline">Chat</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb_container container mb-5">
<div class="row">
        <div class="col-sm-12">
            <div class="panel panel-white ">
                <div class="panel-body chat"> 
                    <div class="row chat-wrapper">  
                        <div class="col-md-4 ">
                             
                           <!--  <div class="compose-area"> 
                                <a href="javascript:void(0);" class="btn btn-default"><i class="fa fa-edit"></i> New Chat</a>
                            </div> -->
                            
                            <div>
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 550px;">
                                <div class="chat-list-wrapper" style="overflow-y: auto; width: auto; height: 550px;">
                                    <ul class="chat-list">
                                      <?php 
                            
                                   
                                      $chat =  get_all_chat($sender_id,$receiver_id);
                                    
 
                                      if(!empty($chat_list)){


                                      foreach ($chat_list as $key => $chat_per) {
                                         
                                          
                                          if($chat_per["category_id"]==1) {
                                              $profile = get_mobile_data($chat_per["product_id"]);
                                            
                                          }
                                          
                                        else if($chat_per["category_id"]==2) {
                                              $profile = get_electronic_data($chat_per["product_id"]); 
                                              
                                              
                                          }
                                            else if($chat_per["category_id"]==3) {
                                              $profile = get_furniture_data($chat_per["product_id"]);
                                          }
                                           else if($chat_per["category_id"]==4) {
                                              $profile = get_fashion_data($chat_per["product_id"]);
                                          }
                                      
                                           else if($chat_per["category_id"]==5) {
                                              $profile = get_bike_data($chat_per["product_id"]);
                                             
                                      
                                             
                                          }
                                            else if($chat_per["category_id"]==6) {
                                              $profile = get_car_data($chat_per["product_id"]);
                                          }
                                          
                                           else if($chat_per["category_id"]==7) {
                                              $profile = get_book_data($chat_per["product_id"]);
                                          }
                                          else if($chat_per["category_id"]==8) {
                                              $profile = get_jobs_data($chat_per["product_id"]);
                                          }
                                          else if($chat_per["category_id"]==9) {
                                              $profile = get_services_data($chat_per["product_id"]);
                                          }
                                          else if($chat_per["category_id"]==10) {
                                              $profile = get_Pets_data($chat_per["product_id"]);
                                          }
                                          else if($chat_per["category_id"]==11) {
                                              $profile = get_properties_sale_data($chat_per["product_id"]);
                                          }
                                          else if($chat_per["category_id"]==12) {
                                              $profile = get_properties_rent_data($chat_per["product_id"]);
                                             
                                          }
                                          else if($chat_per["category_id"]==13) {
                                              $profile = get_kids_data($chat_per["product_id"]);
                                          }
                                          else if($chat_per["category_id"]==14) {
                                              $profile = get_bussiness_data($chat_per["product_id"]);
                                          }
                                          else if($chat_per["category_id"]==15) {
                                              $profile = get_other_data($chat_per["product_id"]);
                                          }
                                        if($chat_per['sender_id'] != $_SESSION['id']){

                                          $username = get_user_phone($chat_per['sender_id']);
 
                                        }elseif($chat_per['receiver_id'] != $_SESSION['id']){

                                          $username = get_user_phone($chat_per['receiver_id']);

                                       
                                        }

                                       
                                        ?>
                                      
                                      <li class="new<?php echo ($username->user_id).($profile->id); ?>" onclick="redirectDiv(); getchat(<?php echo $username->user_id; ?>, <?php echo $_SESSION['id']; ?>,<?=$profile->id?>,<?=$profile->category_id?>);"  style="">
                                            <span class="avatar available">
                                                   <img src="<?php echo base_url().$profile->cover_img."";?>"  class="img-circle rounded-5">
                                            </span>
                                            <div class="body">
                                                <div class="header">
                                                     <span class="username"><?=ucfirst($profile->title)?>
                                                        </span><br>
                                                    <span class="username">
                                                         <?php

                                                      if(!empty($username->name)){

                                                        echo ucfirst($username->name); 

                                                      }else{

                                                        echo ucfirst($username->phone);

                                                      }?>
                                                     </span>
                                                   <!--  <small class="timestamp text-muted">
                                                        <i class="fa fa-clock-o"></i><?php echo date('Y-m-d') ?>
                                                    </small> -->
                                                </div>
                                              <!--   <p>
                                                   Hey, have you finished up with the Ladybug project?
                                                </p> -->
                                            </div>
                                        </li>

                                     <?php
                                      }

                                      }else if(!empty($chat)){

                                        
                                        $username = get_user_phone($receiver_id);


                                        ?>




                                        <li class="new<?php echo ($username->user_id).($profile->id); ?>" onclick="return getchat(<?php echo $username->user_id; ?>,<?php echo $_SESSION['id']; ?>);"  style="padding: 45px 20px;">
                                            <span class="avatar available">

                                                   


                                                   <img src="<?php echo $profile->thumbnails;?>" alt="avatar" class="img-circle">



                                            
                                               <!--  <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar" class="img-circle">
 -->                                            </span>
                                            <div class="body">
                                                <div class="header">
                                                    <span class="username">
                                                      <?php

                                                      if(!empty($username->username)){

                                                        echo ucfirst($username->username); 

                                                      }else{

                                                        echo ucfirst($username->phone);

                                                      }


                                                      


                                                     ?></span>
                                                   <!--  <small class="timestamp text-muted">
                                                        <i class="fa fa-clock-o"></i><?php echo date('Y-m-d') ?>
                                                    </small> -->
                                                </div>
                                              <!--   <p>
                                                   Hey, have you finished up with the Ladybug project?
                                                </p> -->
                                            </div>
                                        </li>  


                                        <?php

                                         //print_r($sender_id);
                                         //print_r($receiver_id);


                                      }else{

                                        echo "<h4 style='padding-top:30px;text-align: center;' >No Chat Found</4>";
                                      }



                                      ?>
                                   
                                    </ul>
                                </div><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 478.639px; background: rgb(0, 0, 0);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div>
                            </div>
                           
                        </div>
                        
                        <div class="col-md-8" id="targetDiv">
                           
                 
                                                     
                            <div>
 
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 452px;">
                                <!-- <div class="message-list-wrapper" style="overflow: hidden; width: auto; height: 452px;"> -->
                                
                                
                                	<div class="message-list-wrapper" style=" width: auto; height: 452px;border: 0px;">
                                	      <!--<h3 id="action_menu_btn"><i class="fa fa-ellipsis-v" style="float:right;padding-top: 20px;padding-right: 30px;"></i></h3>-->
							<!--<div class="action_menu">-->
							<!--	<ul>-->
							
                                
                               


       <!--                                  <li id="btn-unblock"> Un-Block</li>-->
       <!--                                  <li id="btn-block"> Block</li>-->
                                       

                                       
							<!--	</ul>-->
							<!--</div>-->
                                    <ul class="message-list" >


                                      <?  

                                        $chat =  get_all_chat($sender_id,$receiver_id, $product_id);

                                  

                                        $allchat = count($chat);

                                  

                                      ?>

                                       
                                       
                                      
                                    <!--  <?php if($allchat > 4){  ?>       -->

                                    <!--    <li class="text-center loadmoremsg" >-->
                                    <!--        <a href="javascript:void(0);" id="load_more" class="btn btn-default">Load More Messages</a>-->
                                    <!--    </li>-->

                                    <!--  <?php }else{ ?>-->
                                         

                                    <!--    <li class="text-center loadmoremsg" style="display: none;">-->
                                    <!--        <a href="javascript:void(0);" id="load_more" class="btn btn-default">Load More Messages</a>-->
                                    <!--    </li>-->



                                    <!--<?php  } ?>  -->
                                        <ul id="load-list">
                                        
                                        </ul>

                                        <input type="hidden" id="load_cound" value="4">

                                        <ul id="message-list">

                                          <li id="default-page" style="text-align: center;">
                                           
                                     
                                            

                                          </li>

                                        </ul>
                                      
                                    </ul>
                                </div>

                                <div class="slimScrollBar" style="width: 7px; position: absolute; top: 265px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 187.092px; background: rgb(0, 0, 0);"></div>

                                <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div>

                              </div>
                                           <input type="hidden" name="sender_id" id="sender_id" value="<?php echo $sender_id; ?>">
                                            <input type="hidden" name="receiver_id" id="receiver_id" value="<?php echo $receiver_id; ?>">
                                            <input type="hidden" name="product_id" id="product_id" value="<?php echo $product_id; ?>">
                                            <input type="hidden" name="category_id" id="category_id" value="<?php echo $category_id; ?>">
                                            
                                
                               
                              <?php 
                             
  
                            $blocked = check_block($sender_id,$receiver_id,$product_id,$category_id);


                                
                                ?>

                               <div class="compose-box" style="display: none;">
                                    
                                    <div class="row">
                                      <?php if(empty($blocked)){ ?>
                                       <div class="col-10 mg-btm-10">
                                           <textarea id="message" style="backgound-color:#77d4b5 " class="form-control " name="message" placeholder="Type your message here..." onkeyup="return checkchatmessage();"></textarea>
                                        </div>

                                          <div class="col-2 mg-btm-10 "> 
                                            <button type="button" id="btn-send" class="btn btn-green  btn-sm">
<img style="padding:5px;" src="<?php echo base_url();?>assets/images/arrow.png">                             </button>
                                         
 <?php } ?>
                                            
                                            <?php 

                                            if(!empty($blocked) && $blocked->receiver_id != $_SESSION['id']){
                                              ?>

                                               <button type="button" id="btn-unblock" class="btn  btn-sm " style="margin-top: 16px;background-color: orange;color: #fff;">
                                               Un-Block
                                               </button>

                                           <?php } else if(!empty($blocked) && $blocked->receiver_id == $_SESSION['id'] && $blocked->product_id == $product_id && $blocked->category_id == $category_id){ ?>

                                             <button type="button" id="btn-block" class="btn  btn-sm " style="margin-top: 16px;background-color: orange;color: #fff;">
                                               You are a Blocked
                                            </button>

                                         <?php }
                                            ?>
                                           
                                        </div> 
                                    </div> 
                                    

                                                               
                                </div>


                                                            
                            </div>
                            
                        </div>                                    
                    </div> 
                    
                </div> 
            </div>
        </div>

    </div>
                                           </div>
</div>

<script type="text/javascript">

function checkchatmessage(){

      //var verify_otp = document.getElementById('verify_otp');
       
        
       // var message = document.getElementById('message');


        var message = $("textarea#message").val();
      
        var sender_id = $('#sender_id').val();
        var receiver_id = $('#receiver_id').val();
        //var goodColor = "#0C6";
        //var badColor = "#FF9B37";


     
      
        if(message == "" && sender_id == "" && receiver_id == "" || sender_id == receiver_id){

             $('#btn-send').prop('disabled', true);
        
         }else{

            $('#btn-send').prop('disabled', false);

        }



}




function getchat(receiver_id,sender_id, product_id,category_id){

 
  //var res = "";
   $("li").removeClass("active");
   $(".new"+receiver_id+product_id).addClass("active");

      var allch =  $("#allchat").val();

    jQuery.ajax({
    type: "POST",
    url: "<?php echo base_url('/welcome/chatdata'); ?>",
    data: {sender_id: sender_id,receiver_id:receiver_id, product_id:product_id, category_id:category_id},
    success: function(res) 
    {

       $('#sender_id').val(sender_id);
       $('#receiver_id').val(receiver_id);
       $('#product_id').val(product_id);
       $('#category_id').val(category_id);
     


   $(".compose-box").show();
      

      $("#message-list").html(res);
         
      $("#block-list").html(res);
         // location.reload();
         //$("#load-list").prepend("");

       

       $('#load_cound').val("10");
      
    }
    });

}



setInterval(function()
{ 
	  var sender_id = $('#sender_id').val();
    var receiver_id = $('#receiver_id').val();
        var product_id = $('#product_id').val();
         var category_id = $('#category_id').val();
      jQuery.ajax({
      type: "POST",
      url: "<?php echo base_url('/welcome/chatdata'); ?>",
      data: {sender_id: sender_id,receiver_id:receiver_id, product_id:product_id,category_id:category_id},
      success: function(res) 
      {
        
     
           $("#message-list").html(res);

               
      }
    
    });


        jQuery.ajax({
      type: "POST",
      url: "<?php echo base_url('/welcome/getallchat'); ?>",
      data: {sender_id: sender_id,receiver_id:receiver_id},
      success: function(resu) 
      {
        
      
        $("#allchat").val(resu);

        if(resu == 0){


             $('#default-page').show();

           }
        
      }
    
    });




}, 1000);



// Ajax post
$(document).ready(function() 
{

var sender_id = $('#sender_id').val();
var receiver_id = $('#receiver_id').val();

if(sender_id != "" && receiver_id != "" && sender_id != receiver_id){

     $(".compose-box").show();


}


//alert($('#message-list li').length);


$("#btn-block").click(function() 
{
//var message = $('textarea#message').val();
var sender_id = $('#sender_id').val();
var receiver_id = $('#receiver_id').val();
var product_id = $('#product_id').val();
var category_id = $('#category_id').val();

    jQuery.ajax({
    type: "POST",
    url: "<?php echo base_url('/welcome/block'); ?>",
    data: {sender_id: sender_id,receiver_id:receiver_id,product_id:product_id,category_id:category_id},
    success: function(res) 
    {
   
  location.reload();
    }
    });
 

});


$("#btn-unblock").click(function() 
{
//var message = $('textarea#message').val();
var sender_id = $('#sender_id').val();
var receiver_id = $('#receiver_id').val();
var product_id = $('#product_id').val();
var category_id = $('#category_id').val();
/*alert(message);*/

    jQuery.ajax({
    type: "POST",
    url: "<?php echo base_url('/welcome/unblock'); ?>",
    data: {sender_id: sender_id,receiver_id:receiver_id,product_id:product_id,category_id:category_id},
    success: function(res) 
    {
    location.reload();
      
    }
    });
 

});



$("#btn-send").click(function() 
{
var message = $('textarea#message').val();
var sender_id = $('#sender_id').val();
var receiver_id = $('#receiver_id').val();
var product_id = $('#product_id').val();
var category_id = $('#category_id').val();

  if(message != "" )
  {
    jQuery.ajax({
    type: "POST",
    url: "<?php echo base_url('/welcome/savechat'); ?>",
    data: {message: message, sender_id: sender_id,receiver_id:receiver_id, product_id:product_id,category_id:category_id},
    success: function(res) 
    {
       
      $("#message-list").html(res);

      $('textarea#message').val("");
      //location.reload();
      
    }
    });
  }
  else
  {
  alert("pls fill all fields first");
  }

});

$("#load_more").click(function() 
{
var load_cound = $('#load_cound').val();
var sender_id = $('#sender_id').val();
var receiver_id = $('#receiver_id').val();
var product_id = $('#product_id').val();
var category_id = $('#category_id').val();
var allchat = $('#allchat').val();
//var load_count = $('#load_count').val();


/*alert(message);*/
  if(load_cound != "" )
  {
    jQuery.ajax({
    type: "POST",
    url: "<?php echo base_url('/welcome/loadchat'); ?>",
    data: {load_cound: load_cound, sender_id: sender_id,receiver_id:receiver_id, product_id:product_id,category_id:category_id},
    success: function(res) 
    {
      //$("#load-list").html(res);
       
       $("#load-list").prepend(res);

       var row = load_cound * 2

       $('#load_cound').val(row);


       //alert(allchat);
       //alert(row);

       if(allchat <= row){

               $(".loadmoremsg").hide();
           }else{

              $(".loadmoremsg").show();
           }
      //$('textarea#message').val("");
      //location.reload();
      
    }
    });
  }
  else
  {
  alert("pls fill all fields first");
  }

});




$('#btn-send').prop('disabled', true);






});
</script>

<script type="text/javascript">
  
	$(document).ready(function(){
$('#action_menu_btn').click(function(){
	$('.action_menu').toggle();
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
  </div>
</div>



