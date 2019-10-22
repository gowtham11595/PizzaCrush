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
}
$(document).ready(function(){ 
    $('#characterLeft').text('140 characters left');
    $('#message').keydown(function () {
        var max = 300;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    });    
});

</script>
<style>

.red{
    color:red;
    }
.form-area
{
    background-color: #FAFAFA;
	padding: 10px 40px 60px;
	margin: 10px 0px 60px;
	border: 1px solid GREY;
	}
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
<body style="background:url('http://images7.alphacoders.com/328/328730.jpg')">
<div class="container">
<div class="col-md-5">
    <div class="form-area">  
        <form role="form" action="<?php echo base_url();?>delete_review_submit" method="post">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Delete Review Form</h3>
					    	<select name="pizza_name">
					    <?php 
						  foreach($name as $key=>$value)
						  {
							  $value=(array)$value;$value=$value['pizzaname'];?>
							  <option value="<?php print_r($value); ?>"><?php print_r($value); ?></option>
						<?php
						  }
						?> 
						
						</select>
						
    				
            
        <button type="submit"  class="btn btn-primary pull-right">Submit</button>
        </form>
    </div>
</div>
</div>
</body>

</html>