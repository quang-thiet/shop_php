<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
		<img src="<?= ADMIN_ASSET ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
			class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">AdminLTE 3</span>
	</a>
	<?php
			if (isset($_SESSION['email'])) {
				extract($_SESSION['email']);
			?>
			
	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= ADMIN_ASSET ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block"><?= $name_user ?></a>
			</div>
		</div>
		<?php } ?>
		<!-- SidebarSearch Form -->
		<div class="form-inline">
			<div class="input-group" data-widget="sidebar-search">
				<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
				<div class="input-group-append">
					<button class="btn btn-sidebar">
						<i class="fas fa-search fa-fw"></i>
					</button>
				</div>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
				<li class="nav-item ">
					<!-- menu-open -->
					<a href="<?= ADMIN_URL ?>" class="nav-link ">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="fa fa-list-ol" aria-hidden="true"></i>
						<p>
							Category
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= ADMIN_URL . 'danh-muc' ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Danh sách</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= ADMIN_URL . 'danh-muc/tao-moi' ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Tạo mới</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="fas fa-hamburger"></i>
						<p>
							Food
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= ADMIN_URL . 'food' ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Danh sách</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/layout/top-nav-sidebar.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Tạo mới</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
					<i class="fas fa-comments"></i>
						<p>
							Feedback
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= ADMIN_URL . 'feedback' ?>" class="nav-link">
							<i class="fas fa-comments"></i>
								<p>Danh sách</p>
							</a>
						</li>
						


					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="fas fa-users"></i>
						<p>
							User
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= ADMIN_URL . 'user' ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Danh sách</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="fas fa-money-bill"></i>
						<p>
							Bill
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= ADMIN_URL . 'bill' ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Danh sách</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="fas fa-comment-alt"></i>
						<p>
							Comment
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= ADMIN_URL . 'list-comment' ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Danh sách</p>
							</a>
						</li>
					</ul>
				</li>
                 <li class="nav-item">
		 			<a href="#" class="nav-link">
						<i class="fas fa-comment-alt"></i>
						<p>
							Option
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= ADMIN_URL . 'option' ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Danh sách</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="fas fa-hamburger"></i>
						<p>
							Banner
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= ADMIN_URL . 'banner' ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Danh sách</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= ADMIN_URL . 'banner/add-banner'?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Tạo mới</p>
							</a>
						</li>
					</ul>
				</li>

			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
