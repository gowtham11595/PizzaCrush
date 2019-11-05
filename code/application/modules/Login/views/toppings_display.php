<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<input type="hidden" id="refreshed" value="no">
<script type="text/javascript">
onload=function(){
var e=document.getElementById("refreshed");
if(e.value=="no")e.value="yes";
else{e.value="no";location.reload();}
}</script>


<style>
.button {
    position:absolute;
    bottom:10px;
    right:10px;
    width:100px;
    height:30px;
}
.pic:hover { opacity: 0.3; filter: alpha(opacity=30); } 

body{margin:40px;}

.stepwizard-step p {
    margin-top: 10px;    
}

.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;     
    width: 100%;
    position: relative;
}

.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
    
}

.stepwizard-step {    
    display: table-cell;
    text-align: center;
    position: relative;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}
</style>

<div class="container" style="margin-top:0px;margin-bottom:30px;">
<a href="<?php echo base_url();?>" ><button type="button" class="navbar-btn btn-success btn pull-left" style="margin-left:30px;">Home</button></a>
<a href="<?php echo base_url();?>locator" ><button type="button" class="navbar-btn btn-success btn pull-left" style="margin-left:30px;">Restaurant Locator</button></a>                    
<?php
if($this->session->userdata('id')!=null){ 
?>
<a href="<?php echo base_url();?>logout" class="navbar-btn btn-success btn pull-right" style="  margin-left:30px;">Logout</a>
<?php
}
?></div>
<div class="stepwizard">
    <div class="stepwizard-row">
        <div class="stepwizard-step">
            <button type="button" class="btn btn-success btn-circle">1</button>
            <p>Select Pizza</p>
        </div>
        <div class="stepwizard-step">
            <button type="button" class="btn btn-primary btn-circle">2</button>
            <p>Select Toppings</p>
        </div>
        <div class="stepwizard-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled">3</button>
            <p>Payment</p>
        </div> 
    </div>
</div>

</head>
<body style="background:url('http://images7.alphacoders.com/328/328730.jpg')">
<h4 style="font-weight: bold; color:lime">
VEG:
</h4>
    
<div class="container" style="background: whitesmoke;">
<div class="row-fluid" >

<?php 
foreach($input as $key=>$value)
{
	$value=(array)$value;
	if($value['category']=='veg')
	{
		?>
<div class="col-sm-6" style="font-size: 80%;border-radius:25px; background: white;  border: 2px solid #8AC007;padding: 20px; width: 230px;height: 230px; margin-top: 10px;
    margin-bottom: 10px;
    margin-right: 10px;
    margin-left: 10px;">
<div class="pic"> 
<img src="<?php echo base_url();?>assets\uploadtoppings\<?php print_r($value['path']);?>"  class="img-thumbnail" style="height:90%;width:90%;cursor: pointer;">
</div>
<div class="row-fluid" style=" font-weight: bold;" >
<?php 

print_r($value['name']);
?>

</div>
<div class="row-fluid">
<div class="col-sm-7">
Price: Rs.
<?php 
print_r($value['price']);
?>  
</div>
<div class="col-sm-5">
<a href="<?php echo base_url();?>toppings_click/<?php print_r($value['name'])?>/<?php print_r($value['price'])?>/<?php print_r($value['category']);?>">
<button type="button" class="btn btn-primary btn-round-xs btn-xs" onclick="fun()">select</button>
</a>
</div>
</div>
</div>
<?php	
	}
}
?> 
</div>
</div>


<h4 style="font-weight: bold; color:red">
NON-VEG:
</h4>
    
<div class="container" style="background: whitesmoke; margin-bottom:20px;">
<div class="row-fluid" >

<?php 
foreach($input as $key=>$value)
{
	$value=(array)$value;
	if($value['category']=='nonveg')
	{
		?>
<div class="col-sm-6" style="font-size: 80%;border-radius:25px; background: white;  border: 2px solid #8AC007;padding: 20px; width: 230px;height: 230px; margin-top: 10px;
    margin-bottom: 10px;
    margin-right: 10px;
    margin-left: 10px;">
<div class="pic"> 
<img src="<?php echo base_url();?>assets\uploadtoppings\<?php print_r($value['path']);?>"  class="img-thumbnail" style="height:90%;width:90%;cursor: pointer;">
</div>
<div class="row-fluid" style=" font-weight: bold;" >
<?php 

print_r($value['name']);
?>

</div>
<div class="row-fluid">
<div class="col-sm-7">
Price: Rs.
<?php 
print_r($value['price']);
?>  
</div>
<div class="col-sm-5">
<a href="<?php echo base_url();?>toppings_click/<?php print_r($value['name'])?>/<?php print_r($value['price'])?>/<?php print_r($value['category']);?>">
<button type="button" class="btn btn-primary btn-round-xs btn-xs" onclick="fun()">select</button>
</a>
</div>
</div>
</div>
<?php	
	}
}
?> 
</div>
</div>

<div class="navbar navbar-default navbar-fixed-bottom" >
    <div class="container" style="display:block;">
      <p class="navbar-text pull-left" style="display:block;color:blue;" >
	  
	  Orders made by you:
          <?php
             $result=$this->db->select('*')->from('temp_p')->where('uid',$this->session->userdata('id'))->where('status','added')->get()->result();
if(sizeof($result)!=0){            	
			foreach($result as $key=>$v)
			{
				$v=(array)$v;
		  ?>
		  <div class="col-sm-1" style="color:red;margin-right:20px;">
		  <?php print_r($v['name']);?>
		  <div>
		  <a href="<?php echo base_url();?>delete_t/<?php print_r($v['id']);?>">
		  <button class="btn btn-danger btn-round-xs btn-xs"type="submit">cancel</button>
		  </a>
		  </div>
		  </div>
          <?php		  
			}
}			
		  ?>
		 
      </p>
      			  
      <a href="<?php echo base_url();?>pizza_application" class="navbar-btn btn-success btn pull-right" style="  margin-left:30px;">
      <span class="glyphicon glyphicon-arrow-right" ></span>NEXT</a>
      

      <h4 style="color:green;" class=" pull-right">
	    Total Price: Rs.
        <?php $total= $this->db->query('SELECT sum(price) FROM temp_p where uid='.$this->session->userdata('id').' AND status="added"')->result();
               $total=$total[0];
			   $total=(array)$total;
			   $total=$total['sum(price)'];
		      print_r($total);?></h4>
    </div>
    
  </div>


</body>
<div class="container" Style="margin-bottom:40px;">
<footer><input type="hidden"></footer>
</div>
</html>