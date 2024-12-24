<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <div class="header bg-gray-900 text-white flex justify-between items-center px-10 py-5">
        <div class="logo">
            <h1 class="font-sans text-2xl font-bold">Pilato Club</h1>
        </div>
        <nav class="flex space-x-6">
            <a href="#" class="text-white hover:text-yellow-400">Home</a>
            <a href="#" class="text-white hover:text-yellow-400">Blog</a>
            <a href="#" class="text-white hover:text-yellow-400">About Us</a>
            <a href="#" class="text-white hover:text-yellow-400">Contact Us</a>
        </nav>
        
        <button onclick="window.location='{{ route('login') }}'" class="bg-white text-black px-4 py-2 rounded font-bold hover:bg-gray-300">
            Login/Register
        </button>
        
    </div>

    <!-- Hero Section -->
    <div class="hero relative text-white bg-cover bg-center h-[80vh] flex flex-col justify-center px-10"
        style="background-image: url('/images/home2.jpg');">
        <h1 class="text-4xl lg:text-6xl font-bold leading-tight">
            Transform Your Body, Mind, and Soul with Pilato Club.
        </h1>
        <p class="mt-5 text-lg">
            By <span class="text-yellow-400">Sheva Milano</span> | Desember 21 , 2024
        </p>
        <p class="mt-4 text-base text-gray-300 max-w-prose">
            Pilato Club menyediakan platform terbaik untuk mencapai tujuan kesehatan dan kebugaran Anda. 
        </p>
        <a href="#" class="mt-5 bg-yellow-400 text-black px-4 py-2 rounded font-bold text-sm hover:bg-yellow-300 max-w-xs text-center">
            Read More
        </a>
    </div>

        <!-- Content Section -->
    <div class="container mx-auto px-4 py-8">
        <!-- Featured Post Section -->
        <div class="mb-10">
            <h2 class="text-2xl font-bold mb-4">Featured Post</h2>
            <div class="flex flex-col md:flex-row bg-white shadow-md rounded-lg overflow-hidden">
                <!-- Image -->
                <img <img src="/images/post1.jpg" alt="Featured Post" class="w-80 h-80 object-cover rounded-lg">
                <!-- Content -->
                <div class="p-6">
                    <p class="text-sm text-gray-500 mb-2">By <a href="#" class="text-blue-600">Sheva Milano</a> | Desember 21, 2024</p>
                    <h3 class="text-lg font-bold mb-4">
                        Mengenal Lebih Dekat Pilato Club: Transformasi Diri dengan Program Kesehatan Holistik
                    </h3>
                    <p class="text-gray-600 mb-6">
                        Pilato Club bukan hanya tentang kebugaran fisik, tetapi juga mencakup kesehatan mental dan spiritual. Temukan lebih banyak tentang bagaimana Pilato Club membantu anggotanya mencapai keseimbangan hidup dan tubuh yang lebih sehat.
                    </p>
                    <a href="#" class="bg-yellow-400 text-black px-4 py-2 rounded font-bold text-sm hover:bg-yellow-300">
                        Read More >
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- All Posts Section -->
    <div class="py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-8">All Posts</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Post Item 1 -->
                <div class="bg-white shadow-md rounded-lg p-4 hover:bg-yellow-50 text-sm max-w-[300px] w-full">
                    <p class="text-xs text-gray-500 mb-1">By <a href="#" class="text-blue-600">Sheva Milano</a> | Desember 21, 2024</p>
                    <h3 class="font-bold text-base mb-2">5 Manfaat Pilates untuk Kesehatan Fisik dan Mental Anda</h3>
                    <p class="text-gray-600 line-clamp-3">Pelajari bagaimana Pilates dapat membantu Anda meningkatkan fleksibilitas, kekuatan inti, dan kesehatan mental. Artikel ini memberikan panduan praktis bagi pemula yang ingin memulai Pilates.</p>
                    <a href="#" class="text-blue-600 font-bold hover:underline">Read More ></a>
                </div>

                <!-- Post Item 2 -->
                <div class="bg-white shadow-md rounded-lg p-4 hover:bg-yellow-50 text-sm max-w-[300px] w-full">
                    <p class="text-xs text-gray-500 mb-1">By <a href="#" class="text-blue-600">John Doe</a> | Desember 19, 2024</p>
                    <h3 class="font-bold text-base mb-2">Menjaga Kesehatan Mental dan Fisik dengan Rutinitas Sehat</h3>
                    <p class="text-gray-600 line-clamp-3">Menjaga tubuh dan pikiran tetap sehat adalah kunci untuk hidup bahagia. Artikel ini membahas rutinitas sederhana yang dapat Anda lakukan setiap hari untuk meningkatkan kesehatan Anda.</p>
                    <a href="#" class="text-blue-600 font-bold hover:underline">Read More ></a>
                </div>

                <!-- Post Item 3 -->
                <div class="bg-white shadow-md rounded-lg p-4 hover:bg-yellow-50 text-sm max-w-[300px] w-full">
                    <p class="text-xs text-gray-500 mb-1">By <a href="#" class="text-blue-600">Jane Smith</a> | Desember 18, 2024</p>
                    <h3 class="font-bold text-base mb-2">Panduan Diet Seimbang untuk Menurunkan Berat Badan dengan Sehat</h3>
                    <p class="text-gray-600 line-clamp-3">Apakah Anda ingin menurunkan berat badan dengan cara yang aman dan efektif? Temukan tips diet seimbang untuk mencapai tujuan kesehatan Anda tanpa mengorbankan kesejahteraan Anda.</p>
                    <a href="#" class="text-blue-600 font-bold hover:underline">Read More ></a>
                </div>

                <!-- Post Item 4 -->
                <div class="bg-white shadow-md rounded-lg p-4 hover:bg-yellow-50 text-sm max-w-[300px] w-full">
                    <p class="text-xs text-gray-500 mb-1">By <a href="#" class="text-blue-600">John Doe</a> | Desember 15, 2024</p>
                    <h3 class="font-bold text-base mb-2">Mengenal Pilates untuk Peningkatan Kesehatan Jangka Panjang</h3>
                    <p class="text-gray-600 line-clamp-3">Pelajari manfaat Pilates untuk kesehatan jangka panjang, seperti mengurangi nyeri punggung dan stres, serta meningkatkan postur tubuh Anda.</p>
                    <a href="#" class="text-blue-600 font-bold hover:underline">Read More ></a>
                </div>

                <!-- Post Item 5 -->
                <div class="bg-white shadow-md rounded-lg p-4 hover:bg-yellow-50 text-sm max-w-[300px] w-full">
                    <p class="text-xs text-gray-500 mb-1">By <a href="#" class="text-blue-600">Sheva Milano</a> | Desember 10, 2024</p>
                    <h3 class="font-bold text-base mb-2">Langkah-langkah Mudah untuk Memulai Gaya Hidup Sehat</h3>
                    <p class="text-gray-600 line-clamp-3">Memulai gaya hidup sehat tidak perlu rumit. Artikel ini memberikan langkah-langkah sederhana untuk membangun kebiasaan sehat yang bertahan lama.</p>
                    <a href="#" class="text-blue-600 font-bold hover:underline">Read More ></a>
                </div>

                <!-- Post Item 6 -->
                <div class="bg-white shadow-md rounded-lg p-4 hover:bg-yellow-50 text-sm max-w-[300px] w-full">
                    <p class="text-xs text-gray-500 mb-1">By <a href="#" class="text-blue-600">John Doe</a> | Desember 7, 2024</p>
                    <h3 class="font-bold text-base mb-2">Mengatur Pola Makan untuk Hidup Lebih Sehat dan Bahagia</h3>
                    <p class="text-gray-600 line-clamp-3">Pola makan sehat adalah kunci untuk kesehatan tubuh dan pikiran. Pelajari cara sederhana untuk memperbaiki pola makan Anda setiap hari.</p>
                    <a href="#" class="text-blue-600 font-bold hover:underline">Read More ></a>
                </div>
            </div>
        </div>
    </div>


    
    
    <!-- About Us Section -->
    <div class="bg-blue-50 py-12">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- About Us -->
            <div>
                <h3 class="text-sm font-bold text-gray-600 uppercase mb-2">About Us</h3>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">
                    Komunitas Kesehatan Holistik untuk Kehidupan yang Lebih Baik
                </h2>
                <p class="text-gray-600 mb-6">
                    Pilato Club adalah komunitas kesehatan holistik yang berdedikasi untuk membantu Anda mencapai kesehatan optimal melalui pendekatan mind, body, dan soul. Dengan tim profesional berpengalaman dan fasilitas modern, kami memberikan panduan terbaik dalam perjalanan transformasi kesehatan Anda.
                </p>
                <a href="#" class="text-purple-600 font-bold hover:underline">Read More ></a>
            </div>

            <!-- Our Mission -->
            <div>
                <h3 class="text-sm font-bold text-gray-600 uppercase mb-2">Our Mission</h3>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">
                    Membawa Transformasi Kesehatan Holistik untuk Semua
                </h2>
                <p class="text-gray-600">
                    Misi kami adalah membantu setiap individu mencapai potensi kesehatan tertinggi mereka melalui program-program holistik yang mencakup Pilates, nutrisi seimbang, dan kesehatan mental. Kami berkomitmen untuk menciptakan komunitas yang mendukung, mengedukasi, dan menginspirasi setiap anggota untuk menjalani gaya hidup sehat yang berkelanjutan.
                </p>
            </div>
        </div>
    </div>

    
    <!-- List of Authors Section -->
    <div class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-center text-2xl font-bold text-gray-900 mb-8">List of Instructor</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Author Card -->
                <div class="bg-white shadow-md rounded-lg p-6 text-center">
                    <img src="/images/author1.jpg" alt="Alice Johnson" class="w-24 h-24 mx-auto rounded-full mb-4 object-cover">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Alice Johnson</h3>
                    <p class="text-sm text-gray-600 mb-4">Pilates Instructor & Health Coach @PilatesStudio</p>
                    <div class="flex justify-center space-x-4 text-gray-600">
                        <a href="https://twitter.com/alicejohnsonpilates"><i class="fab fa-twitter"></i></a>
                        <a href="https://facebook.com/alicejohnsonpilates"><i class="fab fa-facebook"></i></a>
                        <a href="https://instagram.com/alicejohnsonpilates"><i class="fab fa-instagram"></i></a>
                        <a href="https://linkedin.com/in/alicejohnsonpilates"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <!-- Repeat Author Card -->
                <div class="bg-white shadow-md rounded-lg p-6 text-center">
                    <img src="/images/author2.jpg" alt="Megan Carter" class="w-24 h-24 mx-auto rounded-full mb-4 object-cover">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Megan Carter</h3>
                    <p class="text-sm text-gray-600 mb-4">Certified Pilates Instructor & Wellness Advocate @FitPilates</p>
                    <div class="flex justify-center space-x-4 text-gray-600">
                        <a href="https://twitter.com/meganpilates"><i class="fab fa-twitter"></i></a>
                        <a href="https://facebook.com/meganpilates"><i class="fab fa-facebook"></i></a>
                        <a href="https://instagram.com/meganpilates"><i class="fab fa-instagram"></i></a>
                        <a href="https://linkedin.com/in/meganpilates"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6 text-center">
                    <img src="/images/author3.jpg" alt="Sophia Lee" class="w-24 h-24 mx-auto rounded-full mb-4 object-cover">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Sophia Lee</h3>
                    <p class="text-sm text-gray-600 mb-4">Pilates Expert & Physical Therapist @CoreBalance</p>
                    <div class="flex justify-center space-x-4 text-gray-600">
                        <a href="https://twitter.com/sophialee_pilates"><i class="fab fa-twitter"></i></a>
                        <a href="https://facebook.com/sophialee.pilates"><i class="fab fa-facebook"></i></a>
                        <a href="https://instagram.com/sophialee.pilates"><i class="fab fa-instagram"></i></a>
                        <a href="https://linkedin.com/in/sophialee-pilates"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6 text-center">
                    <img src="/images/author4.jpg" alt="Emily Davis" class="w-24 h-24 mx-auto rounded-full mb-4 object-cover">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Emily Davis</h3>
                    <p class="text-sm text-gray-600 mb-4">Pilates Teacher & Wellness Influencer @PilatesWithEmily</p>
                    <div class="flex justify-center space-x-4 text-gray-600">
                        <a href="https://twitter.com/emilydavis_pilates"><i class="fab fa-twitter"></i></a>
                        <a href="https://facebook.com/emilydavis.pilates"><i class="fab fa-facebook"></i></a>
                        <a href="https://instagram.com/emilydavis.pilates"><i class="fab fa-instagram"></i></a>
                        <a href="https://linkedin.com/in/emilydavis-pilates"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Testimonials Section -->
    <div class="bg-yellow-50 py-12">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <!-- Left Content -->
            <div>
                <h3 class="text-sm font-bold text-gray-600 uppercase mb-2">Testimonials</h3>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">
                    What people say about our blog
                </h2>
            </div>
            <!-- Right Content -->
            <div>
                <p class="text-gray-900 text-lg mb-4">
                    "Pilato Club has completely transformed my fitness journey. Their holistic approach has helped me not only become physically fit but also achieve mental clarity and balance. Highly recommend it!"
                </p>
                <div class="flex items-center space-x-4">
                    <img src="/images/testi2.jpg" alt="Valerie Vallem" class="w-20 h-20 rounded-full">
                    <div>
                        <p class="font-bold text-gray-900">Valerie Vallem</p>
                        <p class="text-sm text-gray-600">New York, USA</p>
                    </div>
                </div>
                <div class="flex justify-end space-x-4 mt-4">
                    <button class="bg-gray-200 text-gray-600 w-10 h-10 rounded-full flex items-center justify-center hover:bg-gray-300">
                        <i class="fas fa-arrow-left"></i>
                    </button>
                    <button class="bg-black text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-gray-800">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>


        <!-- Footer Section -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <!-- Top Section -->
            <div class="flex flex-col lg:flex-row justify-between items-center lg:items-start lg:space-x-6">
                <!-- Logo -->
                <div class="mb-8 lg:mb-0">
                    <h2 class="font-bold text-2xl">Pilato Club</h2>
                </div>

                <!-- Newsletter -->
                <div class="flex-grow mb-8 lg:mb-0">
                    <h3 class="font-bold text-lg mb-4">Join our team to be a part of our story</h3>
                    <div class="flex">
                        <input 
                            type="email" 
                            placeholder="Enter Your Email" 
                            class="flex-grow px-4 py-2 rounded-l-md bg-gray-800 text-gray-300 focus:outline-none"
                        >
                        <button class="bg-yellow-400 text-black px-6 py-2 rounded-r-md font-bold hover:bg-yellow-300">
                            Join Now
                        </button>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="flex space-x-4 text-gray-400">
                    <a href="#" class="hover:text-white"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-white"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="hover:text-white"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-white"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>

            <!-- Bottom Section -->
            <div class="border-t border-gray-700 mt-8 pt-4 text-sm">
                <div class="flex flex-col lg:flex-row justify-between items-center">
                    <!-- Address -->
                    <div class="mb-4 lg:mb-0">
                        Pilato Club 118 2561 New York<br>
                        <a href="mailto:hello@pilato.com" class="hover:text-gray-400">hello@pilato.com</a> &nbsp; 020 7993 2905
                    </div>

                    <!-- Footer Links -->
                    <div class="flex space-x-6 text-gray-400">
                        <a href="#" class="hover:text-white">Home</a>
                        <a href="#" class="hover:text-white">Blog</a>
                        <a href="#" class="hover:text-white">About Us</a>
                        <a href="#" class="hover:text-white">Contact Us</a>
                        <a href="#" class="hover:text-white">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
