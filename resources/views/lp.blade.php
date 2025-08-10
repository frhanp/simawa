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
    <header class="bg-oceanBlue bg-opacity-50 shadow-md sticky top-0 z-10 backdrop-blur-md">
        <div class="container mx-auto flex items-center justify-between px-6 py-4">
            <!-- Logo dan Judul -->
            <div class="flex items-center space-x-4">
                <img src="{{ asset('images/logo_inspektorat.png') }}" alt="Logo Gorontalo" class="h-[70px]">
            </div>
    
            <!-- Navbar -->
            <nav class="hidden md:flex space-x-8 text-lg text-white">
                <a href="/" class="py-2 px-4 hover:text-sunnyYellow transition duration-300 ease-in-out">Beranda</a>
                <a href="/login" class="px-8 py-2 bg-sunnyYellow text-white rounded-lg hover:bg-oceanBlue transition duration-300 ease-in-out">Login</a>
            </nav>
    
            <!-- Mobile Menu Button -->
            <div class="block md:hidden">
                <button id="hamburger" class="text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden bg-white absolute top-0 left-0 w-full h-screen bg-opacity-90 hidden">
            <div class="container mx-auto py-6 px-8">
                <ul class="flex flex-col space-y-6 text-lg text-darkGray">
                    <li><a href="/" class="hover:text-sunnyYellow transition duration-300 ease-in-out">Beranda</a></li>
                    <li><a href="/login" class="px-8 py-2 bg-sunnyYellow text-white rounded-lg hover:bg-oceanBlue transition duration-300 ease-in-out">Login</a></li>
                </ul>
            </div>
        </div>
    </header>
    
    


    <!-- Hero Section -->
    <section
        class="h-screen flex items-center justify-center bg-gradient-to-br from-oceanBlue via-lightBlue to-sunnyYellow">
        <div class="container mx-auto flex items-center justify-between px-6 py-12">
            <!-- Left Side - Image -->
            <div class="w-full md:w-1/2">
                <img src="{{ asset('images/hero2.png') }}" alt="Hero Image"
                    class="w-[550px] h-auto object-cover rounded-lg">
            </div>

            <!-- Right Side - Text -->
            <div class="w-full md:w-1/2 text-center md:text-left md:pl-12">
                <h1
                    class="text-4xl md:text-6xl font-extrabold text-white mb-6 animate__animated animate__fadeIn animate__delay-1s">
                    Website Perencanaan Penugasan Inspektorat Kota Gorontalo
                </h1>
                <p class="text-lg text-white mb-8">
                    Kelola dan dokumentasikan perencanaan tugas serta laporan dengan mudah dan cepat di Inspektorat Kota
                    Gorontalo.
                </p>
                <a href="{{ url('/login') }}"
                    class="px-8 py-4 bg-sunnyYellow text-white text-lg rounded-lg shadow hover:bg-oceanBlue transition-all duration-300 ease-in-out transform hover:scale-105">
                    Mulai Sekarang
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-oceanBlue py-6">
        <div class="container mx-auto text-center">
            <p class="text-softPurple">&copy; 2024 Inspektorat Kota Gorontalo. All rights reserved.</p>
        </div>
    </footer>

    <!-- JS for Hamburger Menu -->
    <script>
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobile-menu');

        hamburger.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

</body>

</html>
