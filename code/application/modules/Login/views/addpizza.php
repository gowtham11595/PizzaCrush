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
</head>
<body style="background:url('http://images7.alphacoders.com/328/328730.jpg')">
<div class="container">
    <div class="row">
		<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading" >
			    	<h3 class="panel-title" >ADD PIZZA</h3>
			 	</div>
			  	<div class="panel-body">
				<?php echo form_open_multipart('do_addpizza');?>
			    	<form accept-charset="UTF-8" role="form">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Pizza Name" name="pizza_name" type="text">
			    		</div>
			    		<div class="form-group">
						Small:
			    			<input class="form-control" placeholder="pizza_price" name="spizza_price" type="number" value="">
			    		</div>
						<div class="form-group">
						Medium:
			    			<input class="form-control" placeholder="pizza_price" name="mpizza_price" type="number" value="">
			    		</div>
			    		<div class="form-group">
						Large:
			    			<input class="form-control" placeholder="pizza_price" name="lpizza_price" type="number" value="">
			    		</div>
			    		
						<div class="form-group" >
						Category: 
						<input type="radio" name="category" id="category" value="veg" >Veg
                        <input type="radio" name="category" id="category" value="nonveg" >Non-Veg
						</div>
						<div class="form-group">
						Upload Image:
                        <input type="file" name="userfile" size="20" />
		                </div>
						<input class="btn btn-lg btn-success btn-block" type="submit" value="upload" /><?php echo form_close();?>
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
</body>
</html>


