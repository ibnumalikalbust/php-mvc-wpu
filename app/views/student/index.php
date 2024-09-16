	<header class="my-3">
		<div class="container">
			<h3 class="p-0 m-0">Student List</h3>
		</div>
	</header>
	<main class="my-3">
		<div class="container">
			<?php foreach ($data['students'] as $student) : ?>
				<ul>
					<li><?= $student['name']; ?></li>
					<li><?= $student['nrp']; ?></li>
					<li><?= $student['email']; ?></li>
					<li><?= $student['major']; ?></li>
				</ul>
			<?php endforeach; ?>
		</div>
	</main>