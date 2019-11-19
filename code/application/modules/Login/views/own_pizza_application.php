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
<style>
.button {
    position:absolute;
    bottom:10px;
    right:10px;
    width:100px;
    height:30px;
}
.pic:hover { opacity: 0.3; filter: alpha(opacity=30); } 

body{margin:40px;}

.stepwizard-step p {
    margin-top: 10px;    
}

.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;     
    width: 100%;
    position: relative;
}

.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
    
}

.stepwizard-step {    
    display: table-cell;
    text-align: center;
    position: relative;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}

</style>









<input type="hidden" id="refreshed" value="no">
<script type="text/javascript">
onload=function(){
var e=document.getElementById("refreshed");
if(e.value=="no")e.value="yes";
else{e.value="no";location.reload();}
}</script>
<script>
$(document).ready(function()
{
    var navItems = $('.admin-menu li > a');
    var navListItems = $('.admin-menu li');
    var allWells = $('.admin-content');
    var allWellsExceptFirst = $('.admin-content:not(:first)');
    
    allWellsExceptFirst.hide();
    navItems.click(function(e)
    {
        e.preventDefault();
        navListItems.removeClass('active');
        $(this).closest('li').addClass('active');
        
        allWells.hide();
        var target = $(this).attr('data-target-id');
        $('#' + target).show();
    });
});



var $form = $('#payment-form');
$form.on('submit', payWithStripe);

/* If you're using Stripe for payments */
function payWithStripe(e) {
    e.preventDefault();

    /* Visual feedback */
    $form.find('[type=submit]').html('Validating <i class="fa fa-spinner fa-pulse"></i>');

    var PublishableKey = 'pk_test_6pRNASCoBOKtIshFeQd4XMUh'; // Replace with your API publishable key
    Stripe.setPublishableKey(PublishableKey);
    Stripe.card.createToken($form, function stripeResponseHandler(status, response) {
        console.log
        if (response.error) {
            /* Visual feedback */
            $form.find('[type=submit]').html('Try again');
            /* Show Stripe errors on the form */
            $form.find('.payment-errors').text(response.error.message);
            $form.find('.payment-errors').closest('.row').show();
        } else {
            /* Visual feedback */
            $form.find('[type=submit]').html('Processing <i class="fa fa-spinner fa-pulse"></i>');
            /* Hide Stripe errors on the form */
            $form.find('.payment-errors').closest('.row').hide();
            $form.find('.payment-errors').text("");
            // response contains id and card, which contains additional card details
            var token = response.id;
            console.log(token);
            // AJAX
            $.post('/account/stripe_card_token', {
                    token: token
                })
                // Assign handlers immediately after making the request,
                .done(function(data, textStatus, jqXHR) {
                    $form.find('[type=submit]').html('Payment successful <i class="fa fa-check"></i>').prop('disabled', true);
                })
                .fail(function(jqXHR, textStatus, errorThrown) {
                    $form.find('[type=submit]').html('There was a problem').removeClass('success').addClass('error');
                    /* Show Stripe errors on the form */
                    $form.find('.payment-errors').text('Try refreshing the page and trying again.');
                    $form.find('.payment-errors').closest('.row').show();
                });
        }
    });
}

/* Form validation */
jQuery.validator.addMethod("month", function(value, element) {
  return this.optional(element) || /^(01|02|03|04|05|06|07|08|09|10|11|12)$/.test(value);
}, "Please specify a valid 2-digit month.");

jQuery.validator.addMethod("year", function(value, element) {
  return this.optional(element) || /^[0-9]{2}$/.test(value);
}, "Please specify a valid 2-digit year.");

validator = $form.validate({
    rules: {
        cardNumber: {
            required: true,
            creditcard: true,
            digits: true
        },
        expMonth: {
            required: true,
            month: true
        },
        expYear: {
            required: true,
            year: true
        },
        cvCode: {
            required: true,
            digits: true
        }
    },
    highlight: function(element) {
        $(element).closest('.form-control').removeClass('success').addClass('error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-control').removeClass('error').addClass('success');
    },
    errorPlacement: function(error, element) {
        $(element).closest('.form-group').append(error);
    }
});

