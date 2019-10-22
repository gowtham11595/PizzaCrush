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
@font-face {
  font-family: 'uiconsBusinessFinance';
  src: url('http://www.tabataruiz.com.br/exemplos_html/fonts/Uicons_Business_and_Finance.ttf') format('truetype');
}
.box {
  position: relative;
  margin-top: 40px;
  margin-left: 40%;
  height: 70%;
  width: 180px;
  border: solid 1px #BCBCBC;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  background-color: #f8f8f8;
  background-image: -moz-linear-gradient(top, #fefefe, #f0f0f0);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#fefefe), to(#f0f0f0));
  background-image: -webkit-linear-gradient(top, #fefefe, #f0f0f0);
  background-image: -o-linear-gradient(top, #fefefe, #f0f0f0);
  background-image: linear-gradient(to bottom,	#FFFFFF,	#0FCD0D);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fffefefe', endColorstr='#A52A2A', GradientType=0);
}
.box:after {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  width: 180px;
  height: 4px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  z-index: -1;
}
.ribbon {
  position: absolute;
  width: 26px;
  height: 25px;
  background: #3981CB;
  text-align: center;
  top: -5px;
  left: 5px;
  -webkit-border-radius: 3px 3px 0 0;
  -moz-border-radius: 3px 3px 0 0;
  border-radius: 3px 3px 0 0;
  border: solid 1px #11273E;
}
.ribbon:after,
.ribbon:before {
  content: '';
  position: absolute;
  height: 0;
  width: 0;
  border-style: solid;
  border-width: 0;
}
.ribbon:after {
  border-width: 0px 13px 12px 13px;
  border-color: transparent #3981CB;
  bottom: -12px;
  left: 0;
  z-index: 1;
}
.ribbon:before {
  border-width: 0px 14px 15px 14px;
  border-color: transparent #11273E;
  bottom: -15px;
  left: -1px;
  z-index: 0;
}
.ribbon a {
  line-height: 22px;
  color: #11273E;
  text-decoration: none;
  font-size: 18px;
}
.ribbon a:before {
  font-family: '';
  -webkit-font-smoothing: antialiased;
}
.border-ribbon {
  border-top: dashed 1px #11273E;
  border-bottom: dashed 1px rgba(255, 255, 255, 0.3);
  border-opacity: 0.1;
  margin: 3px 3px 0 3px;
}

.button {
    position:absolute;
    bottom:10px;
    right:10px;
    width:100px;
    height:30px;
}
.pic:hover { opacity: 0.3; filter: alpha(opacity=30); } 

body{margin:40px;}

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

</head>
<body style="color:		#4B0082;  font-weight: bold;background:url('https://wallpaperscraft.com/image/pizza_tomatoes_olives_mushrooms_cheese_dish_leaves_food_93326_1920x1080.jpg')" >

<div class="container">
<div>
<div>
<div>
<p>
<?php 
foreach($data as $key => $value)
{
	$value=(array)$value;
	
	if($value['size']!='')
	{
		$user=$this->db->select('username')->from('user')->where('id',$value['uid'])->get()->result();
		$user=$user[0];
		$user=(array)$user;
		$user=$user['username'];
?>
</p><br>
</div>
</div>
</div>
<div class="row" style="float:left;margin-left:20px;">
<div class="box">
<div class="ribbon">
<div class="border-ribbon"></div>
<p style="margin-top:40px;">
<a href="<?php echo base_url();?>menudelivered/<?php echo $value['id']; ?>"><button>Delivered</button></a>
<h4><?php print_r('OrderedBy: '.$user); ?></h4>
<?php
print_r('Pizza:'.$value['name']);$id=$value['id'];
	}
   if($value['size']=='')
   {
       print_r('Topping:'.$value['name']);

   }	   
       
?></p><br>
<?php	
	
}

?></div>

</body>
</html>