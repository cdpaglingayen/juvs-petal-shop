<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.js" defer></script>
    <link href="juvs_petals.ico" rel="icon" type="image/x-icon">
    <title>Juv's Petal Shop</title>
</head>

<body class="font-tahoma">

     <!-- Navigation Bar -->
     <div x-data="{ open: false }">
        <nav class="flex flex-row justify-between items-center px-10 py-5 shadow bg-fuschia text-white">
            <section class="flex">
                <img src="images/juvs-petals.png" alt="juvs petals" class="object-cover h-8 w-8 mr-4">
                <h3 class="text-2xl font-bold">JUV’S PETALS</h3>
            </section>
            <section class="hidden lg:block links">
                <ul class="flex space-x-10 text-lg">
                    <li><a href="https://www.doordash.com/store/juvs-petals-san-diego-23504656/13531546/?fbclid=IwAR3A5J3r7saDAYnk16mfNjATfFY05m4UwU5ClsNB1GBt-2kJbszanUXyCqU">Shop</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </section>        
            <section class="space-x-3 hidden lg:block socials">
                <a href="https://www.instagram.com/juvs.petals/"><i class="bi bi-instagram text-xl mr-2"></i></a>
                <a href="https://www.facebook.com/JuvsPetalsSanDiego"><i class="bi bi-facebook text-2xl mr-2"></i></a>
                <a href="https://www.doordash.com/store/juvs-petals-san-diego-23504656/13531546/?fbclid=IwAR3A5J3r7saDAYnk16mfNjATfFY05m4UwU5ClsNB1GBt-2kJbszanUXyCqU"><i class="bi bi-cart3 text-2xl mr-2"></i></a>
            </section>

        <!-- Mobile Menu Icon -->
        <section class="space-x-3 block lg:hidden">
                <button @click="open = !open" class="text-2xl text-white">
                    <i x-bind:class="{ 'bi-list': !open, 'bi-x': open }"></i> <!-- Bootstrap Hamburger Icon -->
                </button>
            </section>
        </nav>

        <!-- Mobile Menu (Initially Hidden) -->
        <div x-show="open" class="mobile-menu lg:hidden bg-fuschia text-white p-4" id="mobile-menu">
            <!-- Place your mobile menu items here -->
            <ul class="text-xl space-y-4">
                <li><a href="https://www.doordash.com/store/juvs-petals-san-diego-23504656/13531546/?fbclid=IwAR3A5J3r7saDAYnk16mfNjATfFY05m4UwU5ClsNB1GBt-2kJbszanUXyCqU">Shop</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li>
                    <a href="https://www.instagram.com/juvs.petals/"><i class="bi bi-instagram text-xl mr-2"></i></a>
                    <a href="https://www.facebook.com/JuvsPetalsSanDiego"><i class="bi bi-facebook text-2xl mr-2"></i></a>
                    <a href="https://www.doordash.com/store/juvs-petals-san-diego-23504656/13531546/?fbclid=IwAR3A5J3r7saDAYnk16mfNjATfFY05m4UwU5ClsNB1GBt-2kJbszanUXyCqU"><i class="bi bi-cart3 text-2xl mr-2"></i></a>
                </li>
            </ul>
        </div>
    </div>
    
    <!-- <div class="mt-4"> -->
    <div>
        @if($errors->any())
        <div class="col-12">
            @foreach($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$error}}

            </div>
            @endforeach
        </div>
        @endif

        @if(session()->has('error'))
        <div id="alert-2" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                A simple info alert with an <a href="#" class="font-semibold underline hover:no-underline">example link</a>. Give it a click if you like.
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
        {{session('error')}}

    </div>
    @endif

    @if(session()->has('success'))
    <div id="alert-3" class="flex items-center p-4 mb-4 text-white rounded-lg bg-green dark:bg-gray-800 dark:text-green-400" role="alert">
        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>
        <span class="sr-only">Info</span>
        <div class="ml-3 text-sm font-medium">
            {{session('success')}}
        </div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green text-white rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const closeButton = document.querySelector('[data-dismiss-target="#alert-3"]');
            const alert = document.getElementById('alert-3');

            if (closeButton && alert) {
                closeButton.addEventListener('click', function() {
                    alert.style.display = 'none';
                });
            }
        });
    </script>
    @endif

    </div>
