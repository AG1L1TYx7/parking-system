<?php include('include/header.php'); 
if(!isset($_SESSION['Userid']))
	{
		header('location:index.php');	
		exit();
	}?>
<?php
//bOOKING INFO INSERT IN table
$msg="";
if(isset($_POST['book']))
{
            $sql="insert into tbl_booking set
	        areaid='".$_POST['areaid']."',
			slotid='".$_POST['slotid']."',
			carno='".$_POST['carno']."',
			entrydate='".$_POST['entrydate']."',
			entrytime='".$_POST['entrytime']."',
			exitdate='".$_POST['exitdate']."',
			exittime='".$_POST['exittime']."',
			userid='".$_POST['hdn_id']."',
			status=0
		  ";
mysql_query($sql);

//Update Slots Table
mysql_query("update tbl_slots SET
               exitdate ='".$_POST['exitdate']."',
			   exittime ='".$_POST['exittime']."',
			   status=1
			   where slotid  = '".$_POST['slotid']."' AND areaid ='".$_POST['areaid']."'
			   ");
			 //echo "<pre>";
			 //print_r($_POST);

?>
	<script language='javascript' type='text/javascript'>window.location='slots.php?area_id=<?php echo $_POST['areaid']; ?>&booking=successfull'
    </script>	
	
<?php	
} ?>
<main id="authentication" class="inner-bottom-md" style="margin-top:80px;">
	<div class="container">
		<div class="row">
			  <form  action="booking.php" method="post"  role="form" class="login-form" >
              
              <div class="col-md-3"></div>
			<div class="col-md-6">
					<h2 class="bordered">Booking Information</h2>
                   <h3 style="padding-bottom:10px;">Please enter Booking Information</h3>
				  <div class="field-row">
                            <label>Area</label>
                            <?php
                        $areaname = mysql_query('SELECT * FROM  tbl_parkingareas  WHERE id = "'.$_GET['area_id'].'" ORDER BY id ASC');   
	                    $areaname_row =@mysql_fetch_array($areaname)  ?>
                            <select type="text" name="areaid" id="type" class="form-control input-lg"   />			   
                             <option value="<?php echo $areaname_row['id'];?>"><?php echo $areaname_row['title'];?></option>
                              </select>
                        </div>
                        <div class="field-row">
                            <label>Slot</label>
                            <input type="text" name="slotid" class="form-control input-lg" value="<?php echo $_GET['slot_id']; ?>" required>
                        </div>

                         <div class="field-row">
                            <label>Car No</label>
 <input type="text" name="carno" class="form-control input-lg" value="" required>
                        </div>
                          <div class="field-row">
                            <label>Entry Date</label>  <br/>
                      <?php if($_GET['exittime']!='') { ?> <p style="color:#FF0000;">(Already booked till  <strong><?php echo $_GET['exitdate']; ?></strong>   Please Select Date After that)</p>  <?php } ?>
                       <input id="date" name="entrydate" class="tcal form-control input-lg" value=""  />
                            </div>
                            <div class="field-row">
                            <label>Entry Time</label><br/>
                           <?php if($_GET['exittime']!='') { ?> <p style="color:#FF0000;">(Already booked till  <strong><?php echo $_GET['exittime']; ?></strong>   Please Select Time After that)</p>  <?php } ?>
                       <input type="text" name="entrytime" class="form-control input-lg" value="" required>
                        </div>
                           <div class="field-row">
                            <label>Exit Date</label>
                       <input  id="date1"  type="text" name="exitdate" class="tcal form-control input-lg" value="" required>
                        </div>
                         <div class="field-row">
                            <label>Exit Time</label>
                       <input type="text" name="exittime" class="form-control input-lg" value="" required>
                        </div>
            
                       <br/>
                       <div class="buttons-holder">
                            <button type="submit" name="book" class="btn btn-custom btn-lg">Book Now</button>
                        </div>
                        <input type="hidden" name="hdn_id" id="hdn_id" value="<?php echo $_SESSION['Userid']; ?>" />
                      	</div>
            
            <div class="col-md-3">
			
			</div>
                        
        	</form>
		</div>
	</div>
</main>
<?php include('include/footer.php'); ?>