paymentFormReady = function() {
    if ($form.find('[name=cardNumber]').hasClass("success") &&
        $form.find('[name=expMonth]').hasClass("success") &&
        $form.find('[name=expYear]').hasClass("success") &&
        $form.find('[name=cvCode]').val().length > 1) {
        return true;
    } else {
        return false;
    }
}

$form.find('[type=submit]').prop('disabled', true);
var readyInterval = setInterval(function() {
    if (paymentFormReady()) {
        $form.find('[type=submit]').prop('disabled', false);
        clearInterval(readyInterval);
    }
}, 250);
</script>



















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

<div class="stepwizard">
    <div class="stepwizard-row">
        <div class="stepwizard-step">
            <button type="button" class="btn btn-success btn-circle">1</button>
            <p>Select Pizza</p>
        </div>
        <div class="stepwizard-step">
            <button type="button" class="btn btn-success btn-circle">2</button>
            <p>Select Toppings</p>
        </div>
        <div class="stepwizard-step">
            <button type="button" class="btn btn-primary btn-circle" disabled="disabled">3</button>
            <p>Payment</p>
        </div> 
    </div>
</div>

</head>

<body style="background:url('http://images7.alphacoders.com/328/328730.jpg')">
     <div class="row">
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked admin-menu">
                <li class="active"><a href="#" data-target-id="home"><i class="fa fa-home fa-fw"></i>Credit Card</a></li>
                <li><a href="http://www.jquery2dotnet.com" data-target-id="widgets"><i class="fa fa-list-alt fa-fw"></i>Debit Card</a></li>
                <a href="<?php echo base_url();?>pay_submit" ><button>Cash On Delivery</button></a>
              </ul>
        </div>
        <div class="col-md-9 well admin-content" id="home">
            <p>
               
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.min.js"></script>

<!-- If you're using Stripe for payments -->
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<!-- Credit card form -->
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><img class="pull-right" src="http://i76.imgup.net/accepted_c22e0.png">Payment Details</h3>
                </div>
                <div class="panel-body">
                    <form role="form" id="payment-form" action="<?php echo base_url();?>pay_submit" method="post">
					
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="couponCode">CARD TYPE</label>
                                    <input type="text" class="form-control" name="couponCode" />
                                </div>
                            </div>                        
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
					
                                <div class="form-group">
                                    <label for="cardNumber">CARD NUMBER</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="cardNumber" placeholder="Valid Card Number" required autofocus data-stripe="number" />
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="expMonth">EXPIRATION DATE</label>
                                    <div class="col-xs-6 col-lg-6 pl-ziro">
                                        <input type="text" class="form-control" name="expMonth" placeholder="MM" required data-stripe="exp_month" />
                                    </div>
                                    <div class="col-xs-6 col-lg-6 pl-ziro">
                                        <input type="text" class="form-control" name="expYear" placeholder="YY" required data-stripe="exp_year" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="cvCode">CV CODE</label>
                                    <input type="password" class="form-control" name="cvCode" placeholder="CV" required data-stripe="cvc" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="btn btn-success btn-lg btn-block" type="submit">Place Order</button>
                            </div>
                        </div>
                        <div class="row" style="display:none;">
                            <div class="col-xs-12">
                                <p class="payment-errors"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
             
			</p>
        </div>
        <div class="col-md-9 well admin-content" id="widgets">
            
