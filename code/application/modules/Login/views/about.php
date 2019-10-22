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
	
</head>
<body style="background:url('http://img0.gtsstatic.com/wallpapers/a76f707df270e5a17d5c981332c22732_large.jpeg')">
<div class="container"style="margin-top:90px;font-size:130%;background:whitesmoke;border-radius:20px;font-family: 'Alegreya Sans SC', sans-serif;
  font-size: 20px;color: red;">
JustPizza is an online  pizza ordering website where<br>you can order delicious pizzas.<br>
You can order readymade pizza and select toppings of your choice OR
<br>You can select the buns,toppings,sauce etc. and order pizza of your choice.
</div>
<div class="container"style="border-radius:20px;margin-top:90px;font-size:130%;background:whitesmoke;font-family: 'Alegreya Sans SC', sans-serif;
  font-size: 20px;color: red;">
<h4>HOW TO Order  ReadyMade Pizza?</h4>
<div class="stepwizard">
    <div class="stepwizard-row">
        <div class="stepwizard-step">
            <button type="button" class="btn btn-default btn-circle">1</button>
            <p>Signin/Signup</p>
        </div>
        <div class="stepwizard-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled">2</button>
            <p>Click Order Pizzas From Menu</p>
        </div>
        <div class="stepwizard-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled">3</button>
            <p>Select pizza/pizzas</p>
        </div>
      	
        <div class="stepwizard-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled">4</button>
            <p>Select Toppings</p>
        </div>
        
        <div class="stepwizard-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled">5</button>
            <p>Payment</p>
        </div>		
    </div>
</div>

</div>

<div class="container"style="margin-top:90px;font-size:130%;background:whitesmoke;border-radius:20px;font-family: 'Alegreya Sans SC', sans-serif;
  font-size: 20px;color: red;">
<h4>HOW TO Make Your Own Pizza?</h4>
<div class="stepwizard">
    <div class="stepwizard-row">
        <div class="stepwizard-step">
            <button type="button" class="btn btn-default btn-circle">1</button>
            <p>Signin/Signup</p>
        </div>
        <div class="stepwizard-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled">2</button>
            <p>Select Make Own Pizza Option</p>
        </div>
        <div class="stepwizard-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled">3</button>
            <p>Select Type Of Bread/Bun</p>
        </div>
      	
        <div class="stepwizard-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled">4</button>
            <p>Select Toppings</p>
        </div>
      
        <div class="stepwizard-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled">5</button>
            <p>Select Sauce</p>
        </div>

        <div class="stepwizard-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled">6</button>
            <p>Payment</p>
        </div>		
    </div>
</div>

</div>










<div class="navbar navbar-default navbar-fixed-bottom"  style="background:inherit; height: 28px;">
       <p class="navbar-text pull-left" style="display:block;color:blue;background:white;" >
	  Contact: onestep@gmail.com
      </p>		
</div>





</body>

</html>