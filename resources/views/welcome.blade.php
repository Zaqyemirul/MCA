<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css') {{-- Pastikan ini mengarah ke file CSS Tailwind Anda --}}
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <title>Yayasan Mahkota Cahaya Abadi</title>
</head>

<body>

    <div class="bg-white min-h-screen flex flex-col">
        <header class="absolute inset-x-0 top-0 z-50" x-data="{ open: false }">
            <nav class="flex items-center justify-between p-6 lg:px-8 transition-colors duration-300"
                aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto"
                            src="{{ asset('images/logo.png') }}" {{-- foto logo --}}
                            alt="Logo">
                    </a>
                </div>

                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="#"
                        class="text-sm/6 font-semibold text-gray-900 hover:text-purple-800 transition-colors duration-300">Product</a>
                    <a href="#"
                        class="text-sm/6 font-semibold text-gray-900 hover:text-purple-800 transition-colors duration-300">Features</a>
                    <a href="#"
                        class="text-sm/6 font-semibold text-gray-900 hover:text-purple-800 transition-colors duration-300">Marketplace</a>
                    <a href="#"
                        class="text-sm/6 font-semibold text-gray-900 hover:text-purple-800 transition-colors duration-300">Company</a>
                </div>

                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <a href="#"
                        class="text-sm/6 font-semibold text-gray-900 hover:text-purple-800 transition-colors duration-300">Log
                        in <span aria-hidden="true">&rarr;</span></a>
                </div>

                <div class="flex lg:hidden">
                    <button @click="open = true" type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
            </nav>
            
            {{-- Mobile menu, toggle classes based on menu state. --}}
            <div class="lg:hidden" role="dialog" aria-modal="true" x-show="open"
                x-transition:enter="duration-150 ease-out" x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
                <div class="fixed inset-0 z-40 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                <div
                    class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Your Company</span>
                            <img class="h-10 w-auto"
                                src="{{ asset('images/logo.png') }}" 
                                alt="">
                        </a>
                        <button @click="open = false" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50 transition-colors duration-300">Product</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50 transition-colors duration-300">Features</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50 transition-colors duration-300">Marketplace</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50 transition-colors duration-300">Company</a>
                            </div>
                            <div class="py-6">
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold text-gray-900 hover:bg-gray-50 transition-colors duration-300">Log
                                    in</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        {{-- Menambahkan pt-20 ke main untuk jarak dari navbar. Sesuaikan nilai ini jika navbar Anda lebih tinggi/rendah. --}}
        <main class="flex-grow pt-20">
            <div class="relative isolate pt-14 pb-20 lg:pb-32"> {{-- Menyesuaikan padding atas dan bawah --}}
                {{-- Background blurs (Tetap sebagai dekorasi) --}}
                <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                    aria-hidden="true">
                    <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-144.5 -translate-x-1/2 rotate-30 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-288.75"
                        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                    </div>
                </div>

                <div class="max-w-screen-xl mx-auto px-6 flex flex-col justify-center items-center gap-8 lg:gap-14">
                    <div class="text-center w-full">
                        <span class="text-zinc-800 text-3xl sm:text-4xl lg:text-5xl font-bold font-[montserrat] leading-normal lg:leading-[75px]">
                            Tempat terbaik untuk </br>tumbuh bersama
                        </span></br>
                        <span class="text-amber-300 text-3xl sm:text-4xl lg:text-5xl font-bold font-[hidayatullah] leading-normal lg:leading-[75px]">
                            Al-Qur'an
                        </span>
                        <span class="text-zinc-800 text-3xl sm:text-4xl lg:text-5xl font-bold font-[montserrat] leading-normal lg:leading-[75px]">dan</span>
                        <span class="text-purple-800 text-3xl sm:text-4xl lg:text-5xl font-bold font-[hidayatullah] leading-normal lg:leading-[75px]">
                            Akhlak Mulia
                        </span>
                    </div>

                    <div class="text-center text-zinc-500 text-base font-normal font-open-sans">
                        Temukan program pembelajaran Al-Qur'an yang membangun karakter, meningkatkan keimanan, <br class="hidden sm:inline"/>dan
                        menyiapkan generasi unggul untuk masa depan.
                    </div>

                    <div class="flex flex-col sm:flex-row justify-center gap-4 sm:gap-6 mt-6">
                        <div class="w-full sm:w-44 h-14 p-2.5 bg-purple-800 rounded-[10px] inline-flex justify-center items-center gap-2.5">
                            <div class="text-white text-sm font-bold font-open-sans">Daftar Sekarang</div>
                        </div>
                        <div class="w-full sm:w-44 h-14 p-2.5 outline-[1.50px] outline-offset-[-0.75px] outline-purple-800 rounded-[10px] inline-flex justify-center items-center gap-2.5">
                            <div class="text-purple-800 text-sm font-bold font-open-sans">Pelajari Program</div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="max-w-screen-xl mx-auto px-6 mt-10 lg:mt-16 flex flex-col lg:flex-row items-center justify-between h-auto lg:h-96 gap-8">
                <div class="w-full lg:w-[596px] py-[15px] lg:py-[35px] inline-flex flex-col justify-start items-start gap-5">
                    <div class="size- p-2.5 inline-flex justify-center items-center gap-2.5">
                        <div class="justify-start text-zinc-800 text-3xl lg:text-4xl font-bold font-[montserrat] leading-[75px]">
                            Tentang Yayasan
                        </div>
                    </div>
                    <div class="self-stretch justify-start text-zinc-500 text-base font-normal font-open-sans leading-relaxed">
                        Didirikan pada tahun 2016, yayasan ini bermula dari komunitas Relawan Qur'an Matraman untuk
                        mengembangkan misi sosial dan dakwah.<br /><br />Kami kemudian bertransformasi menjadi yayasan yang
                        resmi untuk menyelenggarakan program pembelajaran Al-Qur'an dan kegiatan sosial bagi masyarakat.
                    </div>
                </div>

                <img class="w-full h-[200px] lg:h-[300px] lg:w-[600px] bg-gray-200 flex items-center justify-center rounded-lg overflow-hidden flex-shrink-0"
                    src="{{ asset('images/aboutus.png') }}" {{-- foto tentang yayasan --}}
                    alt="Tentang Yayasan Mahkota Cahaya Abadi">

            </section>

            <section class="max-w-screen-xl mx-auto py-10 lg:py-20 px-6 flex flex-col lg:flex-row items-center justify-center gap-8 lg:gap-20 mt-10 lg:mt-20 rounded-2xl">
                <img class="flex-shrink-0 w-full lg:w-[470px] h-[300px] lg:h-[500px] bg-gray-200 flex items-end justify-center rounded-lg overflow-hidden"
                src="{{ asset(path: 'images/visimisi.png') }}" {{-- foto visi dan misi() --}}
                    alt="Visi dan Misi Yayasan Mahkota Cahaya Abadi">

                <div class="flex-grow flex flex-col gap-8">
                    <div class="flex flex-col gap-4">
                        <span class="text-purple-800 text-base font-bold font-open-sans">Arah Kami Melangkah</span>
                        <h2 class="text-zinc-800 text-3xl lg:text-4xl font-bold font-[montserrat] leading-tight">
                            Berpijak pada Nilai <span class="text-purple-800">Qur'ani</span><br>
                            Bergerak untuk Umat
                        </h2>
                        <p class="text-zinc-500 text-base font-normal font-open-sans leading-relaxed">
                            Menjadi cahaya bagi umat dengan arah yang berpijak pada nilai-nilai Qur'ani dan semangat perubahan sosial
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-8">
                        <div class="w-full sm:w-80 h-64 relative bg-purple-800 rounded-2xl overflow-hidden shadow-lg">
                            <div class="left-1/2 -translate-x-1/2 top-[17px] absolute text-amber-300 text-xl font-semibold font-[montserrat]">Visi</div>
                            <div class="w-full h-48 left-0 top-[55px] absolute bg-[#EDE7F4] rounded-bl-2xl rounded-br-2xl overflow-hidden">
                                <div class="p-4 flex items-center justify-center h-full">
                                    <p class="text-center text-purple-800 text-sm font-semibold font-open-sans">Mewujudkan Masyarakat religius dan mandiri</p>
                                </div>
                            </div>
                        </div>

                        <div class="w-full sm:w-80 h-64 relative bg-amber-300 rounded-2xl overflow-hidden shadow-lg">
                            <div class="left-1/2 -translate-x-1/2 top-[17px] absolute text-purple-800 text-xl font-semibold font-[montserrat]">Misi</div>
                            <div class="w-full h-48 left-0 top-[55px] absolute bg-[#EDE7F4] rounded-bl-2xl rounded-br-2xl overflow-hidden">
                                <ul class="p-4 flex flex-col justify-center h-full list-none space-y-2">
                                    <li class="flex items-start gap-2 text-purple-800 text-sm font-normal font-open-sans">
                                        <div class="w-6 h-6 flex-shrink-0 flex items-center justify-center">
                                            <span class="text-xl">👥</span>
                                        </div>
                                        Membina masyarakat yang rukun dan agamis
                                    </li>
                                    <li class="flex items-start gap-2 text-purple-800 text-sm font-normal font-open-sans">
                                        <div class="w-6 h-6 flex-shrink-0 flex items-center justify-center">
                                            <span class="text-xl">🎓</span>
                                        </div>
                                        Menyiapkan SDM yang aktif berkontribusi untuk masyarakat sesuai kapasitasnya
                                    </li>
                                    <li class="flex items-start gap-2 text-purple-800 text-sm font-normal font-open-sans">
                                        <div class="w-6 h-6 flex-shrink-0 flex items-center justify-center">
                                            <span class="text-xl">🧩</span>
                                        </div>
                                        Mensinergikan potensi masyarakat untuk pemerataan sosial
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="max-w-screen-xl mx-auto px-6 py-10 lg:py-16 mt-10 lg:mt-20 w-full">
            <div class="max-w-[1290px] mx-auto">
                <div class="flex flex-col lg:flex-row items-start gap-10 lg:gap-0">

                    <div class="flex-shrink-0 w-full lg:w-72 flex flex-col gap-7 mb-8 lg:mb-0 lg:mr-auto">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('images/logo.png') }}" {{-- foto logo() --}}
                                alt="Yayasan Mahkota Cahaya Abadi Logo" class="h-16 w-auto object-contain">
                            <div class="text-purple-800 text-xl font-bold font-open-sans leading-tight">
                                Yayasan<br />Mahkota<br />Cahaya Abadi</div>
                        </div>
                        <p class="text-zinc-800 text-base font-normal font-open-sans leading-relaxed">Yayasan
                            Mahkota Cahaya Abadi adalah lembaga sosial-keagamaan yang membina generasi Qur’ani
                            melalui pendidikan, dakwah, dan kegiatan sosial.</p>
                    </div>

                    <div class="flex flex-col sm:flex-row items-start gap-10 sm:gap-[59px] w-full lg:w-auto">
                        <div class="flex-shrink-0 w-full sm:w-auto flex flex-col gap-4">
                            <h3 class="text-zinc-800 text-base font-bold font-open-sans">Navigasi Cepat</h3>
                            <a href="#"
                                class="text-zinc-800 text-base font-normal font-open-sans hover:text-purple-800 transition-colors duration-200">Beranda</a>
                            <a href="#"
                                class="text-zinc-800 text-base font-normal font-open-sans hover:text-purple-800 transition-colors duration-200">Tentang
                                Kami</a>
                            <a href="#"
                                class="text-zinc-800 text-base font-normal font-open-sans hover:text-purple-800 transition-colors duration-200">Visi
                                Misi</a>
                            <a href="#"
                                class="text-zinc-800 text-base font-normal font-open-sans hover:text-purple-800 transition-colors duration-200">Program</a>
                            <a href="#"
                                class="text-zinc-800 text-base font-normal font-open-sans hover:text-purple-800 transition-colors duration-200">Kontak
                                Kami</a>
                        </div>

                        <div class="flex-shrink-0 w-full sm:w-60 flex flex-col gap-5">
                            <h3 class="text-zinc-800 text-base font-bold font-open-sans">Informasi Kontak</h3>
                            <div class="flex items-start gap-2.5">
                                <svg class="w-6 h-6 text-purple-800 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z" />
                                </svg>
                                <p class="text-zinc-800 text-base font-normal font-open-sans leading-normal">Jl.
                                    Srikaya No. 2 RT 009/06<br />Utan Kayu Utara, Matraman<br />Jakarta Timur, 13120
                                </p>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <svg class="w-6 h-6 text-purple-800 flex-shrink-0" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.32.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.12.35.03.75-.24 1.02l-2.2 2.2z" />
                                </svg>
                                <p class="text-zinc-800 text-base font-normal font-open-sans">0852- 8222-4334</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full border-t-2 border-purple-800 my-8 lg:my-10"></div>

                <div class="text-center text-zinc-800 text-xs font-normal font-open-sans">Copyright @2025 by Yayasan
                    Mahkota Cahaya Abadi. All Right Reserved</div>

            </div>
        </footer>

    </div>
</body>

</html>