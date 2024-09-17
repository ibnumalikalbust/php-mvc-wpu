	<header class="my-3">
		<div class="container">
			<h3 class="p-0 m-0">Student List</h3>
		</div>
	</header>
	<main class="my-3">
		<div class="container">
			<ul class="list-group">
				<?php foreach ($data['students'] as $student) : ?>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						<span><?= $student['name']; ?></span>
						<a href="<?= BASEURL; ?>/student/detail/<?= $student['id']; ?>" class="badge text-bg-primary rounded-pill text-decoration-none">detail</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</main>