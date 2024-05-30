<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head.php'); ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/home.css'); ?>">
</head>

<body class="bg-black">
    <?php $this->load->view('_partials/navbar.php'); ?>

    <div class="relative h-[900px] border-b border-neutral-600 bg-cover p-20" style="background-image: url('https://wallpapercave.com/wp/wp11089675.jpg');">
        <div class="absolute inset-0 bg-black opacity-70"></div>
        <div class="relative mt-32 z-10">
            <h1 data-aos="zoom-in" data-aos-duration="900" class="text-8xl dm-sans text-neutral-200 text-center tracking-tight font-bold max-w-2xl mx-auto">Welcome to Sebelah <span class="text-red-500">Layar</span></h1>
            <p data-aos="zoom-in" data-aos-duration="2000" class="text-center max-w-4xl mx-auto text-lg mt-3 archivo text-neutral-200">Next to the screen is a website that reveals a movie that has been released and aired in this world, even we collect a lot of information about movie synopsis, to information on how many viewers like a movie.</p>
            <div class="flex items-center justify-center mt-5 gap-2">
                <a data-aos="zoom-in" data-aos-duration="2400" class="flex justify-center" href="">
                    <button class="px-5 py-2 text-neutral-200 archivo text-sm rounded-full hover:scale-95 duration-300 hover:bg-red-600 bg-red-500">read More</button>
                </a>
                <a data-aos="zoom-in" data-aos-duration="3000" href="<?= site_url('auth/login') ?>">
                    <button class="border px-7 py-2 text-neutral-200 rounded-full text-sm archivo hover:scale-95 duration-300 border-neutral-200">Login</button>
                </a>
            </div>
            <p data-aos="zoom-in" data-aos-duration="3000" class="text-center text-red-500 mt-10 text-sm font-normal">telah di percaya banyak orang</p>
        </div>
    </div>

    <!-- Reviews List -->
    <div>
        <h1 class="text-neutral-200 dm-sans font-semibold text-3xl mt-28 text-center">Reviews And Comment</h1>
        <p class="text-neutral-300 mt-4 text-center max-w-lg mx-auto archivo">give opinions. any comments as well as suggestions and criticism, we are very receptive to it for our change</p>
        <div class="flex justify-center">
            <div id="reviewsList" class="carousel-container-automatic flex gap-12 mt-24 rounded-3xl"></div>
        </div>
    </div>

    <section>
        <div class="flex items-center mt-32 bg-neutral-950 border-b border-t border-neutral-900 p-20 justify-center gap-20">
            <div>
                <h1 class="text-4xl font-semibold dm-sans text-start text-neutral-200 leading-tight">students of <br>
                 SMK MUHAMMADYAH 1 YOGYAKARTA</h1>
                <p class="max-w-xl text-neutral-200 text-lg mt-6 archivo text-start leading-10">I am a student of SMK MUHAMMADYAH 1 YOGYAKARTA who majors in Software Engineering. I really like majoring in Software Engineering because the digital world is very broad.</p>
            </div>
            <div><img src="https://res.cloudinary.com/ddy7p8yrj/image/upload/v1717001528/pf2frcn8tujynmvxqrho.png" width="550px" alt=""></div>
        </div>
    </section>

    <section title="people-create-project">
        <div class="flex items-center justify-center mt-10 gap-16 p-20">
            <div><img src="https://res.cloudinary.com/ddy7p8yrj/image/upload/v1716995476/r2eubcpjtbmlhjv0g4bp.png" width="500px" alt=""></div>
            <div>
                <h1 class="text-5xl text-neutral-200 font-semibold dm-sans">Hi, im Ronald Alexander</h1>
                <p class="max-w-2xl text-neutral-200 text-lg mt-6 archivo text-start leading-10">Hello! I'm Ronald Alexander, the creator of Sebelah Layar, a website dedicated to film synopses. My passion for cinema and storytelling inspired me to build a platform where movie enthusiasts can discover and explore the essence of films. Sebelah Layar is designed to provide concise and engaging summaries that capture the heart of each movie, making it easier for viewers to decide what to watch next.</p>
            </div>
        </div>
    </section>

    <section title="content-for-open-source">
        <div class="flex items-center gap-10 p-32 border-b border-t bg-neutral-950 border-neutral-900 justify-center mt-12">
            <div>
                <h1 class=" text-5xl text-neutral-200 font-semibold dm-sans">Movie Synopsis website</h1>
                <p class="max-w-2xl text-neutral-200 text-lg mt-6 archivo text-start leading-10">This website is officially open and can be used by anyone. we provide many features for describing or providing movie synopsis.</p>
            </div>
            <div><img src="https://res.cloudinary.com/ddy7p8yrj/image/upload/v1716996671/sgjxts6nqa9ag67kgbck.png" width="700px" alt=""></div>
        </div>
    </section>

    <section title="support-people-programmer">
        <div class="flex items-center justify-center mt-10 gap-20">
            <div class="flex items-center">
                <img src="https://avatars.githubusercontent.com/u/113794999?v=4" class="border rounded-full relative border-neutral-800" width="400px" alt="">
                <img src="https://avatars.githubusercontent.com/u/100127440?v=4" class="border rounded-full -ml-40 mt-60 border-neutral-800" width="400px" alt="">
            </div>
            <div>
                <h1 class="text-neutral-200 dm-sans font-semibold text-5xl mt-28 text-start leading-tight">participants Contributions to <br>
                 this website</h1>
                <p class="max-w-2xl text-neutral-200 text-lg mt-6 archivo text-start leading-10">This website was created with great collaboration in terms of website layout design to database needs.
                    we invited <span class="text-red-500">@z3t444</span> to provide website design inspiration. and we invited <span class="text-red-500">@dzakyabdurhmn</span> to determine a data relationship for this website. we are very grateful to these contributors.</p>
            </div>
        </div>
    </section>
