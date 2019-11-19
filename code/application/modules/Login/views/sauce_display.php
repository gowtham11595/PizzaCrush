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
            <p>Select Bread Type</p>
        </div>
        <div class="stepwizard-step">
            <button type="button" class="btn btn-success btn-circle" disabled="disabled">2</button>
            <p>Select Toppings</p>
        </div>
        <div class="stepwizard-step">
            <button type="button" class="btn btn-primary btn-circle" disabled="disabled">3</button>
            <p>Select Sauce</p>
        </div>
      	
        <div class="stepwizard-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled">4</button>
            <p>Payment</p>
        </div> 			
    </div>
</div>

</head>

</head>
<body style="background:url('http://images7.alphacoders.com/328/328730.jpg')">
<h4 style="font-weight: bold; color:lime">
Sauce:
</h4>
    
<div class="container" style="background: whitesmoke;margin-bottom:100px;">
<div class="row-fluid" >

<?php 
foreach($input as $key=>$value)
{
	$value=(array)$value;
	
		?>
<div class="col-sm-6" style="font-size: 80%;border-radius:25px; background: white;  border: 2px solid #8AC007;padding: 20px; width: 230px;height: 230px; margin-top: 10px;
    margin-bottom: 10px;
    margin-right: 10px;
    margin-left: 10px;">
<div class="pic"> 
<img src="<?php echo base_url();?>assets\uploadsauce\<?php print_r($value['path']);?>"  class="img-thumbnail" style="height:90%;width:90%;cursor: pointer;">
</div>
<div class="row-fluid" style=" font-weight: bold;" >
<?php 

print_r($value['name']);
?>

</div>
<div class="row-fluid">
<div class="col-sm-7">
Price: $
<?php 
print_r($value['price']);
?>  
</div>
<div class="col-sm-5">
<a href="<?php echo base_url();?>sauce_click/<?php print_r($value['name'])?>/<?php print_r($value['price'])?>">
<button type="button" class="btn btn-primary btn-round-xs btn-xs" onclick="fun()">select</button>
</a>
</div>
</div>
</div>
<?php	
	
}
?> 
</div>
</div>


<div class="navbar navbar-default navbar-fixed-bottom" >
    <div class="container" style="display:block;">
      <p class="navbar-text pull-left" style="display:block;color:blue;" >
	  
	  Orders made by you:
          <?php
             $result=$this->db->select('*')->from('temp_o')->where('uid',$this->session->userdata('id'))->where('status','added')->get()->result();
if(sizeof($result)!=0){            	
			foreach($result as $key=>$v)
			{
				$v=(array)$v;
		  ?>
		  <div class="col-sm-1" style="color:red;">
		  <?php
               if($v['type']=='bread')
               {
				   $id=$this->db->select('name')->from('breads')->where('id',$v['iid'])->get()->result();
				   $id=$id[0];
				   $id=(array)$id;
				   $id=$id['name'];
				   print_r($id);
			   }
               
               if($v['type']=='toppings')
               {
				   $id=$this->db->select('name')->from('toppings')->where('id',$v['iid'])->get()->result();
				   $id=$id[0];
				   $id=(array)$id;
				   $id=$id['name'];
				   print_r($id);
			   }
               
               if($v['type']=='sauce')
               {
				   $id=$this->db->select('name')->from('sauce')->where('id',$v['iid'])->get()->result();
				   $id=$id[0];
				   $id=(array)$id;
				   $id=$id['name'];
				   print_r($id);
			   }			   
		  ?>
		  <div>
		  <a href="<?php echo base_url();?>delete_b/<?php print_r($v['id']);?>/<?php print_r($v['type']);?>">
		  <button class="btn btn-danger btn-round-xs btn-xs"type="submit">cancel</button>
		  </a>
		  
		  </div>
		  </div>
          <?php		  
			}
}			
		  ?>
		 
      </p>
  
 			  
      <h4 style="color:green;" class=" pull-right">
	    Total Price: $
        <?php
        //   $size=$this->db->select('id')->from('temp_o')->where('uid',$this->session->userdata('id'))->where('status','added')->get()->result();		
		   $b=0;$t=0;$s=0;
		   $temp=$this->db->select('*')->from('temp_o')->where('uid',$this->session->userdata('id'))->where('status','added')->get()->result();
		   $price=0;
		   foreach($temp as $key=>$value1)
		   {
			   $value1=(array)$value1;
			   if($value1['type']=='bread'){
			   $x=$this->db->select('price')->from('breads')->where('id',$value1['iid'])->get()->result();
			   $b=$value1['iid'];
		       }
			   if($value1['type']=='toppings'){
			   $x=$this->db->select('price')->from('toppings')->where('id',$value1['iid'])->get()->result();
		       $t=$value1['iid'];
			   }
			   if($value1['type']=='sauce'){
			   $x=$this->db->select('price')->from('sauce')->where('id',$value1['iid'])->get()->result();
		       $s=$value1['iid'];
			   }
			   $x=$x[0];
			   $x=(array)$x;
			   $x=$x['price'];
			   $price=$price+$x;
		   }
		   print_r($price);
		?>
		
     <a href="<?php echo base_url();?>own_pizza_application" class="navbar-btn btn-success btn pull-right" style="  margin-left:30px;">
      <span class="glyphicon glyphicon-arrow-right" ></span>Proceed to payment</a>
	  
	     <a href="<?php echo base_url();?>own_pay_submit/<?php echo $b ?>/<?php echo $t ?>/<?php echo $s ?>" class="navbar-btn btn-success btn pull-right" style="  margin-left:40px;">
      <span class="glyphicon glyphicon-arrow-right" ></span>Order another pizza</a>

    </div>
    
  </div>


</body>
<div class="container" Style="margin-bottom:40px;">
<footer><input type="hidden"></footer>
</div>
</html>
