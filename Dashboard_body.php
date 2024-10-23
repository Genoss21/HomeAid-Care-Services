<?php
//include 'config.php';


?>
<div class="flex flex-row h-screen">
    <!--Left Navbar-->
    <?php include 'Dashboard_left_navbar.php' ?>
    <div class="basis-4/5">
        <!--Navbar-->
        <nav class="bg-gray-900 border-gray-200 text-white border-b-2">
            <div class="w-full flex items-center justify-between p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap">Dashboard</span>
                </a>
                <div class="flex md:order-2">
                    <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                        aria-expanded="false"
                        class="md:hidden text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 rounded-lg text-sm p-2.5 me-1">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                    <div class="relative hidden md:block">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search icon</span>
                        </div>
                        <input type="text" id="search-navbar"
                            class="block w-full p-2 ps-10 text-sm text-white border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Search...">
                    </div>
                    <button data-collapse-toggle="navbar-search" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                        aria-controls="navbar-search" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>

        <div class="flex flex-wrap p-8 space-x-8">
            <button type="button"
                class="relative px-32 py-20 bg-center bg-cover bg-no-repeat bg-[url('./Images/Add-Patient.jpg')] bg-gray-200 bg-blend-multiply rounded-lg transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                <div class="inline-flex absolute top-3 left-2">
                    <svg class="w-5 h-5 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14m-7 7V5" />
                    </svg>
                    <p class="uppercase text-justify">Add Patient</p>
                </div>
            </button>

            <button type="button"
                class="relative px-32 py-20 bg-center bg-cover bg-no-repeat bg-[url('./Images/Add-Patient.jpg')] bg-gray-200 bg-blend-multiply rounded-lg transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                <div class="inline-flex absolute top-3 left-2">
                    <svg class="w-5 h-5 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14m-7 7V5" />
                    </svg>
                    <p class="uppercase text-justify">Add Patient</p>
                </div>
            </button>

            <button type="button"
                class="relative px-32 py-20 bg-center bg-cover bg-no-repeat bg-[url('./Images/Add-Nurse.jpg')] bg-gray-200 bg-blend-multiply rounded-lg transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 hover:bg-[url('./Images/Add-Nurse.gif')]">
                <div class="inline-flex absolute top-3 left-2">
                    <svg class="w-5 h-5 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14m-7 7V5" />
                    </svg>
                    <p class="uppercase text-justify">Add Patient</p>
                </div>
            </button>
        </div>
    </div>
</div>