<!-- 
    <section title="custom-section-import">
        <div class="relative" title="for-carousel-categories">
            <h1 class="text-center text-5xl font-bold dm-sans mt-52 text-neutral-200">See Categories</h1>
            <p class="text-center mt-5 archivo text-sm text-neutral-300">You can find our recommended Categories in this section. try to find what you want.</p>
            <div class="relative flex justify-center mt-14 max-w-[1700px] mx-auto">
                <?php $this->load->view('section/categoriescarousel.php'); ?>
            </div>
        </div>
        <div title="for-product-items">
            <?php $this->load->view('home_movie.php'); ?> 
        </div>
    </section> -->

    <section class="relative" title="for-faq-import-components">
    <?php $this->load->view('section/faq.php'); ?> 
    </section>

    <div title="for-form-reviews">
        <div class="text-neutral-200 relative">
            <div class="mt-[100px]">
                <h1 class="text-3xl dm-sans font-semibold mt-32 text-center">Send your Opini!</h1>
                <p class="max-w-xl text-center archivo text-neutral-400 mt-3 mx-auto">Any opinions, inputs, conclusions, suggestions, and criticisms will be very influential for us in developing this website.</p>
            </div>
            <div class="xl:flex gap-10 grid items-center justify-center mt-16">
                <section class="w-full max-w-3xl mx-auto xl:mx-0 p-5 glassmorphism rounded-3xl shadow-md">
                    <h2 class="text-2xl tracking-tight font-bold mb-6 dm-sans">Review Film</h2>
                    <form id="reviewForm" class="mb-6" autocomplete="off">
                        <div class="mb-4">
                            <label for="name" class="block text-gray-200 dm-sans">Nama:</label>
                            <input type="text" id="name" class="w-full text-neutral-300 p-3 text-sm rounded-lg mt-2 border-b border-neutral-800 bg-transparent focus:outline-none" autocomplete="off" required placeholder="Your Name" />
                        </div>
                        <div class="mb-4">
                            <label for="review" class="block text-gray-200 dm-sans">Komentar:</label>
                            <input type="text" id="review" class="w-full text-neutral-300 p-2 text-sm h-32 mt-2 border-b border-neutral-800 bg-transparent rounded-2xl focus:outline-none" autocomplete="off" required placeholder="masukan sebanyak 40 kata, saran dan penilaian" />
                            <div id="word-count" class="word-count">0/40 words</div>
                        </div>
                        <div class="flex justify-center">
                            <button type="submit" class="bg-red-500 hover:bg-red-600 hover:scale-95 duration-300 archivo text-white px-10 p-2 mt-10 rounded-full">
                                Kirim
                            </button>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
    <?php $this->load->view('_partials/footer.php'); ?>
</body>
<script>
    AOS.init();
</script>
<script>
    function displayReviews() {
        const reviews = JSON.parse(localStorage.getItem("reviews")) || [];
        const reviewsList = document.getElementById("reviewsList");
        reviewsList.innerHTML = "";
        reviews.forEach((review) => {
            const reviewElement = document.createElement("div");
            reviewElement.classList.add(
                "carousel-item-automatic",
                "relative",
                // nek di absolute dadi ketumpuk anjir, kwere
                "p-8",
                "rounded-xl",
                "hover:bg-none",
                "bg-neutral-950",
                "hover:border",
                "hover:border-neutral-800",
                "hover:scale-95",
                "duration-300",
                "transition-all",
                "hover:shadow-2xl",
                "hover:shadow-neutral-600",
                "border",
                "border-neutral-950",
                "shadow-3xl"
            );
            reviewElement.innerHTML = `
            <h3 class="text-xl dm-sans text-neutral-200 font-semibold">${review.name}</h3>
            <p class="max-w-sm leading-loose mt-2 text-sm archivo text-neutral-400">${review.text}</p>
        `;
            reviewsList.appendChild(reviewElement);
        });
    }

    document
        .getElementById("reviewForm")
        .addEventListener("submit", function(event) {
            event.preventDefault();
            const name = document.getElementById("name").value;
            const review = document.getElementById("review").value;
            const reviews = JSON.parse(localStorage.getItem("reviews")) || [];
            reviews.push({
                name: name,
                text: review,
            });

            localStorage.setItem("reviews", JSON.stringify(reviews));
            displayReviews();
            document.getElementById("reviewForm").reset();
        });

    window.addEventListener("load", displayReviews);

    function autoScrollCarousel() {
        const reviewsList = document.getElementById("reviewsList");
        const scrollAmount = 300;
        let scrollPosition = 0;
        setInterval(() => {
            scrollPosition += scrollAmount;

            if (scrollPosition >= reviewsList.scrollWidth - reviewsList.clientWidth) {
                scrollPosition = 0;
            }
            reviewsList.scrollTo({
                left: scrollPosition,
                behavior: "smooth",
            });
        }, 2000);
    }

    window.addEventListener("load", autoScrollCarousel);


    // for limit text //
    const textarea = document.getElementById("review");
    const wordCountDisplay = document.getElementById("word-count");
    const maxWords = 40;
    textarea.addEventListener("input", () => {
        const words = textarea.value.trim().split(/\s+/);
        const wordCount = words.filter((word) => word.length > 0).length;

        if (wordCount > maxWords) {
            const trimmedWords = words.slice(0, maxWords);
            textarea.value = trimmedWords.join(" ");
        }

        wordCountDisplay.textContent = `${Math.min(
					wordCount,
					maxWords
				)}/${maxWords} words`;
    });
</script>

</html>