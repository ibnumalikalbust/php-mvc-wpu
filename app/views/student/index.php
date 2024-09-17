	<header class="my-3">
		<div class="container d-flex justify-content-between align-items-center">
			<h3 class="p-0 m-0">Student List</h3>
			<button type="button" id="insert-button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">ADD NEW</button>
		</div>
	</header>
	<div class="my-3">
		<div class="container">
			<?php Flasher::useFlash(); ?>
		</div>
	</div>
	<main class="my-3">
		<div class="container">
			<ul class="list-group">
				<?php foreach ($data['students'] as $student) : ?>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						<span><?= $student['name']; ?></span>
						<span>
							<a href="<?= BASEURL; ?>/student/detail/<?= $student['id']; ?>" class="btn btn-sm btn-primary">detail</a>
							<a data-id="<?= $student['id']; ?>" class="btn btn-sm btn-success update-button" data-bs-toggle="modal" data-bs-target="#formModal">update</a>
							<a href="<?= BASEURL; ?>/student/delete/<?= $student['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('delete?');">delete</a>
						</span>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</main>
	<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="formModalLabel">Student Form</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form id="modal-form" action="<?= BASEURL; ?>/student/insert" method="post" autocomplete="off">
				<div class="modal-body">
					<div class="mb-3 d-none">
						<label for="id" class="form-label">ID</label>
						<input type="hidden" class="form-control" id="id" name="id" required>
					</div>
					<div class="mb-3">
						<label for="name" class="form-label">Name</label>
						<input type="text" class="form-control" id="name" name="name" required>
					</div>
					<div class="mb-3">
						<label for="nrp" class="form-label">NRP</label>
						<input type="number" class="form-control" id="nrp" name="nrp" required>
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">Email</label>
						<input type="email" class="form-control" id="email" name="email" required>
					</div>
					<div class="mb-3">
						<label for="major" class="form-label">Major</label>
						<select class="form-select" id="major" name="major">
							<option value="" selected disabled>Please Choose One</option>
							<option value="Informatics Engineering">Informatics Engineering</option>
							<option value="Mechanical Engineering">Mechanical Engineering</option>
							<option value="Industrial Engineering">Industrial Engineering</option>
							<option value="Food Engineering">Food Engineering</option>
							<option value="Planning Engineering">Planning Engineering</option>
							<option value="Environmental Engineering">Environmental Engineering</option>
							<option value="Economic Engineering">Economic Engineering</option>
						</select>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
					<button type="submit" id="submit-button" class="btn btn-primary">SUBMIT</button>
				</div>
			</form>
			</div>
		</div>
	</div>