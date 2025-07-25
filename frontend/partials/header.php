<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</head>
<body>
  <!-- Navbar with Mega Menu -->
  <nav class="bg-white shadow-lg">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex-shrink-0 flex items-center">
            <!-- <img class="blsock h-8 w-auto" src="https://tailwindflex.com/images/logo.svg" alt="Logo"> -->
            <span class="ml-2 text-xl font-bold text-gray-800">Navbar!!</span>
          </div>
          <div class="hidden sm:block sm:ml-6">
            <div class="flex space-x-4">
              <a href="#" class="text-gray-900 hover:bg-gray-100 px-3 py-2 rounded-md text-sm font-medium">Home</a>

              <!-- Products Dropdown Trigger -->
              <div class="relative group">
            

                <!-- Mega Menu -->
                <div
                  class="absolute left-0 mt-2 w-screen max-w-6xl bg-white border border-gray-200 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 transform -translate-x-1/4">
                  <div class="grid grid-cols-1 md:grid-cols-3 gap-8 p-6">
                    <div>
                      <h3 class="text-lg font-semibold text-gray-900 mb-4">Software</h3>
                      <ul class="space-y-3">
                        <li><a href="#" class="text-gray-600 hover:text-indigo-600">Web Development</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-indigo-600">Mobile Apps</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-indigo-600">Desktop Software</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-indigo-600">Enterprise Solutions</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-indigo-600">API Services</a></li>
                      </ul>
                    </div>
                    <div>
                      <h3 class="text-lg font-semibold text-gray-900 mb-4">Hardware</h3>
                      <ul class="space-y-3">
                        <li><a href="#" class="text-gray-600 hover:text-indigo-600">Laptops</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-indigo-600">Desktops</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-indigo-600">Tablets</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-indigo-600">Accessories</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-indigo-600">Networking</a></li>
                      </ul>
                    </div>
                    <div>
                      <h3 class="text-lg font-semibold text-gray-900 mb-4">Featured</h3>
                      <div class="bg-gray-100 p-4 rounded-lg">
                        <img src="https://images.unsplash.com/photo-1546435770-a3e426bf472b?q=80&w=2065&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Featured Product" class="rounded-lg mb-3">
                        <h4 class="font-medium text-gray-900">New Release</h4>
                        <p class="text-sm text-gray-600 mb-2">Check out our latest product offering with advanced
                          features.</p>
                        <a href="#" class="text-indigo-600 hover:text-indigo-800 text-sm font-medium">Learn more →</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <a href="#" class="text-gray-900 hover:bg-gray-100 px-3 py-2 rounded-md text-sm font-medium">Services</a>
              <a href="#" class="text-gray-900 hover:bg-gray-100 px-3 py-2 rounded-md text-sm font-medium">About</a>
              <a href="#" class="text-gray-900 hover:bg-gray-100 px-3 py-2 rounded-md text-sm font-medium">Contact</a>
            </div>
          </div>
        </div>
       <?php
       if (!isset($_SESSION['user'])) {
            echo <<< e
                 <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
              <div class="hidden sm:flex sm:items-center">
                <a href="./login.php" class="text-gray-900 hover:bg-gray-100 px-3 py-2 rounded-md text-sm font-medium">Login</a>
                <a href="./signup.php"
                  class="ml-4 bg-indigo-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-indigo-700">Sign
                  Up</a>
              </div>

              <!-- Mobile menu button -->
              <div class="sm:hidden">
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false" id="mobile-menu-button">
                                <span class="sr-only">Open main menu</span>
                                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
              </div>
            </div>
            
            e;
       }
       else{
        echo "<a class='text-blue-700 mr-3' href=''>{$_SESSION['user'][0]['name']}</a>";
        echo "<a class='text-blue-700' href='../backend/logout.php'>Logout</a>";
       }
       
       ?>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state -->
    <div class="sm:hidden hidden" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <a href="#" class="bg-gray-100 text-gray-900 block px-3 py-2 rounded-md text-base font-medium">Home</a>

        <!-- Mobile Products Dropdown -->
        <div class="relative">
          <button class="w-full text-left text-gray-900 hover:bg-gray-100 px-3 py-2 rounded-md text-base font-medium flex items-center justify-between mobile-dropdown-trigger">
                        Products
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
          <div class="hidden px-4 py-2 mobile-dropdown-content">
            <div class="border-l-2 border-indigo-500 pl-2 mb-4">
              <h4 class="font-medium text-gray-900 mb-2">Software</h4>
              <ul class="space-y-2">
                <li><a href="#" class="text-gray-600 hover:text-indigo-600 block">Web Development</a></li>
                <li><a href="#" class="text-gray-600 hover:text-indigo-600 block">Mobile Apps</a></li>
                <li><a href="#" class="text-gray-600 hover:text-indigo-600 block">Desktop Software</a></li>
              </ul>
            </div>
            <div class="border-l-2 border-indigo-500 pl-2">
              <h4 class="font-medium text-gray-900 mb-2">Hardware</h4>
              <ul class="space-y-2">
                <li><a href="#" class="text-gray-600 hover:text-indigo-600 block">Laptops</a></li>
                <li><a href="#" class="text-gray-600 hover:text-indigo-600 block">Desktops</a></li>
                <li><a href="#" class="text-gray-600 hover:text-indigo-600 block">Accessories</a></li>
              </ul>
            </div>
          </div>
        </div>

        <a href="#"
          class="text-gray-900 hover:bg-gray-100 block px-3 py-2 rounded-md text-base font-medium">Services</a>
        <a href="#" class="text-gray-900 hover:bg-gray-100 block px-3 py-2 rounded-md text-base font-medium">About</a>
        <a href="#" class="text-gray-900 hover:bg-gray-100 block px-3 py-2 rounded-md text-base font-medium">Contact</a>

                <div class="pt-4 pb-3 border-t border-gray-200">
              <div class="flex items-center px-3 space-y-2 flex-col">
                <a href="./login.php"
                  class="block w-full text-center text-gray-900 bg-gray-100 px-3 py-2 rounded-md text-base font-medium">
                  Login
                </a>
                <a href="./signup.php"
                  class="block w-full text-center bg-indigo-600 text-white px-3 py-2 rounded-md text-base font-medium">
                  Sign Up
                </a>
              </div>
            </div>
      </div>
    </div>
  </nav>



  <!-- https://github.com/ahmed0x99/G87 -->