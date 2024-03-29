<?php include('header.php');?>
<?php include('sidebar.php');?>
<script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
<link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
<style type="text/css">
.dt-buttons {
    float: right !important;
}

.buttons-excel {
    float: right !important;
    margin-left: 10px !important;
    margin-right: 10px !important;
    border-radius: 39px !important;
    background-color: #00c0ef !important;
    color: #fff !important;
}

table {
    overflow: scroll;
}

table td {
    max-width: 120px;
    white-space: nowrap;
    text-overflow: ellipsis;
    word-break: break-all;
    overflow: hidden;
}

.ratingbtn {
    border: none;
    padding: 15px;
    background: none;
}

.ratingbtn:hover {
    background: #ddd;
    border-radius: 10px;
}

.btn-grey {
    background-color: #D8D8D8;
    color: #FFF;
}

.rating-block {
    background-color: #FAFAFA;
    border: 1px solid #EFEFEF;
    padding: 15px 15px 20px 15px;
    border-radius: 3px;
}

.bold {
    font-weight: 700;
}

.padding-bottom-7 {
    padding-bottom: 7px;
}

.review-block {
    background-color: #FAFAFA;
    border: 1px solid #EFEFEF;
    padding: 15px;
    border-radius: 3px;
    margin-bottom: 15px;
    overflow-y: scroll;
    height: 500px;
}

.review-block-name {
    font-size: 12px;
    margin: 10px 0;
}

.review-block-date {
    font-size: 12px;
}

.review-block-rate {
    font-size: 13px;
    margin-bottom: 15px;
}

.review-block-title {
    font-size: 15px;
    font-weight: 700;
    margin-bottom: 10px;
}

.review-block-description {
    font-size: 13px;
}

.rate {
    height: 46px;
    padding: 0 10px;
}

.rate:not(:checked)>input {
    position: absolute;
    top: -9999px;
}

.rate:not(:checked)>label {
    float: right;
    width: 1em;
    overflow: hidden;
    white-space: nowrap;
    cursor: pointer;
    font-size: 30px;
    color: #ccc;
}

.rate:not(:checked)>label:before {
    content: '★ ';
}

.rate>input:checked~label {
    color: #ffc700;
}

.rate:not(:checked)>label:hover,
.rate:not(:checked)>label:hover~label {
    color: #deb217;
}

.rate>input:checked+label:hover,
.rate>input:checked+label:hover~label,
.rate>input:checked~label:hover,
.rate>input:checked~label:hover~label,
.rate>label:hover~input:checked~label {
    color: #c59b08;
}

