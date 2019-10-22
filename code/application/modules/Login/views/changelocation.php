<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<script type="text/javascript">
onload=function(){
var e=document.getElementById("refreshed");
if(e.value=="no")e.value="yes";
else{e.value="no";location.reload();}
}</script>
<div class="container">
<a href="<?php echo base_url();?>" class="navbar-btn btn-warning btn pull-left" style="margin-left:30px;">JUST Pizza</a>

<?php
if($this->session->userdata('id')!=null){ 
?>

<a href="<?php echo base_url();?>order_online" class="navbar-btn btn-primary btn pull-left" style="margin-left:30px;">order online</a>
<?php } ?>
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
<body style="background-image: url('https://images.alphacoders.com/144/144531.jpg');">
	<div style="margin-top:50px;" class="container >
		
		
        <div class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 ">
                    <div class="panel panel-info">
                        <div class="panel-heading" style="background-color:grey;color:white;">
                            <div class="panel-title">Change Details</div>
                        </div>  
                        <div class="panel-body" >
                            <form action="<?php echo base_url();?>changeloc_submit" method="post"  class="form-horizontal" role="form" >
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                            
                                
								<div class="form-group">
                                    <label for="username" class="col-md-3 control-label">City/Town</label>
                                    <div class="col-md-9">
                                     	<div class="form-group">
						                 <select name="city">
						                 <option value="Hyderabad">Hyderabad</option>
						                 <option value="Karimnagar">Karimnagar</option>
						                 <option value="Khammam">Khammam</option>
                                         <option value="Mahbubnagar">Mahbubnagar</option>
						                 <option value="Siddipet">Siddipet</option>
                                         <option value="Nalgonda">Nalgonda</option>
						                 <option value="Adilabad">Adilabad</option>
                                         </select>
		                       </div>
			    	           </div>
                                </div>
								
								<div class="form-group">
                                    <label for="username" class="col-md-3 control-label">Address</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="address" id="address" placeholder="address" required>
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="username" class="col-md-3 control-label">Phone</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="contact" id="contact" placeholder="contact" required>
                                    </div>
                                </div>
                                    

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn btn-info"><i class="icon-hand-right"></i>Apply Changes</button>
                                    </div>
                                </div>
                                
                                
                                
                                
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 
    </div>











<div class="navbar navbar-default navbar-fixed-bottom"  style="background:white; height: 28px;">
       <p class="navbar-text pull-left" style="display:block;color:blue;background:white" >
	  Contact: onestep@gmail.com
      </p>		
</div>






</body>
</html>