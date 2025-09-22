<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perencanaan Penugasan - Inspektorat Kota Gorontalo</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-lightBlue text-darkGray">

    <!-- Header -->
    <header class="bg-oceanBlue/80 shadow-md backdrop-blur-md sticky top-0 z-20">
        <div class="container mx-auto flex items-center justify-between px-6 py-4">
            <!-- Logo -->
            <div class="flex items-center space-x-4">
                <img src="{{ asset('images/logo_inspektorat.png') }}" alt="Logo Gorontalo" class="h-16">
            </div>

            <!-- Navbar -->
            <nav class="hidden md:flex items-center space-x-6 text-white text-lg">
                <a href="/"
                    class="py-2 px-3 rounded transition-all duration-300 hover:text-sunnyYellow hover:bg-white/10">Beranda</a>
                <a href="/login"
                    class="px-6 py-2 bg-sunnyYellow text-white font-semibold rounded-lg shadow transition-all duration-300 hover:bg-oceanBlue hover:shadow-lg hover:scale-105">
                    Login
                </a>
            </nav>

            <!-- Mobile Menu Button -->
            <button id="hamburger" class="md:hidden text-white focus:outline-none hover:scale-110 transition-transform">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="hidden absolute top-0 left-0 w-full h-screen bg-white/95 backdrop-blur-lg lg:hidden">
            <div class="container mx-auto py-6 px-8">
                <ul class="flex flex-col space-y-6 text-lg text-darkGray">
                    <li>
                        <a href="/"
                            class="py-2 px-3 rounded hover:text-sunnyYellow hover:bg-lightBlue/30 transition-all">Beranda</a>
                    </li>
                    <li>
                        <a href="/login"
                            class="px-6 py-2 bg-sunnyYellow text-white font-semibold rounded-lg shadow hover:bg-oceanBlue hover:scale-105 transition-all">
                            Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section
        class="h-screen flex items-center justify-center bg-gradient-to-br from-oceanBlue via-lightBlue to-sunnyYellow">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-6 py-12">
            <!-- Image -->
            <div class="w-full md:w-1/2 mb-10 md:mb-0">
                <img src="{{ asset('images/hero2.png') }}" alt="Hero Image"
                    class="w-[550px] max-w-full rounded-xl shadow-xl object-cover hover:scale-105 hover:shadow-2xl transition-transform duration-500">
            </div>

            <!-- Text -->
            <div class="w-full md:w-1/2 text-center md:text-left md:pl-12">
                <h1
                    class="text-4xl md:text-6xl font-extrabold text-white leading-tight mb-6 animate__animated animate__fadeIn">
                    Website Perencanaan Penugasan <br class="hidden md:block">Inspektorat Kota Gorontalo
                </h1>
                <p class="text-lg text-white/90 mb-8">
                    Kelola dan dokumentasikan perencanaan tugas serta laporan dengan mudah dan cepat di Inspektorat Kota
                    Gorontalo.
                </p>
                <a href="{{ url('/login') }}"
                    class="px-8 py-4 bg-sunnyYellow text-white text-lg font-semibold rounded-lg shadow hover:bg-oceanBlue hover:shadow-xl hover:scale-110 transition-all duration-300">
                    Mulai Sekarang
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-oceanBlue py-6">
        <div class="container mx-auto text-center text-white">
            <p class="text-softPurple text-sm">&copy; 2025 Inspektorat Kota Gorontalo. All rights reserved.</p>
        </div>
    </footer>

    <!-- JS -->
    <script>
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobile-menu');
        hamburger.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));
    </script>

</body>

</html>