<!-- Hero -->
<section class="bg-gray flex items-center justify-center py-16">
    <div class="container mx-auto flex flex-col md:flex-row items-center md:items-start justify-between">
        <div class="md:w-1/2 text-center md:text-left px-6 md:px-16 mb-8 md:mb-0">

            <h3 class="text-5xl font-bold text-fuschia mb-4">Discover the Blooms</h3>
            <p class="text-lg mb-6">Embrace the beauty with our exquisite collection of handpicked flowers. Each blossom tells a story, and we can't wait to help you find the perfect one for your special occasion.</p>
            <div class="flex flex-col md:flex-row">
                <a href="#contact" class="bg-fuschia border-2 border-fuschia hover:bg-darkgray hover:border-darkgray text-white font-bold py-2 px-4 rounded-md mb-2 md:mb-0 md:mr-4">Learn More</a>
                <a href="https://www.doordash.com/store/juvs-petals-san-diego-23504656/13531546/?fbclid=IwAR3A5J3r7saDAYnk16mfNjATfFY05m4UwU5ClsNB1GBt-2kJbszanUXyCqU" class="border-2 border-fuschia hover:bg-darkgray hover:border-darkgray hover:text-white text-darkgray font-bold py-2 px-4 rounded-md">Shop Now</a>
            </div>
        </div>
        <div class="md:w-1/2">
            <img src="images/flower1.jpg" alt="flower hero" class="object-cover w-full h-auto md:h-auto md:max-w-md shadow-lg md:mx-auto">
        </div>
    </div>