.modal-body {
    margin-left: 10%;
    margin-right: 10%;
    background-color: #012F53 !important;
    border-radius: 15px;
    padding-left: 30px;
    padding-right: 30px;
}
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Products
        </h1>
    </section>
    <section class="content">
        <div class="row">
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
        </div>
        <div class="box">
            <div class="box-body">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Normal Products</a></li>
                    <li><a data-toggle="tab" href="#menu1">Boost Products</a></li>
                    <li><a data-toggle="tab" href="#menu2">Donate Product</a></li>
                    <li><a data-toggle="tab" href="#menu3">Active Product</a></li>
                    <li><a data-toggle="tab" href="#menu4">De-Active Product</a></li>
                </ul>
                <div class="tab-content" style="overflow: scroll !important;">
                    <div id="home" class="tab-pane fade in active" style="margin-top: 34px;">
                        <table id="example3" class="table table-bordered table-striped"
                            style="width: 100% !important;overflow: scroll !important;">
                            <thead>
                                <tr>
                                    <th>S.no</th>
                                    <th>Post</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Type</th>
                                    <th>Brand</th>
                                    <th>Price</th>
                                    <th>
                                      Verified Type
                                      <a href="#" class="sort-icon" data-sort-type="asc" style="display:inline;">&#x25B2;</a>
                                      <a href="#" class="sort-icon" data-sort-type="desc">&#x25BC;</a>
                                  </th>
                                    <th>Pay Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                            $allproduct =get_all_normal();
                            $i=1;
                                foreach ($allproduct as $value) {
                                // print_r($posts);
                                  ?>
                                <tr id="<?php echo $value->id; ?>">
                                    <td><?php echo $i;?></td>
                                    <td><a
                                            href="<?php echo base_url()."welcome/productdetail/".$value->category_id.'/'.$value->id.'/'.$value->subcategory_id."";?>"><?php echo  $value->title;?></a>
                                    </td>
                                    <td> <?php 
                // $image = get_product_image($value->product_id); 
               // print_r($image); 
                ?>
                                        <?php ?>
                                        <img src="<?php echo base_url().$value->cover_img."";?>" class="img-responsive"
                                            style="width:100px;height: 100px;" alt="Image">
                                        <?php  ?>
                                    </td>
                                    <td><?=$this->db->get_where("category", "id=".($value->category_id))->row()->category?>
                                    </td>
                                    <td><?php echo  $value->type;?></td>
                                    <td><?php echo  $value->brand;?></td>
                                    <td><?php echo  $value->price;?></td>
                                    <td><?php echo  $value->verified_admin;?></td>
                                    <td><select id="pay_type" data-product_id="<?php echo $value->id?>"
                                            data-category_id="<?php echo $value->category_id?>" class="prioritydrop">
                                            <option value="0" <?=(($value->pay_type==0)?"selected":"")?>>Normal</option>
                                            <option value="1" <?=(($value->pay_type==1)?"selected":"")?>>Bost</option>
                                            <option value="2" <?=(($value->pay_type==2)?"selected":"")?>>Donate</option>
                                        </select></td>
                                </tr>
                                <?php $i++;} ?>
                            </tbody>
                        </table>
                    </div>
                    <div id="menu1" class="tab-pane fade" style="margin-top: 34px;">
                        <table id="example4" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.no</th>
                                    <th>Post</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Type</th>
                                    <th>verified option</th>
                                    <th>Brand</th>
                                    <th>Price</th>
                                   <th>
                                      Verified Type
                                      <a href="#" class="sort-icon" data-sort-type="asc" style="display:inline;">&#x25B2;</a>
                                      <a href="#" class="sort-icon" data-sort-type="desc">&#x25BC;</a>
                                  </th>
                                    <th>Pay Type</th>
                                    <th>verify</th>
                                </tr>
                            </thead>
                            <tbody id="sortable">
                                <?php 
          $urgent = get_all_boost_admin();
