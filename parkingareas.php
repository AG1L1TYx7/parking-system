<?php include('include/header.php'); 
if(!isset($_SESSION['Userid']))
	{
		header('location:index.php');	
		exit();
	}?>
 <?php  
$cudate = date("m/d/Y") ;
$curtime  = date("h:i:sa");

               mysql_query("update tbl_slots SET
			   status=0
			   where exitdate  <= '$cudate'  AND exittime <='$curtime' ");
 
   ?>   
    
    
   

<main id="authentication" class="inner-bottom-md" style="margin-top:80px;">
	<div class="container">
		<div class="row">
					<h2 class="bordered">Parking Areas</h2> 
                   <h3 style="padding-bottom:10px;">Please Select Parking Area where you park your Car.</h3>
				<?php
    $parkingareas = mysql_query('SELECT * FROM  tbl_parkingareas WHERE status =1 ORDER BY sort1 ASC');   
	while($parkingareas_row =@mysql_fetch_array($parkingareas))
	{ 
				?>				
			  <div class="col-md-6">
             <h3><a href="slots.php?area_id=<?php echo $parkingareas_row['id'];?>"><?php echo $parkingareas_row['title'];?></a></h3>
             <a href="slots.php?area_id=<?php echo $parkingareas_row['id'];?>"><img class="img-responsive center-block"  src="admin/uploads/parkingareas/<?php echo $parkingareas_row['image'];?>"  alt="<?php echo $parkingareas_row['title'];?>" /></a>
             <p><?php echo stripslashes(urldecode($parkingareas_row['description']));?></p>
             </div>
        <?php } ?>  
           
		</div>
	</div>
</main>
<?php include('include/footer.php'); ?>