<?php include('include/header.php'); 
if(!isset($_SESSION['Userid']))
	{
		header('location:index.php');	
		exit();
	} ?>
<main  id="authentication" class="inner-bottom-md" style="margin-top:80px;">
	<div class="container">
		<div class="row">
        <?php
                        $areaname = mysql_query('SELECT * FROM  tbl_parkingareas  WHERE id = "'.$_GET['area_id'].'"');   
	                    $areaname_row =@mysql_fetch_array($areaname)  ?>
                         <h1> <?php echo $areaname_row['title'];?></h1>
                         </div>
        <div class="row">
         <div class="col-md-2">Parking Space Available <img class="img-responsive center-block"  src="img/park.png"  /></div>
         <div class="col-md-2">Parking Space Occupied <img class="img-responsive center-block"  src="img/parked.png"  /></div>
         <div class="col-md-8"></div>
         </div>
         <?php   if(isset($_GET['booking'])){
                         echo "<button class='btn btn-success btn-block' type='button'>Your Parking Space has been Booked!!!</button>"; }  ?>
         <div class="row">
					<h2 class="bordered">Select Sloting No</h2>
                   <h4 style="padding-bottom:10px;">Please Select Sloting No where you park your Car.</h4>
                   <?php
                $slots = mysql_query('SELECT * FROM  tbl_slots WHERE areaid = "'.$_GET['area_id'].'" ORDER BY id ASC');   
	            while($slots_row =@mysql_fetch_array($slots))    { 
				?>
			  <div class="col-md-1">
            
             <?php if($slots_row['status']==1)  { ?>
              <h5> <a href="booking.php?area_id=<?php echo $_GET['area_id'] ?>&slot_id=<?php echo $slots_row['id'];?>&exitdate=<?php echo $slots_row['exitdate'];?>&exittime=<?php echo $slots_row['exittime'];?>">Slot <?php echo $slots_row['slotid'];?></a></h5>
             <a href="booking.php?area_id=<?php echo $_GET['area_id'] ?>&slot_id=<?php echo $slots_row['slotid'];?>&exitdate=<?php echo $slots_row['exitdate'];?>&exittime=<?php echo $slots_row['exittime'];?>">
             <img class="img-responsive center-block"  src="img/parked.png"  alt="parking" /></a>
              <?php } else { ?>
               <h5> <a href="booking.php?area_id=<?php echo $_GET['area_id'] ?>&slot_id=<?php echo $slots_row['id'];?>">Slot <?php echo $slots_row['slotid'];?></a></h5>
             <a href="booking.php?area_id=<?php echo $_GET['area_id'] ?>&slot_id=<?php echo $slots_row['slotid'];?>">
              <img class="img-responsive center-block"  src="img/park.png"  alt="parking" /></a>
              <?php } ?>   
             
             <p></p>
             </div>         
            <?php
                   } 	?> 
         </div>
	</div>
</main>
<?php include('include/footer.php'); ?>