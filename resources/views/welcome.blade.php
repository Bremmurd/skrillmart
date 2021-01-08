<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Skrillmart | Online Referral System</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,700;1,300;1,700&display=swap" rel="stylesheet"> 

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <style>
            body {
                font-family: 'Open Sans', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="bg-gradient-to-l h-4 from-green-400 to-blue-500"></div>
        <div class="relative min-h-screen bg-gray-200 dark:bg-gray-800">
            <div class="px-32 py-5 bg-gray-800 sticky top-0">
                <section class="scrollspy flex items-center justify-between" id="home">
                    <div class="logo">
                        <img src="/images/logo.png" class="h-10">
                    </div>
                    <div class="menu-items">
                        <a href="/" class="ml-5 text-gray-300 hover:text-indigo-600 border-b-2 border-transparent hover:border-indigo-600 p-1">Home</a>
                        <a href="/" class="ml-5 text-gray-300 hover:text-indigo-600 border-b-2 border-transparent hover:border-indigo-600 p-1">Services</a>
                        <a href="/" class="ml-5 text-gray-300 hover:text-indigo-600 border-b-2 border-transparent hover:border-indigo-600 p-1">Pricing</a>
                        <a href="/" class="ml-5 text-gray-300 hover:text-indigo-600 border-b-2 border-transparent hover:border-indigo-600 p-1">Blogs</a>
                        <a href="/" class="ml-5 text-gray-300 hover:text-indigo-600 border-b-2 border-transparent hover:border-indigo-600 p-1">Testimonials</a>
                        <a href="/login" class="ml-5 text-gray-300 hover:text-indigo-600 border-b-2 border-transparent hover:border-indigo-600 p-1">Login</a>
                        <a href="/register" class="ml-5 text-white bg-indigo-500 hover:bg-indigo-700 transition duration-500 ease-in-out px-4 py-2 rounded-full">Register</a>
                    </div>
                </section>
            </div>
            <div class="hero-section bg-gradient-to-r from-green-400 to-blue-500">
                <div class="flex px-32 py-24">
                    <div class="w-1/2">
                        <div class="text-indigo-600 text-lg font-bold mb-8 mt-12">Skrillmart Agencies Kenya</div>
                        <div class="text-5xl text-gray-800">
                            Trivia and Blogging Digital Marketing Agency
                        </div>
                        <div class="text-white mt-8">At Skrillmart we provide chances for our users to Earn more by Paying through blogs and Trivia</div>
                        <div class="mt-10">
                            <a href="/"class="bg-transparent border-2 border-indigo-600 px-10 py-4 rounded-full text-white font-bold hover:bg-indigo-600">Login</a>
                            <a href="/" class="bg-indigo-600 px-8 py-4 rounded-full text-white font-bold hover:bg-indigo-800 ml-6">Register</a>
                        </div>
                    </div>
                    <div class="image w-1/2 ml-24">
                        <img src="/images/banner.jpg" class="rounded-xl">
                    </div>
                </div>
            </div>
            <div class="services px-32 py-24">
                <section class="scrollspy flex" id="services">
                    <div class="bg-white py-8 px-5 rounded-xl shadow-xl w-1/3">
                        <button class="icon bg-indigo-200 p-3 rounded-lg">
                            <svg class="w-10 h-10 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path></svg>
                        </button>
                        <div class="pt-5">
                            <div class="font-bold text-lg">
                                Earn Through Trivia Questions
                            </div>
                            <div class="text-gray-800 pt-4">
                                We have free Daily trivia Questions for our users, Earn upto Ksh 2000 from trivia questions
                            </div>
                        </div>
                    </div>
                    <div class="bg-white py-8 px-5 rounded-xl shadow-xl w-1/3 ml-8">
                        <button class="icon bg-yellow-200 p-3 rounded-lg">
                            <svg class="w-10 h-10 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                        </button>
                        <div class="pt-5">
                            <div class="font-bold text-lg">
                                Earn Through Blogging
                            </div>
                            <div class="text-gray-800 pt-4">
                                Earn From Blogging, Write an Article or a Story and Earn Money upto Ksh 3000. Best Blogs are awarded Weekly *
                            </div>
                        </div>
                    </div>
                    <div class="bg-white py-8 px-5 rounded-xl shadow-xl w-1/3 ml-8">
                        <button class="icon bg-red-200 p-3 rounded-lg">
                            <svg class="w-10 h-10 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path></svg>
                        </button>
                        <div class="pt-5">
                            <div class="font-bold text-lg">
                                Earn Through Referrals
                            </div>
                            <div class="text-gray-800 pt-4">
                                Earn through referring other users to our site in levels. You will earn Ksh. 300 for every referral at the very least.
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="about-us bg-white px-24 py-20">
                <section class="scrollspy flex" id="about-us">
                    <div class="w-1/2">
                        <img src="/images/about1.png" alt="">
                    </div>
                    <div class="w-1/2 ml-10">
                        <div class="mt-5">
                            <div class="text-indigo-600 font-bold mb-4">Who we are</div>
                            <div class="text-3xl font-bold">We Are Supporting All Kind Of Online Services Since 2020</div>
                            <div class="mt-4 text-gray-800">
                                We Are an online company with the aimof providing as many digital products as possible to our clients including Trivia questions site, Blogging services,Free Ebook, Free spins and many more. We will be introducing other Featureas like Advertising and other products to our client
                            </div>
                            <div class="mt-20">
                                <a href="/register" class="bg-indigo-500 text-white px-8 py-4 rounded-full shadow-lg">Register</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="pricing bg-gray-200 px-32 py-20">
                <section class="scrollspy" id="pricing">
                    <div class="flex justify-center flex-col">
                        <div class="text text-center">
                            <div class="text-indigo-600 font-bold mb-4">Our Pricing</div>
                            <div class="text-3xl font-bold">Suitable And Nice Pricing Plan <br> With Our Top Services</div>
                            <div class="mt-4 text-gray-800">
                                But I must explain to you how all this mistaken idea of denouncing pleasure and praising <br> pain was born and I will give you a complete account.
                            </div>
                        </div>
                        <div class="mx-48">
                            <div class="my-10 mx-32 bg-white rounded-lg shadow-xl px-5 py-8">
                                <div class="text-center border-b bordergray-500 pb-10">
                                    <div class="font-bold mb-5">Platinum</div>
                                    <div class="text-indigo-600 text-3xl font-bold mb-4">Ksh 5,500</div>
                                    <div class="text-gray-700">One Time Fee</div>
                                </div>
                                <div class="offers pt-10 pl-10">
                                    <ul>
                                        <li class="flex mb-3">
                                            <svg class="w-6 h-6 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                            Limited Trips
                                        </li>
                                        <li class="flex mb-3">
                                            <svg class="w-6 h-6 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                            Available Trip History
                                        </li>
                                        <li class="flex mb-3">
                                            <svg class="w-6 h-6 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                            1 Offer per Month
                                        </li>
                                        <li class="flex mb-3">
                                            <svg class="w-6 h-6 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                            No Free Trip
                                        </li>
                                        <li class="flex mb-3">
                                            <svg class="w-6 h-6 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                            Membership Card
                                        </li>
                                        <li class="flex mb-3">
                                            <svg class="w-6 h-6 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                            Trip Cancellation
                                        </li>
                                        <li class="flex mb-3">
                                            <svg class="w-6 h-6 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                            Custom Services
                                        </li>
                                        <li class="flex mb-3">
                                            <svg class="w-6 h-6 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                            Money Return
                                        </li>
                                    </ul>
                                </div>
                                <div class="flex justify-center mt-10">
                                    <a href="/" class="border border-indigo-600 text-indigo-600 rounded-full px-8 py-4 font-bold hover:bg-yellow-300 hover:text-white hover:border-yellow-300">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="bg-gray-800 px-32 pt-10 pb-20">
                <section class="scrollspy" id="contact">
                    <div class="flex justify-between py-20 border-b-2 border-gray-500">
                        <div class="logo flex items-center text-4xl">
                            <img src="/images/logo.png" class="h-10 w-10 mr-5">
                            <div class="text-gray-500 font-bold">Skrillmart</div>
                        </div>
                    </div>
                    <div class="bottombar flex justify-center mt-10">
                        <div class="text-center text-gray-600">
                            &copy; 2020 All Right Reserved, Skrillmart
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </body>
</html>