<div class="page-content">
	<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
		<div class="d-flex gap-2">
			<div class="nav-item">
				<a href="<?= base_url("posts/all-blogs") ?>" class="nav-link"><i class="link-arrow" data-feather="chevron-left"></i></a>
			</div>
			<div>
				<h4 class="mb-3 mb-md-0">Blog Categories & Tags</h4>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xl-7 col-lg-6 col-12">
			<div class="card grid-margin">
				<div class="card-body">
					<div class="d-flex justify-content-between align-items-baseline mb-2">
						<h6 class="card-title mb-0">New Blog Category</h6>
					</div>
					<div class="">
						<form action="" method="post">
							<div class="row">
								<div class="col-lg-4 col-12">
									<div class="mb-3">
										<input type="text" placeholder="Category Title" class="form-control" id="inputCatName">
									</div>
								</div>
								<div class="col-lg-4 col-12">
									<div class="mb-3">
										<select name="" class="form-select" id="selectCatParent">
											<option value="">Select Parent Category</option>
											<?php for ($i = 0; $i < 20; $i++) : ?>
												<option value="">Select <?= $i ?></option>
											<?php endfor ?>
										</select>
										<script>
											$("#selectCatParent").select2({
												theme: "bootstrap-5",
											});
										</script>
									</div>
								</div>
								<div class="col-lg-auto col-12">
									<button type="submit" class="btn me-2 btn-primary btn-icon-text"><i class="link-arrow btn-icon-prepend" data-feather="save"></i>Create&nbsp;New</button>
									<button type="reset" class="btn btn-outline-secondary">Discard</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="card grid-margin">
				<div class="card-body">
					<div class="d-flex justify-content-between align-items-baseline mb-2">
						<h6 class="card-title mb-0">Blog Categories</h6>
					</div>
					<div class="table-responsive">
						<table class="table table-hover mb-0" id="leadsDataTable">
							<thead>
								<tr>
									<th class="pt-0">#</th>
									<th class="pt-0">Title</th>
									<th class="pt-0">Parent Category</th>
									<th class="pt-0">Blog Count</th>
									<th class="pt-0">Date</th>
								</tr>
							</thead>
							<tbody>
								<?php
								for ($i = 1; $i < 20; $i++) : ?>
									<tr>
										<td><?= $i ?></td>
										<td>Category</td>
										<td>Parent Category</td>
										<td><?= random_int(1, 10) * $i ?></td>
										<td><?= date('Y-m-d') ?></td>
									</tr>
								<?php endfor ?>
							</tbody>
						</table>
						<script>
							new DataTable('#leadsDataTable');
						</script>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-5 col-lg-6 col-12">
			<div class="card grid-margin">
				<div class="card-body">
					<div class="d-flex justify-content-between align-items-baseline mb-2">
						<h6 class="card-title mb-0">New Tag</h6>
					</div>
					<div class="">
						<form action="" method="post">
							<div class="row">
								<div class="col-lg col-12">
									<div class="mb-3">
										<input type="text" placeholder="Tag Name" class="form-control" id="inputCatName">
									</div>
								</div>
								<div class="col-lg-auto col-12">
									<button type="submit" class="btn me-2 btn-primary btn-icon-text"><i class="link-arrow btn-icon-prepend" data-feather="save"></i>Create&nbsp;New</button>
									<button type="reset" class="btn btn-outline-secondary">Discard</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="card grid-margin">
				<div class="card-body">
					<div class="d-flex justify-content-between align-items-baseline mb-2">
						<h6 class="card-title mb-0">Blog Tags</h6>
					</div>
					<div class="table-responsive">
						<table class="table table-hover mb-0" id="blogsTagTable">
							<thead>
								<tr>
									<th class="pt-0">#</th>
									<th class="pt-0">Tag Name</th>
									<th class="pt-0">Blog Count</th>
									<th class="pt-0">Date</th>
								</tr>
							</thead>
							<tbody>
								<?php
								for ($i = 1; $i < 20; $i++) : ?>
									<tr>
										<td><?= $i ?></td>
										<td>Tag Name</td>
										<td><?= random_int(1, 10) * $i ?></td>
										<td><?= date('Y-m-d') ?></td>
									</tr>
								<?php endfor ?>
							</tbody>
						</table>
						<script>
							new DataTable('#blogsTagTable');
						</script>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- row -->
</div>
