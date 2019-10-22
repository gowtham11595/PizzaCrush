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
}</script><?php
if($this->session->userdata('id')!=null)
		{
			if($this->session->userdata('admin')==true)
			{
				redirect('afteradminlogin');
			}
			else
			{
				if($this->session->userdata('admin')==false)
				{   
					redirect('order_online');
				}	
			}
		}
?>

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
<body style="background-image: url('http://www.artsfon.com/pic/201502/2560x1600/artsfon.com-53522.jpg');">
	<div style="margin-top:50px;" class="container pull-right">    
	<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 pull-right">                    
            <div class="panel panel-info" >
                    <div class="panel-heading" style="background-color:grey;color:white;">
                        <div class="panel-title">Sign In</div>
                       
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form action="<?php echo base_url();?>signin_submit" method="post" id="loginform" class="form-horizontal" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="username" type="text" class="form-control" name="username" value="" placeholder="username" required>                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="password" type="password" class="form-control" name="password" placeholder="password" required>
                                    </div>
                                    

                                
                            


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <button type="submit" id="btn-login"  class="btn btn-success">Login  </button>
                                     

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>
		
		
		
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 pull-right">
                    <div class="panel panel-info">
                        <div class="panel-heading" style="background-color:grey;color:white;">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right;font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form action="<?php echo base_url();?>signup_submit" method="post" id="signupform" class="form-horizontal" role="form" >
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                            
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="emailid" id="emailid" placeholder="Email Address">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="username" class="col-md-3 control-label">User Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="username" id="username" placeholder="User Name" required>
                                    </div>
                                </div>
								
								<div class="form-group">
                                    <label for="username" class="col-md-3 control-label">Phone Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="phonenumber" id="phonenumber" placeholder="phone number" required>
                                    </div>
                                </div>
                                
								<div class="form-group">
                                    <label for="username" class="col-md-3 control-label">City</label>
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
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="confirm_password" class="col-md-3 control-label">Confirm Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="re-enter password" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
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