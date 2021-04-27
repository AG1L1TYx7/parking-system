<?php include('include/header.php'); 
if(!isset($_SESSION['Userid']))
	{
		header('location:index.php');	
		exit();
	}?>
<?php
$msg="";
if(isset($_POST['payment']))
{
            $sql="insert into tbl_payment set
	        orderid='".$_POST['hdnorder_id']."',
			amount='".$_POST['amount']."',
			name='".$_POST['name']."',
			cardno='".$_POST['cardno']."',
			expirydate='".$_POST['expirydate']."',
			csc='".$_POST['csc']."',
			userid='".$_POST['hdn_id']."',
			status=1
		  ";
mysql_query($sql);

mysql_query("update tbl_booking SET
			   status=1
			   where id  = '".$_POST['hdnorder_id']."'
			   ");
			 //echo "<pre>";
			 //print_r($_POST);

?>
	<script language='javascript' type='text/javascript'>window.location='orders.php?payment=successfull'
    </script>	
	
<?php	
} ?>
<main id="authentication" class="inner-bottom-md" style="margin-top:80px;">
	<div class="container">
		<div class="row">
			  <form  action="payment.php" method="post"  role="form" class="login-form" >
              
              <div class="col-md-3"></div>
			<div class="col-md-6">
<h2 class="bordered">Payment Information</h2>
<h3 style="padding-bottom:10px;">Please enter your Payment Information</h3>   
<h5>Order id  : &nbsp;&nbsp;<?php echo $_GET['orderid']; ?></h5>      <h5> Car No:&nbsp;&nbsp;<?php echo $_GET['carno']; ?></h5>         
<h5>No of Days  : &nbsp;&nbsp;<?php 
$getstartdate = mysql_fetch_array(mysql_query("SELECT * FROM  tbl_booking where id='".$_GET['orderid']."'")); 
 $originalentryDate = $getstartdate['entrydate'];    
$datetime1 = date("Y-m-d", strtotime($originalentryDate));
$originalexitDate = $getstartdate['exitdate'];
$datetime2 = date("Y-m-d", strtotime($originalexitDate));
$diff = (strtotime($datetime2)- strtotime($datetime1))/24/3600; 
echo $diff; ?></h5>
                            <div class="field-row">
                            <label>Total Amount (per day 100 Rupees)</label>
                            <input type="text" name="amount" class="form-control input-lg" value="<?php echo $total = $diff*100; ?>" required>
                        </div>
                        <div class="field-row">
                            <label>Credit Card Name</label>
                            <input type="text" name="name" class="form-control input-lg" value="" required>
                        </div>

                         <div class="field-row">
                            <label>Credit Card No</label>
                          <input type="text" name="cardno" class="form-control input-lg" value="" required>
                        </div>
                          <div class="field-row">
                            <label>Credit Card Expiry Dtae</label>              
                          <input id="date" name="expirydate" class="tcal form-control input-lg" value=""  />
                            </div>
                            <div class="field-row">
                            <label>CSC</label>
                          <input type="text" name="csc" class="form-control input-lg" value="" required>
                     </div>

                         
                       <br/>
                       <div class="buttons-holder">
                            <button type="submit" name="payment" class="btn btn-custom btn-lg">Pay Now</button>
                        </div>
                        <input type="hidden" name="hdn_id" id="hdn_id" value="<?php echo $_SESSION['Userid']; ?>" />
                        <input type="hidden" name="hdnorder_id" id="hdnorder_id" value="<?php echo $_GET['orderid']; ?>" />
                      	</div>
            
            <div class="col-md-3">
			
			</div>
                        
        	</form>
            
            
		</div>
	</div>
</main>
<?php include('include/footer.php'); ?>