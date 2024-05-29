<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="/assets/css/main.css">
<script src="https://cdn.tailwindcss.com"></script>
<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>

	<?php $this->load->view('_partials/navbar.php'); ?>

	<!-- <movie class="movie">
		<h1 title="for-title-film" class="post-title font-bold text-4xl"><?= $movie->title ? html_escape($movie->title) : "No Title" ?></h1>
		<div title="date" class="post-meta mt-3">
			Published at <?= $movie->created_at ?>
		</div>
		<div title="description" class="post-body mt-3">
			<?= $movie->deskripsi ?>
		</div>
		<div title="content" class="post-body mt-3">
			<?= $movie->content ?>
		</div>
		<div class="post-body mt-3">
			<?= $movie->genre ?>
		</div>
		<div class="post-body mt-3">
			<?= $movie->katagori_umur ?>
		</div>
		<div class="post-body mt-3">
			<?= $movie->casting ?>
		</div>
	</movie> -->

	<div class="container mx-auto p-6">
    <div class="bg-white shadow-lg rounded-lg p-6">
        <h1 title="for-title-film" class="post-title font-bold text-4xl text-center mb-4">
            <?= $movie->title ? html_escape($movie->title) : "No Title" ?>
        </h1>
        <div title="date" class="post-meta text-gray-500 text-sm text-center mb-4">
            Published at <?= $movie->created_at ?>
        </div>
        <div title="description" class="post-body text-lg leading-relaxed mb-6">
            <?= $movie->deskripsi ?>
        </div>
        <div title="content" class="post-body text-base leading-relaxed mb-6">
            <?= $movie->content ?>
        </div>
        <div class="post-body text-base leading-relaxed mb-6">
            <span class="font-semibold">Genre:</span> <?= $movie->genre ?>
        </div>
        <div class="post-body text-base leading-relaxed mb-6">
            <span class="font-semibold">Age Category:</span> <?= $movie->katagori_umur ?>
        </div>
        <div class="post-body text-base leading-relaxed mb-6">
            <span class="font-semibold">Casting:</span> <?= $movie->casting ?>
        </div>
    </div>
</div>

	

	
	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>