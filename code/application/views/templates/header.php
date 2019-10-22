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
<div class="container">
<a href="<?php echo base_url();?>" class="navbar-btn btn-warning btn pull-left" style="margin-left:30px;">JUST Pizza</a>
<a href="<?php echo base_url();?>order_online" class="navbar-btn btn-primary btn pull-left" style="margin-left:30px;">order online</a>
<a href="<?php echo base_url();?>locator" ><button type="button" class="navbar-btn btn-success btn pull-left" style="margin-left:30px;">Restaurant Locator</button></a>                    
<a href="<?php echo base_url();?>about" ><button type="button" class="navbar-btn btn-success btn pull-left" style="margin-left:30px;">About</button></a>                    

<?php
if($this->session->userdata('id')!=null){ 
?>
<a href="<?php echo base_url();?>logout" class="navbar-btn btn-success btn pull-right" style="  margin-left:30px;">Logout</a>
<?php
}
?></div>
</head>

</html>