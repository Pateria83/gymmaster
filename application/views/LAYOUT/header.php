<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Gym | Master</title>
		<!-- plugins:css -->
		<link rel="stylesheet" href="<?php echo base_url( '/assets/layout/' ) . 'node_modules/mdi/css/materialdesignicons.min.css'; ?>">
		<link rel="stylesheet" href="<?php echo base_url( '/assets/layout/' ) . 'node_modules/simple-line-icons/css/simple-line-icons.css'; ?>">
		<link rel="stylesheet" href="<?php echo base_url( '/assets/layout/' ) . 'node_modules/flag-icon-css/css/flag-icon.min.css'; ?>">
		<link rel="stylesheet" href="<?php echo base_url( '/assets/layout/' ) . 'node_modules/perfect-scrollbar/css/perfect-scrollbar.css'; ?>">
		<!-- endinject -->
		<!-- plugin css for this page -->
		<link rel="stylesheet" href="<?php echo base_url( '/assets/layout/' ) . 'node_modules/morris.js/morris.css'; ?>" />
		<!-- End plugin css for this page -->
		<!-- inject:css -->
		<link rel="stylesheet" href="<?php echo base_url( '/assets/layout/' ) . 'css/style.css'; ?>">
		<!-- endinject -->
		<link rel="shortcut icon" href="<?php echo base_url( '/assets/layout/' ) . 'images/favicon.png'; ?>" />
	</head>
	<body>
		<div class="container-scroller">
			<!-- partial:partials/_navbar.html -->
			<nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
				<div class="text-center navbar-brand-wrapper">
					<a class="navbar-brand brand-logo" href="index-2.html"><img src="<?php echo base_url( '/assets/layout/' ) . 'images/logo.svg'; ?>" alt="logo">
					</a>
					<a class="navbar-brand brand-logo-mini" href="index-2.html"><img src="<?php echo base_url( '/assets/layout/' ) . 'images/logo_mini1.png'; ?>" alt="logo">
					</a>
				</div>
				<div class="navbar-menu-wrapper d-flex align-items-center">
					<button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize"><span class="mdi mdi-equal display-3"></span>
					</button>
					<ul class="navbar-nav nav-header-item-wrapper">
                  <li class="nav-item profile">
                     <div class="profile-img ml-0 sm-ml-4">		
                        <img src="<?php echo base_url( '/assets/layout/' ) . 'images/faces-clipart/profile_img.jpg'; ?>" alt="">		
                        <div class="count-indicator online-status online"></div>
                     </div>
                  </li>
                  <li class="nav-item d-none d-sm-block dropdown">
                     <a class="btn bg-transparent dropdown-toggle text-default-color" id="userDropdown" href="#" data-toggle="dropdown"> Hi Mike Hussy </a>	
                     <div class="dropdown-menu navbar-dropdown preview-list p-3" aria-labelledby="userDropdown">
                        <a href="#" class="btn btn-block btn-link text-dark">View Profile</a>
                        <a href="#" class="btn btn-block btn-link text-dark">Account Settings</a>
                        <div class="dropdown-divider mb-4"></div>
                        <a href="#" class="btn btn-block btn-primary">Logout</a>
                     </div>
                  </li>
                  <li class="nav-item dropdown notification d-flex align-items-center ml-3 ml-sm-4">
                     <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="count bg-success">7</span>
                     </a>
                     <div class="dropdown-menu navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                        <h6 class="p-3 mb-0">Notifications</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                           <div class="preview-thumbnail">
                              <div class="preview-icon bg-success">
                                 <i class="mdi mdi-calendar"></i>
                              </div>
                           </div>			
                           <div class="preview-item-content">				
                              <h6 class="preview-subject">Event today</h6>				
                              <p class="text-gray ellipsis"> Just a reminder that you have an event today </p>			
                           </div>		
                        </a>		
                        <p class="p-3 mb-0 text-center">View all notifications</p>
                     </div>
                  </li>
                  <li class="nav-item setting nav-settings d-none d-md-block">	
                     <a class="nav-link" href="#">		
                        <i class="mdi mdi-format-list-bulleted"></i>	
                     </a>
                  </li>
                  <li class="nav-item color-variations d-none d-md-block" id="settings-trigger">	
                     <a class="nav-link" href="#">		
                        <i class="mdi mdi-format-color-fill"></i>	
                     </a>
                  </li>
					</ul>
					<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                  <span class="mdi mdi-equal display-3"></span>
					</button>
				</div>
			</nav>
			<!-- partial -->
			<div class="container-fluid page-body-wrapper">
				<!-- partial:partials/_settings-panel.html -->
				<div class="theme-setting-wrapper">
					<div id="theme-settings" class="settings-panel">
                  <i class="settings-close mdi mdi-close"></i><p class="settings-heading">SIDEBAR SKINS</p><div class="sidebar-bg-options selected" id="sidebar-light-theme">	<div class="img-ss rounded-circle bg-light border mr-3"></div> Light</div><div class="sidebar-bg-options" id="sidebar-dark-theme">	<div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark</div><p class="settings-heading mt-2">HEADER SKINS</p><div class="color-tiles mx-0 px-4">	<div class="tiles primary"></div>	<div class="tiles success"></div>	<div class="tiles warning"></div>	<div class="tiles danger"></div>	<div class="tiles pink"></div>	<div class="tiles info"></div>	<div class="tiles dark"></div>	<div class="tiles default"></div></div>
					</div>
				</div>
				<div id="right-sidebar" class="settings-panel">
					<i class="settings-close mdi mdi-close"></i>
					<ul class="nav nav-tabs" id="setting-panel" role="tablist"><li class="nav-item">	<a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a></li><li class="nav-item">	<a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a></li>
					</ul>
					<div class="tab-content" id="setting-content"><div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">	<div class="add-items d-flex px-3 mb-0">		<form class="form w-100">			<div class="form-group d-flex">				<input type="text" class="form-control todo-list-input" placeholder="Add To-do">				<button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>			</div>		</form>	</div>	<div class="list-wrapper px-3">		<ul class="d-flex flex-column-reverse todo-list">			<li>				<div class="form-check">					<label class="form-check-label">						<input class="checkbox" type="checkbox"> Team review meeting at 3.00 PM </label>				</div>				<i class="remove mdi mdi-close-circle-outline"></i>			</li>			<li>				<div class="form-check">					<label class="form-check-label">						<input class="checkbox" type="checkbox"> Prepare for presentation </label>				</div>				<i class="remove mdi mdi-close-circle-outline"></i>			</li>			<li>				<div class="form-check">					<label class="form-check-label">						<input class="checkbox" type="checkbox"> Resolve all the low priority tickets due today </label>				</div>				<i class="remove mdi mdi-close-circle-outline"></i>			</li>			<li class="completed">				<div class="form-check">					<label class="form-check-label">						<input class="checkbox" type="checkbox" checked> Schedule meeting for next week </label>				</div>				<i class="remove mdi mdi-close-circle-outline"></i>			</li>			<li class="completed">				<div class="form-check">					<label class="form-check-label">						<input class="checkbox" type="checkbox" checked> Project review </label>				</div>				<i class="remove mdi mdi-close-circle-outline"></i>			</li>		</ul>	</div>	<div class="events py-4 border-bottom px-3">		<div class="wrapper d-flex mb-2">			<i class="mdi mdi-circle-outline text-primary mr-2"></i>			<span>Feb 11 2018</span>		</div>		<p class="mb-0 font-weight-thin text-gray">Creating component page</p>		<p class="text-gray mb-0">build a js based app</p>	</div>	<div class="events pt-4 px-3">		<div class="wrapper d-flex mb-2">			<i class="mdi mdi-circle-outline text-primary mr-2"></i>			<span>Feb 7 2018</span>		</div>		<p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>		<p class="text-gray mb-0 ">Call Sarah Graves</p>	</div></div><!-- To do section tab ends --><div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">	<div class="d-flex align-items-center justify-content-between border-bottom">		<p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>		<small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>	</div>	<ul class="chat-list">		<li class="list active">			<div class="profile">				<img src="																								<?php echo base_url( '/assets/layout/' ) . 'images/faces/face1.jpg';?>" alt="image">				<span class="online"></span>			</div>			<div class="info">				<p>Thomas Douglas</p>				<p>Available</p>			</div>			<small class="text-muted my-auto">19 min</small>		</li>		<li class="list">			<div class="profile">				<img src="																									<?php echo base_url( '/assets/layout/' ) . 'images/faces/face2.jpg';?>" alt="image">				<span class="offline"></span>			</div>			<div class="info">				<div class="wrapper d-flex">					<p>Catherine</p>				</div>				<p>Away</p>			</div>			<div class="badge badge-success badge-pill my-auto mx-2">4</div>			<small class="text-muted my-auto">23 min</small>		</li>		<li class="list">			<div class="profile">				<img src="																										<?php echo base_url( '/assets/layout/' ) . 'images/faces/face3.jpg';?>" alt="image">				<span class="online"></span>			</div>			<div class="info">				<p>Daniel Russell</p>				<p>Available</p>			</div>			<small class="text-muted my-auto">14 min</small>		</li>		<li class="list">			<div class="profile">				<img src="																											<?php echo base_url( '/assets/layout/' ) . 'images/faces/face4.jpg';?>" alt="image">				<span class="offline"></span>			</div>			<div class="info">				<p>James Richardson</p>				<p>Away</p>			</div>			<small class="text-muted my-auto">2 min</small>		</li>		<li class="list">			<div class="profile">				<img src="																												<?php echo base_url( '/assets/layout/' ) . 'images/faces/face5.jpg';?>" alt="image">				<span class="online"></span>			</div>			<div class="info">				<p>Madeline Kennedy</p>				<p>Available</p>			</div>			<small class="text-muted my-auto">5 min</small>		</li>		<li class="list">			<div class="profile">				<img src="																													<?php echo base_url( '/assets/layout/' ) . 'images/faces/face6.jpg';?>" alt="image">				<span class="online"></span>			</div>			<div class="info">				<p>Sarah Graves</p>				<p>Available</p>			</div>			<small class="text-muted my-auto">47 min</small>		</li>	</ul></div><!-- chat tab ends -->
					</div>
				</div>