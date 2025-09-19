<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infrasoft | Solusi Server & Jaringan</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Header -->
    <header class="bg-white shadow-md fixed top-0 left-0 w-full z-50">
        <div class="max-w-7xl mx-auto flex justify-between items-center p-4">
            <h1 class="text-2xl font-bold text-blue-600">Infrasoft</h1>
            <nav class="space-x-6 flex items-center">
                <a href="#home" class="hover:text-blue-600">Beranda</a>
                <a href="#services" class="hover:text-blue-600">Layanan</a>
                <a href="#about" class="hover:text-blue-600">Tentang</a>
                <a href="#contact" class="hover:text-blue-600">Kontak</a>

                <!-- Language Switcher -->
                <div class="ml-4 flex space-x-2">
                    <a href="{{ url('lang/id') }}" 
                    class="px-2 py-1 border rounded text-sm {{ app()->getLocale() == 'id' ? 'bg-blue-600 text-white' : 'text-gray-600 hover:bg-gray-100' }}">
                    ID
                    </a>
                    <a href="{{ url('lang/en') }}" 
                    class="px-2 py-1 border rounded text-sm {{ app()->getLocale() == 'en' ? 'bg-blue-600 text-white' : 'text-gray-600 hover:bg-gray-100' }}">
                    EN
                    </a>
                </div>               

            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="bg-blue-100 pt-32 pb-20">
    <div class="container mx-auto flex flex-col-reverse md:flex-row items-center px-6 md:px-12 gap-10">

        <!-- Left Content -->
        <div class="md:w-1/2 text-center md:text-left">
        <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight">
            Solusi <span class="text-blue-600">Server & Jaringan</span> untuk Bisnis Modern
        </h1>
        <p class="mt-4 text-lg text-gray-600">
            Infrasoft menyediakan layanan infrastruktur IT yang handal, scalable, dan aman untuk mendukung pertumbuhan perusahaan Anda.
        </p>
        <div class="mt-6 flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
            <a href="#contact" 
            class="px-6 py-3 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700">
            Konsultasi Gratis
            </a>
            <a href="#services" 
            class="px-6 py-3 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-100">
            Lihat Layanan
            </a>
        </div>
        </div>

        <!-- Right Content (Animation / Image) -->
        <div class="md:w-1/2 flex justify-center">
        <img src="/images/cloud-server.png" 
            alt="Cloud Server Animation" 
            class="w-80 md:w-[420px] h-auto drop-shadow-xl">
        </div>

    </div>
    </section>

    <!-- Services -->
    <section id="services" class="py-20 max-w-7xl mx-auto px-6">
        <h3 class="text-3xl font-bold text-center mb-12">Layanan Kami</h3>
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Service 1 -->
        <div class="bg-white shadow-lg p-6 rounded-xl hover:shadow-xl transition text-center">
        <h4 class="text-xl font-semibold mb-4">Manajemen Server</h4>    
        <img src="{{ asset('images/server.png') }}" alt="Manajemen Server" class="h-24 mx-auto mb-6">
            <p>Kami menyediakan instalasi, konfigurasi, dan maintenance server untuk kebutuhan bisnis Anda.</p>
        </div>

        <!-- Service 2 -->
        <div class="bg-white shadow-lg p-6 rounded-xl hover:shadow-xl transition text-center">
            <h4 class="text-xl font-semibold mb-4">Jaringan & Infrastruktur</h4>
            <img src="{{ asset('images/network.png') }}" alt="Jaringan & Infrastruktur" class="h-24 mx-auto mb-6">
            <p>Desain dan implementasi jaringan LAN, WAN, serta solusi infrastruktur IT yang aman dan efisien.</p>
        </div>

        <!-- Service 3 -->
        <div class="bg-white shadow-lg p-6 rounded-xl hover:shadow-xl transition text-center">
            <h4 class="text-xl font-semibold mb-4">Cloud & Virtualisasi</h4>
            <img src="{{ asset('images/cloud.png') }}" alt="Cloud & Virtualisasi" class="h-24 mx-auto mb-6">
            <p>Membantu migrasi ke cloud, virtualisasi server, dan solusi modern untuk efisiensi perusahaan Anda.</p>
        </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="bg-gray-100 py-20 px-6">
        <div class="max-w-5xl mx-auto text-center">
            <h3 class="text-3xl font-bold mb-6">Tentang Infrasoft</h3>
            <p class="text-lg leading-relaxed">
                Infrasoft adalah penyedia layanan IT yang bergerak di bidang server dan jaringan. 
                Kami berkomitmen memberikan solusi terbaik dengan dukungan teknis berpengalaman untuk mendukung pertumbuhan bisnis Anda.
            </p>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-20 max-w-4xl mx-auto px-6">
        <h3 class="text-3xl font-bold text-center mb-8">Hubungi Kami</h3>
        
        @if(session('success'))
            <div class="mb-6 p-4 bg-green-100 text-green-800 rounded-lg text-center">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form Email -->
        <form action="{{ route('contact.send') }}" method="POST" class="bg-white shadow-lg rounded-xl p-8 space-y-6">
            @csrf
            <input type="text" name="name" placeholder="Nama Anda" 
                class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300" required>
            <input type="email" name="email" placeholder="Email Anda" 
                class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300" required>
            <textarea name="message" placeholder="Pesan Anda" 
                    class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300" rows="5" required></textarea>
            <button type="submit" 
                    class="w-full py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700">
                Kirim Pesan
            </button>
        </form>
    </section>

    <!-- Footer --> 
     <footer class="bg-gray-800 text-white py-6 text-center">
        <p>&copy; {{ date('Y') }} Infrasoft. Semua Hak Dilindungi.</p>
    </footer>

    <!-- Floating Contact Buttons -->
    
    <div class="fixed bottom-6 right-6 flex flex-col gap-3 z-50 md:gap-4">
        <!-- WhatsApp -->
        <!--<a href="https://wa.me/6281234567890?text=Halo%20Infrasoft,%20saya%20mau%20konsultasi" 
        target="_blank" rel="noopener noreferrer"
        class="flex items-center gap-2 px-4 py-3 rounded-full bg-green-500 shadow-lg hover:bg-green-600 transition animate-bounce md:animate-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M20.52 3.48A11.88 11.88 0 0012.01.12 11.94 11.94 0 001.99 11.2c0 2.1.55 4.15 1.6 5.95L1 23l5.06-1.63A11.95 11.95 0 0012 24c6.63 0 12-5.37 12-12 0-3.2-1.25-6.2-3.48-8.52zM12 21.5c-1.02 0-2.02-.14-2.98-.41l-.21-.07-3.01.97.97-2.94-.07-.24A9.5 9.5 0 012.5 11.2 9.5 9.5 0 0111.98 1.7c5.25 0 9.53 4.28 9.53 9.53S17.23 21.5 12 21.5z" fill="white"/>
                <path d="M17.34 14.1c-.29-.15-1.7-.84-1.96-.94-.26-.1-.45-.15-.64.15-.19.29-.74.94-.91 1.13-.17.19-.34.21-.63.07-.29-.15-1.23-.45-2.34-1.45-.87-.77-1.45-1.72-1.62-2.01-.17-.29-.02-.45.13-.6.14-.14.31-.36.46-.54.15-.19.2-.32.3-.53.1-.21.05-.39-.02-.54-.07-.15-.64-1.55-.88-2.12-.23-.56-.47-.48-.64-.49l-.54-.01c-.18 0-.47.07-.72.34-.25.27-.95.93-.95 2.27s.97 2.64 1.11 2.83c.14.19 1.9 2.9 4.6 3.96 1.07.46 1.9.73 2.55.93.99.29 1.89.25 2.6.15.79-.11 1.7-.69 1.94-1.36.24-.67.24-1.25.17-1.37-.06-.12-.25-.19-.54-.34z" fill="white"/>
            </svg>
            <span class="text-white font-medium">WhatsApp</span>
        </a>-->
    
        <!-- Telegram -->
        <a href="https://t.me/robirama93" target="_blank" rel="noopener noreferrer"
        class="flex items-center gap-2 px-4 py-3 rounded-full bg-sky-500 shadow-lg hover:bg-sky-600 transition animate-bounce md:animate-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 240 240" aria-hidden="true">
                <path d="M179 73l-24 113c-2 9-7 12-15 7l-42-31-20 19c-2 2-4 3-8 3l3-45 82-74c4-3-1-5-6-2l-101 64-43-13c-9-3-9-9 2-13l168-65c8-3 15 2 12 14z" fill="white"/>
            </svg>
            <span class="text-white font-medium">Telegram</span>
        </a>
    </div>

</body> 
</html>