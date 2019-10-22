<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<input type="hidden" id="refreshed" value="no">
<script type="text/javascript">
onload=function(){
var e=document.getElementById("refreshed");
if(e.value=="no")e.value="yes";
else{e.value="no";location.reload();}
}</script></head>
<body style="background:black;">
<div class="container" style="background-image: url('http://www.artsfon.com/pic/201502/2560x1600/artsfon.com-53522.jpg'); border-radius:20px;padding-bottom:20px;">
<div class="row-fluid" >
<h4 style="color:white;">ADDING:</h4>
<a href="<?php echo base_url();?>addpizza"><button type="button" class="btn btn-success">ADD Pizza</button></a>
<a href="<?php echo base_url();?>addtoppings"><button type="button" class="btn btn-success">ADD Toppings</button></a>
<a href="<?php echo base_url();?>addbread"><button type="button" class="btn btn-success">ADD Crusts</button></a>
<a href="<?php echo base_url();?>addextras"><button type="button" class="btn btn-success">ADD Extras</button></a>
<a href="<?php echo base_url();?>addsauce"><button type="button" class="btn btn-success">ADD Sauce</button></a>

<a href="<?php echo base_url();?>addbranch"><button type="button" class="btn btn-success">ADD Branch</button></a>
<a href="<?php echo base_url();?>addplace"><button type="button" class="btn btn-success">ADD Place</button></a>
<a href="<?php echo base_url();?>addreview"><button type="button" class="btn btn-success">ADD Review</button></a>
</div>

<div class="row-fluid" style="margin-top:50px;">
<h4 style="color:white;">
Updating:
</h4>
<a href="<?php echo base_url();?>updatepizzaprice"><button type="button" class="btn btn-primary">UPDATE Pizza Price</button></a>
<a href="<?php echo base_url();?>updatetoppingsprice"><button type="button" class="btn btn-primary">UPDATE Toppings Price</button></a>
<a href="<?php echo base_url();?>updatebreadprice"><button type="button" class="btn btn-primary">UPDATE Crust Price</button></a>
<a href="<?php echo base_url();?>updateextrasprice"><button type="button" class="btn btn-primary">UPDATE Extras Price</button></a>
<a href="<?php echo base_url();?>updatesauceprice"><button type="button" class="btn btn-primary">UPDATE Sauce Price</button></a>
</div>

<div class="row-fluid" style="margin-top:50px;">
<h4 style="color:white;">
Deleting:
</h4>
<a href="<?php echo base_url();?>deletepizza"><button type="button" class="btn btn-danger">Delete Pizza</button></a>
<a href="<?php echo base_url();?>deletetoppings"><button type="button" class="btn btn-danger">Delete Toppings</button></a>
<a href="<?php echo base_url();?>deletebread"><button type="button" class="btn btn-danger">Delete Crust</button></a>
<a href="<?php echo base_url();?>deleteextras"><button type="button" class="btn btn-danger">Delete Extras</button></a>
<a href="<?php echo base_url();?>deletesauce"><button type="button" class="btn btn-danger">Delete Sauce</button></a>

<a href="<?php echo base_url();?>deletebranch"><button type="button" class="btn btn-danger">Delete Branch</button></a>
<a href="<?php echo base_url();?>deleteplace"><button type="button" class="btn btn-danger">Delete Place</button></a>
<a href="<?php echo base_url();?>deletereview"><button type="button" class="btn btn-danger">Delete review</button></a>
</div>
<div class="row-fluid" style="margin-top:50px;">
<h4 style="color:white;">
SHOW:
</h4>
<a href="<?php echo base_url();?>show_orders"><button type="button" style="background-color: darkslategrey;
    border: none;
    color: white;
    padding: 10px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 2px 2px;
    cursor: pointer;" class="btn">Show Orders</button></a>
</div>
</div>
</body>
</html>