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
<form action="<?php echo base_url();?>branch_submit" method="post">

Enter the address:
<textarea name="address" id="address" rows="1" cols="10"></textarea>
Enter the city:
<input type="text" name="city" id="city">
Enter the contact info:
<input type="text" name="contact" id="contact">
Enter the emailid:
<input type="text" name="emailid" id="emailid">

<button type="submit">ADD</button>
</form>
</body>
</html>