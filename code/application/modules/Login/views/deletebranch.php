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
<?php
$data=$this->db->select('branch_name')->from('branches')->where('status','added')->get()->result();
?>

<form action="<?php echo base_url();?>deletebranch_submit" method="post">
Branch Name: 
<select name="branch_name">
<?php
foreach($data as $key=>$value)
{
	$value=(array)$value;
	$value=$value['branch_name'];
?>
    <option value="<?php print_r($value); ?>">
	<?php print_r($value); ?>
	</option>
<?php
}
?>
</select>
Select State:
Select the state:
<select name="state">
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Kerala">Kerala</option>
<option value="Karnataka">Karnataka</option>
<option value="Maharastra">Maharastra</option>
<option value="TamilNadu">TamilNadu</option>
<option value="Telangana">Telangana</option>
</select>

<input type="submit">
</form>

</body>
</html>