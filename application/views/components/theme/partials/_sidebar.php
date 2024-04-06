<nav class="sidebar">
	<div class="sidebar-header">
		<a href="#" class="sidebar-brand">
			HRMS<span>Panel</span>
		</a>
		<div class="sidebar-toggler not-active">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<div class="sidebar-body">
		<ul class="nav">
			<li class="nav-item nav-category">Employee</li>
			<li class="nav-item <?= (explode(base_url(), current_url())[1] == "dashboard") ? "active" : "" ?>">
				<a href="<?= base_url("dashboard") ?>" class="nav-link">
					<i class="link-icon" data-feather="home"></i>
					<span class="link-title">Dashboard</span>
				</a>
			</li>
			<li class="nav-item <?= (explode(base_url(), current_url())[1] == "attendance") ? "active" : "" ?>">
				<a href="<?= base_url("attendance") ?>" class="nav-link">
					<i class="link-icon" data-feather="calendar"></i>
					<span class="link-title">Attendance & Leaves</span>
				</a>
			</li>
			<li class="nav-item <?= (explode(base_url(), current_url())[1] == "requests") ? "active" : "" ?>">
				<a href="<?= base_url("requests") ?>" class="nav-link">
					<i class="link-icon" data-feather="navigation"></i>
					<span class="link-title">Requests</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="collapse" href="#salaryPayroll" role="button" aria-expanded="false" aria-controls="salaryPayroll">
					<i class="link-icon" data-feather="credit-card"></i>
					<span class="link-title">Payroll</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="salaryPayroll">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url("salary-slips") ?>pages/ui-components/accordion" class="nav-link">Salary Slips</a>
						</li>
					</ul>
				</div>
			</li>

			<li class="nav-item nav-category">Admin</li>
			<li class="nav-item <?= (explode(base_url(), current_url())[1] == "dashboard") ? "active" : "" ?>">
				<a href="<?= base_url("dashboard") ?>" class="nav-link">
					<i class="link-icon" data-feather="home"></i>
					<span class="link-title">Dashboard</span>
				</a>
			</li>
			<li class="nav-item <?= (str_contains(explode(base_url(), current_url())[1], "employee-management")) ? "active" : "" ?>">
				<a class="nav-link" data-bs-toggle="collapse" href="#employeesAll" role="button" aria-expanded="false" aria-controls="employeesAll">
					<i class="link-icon" data-feather="users"></i>
					<span class="link-title">Human Resource</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="employeesAll">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url("employee-management/employees") ?>" class="nav-link <?=(str_contains(explode(base_url(), current_url())[1], "employee-management/employees")) ? "active" : "" ?>">Employees</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url("employee-management/departments") ?>" class="nav-link <?=(str_contains(explode(base_url(), current_url())[1], "employee-management/departments")) ? "active" : "" ?>">Departments</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url("employee-management/designations") ?>" class="nav-link <?=(str_contains(explode(base_url(), current_url())[1], "employee-management/designations")) ? "active" : "" ?>">Designations</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item <?= (str_contains(explode(base_url(), current_url())[1], "requests")) ? "active" : "" ?>">
				<a class="nav-link" data-bs-toggle="collapse" href="#requestAll" role="button" aria-expanded="false" aria-controls="requestAll">
					<i class="link-icon" data-feather="navigation"></i>
					<span class="link-title">Requests</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="requestAll">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url("requests") ?>" class="nav-link <?= (explode(base_url(), current_url())[1] == "requests") ? "active" : "" ?>">All Requests</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url("requests/new") ?>pages/ui-components/accordion" class="nav-link">New Request</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url("requests/pending") ?>pages/ui-components/alerts" class="nav-link">Pending Approvals</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url("requests/trash") ?>pages/ui-components/alerts" class="nav-link">Trash</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item <?= (str_contains(explode(base_url(), current_url())[1], "payroll")) ? "active" : "" ?>">
				<a class="nav-link" data-bs-toggle="collapse" href="#adminPayroll" role="button" aria-expanded="false" aria-controls="adminPayroll">
					<i class="link-icon" data-feather="credit-card"></i>
					<span class="link-title">Payroll</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="adminPayroll">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url("payroll/new") ?>" class="nav-link">Run New Payroll</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url("payroll/payroll-history") ?>pages/ui-components/alerts" class="nav-link">Payroll History</a>
						</li>
					</ul>
				</div>
			</li>

			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="collapse" href="#generalAdminOption" role="button" aria-expanded="false" aria-controls="generalAdminOption">
					<i class="link-icon" data-feather="box"></i>
					<span class="link-title">General</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="generalAdminOption">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url("") ?>pages/ui-components/accordion" class="nav-link">Attendance</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url("") ?>pages/ui-components/alerts" class="nav-link">Alerts</a>
						</li>
					</ul>
				</div>
			</li>

			<li class="nav-item nav-category">Organization</li>
			<li class="nav-item <?= (str_contains(explode(base_url(), current_url())[1], "settings/app-settings")) ? "active" : "" ?>">
				<a href="<?= base_url("settings/app-settings/home") ?>" class="nav-link">
					<i class="link-icon" data-feather="settings"></i>
					<span class="link-title">Application Settings</span>
				</a>
			</li>

			<li class="nav-item nav-category">Applications</li>
			<li class="nav-item d-none">
				<a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
					<i class="link-icon" data-feather="mail"></i>
					<span class="link-title">Email</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="emails">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url("") ?>mail/inbox" class="nav-link">Inbox</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url("") ?>mail/compose" class="nav-link">Compose</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item d-none">
				<a href="<?= base_url("chat") ?>" class="nav-link">
					<i class="link-icon" data-feather="message-square"></i>
					<span class="link-title">Chat</span>
				</a>
			</li>
			<li class="nav-item <?= (explode(base_url(), current_url())[1] == "calendar") ? "active" : "" ?>">
				<a href="<?= base_url("calendar") ?>" class="nav-link">
					<i class="link-icon" data-feather="calendar"></i>
					<span class="link-title">Calendar</span>
				</a>
			</li>



			<li class="nav-item nav-category">Account</li>
			<li class="nav-item">
				<a href="https://www.nobleui.com/html/documentation/docs" target="_blank" class="nav-link">
					<i class="link-icon" data-feather="hash"></i>
					<span class="link-title">Documentation</span>
				</a>
			</li>
		</ul>
	</div>
</nav>
