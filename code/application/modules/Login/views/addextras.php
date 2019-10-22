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
<?php echo form_open_multipart('do_addextra');?>
Extra Name: <input type="text" name="name" id="name">
Price: <input type="number" name="price" id="price">
<br>

Upload Image:
<input type="file" name="userfile" size="20" />
		  
		 <input type="submit" value="upload" /><?php echo form_close();?>
 
</form>
</body>
</html>
