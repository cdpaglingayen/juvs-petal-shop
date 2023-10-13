<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <title>Juv's Petal Shop</title>
</head>
<body>
  <!-- Navigation Bar -->
  <nav class="flex flex-row justify-between items-center p-5 shadow">
      <h3 class="text-xl font-bold">JUV’S PETALS</h3>
      <section>
          <ul class="flex space-x-10 text-sm">
              <li><a href="#">Shop</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
          </ul>
      </section>
      <section class="space-x-3">
          <a href="#"><i class="bi bi-instagram text-xl"></i></a>
          <a href="#"><i class="bi bi-cart3 text-xl"></i></a>
      </section>
  </nav>

  <!-- Hero -->
  <section class="py-16 px-6 bg-gray-100">
      <section class="flex flex-col md:flex-row items-center md:items-start justify-between">
          <div class="md:w-1/2 text-center md:text-left">
              <h3 class="text-3xl font-bold">Discover the Blooms</h3>
              <p class="text-lg">Embrace the beauty with our exquisite collection of handpicked flowers. Each blossom tells a story, and we can't wait to help you find the perfect one for your special occasion</p>
              <div class="mt-6">
                  <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md mx-2">Learn More</a>
                  <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md mx-2">Shop Now</a>
              </div>
          </div>
          <div class="md:w-1/2 mt-6 md:mt-0">
              <img src="https://placehold.co/300x300" alt="flower hero" class="w-full rounded-lg shadow-lg">
          </div>
      </section>
  </section>

  <!-- Services -->
  <section class="py-16 px-6">
      <h3 class="text-3xl font-bold text-center">Experience Nature's Artistry!</h3>
      <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">
          <div class="text-center">
              <img src="https://placehold.co/200x200" alt="flower 1" class="mx-auto w-40 h-40 rounded-full">
              <p class="mt-4 text-lg font-semibold">Welcome to Juv's Blossom Paradise!</p>
          </div>
          <div class="text-center">
              <img src="https://placehold.co/200x200" alt="flower 2" class="mx-auto w-40 h-40 rounded-full">
              <p class="mt-4 text-lg font-semibold">Check out our Blooming Beauties!</p>
          </div>
          <div class="text-center">
              <img src="https://placehold.co/200x200" alt="flower 3" class="mx-auto w-40 h-40 rounded-full">
              <p class="mt-4 text-lg font-semibold">Discover the Floral Delights!</p>
          </div>
      </section>
  </section>

  <!-- Welcome -->
  <section class="py-16 px-6 bg-gray-100">
      <section class="flex flex-col md:flex-row items-center md:items-start justify-between">
          <div class="md:w-1/2 text-center md:text-left">
              <h3 class="text-3xl font-bold text-red-700">Welcome to our bloomin' world!</h3>
              <p class="text-lg">Indulge in the fragrance of our floral paradise. Our passion for flowers is as vibrant as a garden in full bloom. Let us sprinkle some flower power into your life and create moments that are as beautiful as a field of wildflowers.</p>
              <div class="mt-6">
                  <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md mx-2">Learn More</a>
              </div>
          </div>
          <div class="md:w-1/2 mt-6 md:mt-0">
              <img src="https://placehold.co/400x400" alt="welcome image" class="w-full rounded-lg shadow-lg">
          </div>
      </section>
  </section>

  <!-- Pricing -->
  <section class="py-16 px-6">
      <section class="text-center">
          <h3 class="text-3xl font-bold">Welcome to Juv's Flower Shop</h3>
          <p class="text-lg">Choose Your best Service</p>
      </section>
      <section class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-10">
          <div class="text-center">
              <h5 class="text-2xl font-semibold">Basic Service</h5>
              <hr class="border-2 border-blue-500 my-4">
              <h1 class="text-4xl font-bold">$99</h1>
              <p>Flower bouquets carefully crafted with love and attention. We guarantee the freshest flowers at the best prices.</p>
              <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md mt-4">Get Started</a>
          </div>
          <div class="text-center">
              <h5 class="text-2xl font-semibold">Advanced Service</h5>
              <hr class="border-2 border-blue-500 my-4">
              <h1 class="text-4xl font-bold">$199</h1>
              <p>Elevate your floral experience with our premium selection of flower arrangements. Perfect for any special occasion.</p>
              <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md mt-4">Get Started</a>
          </div>
          <div class="text-center">
              <h5 class="text-2xl font-semibold">Intermediate Service</h5>
              <hr class="border-2 border-blue-500 my-4">
              <h1 class="text-4xl font-bold">$149</h1>
              <p>Be amazed by our exclusive collection of rare and exotic blooms. These flowers will truly make a statement.</p>
              <a href="#" class="bg-blue-500 hoverbg-blue-600 text-white font-bold py-2 px-4 rounded-md mt-4">Get Started</a>
          </div>
      </section>
  </section>

  <!-- Call to Action -->
  <section class="py-16 px-6 bg-gray-100">
      <h1 class="text-3xl text-center">GET READY TO DIVE INTO THE WONDERFUL WORLD OF FLOWERS!</h1>
      <section class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-10">
          <img src="https://placehold.co/100x100" alt="cta image 1" class="w-16 h-16">
          <img src="https://placehold.co/100x100" alt="cta image 2" class="w-16 h-16">
          <img src="https://placehold.co/100x100" alt="cta image 3" class="w-16 h-16">
          <img src="https://placehold.co/100x100" alt="cta image 4" class="w-16 h-16">
      </section>
      <section class="text-center mt-6">
          <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md mx-2">Learn More</a>
          <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md mx-2">Socials</a>
      </section>
  </section>

  <!-- Contact Form -->
  <section class="py-16 px-6 bg-slate-500">
      <section class="flex flex-col md:flex-row items-center md:items-start">
          <div class="md:w-1/2 text-center md:text-left bg-blue-300">
              <h3 class="text-3xl font-bold">Greet Us</h3>
              <form action="#" method="post" class="mt-6">
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
                  <textarea name="message" id="message" cols="20" rows="4" class="w-full p-2 border border-gray-300 rounded-md mb-2.5"></textarea>
                  <a href="#" class="bg-black , hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md ">Send</a>
              </form>
          </div>
          <div class="md:w-1/2 text-center  p-36 md:text-left  bg-red-200 ">
              <ul>
                  <li class="flex items-left space-x-4 p-3">
                      <i class="bi bi-geo-alt-fill text-3xl"></i>
                      <p class="text-md  font-bold ">123 Demo Street New York, NY 12345</p>
                  </li>
                  <li class="flex items-left space-x-4 p-3">
                      <i class="bi bi-clock-fill text-2xl"></i>
                      <p class="text-md font-bold ">Monday - Friday 6:30am-11pm</p>
                  </li>
                  <li class="flex items-left space-x-4 p-3 ">
                      <i class="bi bi-telephone-fill text-2xl"></i>
                      <p class="text-lg  font-bold ">email@example.com (555) 555-5555</p>
                  </li>
              </ul>
          </div>
      </section>
  </section>

  <!-- Footer -->
  <footer class="text-center py-6">
      <h5 class="text-sm">&copy; 2023 JUV’S PETAL SHOP</h5>
  </footer>
</body>
</html>