<?php
require_once('include/main1.php');
require_once('include/header.php');
if(!isset($_SESSION['login_user'])&& $_SESSION['login_user']==''){
	header('location:index.php');
	exit;
}else{	
	$where=array('id'=>$_SESSION['id']);
	$result= $db->getRow($table='users',$where);
}	
?>
   <!-- Timeline content -->
    <div class="container" style="margin-top:50px;">
		<div class="row">
			<div class="col-md-10 no-paddin-xs">
				<div class="profile-nav col-md-4">
					<div class="panel">
						<div class="user-heading round">
							<a href="#">
							<?php	echo "<img src='img/Friends/".$_SESSION['image']."' />";?> 
							</a>
							<h1><?php echo $_SESSION['login_user'];?></h1>

							<p><?php echo $_SESSION['email_id'];?></p>
						</div>

						<ul class="nav nav-pills nav-stacked">
							<li><a href="profile.php"> <i class="fa fa-user"></i> Profile</a></li>
							<li class="active"><a href="about.php"> <i class="fa fa-info-circle"></i> About</a></li>
							<li><a href="friends.html"> <i class="fa fa-users"></i> Friends</a></li>
							<li><a href="photos.php"> <i class="fa fa-file-image-o"></i> Photos</a></li>
							<li><a href="edit_profile.php"> <i class="fa fa-edit"></i> Edit profile</a></li>
						</ul>
					</div>
				</div>
			
				<div class="profile-info col-md-8">
					<div class="panel animated fadeInUp">
						<div class="panel-body bio-graph-info">
							<h1>Bio Graph</h1>
								<?php foreach($result as $userdata){
					
								?>
								<div class="row">
									<div class="bio-row">
										<p><span>First Name </span>: <?php echo $userdata['name']; ?></p>
									</div>
									<div class="bio-row">
										<p><span>Last Name </span>: <?php echo $userdata['lname']; ?></p>
									</div>
									<div class="bio-row">
										<p><span>Country </span>: <?php echo $userdata['country']; ?></p>
									</div>
									<div class="bio-row">
										<p><span>Birthday</span>: <?php echo $userdata['birthday']; ?></p>
									</div>
									<div class="bio-row">
										<p><span>Occupation </span>: <?php echo $userdata['occupation']; ?></p>
									</div>
									<div class="bio-row">
										<p><span>Email </span>: <?php echo $userdata['email']; ?></p>
									</div>
									<div class="bio-row">
										<p><span>Mobile </span>: <?php echo $userdata['mobile']; ?></p>
									</div>
									<div class="bio-row">
										<p><span>Gender </span>: <?php echo $userdata['gender']; ?></p>
									</div>
										<?php }?>
								</div>
						</div>
					</div> 
              
				</div>
			</div>
		</div>	
    </div><!--End Timeline content -->

    <!-- Online users sidebar content-->
    <div class="chat-sidebar focus">
		<div class="list-group text-left">
			<p class="text-center visible-xs"><a href="#" class="hide-chat">Hide</a></p> 
			<p class="text-center chat-title">Online users</p>  
			<a href="messages.html" class="list-group-item">
			  <i class="fa fa-check-circle connected-status"></i>
			  <img src="img/Friends/guy-2.jpg" class="img-chat img-thumbnail">
			  <span class="chat-user-name">Jeferh Smith</span>
			</a>
			<a href="messages.html" class="list-group-item">
			  <i class="fa fa-times-circle absent-status"></i>
			  <img src="img/Friends/woman-1.jpg" class="img-chat img-thumbnail">
			  <span class="chat-user-name">Dapibus acatar</span>
			</a>
			<a href="messages.html" class="list-group-item">
			  <i class="fa fa-check-circle connected-status"></i>
			  <img src="img/Friends/guy-3.jpg" class="img-chat img-thumbnail">
			  <span class="chat-user-name">Antony andrew lobghi</span>
			</a>
			<a href="messages.html" class="list-group-item">
			  <i class="fa fa-check-circle connected-status"></i>
			  <img src="img/Friends/woman-2.jpg" class="img-chat img-thumbnail">
			  <span class="chat-user-name">Maria fernanda coronel</span>
			</a>
			<a href="messages.html" class="list-group-item">
			  <i class="fa fa-check-circle connected-status"></i>
			  <img src="img/Friends/guy-4.jpg" class="img-chat img-thumbnail">
			  <span class="chat-user-name">Markton contz</span>
			</a>
			<a href="messages.html" class="list-group-item">
			  <i class="fa fa-times-circle absent-status"></i>
			  <img src="img/Friends/woman-3.jpg" class="img-chat img-thumbnail">
			  <span class="chat-user-name">Martha creaw</span>
			</a>
			<a href="messages.html" class="list-group-item">
			  <i class="fa fa-times-circle absent-status"></i>
			  <img src="img/Friends/woman-8.jpg" class="img-chat img-thumbnail">
			  <span class="chat-user-name">Yira Cartmen</span>
			</a>
			<a href="messages.html" class="list-group-item">
			  <i class="fa fa-check-circle connected-status"></i>
			  <img src="img/Friends/woman-4.jpg" class="img-chat img-thumbnail">
			  <span class="chat-user-name">Jhoanath matew</span>
			</a>
			<a href="messages.html" class="list-group-item">
			  <i class="fa fa-check-circle connected-status"></i>
			  <img src="img/Friends/woman-5.jpg" class="img-chat img-thumbnail">
			  <span class="chat-user-name">Ryanah Haywofd</span>
			</a>
			<a href="messages.html" class="list-group-item">
			  <i class="fa fa-check-circle connected-status"></i>
			  <img src="img/Friends/woman-9.jpg" class="img-chat img-thumbnail">
			  <span class="chat-user-name">Linda palma</span>
			</a>
			<a href="messages.html" class="list-group-item">
			  <i class="fa fa-check-circle connected-status"></i>
			  <img src="img/Friends/woman-10.jpg" class="img-chat img-thumbnail">
			  <span class="chat-user-name">Andrea ramos</span>
			</a>
			<a href="messages.html" class="list-group-item">
			  <i class="fa fa-check-circle connected-status"></i>
			  <img src="img/Friends/child-1.jpg" class="img-chat img-thumbnail">
			  <span class="chat-user-name">Dora ty bluekl</span>
			</a>        
		</div>
    </div><!-- Online users sidebar content-->
    
<?php require_once($DOC_ROOT.'include/footer.php');?>

