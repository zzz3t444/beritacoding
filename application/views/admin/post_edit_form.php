<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
	<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('assets/css/dashboard.css') ?>" />
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="content ml-52">
			<h1 class="dm-sans text-3xl font-bold">Edit movie</h1>

			<form action="" method="POST">
				<div class="grid justify-start gap-10 items-center">
					<div>
						<label class="dm-sans" for="title">Title*</label>
						<input type="text" name="title" class="border border-neutral-300 p-2<?= form_error('title') ? 'invalid' : '' ?>" value="<?= form_error('title') ? set_value('title') : $movie->title ?>" required maxlength="128" />
						<div class="invalid-feedback">
							<?= form_error('title') ?>
						</div>
					</div>

					<div>
						<label class="dm-sans" for="deskripsi">deskripsi*</label>
						<input type="text" name="deskripsi" class="border border-neutral-300 p-2<?= form_error('deskripsi') ? 'invalid' : '' ?>" value="<?= form_error('deskripsi') ? set_value('deskripsi') : $movie->deskripsi ?>" required maxlength="128" />
						<div class="invalid-feedback">
							<?= form_error('deskripsi') ?>
						</div>
					</div>

					<div>
						<label class="dm-sans" for="content">Konten</label>
						<?php $content = form_error('content') ? set_value('content') : $movie->content ?>
						<input type="hidden" name="content" value="<?= html_escape($content) ?>">
						<div class="max-w-5xl" id="editor" style="min-height: 200px;"><?= $content ?></div>
					</div>
				</div>

				<div>
					<button type="submit" name="draft" class="button archivo" value="true">Save to Draft</button>
					<button type="submit" name="draft" class="button archivo button-primary" value="false">Publish Update</button>
					<div class="invalid-feedback">
						<?= form_error('draft') ?>
					</div>
				</div>
			</form>

			<?php $this->load->view('admin/_partials/footer.php') ?>
			<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
			<script>
				var quill = new Quill('#editor', {
					theme: 'snow',
					modules: {
						toolbar: [
							[{
								header: [1, 2, 3, 4, 5, 6, false]
							}],
							[{
								font: []
							}],
							["bold", "italic"],
							["link", "blockquote", "code-block", "image"],
							[{
								list: "ordered"
							}, {
								list: "bullet"
							}],
							[{
								script: "sub"
							}, {
								script: "super"
							}],
							[{
								color: []
							}, {
								background: []
							}],
						]
					},
				});
				quill.on('text-change', function(delta, oldDelta, source) {
					document.querySelector("input[name='content']").value = quill.root.innerHTML;
				});
			</script>
		</div>
	</main>
</body>

</html>