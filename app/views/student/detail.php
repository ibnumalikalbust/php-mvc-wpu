	<header class="my-3">
		<div class="container">
			<h3 class="p-0 m-0">Student Detail</h3>
		</div>
	</header>
	<main class="my-3">
		<div class="container">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title mb-4"><?= $data['student']['name']; ?></h5>
					<p class="card-text m-0">NRP : <?= $data['student']['nrp']; ?></p>
					<p class="card-text m-0">Email : <?= $data['student']['email']; ?></p>
					<p class="card-text m-0">Major : <?= $data['student']['major']; ?></p>
					<a class="card-link mt-3" href="<?= BASEURL; ?>/student">back</a>
				</div>
			</div>
		</div>
	</main>