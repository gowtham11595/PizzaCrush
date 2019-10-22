<html>
<body>
<header id="welcome">
	          <h1>welcome to youearn</h1>
<?php
 if($this->session->userdata('id')!=''){ ?>
     <a href="<?php echo base_url();?>logout"><button type="button">Logout</button></a>
<?php 
}

if($this->session->userdata('id')!=''){
   ?>  
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script>
   $(document).ready(function(){$("#log").hide();$("#reg").hide();});
   </script>
     <?php                            }
?>



<a href="<?php echo base_url();?>register"><button type="button" name="reg" id="reg">register</button></a>
<a href="<?php echo base_url();?>login"><button type="button" name="log" id="log">login</button></a>

			  </header><hr>

<?php
$t=0;
$flag=0;$t1=0;
foreach($youtube as $key=>$video)
{
if($flag==0){
   foreach($image as $lock=>$img)
   {
     $img=(array)$img;$x[$t]=$img['image']; $t=$t+1;$flag=1;
   }
}
	 
	 
$video=(array)$video;//<embed width="420" height="315"
                     //src="$video['youtubelink']"> 
$temp=$video['youtubelink'];

?>
<form action="<?php  echo base_url();?>icon_click/<?php echo $temp?>" method="post">
<input type="image" width="200" height="200" src="<?php echo base_url().'assets/uploads/'.$x[$t1]?>" alt="Submit">
</form><?php $t1=$t1+1;?>
<?php } ?>

          <?php     foreach($videos as $key=>$video)
	                { 
					/*  $video = (array)$video;$x=1;
					   $sfid=$this->db->select('id')->from('shortfilm')->where('youearnlink',$video['youearnlink'])->get()->result();
		         ?>    
				     
			<?		 <video width="320" height="240" controls>
                              <source src="<?php echo base_url().'assets/uploads/'.$video['youearnlink'] ?>" type="video/mp4">
                              Your browser does not support the video tag.
                        </video>
						
          		*/	?>	

	             <?php //  $x=$x+1;
               
                
			   } 
           

?>   
 	                 
</body>
</html>				  