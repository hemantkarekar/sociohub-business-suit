<nav class="sidebar">
	<div class="sidebar-header">
		<a href="#" class="sidebar-brand">
			<img src="<?= base_url('assets/logo.png') ?>" alt="" width="160">
		</a>
		<div class="sidebar-toggler not-active">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<div class="sidebar-body">
		<ul class="nav">
			<li class="nav-item">
				<a href="dashboard.html" class="nav-link">
					<i class="link-icon" data-feather="box"></i>
					<span class="link-title">Dashboard</span>
				</a>
			</li>

			<!-- <li class="nav-item nav-category">Orders & Invoices</li> -->
			<li class="nav-item">
				<a href="dashboard.html" class="nav-link">
					<i class="link-icon" data-feather="shopping-bag"></i>
					<span class="link-title">Orders</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="dashboard.html" class="nav-link">
					<i class="link-icon" data-feather="file"></i>
					<span class="link-title">Invoices</span>
				</a>
			</li>
			
			<!-- <li class="nav-item nav-category">Products</li> -->
			<li class="nav-item">
			<a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
					<i class="link-icon" data-feather="shopping-bag"></i>
					<span class="link-title">Products</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="emails">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="pages/email/inbox.html" class="nav-link">All Products</a>
						</li>
						<li class="nav-item">
							<a href="pages/email/read.html" class="nav-link">Inventory</a>
						</li>
						<li class="nav-item">
							<a href="pages/email/read.html" class="nav-link">Categories</a>
						</li>
						<li class="nav-item">
							<a href="pages/email/read.html" class="nav-link">Brands</a>
						</li>
						<li class="nav-item">
							<a href="pages/email/read.html" class="nav-link">Inventory</a>
						</li>
					</ul>
			</li>
			<li class="nav-item">
				<a href="dashboard.html" class="nav-link">
					<i class="link-icon" data-feather="crosshair"></i>
					<span class="link-title">Customers</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="dashboard.html" class="nav-link">
					<i class="link-icon" data-feather="pie-chart"></i>
					<span class="link-title">Analytics</span>
				</a>
			</li>
			
			<li class="nav-item nav-category">Sales Channels</li>
			<li class="nav-item">
				<a href="dashboard.html" class="nav-link">
					<i class="link-icon" data-feather="crosshair"></i>
					<span class="link-title">Marketing</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="dashboard.html" class="nav-link">
					<i class="link-icon" data-feather="percent"></i>
					<span class="link-title">Discounts</span>
				</a>
			</li>


			<li class="nav-item nav-category">Apps</li>
			<li class="nav-item">
				<a href="dashboard.html" class="nav-link">
					<i class="link-icon" data-feather="percent"></i>
					<span class="link-title">Discounts</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="dashboard.html" class="nav-link">
					<i class="link-icon" data-feather="settings"></i>
					<span class="link-title">Settings</span>
				</a>
			</li>
			<!-- <li class="nav-item">
				<a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
					<i class="link-icon" data-feather="shopping-bag"></i>
					<span class="link-title">Orders Management</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="emails">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="pages/email/inbox.html" class="nav-link">All Orders</a>
						</li>
						<li class="nav-item">
							<a href="pages/email/read.html" class="nav-link">Menu Items</a>
						</li>
					</ul>
				</div>
			</li> -->


			<li class="nav-item nav-category">Docs</li>
			<li class="nav-item">
				<a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
					<i class="link-icon" data-feather="hash"></i>
					<span class="link-title">Documentation</span>
				</a>
			</li>
		</ul>
	</div>
</nav>