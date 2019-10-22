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
}</script>

<div class="container" style="margin-top:0px;margin-bottom:30px;">
<a href="<?php echo base_url();?>" ><button type="button" class="navbar-btn btn-success btn pull-left" style="margin-left:30px;">Home</button></a>
<a href="<?php echo base_url();?>locator" ><button type="button" class="navbar-btn btn-success btn pull-left" style="margin-left:30px;">Restaurant Locator</button></a>
<a href="<?php echo base_url();?>view_review" ><button type="button" class="navbar-btn btn-success btn pull-left" style="margin-left:30px;">View Reviews</button></a>                    
<?php
if($this->session->userdata('id')!=null){ 
?>
<a href="<?php echo base_url();?>logout" class="navbar-btn btn-success btn pull-right" style="  margin-left:30px;">Logout</a>
<?php
}
?></div>
</head>
<body style="background:url('http://wallpaper4k.info/wp-content/uploads/2016/01/Pizza-Wallpaper-Images.jpg');">
<div >
<table style="background-color:white;margin-left:300px;color:green;border-radius:5px;">
<tr>
<th style="padding-left:50px;padding-bottom:50px;"></th>
<th style="padding-left:50px;padding-bottom:50px;">Pizza name</th><th style="padding-left:50px;padding-bottom:50px;">review</th>
</tr>
<?php
foreach($pizzaname as $key=>$value)
{
	$value=(array)$value;
	$value=$value['pizzaname'];
?>

<tr>
<td style="padding-left:50px;padding-bottom:50px;">
<?php

$path=$this->db->select('path')->from('pizzas')->where('name',$value)->get()->result();
$path=$path[0];
$path=(array)$path;
$path=$path['path'];

?>
<img src="<?php echo base_url();?>assets/uploads/<?php print_r($path);?>"  class="img-thumbnail" style="height:100px;width:300px;cursor: pointer;border-radius:15px;" >

<td style="padding-left:50px;padding-bottom:50px;">
<?php
print_r($value);
?>
</td>
</td>
<td style="padding-left:50px;padding-right:50px;padding-bottom:50px;">
<?php 
$rev=$this->db->select('review')->from('review')->where('pizzaname',$value)->get()->result();
$rev=$rev[0];
$rev=(array)$rev;
$rev=$rev['review'];
print_r($rev);
?>  
</td>
</tr> 

<?php
}

?>



</table>
</div>

</body>
</html>