</section>

    <!-- Services -->
    <section class="py-16 px-6 bg-fuschia text-white">
        <h3 class="text-3xl font-bold text-center">Experience Nature's Artistry!</h3>
        <section class="grid grid-cols-1 md:grid-cols-3 mt-10">
            <div class="text-center">
                <img src="images/flower2.jpg" alt="flower 1" class="mx-auto object-cover" width="300" height="400">
                <p class="mt-4 text-lg font-semibold">Welcome to Juv's Blossom Paradise!</p>
            </div>
            <div class="text-center">
                <img src="images/flower3.jpg" alt="flower 2" class="mx-auto object-cover" width="300" height="400">
                <p class="mt-4 text-lg font-semibold">Check out our Blooming Beauties!</p>
            </div>
            <div class="text-center">
                <img src="images/flower-basket.jpg" alt="flower 3" class="mx-auto object-cover" style="width: 320px; height: 400px;">
                <p class="mt-4 text-lg font-semibold">Discover the Floral Delights!</p>
            </div>
        </section>
    </section>

    <!-- Welcome -->
    <section class="px-6 bg-gray" id="about">
        <section class="flex flex-col md:flex-row items-center md:items-start justify-between">
            <div class="md:w-1/2 text-center md:text-left px-16 py-20">
                <h3 class="text-3xl font-bold text-fuschia">Welcome to Our Bloomin' World!</h3><br>
                <p class="text-lg">Indulge in the fragrance of our floral paradise. Our passion for flowers is as vibrant as a garden in full bloom. Let us sprinkle some flower power into your life and create moments that are as beautiful as a field of wildflowers.</p>
                <div class="mt-6">
                    <a href="#contact" class="bg-fuschia hover:bg-darkgray text-white font-bold  py-2 px-4 rounded-md">Learn More</a>
                </div>
            </div>
            <div class="md:w-1/2 mt-6 md:mt-0">
                <img src="images/flower1.jpg" alt="flower hero" class="object-cover w-full h-auto md:h-auto md:max-w-md shadow-lg md:mx-auto">
            </div>
        </section>
    </section>

    @include('pricing')

    <!-- Sample -->
    <section class="py-16 pr-6 bg-gray">
        <h1 class="text-3xl font-bold text-center text-fuschia">Experience the Beauty of Our Flower Services</h1>
        <section class=" grid md:grid-cols-3 mt-10 place-items-center">
            <img src="images/basic-service.jpg" alt="cta image 1" class="object-cover w-full h-full pl-6">
            <img src="images/advanced-service.jpg" alt="cta image 2" class="object-cover w-full h-full pl-6">
            <img src="images/intermediate-service.jpg" alt="cta image 3" class="object-cover w-full h-full pl-6">
        </section>
    </section>

    <!-- Call to Action -->
    <section class="py-16 pr-6 bg-fuschia">
        <h1 class="text-3xl text-center text-gray">GET READY TO DIVE INTO THE WONDERFUL WORLD OF FLOWERS!</h1>
        <section class=" grid md:grid-cols-4 mt-10 place-items-center">
            <img src="images/flower6.jpg" alt="cta image 1" class="object-cover w-full h-full pl-6">
            <img src="images/flower7.jpg" alt="cta image 2" class="object-cover w-full h-full pl-6">
            <img src="images/flower8.jpg" alt="cta image 3" class="object-cover w-full h-full pl-6">
            <img src="images/flower1.jpg" alt="cta image 4" class="object-cover w-full h-full pl-6">
        </section>
        <section class="text-center pt-12">
            <a href="#contact" class="border-2 border-white hover:bg-darkgray hover:border-darkgray hover:text-white text-white font-bold py-2 px-4 rounded-md mx-2">Learn More</a>
            <a href="https://www.facebook.com/JuvsPetalsSanDiego" class="border-2 border-white hover:bg-darkgray hover:border-darkgray hover:text-white text-white font-bold py-2 px-4 rounded-md mx-2">Socials</a>
        </section>
    </section>

    <!-- Contact Form -->
    <section class="bg-white" id="contact">
        <section class="flex flex-col md:flex-row items-center md:items-start">
            <div class="pt-4 px-12 md:w-1/2 text-center md:text-left mr-4 ">
                <h3 class="text-4xl font-bold py-4 text-fuschia font-sans ">Get Started</h3>
                <form action="{{route('contact')}}" method="post" class="mt-2">
                    @csrf

                    <label for="first_name" class="text-sm text-gray-600">Name (Required)</label>
                    <div class="flex space-x-4">
                        <div class="w-1/2">
                            <label for="first_name" class="text-sm">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="w-full p-2 border border-gray-300 rounded-md" required>
                        </div>
                        <div class="w-1/2">
                            <label for="last_name" class="text-sm text-gray-600">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="w-full p-2 border border-gray-300 rounded-md" required>
                        </div>
                    </div>
                    <label for="email" class="text-sm text-gray-600">Email (Required)</label>
                    <input type="email" name="email" id="email" class="w-full p-2 border border-gray-300 rounded-md" required>
                    <label for="subject" class="text-sm text-gray-600">Subject (Required)</label>
                    <input type="text" name="subject" id="subject" class="w-full p-2 border border-gray-300 rounded-md" required>
                    <label for="message" class="text-sm text-gray-600">Message (Required)</label>
                    <textarea name="message" id="message" cols="20" rows="4" class="w-full p-2 border border-gray-300 rounded-md"></textarea>
                    <button type="submit" class="bg-fuschia , hover:bg-fuschia text-white font-bold py-1.5 mt-4 px-4 rounded-md ">Send</button>
                </form>
            </div>
            <div class="py-10 px-16 md:w-1/2 text-center md:text-left bg-gray ">
                <ul>
                    <li class="flex items-left space-x-4 py-12 mb-2.5">
                        <i class="bi bi-geo-alt-fill text-fuschia text-3xl"></i>
                        <p class="text-md text-darkgray font-bold text-2xl ">11745 Plaza Crest Ridge Road San Diego</p>
                    </li>
                    <li class="flex items-left space-x-4 text-fuschia py-12 mb-2">
                        <i class="bi bi-clock-fill text-3xl"></i>
                        <p class="text-md text-darkgray font-bold  text-2xl ">Monday to Friday at 8:00am - 6:00 pm</p>
                    </li>
                    <li class="flex items-left space-x-4 text-fuschia py-12 ">
                        <i class="bi bi-telephone-fill text-3xl "></i>
                        <p class="  text-darkgray font-bold text-2xl mb-12 ">Juvspetals6@gmail.com</p>
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