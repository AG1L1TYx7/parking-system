<?php include('include/header.php'); 
if(!isset($_SESSION['Userid']))
	{
		header('location:index.php');	
		exit();
	}?>
<?php
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
			status=1
		  ";
mysql_query($sql);

mysql_query("update tbl_slots SET
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
<?php
if(isset($_POST['deleteorder']))
{
mysql_query("Delete from tbl_booking where id  = '".$_POST['order_id']."'");	
mysql_query("update tbl_slots SET  status=0  where slotid  = '".$_POST['slot_id']."'");
			 //echo "<pre>";
			 //print_r($_POST);

?>
	<script language='javascript' type='text/javascript'>window.location='orders.php?order=deleted'
    </script>	
	
<?php	
} ?>
<main id="authentication" class="inner-bottom-md" style="margin-top:80px;">
	<div class="container">
		<div class="row">
        <h1>My Booking</h1>
         <!---   Successfull message   --->
         <?php   if(isset($_GET['payment'])){
                         echo "<button class='btn btn-success btn-block' type='button'>Your Payment has been Submitted Successfull!!!</button>"; }  ?><br/>
                          <?php   if(isset($_GET['order'])){
                         echo "<button class='btn btn-success btn-block' type='button'>Your Order has been Deleted!!!</button>"; }  ?><br/>
        
          <div class="row cart-item cart_item" id="yith-wcwl-row-1" >
                    <div class="col-xs-12 col-sm-2 no-margin">
				  <div class="price">Area Name</div>						
					</div>
	              	
						<div class="col-xs-12 col-sm-1 no-margin">
	                    	<div class="price">
	                       Slot No
                            </div>
                           </div>
						
		                <div class="col-xs-12 col-sm-2 no-margin">
		                	<div class="price">
			                	Car No						
			                </div>
		                </div>
                        
                        <div class="col-xs-12 col-sm-2 no-margin">
							<div class="price">Entry Date  & Time</div>
						</div>
                         <div class="col-xs-12 col-sm-2 no-margin">
							<div class="price">Exit Date  & Time</div>
						</div>
                         <div class="col-xs-12 col-sm-2 no-margin">
							<div class="price">Order Status</div>
						</div>
                        <div class="col-xs-12 col-sm-1 no-margin">
							<div class="price">Delete Order</div>
						</div>
						
						
	              	</div>
		   <?php $myorders = mysql_query("select * from tbl_booking WHERE userid='".$_SESSION['Userid']."'");
               while($myorders_rows = mysql_fetch_array($myorders))
                { ?>
                
                <?php 
				 $cdate = date("m/d/Y");
				 $edate  = $myorders_rows['exitdate'];	
				 $slotid  = $myorders_rows['slotid'];	
                  if (($cdate > $edate)) { 
				  
              mysql_query("update tbl_slots SET
			   status=0
			   where slotid  = '".$slotid ."'");

                	} else {  ?>
				  <div class="row cart_item1" id="yith-wcwl-row-1">
                    <div class="col-xs-12 col-sm-2 no-margin">
                    <?php $area_id =$myorders_rows['areaid'];?>	
                     <?php
                        $areaname = mysql_query('SELECT id,title FROM  tbl_parkingareas  WHERE id = "'.$area_id.'"');   
	                    $areaname_row =@mysql_fetch_array($areaname)  ?>
                       <?php echo $areaname_row['title'];?>
                    </div>
	              		<div class="col-xs-12 col-sm-1 no-margin">
	                    	<div class="title">
	                      <?php echo $myorders_rows['slotid'];?>	
                          </div>
                           </div>
						 <div class="col-xs-12 col-sm-2 no-margin">
		                	<?php echo $myorders_rows['carno'];?>						
			              </div>
                        <div class="col-xs-12 col-sm-2 no-margin">
							<?php echo date($myorders_rows['entrydate']);?> &nbsp;&nbsp;<?php echo $myorders_rows['entrytime'];?>
						</div>
                          <div class="col-xs-12 col-sm-2 no-margin">
							<?php echo $myorders_rows['exitdate'];?> &nbsp;&nbsp;<?php echo $myorders_rows['exittime'];?>
						</div>
						 <div class="col-xs-12 col-sm-2 no-margin">
							 
                            <?php if($myorders_rows['status']==1)  { ?>
                            Paid <span style="color:#006600;">(Thankyou)</span>
                            <?php  } else { ?>
                            Unpaid <a href="payment.php?orderid=<?php echo $myorders_rows['id'];  ?>&carno=<?php echo $myorders_rows['carno'];  ?>" style="color:#FF0000">(Please pay)</a>
                            <?php  }  ?>
                            
						</div>
                        <div class="col-xs-12 col-sm-1 no-margin">
							 <form action="orders.php" method="post" id="register-form"> 
                              <input type="submit" name="deleteorder" class="btn btn-custom btn-lg" value="Delete" style="padding-top:2px; padding-bottom:2px;">
                              <input type="hidden" name="slot_id" id="slot_id" value="<?php echo $myorders_rows['slotid']; ?>" />
                               <input type="hidden" name="order_id" id="order_id" value="<?php echo $myorders_rows['id']; ?>" />
                            </form>
						</div>
						
	              	</div>	
                   <?php } 
				   
				    } ?>
		</div>
	</div>
</main>
<?php include('include/footer.php'); ?> 
