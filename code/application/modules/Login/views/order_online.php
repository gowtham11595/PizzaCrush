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
<?php 			    if($this->session->userdata('admin')==TRUE){?>
<a href="<?php echo base_url();?>afteradminlogin"><button type="button" class="navbar-btn btn-success btn pull-left" style="margin-right:30px;">Home</button>
				<?php } else{?>
				
				<a href=""><button type="button" class="navbar-btn btn-success btn pull-left" style="margin-right:30px;">Home<button/></a>
				<?php }?>
<a href="<?php echo base_url();?>locator"><button type="button" class="navbar-btn btn-success btn pull-left">Restaurant Locator</button></a>      
 <a href="changeloc" class="navbar-btn btn-primary btn pull-left" style="margin-left:30px;">Change my details</a>       
<?php
if($this->session->userdata('id')!=null){ 
?>
<a href="<?php echo base_url();?>logout" class="navbar-btn btn-danger btn pull-right" style="  margin-left:30px;margin-right:150px;">Logout</a>
<?php
}
?>
</head>
      
<a href="readymade" class="navbar-btn btn-primary btn pull-left" style="margin-left:30px;">Order pizzas from menu</a>
<a href="ownpizza" class="navbar-btn btn-primary btn pull-left" style="margin-left:30px;">Make my own pizza</a>
<body style="background:url('http://images7.alphacoders.com/328/328730.jpg')">



</body>
</html>