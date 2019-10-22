<html> 
<?php
 if($this->session->userdata('id')!=''){ ?>
     

<input type="submit" action="<?php echo base_url();?>logout" method="post">

<?php }?>
</html>