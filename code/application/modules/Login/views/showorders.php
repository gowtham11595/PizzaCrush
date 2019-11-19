<!-- Author: Nagendra Beesabathuni-->
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
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

/*Remove that CSS*/
.col-md-3 {
    margin-left:5%;
    }
/*Remove that CSS*/



button.btn {
  margin: 20px 0;
  line-height: 34px;
  position: relative;
  cursor: pointer;
  user-select: none;
  outline:none !important;
  width:100%;
}

button:active {

  outline:none;
}

button.ribbon {
  
  outline:none;
  outline-color: transparent;
}
button.ribbon:before, button.ribbon:after {
  top: 5px;
  z-index: -10;
}
button.ribbon:before {
  border-color: #53dab6 #53dab6 #53dab6 transparent;
  left: -25px;
  border-width: 17px;
}
button.ribbon:after {
  border-color: #53dab6 transparent #53dab6 #53dab6;
  right: -25px;
  border-width: 17px;
}

button:before, button:after {
  content: '';
  position: absolute;
  height: 0;
  width: 0;
  border-style: solid;
  border-width: 0;
  outline:none;
}
    
    
    
    button.btn-primary:before {
  border-color: #2e6da4 #2e6da4 #2e6da4 transparent;
    }
    button.btn-primary:after {
  border-color: #2e6da4 transparent #2e6da4 #2e6da4;
    }
    
    
    button.btn-success:before {
  border-color: #398439 #398439 #398439 transparent;
    }
    button.btn-success:after {
  border-color: #398439 transparent #398439 #398439;
    }
    
    

</style>

<div class="container" style="margin-top:0px;margin-bottom:30px;">
<a href="<?php echo base_url();?>" ><button type="button" class="navbar-btn btn-success  pull-left" style="margin-left:30px;">Home</button></a>
<a href="<?php echo base_url();?>locator" ><button type="button" class="navbar-btn btn-success  pull-left" style="margin-left:30px;">Restaurant Locator</button></a>                    
<?php
if($this->session->userdata('id')!=null){ 
?>
<a href="<?php echo base_url();?>logout" class="navbar-btn btn-success btn pull-right" style="  margin-left:30px;">Logout</a>
<?php
}
?></div>
</head>
<body style="background:url('http://img0.gtsstatic.com/wallpapers/a76f707df270e5a17d5c981332c22732_large.jpeg')">
<div class="container" >
	<div class="row">
		
	</div>
    
    <div class="row">
    
    <div class="col-md-6">       <!-- Standard button -->
<a href="<?php echo base_url();?>ownorders"><button type="button" class="btn btn-primary ribbon">Show Orders[own pizza]</button>
</a>
<a href="<?php echo base_url();?>menuorders">
<!-- Indicates a successful or positive action -->
<button type="button" class="btn btn-success ribbon">Show Orders[pizza from menu]</button>
</a>
</div>

</body>
</html>