$i=1;
foreach($urgent as $valueu){
           // print_r($posts);
            ?>
                                <tr class="featuredpro" id="<?php echo $valueu->id; ?>">
                                    <td><?php echo $i;?></td>
                                    <td><a
                                            href="<?php echo base_url()."welcome/productdetail/".$valueu->category_id.'/'.$valueu->id.'/'.$valueu->subcategory_id."";?>"><?php echo  $valueu->title;?></a>
                                    </td>
                                    <td> <?php 
                // $image = get_product_image($value->product_id); 
               // print_r($image); 
                ?>
                                        <?php ?>
                                        <img src="<?php echo base_url().$valueu->cover_img."";?>" class="img-responsive"
                                            style="width:100px;height: 100px;" alt="Image">
                                        <?php  ?>
                                    </td>
                                    <td><?=$this->db->get_where("category", "id=".($valueu->category_id))->row()->category?>
                                    </td>
                                    <td><?php echo  $valueu->type;?></td>
                                    <td><?php if(isset($valueu->verified_admin)) { echo  $valueu->verified_admin ; } ?>
                                    </td>
                                    <td><?php echo  $valueu->brand;?></td>
                                    <td><?php echo  $valueu->price;?></td>
                                    <td><?php echo  $valueu->verified_admin;?></td>
                                    <td><select id="pay_type" data-product_id="<?php echo $valueu->id?>"
                                            data-category_id="<?php echo $valueu->category_id?>" class="prioritydrop">
                                            <option value="2" <?=(($valueu->pay_type==2)?"selected":"")?>>Donate
                                            </option>
                                            <option value="1" <?=(($valueu->pay_type==1)?"selected":"")?>>Boost</option>
                                            <option value="0" <?=(($valueu->pay_type==0)?"selected":"")?>>Normal
                                            </option>
                                        </select></td>
                                    <td>
                                        <?php if($valueu->verified_product == 1){?>
                                        <div class="col-12" style="text-align:center;">
                                            <button class=" btn btn-info"><span class="pe-2"></span><span
                                                    class="btn_Verified_text" type="submit"
                                                    name="submit">Verified</span></button>
                                        </div>
                                        <?php }else{ ?>
                                        <form class="" action="<?php echo base_url(); ?>admin/setshoplist"
                                            method="POST">
                                            <input type="hidden" name="product_id" id="product_id"
                                                value="<?php echo $valueu->id; ?>">
                                            <input type="hidden" name="category_id" id="category_id"
                                                value="<?php echo $valueu->category_id; ?>">
                                            <input type="hidden" name="shop_id" id="sender_id" value="0">
                                            <input type="hidden" name="seller_id" id="receiver_id"
                                                value="<?php echo $valueu->user_id; ?>">
                                            <input type="hidden" name="shop_owner_user_id" id="sender_id" value="0">
                                            <input type="hidden" name="subcategory_id" id="receiver_id"
                                                value="<?php echo $valueu->subcategory_id; ?>">
                                            <div class="col-12" style="text-align:center;">
                                                <button class=" btn btn-info"><span class="pe-2"></span><span
                                                        class="btn_Verified_text" type="submit"
                                                        name="submit">Verify</span></button>
                                            </div>
                                        </form>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <?php $i++; } ?>
                            </tbody>
                        </table>
                    </div>
                    <div id="menu2" class="tab-pane fade" style="margin-top: 34px;">
                        <table id="example5" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.no</th>
                                    <th>Post</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Type</th>
                                    <th>Brand</th>
                                    <th>Price</th>
                                   <th>
                                      Verified Type
                                      <a href="#" class="sort-icon" data-sort-type="asc" style="display:inline;">&#x25B2;</a>
                                      <a href="#" class="sort-icon" data-sort-type="desc">&#x25BC;</a>
                                  </th>
                                    <th>Paytype</th>
                                </tr>
                            </thead>
                            <tbody id="sortable">
                                <?php 
          $sponsored = get_all_donate_admin();
$i=1;
foreach($sponsored as $valuef){
           // print_r($posts);
            ?>
                                <tr class="featuredpro" id="<?php echo $valuef->id; ?>">
                                    <td><?php echo $i;?></td>
                                    <td><a
                                            href="<?php echo base_url()."welcome/productdetail/".$valuef->category_id.'/'.$valuef->id.'/'.$valuef->subcategory_id."";?>"><?php echo  $valuef->title;?></a>
                                    </td>
                                    <td> <?php 
                // $image = get_product_image($value->product_id); 
               // print_r($image); 
                ?>
                                        <?php ?>
                                        <img src="<?php echo base_url().$valuef->cover_img."";?>" class="img-responsive"
                                            style="width:100px;height: 100px;" alt="Image">
                                        <?php  ?>
                                    </td>
                                    <td><?=$this->db->get_where("category", "id=".($valuef->category_id))->row()->category?>
                                    </td>
                                    <td><?php echo  $valuef->type;?></td>
                                    <td><?php echo  $valuef->brand;?></td>
                                    <td><?php echo  $valuef->price;?></td>
                                    <td><?php echo  $valuef->verified_admin;?></td>
                                    <td><select id="pay_type" data-product_id="<?php echo $valuef->id?>"
                                            data-category_id="<?php echo $valuef->category_id?>" class="prioritydrop">
                                            <option value="1" <?=(($valuef->pay_type==1)?"selected":"")?>>Boost</option>
                                            <option value="2" <?=(($valuef->pay_type==2)?"selected":"")?>>Donate
                                            </option>
                                            <option value="0" <?=(($valuef->pay_type==0)?"selected":"")?>>Normal
                                            </option>
                                        </select></td>
                                </tr>
                                <?php $i++; } ?>
                            </tbody>
                        </table>
                    </div>
                    <div id="menu3" class="tab-pane fade" style="margin-top: 34px;">
                        <table id="example6" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.no</th>
                                    <th>Post</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Type</th>
                                    <th>Brand</th>
                                    <th>Price</th>
                                   <th>
                                      Verified Type
                                      <a href="#" class="sort-icon" data-sort-type="asc" style="display:inline;">&#x25B2;</a>
                                      <a href="#" class="sort-icon" data-sort-type="desc">&#x25BC;</a>
                                  </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="sortable">
                                <?php 
$active = get_all_active_Product();
$i=1;
foreach($active as $valuea){
// print_r($posts);
?>
                                <tr class="featuredpro" id="<?php echo $valuea->id; ?>">
                                    <td><?php echo $i;?></td>
                                    <td><a
                                            href="<?php echo base_url()."welcome/productdetail/".$valuea->category_id.'/'.$valuea->id.'/'.$valuea->subcategory_id."";?>"><?php echo  $valuea->title;?></a>
                                    </td>
                                    <td> <?php 
// $image = get_product_image($value->product_id); 
// print_r($image); 
?>
                                        <?php ?>
                                        <img src="<?php echo base_url().$valuea->cover_img."";?>" class="img-responsive"
                                            style="width:100px;height: 100px;" alt="Image">
                                        <?php  ?>
                                    </td>
                                    <td><?=$this->db->get_where("category", "id=".($valuea->category_id))->row()->category?>
                                    </td>
                                    <td><?php echo  $valuea->type;?></td>
                                    <td><?php echo  $valuea->brand;?></td>
                                    <td><?php echo  $valuea->price;?></td>
                                    <td><?php echo  $valuea->verified_admin;?></td>
                                    <td>
                                        <input type="button" name="active_status" value="Deactive"
                                            class="btn btn-info admindeactive"
                                            data-productid="<?php echo $valuea->id ;?>"
                                            data-categoryid="<?php echo $valuea->category_id ;?>">
                                    </td>
                                </tr>
                                <?php $i++; } ?>
                            </tbody>
                        </table>
                    </div>
                    <div id="menu4" class="tab-pane fade" style="margin-top: 34px;">
                        <table id="example7" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.no</th>
                                    <th>Post</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Type</th>
                                    <th>Brand</th>
                                    <th>Price</th>
                                   <th>
                                      Verified Type
                                      <a href="#" class="sort-icon" data-sort-type="asc" style="display:inline;">&#x25B2;</a>
                                      <a href="#" class="sort-icon" data-sort-type="desc">&#x25BC;</a>
                                  </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="sortable">
                                <?php 
$deactive = get_all_deactive_Product();
$i=1;
foreach($deactive as $valued){
// print_r($posts);
?>
                                <tr class="featuredpro" id="<?php echo $valued->id; ?>">
                                    <td><?php echo $i;?></td>
                                    <td><a
                                            href="<?php echo base_url()."welcome/productdetail/".$valued->category_id.'/'.$valued->id.'/'.$valued->subcategory_id."";?>"><?php echo  $valued->title;?></a>
                                    </td>
                                    <td> <?php 
// $image = get_product_image($value->product_id); 
// print_r($image); 
?>
                                        <?php ?>
                                        <img src="<?php echo base_url().$valued->cover_img."";?>" class="img-responsive"
                                            style="width:100px;height: 100px;" alt="Image">
                                        <?php  ?>
                                    </td>
                                    <td><?=$this->db->get_where("category", "id=".($valued->category_id))->row()->category?>
                                    </td>
                                    <td><?php echo  $valued->type;?></td>
                                    <td><?php echo  $valued->brand;?></td>
                                    <td><?php echo  $valued->price;?></td>
                                    <td><?php echo  $valued->verified_admin;?></td>
                                    <td>
                                        <input type="button" name="admin_approved" value="Active"
                                            class="btn btn-info adminactive" data-productid="<?php echo $valued->id ;?>"
                                            data-categoryid="<?php echo $valued->category_id ;?>">
                                    </td>
                                </tr>
                                <?php $i++; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script>
    $(document).ready(function () {
        // Initial sort order (ascending by default)
        let sortOrder = "asc";

        // Function to update the sort order and sort the table
        function sortTable() {
            let $table = $('#example3');
            let $tbody = $table.find('tbody');
            let rows = $tbody.find('tr').get();

            rows.sort(function (a, b) {
                let aValue = $(a).find('td:eq(7)').text();
                let bValue = $(b).find('td:eq(7)').text();

                return sortOrder === "asc" ? aValue.localeCompare(bValue) : bValue.localeCompare(aValue);
            });

            $tbody.html(rows);
        }

        // Function to toggle the sort order and update the sort icons
        function toggleSortOrder(e) {
            e.preventDefault(); // Prevent default behavior of anchor tag
            sortOrder = sortOrder === "asc" ? "desc" : "asc";
            $('.sort-icon').toggle();
            sortTable();
        }

        // Attach click event to the sort icons
        $('.sort-icon').click(toggleSortOrder);

        // Sort the table initially
        sortTable();
    });

    
</script>


<script>
    $(document).ready(function () {
        // Initial sort order (ascending by default)
        let sortOrder = "asc";

        // Function to update the sort order and sort the table
        function sortTable() {
            let $table = $('#example4');
            let $tbody = $table.find('tbody');
            let rows = $tbody.find('tr').get();

            rows.sort(function (a, b) {
                let aValue = $(a).find('td:eq(7)').text();
                let bValue = $(b).find('td:eq(7)').text();

                return sortOrder === "asc" ? aValue.localeCompare(bValue) : bValue.localeCompare(aValue);
            });

            $tbody.html(rows);
        }

        // Function to toggle the sort order and update the sort icons
        function toggleSortOrder(e) {
            e.preventDefault(); // Prevent default behavior of anchor tag
            sortOrder = sortOrder === "asc" ? "desc" : "asc";
            $('.sort-icon').toggle();
            sortTable();
        }

        // Attach click event to the sort icons
        $('.sort-icon').click(toggleSortOrder);

        // Sort the table initially
        sortTable();
    });

    
</script>


<script>
    $(document).ready(function () {
        // Initial sort order (ascending by default)
        let sortOrder = "asc";

        // Function to update the sort order and sort the table
        function sortTable() {
            let $table = $('#example5');
            let $tbody = $table.find('tbody');
            let rows = $tbody.find('tr').get();

            rows.sort(function (a, b) {
                let aValue = $(a).find('td:eq(7)').text();
                let bValue = $(b).find('td:eq(7)').text();

                return sortOrder === "asc" ? aValue.localeCompare(bValue) : bValue.localeCompare(aValue);
            });

            $tbody.html(rows);
        }

        // Function to toggle the sort order and update the sort icons
        function toggleSortOrder(e) {
            e.preventDefault(); // Prevent default behavior of anchor tag
            sortOrder = sortOrder === "asc" ? "desc" : "asc";
            $('.sort-icon').toggle();
            sortTable();
        }

        // Attach click event to the sort icons
        $('.sort-icon').click(toggleSortOrder);

        // Sort the table initially
        sortTable();
    });

    
</script>

<script>
    $(document).ready(function () {
        // Initial sort order (ascending by default)
        let sortOrder = "asc";

        // Function to update the sort order and sort the table
        function sortTable() {
            let $table = $('#example6');
            let $tbody = $table.find('tbody');
            let rows = $tbody.find('tr').get();

            rows.sort(function (a, b) {
                let aValue = $(a).find('td:eq(7)').text();
                let bValue = $(b).find('td:eq(7)').text();

                return sortOrder === "asc" ? aValue.localeCompare(bValue) : bValue.localeCompare(aValue);
            });

            $tbody.html(rows);
        }

        // Function to toggle the sort order and update the sort icons
        function toggleSortOrder(e) {
            e.preventDefault(); // Prevent default behavior of anchor tag
            sortOrder = sortOrder === "asc" ? "desc" : "asc";
            $('.sort-icon').toggle();
            sortTable();
        }

        // Attach click event to the sort icons
        $('.sort-icon').click(toggleSortOrder);

        // Sort the table initially
        sortTable();
    });

    
</script>

<script>
    $(document).ready(function () {
        // Initial sort order (ascending by default)
        let sortOrder = "asc";

        // Function to update the sort order and sort the table
        function sortTable() {
            let $table = $('#example7');
            let $tbody = $table.find('tbody');
            let rows = $tbody.find('tr').get();

            rows.sort(function (a, b) {
                let aValue = $(a).find('td:eq(7)').text();
                let bValue = $(b).find('td:eq(7)').text();

                return sortOrder === "asc" ? aValue.localeCompare(bValue) : bValue.localeCompare(aValue);
            });

            $tbody.html(rows);
        }

        // Function to toggle the sort order and update the sort icons
        function toggleSortOrder(e) {
            e.preventDefault(); // Prevent default behavior of anchor tag
            sortOrder = sortOrder === "asc" ? "desc" : "asc";
            $('.sort-icon').toggle();
            sortTable();
        }

        // Attach click event to the sort icons
        $('.sort-icon').click(toggleSortOrder);

        // Sort the table initially
        sortTable();
    });

    
</script>





<script type="text/javascript">
$(document).on('change', ".prioritydrop", function() {
    let thisval = $(this).val();
    let product_id = $(this).data("product_id");
    let category_id = $(this).data("category_id");
    $.ajax({
        url: '<?php echo base_url("admin/updateproductfeaturestatus/")?>',
        type: 'POST',
        data: {
            "pay_type": thisval,
            "product_id": product_id,
            "category_id": category_id
        },
        error: function() {
            alert('Something is wrong');
        },
        success: function(data) {
            location.reload();
        }
    });
})
$(".admindeactive").click(function() {
    var statusd = 1;
    let product_id = $(this).data("productid");
    let category_id = $(this).data("categoryid");
    $.ajax({
        url: '<?php echo base_url("admin/updateproductactivestatus/")?>',
        type: 'POST',
        data: {
            'active_status': statusd,
            "product_id": product_id,
            "category_id": category_id
        },
        error: function() {
            alert('Something is wrong');
        },
        success: function(data) {
            swal({
                title: "Post De-active Successfully",
                text: "",
                type: "success"
            }, function() {
                location.reload();
            });
        }
    });
})
$(".adminactive").click(function() {
    var statusd = 0;
    let product_id = $(this).data("productid");
    let category_id = $(this).data("categoryid");
    $.ajax({
        url: '<?php echo base_url("admin/updateproductactivestatus/")?>',
        type: 'POST',
        data: {
            'active_status': statusd,
            "product_id": product_id,
            "category_id": category_id
        },
        error: function() {
            alert('Something is wrong');
        },
        success: function(data) {
            swal({
                title: "Post Active Successfully",
                text: "",
                type: "success"
            }, function() {
                location.reload();
            });
        }
    });
})
</script>
<<script src="https://code.jquery.com/jquery-3.5.1.js">
    </script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
    <script>
    //     $('#example30,#example5').DataTable({
    // 'paging'      : true,'autoWidth'   : true,
    // 'lengthChange': true,
    //             dom: 'Bfrtip',
    //         buttons: [
    //             'excelHtml5',
    //         ]
    //         });
    $('#example4').DataTable({
        'paging': true,
        'lengthChange': true,
        'searching': true,
        'ordering': false,
        'info': true,
        'autoWidth': true,
    })
    $('#example5').DataTable({
        'paging': true,
        'lengthChange': true,
        'searching': true,
        'ordering': false,
        'info': true,
        'autoWidth': true,
    })
    $('#example6').DataTable({
        'paging': true,
        'lengthChange': true,
        'searching': true,
        'ordering': false,
        'info': true,
        'autoWidth': true,
    })
    $('#example7').DataTable({
        'paging': true,
        'lengthChange': true,
        'searching': true,
        'ordering': false,
        'info': true,
        'autoWidth': true,
    })
    $('#example3, example5').DataTable({
        'paging': true,
        'lengthChange': true,
        'searching': true,
        'ordering': false,
        'info': true,
        'autoWidth': true,
    })
    </script>
    <script type="text/javascript">
    $(".delete").click(function() {
        var id = $(this).parents("tr").attr("id");
        // alert(id);
        swal({
                title: "Are you sure?",
                text: "",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel please!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        url: '<?php echo base_url("admin/deletepost/")?>' + id,
                        type: 'DELETE',
                        error: function() {
                            alert('Something is wrong');
                        },
                        success: function(data) {
                            $("#" + id).remove();
                            swal("Deleted!", "", "success");
                        }
                    });
                } else {
                    swal("Cancelled", "", "error");
                }
            });
    });
    </script>
    <!-- <script src="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" /> -->
    <script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url();?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js">
    </script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url();?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>assets/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
    <?php include('footer.php'); ?>