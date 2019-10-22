<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
<input type="hidden" id="refreshed" value="no">
<script type="text/javascript">
onload=function(){
var e=document.getElementById("refreshed");
if(e.value=="no")e.value="yes";
else{e.value="no";location.reload();}
}
</script>
<style>
body{
    background: url(http://mymaplist.com/img/parallax/back.png);
    background-color: #444;
    background: url(http://mymaplist.com/img/parallax/pinlayer2.png),url(http://mymaplist.com/img/parallax/pinlayer1.png),url(http://mymaplist.com/img/parallax/back.png);
}

.vertical-offset-100{
    padding-top:100px;
}
</style>
<script>
$(document).ready(function(){
  $(document).mousemove(function(e){
     TweenLite.to($('body'),
        .5,
        { css:
            {
                backgroundPosition: ""+ parseInt(event.pageX/8) + "px "+parseInt(event.pageY/'12')+"px, "+parseInt(event.pageX/'15')+"px "+parseInt(event.pageY/'15')+"px, "+parseInt(event.pageX/'30')+"px "+parseInt(event.pageY/'30')+"px"
            }
        });
  });
});
</script>
</head>
<body>



<!-- This is a very simple parallax effect achieved by simple CSS 3 multiple backgrounds, made by http://twitter.com/msurguy -->

<div class="container">
    <div class="row vertical-offset-100">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Select a place</h3>
                 </div>
                  <div class="panel-body">





                    <form action="<?php echo base_url();?>locator_submit" method="post" accept-charset="UTF-8" role="form">
                    <fieldset>
                          <div class="form-group">
                  <?php
                  $data=$this->db->select('city')->from('branches')->get()->result();
                  ?>
                  <select name="city">
                  <?php
                  foreach($data as $key=>$value)
                  {$value=(array)$value;$value=$value['city'];
                  ?>
                  <option value="<?php print_r($value)?>"><?php print_r($value) ?></option>
                  <?php
                  }
                  ?>
                  </select>


                           <?php
                           /* <input class="form-control" placeholder="<?php print_r($city);?>" name="city" type="text">
                        */?>
                            </div>


                        <input class="btn btn-lg btn-success btn-block" type="submit">
                    </fieldset>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
