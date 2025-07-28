<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>
</head>
<style>
    [data-carousel-slide-to] {
        background-color: #d1d5db; /* abu-abu untuk indikator non-aktif */
    }

    [data-carousel-slide-to][aria-current="true"] {
        background-color: #127a3d; /* hijau untuk indikator aktif */
    }
</style>
<body>
    <x-header></x-header>

    {{-- Start --}}
    <section id="Home" class="relative min-h-screen pb-36 pt-36 bg-cover bg-center" style="background-image: url('assets/tlaga.jpg');">
        <!-- Set the opacity directly in the gradient colors using rgba or hex with alpha -->
        <div class="absolute inset-0 bg-gradient-to-b" style="background: linear-gradient(to bottom,rgba(35, 208, 231, 0.4), rgba(87, 88, 87, 0.4));"></div>
        <div class="flex items-center justify-center h-full my-[10rem] relative z-10">
            <div class="container mx-auto lg:px-8">
                <div class="mt-5 w-full flex items-center justify-center lg:pl-8">
                    <div class="text-center lg:text-left">
                        <h1 class="text-4xl text-center font-bold text-white md:text-5xl lg:text-6xl">ABOUT</h1>
                        <h1 class="text-4xl text-center font-bold text-white md:text-5xl lg:text-6xl">DESA PRANTEN</h1>
                        <h2 class="mt-10 text-l text-center font-bold text-white md:text-xl lg:text-xl">
                            Desa Pranten terletak di Kecamatan Bawang, Kabupaten Batang, Jawa Tengah, pada
                            koordinat 7°10′32″ Lintang Selatan dan 109°54′7″ Bujur Timur. Desa ini berada di
                            perbatasan dengan Kabupaten Wonosobo dan termasuk dalam kawasan dataran tinggi
                            pegunungan. Secara administratif, Pranten merupakan desa paling ujung selatan
                            Kabupaten Batang.
                        </h2>
                    </div>
                </div>   
            </div>
        </div>
    </section>
    

    <section id="ObjekWisata" class="pt-20 pb-20  px-4 lg:px-8">
        <div class="mb-10 ml-7">
            <h1 class="text-4xl font-bold text-green-400 bg-clip-text" style="-webkit-background-clip: text;">
                Objek Wisata
            </h1>
        </div>

        <div class="container mx-auto px-4">
            <div class="relative w-full mt-6 rounded-2xl overflow-hidden shadow-lg group" id="carousel">
                
                <!-- Carousel inner -->
                <div class="carousel-inner relative w-full h-96">
                <div class="carousel-item absolute inset-0 opacity-100 transition-opacity duration-1000">
                    <img src="/assets/tlaga.jpg" class="w-full h-full object-cover" alt="Slide 1">
                    <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                    <div class="text-center text-white px-4">
                        <h2 class="text-3xl md:text-4xl font-bold">Telaga Mendongan</h2>
                    </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item absolute inset-0 opacity-0 transition-opacity duration-1000">
                    <img src="/assets/logo.png" class="w-full h-full object-cover" alt="Slide 2">
                    <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                    <div class="text-center text-white px-4">
                        <h2 class="text-3xl md:text-4xl font-bold">Logo Desa</h2>
                    </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item absolute inset-0 opacity-0 transition-opacity duration-1000">
                    <img src="/assets/bg1.jpg" class="w-full h-full object-cover" alt="Slide 3">
                    <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                    <div class="text-center text-white px-4">
                        <h2 class="text-3xl md:text-4xl font-bold">Latar Belakang</h2>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Navigasi -->
                <button id="prevSlide" class="absolute left-4 top-1/2 -translate-y-1/2 bg-white bg-opacity-70 text-gray-800 hover:bg-opacity-90 rounded-full p-2 shadow-md transition duration-300 group-hover:opacity-100 opacity-0">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
                </button>
                <button id="nextSlide" class="absolute right-4 top-1/2 -translate-y-1/2 bg-white bg-opacity-70 text-gray-800 hover:bg-opacity-90 rounded-full p-2 shadow-md transition duration-300 group-hover:opacity-100 opacity-0">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
                </button>

            </div>
            </div>

        <script>
                const items = document.querySelectorAll('#carousel .carousel-item');
                const total = items.length;
                let index = 0;
                let interval = setInterval(showNextSlide, 5000); // otomatis setiap 5 detik

                function showSlide(idx) {
                    items.forEach((item, i) => {
                        item.style.opacity = (i === idx) ? '1' : '0';
                    });
                }

                function showNextSlide() {
                    index = (index + 1) % total;
                    showSlide(index);
                }

                function showPrevSlide() {
                    index = (index - 1 + total) % total;
                    showSlide(index);
                }

                document.getElementById('nextSlide').addEventListener('click', () => {
                    showNextSlide();
                    resetInterval();
                });

                document.getElementById('prevSlide').addEventListener('click', () => {
                    showPrevSlide();
                    resetInterval();
                });

                function resetInterval() {
                    clearInterval(interval);
                    interval = setInterval(showNextSlide, 5000);
                }

                // Inisialisasi
                showSlide(index);
            </script>


            {{-- <div class="flex flex-wrap">
                <div id="indicators-carousel" class="relative w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-[32rem]">
                        <!-- Slide 1 -->
                        <div class="duration-700 ease-in-out" data-carousel-item="active">
                            <div class="relative w-full h-full">
                                <img src="/assets/tlaga.jpg" class="block w-full h-full object-cover" alt="Slide 1">
                                <div class="absolute inset-0 bg-black/40"></div>
                                <p class="absolute bottom-5 left-5 text-white text-xl font-semibold z-10">Telogo Mendongan</p>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="duration-700 ease-in-out" data-carousel-item="active">
                            <div class="relative w-full h-full">
                                <img src="/assets/logo.png" class="block w-full h-full object-cover" alt="Slide 2">
                                <div class="absolute inset-0 bg-black/40"></div>
                                <p class="absolute bottom-5 left-5 text-white text-xl font-semibold z-10">Logo Desa</p>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="duration-700 ease-in-out" data-carousel-item="active">
                            <div class="relative w-full h-full">
                                <img src="/assets/bg1.jpg" class="block w-full h-full object-cover" alt="Slide 3">
                                <div class="absolute inset-0 bg-black/40"></div>
                                <p class="absolute bottom-5 left-5 text-white text-xl font-semibold z-10">Pemandangan Desa</p>
                            </div>
                        </div>
                    </div>

                    <!-- Indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    </div>

                    <!-- Controls -->
                    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-2 group-focus:ring-white group-focus:outline-none">
                            <svg class="w-4 h-4 text-black" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-2 group-focus:ring-white group-focus:outline-none">
                            <svg class="w-4 h-4 text-black" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>  
            </div> --}}
        </div>
    </section>

    <section id="WhatWeProvide" class="pt-10 bg-green-400">
        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,256L48,218.7C96,181,192,107,288,80C384,53,480,75,576,112C672,149,768,203,864,224C960,245,1056,235,1152,192C1248,149,1344,75,1392,37.3L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg> --}}
        <div class="w-full h-full bg-gradient-to-b from-[#127a3d] to-[#64f1da] pb-10">
            <div class="container mx-auto pt-16 px-4 lg:px-8">
                <div class="w-full space-y-4 px-6 md:px-8 ">
                    <h1 class="relative text-4xl font-bold inline-block underline-orange mb-10 text-white md:text-5xl lg:text-6xl">What We Provide</h1>
                    <div class="flex flex-wrap justify-between items-center text-center md:text-justify">
                        <div>
                            <a href="#" class="block mb-10 max-w-2xl h-60 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Email Scheduling</h5>
                                <p class="font-normal text-gray-700 dark:text-gray-400">We offer a comprehensive Email Scheduling service that allows you to plan, organize, and automate the sending of emails at specific times. This feature ensures that your messages are delivered exactly when needed, improving communication efficiency, maximizing engagement, and saving time. Whether for marketing campaigns, reminders, or personal communication, our service provides flexibility and reliability to meet your email delivery needs.</p>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="block mb-10 max-w-2xl h-60 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Scrapbook Template</h5>
                                <p class="font-normal text-gray-700 dark:text-gray-400">We also provide customizable scrapbook templates, allowing you to create beautiful and personalized scrapbooks with ease. Our templates offer a variety of layouts and designs, perfect for capturing and preserving your memories in a creative and unique way.</p>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="block mb-10 max-w-2xl h-60 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Responsive Admin</h5>
                                <p class="font-normal text-gray-700 dark:text-gray-400">We offer a fully responsive admin dashboard, designed to adapt seamlessly to any device or screen size. Our responsive admin interface ensures optimal usability and accessibility, providing you with an efficient and intuitive experience whether you're managing your tasks on a desktop, tablet, or smartphone.</p>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="block mb-10 max-w-2xl h-60 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                                <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            </a>
                        </div>
    
                    </div>
            </div>
        </div>
    </section>

    <x-footer></x-footer>
    
</body>
</html>