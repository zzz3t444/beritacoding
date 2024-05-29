<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="<?= base_url('assets/css/dashboard.css') ?>" />
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="content">
			<h1 class="dm-sans text-3xl font-bold">Write new Article</h1>

			<form action="" method="POST">
				<label for="title " class="dm-sans">Title*</label>
				<input type="text" class="archivo border border-black p-2 " name="title" placeholder="Judul artikel" required title="Wajib tulis judul artikel" />

				
				<label for="deskripsi " class="dm-sans">deskripsi*</label>
				<input type="text" class="archivo border border-black p-2 " name="deskripsi" placeholder="Judul artikel" required deskripsi="Wajib Deskripsi singkat" />

				<label for="content" class="dm-sans">Konten</label>
				<textarea name="content" class="border border-black p-2" cols="30" rows="10" placeholder="Tuliskan isi pikiranmu..."></textarea>

				<input type="number" name="" id="">

				<label for="genre " class="dm-sans">Genre*</label>
				<input type="text" class="archivo border border-black p-2 " name="genre" placeholder="Judul artikel" required genre="masukkan genre filmnya" />

				<label for="katagori_umur " class="dm-sans">katagori_umur*</label>
				<input type="number" class="archivo border border-black p-2 " name="katagori_umur" placeholder="Judul artikel" required katagori_umur="Masukkan minial umur" />

				<label for="casting" class="dm-sans">casting</label>
				<textarea name="casting" class="border border-black p-2" cols="30" rows="10" placeholder="Tuliskan isi pikiranmu..."></textarea>
				<!-- <label action="upload/do_upload" method="post" enctype="multipart/form-data">
					<input type="file" name="userfile" size="20" />
					<br /><br />
					<input class="border border-black p-3 max-w-sm mx-auto" type="submit" value="upload" />
				</label> -->
				<div>
					<button type="submit" name="draft" class="button archivo" value="true">Save to Draft</button>
					<button type="submit" name="draft" class="button archivo button-primary" value="false">Publish</button>
				</div>
			</form>

			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>
</body>

</html>