<!-- Credit card form -->
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><img class="pull-right" src="http://i76.imgup.net/accepted_c22e0.png">Payment Details</h3>
                </div>
                <div class="panel-body">
                    <form role="form" id="payment-form" action="<?php echo base_url();?>pay_submit" method="post">
					
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="couponCode">CARD TYPE</label>
                                    <input type="text" class="form-control" name="couponCode" />
                                </div>
                            </div>                        
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
					
                                <div class="form-group">
                                    <label for="cardNumber">CARD NUMBER</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="cardNumber" placeholder="Valid Card Number" required autofocus data-stripe="number" />
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="expMonth">EXPIRATION DATE</label>
                                    <div class="col-xs-6 col-lg-6 pl-ziro">
                                        <input type="text" class="form-control" name="expMonth" placeholder="MM" required data-stripe="exp_month" />
                                    </div>
                                    <div class="col-xs-6 col-lg-6 pl-ziro">
                                        <input type="text" class="form-control" name="expYear" placeholder="YY" required data-stripe="exp_year" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="cvCode">CV CODE</label>
                                    <input type="password" class="form-control" name="cvCode" placeholder="CV" required data-stripe="cvc" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="btn btn-success btn-lg btn-block" type="submit">Place Order</button>
                            </div>
                        </div>
                        <div class="row" style="display:none;">
                            <div class="col-xs-12">
                                <p class="payment-errors"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
             
			</p>
        </div>
        </div>
    </div>
</div>

<div class="navbar navbar-default navbar-fixed-bottom" >
    <div class="container" style="display:block;">
      <p class="navbar-text pull-left" style="display:block;color:blue;" >
	  
	  Orders made by you:
          <?php
             $result=$this->db->select('*')->from('temp_o')->where('uid',$this->session->userdata('id'))->where('status','added')->get()->result();
if(sizeof($result)!=0){            	
			foreach($result as $key=>$v)
			{
				$v=(array)$v;
		  ?>
		  <div class="col-sm-1" style="color:red;margin-right:20px;">
		  <?php
               if($v['type']=='bread')
               {
				   $id=$this->db->select('name')->from('breads')->where('id',$v['iid'])->get()->result();
				   $id=$id[0];
				   $id=(array)$id;
				   $id=$id['name'];
				   print_r($id);
			   }
               
               if($v['type']=='toppings')
               {
				   $id=$this->db->select('name')->from('toppings')->where('id',$v['iid'])->get()->result();
				   $id=$id[0];
				   $id=(array)$id;
				   $id=$id['name'];
				   print_r($id);
			   }
               
               if($v['type']=='sauce')
               {
				   $id=$this->db->select('name')->from('sauce')->where('id',$v['iid'])->get()->result();
				   $id=$id[0];
				   $id=(array)$id;
				   $id=$id['name'];
				   print_r($id);
			   }			   
		  ?>
		  <div>
		  <a href="<?php echo base_url();?>delete_s/<?php print_r($v['iid']);?>">
		  <button class="btn btn-danger btn-round-xs btn-xs"type="submit">cancel</button>
		  </a>
		  
		  </div>
		  </div>
          <?php		  
			}
}			
		  ?>
		 
      </p>
      			  
     <a href="<?php echo base_url();?>own_pizza_application" class="navbar-btn btn-success btn pull-right" style="  margin-left:30px;">
      <span class="glyphicon glyphicon-arrow-right" ></span>NEXT</a>

      <h4 style="color:green;" class=" pull-right">
	    Total Price: $
        <?php
        //   $size=$this->db->select('id')->from('temp_o')->where('uid',$this->session->userdata('id'))->where('status','added')->get()->result();		
		   
		   $temp=$this->db->select('*')->from('temp_o')->where('uid',$this->session->userdata('id'))->where('status','added')->get()->result();
		   $price=0;
		   foreach($temp as $key=>$value1)
		   {
			   $value1=(array)$value1;
			   if($value1['type']=='bread'){
			   $x=$this->db->select('price')->from('breads')->where('id',$value1['iid'])->get()->result();
		       }
			   if($value1['type']=='toppings'){
			   $x=$this->db->select('price')->from('toppings')->where('id',$value1['iid'])->get()->result();
		       }
			   if($value1['type']=='sauce'){
			   $x=$this->db->select('price')->from('sauce')->where('id',$value1['iid'])->get()->result();
		       }
			   $x=$x[0];
			   $x=(array)$x;
			   $x=$x['price'];
			   $price=$price+$x;
		   }
		   print_r($price);
		?>
		
    </div>
    
  </div>

</body>
</html>
