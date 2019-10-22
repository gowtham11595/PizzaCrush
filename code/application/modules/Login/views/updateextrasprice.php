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
<form action="<?php echo base_url();?>updateextrasprice_submit" method="post">
Enter the extras name:
<?php
$data=$this->db->select('name')->from('extras')->where('status','added')->get()->result();
?>
<select name="name">
<?php
foreach($data as $key=>$value)
{$value=(array)$value;$value=$value['name'];
?>	
<option value="<?php print_r($value)?>"><?php print_r($value) ?></option>
<?php
}
?>
</select>


Enter the price to be updated
<input type="number" name="price" id="price">
<button type="submit">Update</button>
</form>
</body>
</html>