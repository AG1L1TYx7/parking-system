<?php
include("data_con_adm.php");
?>
<select name="portfolio_subcategory" id="portfolio_subcategory">
<?php 
		$query=mysql_query("select * from tbl_portfolio_subcategory where portfolio_category='".$_REQUEST['pid']."'");
		while($row_cat=mysql_fetch_array($query)) { 
?>
<option value="<?php echo $row_cat['subcategory_title']; ?>"><?php echo $row_cat['subcategory_title']; ?></option>
<?php } ?>		 
</select>

