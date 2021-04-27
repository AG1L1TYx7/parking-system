    <div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
	  
			<div style="color:#FFFFFF; width:200px; font-size:16px; padding:30px; font-weight:bold;">Car Parking System</div>
		  
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				Hello, <a href="#" title="Edit your profile"><?php echo $_SESSION['adm']; ?></a><br />
				<br />
		<a href="index.php?singout=1" title="Sign Out">Sign Out</a>
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
				<li>
					<a href="index.php" class="nav-top-item no-submenu" > <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Dashboard
					</a>       
				</li>
				
				<li>
				<a href="#" class="nav-top-item <?php if($pagename=='parking_areas.php') { echo "current"; } ?>">
						Manage Parking Areas
					</a>
					<ul>
						<li><a href="parking_areas.php">Manage Parking Areas</a></li>
					</ul>
				</li>
              <li>
				<a href="#" class="nav-top-item <?php if($pagename=='slider.php') { echo "current"; } ?>">
					 Manage Top Slider
					</a>
					<ul>
						<li><a href="slider.php">Manage Slider</a></li>
					</ul>
				</li>
				
				 <li>
				<a href="#" class="nav-top-item <?php if($pagename=='reports.php') { echo "current"; } ?>">
					 Manage Booking Reports
					</a>
					<ul>
						<li><a href="reports.php"> Manage Booking Reports</a></li>
					</ul>
				</li>
				

				
				<li>
				<a href="#" class="nav-top-item <?php if($pagename=='registerusers.php') { echo "current"; } ?>">
					 Manage Registered Users
					</a>
					<ul>
						<li><a href="registerusers.php">Manage Registered Users</a></li>
					</ul>
				</li>
				<li>
					<a href="#" class="nav-top-item">
						Settings
					</a>
					<ul>
						<li><a href="admin_details.php">Users and Permissions</a></li>
					</ul>
				</li>      
				
			</ul> <!-- End #main-nav -->
	
			
		</div></div> <!-- End #sidebar -->

		