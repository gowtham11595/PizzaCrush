<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<style>
@import url(http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:900);

body {
  padding: 0;
}
header {
  padding: 120px 50px 170px;
  background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/wisconsin-farmland-3.jpg);
  background-size: cover;
  
}
 h1 {
  font-family: 'Alegreya Sans SC', sans-serif;
  font-size: 130px;
  color: red;
  mix-blend-mode: screen;
  padding: 0;
  margin: 0;
  line-height: 0.5;
}

#container {
    position:relative;
}

</style>
<div id="container">


  <div class="container" style="display:block;">
  <?php 
   $result=$this->db->select('*')->from('temp_p')->where('uid',$this->session->userdata('id'))->get()->result();
 // print_r($result);
  foreach($result as $key=>$value)
  {
	  $value=(array)$value;
	  if($value['size']!='')
	  {
		  $path=$this->db->select('path')->from('pizzas')->where('size',$value['size'])->where('name',$value['name'])->where('category',$value['category'])->where('status',$value['status'])->get()->result();
		  $path=$path[0];
		  $path=(array)$path;
		  $path=$path['path'];
		  ?>
<div class="col-sm-6 thumbnail" style="font-size: 80%;border-radius:25px; background: white;  border: 2px solid #8AC007;padding: 20px; width: 230px;height: 180px; margin-top: 10px;
    margin-bottom: 10px;-bottom: 10px;
    margin-right: 10px;
    margin-left: 10px;background: url('<?php echo base_url();?>assets/uploads/<?php print_r($path);?>');height:200px;width:200px;background-repeat:no-repeat">
<div class="pic" style=""  style="margin-left:15px;">
<div style="font-family: 'Alegreya Sans SC', sans-serif;
  font-size: 18px;color: red;background-color:white">
<?php print_r($value['name']);?></div>
<?php

foreach($result as $key=>$val)
  {
	  $val=(array)$val;
	  if($val['size']=='')
	  {
		  $pathT=$this->db->select('path')->from('toppings')->where('name',$val['name'])->where('category',$val['category'])->where('status','added')->get()->result();
		  //print_r($pathT);
		  $pathT=$pathT[0];
		  $pathT=(array)$pathT;
		  $pathT=$pathT['path'];
		  $opacity_value=0.9;$padding=0;
?>
  <p style="font-family: 'Alegreya Sans SC', sans-serif;
  font-size: 10px;color: red;padding: 0;margin-left: 0;line-height: 0.5;">
 
 <img id="img1" src="<?php echo base_url();?>assets/uploadtoppings/<?php print_r($pathT);?>" style="height:150px;width:200px;margin-bottom:10px;;margin-left:2px;border-radius: 300px 300px 300px 300px;opacity:<?php print_r($opacity_value);?>;position:fixed;">
 
 </p> 

<?php		  

$opacity_value=$opacity_value-0.2;	$padding=$padding+15;  }		
  }	  
?>



</div>
</div>
<?php	  
	  }
  }  
  ?>
  
  </div>
  

</div>

</head>
<body style="background:url('http://images7.alphacoders.com/328/328730.jpg')">

<div class="navbar navbar-default navbar-fixed-bottom" >
    <div class="container" style="display:block;">
      <p class="navbar-text pull-left" style="display:block;color:blue;" >
	  
	  Orders made by you:
          <?php
             $result=$this->db->select('*')->from('temp_p')->where('uid',$this->session->userdata('id'))->get()->result();
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
        <?php $total= $this->db->query('SELECT sum(price) FROM temp_p where uid='.$this->session->userdata('id'))->result();
               $total=$total[0];
			   $total=(array)$total;
			   $total=$total['sum(price)'];
		      print_r($total);?></h4>
    </div>
    
  </div>

</body>
</html>