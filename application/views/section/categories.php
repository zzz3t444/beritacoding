<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/categoies.css'); ?>">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    <div class="grid items-center gap-8 lg:grid md:grid sm:grid sm:gap-8 sm:items-center md:gap-8 md:items-center xl:flex  lg:items-center lg:gap-8 xl:gap-8 justify-center relative -mt-[1700px] mb-20">
        <div title="for-left">
            <h1 data-aos="fade-down-right" class="font-bold dm-sans text-5xl text-neutral-200">Top <br>
                Categories</h1>
            <div data-aos="flip-right" data-aos-duration="9000" class="w-[530px] h-60 bg-gradient-to-r from-[#101443] to-[#212a82] rounded-3xl mt-24">
                <!-- isi -->
            </div>
            <div class="flex items-center mt-8 gap-8">
                <ul data-aos="flip-right" data-aos-duration="1500" class="w-[250px] h-40 bg-[#14a8b9] rounded-3xl"></ul>
                <ul data-aos="flip-left" data-aos-duration="1100" class="w-[250px] h-40 bg-[#2aa845] rounded-3xl"></ul>
            </div>
        </div>
        <div title="for-right">
            <div class="flex items-center gap-8">
                <ul data-aos="flip-left"  data-aos-duration="7000" class="w-[250px] h-40 bg-[#e79a1c] rounded-3xl"></ul>
                <ul data-aos="flip-right"  data-aos-duration="1200" class="w-[250px] h-40 bg-gradient-to-r from-[#740e31] to-[#e92467] rounded-3xl"></ul>
            </div>
            <div data-aos="flip-left" data-aos-duration="1200" class="h-[440px] w-[530px] bg-gradient-to-r from-[#761b13] to-[#ed3828] mt-8 rounded-3xl"></div>
        </div>
    </div>
    <script>
        AOS.init();
    </script>
</body>

</html>