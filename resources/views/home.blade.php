<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="juvs_petals.ico" rel="icon" type="image/x-icon">
    <title>Juv's Petal Shop</title>
</head>

<body class=" font-tahoma">
    <!-- Navigation Bar -->
    <nav class="flex flex-row justify-between items-center px-10 py-5 shadow bg-fuschia text-white">
        <section class="flex">
            <img src="images/juvs-petals.png" alt="juvs petals" class="object-cover h-8 w-8 mr-4">
            <h3 class="text-2xl font-bold">JUV’S PETALS</h3>
        </section>
        <section>
            <ul class="flex space-x-10 text-lg">
                <li><a href="#">Shop</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </section>
        <section class="space-x-3">
            <a href="#"><i class="bi bi-instagram text-xl mr-2"></i></a>
            <a href="#"><i class="bi bi-cart3 text-2xl mr-4"></i></a>
        </section>
    </nav>

    <!-- Hero -->
    <section class="py-16 px-6 bg-gray">
        <section class="flex flex-col md:flex-row items-center md:items-start justify-between">
            <div class="md:w-1/2 text-center md:text-left px-16 py-20">
                <h3 class="text-5xl font-bold text-fuschia">Discover the Blooms</h3><br>
                <p class="text-lg">Embrace the beauty with our exquisite collection of handpicked flowers. Each blossom tells a story, and we can't wait to help you find the perfect one for your special occasion</p>
                <div class="mt-6">
                    <a href="#" class="bg-fuschia border-2 border-fuschia hover:bg-darkgray hover:border-darkgray text-white font-bold py-2 px-4 rounded-md">Learn More</a>
                    <a href="#" class="border-2 border-fuschia hover:bg-darkgray hover:border-darkgray hover:text-white text-darkgray font-bold py-2 px-4 rounded-md ml-4">Shop Now</a>
                </div>
            </div>
            <div class="md:w-1/2 mt-6 md:mt-0">
                <img src="images/discover-the-bloom.jpg" alt="flower hero" class="object-cover h-96 w-full rounded-lg shadow-lg">
            </div>
        </section>
    </section>

    <!-- Services -->
    <section class="py-16 px-6 bg-fuschia text-white">
        <h3 class="text-3xl font-bold text-center">Experience Nature's Artistry!</h3>
        <section class="grid grid-cols-1 md:grid-cols-3 mt-10">
            <div class="text-center">
                <img src="images/fl-1.jpg" alt="flower 1" class="mx-auto object-cover w-40 h-40 rounded-full">
                <p class="mt-4 text-lg font-semibold">Welcome to Juv's Blossom Paradise!</p>
            </div>
            <div class="text-center">
                <img src="images/fl-2.jpg" alt="flower 2" class="mx-auto object-cover w-40 h-40 rounded-full">
                <p class="mt-4 text-lg font-semibold">Check out our Blooming Beauties!</p>
            </div>
            <div class="text-center">
                <img src="images/fl-3.jpg" alt="flower 3" class="mx-auto object-cover w-40 h-40 rounded-full">
                <p class="mt-4 text-lg font-semibold">Discover the Floral Delights!</p>
            </div>
        </section>
    </section>

    <!-- Welcome -->
    <section class="py-16 px-6 bg-gray">
        <section class="flex flex-col md:flex-row items-center md:items-start justify-between">
            <div class="md:w-1/2 text-center md:text-left px-16 py-20">
                <h3 class="text-3xl font-bold text-fuschia">Welcome to Our Bloomin' World!</h3><br>
                <p class="text-lg">Indulge in the fragrance of our floral paradise. Our passion for flowers is as vibrant as a garden in full bloom. Let us sprinkle some flower power into your life and create moments that are as beautiful as a field of wildflowers.</p>
                <div class="mt-6">
                    <a href="#" class="bg-fuschia hover:bg-darkgray text-white font-bold  py-2 px-4 rounded-md">Learn More</a>
                </div>
            </div>
            <div class="md:w-1/2 mt-6 md:mt-0">
                <img src="images/bloomin-world.jpg" alt="welcome image" class="object-cover h-96 w-full rounded-lg shadow-lg">
            </div>
        </section>
    </section>

    @include('pricing')

    <!-- Call to Action -->
    <section class="py-16 px-6 bg-fuschia">
        <h1 class="text-3xl text-center text-gray">GET READY TO DIVE INTO THE WONDERFUL WORLD OF FLOWERS!</h1>
        <section class=" grid md:grid-cols-4 mt-10 place-items-center">
            <img src="images/fl-6.jpg" alt="cta image 1" class="object-cover w-64 h-48 rounded-xl border-8 border-white">
            <img src="images/fl-5.jpg" alt="cta image 2" class="object-cover w-64 h-48 rounded-xl border-8 border-white">
            <img src="images/fl-4.jpg" alt="cta image 3" class="object-cover w-64 h-48 rounded-xl border-8 border-white">
            <img src="images/fl-7.jpg" alt="cta image 4" class="object-cover w-64 h-48 rounded-xl border-8 border-white">
        </section>
        <section class="text-center pt-12">
            <a href="#" class="border-2 border-white hover:bg-darkgray hover:border-darkgray hover:text-white text-white font-bold py-2 px-4 rounded-md mx-2">Learn More</a>
            <a href="#" class="border-2 border-white hover:bg-darkgray hover:border-darkgray hover:text-white text-white font-bold py-2 px-4 rounded-md mx-2">Socials</a>
        </section>
    </section>

    <!-- Contact Form -->
    <section class="bg-white">
        <section class="flex flex-col md:flex-row items-center md:items-start">
            <div class="pt-4 px-12 md:w-1/2 text-center md:text-left mr-4 ">
                <h3 class="text-4xl font-bold py-4 text-fuschia font-sans ">Greet Us</h3>
                <form action="{{route('contact')}}" method="post" class="mt-2">
                    @csrf
                    <label for="first_name" class="text-sm text-gray-600">Name (Required)</label>
                    <div class="flex space-x-4">
                        <div class="w-1/2">
                            <label for="first_name" class="text-sm">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="w-full p-2 border border-gray-300 rounded-md">
                        </div>
                        <div class="w-1/2">
                            <label for="last_name" class="text-sm text-gray-600">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="w-full p-2 border border-gray-300 rounded-md">
                        </div>
                    </div>
                    <label for="email" class="text-sm text-gray-600">Email (Required)</label>
                    <input type="email" name="email" id="email" class="w-full p-2 border border-gray-300 rounded-md">
                    <label for="subject" class="text-sm text-gray-600">Subject (Required)</label>
                    <input type="text" name="subject" id="subject" class="w-full p-2 border border-gray-300 rounded-md">
                    <label for="message" class="text-sm text-gray-600">Message (Required)</label>
                    <textarea name="message" id="message" cols="20" rows="4" class="w-full p-2 border border-gray-300 rounded-md "></textarea>
                    <button type="submit" class="bg-fuschia , hover:bg-fuschia text-white font-bold py-1.5 mt-4 px-4 rounded-md ">Send</button>
                </form>
            </div>
            <div class="py-10 px-16 md:w-1/2 text-center md:text-left bg-gray ">
                <ul>
                    <li class="flex items-left space-x-4 py-12 mb-2.5">
                        <i class="bi bi-geo-alt-fill text-fuschia text-3xl"></i>
                        <p class="text-md text-darkgray font-bold text-2xl ">123 Demo Street New York, NY 12345</p>
                    </li>
                    <li class="flex items-left space-x-4 text-fuschia py-12 mb-2">
                        <i class="bi bi-clock-fill text-3xl"></i>
                        <p class="text-md text-darkgray font-bold  text-2xl ">Monday - Friday at 6:30am - 11:00pm</p>
                    </li>
                    <li class="flex items-left space-x-4 text-fuschia py-12 ">
                        <i class="bi bi-telephone-fill text-3xl "></i>
                        <p class="  text-darkgray font-bold text-2xl mb-12 ">email@example.com (555) 555-5555</p>
                    </li>
                </ul>
            </div>
        </section>
    </section>

    <!-- Footer -->
    <footer class="text-center py-6 bg-fuschia text-white text-bold">
        <h5 class="text-sm">&copy; 2023 JUV’S PETAL SHOP</h5>
    </footer>
</body>

</html>
