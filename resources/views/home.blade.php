@extends('layouts.dashboard')

@section('contents')
        <div class="w-full bg-purple-100 rounded-tl-3xl pt-10 pb-12 px-10">
            <div class="flex justify-between items-center">
                <p class="header font-bold text-lg">Overview</p>
                <div class="left flex items-center">
                    <p class="text-gray-500 text-sm">See all</p>
                    <svg class="w-4 h-4 ml-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                </div>
            </div>
            <div class="tablets flex items-center mt-5">
                <div class="w-1/4 mr-3 bg-gray-800 rounded-lg px-8 py-5 shadow-xl flex items-center">
                    <div class="w-1/3">
                        <div class="bg-green-100 p-4 rounded-full">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                        </div>
                    </div>
                    <div class="2/3 ml-2">
                        <p class="font-bold text-gray-600 uppercase text-sm">Balance</p>
                        <p class="text-xl font-bold text-white">Ksh. {{ Auth::user()->profile->available_balance }}</p>
                    </div>
                </div>
                <div class="w-1/4 mr-3 bg-gray-800 rounded-lg px-8 py-5 shadow-xl flex items-center">
                    <div class="w-1/3">
                        <div class="bg-blue-100 p-4 rounded-full">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                        </div>
                    </div>
                    <div class="2/3 ml-2">
                        <p class="font-bold text-gray-600 uppercase text-sm">Referral</p>
                        <p class="text-xl font-bold text-white">Ksh. {{ Auth::user()->profile->refferal_earnings }}</p>
                    </div>
                </div>
                <div class="w-1/4 mr-3 bg-gray-800 rounded-lg px-8 py-5 shadow-xl flex items-center">
                    <div class="w-1/3">
                        <div class="bg-red-100 p-4 rounded-full">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        </div>
                    </div>
                    <div class="2/3 ml-2">
                        <p class="font-bold text-gray-600 uppercase text-sm">Blogging</p>
                        <p class="text-xl font-bold text-white">Ksh. {{ Auth::user()->profile->blogging_earnings }}</p>
                    </div>
                </div>
                <div class="w-1/4 bg-gray-800 rounded-lg px-8 py-5 shadow-xl flex items-center">
                    <div class="w-1/3">
                        <div class="bg-yellow-100 p-4 rounded-full">
                            <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                        </div>
                    </div>
                    <div class="2/3 ml-2">
                        <p class="font-bold text-gray-600 uppercase text-sm">Trivia</p>
                        <p class="text-xl font-bold text-white">Ksh. {{ Auth::user()->profile->trivia_earnings }}</p>
                    </div>
                </div>
            </div>
            <div class="flex">
                <div class="w-3/4 mt-8 mr-3">
                    <div class="flex justify-between items-center">
                        <p class="header font-bold text-lg">Today's Challenge</p>
                    </div>
                    <div class="hero rounded-lg mt-5">
                        <div class="bg-gray-800 py-8 px-5 rounded-lg shadow">
                            <div class="header flex mb-4">
                                <svg class="w-6 h-6 text-yellow-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                                <p class="text-yellow-500 font-bold">Refer upto 30 Users by 30<sup>th</sup> November</p>
                            </div>
                            <div class="info flex">
                                <div class="w-2/3 text-white">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ducimus asperiores similique quas distinctio!
                                    <div class="mt-3">
                                        <p class="text-sm uppercase font-bold text-gray-600">Benefits</p>
                                        <ul class="list-disc ml-5">
                                            <li class="text-yellow-500">Get free spin daily for 7 days</li>
                                            <li class="text-yellow-500">Get a referral bonus of Ksh 1200</li>
                                            <li class="text-yellow-500">Withdrawal fee is catered for once</li>
                                        </ul>
                                        <div class="mt-3 flex">
                                            <button type="button" class="mr-3 bg-yellow-500 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50 px-4 py-2 text-white rounded-md shadow-md uppercase tracking-wide flex items-center">
                                                <svg class="w-6 h-6 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                                {{ __('Accept') }}
                                            </button>
                                            <button type="button" class="bg-gray-200 hover:bg-red-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-gray-600 focus:ring-opacity-50 px-4 py-2 text-yellow-600 rounded-md shadow-md uppercase tracking-wide flex items-center">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                                {{ __('Reject') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <img src="/images/work.svg" alt="" class="w-1/3">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-1/4 mt-8">
                    <div class="flex justify-between items-center">
                        <p class="header font-bold text-lg">Trending Blogs</p>
                        <div class="left flex items-center">
                            <p class="text-gray-500 text-sm">See all</p>
                            <svg class="w-4 h-4 ml-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                        </div>
                    </div>
                    <div class="bg-gray-800 dark:bg-gray-800 py-8 px-5 rounded-lg shadow mt-5">
                        <a href="/" class="mb-3">
                            <div class="blog-item border-b border-gray-700 hover:bg-gray-700 p-1 rounded">
                                <p class="font-bold text-sm text-gray-500 uppercase mb-2">Amanda Joy</p>
                                <p class="text-sm mb-4 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, inventore...</p>
                                <div class="flex">
                                    <svg class="w-6 h-6 text-yellow-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                    <svg class="w-6 h-6 text-yellow-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                    <svg class="w-6 h-6 text-yellow-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                    <svg class="w-6 h-6 text-yellow-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                    <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                </div>
                            </div>
                        </a>
                        <a href="/">
                            <div class="blog-item border-b border-gray-700 hover:bg-gray-700 p-1 rounded">
                                <p class="font-bold text-sm text-gray-500 uppercase mb-2">John doe</p>
                                <p class="text-sm mb-4 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, inventore...</p>
                                <div class="flex">
                                    <svg class="w-6 h-6 text-yellow-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                    <svg class="w-6 h-6 text-yellow-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                    <svg class="w-6 h-6 text-yellow-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                    <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-20 text-center">
                <p class="text-gray-400">&copy; 2021 SkrillMart Incorporated, Kenya.</p>
            </div>
        </div>
@endsection
