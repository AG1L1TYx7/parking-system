    <header> 
  <!--- Slider Start--->  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
<?php $bresult = mysql_query("SELECT * FROM  tbl_slider  where status =1  order by id DESC") or die(mysql_error());
$rows = array();
while ($row = mysql_fetch_assoc($bresult)) {
$rows[] = $row;
}  ?>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
   <?php $i = 1; ?>
<?php foreach ($rows as $rowla): ?>
<?php $item_class = ($i == 1) ? 'item active' : 'item'; ?>
<div class="<?php echo $item_class;?>">     
<img src="admin/uploads/slider/<?php echo $rowla['image'];?>" alt="<?php echo $rowla['title'];?>" >
</div> 
<?php $i++; ?> 
<?php endforeach; ?>  
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>  
  <!--- Slider End--->
    </header>
    <section class="success" id="about" style="margin-top:-20px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p>Our company is focused on two areas-maximum parking efficiency and at the most cost savings for our clients-and as such, we continually expand our knowledge of state-of-the-art techniques and industry practices. Our people are the key to designing world class parking systems. Our team of seasoned professionals is large enough to handle major complex projects, while at the same time, we are able to get to know our clients intimately, listen to their needs and deliver on our promises. We are nimble enough to work on complicated, high-rise buildings as well as smaller renovations and everything in between.  While partnering with Parkmatic and getting results is really quite simple. We listen. We respond. We deliver. </p>
                </div>
            </div>
        </div>
    </section>