<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <?php $this->load->view('_partials/navbar.php'); ?>

    <div class="container mx-auto mt-10 px-4">
        <h1 class="text-3xl font-bold text-center mb-6">Thank You!</h1>
        <p class="text-lg text-gray-700 text-center">Your message has been sent!</p>
    </div>

    <?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>
