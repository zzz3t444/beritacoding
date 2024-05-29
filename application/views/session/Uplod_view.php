<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<div class="container-fluid mt-10">
    <button class=" flex items-center rounded-full px-8 text-neutral-200 bg-red-500 p-2">
        <i class="fas fa-plus fa-sm"></i>
        gambar
    </button>

    <table class="table table-bordered">
        <th>JUDUL</th>
        <th>TANGGAL PEMBUATTAN</th>
    </table>

    <?php
    foreach ($movie as $mv) : ?>

        <tr>
            <td><?php echo $mv->title ?></td>
            <td><?php echo $mv->created_at ?></td>
        </tr>
    <?php endforeach; ?>
</div>


<body>
    <div class="flex justify-center mt-10 relative">
        <div class="flex gap-5 flex-wrap">
            <?php foreach ($movie as $mv) : ?>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden m-4 w-72">
                    <img src="<?php echo base_url() . '/upload/gambar/' . $mv->gambar ?>" alt="..." class="w-full h-96 object-cover">
                    <div class="p-4">
                        <h5 class="text-xl font-semibold mb-2"><?php echo $mv->title ?></h5>
                        <div class="mb-3">
                            <small class="mb-7"><?php echo $mv->content ?></small><br>
                        </div>
                        <span class="badge badge-info  bg-cyan-600 text-white px-4 py-1 rounded"><?php echo $mv->slug ?> |</span>
                        <span class="badge badge-info bg-cyan-600 text-white px-2 py-1 rounded"><?php echo $mv->created_at ?>+</span>
                        <a href="#" class="inline-block bg-blue-500 text-white px-4 py-1 rounded hover:bg-blue-700 mt-2">View More</a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>

</html>