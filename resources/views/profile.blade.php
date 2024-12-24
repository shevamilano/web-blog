<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Header -->
    <header class="bg-gray-900 text-white py-5">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">Pilato Club</h1>
            <nav class="flex space-x-6">
                <a href="/" class="hover:text-yellow-400">Home</a>
                <a href="/blog" class="hover:text-yellow-400">Blog</a>
                <a href="/about" class="hover:text-yellow-400">About Us</a>
                <a href="/contact" class="hover:text-yellow-400">Contact Us</a>
            </nav>
            <button class="bg-white text-black px-4 py-2 rounded font-bold hover:bg-gray-300">Subscribe</button>
        </div>
    </header>

    <!-- Profile Section -->
    <main class="py-12">
        <div class="container mx-auto px-4">
            <!-- Profile Intro -->
            <div class="bg-purple-50 p-8 rounded-lg shadow-md flex flex-col md:flex-row items-center md:items-start space-y-6 md:space-y-0 md:space-x-6">
                <img src="/images/profi1.jpg" alt="Profile Picture" class="rounded-full w-32 h-32 md:w-40 md:h-40 shadow-md">
                <div class="text-center md:text-left">
                    <h2 class="text-3xl font-bold text-gray-900">Hey there, I’m Shanika</h2>
                    <p class="text-gray-600 mt-4">
                        I am a university student with a deep passion for sports and fitness. For me, staying active is not just a hobby but a way to maintain a balanced lifestyle that supports both my physical and mental well-being. 
                    </p>
                    <p class="text-gray-600 mt-4">
                        My interest in sports has allowed me to explore various activities, from running to Pilates, and I enjoy challenging myself to grow stronger and healthier every day. Through sports, I’ve learned the importance of discipline, teamwork, and perseverance—values that I carry into other areas of my life, including my studies and personal development.
                    </p>
                    <!-- Social Media -->
                    <div class="mt-4 flex justify-center md:justify-start space-x-4 text-gray-600">
                        <a href="https://facebook.com/yourprofile" class="hover:text-blue-500"><i class="fab fa-facebook"></i> Facebook</a>
                        <a href="https://twitter.com/yourprofile" class="hover:text-blue-400"><i class="fab fa-twitter"></i> Twitter</a>
                        <a href="https://instagram.com/yourprofile" class="hover:text-pink-500"><i class="fab fa-instagram"></i> Instagram</a>
                        <a href="https://linkedin.com/in/yourprofile" class="hover:text-blue-600"><i class="fab fa-linkedin"></i> LinkedIn</a>
                    </div>
                </div>
            </div>
        </div>
    
                    <!-- Posts Section -->
        <div class="mt-12">
            <h2 class="text-2xl font-bold mb-6">My Posts</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Post Item 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="/images/mypost1.jpg" alt="Post Image" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <p class="text-sm font-bold text-purple-600 uppercase">Fitness</p>
                        <h3 class="text-lg font-bold text-gray-900 mt-2">5 Essential Pilates Moves to Strengthen Your Core</h3>
                        <p class="text-gray-600 mt-4">
                            Discover the best Pilates exercises to build core strength, improve posture, and increase flexibility. Perfect for beginners and experienced practitioners alike.
                        </p>
                        <a href="#" class="text-blue-600 font-bold hover:underline mt-4 inline-block">Read More ></a>
                    </div>
                </div>
                <!-- Post Item 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="/images/mypost2.jpg" alt="Post Image" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <p class="text-sm font-bold text-purple-600 uppercase">Health</p>
                        <h3 class="text-lg font-bold text-gray-900 mt-2">The Benefits of Staying Active While Studying</h3>
                        <p class="text-gray-600 mt-4">
                            Balancing studies and staying active can boost your mental clarity and physical health. Learn tips to integrate fitness into your daily student routine.
                        </p>
                        <a href="#" class="text-blue-600 font-bold hover:underline mt-4 inline-block">Read More ></a>
                    </div>
                </div>
            </div>
        </div>
    </main>

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
