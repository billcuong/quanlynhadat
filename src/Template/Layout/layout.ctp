<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="img/menu/icon.ico" />
<title><?php echo 'Hệ thống quản lý Email'?></title>
    <?= $this->element('includeStyle') ?>
</head>
<body class="hold-transition sidebar-mini skin-blue">
	<div class="wrapper">
		<header class="main-header">
			<a href="index.html" class="logo"> </a>
			<!-- Header Group left -->
			<nav class="navbar navabar-default navbar-static-top"
				role="navigation">
				<a href="#" class="sidebar-toggle" data-toggle="push-menu"
					role="button"> <span class="sr-only">Toggle navigation</span>
				</a>
				<!-- Start notify-->
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown messages-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-envelope-o"></i> <span class="label label-success">4</span>
							</a>
							<ul class="dropdown-menu">
								<li class="header">Bạn có 4 tin nhắn</li>
								<li class="footer"><a href="#">Xem tất cả</a></li>
							</ul>
						</li>
						<li class="dropdown notifications-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
								<i class="fa fa-bell-o"></i> <span class="label label-warning">10</span>
							</a>
							<ul class="dropdown-menu">
								<li class="header">Bạn có 10 thông báo</li>
								<li class="footer"><a href="#">Xem tất cả</a></li>
							</ul>
						</li>
						<li class="dropdown tasks-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
							<i class="fa fa-flag-o"></i> <span class="label label-danger">9</span>
						</a>
							<ul class="dropdown-menu">
								<li class="header">Bạn có 9 task</li>
								<li class="footer"><a href="#">Xem tất cả</a></li>
							</ul>
						</li>
						<li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-user fa-fw"></i>
                              <span class="hidden-xs">Thongnm</span>
                            </a>
                            <ul class="dropdown-menu">
                              <!-- User image -->
                              <li class="user-header">
                                <img src="" class="img-circle" alt="User Image">                
                                <p>
                                  Alexander Pierce - Web Developer
                                  <small>Member since Nov. 2012</small>
                                </p>
                              </li>
                              <!-- Menu Body -->
                              <li class="user-body">
                                <div class="row">
                                  <div class="col-xs-4 text-center">
                                    <a href="#">Followers</a>
                                  </div>
                                  <div class="col-xs-4 text-center">
                                    <a href="#">Sales</a>
                                  </div>
                                  <div class="col-xs-4 text-center">
                                    <a href="#">Friends</a>
                                  </div>
                                </div>
                                <!-- /.row -->
                              </li>
                              <!-- Menu Footer-->
                              <li class="user-footer">
                                <div class="pull-left">
                                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                              </li>
                            </ul>
                          </li>
					</ul>
				</div>
			</nav>
		</header>
		<aside class="main-sidebar">
			<section class="sidebar">
				<!-- search form -->
				<form action="#" method="get" class="sidebar-form">
					<div class="input-group">
						<input type="text" name="q" class="form-control"
							placeholder="Search everything"> <span class="input-group-btn">
							<button type="submit" name="search" id="search-btn"
								class="btn btn-flat">
								<i class="fa fa-search"></i>
							</button>
						</span>
					</div>
				</form>
				<?= $this->Element('menuleft')	?>  
			</section>
		</aside>
		<div class="content-wrapper">
        	<?= $this->Flash->render() ?>
     	 	<?= $this->fetch('content') ?>
      	</div>

		<footer class="main-footer"> </footer>
	</div>
	<?= $this->element('includeScripts') ?>
</body>
</html>