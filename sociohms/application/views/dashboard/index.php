<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('components/_head') ?>
	<?php $this->load->view('components/_common_css') ?>
	<title><?= $page['title'] ?></title>

	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>

<body>
	<?php $this->load->view('components/_common_nav') ?>
	<main>
		<section class="py-4">
			<div class="container">
				<?php $this->load->view('components/dashboard/_page_title', $data = ["breadcrumb" => ['Home' => base_url(), 'Menus' => 'current']]) ?>
				<?php if (isset($_SESSION['success'])) : ?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<?php echo $this->session->flashdata('success'); ?>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				<?php endif ?>
				<?php if (isset($_SESSION['failed'])) : ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<?php echo $this->session->flashdata('failed'); ?>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				<?php endif ?>
				<div class="row m-0">
					<div class="col-xl-8 col-lg-7 col-md-6 col-12">
						<div class="row">
							<?php foreach ($categories as $type) : ?>
								<div class="col-md-4 col-sm-6 col-12">
									<div class="card mb-3">
										<div class="card-body">
											<h3 class="mb-3"><?= $type['cat_title'] ?></h3>
											<div class="d-flex gap-2">
												<a href="<?= base_url("menu/category/" . $type['id'] . "/menu-items") ?>" class="btn btn-primary">
													Details<i class="fa-solid fa-arrow-right icon icon-right"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach ?>
						</div>
					</div>
					<div class="col-xl-4 col-lg-5 col-md-6 col-12">
						<h2>Add New Menu Type</h2>
						<?= form_open(base_url('api-category/new')) ?>
						<div class="mb-3">
							<label for="inputUsername" class="form-label">Menu Type Title</label>
							<input type="text" class="form-control" name="category[title]" placeholder="" id="inputUsername">
						</div>
						<div class="mb-3">
							<label for="inputUsername" class="form-label">Menu Type Description</label>
							<textarea class="form-control" name="category[description]" id="summernote" cols="30" rows="3" placeholder=""></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
						<button type="reset" class="btn btn-secondary">Reset</button>
						<script>
							$(document).ready(function() {
								$('#summernote').summernote({
									toolbar: [
										// [groupName, [list of button]]
										['style', ['bold', 'italic', 'underline', 'clear']],
										['font', ['strikethrough', 'superscript', 'subscript']],
										['fontsize', ['fontsize']],
										['color', ['color']],
										['para', ['ul', 'ol', 'paragraph']],
										['height', ['height']]
									]
								});
							});
						</script>
						</form>
					</div>
				</div>
			</div>
		</section>
	</main>
	<?php $this->load->view('components/_common_js') ?>
</body>

</html>
