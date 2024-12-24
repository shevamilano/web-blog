<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
            <button class="bg-yellow-400 text-black px-4 py-2 rounded font-bold hover:bg-yellow-300">Subscribe</button>
        </div>
    </header>

    <!-- Contact Us Section -->
    <main class="py-12">
        <div class="container mx-auto px-4">
            <!-- Title and Description -->
            <div class="text-center mb-12">
                <h2 class="text-lg font-bold text-gray-600 uppercase">Contact Us</h2>
                <h1 class="text-3xl font-bold text-gray-900 mb-4">Let’s Start a Conversation</h1>
                <p class="text-gray-600">
                    Kami siap membantu Anda dengan segala kebutuhan terkait kesehatan, kebugaran, dan layanan kami di Pilato Club. Jangan ragu untuk menghubungi kami kapan saja!
                </p>
            </div>

            <!-- Contact Info -->
            <div class="bg-yellow-400 text-black rounded-lg shadow-lg p-8 mb-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Working Hours -->
                    <div>
                        <h3 class="text-lg font-bold">Working Hours</h3>
                        <p class="mt-4">
                            <strong>Monday To Friday</strong><br>
                            9:00 AM to 8:00 PM<br>
                            Support Team available 24/7
                        </p>
                    </div>
                    <!-- Contact Details -->
                    <div>
                        <h3 class="text-lg font-bold">Contact Us</h3>
                        <p class="mt-4">
                            <strong>+62 812 3456 7890</strong><br>
                            hello@pilatoclub.com
                        </p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <form action="/contact" method="POST" class="space-y-6 bg-white rounded-lg shadow-lg p-8">
                @csrf
                <!-- Full Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" 
                        required
                    >
                </div>
                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Your Email</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" 
                        required
                    >
                </div>
                <!-- Query Related -->
                <div>
                    <label for="query" class="block text-sm font-medium text-gray-700">Query Related</label>
                    <select 
                        id="query" 
                        name="query" 
                        class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400"
                        required
                    >
                        <option value="" disabled selected>Select a topic</option>
                        <option value="support">Support</option>
                        <option value="sales">Sales</option>
                        <option value="general">General Inquiry</option>
                    </select>
                </div>
                <!-- Message -->
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea 
                        id="message" 
                        name="message" 
                        rows="4" 
                        class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-yellow-400 focus:border-yellow-400" 
                        required
                    ></textarea>
                </div>
                <!-- Submit Button -->
                <div>
                    <button 
                        type="submit" 
                        class="w-full bg-gray-900 text-white py-3 px-6 rounded-md font-bold text-sm hover:bg-gray-800">
                        Send Message
                    </button>
                </div>
            </form>
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
