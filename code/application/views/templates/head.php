<html>
<head>
      <style> @import url('<?=base_url()?>assets/css/HomePage_old.css'); </style>
      <style> @import url('<?=base_url()?>assets/css/dcmegamenu.css'); </style>
<style>
a:hover{
    color:white;
    }
</style>
<meta name="shoppingbaba cashback online coupons and discounts" content="cashback and coupons in Myntra and jabong and Homeshop18">
<meta name="Best deals and coupons on electronics and offers on myntra" content="Todays deals and coupons online">
<meta http-equiv="cache-control" content="max-age=-1" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />

<link rel="shortcuticon" href="<?php echo base_url();?>assets/images/favicon.ico" type="image/x-ico">
<link rel="icon" href="<?php echo base_url();?>assets/images/favicon.ico" type="image/x-ico">

<style> @import url('<?=base_url()?>assets/css/page_loadeffect.css'); </style>
<!--<style> @import url('<?=base_url()?>assets/css/ui.home.css'); </style>-->
<style> @import url('<?=base_url()?>assets/css/tabs_new.css'); </style>
<style> @import url('<?=base_url()?>assets/css/search.css'); </style>
<style> @import url('<?=base_url()?>assets/css/jquery-ui-1.10.3.custom.css');</style>
<!--<style> @import url('<?=base_url()?>assets/css/HomePage_old.css');</style>-->

<style> @import url('<?=base_url()?>assets/css/new_final_button.css');</style>
<!--user_home.css sty;le sheet -->
<style>
#get { cursor: pointer; }
#url { cursor: pointer; }
button { cursor : pointer;}
.top_merchant{cursor:pointer;}
.top_merchant_img:hover
{
border:2px solid #00C0F2;
text-decoration:underline;
}
.home_top_merchants:hover
{
	color:#00C0F2;
}
#wht:hover{color:white;}
</style>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.9.1.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.hoverIntent.minified.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.dcmegamenu.1.3.3.js" ></script>
<script type="text/javascript">
$(document).ready(function($){
	$('#mega-menu-1').dcMegaMenu({
		rowItems: '2',
		speed: 'fast',
		effect: 'fade'
	});
});

$('#options').click(function(){
    $('#options').removeClass('selected'); // remove selected from any other item first
    $(this).addClass('selected'); //add selected to the one just clicked.
});
</script>
</head>
<body  screen_capture_injected="true" >
    <div id="main">
        <div  id="wrap">
            <div class="header">
                  <div id="main_logo">
                    <img id="logo_image" src="<?php echo base_url();?>assets/images/image_logo.jpg" />
                 </div>


               <div id="topmenu">

                    <? if($this->session->userdata('user_id')!="")
                    {	?>	 
                        <ul id="mega-menu-1" class="mega-menu">
                                <li style="color:#636363"> <?php echo $this->session->userdata('user_email');?></li>               
                                <li style="width:155px;float:right">
                                    <a href="#">My Account</a>

                        <ul id="submenu" >
                                <li><a href="<?php echo base_url();?>account_details">Wallet</a></li>
                                <li><a href="<?php echo base_url();?>account_settings">Account Settings</a></li>
                        <? if($this->session->userdata('logout')!=""){?>

			         <li><a href="<?php echo $this->session->userdata('logout')?>">Logout</a></li>
			<?}else{?>
			         <li><a href="<?php echo base_url();?>logout">Logout</a></li>
                        		<?}?>
                        </ul>
                            </li>
                       </ul>
               
              <?php 
                else{?>

           <a href="<?php echo base_url();?>login_page/1">
            <button class="myButton" id = "get" name="submitform" value="get_details" type="submit" />Sign In / Sign Up</button>
           </a>
       <?php }?>
              
              </div> 
    
	   </div>
     </div>

     <div id="bluebar">
        <div id="bar_navigation">
        
	       <li id="options"><a href='<?php echo  base_url();?>'>Home</a></li>
	       <li id="options"><a href='<?php echo  base_url();?>category_page'>Stores</a></li>
	        <?if($this->session->userdata('user_id')=='1'){?>
			<li id="options"><a href='<?php echo  base_url();?>red_money'>Red Money</a></li>
			<li id="options"><a href='<?php echo  base_url();?>green_money'>Green Money</a></li>
		<?}?>
	</div>
     </div>
     
   
   
   
