<?php include('header.php');?>
<?php include('sidebar.php');?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style>
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
/* Firefox */
input[type=number] {
    -moz-appearance: textfield;
}
</style>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Post Banner
        </h1>
    </section>
    <div class="container" style="margin-top:20px;">
        <section class="content" style="padding-left: 270px;">
        <p><b>Banner 1</b></p>
            <form action="<?php echo base_url();?>Admin/post_banner_1" method="post" enctype='multipart/form-data'
                id="career_form">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-xs-6">
                        <div class="form-group">
                            <label for="Title">Banner Image : size(490 X 230 px )</label>
                            <!-- <img src=""> -->
                            <input type="file" name="banner_image" id="banner_image" required>
                            <!-- <input type="text" class="form-control" id="agent_name" name="agent_name"  placeholder="Agent Name" maxlength="15"> -->
                            <p id="head" style="color:#ff0000"></p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-xs-6">
                        <div class="form-group">
                            <label for="Title">Url :</label>
                            <input type="text" class="form-control" name="url" placeholder="url" maxlength="50"
                                required>
                            <p id="head2" style="color:#ff0000"></p>
                        </div>
                    </div>
                </div>
                <input type="hidden" class="form-control" name="banner_id" placeholder="url" value="1">
                <button type="submit" id="submitbanner" class="btn btn-primary">Add</button>
            </form>
             <br><br><br><br><br>
             <p><b>Banner 2</b></p>
            <form action="<?php echo base_url();?>Admin/post_banner_1" method="post" enctype='multipart/form-data'
                id="career_form">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-xs-6">
                        <div class="form-group">
                            <label for="Title">Banner Image : size(490 X 230 px )</label>
                            <!-- <img src=""> -->
                            <input type="file" name="banner_image" id="banner_image" required>
                            <!-- <input type="text" class="form-control" id="agent_name" name="agent_name"  placeholder="Agent Name" maxlength="15"> -->
                            <p id="head" style="color:#ff0000"></p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-xs-6">
                        <div class="form-group">
                            <label for="Title">Url :</label>
                            <input type="text" class="form-control" name="url" placeholder="url" maxlength="50"
                                required>
                            <p id="head2" style="color:#ff0000"></p>
                        </div>
                    </div>
                </div>
                <input type="hidden" class="form-control" name="banner_id" placeholder="url" value="2">
                <button type="submit" id="submitbanner" class="btn btn-primary">Add</button>
            </form>
        </section>
    </div>
</div>
<script type="text/javascript">
function agentsubmit() {
    var agent_name = $('#agent_name').val();
    var agent_mobile = $('#agent_mobile').val();
    // To Check Empty Form Fields.
    //alert(agent_name);
    //alert(agent_mobile);
    if (agent_name == "" && agent_mobile == "") {
        $('#head').text("* Please fill Agent Name field! *");
        $('#head2').text("* Please fill Agent Mobile field! *");
        $("#agent_name").focus();
        //return false;
    } else if (agent_mobile == "") {
        $('#head').text("");
        $('#head2').text("* Please fill Agent Mobile field! *");
        $("#agent_mobile").focus();
        //return false;
    } else {
        $("#career_form").submit();
        //alert("Form Submitted Successfuly!");
        //return true;
    }
}
$(document).ready(function() {
    $('#submitagent').click(function() {
        // Initializing Variables With Form Element Values
        var agent_name = $('#agent_name').val();
        var agent_mobile = $('#agent_mobile').val();
        // To Check Empty Form Fields.
        //alert(agent_name);
        //alert(agent_mobile);
        if (agent_name == "" && agent_mobile == "") {
            $('#head').text("* Please fill Agent Name field! *");
            $('#head2').text("* Please fill Agent Mobile field! *");
            $("#agent_name").focus();
            //return false;
        } else if (agent_mobile == "") {
            $('#head').text("");
            $('#head2').text("* Please fill Agent Mobile field! *");
            $("#agent_mobile").focus();
            //return false;
        } else {
            $("#career_form").submit();
            //alert("Form Submitted Successfuly!");
            //return true;
        }
    });
});
</script>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<!-- <script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
<?php include('footer.php'); ?>