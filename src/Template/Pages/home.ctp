<?php 
$this->layout = false;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/menu/icon.ico" /> 
    <title>Trang chủ | <?php echo 'Hệ thống quản lý mail nội bộ'?></title>
    <?= $this->element('include') ?>
</head>
<body class="hold-transition sidebar-mini skin-blue">
	<div class="wrapper">

		<header class="main-header">
			 <a href="index.html" class="logo">
            </a>
            <!-- Header Group left -->
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Start notify-->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Bạn có 4 tin nhắn</li>
                                <li class="footer"><a href="#">Xem tất cả</a></li>
                            </ul>
                        </li>
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Bạn có 10 thông báo</li>
                                <li class="footer"><a href="#">Xem tất cả</a></li>
                            </ul>
                        </li>
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-flag-o"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Bạn có 9 task</li>
                                <li class="footer">
                                    <a href="#">Xem tất cả</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown user user-menu">
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                <img src="img/menu/avatar04.png" class="user-image">
                                <span class="hidden-xs">Minh Thông</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
		</header>

		<aside class="main-sidebar">
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left image">
						<img src="img/menu/avatar5.png" class="img-circle"
							alt="User Image">
					</div>
					<div class="pull-left info">
						<p>Nguyễn Minh Thông</p>
						<i class="fa fa-circle text-success"> Online</i>
					</div>
				</div>
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
			</section>
		</aside>
        <!-- NGUYEN MINH THONG 08081994 -->
        <?= $this->Flash->render() ?>
		<div class="content-wrapper">
     	 	<?= $this->fetch('content') ?>
      	</div>

		<footer class="main-footer"></footer>
	</div>
</body>
</html>