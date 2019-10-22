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
}</script></head>
<body style="background:url('http://images7.alphacoders.com/328/328730.jpg')">
<?php echo form_open_multipart('do_addbread');?>
Crust Name: <input type="text" name="name" id="name"><br>
Price:<br>
small: <input type="number" name="sprice" id="sprice">
medium: <input type="number" name="mprice" id="mprice">
large: <input type="number" name="lprice" id="lprice">
   

<br>

Upload Image:
<input type="file" name="userfile" size="20" />
		  
		 <input type="submit" value="upload" /><?php echo form_close();?>
 
</form>
</body>
</html>
